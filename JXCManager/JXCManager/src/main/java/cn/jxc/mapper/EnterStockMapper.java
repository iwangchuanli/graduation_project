package cn.jxc.mapper;

import java.util.Date;
import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.EnterStock;

public interface EnterStockMapper {

	/**
	 * ��ѯ��ⵥ
	 * 
	 * @param singleNo
	 *            ��ⵥ��ģ����ѯ
	 * @param shName
	 *            �ֿ�����
	 * @param start
	 *            ��⿪ʼʱ��
	 * @param end
	 *            ������ʱ��
	 * @return
	 */
	List<EnterStock> getEnterStockBySuless(@Param("singleNo") String singleNo, @Param("shName") String shName,
			@Param("start") String start, @Param("end") String end);

	/**
	 * �����Ϣ�����
	 * 
	 * @param enterStock
	 * @return
	 */
	int enterStockAdd(@Param("es") EnterStock enterStock);

	/**
	 * ִ����˲���
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @param emp
	 *            �����
	 * @param date
	 *            ���ʱ��
	 * @param reviewStatus
	 *            ���״̬
	 * @param reason
	 *            ���ԭ��
	 * @return
	 */
	int enterStockReview(@Param("singleNo") String singleNo, @Param("emp") String emp, @Param("date") Date date,
			@Param("reviewStatus") Integer reviewStatus, @Param("reason") String reason);

	/**
	 * �����Ϣ���޸�
	 * 
	 * @param enterStock
	 * @return
	 */
	int enterStockUpdate(@Param("es") EnterStock enterStock);

	/**
	 * ������ⵥ��ɾ��һ������¼
	 * 
	 * @param singleNo
	 * @return
	 */
	int enterStockDelete(@Param("singleNo") String singleNo);

	/**
	 * ������ⵥ�Ų�ѯ�������
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @return �������
	 */
	int getEnterStockTypeByESS(@Param("singleNo") String singleNo);

}
