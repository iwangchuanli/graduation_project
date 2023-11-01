package org.ljy.payment.dao.impl;

import java.util.HashMap;

import org.ljy.domain.Payment;
import org.ljy.payment.dao.IPaymentDao;
import org.springframework.stereotype.Repository;

@Repository("paymentDao")
public class PaymentDaoImpl implements IPaymentDao {

	@Override
	public void addPayment(HashMap<String, Object> userIDAndPayment) {
		// TODO Auto-generated method stub

	}

	@Override
	public void deletePayment(String userID) {
		// TODO Auto-generated method stub

	}

	@Override
	public void updatePayment(HashMap<String, Object> userIDAndPayment) {
		// TODO Auto-generated method stub

	}

	@Override
	public Payment queryPaymentByUserID(String userID) {
		// TODO Auto-generated method stub
		return null;
	}

}
