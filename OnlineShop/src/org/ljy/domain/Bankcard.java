package org.ljy.domain;

/**
 * 银行卡
 * @author 廖俊瑶
 *
 */
public class Bankcard {
	private String userID;//用户ID
	private String cardNumber;//银行卡号
	private String bank;//所属银行
	public String getUserID() {
		return userID;
	}
	public void setUserID(String userID) {
		this.userID = userID;
	}
	public String getCardNumber() {
		return cardNumber;
	}
	public void setCardNumber(String cardNumber) {
		this.cardNumber = cardNumber;
	}
	public String getBank() {
		return bank;
	}
	public void setBank(String bank) {
		this.bank = bank;
	}
	

}
