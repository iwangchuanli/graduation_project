package org.ljy.domain;

import java.awt.Image;
import java.util.ArrayList;

/**
 * 用户
 * 
 * @author 廖俊瑶
 *
 */
public class User {
	private String userID;// 用户ID
	private String userType;// 用户类型
	private String userName;// 用户名
	private String password;// 密码
	private Image portrait;// 头像
	private String regTime;// 注册时间
	private String phone;// 手机号
	private String birthday;// 生日
	private ArrayList<Goods> shoppingCart;// 购物车
	private ArrayList<Order> order;// 订单
	private Payment payment;// 支付
	private String shoppingCartID;// 购物车ID
	private String orderID;// 订单ID
	private String paymentID;// 支付ID

	public String getShoppingCartID() {
		return shoppingCartID;
	}

	public void setShoppingCartID(String shoppingCartID) {
		this.shoppingCartID = shoppingCartID;
	}

	public String getOrderID() {
		return orderID;
	}

	public void setOrderID(String orderID) {
		this.orderID = orderID;
	}

	public String getPaymentID() {
		return paymentID;
	}

	public void setPaymentID(String paymentID) {
		this.paymentID = paymentID;
	}

	public String getUserID() {
		return userID;
	}

	public void setUserID(String userID) {
		this.userID = userID;
	}

	public String getUserType() {
		return userType;
	}

	public void setUserType(String userType) {
		this.userType = userType;
	}

	public String getUserName() {
		return userName;
	}

	public void setUserName(String userName) {
		this.userName = userName;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public Image getPortrait() {
		return portrait;
	}

	public void setPortrait(Image portrait) {
		this.portrait = portrait;
	}

	public String getRegTime() {
		return regTime;
	}

	public void setRegTime(String regTime) {
		this.regTime = regTime;
	}

	public String getPhone() {
		return phone;
	}

	public void setPhone(String phone) {
		this.phone = phone;
	}

	public String getBirthday() {
		return birthday;
	}

	public void setBirthday(String birthday) {
		this.birthday = birthday;
	}

	public ArrayList<Goods> getShoppingCart() {
		return shoppingCart;
	}

	public void setShoppingCart(ArrayList<Goods> shoppingCart) {
		this.shoppingCart = shoppingCart;
	}

	public ArrayList<Order> getOrder() {
		return order;
	}

	public void setOrder(ArrayList<Order> order) {
		this.order = order;
	}

	public Payment getPayment() {
		return payment;
	}

	public void setPayment(Payment payment) {
		this.payment = payment;
	}

	@Override
	public String toString() {
		return "User [userID=" + userID + ",\n userType=" + userType + ",\n userName=" + userName + ",\n password="
				+ password + ",\n portrait=" + portrait + ",\n regTime=" + regTime + ",\n phone=" + phone
				+ ",\n birthday=" + birthday + ",\n shoppingCart=" + shoppingCart + ",\n order=" + order
				+ ",\n payment=" + payment + "]";
	}

}
