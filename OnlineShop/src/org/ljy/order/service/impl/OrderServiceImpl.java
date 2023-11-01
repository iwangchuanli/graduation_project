package org.ljy.order.service.impl;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Order;
import org.ljy.order.service.IOrderService;
import org.springframework.stereotype.Service;

@Service("orderService")
public class OrderServiceImpl implements IOrderService {

	@Override
	public void createOrder(HashMap<String, Object> userIDAndOrder) {
		// TODO Auto-generated method stub

	}

	@Override
	public void deleteOrder(HashMap<String, Object> userIDAndOrderID) {
		// TODO Auto-generated method stub

	}

	@Override
	public void updateOrder(HashMap<String, Object> userIDAndOrderID) {
		// TODO Auto-generated method stub

	}

	@Override
	public Order queryOrderByUserIDAndOrderID(HashMap<String, Object> userIDAndOrderID) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<Order> listAllOrders(String userID) {
		// TODO Auto-generated method stub
		return null;
	}

}
