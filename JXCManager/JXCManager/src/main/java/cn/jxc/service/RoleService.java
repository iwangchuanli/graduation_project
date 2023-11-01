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
	 * 根据角色id删除角色信息
	 * 
	 * @param roleId
	 * @return
	 */
	int delRoleById(String roleId);

	/**
	 * 根据用户名删除用户角色
	 * 
	 * @param empLoginName
	 * @return
	 */
	int delRoleByEmp(String empLoginName);

	Role findRoleById(Integer roleId);

	List<Role> findRoleByEmp(String emp);

	/**
	 * 根据角色查询是否可以删除
	 * 
	 * @param roles
	 *            角色id
	 * @return 是否可以删除 0 表示不可以 1表示可以
	 */
	Integer roleJudgmen(String roles);

}
