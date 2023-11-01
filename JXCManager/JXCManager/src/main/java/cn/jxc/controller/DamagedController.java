package cn.jxc.controller;

import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.apache.ibatis.annotations.Param;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import com.alibaba.fastjson.JSON;
import com.alibaba.fastjson.JSONObject;
import com.github.pagehelper.PageInfo;

import cn.jxc.excel.ExportExcel;
import cn.jxc.pojo.DamagedRequest;
import cn.jxc.pojo.DamagedRequestDetail;
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.StockPile;
import cn.jxc.pojo.StoreHouse;
import cn.jxc.service.DamagedRequestDetailService;
import cn.jxc.service.DamagedRequestService;
import cn.jxc.service.EmployeeService;
import cn.jxc.service.StockPileService;
import cn.jxc.service.StoreHouseService;
import cn.jxc.util.OrderGenerator;

/**
 * ���������
 * 
 * @author lw
 *
 */
@Controller
public class DamagedController {

	@Autowired
	private EmployeeService employeeservice;
	@Autowired
	private StoreHouseService storehouseservice;
	@Autowired
	private DamagedRequestService damagedRequestService;
	@Autowired
	private DamagedRequestDetailService damagedRequestDetailService;
	@Autowired
	private StockPileService stockPileService;

	/**
	 * ��ת��������ҳ
	 * 
	 * @param damagedRequestId
	 *            ����id
	 * @param requestEmp
	 *            ������
	 * @param pageNo
	 *            ҳ��
	 * @param model
	 * @return
	 */
	@RequestMapping("/godamaged")
	public String godamaged(@RequestParam(value = "damagedRequestId", required = false) String damagedRequestId,
			@RequestParam(value = "requestEmp", required = false) String requestEmp, Integer pageNo, Model model,
			@RequestParam(value = "startDate", required = false) String startDate,
			@RequestParam(value = "endDate", required = false) String endDate) {
		if (pageNo == null || pageNo == 0) {
			pageNo = 1;
		}
		PageInfo<DamagedRequest> damged = damagedRequestService.getDamageRequest(damagedRequestId, requestEmp, pageNo,
				10, startDate, endDate);
		model.addAttribute("damged", damged);
		model.addAttribute("damagedRequestId", damagedRequestId);
		model.addAttribute("requestEmp", requestEmp);
		model.addAttribute("startDate", startDate);
		model.addAttribute("endDate", endDate);
		return "damaged/Damaged";
	}

	/**
	 * ��ת����������ҳ��
	 * 
	 * @param model
	 * @return
	 */
	@RequestMapping("damagedrequestadd")
	public String addDamafedRequest(Model model) {
		// Ա����Ϣ
		PageInfo<Employee> employees = employeeservice.getEmployeeAll(1, 10000);
		// �ֿ���Ϣ
		String orderNo = OrderGenerator.getOrderNo("BS");
		List<StoreHouse> storehouse = storehouseservice.getStoreHouselist();
		model.addAttribute("employees", employees.getList());
		model.addAttribute("storehouse", storehouse);
		model.addAttribute("orderNo", orderNo);
		return "damaged/DamagedRequestadd";
	}

	/**
	 * �������� ʵ����ӹ���
	 * 
	 * @param dr
	 *            ���𵥾�
	 * @param products
	 *            ����Ĳ�Ʒ��Ϣ
	 * @return
	 */
	@RequestMapping("AddDamageRequest")
	public String AddDamafedRequest(DamagedRequest dr, String products) {
		List<DamagedRequestDetail> requisitionDetail = JSONObject.parseArray(products, DamagedRequestDetail.class);
		dr.setDamagedrequestdetail(requisitionDetail);
		dr.setRequestTime(new Date());
		int result = damagedRequestService.AddDamagedRequest(dr);
		if (result > 0) { // ʧ��
			return "/damagedrequestadd";
		} else { // �ɹ�
			return "redirect:/godamaged";
		}
	}

	/**
	 * ���ݲֿ��ź�ҳ���ȡ����еĲ�Ʒ��Ϣ
	 * 
	 * @param storeHouseId
	 *            �ֿ���
	 * @param pageNo
	 *            ҳ��
	 * @return
	 */
	@RequestMapping("/getStockPileByStoreHouseId")
	@ResponseBody
	public String getStockPileByStoreHouseId(@RequestParam("storeHouseId") Integer storeHouseId,
			@RequestParam(value = "pageNo", required = false) Integer pageNo) {
		System.out.println(storeHouseId+"1111111111111111111����ajax������ѯ���1111111111111111111111111111111");
		if (pageNo == null || pageNo == 0) {
			pageNo = 1;
		}
		PageInfo<StockPile> stockPileAll = stockPileService.getStockPileAll(storeHouseId, null, pageNo, 2);
		return JSON.toJSONString(stockPileAll);
	}

	/**
	 * ������ⵥ�Ų�ѯ��ⵥ
	 * 
	 * @param id
	 *            ��ⵥ��
	 * @return
	 */
	@RequestMapping("getDamagedRequestById")
	@ResponseBody
	public String getDamagedRequestById(@RequestParam("id") String id,
			@RequestParam(value = "pageNo", required = false) Integer pageNo) {
		if (null == pageNo) {
			pageNo = 1;
		}
		DamagedRequest damagedRequest = damagedRequestService.getDamageRequest(id, null, 1, 1, null, null).getList()
				.get(0);
		PageInfo<DamagedRequestDetail> pageInfos = damagedRequestDetailService.getDamagedRequestDetailsByDRID(id,
				pageNo, 3);
		pageInfos.getList().get(0).setDamagedRequest(damagedRequest);
		return JSON.toJSONString(pageInfos);
	}

	@RequestMapping("lw")
	@ResponseBody
	public String lw(String id) {
		int a = damagedRequestService.getDDZT(id);
		if (a == 2) {
			return "1";
		} else {
			return "0";
		}
	}

	/**
	 * ���ݱ���idɾ������
	 * 
	 * @param damagedid
	 *            ����id
	 * @param model
	 * @return
	 */
	@RequestMapping("deleteDamagedRequest")
	public String deleteDamagedRequest(String damagedid, Model model) {
		int a = damagedRequestService.DeleteDamagedRequest(damagedid);
		if (a > 0) {// �ɹ�
			return "redirect:/godamaged";
		} else {
			model.addAttribute("message", "ɾ�����𵥴���=============");
			return "error";
		}
	}

	/**
	 * �Զ���״̬���в��� �����ύ ȡ������
	 * 
	 * @param singleNo
	 *            ������
	 * @param type
	 *            ����
	 * @return
	 */
	@RequestMapping("/operaDamaged")
	public String operaDamaged(@Param("singleNo") String singleNo, @Param("type") Integer type, Model model) {
		int a = damagedRequestService.updateDamagedRequestOrderTypeById(singleNo, type);
		if (type == 7) { // ���𶩵���� ���ٿ������
			damagedRequestService.updateStockPileSumByDamagedId(singleNo);
		}
		if (a > 0) {
			return "redirect:/godamaged";
		}
		model.addAttribute("message", "���𵥲������ִ���  ����Ϊɶ��Ҳ�����");
		return "error";
	}

	/**
	 * ��˱���
	 * 
	 * @param singleNo
	 *            ���𵥱��
	 * @param status
	 *            ״̬
	 * @param reason
	 *            ԭ��
	 * @return
	 */
	@RequestMapping("/damagedReview")
	public String damagedReview(String singleNo, Integer status, String reason, HttpSession session) {
		Employee employee = (Employee) session.getAttribute("loginEmp");
		damagedRequestService.damagedReview(singleNo, employee.getEmpLoginName(), status, reason);
		if (status == 2) { // ���ͨ��
			damagedRequestService.updateDamagedRequestOrderTypeById(singleNo, 9);
		} else if (status == 3) { // ���û��ͨ��
			damagedRequestService.updateDamagedRequestOrderTypeById(singleNo, 5);
		}
		return "redirect:/godamaged";
	}

	/**
	 * ��ת���޸ı���ҳ��
	 * 
	 * @param model
	 * @param damagedRequestId
	 *            ������
	 * @return
	 */
	@RequestMapping("/goDamagedUpdate")
	public String goDamagedUpdate(Model model, String damagedRequestId) {
		DamagedRequest damagedRequest = damagedRequestService.getDamageRequest(damagedRequestId, null, 1, 1, null, null)
				.getList().get(0);
		List<DamagedRequestDetail> drdByDRID = damagedRequestDetailService.getDRDByDRID(damagedRequestId);
		List<Employee> list = employeeservice.getEmployeeAll(1, 99999).getList();
		List<StoreHouse> storeHouselist = storehouseservice.getStoreHouselist();
		model.addAttribute("damagedRequest", damagedRequest);
		model.addAttribute("damagedRequestDetails", drdByDRID);
		model.addAttribute("employees", list);
		model.addAttribute("storehouses", storeHouselist);
		return "damaged/DamagedUpdate";
	}

	/**
	 * �����޸�
	 * 
	 * @param damagedRequest
	 *            ���𵥶���
	 * @param products
	 *            ��������
	 * @return ��ת��ҳ��
	 */
	@RequestMapping("/damageRequestUpdate")
	public String damageRequestUpdate(DamagedRequest damagedRequest, String products, Model model) {
		List<DamagedRequestDetail> parseArray = JSONObject.parseArray(products, DamagedRequestDetail.class);
		damagedRequest.setDamagedrequestdetail(parseArray);
		int a = damagedRequestService.updateDamagedRequest(damagedRequest);
		if (a > 0) { // �޸ĳɹ�
			return "redirect:/godamaged";
		}
		model.addAttribute("message", "�޸ı��𵥴���====����Ϊɶ�Լ���");
		return "error";
	}

	@RequestMapping("/delDamagedRequestDetailById")
	@ResponseBody
	public String delDamagedRequestDetailById(int id) {
		int a = damagedRequestDetailService.delDamagedRequestDetailById(id);
		if (a > 0) { // ɾ���ɹ�
			return "1";
		}
		return "0";
	}

	/**
	 * ����excel ��pageNo������ǰ û�е�������
	 * 
	 * @param pageNo
	 * @param request
	 * @param response
	 * @throws IOException
	 */
	@RequestMapping("/damagedExport")
	public void requisitionExportExcel(@RequestParam(value = "pageNo", required = false) Integer pageNo,
			@RequestParam(value = "damagedRequestId", required = false) String damagedRequestId,
			@RequestParam(value = "requestEmp", required = false) String requestEmp,
			@RequestParam(value = "startDate", required = false) String startDate,
			@RequestParam(value = "endDate", required = false) String endDate, HttpServletRequest request,
			HttpServletResponse response) throws IOException {
		// ��ȡ����
		List<DamagedRequest> list = null;
		if (null == pageNo) {
			list = damagedRequestService.getDamageRequest(null, null, 1, 99999, null, null).getList();
		} else {
			list = damagedRequestService.getDamageRequest(damagedRequestId, requestEmp, pageNo, 10, startDate, endDate)
					.getList();
		}
		// ��ȡ�ļ���
		String fileName = "Damaged" + new SimpleDateFormat("MMddhhmmsss").format(new Date())
				+ String.valueOf((int) (Math.random() * 9 + 1) * 1000) + ".xlsx";
		// ����excel��������
		new ExportExcel(null, DamagedRequest.class, 1).setDataList(list).write(response, fileName).dispose();
	}

}
