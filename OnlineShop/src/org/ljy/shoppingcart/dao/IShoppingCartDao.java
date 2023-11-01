package org.ljy.shoppingcart.dao;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Goods;

public interface IShoppingCartDao {

	/**
	 * 产生一个新的购物车
	 * 
	 * @param userIDAndCart
	 */
	public void addShoppingCart(HashMap<String, Object> userIDAndCart);

	/**
	 * 添加商品
	 * 
	 * @param cartIDGoodsIDAndGoodsNum
	 */
	public void addGoods(HashMap<String, Object> cartIDGoodsIDAndGoodsNum);

	/**
	 * 删除一个商品
	 * 
	 * @param cartIDAndGoodsID
	 */
	public void deleteGoods(HashMap<String, Object> cartIDAndGoodsID);

	/**
	 * 更新商品信息
	 * 
	 * @param cartIDAndGoodsID
	 */
	public void updateGoods(HashMap<String, Object> cartIDAndGoodsID);

	/**
	 * 按商品名查询商品
	 * 
	 * @param cartIDAndGoodsName
	 * @return List<Goods>
	 */
	public List<Goods> queryGoodsByGoodsName(HashMap<String, Object> cartIDAndGoodsName);

	/**
	 * 按ID查询商品
	 * 
	 * @param cartIDAndGoodsID
	 * @return Goods
	 */
	public Goods queryGoodsByGoodsID(HashMap<String, Object> cartIDAndGoodsID);

	/**
	 * 列出所有商品
	 * 
	 * @param cartID
	 * @return List<Goods>
	 */
	public List<Goods> listAllGoods(String cartID);

}
