package org.ljy.goods.dao;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Goods;

public interface IGoodsDao {
	/**
	 * 添加商品
	 * 
	 * @param goods
	 */
	public void addGoods(Goods goods);

	/**
	 * 删除商品
	 * 
	 * @param goods
	 */
	public void deleteGoods(Goods goods);

	/**
	 * 更新商品信息
	 * 
	 * @param goods
	 */
	public void updateGoods(Goods goods);

	/**
	 * 按商品名查询商品
	 * 
	 * @param shopIDAndGoodsName
	 * @return List<Goods>
	 */
	public List<Goods> queryGoodsByGoodsName(HashMap<String, Object> shopIDAndGoodsName);

	/**
	 * 按商品ID查询商品
	 * 
	 * @param shopIDAndGoodsID
	 * @return Goods
	 */
	public Goods queryGoodsByGoodsID(HashMap<String, Object> shopIDAndGoodsID);

	/**
	 * 列出所有商品
	 * 
	 * @param shopID
	 * @return List<Goods>
	 */
	public List<Goods> listAllGoods(String shopID);
}
