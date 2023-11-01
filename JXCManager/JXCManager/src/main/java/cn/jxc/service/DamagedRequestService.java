package cn.jxc.service;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.DamagedRequest;

public interface DamagedRequestService {

	/**
	 * 
	 * ��ѯ���кͷ�ҳ
	 * 
	 * @param id
	 * @param name
	 * @return
	 */
	PageInfo<DamagedRequest> getDamageRequest(String damagedid, String damagredname, Integer pageNo, Integer pageSize,String startDate,String endDate);

	/**
	 * ��ӱ��𵥾�
	 * 
	 * @param dr
	 *            ���𵥶���
	 * @return
	 */
	int AddDamagedRequest(DamagedRequest dr);

	/**
	 * ���ݵ���idɾ������
	 * 
	 * @param id
	 *            ����id
	 * @return
	 */
	int DeleteDamagedRequest(String id);

	/**
	 * ��ѯ����״̬
	 * 
	 * @param id
	 * @return
	 */
	int getDDZT(String id);

	/**
	 * ���ݱ��𵥱���޸Ķ���״̬
	 * 
	 * @param drId
	 *            ���
	 * @param orderStatus
	 *            ����״̬
	 * @return
	 */
	int updateDamagedRequestOrderTypeById(String drId, int orderStatus);

	/**
	 * �������
	 * 
	 * @param singleNo
	 *            ���𵥱��
	 * @param emp
	 *            �����
	 * @param status
	 *            ���״̬
	 * @param reason
	 *            ���ԭ��
	 * @return
	 */
	int damagedReview(String singleNo, String emp, int status, String reason);

	/**
	 * ���ݱ��𵥺ż��ٿ������
	 * 
	 * @param damagedRequestId
	 *            ���𵥺�
	 * @return
	 */
	int updateStockPileSumByDamagedId(String damagedRequestId);
	
	/**
	 * �޸ı��𶩵�
	 * @param damagedRequest ���𶩵�����
	 * @return
	 */
	int updateDamagedRequest(DamagedRequest damagedRequest);

}
