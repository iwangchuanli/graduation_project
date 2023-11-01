package cn.jxc.service;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.PurchaseRequestDetail;

/**
 * �ɹ�������ϸ service
 * @author Administrator
 *
 */
public interface PurchaseRequestDetailService {
	/**
	 * ��Ӳɹ�������ϸ
	 * @param purchaseRequestDetail
	 * @return
	 */
	int addPurchaseRequestDetail(PurchaseRequestDetail purchaseRequestDetail);
	
	/**
	 * ������ϸidɾ����ϸ
	 * @param id
	 * @return
	 */
	int delPurchaseRequestDetail(int id);
	
	/**
	 *  ��ҳ��ѯ�ɹ����뵥�Ĳɹ���ϸ 
	 * @param purchaseRequestNo �ɹ����뵥��
	 * @param num  ҳ��
	 * @param pageSize ҳ����ʾ����
	 * @return
	 */
	PageInfo<PurchaseRequestDetail> getPurchaseRequestDetail(String purchaseRequestNo,Integer num,Integer pageSize);
	
	/**
	 * ���ݲɹ����źͲ�Ʒ����޸Ĳɹ���ϸ�������ͼ۸�
	 * @param singleNo �ɹ�����
	 * @param productId��Ʒ���
	 * @return
	 */
	int updatePurchaseRequestDetailBySingleNoAndProductId(String singleNo,String productId);
	
	/**
	 * ���ݲɹ�����ɾ��������ϸ 
	 * @param singleNo �ɹ�����
	 * @return
	 */
	int delPurchaseRequestDetailBYSingleNo( String singleNo);
	
}
