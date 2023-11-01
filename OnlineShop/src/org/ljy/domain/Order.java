package org.ljy.domain;

import java.util.ArrayList;

import org.ljy.common.OrderStatement;

/**
 * 订单
 * @author 廖俊瑶
 *
 */
public class Order {
	private String userID;//用户ID
	private String orderID;//订单ID
	private String time;//日期
	private ArrayList<Goods> goods;//商品
	private OrderStatement statement;//订单状态
	public String getUserID() {
		return userID;
	}
	public void setUserID(String userID) {
		this.userID = userID;
	}
	public String getOrderID() {
		return orderID;
	}
	public void setOrderID(String orderID) {
		this.orderID = orderID;
	}
	public String getTime() {
		return time;
	}
	public void setTime(String time) {
		this.time = time;
	}
	public ArrayList<Goods> getGoods() {
		return goods;
	}
	public void setGoods(ArrayList<Goods> goods) {
		this.goods = goods;
	}
	public OrderStatement getStatement() {
		return statement;
	}
	public void setStatement(OrderStatement statement) {
		this.statement = statement;
	}
	

}
