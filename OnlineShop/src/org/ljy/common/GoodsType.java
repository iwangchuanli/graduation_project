package org.ljy.common;

/**
 * 商品种类枚举类
 * @author 廖俊瑶
 * 2017年1月14日 23:14:56
 */
public enum GoodsType {
	MANCLOTH("男上衣"), MANPANT("男裤"), MANSHOES("男鞋"), 
	WOMANCLOTH("女上衣"), WOMANPANT("女裤"), WOMANSHOES("女鞋"),
	PC("电脑"), PHONE("手机"), BOOK("书籍");
	private String goodsType;

	private GoodsType(String goodsType) {
		this.goodsType = goodsType;
	}

	public String getGoodsType() {
		return goodsType;
	}

	public void setGoodsType(String goodsType) {
		this.goodsType = goodsType;
	}
	
}