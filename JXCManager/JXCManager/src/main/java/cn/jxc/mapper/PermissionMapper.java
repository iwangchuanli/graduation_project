package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.Permission;

public interface PermissionMapper {
	/**
	 * 获取所有权限信息
	 * 
	 * @return
	 */
	List<Permission> getPermissionAll();

	/**
	 * 添加权限信息
	 * 
	 * @param permission
	 * @return
	 */
	Integer addPermission(@Param("per") Permission permission);

	/**
	 * 修改权限信息
	 * 
	 * @param permission
	 * @return
	 */
	Integer updatePermission(@Param("per") Permission permission);

	/**
	 * 根据权限id删除权限
	 * 
	 * @param permissionId
	 * @return
	 */
	Integer deletePermission(@Param("perId") int permissionId);

	/**
	 * 根据员工登录名获取相关权限
	 * 
	 * @param empLoginName
	 * @return
	 */
	List<Permission> getPermissionByEmp(String empLoginName);

	/**
	 * 根据角色获取相关权限
	 * 
	 * @param roleId
	 * @return
	 */
	List<Permission> getPermissionByRole(String roleId);

	/**
	 * 添加角色权限关联关系
	 * 
	 * @param roleId
	 *            角色id
	 * @param permissionId
	 *            权限id
	 * @return
	 */
	Integer addRolePermission(@Param("roleId") Integer roleId, @Param("permissionId") Integer permissionId);

	/**
	 * 根据角色删除相关关联关系
	 * 
	 * @param roleId
	 * @return
	 */
	Integer deletePermissionByRoleId(Integer roleId);

}
