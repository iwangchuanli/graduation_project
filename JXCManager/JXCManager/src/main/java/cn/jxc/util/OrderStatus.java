package cn.jxc.util;

/**
 * ����״̬
 * 
 * @author Administrator
 *
 */
public enum OrderStatus {

	createOrder(1, "��������"), 
	cancelOrder(2, "����ȡ��"), 
	reviewing(3, "���������"), 
	reviewOk(4, "���ͨ��"), 
	reviewRefuse(5,"��˾ܾ�"), 
	purchaseing(6, "�ɹ���"), 
	storage(7, "�������"), 
	requisition(8, "������"), 
	leaveStock(9, "������");

	private int no;

	private String orderType;

	private OrderStatus(int no, String orderType) {
		this.orderType = orderType;
		this.no = no;
	}

	public String getOrderType() {
		return orderType;
	}

	public void setOrderType(String orderType) {
		this.orderType = orderType;
	}

	public int getNo() {
		return no;
	}

	public void setNo(int no) {
		this.no = no;
	}

	@Override
	public String toString() {
		return orderType;
	}

}
