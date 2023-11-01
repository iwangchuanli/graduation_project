package org.ljy.order.dao;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Order;

public interface IOrderDao {
	
	/**
	 * 产生一个订单
	 * @param userIDAndOrder
	 */
	public void addOrder(HashMap<String, Object> userIDAndOrder);
	
	/**
	 * 根据订单ID删除一个订单
	 * @param userIDAndOrderID
	 */
	public void deleteOrder(HashMap<String, Object> userIDAndOrderID);
	
	/**
	 * 删除userID的所有订单
	 * @param userID
	 */
	public void deleteAllOrders(String userID);
	
	/**
	 * 更新订单
	 * @param userIDAndOrder
	 */
	public void updateOrder(HashMap<String, Object> userIDAndOrder);
	
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
