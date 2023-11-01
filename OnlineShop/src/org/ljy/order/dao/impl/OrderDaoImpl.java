package org.ljy.order.dao.impl;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Order;
import org.ljy.order.dao.IOrderDao;
import org.springframework.stereotype.Repository;

@Repository("orderDao")
public class OrderDaoImpl implements IOrderDao {

	@Override
	public void addOrder(HashMap<String, Object> userIDAndOrder) {
		// TODO Auto-generated method stub

	}

	@Override
	public void deleteOrder(HashMap<String, Object> userIDAndOrderID) {
		// TODO Auto-generated method stub

	}

	@Override
	public void deleteAllOrders(String userID) {
		// TODO Auto-generated method stub

	}

	@Override
	public void updateOrder(HashMap<String, Object> userIDAndOrder) {
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
