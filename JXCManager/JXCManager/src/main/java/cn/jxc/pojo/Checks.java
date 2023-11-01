package cn.jxc.pojo;

import java.io.Serializable;
import java.util.Date;
import java.util.List;

public class Checks implements Serializable {
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private String cid;
	private String ccreater;
	private ReviewStatus states;
	private Date createStartDate;
	private Date createEndDate;
	private Date creviewDate;
	private Employee creviewEmp;
    private List<CheckDetails> list;
    
    
	

	public ReviewStatus getStates() {
		return states;
	}

	public void setStates(ReviewStatus states) {
		this.states = states;
	}

	public List<CheckDetails> getList() {
		return list;
	}

	public void setList(List<CheckDetails> list) {
		this.list = list;
	}

	public static long getSerialversionuid() {
		return serialVersionUID;
	}

	
	public String getCid() {
		return cid;
	}

	public void setCid(String cid) {
		this.cid = cid;
	}

	public String getCcreater() {
		return ccreater;
	}

	public void setCcreater(String ccreater) {
		this.ccreater = ccreater;
	}

	public Date getCreateStartDate() {
		return createStartDate;
	}

	public void setCreateStartDate(Date createStartDate) {
		this.createStartDate = createStartDate;
	}

	public Date getCreateEndDate() {
		return createEndDate;
	}

	public void setCreateEndDate(Date createEndDate) {
		this.createEndDate = createEndDate;
	}

	public Date getCreviewDate() {
		return creviewDate;
	}

	public void setCreviewDate(Date creviewDate) {
		this.creviewDate = creviewDate;
	}

	public Employee getCreviewEmp() {
		return creviewEmp;
	}

	public void setCreviewEmp(Employee creviewEmp) {
		this.creviewEmp = creviewEmp;
	}
	
	
}
