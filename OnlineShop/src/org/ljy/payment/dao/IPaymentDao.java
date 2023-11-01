package org.ljy.payment.dao;

import java.util.HashMap;

import org.ljy.domain.Payment;

public interface IPaymentDao {
	
	/**
	 * 添加Payment
	 * @param userIDAndPayment
	 */
	public void addPayment(HashMap<String, Object> userIDAndPayment);
	
	/**
	 * 根据用户ID删除payment
	 * @param userID
	 */
	public void deletePayment(String userID);
	
	/**
	 * 修改payment
	 * @param userIDAndPayment
	 */
	public void updatePayment(HashMap<String, Object> userIDAndPayment);
	
	/**
	 * 根据用户ID查询payment
	 * @param userID
	 * @return Payment
	 */
	public Payment queryPaymentByUserID(String userID);
	
}
