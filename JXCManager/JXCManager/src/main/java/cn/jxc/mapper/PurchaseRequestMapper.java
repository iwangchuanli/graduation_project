package cn.jxc.mapper;

import java.util.Date;
import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.PurchaseRequest;

/**
 * �ɹ�����mapper
 * 
 * @author Administrator
 *
 */
public interface PurchaseRequestMapper {

	/**
	 * ����������ѯ
	 * 
	 * @param empNo
	 *            ������
	 * @param singleNo
	 *            ���뵥��
	 * @param suppId
	 *            ��Ӧ��
	 * @return
	 */
	List<PurchaseRequest> getPurchaseRequestByBlurry(@Param("empNo") String empNo, @Param("singleNo") String singleNo,
			@Param("suppName") String suppName);

	/**
	 * ���ݲɹ�����״̬��ѯ�ɹ���  ���ղɹ�ʱ�併��
	 * 
	 * @param status
	 *            ״̬
	 * @return ���زɹ�������
	 */
	List<PurchaseRequest> getPurchaseRequestByOrderStatus(@Param("status") Integer status);

	/**
	 * ���
	 * 
	 * @param purchaseRequest
	 * @return
	 */
	int addPurchaseRequest(@Param("pr") PurchaseRequest purchaseRequest);

	/**
	 * �޸Ĳɹ�����Ļ�����Ϣ
	 * 
	 * @param purchaseRequest
	 * @return
	 */
	int updatePurchaseRequest(@Param("pr") PurchaseRequest purchaseRequest);

	/**
	 * �޸Ķ���״̬
	 * 
	 * @param singleNo
	 *            ������
	 * @param status
	 *            ״̬��Ϣ
	 * @return
	 */
	int updatePurchaseOrderStatus(@Param("singleNo") String singleNo, @Param("no") Integer status);

	/**
	 * ������˲���
	 * 
	 * @param singleNo
	 *            ������
	 * @param reviewEmp
	 *            �����
	 * @param date
	 *            ʱ��
	 * @param status
	 *            ���״̬
	 * @param reason
	 *            ԭ��
	 * @return
	 */
	int updateDeptReivewStatus(@Param("singleNo") String singleNo, @Param("emp") String reviewEmp,
			@Param("date") Date date, @Param("no") Integer status, @Param("reason") String reason);

	/**
	 * ������˲���
	 * 
	 * @param singleNo
	 *            ������
	 * @param reviewEmp
	 *            �����
	 * @param date
	 *            ʱ��
	 * @param status
	 *            ���״̬
	 * @param reason
	 *            ԭ��
	 * @return
	 */
	int updateFinancialReivewStatus(@Param("singleNo") String singleNo, @Param("emp") String reviewEmp,
			@Param("date") Date date, @Param("no") Integer status, @Param("reason") String reason);

	/**
	 * ���ݲɹ�����ɾ�����������Ϣ
	 * 
	 * @param singleNo
	 *            �ɹ�����
	 * @return
	 */
	int deletePurchaseRequest(@Param("singleNo") String singleNo);

}
