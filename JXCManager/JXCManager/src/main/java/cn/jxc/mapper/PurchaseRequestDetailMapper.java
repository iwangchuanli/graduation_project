package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.PurchaseRequestDetail;

public interface PurchaseRequestDetailMapper {

	/**
	 * ��Ӳɹ�����
	 * 
	 * @param purchaseRequestDetail
	 * @return
	 */
	int purchaseRequestDetailAdd(@Param("prd") PurchaseRequestDetail purchaseRequestDetail);

	/**
	 * ���ݲɹ����뵥�Ų�ѯ������ϸ
	 * 
	 * @param singleNo
	 * @return
	 */
	List<PurchaseRequestDetail> getPurchaseRequestDetailBySingleNo(@Param("singleNo") String singleNo);

	/**
	 * ������ϸidɾ��һ����ϸ
	 * 
	 * @param id
	 * @return ������Ӱ�������
	 */
	int delPurchaseRequestDetail(int id);

	/**
	 * ���ݲɹ����źͲ�Ʒ����޸Ĳɹ���ϸ�������ͼ۸�
	 * @param singleNo  �ɹ�����
	 * @param productId ��Ʒ���
	 * @return
	 */
	int updatePurchaseRequestDetailBySingleNoAndProductId(@Param("singleNo") String singleNo,
			@Param("productId") String productId);
	
	/**
	 * ���ݲɹ�����ɾ��������ϸ
	 * @param singleNo
	 * @return
	 */
	int delPurchaseRequestDetailBYSingleNo( String singleNo);

}
