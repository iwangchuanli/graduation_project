package cn.jxc.pojo;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import cn.jxc.excel.ExcelField;
import cn.jxc.util.OrderStatus;

/**
 * ���𵥾�
 */
public class DamagedRequest implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	
	@ExcelField(title = "���𵥺�", align = 2)
	private String damagedRequestId;		//���𵥺�
	@ExcelField(title = "����������", align = 2, value = "requestEmp.empLoginName")
	private Employee requestEmp;			//����������
	@ExcelField(title = "�����Ƶ�ʱ��", align = 2)
	private Date requestTime;				//�����Ƶ�ʱ��
	@ExcelField(title = "�������ڲֿ�", align = 2, value = "damagedStoreHouse.shName")
	private StoreHouse damagedStoreHouse;	//�������ڲֿ�
	@ExcelField(title = "���״̬", align = 2, value = "deptReviewStatus.rsName")
	private ReviewStatus deptReviewStatus;	//���״̬
	@ExcelField(title = "�����", align = 2, value = "employeeByReviewEmp.empLoginName")
	private Employee deptReviewEmp;			//�����
	@ExcelField(title = "���ʱ��", align = 2)
	private Date deptReviewTime;			//���ʱ��
	@ExcelField(title = "���ԭ��", align = 2)
	private String deptReviewReason;        //���ԭ��
	@ExcelField(title = "����ԭ��", align = 2)
	private String damagedReason;			//����ԭ��
	@ExcelField(title = "��ע", align = 2)
	private String remark;    				//��ע
	@ExcelField(title = "��������", align = 2, value = "orderStatus.orderType")
	private OrderStatus orderStatus; 			//��������
	
	private List<DamagedRequestDetail> damagedrequestdetail = new ArrayList<DamagedRequestDetail>();
	public List<DamagedRequestDetail> getDamagedrequestdetail() {
		return damagedrequestdetail;
	}

	public void setDamagedrequestdetail(List<DamagedRequestDetail> damagedrequestdetail) {
		this.damagedrequestdetail = damagedrequestdetail;
	}

	public OrderStatus getOrderStatus() {
		return orderStatus;
	}

	public void setOrderStatus(OrderStatus orderStatus) {
		this.orderStatus = orderStatus;
	}

	public DamagedRequest() {
		super();
	}
	
	public DamagedRequest(String damagedRequestId, Employee requestEmp, Date requestTime, StoreHouse damagedStoreHouse,
			ReviewStatus deptReviewStatus, Employee deptReviewEmp, Date deptReviewTime,String deptReviewReason, String damagedReason,
			String remark) {
		super();
		this.damagedRequestId = damagedRequestId;
		this.requestEmp = requestEmp;
		this.requestTime = requestTime;
		this.damagedStoreHouse = damagedStoreHouse;
		this.deptReviewStatus = deptReviewStatus;
		this.deptReviewEmp = deptReviewEmp;
		this.deptReviewTime = deptReviewTime;
		this.deptReviewReason=deptReviewReason;
		this.damagedReason = damagedReason;
		this.remark = remark;
	}
	
	public String getDamagedRequestId() {
		return damagedRequestId;
	}
	
	public void setDamagedRequestId(String damagedRequestId) {
		this.damagedRequestId = damagedRequestId;
	}
	
	public Employee getRequestEmp() {
		return requestEmp;
	}
	
	public void setRequestEmp(Employee requestEmp) {
		this.requestEmp = requestEmp;
	}
	
	public Date getRequestTime() {
		return requestTime;
	}
	
	public void setRequestTime(Date requestTime) {
		this.requestTime = requestTime;
	}
	
	public StoreHouse getDamagedStoreHouse() {
		return damagedStoreHouse;
	}
	
	public void setDamagedStoreHouse(StoreHouse damagedStoreHouse) {
		this.damagedStoreHouse = damagedStoreHouse;
	}
	
	public ReviewStatus getDeptReviewStatus() {
		return deptReviewStatus;
	}
	
	public void setDeptReviewStatus(ReviewStatus deptReviewStatus) {
		this.deptReviewStatus = deptReviewStatus;
	}
	
	public Employee getDeptReviewEmp() {
		return deptReviewEmp;
	}
	
	public void setDeptReviewEmp(Employee deptReviewEmp) {
		this.deptReviewEmp = deptReviewEmp;
	}
	
	public Date getDeptReviewTime() {
		return deptReviewTime;
	}
	
	public void setDeptReviewTime(Date deptReviewTime) {
		this.deptReviewTime = deptReviewTime;
	}
	
	public String getDamagedReason() {
		return damagedReason;
	}
	
	public void setDamagedReason(String damagedReason) {
		this.damagedReason = damagedReason;
	}
	
	public String getRemark() {
		return remark;
	}
	
	public void setRemark(String remark) {
		this.remark = remark;
	}

	public String getDeptReviewReason() {
		return deptReviewReason;
	}

	public void setDeptReviewReason(String deptReviewReason) {
		this.deptReviewReason = deptReviewReason;
	}
	
}
