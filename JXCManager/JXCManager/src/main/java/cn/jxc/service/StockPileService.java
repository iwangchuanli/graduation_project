package cn.jxc.service;


import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.StockPile;

public interface StockPileService {

	/**
	 * ��ȡ���п����Ϣ����������ѯ
	 * 
	 * @param storeHouseId
	 *            �ֿ�id
	 * @param productId
	 *            ��Ʒid
	 * @param pageNo
	 *            ҳ��
	 * @param pageSize
	 *            ҳ��
	 * @return
	 */
	PageInfo<StockPile> getStockPileAll(Integer storeHouseId, String productId, Integer pageNo, Integer pageSize);

	/**
	 * ��ӿ����Ϣ
	 * 
	 * @param sp
	 *            ������
	 * @return
	 */
	Integer insertStockPile(StockPile sp);

	/**
	 * �޸Ŀ�������Լ�����
	 * 
	 * @param storeHouseId
	 *            �ֿ�id
	 * @param prosPecification
	 *            ����
	 * @param productId
	 *            ��Ʒid
	 * @param quantity
	 *            ����
	 * @param costPrice
	 *            ����
	 * @return
	 */
	Integer updateStockPileCountAvgByStoreHouseAndProduct(Integer storeHouseId, String prosPecification,
			String productId, Integer quantity, Double costPrice);

	/**
	 * ���ݲֿ��źͲ�Ʒ��Ų�ѯ�Ƿ�������
	 * 
	 * @param productId
	 *            ��Ʒ���
	 * @param storeHouseId
	 *            �ֿ���
	 * @return
	 */
	Integer hasProductByProductIdAndStoreHouseId(String productId, Integer storeHouseId);

	/**
	 * ���ݲֿ��źͲ�Ʒ��ż������� �����ʱ��
	 * 
	 * @param storeHouseId
	 *            �ֿ���
	 * @param productId
	 *            ��Ʒ���
	 * @param count
	 *            ����
	 * @return
	 */
	Integer cutbackStockPile(Integer storeHouseId, String productId, Integer count);

}
