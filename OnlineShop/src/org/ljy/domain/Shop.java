package org.ljy.domain;

import java.awt.Image;
import java.util.ArrayList;

/**
 * 商店
 * 
 * @author 廖俊瑶
 *
 */
public class Shop {
	private String shopID;// 商店ID
	private String userID;// 用户ID
	private String shopName;// 商店名
	private Image portrait;//商店头像
	private ArrayList<Goods> goods;// 商品

	public String getShopID() {
		return shopID;
	}

	public void setShopID(String shopID) {
		this.shopID = shopID;
	}

	public String getUserID() {
		return userID;
	}

	public void setUserID(String userID) {
		this.userID = userID;
	}

	public String getShopName() {
		return shopName;
	}

	public void setShopName(String shopName) {
		this.shopName = shopName;
	}

	public ArrayList<Goods> getGoods() {
		return goods;
	}

	public void setGoods(ArrayList<Goods> goods) {
		this.goods = goods;
	}

	public Image getPortrait() {
		return portrait;
	}

	public void setPortrait(Image portrait) {
		this.portrait = portrait;
	}

	
}
