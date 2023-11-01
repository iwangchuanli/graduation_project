package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.StockPile;

public interface StockPileMapper {

	/**
	 * 根据仓库和产品查询所有信息
	 * 
	 * @param storeHouseId
	 *            仓库编号
	 * @param productId
	 *            产品编号
	 * @return
	 */
	List<StockPile> getStockPileByStoreHouseIdAndProductId(@Param("storeHouseId") Integer storeHouseId,
			@Param("productId") String productId);

	/**
	 * 添加一条库存信息
	 * 
	 * @param sp
	 * @return
	 */
	Integer insertStockPile(StockPile sp);

	/**
	 * 根据仓库id和产品id修改产品数量和均价
	 * 
	 * @param storeHouseId
	 *            仓库id
	 * @param productId
	 *            产品id
	 * @param quantity
	 *            数量
	 * @param costPrice
	 *            均价
	 * @return
	 */
	Integer updateStockPileCountAvgByStoreHouseAndProduct(@Param("storeHouseId") Integer storeHouseId,
			@Param("pros") String prosPecification, @Param("productId") String productId,
			@Param("quantity") Integer quantity, @Param("costPrice") Double costPrice);

	/**
	 * 根据产品编号和仓库编号查询库存信息中是否有值
	 * 
	 * @param productId
	 *            产品编号
	 * @param storeHouseId
	 *            仓库编号
	 * @return
	 */
	Integer hasProductByProductIdAndStoreHouseId(@Param("productId") String productId,
			@Param("storeHouseId") Integer storeHouseId);

	/**
	 * 根据仓库编号和产品编号减少数量
	 * 
	 * @param storeHouseId
	 *            仓库编号
	 * @param productId
	 *            产品编号
	 * @param count
	 *            数量
	 * @return
	 */
	Integer cutbackStockPile(@Param("storeHouseId") Integer storeHouseId, @Param("productId") String productId,
			@Param("count") Integer count);

}
