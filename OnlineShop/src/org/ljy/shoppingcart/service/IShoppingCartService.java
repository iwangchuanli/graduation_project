package org.ljy.shoppingcart.service;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Goods;

public interface IShoppingCartService {
	/**
	 * 加入购物车
	 * 
	 * @param cartIDGoodsIDAndGoodsNum
	 */
	public void addToShoppingCart(HashMap<String, Object> cartIDGoodsIDAndGoodsNum);

	/**
	 * 移除商品
	 * 
	 * @param cartIDAndGoodsID
	 */
	public void removeGoods(HashMap<String, Object> cartIDAndGoodsID);

	/**
	 * 移除所有商品
	 * 
	 * @param cartID
	 */
	public void removeAll(String cartID);

	/**
	 * 列出所有商品
	 * 
	 * @param cartID
	 * @return 所有商品List<Goods>
	 */
	public List<Goods> listAll(String cartID);

	/**
	 * 结算
	 * 
	 * @param cartID
	 * @return 商品总价
	 */
	public double balance(String cartID);
}
