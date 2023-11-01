package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.StockPile;

public interface StockPileMapper {

	/**
	 * ���ݲֿ�Ͳ�Ʒ��ѯ������Ϣ
	 * 
	 * @param storeHouseId
	 *            �ֿ���
	 * @param productId
	 *            ��Ʒ���
	 * @return
	 */
	List<StockPile> getStockPileByStoreHouseIdAndProductId(@Param("storeHouseId") Integer storeHouseId,
			@Param("productId") String productId);

	/**
	 * ���һ�������Ϣ
	 * 
	 * @param sp
	 * @return
	 */
	Integer insertStockPile(StockPile sp);

	/**
	 * ���ݲֿ�id�Ͳ�Ʒid�޸Ĳ�Ʒ�����;���
	 * 
	 * @param storeHouseId
	 *            �ֿ�id
	 * @param productId
	 *            ��Ʒid
	 * @param quantity
	 *            ����
	 * @param costPrice
	 *            ����
	 * @return
	 */
	Integer updateStockPileCountAvgByStoreHouseAndProduct(@Param("storeHouseId") Integer storeHouseId,
			@Param("pros") String prosPecification, @Param("productId") String productId,
			@Param("quantity") Integer quantity, @Param("costPrice") Double costPrice);

	/**
	 * ���ݲ�Ʒ��źͲֿ��Ų�ѯ�����Ϣ���Ƿ���ֵ
	 * 
	 * @param productId
	 *            ��Ʒ���
	 * @param storeHouseId
	 *            �ֿ���
	 * @return
	 */
	Integer hasProductByProductIdAndStoreHouseId(@Param("productId") String productId,
			@Param("storeHouseId") Integer storeHouseId);

	/**
	 * ���ݲֿ��źͲ�Ʒ��ż�������
	 * 
	 * @param storeHouseId
	 *            �ֿ���
	 * @param productId
	 *            ��Ʒ���
	 * @param count
	 *            ����
	 * @return
	 */
	Integer cutbackStockPile(@Param("storeHouseId") Integer storeHouseId, @Param("productId") String productId,
			@Param("count") Integer count);

}
