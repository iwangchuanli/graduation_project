package cn.jxc.pojo;

import java.util.ArrayList;
import java.util.List;

import cn.jxc.excel.ExcelField;

/**
 * ����ʵ�� ����:���� ���۲� �ɹ��� �ֿ���� ...
 */
public class Dept implements java.io.Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	@ExcelField(title = "���", align = 2)
	private Integer deptId;

	@ExcelField(title = "��������", align = 2)
	private String deptName;

	@ExcelField(title = "��������", align = 2)
	private String deptDes;

	private List<Employee> employees = new ArrayList<Employee>();

	public Dept() {
		super();
	}

	public Dept(Integer deptId, String deptName, String deptDes) {
		super();
		this.deptId = deptId;
		this.deptName = deptName;
		this.deptDes = deptDes;
	}

	public Integer getDeptId() {
		return this.deptId;
	}

	public void setDeptId(Integer deptId) {
		this.deptId = deptId;
	}

	public String getDeptName() {
		return this.deptName;
	}

	public void setDeptName(String deptName) {
		this.deptName = deptName;
	}

	public String getDeptDes() {
		return this.deptDes;
	}

	public void setDeptDes(String deptDes) {
		this.deptDes = deptDes;
	}

	public List<Employee> getEmployees() {
		return this.employees;
	}

	public void setEmployees(List<Employee> employees) {
		this.employees = employees;
	}

}
