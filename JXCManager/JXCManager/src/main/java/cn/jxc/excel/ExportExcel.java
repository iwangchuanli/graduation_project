package cn.jxc.excel;

import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.OutputStream;
import java.lang.reflect.Field;
import java.lang.reflect.Method;
import java.util.Collections;
import java.util.Comparator;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import javax.servlet.http.HttpServletResponse;

import org.apache.commons.lang3.StringUtils;
import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.CellStyle;
import org.apache.poi.ss.usermodel.Comment;
import org.apache.poi.ss.usermodel.DataFormat;
import org.apache.poi.ss.usermodel.Font;
import org.apache.poi.ss.usermodel.IndexedColors;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.ss.util.CellRangeAddress;
import org.apache.poi.xssf.streaming.SXSSFWorkbook;
import org.apache.poi.xssf.usermodel.XSSFClientAnchor;
import org.apache.poi.xssf.usermodel.XSSFRichTextString;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

import com.google.common.collect.Lists;

public class ExportExcel {

	private static Logger log = LoggerFactory.getLogger(ExportExcel.class);

	/**
	 * ����������
	 */
	private SXSSFWorkbook wb;

	/**
	 * ���������
	 */
	private Sheet sheet;

	/**
	 * ��ʽ�б�
	 */
	private Map<String, CellStyle> styles;

	/**
	 * ��ǰ�к�
	 */
	private int rownum;

	/**
	 * ע���б�Object[]{ ExcelField, Field/Method }��
	 */
	List<Object[]> annotationList = Lists.newArrayList();

	/**
	 * ���캯��
	 * 
	 * @param title
	 *            �����⣬��"��ֵ",��ʾ�ޱ���
	 * @param cls
	 *            ʵ�����ͨ��annotation.ExportField��ȡ����
	 */
	public ExportExcel(String title, Class<?> cls) {
		this(title, cls, 1);
	}

	/**
	 * ���캯��
	 * 
	 * @param title
	 *            �����⣬��"��ֵ",��ʾ�ޱ���
	 * @param cls
	 *            ʵ�����ͨ��annotation.ExportField��ȡ����
	 * @param type
	 *            �������� 1 ����ģ�� 2 ��������
	 * @param groups
	 *            �������
	 */
	public ExportExcel(String title, Class<?> cls, int type, int... groups) {
		// Get annotation field
		Field[] fs = cls.getDeclaredFields();
		for (Field f : fs) {
			// ��ȡ�ֶ��ϼӵ�@Excelע��
			ExcelField ef = f.getAnnotation(ExcelField.class);
			if (ef != null && (ef.type() == 0 || ef.type() == type)) {
				// �����ֶ�ע�������õ�groups���з���
				if (groups != null && groups.length > 0) {
					boolean inGroup = false;
					for (int g : groups) {
						if (inGroup) {
							break;
						}
						for (int efg : ef.groups()) {
							if (g == efg) {
								inGroup = true;
								annotationList.add(new Object[] { ef, f });
								break;
							}
						}
					}
				} else {
					// ����group���ԣ���ֱ�ӽ��ֶκͶ�Ӧ��ע����뵽һ��ȫ�ֵ�ע�������У�����֮�����ͳһ������
					annotationList.add(new Object[] { ef, f });
				}
			}
		}
		// Get annotation method
		Method[] ms = cls.getDeclaredMethods();
		for (Method m : ms) {
			// ��ȡ�����ϵ�ע��
			ExcelField ef = m.getAnnotation(ExcelField.class);
			if (ef != null && (ef.type() == 0 || ef.type() == type)) {
				if (groups != null && groups.length > 0) {
					boolean inGroup = false;
					for (int g : groups) {
						if (inGroup) {
							break;
						}
						for (int efg : ef.groups()) {
							if (g == efg) {
								inGroup = true;
								annotationList.add(new Object[] { ef, m });
								break;
							}
						}
					}
				} else {
					annotationList.add(new Object[] { ef, m });
				}
			}
		}
		// ���ֶν������� Field sorting
		Collections.sort(annotationList, new Comparator<Object[]>() {
			public int compare(Object[] o1, Object[] o2) {
				return new Integer(((ExcelField) o1[0]).sort()).compareTo(new Integer(((ExcelField) o2[0]).sort()));
			};
		});
		// Initialize
		List<String> headerList = Lists.newArrayList();
		for (Object[] os : annotationList) {
			// ��ȡע��title����ֵ
			String t = ((ExcelField) os[0]).title();
			// ����ǵ�������ȥ��ע��
			if (type == 1) {
				String[] ss = StringUtils.split(t, "**", 2);
				if (ss.length == 2) {
					t = ss[0];
				}
			}
			// ���ֶ����Ʊ�����һ��list�У�������ʼ������ʹ��
			headerList.add(t);
		}
		initialize(title, headerList);
	}

	/**
	 * ���캯��
	 * 
	 * @param title
	 *            �����⣬������ֵ������ʾ�ޱ���
	 * @param headers
	 *            ��ͷ����
	 */
	public ExportExcel(String title, String[] headers) {
		initialize(title, Lists.newArrayList(headers));
	}

	/**
	 * ���캯��
	 * 
	 * @param title
	 *            �����⣬������ֵ������ʾ�ޱ���
	 * @param headerList
	 *            ��ͷ�б�
	 */
	public ExportExcel(String title, List<String> headerList) {
		initialize(title, headerList);
	}

	/**
	 * ��ʼ������
	 * 
	 * @param title
	 *            �����⣬������ֵ������ʾ�ޱ���
	 * @param headerList
	 *            ��ͷ�б�
	 */
	private void initialize(String title, List<String> headerList) {
		this.wb = new SXSSFWorkbook(500);
		this.sheet = wb.createSheet("Export");
		this.styles = createStyles(wb);
		// Create title
		if (StringUtils.isNotBlank(title)) {
			Row titleRow = sheet.createRow(rownum++);
			titleRow.setHeightInPoints(30);
			Cell titleCell = titleRow.createCell(0);
			titleCell.setCellStyle(styles.get("title"));
			titleCell.setCellValue(title);
			sheet.addMergedRegion(new CellRangeAddress(titleRow.getRowNum(), titleRow.getRowNum(), titleRow.getRowNum(),
					headerList.size() - 1));
		}
		// Create header
		if (headerList == null) {
			throw new RuntimeException("headerList not null!");
		}
		Row headerRow = sheet.createRow(rownum++);
		headerRow.setHeightInPoints(16);
		for (int i = 0; i < headerList.size(); i++) {
			Cell cell = headerRow.createCell(i);
			cell.setCellStyle(styles.get("header"));
			String[] ss = StringUtils.split(headerList.get(i), "**", 2);
			if (ss.length == 2) {
				cell.setCellValue(ss[0]);
				Comment comment = this.sheet.createDrawingPatriarch()
						.createCellComment(new XSSFClientAnchor(0, 0, 0, 0, (short) 3, 3, (short) 5, 6));
				comment.setString(new XSSFRichTextString(ss[1]));
				cell.setCellComment(comment);
			} else {
				cell.setCellValue(headerList.get(i));
			}
			sheet.autoSizeColumn(i);
		}
		for (int i = 0; i < headerList.size(); i++) {
			int colWidth = sheet.getColumnWidth(i) * 2;
			sheet.setColumnWidth(i, colWidth < 3000 ? 3000 : colWidth);
		}
		log.debug("Initialize success.");
	}

	/**
	 * ���������ʽ
	 * 
	 * @param wb
	 *            ����������
	 * @return ��ʽ�б�
	 */
	private Map<String, CellStyle> createStyles(Workbook wb) {
		Map<String, CellStyle> styles = new HashMap<String, CellStyle>();

		CellStyle style = wb.createCellStyle();
		style.setAlignment(CellStyle.ALIGN_CENTER);
		style.setVerticalAlignment(CellStyle.VERTICAL_CENTER);
		Font titleFont = wb.createFont();
		titleFont.setFontName("Arial");
		titleFont.setFontHeightInPoints((short) 16);
		titleFont.setBoldweight(Font.BOLDWEIGHT_BOLD);
		style.setFont(titleFont);
		styles.put("title", style);

		style = wb.createCellStyle();
		style.setVerticalAlignment(CellStyle.VERTICAL_CENTER);
		style.setBorderRight(CellStyle.BORDER_THIN);
		style.setRightBorderColor(IndexedColors.GREY_50_PERCENT.getIndex());
		style.setBorderLeft(CellStyle.BORDER_THIN);
		style.setLeftBorderColor(IndexedColors.GREY_50_PERCENT.getIndex());
		style.setBorderTop(CellStyle.BORDER_THIN);
		style.setTopBorderColor(IndexedColors.GREY_50_PERCENT.getIndex());
		style.setBorderBottom(CellStyle.BORDER_THIN);
		style.setBottomBorderColor(IndexedColors.GREY_50_PERCENT.getIndex());
		Font dataFont = wb.createFont();
		dataFont.setFontName("Arial");
		dataFont.setFontHeightInPoints((short) 10);
		style.setFont(dataFont);
		styles.put("data", style);

		style = wb.createCellStyle();
		style.cloneStyleFrom(styles.get("data"));
		style.setAlignment(CellStyle.ALIGN_LEFT);
		styles.put("data1", style);

		style = wb.createCellStyle();
		style.cloneStyleFrom(styles.get("data"));
		style.setAlignment(CellStyle.ALIGN_CENTER);
		styles.put("data2", style);

		style = wb.createCellStyle();
		style.cloneStyleFrom(styles.get("data"));
		style.setAlignment(CellStyle.ALIGN_RIGHT);
		styles.put("data3", style);

		style = wb.createCellStyle();
		style.cloneStyleFrom(styles.get("data"));
		// style.setWrapText(true);
		style.setAlignment(CellStyle.ALIGN_CENTER);
		style.setFillForegroundColor(IndexedColors.GREY_50_PERCENT.getIndex());
		style.setFillPattern(CellStyle.SOLID_FOREGROUND);
		Font headerFont = wb.createFont();
		headerFont.setFontName("Arial");
		headerFont.setFontHeightInPoints((short) 10);
		headerFont.setBoldweight(Font.BOLDWEIGHT_BOLD);
		headerFont.setColor(IndexedColors.WHITE.getIndex());
		style.setFont(headerFont);
		styles.put("header", style);

		return styles;
	}

	/**
	 * ���һ��
	 * 
	 * @return �ж���
	 */
	public Row addRow() {
		return sheet.createRow(rownum++);
	}

	/**
	 * ���һ����Ԫ��
	 * 
	 * @param row
	 *            ��ӵ���
	 * @param column
	 *            ����к�
	 * @param val
	 *            ���ֵ
	 * @return ��Ԫ�����
	 */
	public Cell addCell(Row row, int column, Object val) {
		return this.addCell(row, column, val, 0, Class.class);
	}

	/**
	 * ���һ����Ԫ��
	 * 
	 * @param row
	 *            ��ӵ���
	 * @param column
	 *            ����к�
	 * @param val
	 *            ���ֵ
	 * @param align
	 *            ���뷽ʽ��1������2�����У�3�����ң�
	 * @return ��Ԫ�����
	 */
	public Cell addCell(Row row, int column, Object val, int align, Class<?> fieldType) {
		Cell cell = row.createCell(column);
		CellStyle style = styles.get("data" + (align >= 1 && align <= 3 ? align : ""));
		try {
			if (val == null) {
				cell.setCellValue("");
			} else if (val instanceof String) {
				cell.setCellValue((String) val);
			} else if (val instanceof Integer) {
				cell.setCellValue((Integer) val);
			} else if (val instanceof Long) {
				cell.setCellValue((Long) val);
			} else if (val instanceof Double) {
				cell.setCellValue((Double) val);
			} else if (val instanceof Float) {
				cell.setCellValue((Float) val);
			} else if (val instanceof Date) {
				DataFormat format = wb.createDataFormat();
				style.setDataFormat(format.getFormat("yyyy-MM-dd"));
				cell.setCellValue((Date) val);
			} else {
				if (fieldType != Class.class) {
					cell.setCellValue((String) fieldType.getMethod("setValue", Object.class).invoke(null, val));
				} else {
					cell.setCellValue((String) Class
							.forName(this.getClass().getName().replaceAll(this.getClass().getSimpleName(),
									"fieldtype." + val.getClass().getSimpleName() + "Type"))
							.getMethod("setValue", Object.class).invoke(null, val));
				}
			}
		} catch (Exception ex) {
			log.info("Set cell value [" + row.getRowNum() + "," + column + "] error: " + ex.toString());
			cell.setCellValue(val.toString());
		}
		cell.setCellStyle(style);
		return cell;
	}

	/**
	 * ������ݣ�ͨ��annotation.ExportField������ݣ�
	 * 
	 * @return list �����б�
	 */
	public <E> ExportExcel setDataList(List<E> list) {
		for (E e : list) {
			int colunm = 0;
			Row row = this.addRow();
			StringBuilder sb = new StringBuilder();
			for (Object[] os : annotationList) {
				ExcelField ef = (ExcelField) os[0];
				Object val = null;
				// Get entity value
				try {
					if (StringUtils.isNotBlank(ef.value())) {
						val = Reflections.invokeGetter(e, ef.value());
					} else {
						if (os[1] instanceof Field) {
							val = Reflections.invokeGetter(e, ((Field) os[1]).getName());
						} else if (os[1] instanceof Method) {
							val = Reflections.invokeMethod(e, ((Method) os[1]).getName(), new Class[] {},
									new Object[] {});
						}
					}
				} catch (Exception ex) {
					// Failure to ignore
					log.info(ex.toString());
					val = "";
				}
				this.addCell(row, colunm++, val, ef.align(), ef.fieldType());
				sb.append(val + ", ");
			}
			log.debug("Write success: [" + row.getRowNum() + "] " + sb.toString());
		}
		return this;
	}

	/**
	 * ���������
	 * 
	 * @param os
	 *            ���������
	 */
	public ExportExcel write(OutputStream os) throws IOException {
		wb.write(os);
		return this;
	}

	/**
	 * ������ͻ���
	 * 
	 * @param fileName
	 *            ����ļ���
	 */
	public ExportExcel write(HttpServletResponse response, String fileName) throws IOException {
		response.reset();
		response.setContentType("application/octet-stream; charset=utf-8");
		response.setHeader("Content-Disposition", "attachment; filename=" + Encodes.urlEncode(fileName));
		write(response.getOutputStream());
		return this;
	}

	/**
	 * ������ļ�
	 * 
	 * @param name
	 *            ����ļ���
	 */
	public ExportExcel writeFile(String name) throws FileNotFoundException, IOException {
		FileOutputStream os = new FileOutputStream(name);
		this.write(os);
		return this;
	}

	/**
	 * ������ʱ�ļ�
	 */
	public ExportExcel dispose() {
		wb.dispose();
		return this;
	}

}
