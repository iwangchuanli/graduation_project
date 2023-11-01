package cn.jxc.service;


import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.StockPile;

public interface StockPileService {

	/**
	 * 获取所有库存信息根据条件查询
	 * 
	 * @param storeHouseId
	 *            仓库id
	 * @param productId
	 *            产品id
	 * @param pageNo
	 *            页码
	 * @param pageSize
	 *            页数
	 * @return
	 */
	PageInfo<StockPile> getStockPileAll(Integer storeHouseId, String productId, Integer pageNo, Integer pageSize);

	/**
	 * 添加库存信息
	 * 
	 * @param sp
	 *            库存对象
	 * @return
	 */
	Integer insertStockPile(StockPile sp);

	/**
	 * 修改库存数量以及均价
	 * 
	 * @param storeHouseId
	 *            仓库id
	 * @param prosPecification
	 *            批次
	 * @param productId
	 *            产品id
	 * @param quantity
	 *            数量
	 * @param costPrice
	 *            均价
	 * @return
	 */
	Integer updateStockPileCountAvgByStoreHouseAndProduct(Integer storeHouseId, String prosPecification,
			String productId, Integer quantity, Double costPrice);

	/**
	 * 根据仓库编号和产品编号查询是否有数据
	 * 
	 * @param productId
	 *            产品编号
	 * @param storeHouseId
	 *            仓库编号
	 * @return
	 */
	Integer hasProductByProductIdAndStoreHouseId(String productId, Integer storeHouseId);

	/**
	 * 根据仓库编号和产品编号减少数量 出库的时候
	 * 
	 * @param storeHouseId
	 *            仓库编号
	 * @param productId
	 *            产品编号
	 * @param count
	 *            数量
	 * @return
	 */
	Integer cutbackStockPile(Integer storeHouseId, String productId, Integer count);

}
