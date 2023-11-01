package cn.jxc.pojo;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import cn.jxc.excel.ExcelField;
import cn.jxc.util.OrderStatus;

/**
 * ��������
 */
public class Requisition implements java.io.Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	
	@ExcelField(title = "��������", align = 2)
	private String requisitionId;//����������
	@ExcelField(title = "�����", align = 2, value = "employeeByReviewEmp.empLoginName")
	private Employee employeeByReviewEmp;//�����
	@ExcelField(title = "�����", align = 2, value = "employeeByStorageStoreHouseEmp.empLoginName")
	private Employee employeeByStorageStoreHouseEmp;//�����
	@ExcelField(title = "������", align = 2, value = "employeeByRequestEmp.empLoginName")
	private Employee employeeByRequestEmp;//������
	@ExcelField(title = "������", align = 2, value = "employeeByOutboundEmp.empLoginName")
	private Employee employeeByOutboundEmp;//������
	@ExcelField(title = "���״̬", align = 2, value = "reviewstatus.rsName")
	private ReviewStatus reviewstatus;//���״̬
	@ExcelField(title = "����ֿ�", align = 2, value = "storehouseByOutboundStoreHouse.shName")
	private StoreHouse storehouseByOutboundStoreHouse;//����ֿ�
	@ExcelField(title = "���ֿ�", align = 2, value = "storehouseByStorageStoreHouse.shName")
	private StoreHouse storehouseByStorageStoreHouse;//���ֿ�
	@ExcelField(title = "����ʱ��", align = 2)
	private Date requestTime;//����ʱ��
	@ExcelField(title = "���ʱ��", align = 2)
	private Date reviewTime;//���ʱ��
	@ExcelField(title = "����ʱ��", align = 2)
	private Date outboundStoreHouseTime;//����ʱ��
	@ExcelField(title = "���ʱ��", align = 2)
	private Date storageStoreHouseTime;//���ʱ��
	@ExcelField(title = "��˱�ע", align = 2)
	private String reason;//��˱�ע
	private OrderStatus orderStatus;//��ϸ���
	private String allocateReason;//����ԭ��
	

	public String getAllocateReason() {
		return allocateReason;
	}

	public void setAllocateReason(String allocateReason) {
		this.allocateReason = allocateReason;
	}

	public OrderStatus getOrderStatus() {
		return orderStatus;
	}

	public void setOrderStatus(OrderStatus orderStatus) {
		this.orderStatus = orderStatus;
	}

	public String getReason() {
		return reason;
	}

	public void setReason(String reason) {
		this.reason = reason;
	}

	//private Set<RequisitionDetail> requisitiondetails = new HashSet<RequisitionDetail>(0);
	private List<RequisitionDetail>  requisitiondetails = new ArrayList<RequisitionDetail>();
	public List<RequisitionDetail> getRequisitiondetails() {
		return requisitiondetails;
	}

	public void setRequisitiondetails(List<RequisitionDetail> requisitiondetails) {
		this.requisitiondetails = requisitiondetails;
	}

	public Requisition() {
	}

	public Requisition(String requisitionId, Employee employeeByRequestEmp, Date requestTime) {
		this.requisitionId = requisitionId;
		this.employeeByRequestEmp = employeeByRequestEmp;
		this.requestTime = requestTime;
	}

	public Requisition(String requisitionId, Employee employeeByReviewEmp, Employee employeeByStorageStoreHouseEmp,
			Employee employeeByRequestEmp, Employee employeeByOutboundEmp, ReviewStatus reviewstatus,
			StoreHouse storehouseByOutboundStoreHouse, StoreHouse storehouseByStorageStoreHouse, Date requestTime,
			Date reviewTime, Date outboundStoreHouseTime, Date storageStoreHouseTime, List<RequisitionDetail> requisitiondetails) {
		this.requisitionId = requisitionId;
		this.employeeByReviewEmp = employeeByReviewEmp;
		this.employeeByStorageStoreHouseEmp = employeeByStorageStoreHouseEmp;
		this.employeeByRequestEmp = employeeByRequestEmp;
		this.employeeByOutboundEmp = employeeByOutboundEmp;
		this.reviewstatus = reviewstatus;
		this.storehouseByOutboundStoreHouse = storehouseByOutboundStoreHouse;
		this.storehouseByStorageStoreHouse = storehouseByStorageStoreHouse;
		this.requestTime = requestTime;
		this.reviewTime = reviewTime;
		this.outboundStoreHouseTime = outboundStoreHouseTime;
		this.storageStoreHouseTime = storageStoreHouseTime;
		this.requisitiondetails = requisitiondetails;
	}

	public String getRequisitionId() {
		return this.requisitionId;
	}

	public void setRequisitionId(String requisitionId) {
		this.requisitionId = requisitionId;
	}

	public Employee getEmployeeByReviewEmp() {
		return this.employeeByReviewEmp;
	}

	public void setEmployeeByReviewEmp(Employee employeeByReviewEmp) {
		this.employeeByReviewEmp = employeeByReviewEmp;
	}

	public Employee getEmployeeByStorageStoreHouseEmp() {
		return this.employeeByStorageStoreHouseEmp;
	}

	public void setEmployeeByStorageStoreHouseEmp(Employee employeeByStorageStoreHouseEmp) {
		this.employeeByStorageStoreHouseEmp = employeeByStorageStoreHouseEmp;
	}

	public Employee getEmployeeByRequestEmp() {
		return this.employeeByRequestEmp;
	}

	public void setEmployeeByRequestEmp(Employee employeeByRequestEmp) {
		this.employeeByRequestEmp = employeeByRequestEmp;
	}

	public Employee getEmployeeByOutboundEmp() {
		return this.employeeByOutboundEmp;
	}

	public void setEmployeeByOutboundEmp(Employee employeeByOutboundEmp) {
		this.employeeByOutboundEmp = employeeByOutboundEmp;
	}

	public ReviewStatus getReviewstatus() {
		return this.reviewstatus;
	}

	public void setReviewstatus(ReviewStatus reviewstatus) {
		this.reviewstatus = reviewstatus;
	}

	public StoreHouse getStorehouseByOutboundStoreHouse() {
		return this.storehouseByOutboundStoreHouse;
	}

	public void setStorehouseByOutboundStoreHouse(StoreHouse storehouseByOutboundStoreHouse) {
		this.storehouseByOutboundStoreHouse = storehouseByOutboundStoreHouse;
	}

	public StoreHouse getStorehouseByStorageStoreHouse() {
		return this.storehouseByStorageStoreHouse;
	}

	public void setStorehouseByStorageStoreHouse(StoreHouse storehouseByStorageStoreHouse) {
		this.storehouseByStorageStoreHouse = storehouseByStorageStoreHouse;
	}

	public Date getRequestTime() {
		return this.requestTime;
	}

	public void setRequestTime(Date requestTime) {
		this.requestTime = requestTime;
	}

	public Date getReviewTime() {
		return this.reviewTime;
	}

	public void setReviewTime(Date reviewTime) {
		this.reviewTime = reviewTime;
	}

	public Date getOutboundStoreHouseTime() {
		return this.outboundStoreHouseTime;
	}

	public void setOutboundStoreHouseTime(Date outboundStoreHouseTime) {
		this.outboundStoreHouseTime = outboundStoreHouseTime;
	}

	public Date getStorageStoreHouseTime() {
		return this.storageStoreHouseTime;
	}

	public void setStorageStoreHouseTime(Date storageStoreHouseTime) {
		this.storageStoreHouseTime = storageStoreHouseTime;
	}

	

}
