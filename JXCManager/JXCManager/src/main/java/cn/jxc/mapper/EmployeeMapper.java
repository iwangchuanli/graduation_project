package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.Employee;

public interface EmployeeMapper {

	/**
	 * ��¼
	 * 
	 * @param name
	 * @param pwd
	 * @return
	 */
	Employee login(@Param("name") String name, @Param("pwd") String pwd);

	/**
	 * ���ݵ�¼������Ա��
	 * 
	 * @param name
	 * @return
	 */
	Employee findEmployeeByLoginName(@Param("name") String name);

	/**
	 * ��ȡ����Ա����Ϣ
	 * 
	 * @return
	 */
	List<Employee> getEmployeeAll();

	/**
	 * ���Ա��
	 * 
	 * @param employee
	 *            Ա������
	 * @return
	 */
	int addEmployee(@Param("e") Employee employee);

	/**
	 * ���ݽ�ɫidɾ��Ա����ɫ����
	 * 
	 * @param roleId
	 *            ��ɫid
	 * @return
	 */
	int deleteEmployeeRoleByRoleId(Integer roleId);
	

}