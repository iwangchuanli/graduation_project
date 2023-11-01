package org.ljy.domain;

import java.awt.Image;
import org.ljy.common.GoodsType;

/**
 * 商品
 * 
 * @author 廖俊瑶
 *
 */
public class Goods {
	private String goodsID;// 商品ID
	private String goodsName;// 商品名
	private GoodsType goodsType;// 商品种类
	private double price;// 价格
	private double discount;// 折扣
	private Image image;// 图片
	private String shopID;// 所属商店的ID

	public String getGoodsID() {
		return goodsID;
	}

	public void setGoodsID(String goodsID) {
		this.goodsID = goodsID;
	}

	public String getGoodsName() {
		return goodsName;
	}

	public void setGoodsName(String goodsName) {
		this.goodsName = goodsName;
	}

	public double getPrice() {
		return price;
	}

	public void setPrice(double price) {
		this.price = price;
	}

	public double getDiscount() {
		return discount;
	}

	public void setDiscount(double discount) {
		this.discount = discount;
	}

	public Image getImage() {
		return image;
	}

	public void setImage(Image image) {
		this.image = image;
	}

	public String getShopID() {
		return shopID;
	}

	public void setShopID(String shopID) {
		this.shopID = shopID;
	}

	public GoodsType getGoodsType() {
		return goodsType;
	}

	public void setGoodsType(GoodsType goodsType) {
		this.goodsType = goodsType;
	}

}
