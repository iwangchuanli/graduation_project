package cn.jxc.service;

import java.util.Date;
import java.util.List;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.PurchaseRequest;

/**
 * �ɹ����� service
 * 
 * @author Administrator
 *
 */
public interface PurchaseRequestService {

	/**
	 * ��Ӳɹ�����
	 * 
	 * @param purchaseRequest
	 *            �ɹ���������
	 * @return �Ƿ�ɹ�
	 */
	int addPurchaseRequest(PurchaseRequest purchaseRequest);

	/**
	 * ��ҳ+ģ����ѯ�ɹ�����
	 * 
	 * @param num
	 *            ҳ��
	 * @param empNo
	 *            ������
	 * @param singleNo
	 *            ����
	 * @param suppId
	 *            ��Ӧ��
	 * @return
	 */
	PageInfo<PurchaseRequest> getPurchaseRequestByBlurry(Integer num, Integer pageSize, String empNo, String singleNo,
			String suppName);

	/**
	 * ���ݵ��Ų�ѯ�ɹ����뵥
	 * 
	 * @param no
	 *            ����
	 * @return �ɹ��������
	 */
	PurchaseRequest getPurchaseRequestBySingleNo(String singleNo);

	/**
	 * ���ݶ���״̬��ѯ�ɹ���
	 * 
	 * @param status
	 *            �ɹ���״̬
	 * @return �ɹ�������
	 */
	List<PurchaseRequest> getPurchaseRequestByOrderStatus(Integer status);

	/**
	 * ���²������״̬
	 * 
	 * @param singleNo
	 *            ���뵥��
	 * @param reviewEmp
	 *            �����
	 * @param date
	 *            ʱ��
	 * @param status
	 *            ״̬
	 * @param reason
	 *            ԭ��
	 * @return �Ƿ�ɹ�
	 */
	int updateDeptReivewStatus(String singleNo, String reviewEmp, Date date, Integer status, String reason);

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
	int updateFinancialReivewStatus(String singleNo, String reviewEmp, Date date, Integer status, String reason);

	/**
	 * �޸Ĳɹ�������Ϣ
	 * 
	 * @param purchaseRequest
	 * @return
	 */
	int updatePurchaseRequest(PurchaseRequest purchaseRequest);

	/**
	 * ���ݶ����ź�״̬�޸Ķ���״̬
	 * 
	 * @param singleNo
	 * @param status
	 * @return
	 */
	int updatePurchaseOrderStatus(String singleNo, Integer status);

	/**
	 * ���ݲɹ�����ɾ�����������Ϣ
	 * 
	 * @param singleNo
	 *            �ɹ�����
	 * @return
	 */
	int deletePurchaseRequest(String singleNo);

}
