package cn.jxc.pojo;
// Generated 2018-3-14 20:32:32 by Hibernate Tools 5.2.8.Final

import java.util.Date;

/**
 * Backstock generated by hbm2java
 */
public class BackStock implements java.io.Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	
	private String bstId;
	private int employeeId;
	private int supplierId;
	private String managerReviewState;
	private String managerReviewEmp;
	private Date backStockDate;
	private String backStockReason;

	public BackStock() {
	}

	public BackStock(String bstId, int employeeId, int supplierId) {
		this.bstId = bstId;
		this.employeeId = employeeId;
		this.supplierId = supplierId;
	}

	public BackStock(String bstId, int employeeId, int supplierId, String managerReviewState, String managerReviewEmp,
			Date backStockDate, String backStockReason) {
		this.bstId = bstId;
		this.employeeId = employeeId;
		this.supplierId = supplierId;
		this.managerReviewState = managerReviewState;
		this.managerReviewEmp = managerReviewEmp;
		this.backStockDate = backStockDate;
		this.backStockReason = backStockReason;
	}

	public String getBstId() {
		return this.bstId;
	}

	public void setBstId(String bstId) {
		this.bstId = bstId;
	}

	public int getEmployeeId() {
		return this.employeeId;
	}

	public void setEmployeeId(int employeeId) {
		this.employeeId = employeeId;
	}

	public int getSupplierId() {
		return this.supplierId;
	}

	public void setSupplierId(int supplierId) {
		this.supplierId = supplierId;
	}

	public String getManagerReviewState() {
		return this.managerReviewState;
	}

	public void setManagerReviewState(String managerReviewState) {
		this.managerReviewState = managerReviewState;
	}

	public String getManagerReviewEmp() {
		return this.managerReviewEmp;
	}

	public void setManagerReviewEmp(String managerReviewEmp) {
		this.managerReviewEmp = managerReviewEmp;
	}

	public Date getBackStockDate() {
		return this.backStockDate;
	}

	public void setBackStockDate(Date backStockDate) {
		this.backStockDate = backStockDate;
	}

	public String getBackStockReason() {
		return this.backStockReason;
	}

	public void setBackStockReason(String backStockReason) {
		this.backStockReason = backStockReason;
	}

}
