package cn.jxc.service;

import java.util.List;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.Permission;

public interface PermissionService {

	/**
	 * ��ҳ��ѯ����Ȩ����Ϣ
	 * 
	 * @param pageNo
	 * @param pageSize
	 * @return
	 */
	PageInfo<Permission> getPermissionAll(Integer pageNo, Integer pageSize);

	/**
	 * ���һ��Ȩ��
	 * 
	 * @param permission
	 * @return
	 */
	Integer addPermission(Permission permission);

	/**
	 * �޸�Ȩ����Ϣ
	 * 
	 * @param permission
	 * @return
	 */
	Integer updatePermission(Permission permission);

	/**
	 * ����Ȩ��id ɾ��Ȩ����Ϣ
	 * 
	 * @param permissionId
	 * @return
	 */
	Integer deletePermission(int permissionId);

	/**
	 * �����û�����ѯ�û�ӵ�е�Ȩ��
	 * 
	 * @param empLoginName
	 * @return
	 */
	List<Permission> findPermissionByEmp(String empLoginName);

	/**
	 * ���ݽ�ɫ��Ų�ѯӵ�е�Ȩ��
	 * 
	 * @param roleId
	 * @return
	 */
	List<Permission> getPermissionByRole(String roleId);

	/**
	 * ��ӽ�ɫȨ��
	 * 
	 * @param roleId
	 *            ��ɫID
	 * @param permissionId
	 *            Ȩ��ID����
	 * @return
	 */
	Integer addRolePermissionAssign(Integer roleId, List<Integer> permissionId);

}
