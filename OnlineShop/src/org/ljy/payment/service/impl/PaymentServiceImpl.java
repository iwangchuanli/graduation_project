package org.ljy.payment.service.impl;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Bankcard;
import org.ljy.payment.service.IPaymentService;
import org.springframework.stereotype.Service;

@Service("paymentService")
public class PaymentServiceImpl implements IPaymentService {

	@Override
	public void addPayment(HashMap<String, Object> userIDAndPayment) {
		// TODO Auto-generated method stub

	}

	@Override
	public void addBankcard(HashMap<String, Object> paymentIDAndBankcard) {
		// TODO Auto-generated method stub

	}

	@Override
	public void deleteBankcard(HashMap<String, Object> paymentIDAndBankcard) {
		// TODO Auto-generated method stub

	}

	@Override
	public void updateBankcard(HashMap<String, Object> paymentIDAndBankcard) {
		// TODO Auto-generated method stub

	}

	@Override
	public Bankcard queryBankcardByBankcardID(String bankcardID) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<Bankcard> listAllBankcards(String paymentID) {
		// TODO Auto-generated method stub
		return null;
	}

}
