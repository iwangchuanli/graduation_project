package org.ljy.order.service;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Order;

public interface IOrderService {
	
	/**
	 * 新增一个订单
	 * @param userIDAndOrder
	 */
	public void createOrder(HashMap<String, Object> userIDAndOrder);
	
	/**
	 * 根据用户ID和订单ID删除一个订单
	 * @param userIDAndOrderID
	 */
	public void deleteOrder(HashMap<String, Object> userIDAndOrderID);
	
	/**
	 * 根据用户ID和订单ID修改一个订单
	 * @param userIDAndOrderID
	 */
	public void updateOrder(HashMap<String, Object> userIDAndOrderID);
	
	/**
	 * 根据userID和orderID查询某个订单
	 * @param userIDAndOrderID
	 * @return
	 */
	public Order queryOrderByUserIDAndOrderID(HashMap<String, Object> userIDAndOrderID);
	
	/**
	 * 查询userID的所有订单
	 * @param userID
	 * @return
	 */
	public List<Order> listAllOrders(String userID);
}
