package cn.jxc.service;

import java.util.List;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.Role;

public interface RoleService {

	PageInfo<Role> getRoleAll(Integer pageNo, Integer pageSize);

	int addRole(Role role);

	int addEmpRole(List<String> roles, String empLoginName);

	int updateRole(Role role);

	/**
	 * ���ݽ�ɫidɾ����ɫ��Ϣ
	 * 
	 * @param roleId
	 * @return
	 */
	int delRoleById(String roleId);

	/**
	 * �����û���ɾ���û���ɫ
	 * 
	 * @param empLoginName
	 * @return
	 */
	int delRoleByEmp(String empLoginName);

	Role findRoleById(Integer roleId);

	List<Role> findRoleByEmp(String emp);

	/**
	 * ���ݽ�ɫ��ѯ�Ƿ����ɾ��
	 * 
	 * @param roles
	 *            ��ɫid
	 * @return �Ƿ����ɾ�� 0 ��ʾ������ 1��ʾ����
	 */
	Integer roleJudgmen(String roles);

}
