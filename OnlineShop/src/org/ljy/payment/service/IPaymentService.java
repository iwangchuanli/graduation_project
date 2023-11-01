package org.ljy.payment.service;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Bankcard;

public interface IPaymentService {
	
	/**
	 * 添加Payment
	 * @param userIDAndPayment
	 */
	public void addPayment(HashMap<String, Object> userIDAndPayment);
	
	/**
	 * 添加银行卡
	 * @param paymentIDAndBankcard
	 */
	public void addBankcard(HashMap<String, Object> paymentIDAndBankcard);
	
	/**
	 * 删除银行卡
	 * @param paymentIDAndBankcard
	 */
	public void deleteBankcard(HashMap<String, Object> paymentIDAndBankcard);
	
	/**
	 * 修改银行卡
	 * @param paymentIDAndBankcard
	 */
	public void updateBankcard(HashMap<String, Object> paymentIDAndBankcard);
	
	/**
	 * 根据银行卡ID查询银行卡
	 * @param bankcardID
	 * @return Bankcard
	 */
	public Bankcard queryBankcardByBankcardID(String bankcardID);
	
	/**
	 * 列出某个用户的所有银行卡
	 * @param paymentID
	 * @return List<Bankcard>
	 */
	public List<Bankcard> listAllBankcards(String paymentID);
}
