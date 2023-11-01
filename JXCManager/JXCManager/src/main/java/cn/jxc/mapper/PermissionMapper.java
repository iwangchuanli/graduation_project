package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.Permission;

public interface PermissionMapper {
	/**
	 * ��ȡ����Ȩ����Ϣ
	 * 
	 * @return
	 */
	List<Permission> getPermissionAll();

	/**
	 * ���Ȩ����Ϣ
	 * 
	 * @param permission
	 * @return
	 */
	Integer addPermission(@Param("per") Permission permission);

	/**
	 * �޸�Ȩ����Ϣ
	 * 
	 * @param permission
	 * @return
	 */
	Integer updatePermission(@Param("per") Permission permission);

	/**
	 * ����Ȩ��idɾ��Ȩ��
	 * 
	 * @param permissionId
	 * @return
	 */
	Integer deletePermission(@Param("perId") int permissionId);

	/**
	 * ����Ա����¼����ȡ���Ȩ��
	 * 
	 * @param empLoginName
	 * @return
	 */
	List<Permission> getPermissionByEmp(String empLoginName);

	/**
	 * ���ݽ�ɫ��ȡ���Ȩ��
	 * 
	 * @param roleId
	 * @return
	 */
	List<Permission> getPermissionByRole(String roleId);

	/**
	 * ��ӽ�ɫȨ�޹�����ϵ
	 * 
	 * @param roleId
	 *            ��ɫid
	 * @param permissionId
	 *            Ȩ��id
	 * @return
	 */
	Integer addRolePermission(@Param("roleId") Integer roleId, @Param("permissionId") Integer permissionId);

	/**
	 * ���ݽ�ɫɾ����ع�����ϵ
	 * 
	 * @param roleId
	 * @return
	 */
	Integer deletePermissionByRoleId(Integer roleId);

}
