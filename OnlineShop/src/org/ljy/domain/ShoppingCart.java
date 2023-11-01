package org.ljy.domain;

import java.util.ArrayList;

/**
 * 购物车
 * 
 * @author 廖俊瑶
 *
 */
public class ShoppingCart {
	private String userID;// 用户ID
	private String shoppingCartID;// 购物车ID
	private ArrayList<Goods> goods;// 商品

	public String getUserID() {
		return userID;
	}

	public void setUserID(String userID) {
		this.userID = userID;
	}

	public String getShoppingCartID() {
		return shoppingCartID;
	}

	public void setShoppingCartID(String shoppingCartID) {
		this.shoppingCartID = shoppingCartID;
	}

	public ArrayList<Goods> getGoods() {
		return goods;
	}

	public void setGoods(ArrayList<Goods> goods) {
		this.goods = goods;
	}

}
