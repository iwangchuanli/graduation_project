package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.Role;

public interface RoleMapper {

	/**
	 * ��ȡ���н�ɫ
	 * 
	 * @return
	 */
	List<Role> getRoleAll();

	/**
	 * ��ӽ�ɫ��Ϣ
	 * 
	 * @param role
	 * @return
	 */
	int addRole(@Param("r") Role role);

	/**
	 * ���Ա����ɫ
	 * 
	 * @param emp
	 *            Ա����¼��
	 * @param roleId
	 *            ��ɫid
	 * @return
	 */
	int addEmpRole(@Param("emp") String emp, @Param("roleId") String roleId);

	/**
	 * �޸Ľ�ɫ��Ϣ
	 * 
	 * @param role
	 * @return
	 */
	int updateRole(@Param("r") Role role);

	/**
	 * ɾ����ɫ
	 * 
	 * @param roleId
	 * @return
	 */
	int delRole(@Param("roleId") Integer roleId);

	/**
	 * �����û���ɾ���û�ӵ�еĽ�ɫ
	 * 
	 * @param empLoginName
	 *            �û���
	 * @return
	 */
	int delRoleByEmp(@Param("emp") String empLoginName);

	/**
	 * ���ݽ�ɫid ɾ����ɫȨ�޹���
	 * 
	 * @param roleId
	 *            ��ɫid
	 * @return
	 */
	int delRolePermissionByRoleId(Integer roleId);

	/**
	 * ���ݽ�ɫid���ҽ�ɫ��Ϣ
	 * 
	 * @param roleId
	 * @return
	 */
	Role findRoleById(Integer roleId);

	/**
	 * �����û������ҽ�ɫ
	 * 
	 * @param emp
	 * @return
	 */
	List<Role> findRoleByEmp(@Param("emp") String emp);

	/**
	 * ��Ա����ɫ�������и��ݽ�ɫid��ѯ�Ƿ�������
	 * 
	 * @param roleId
	 *            ��ɫid
	 * @return
	 */
	Integer getCountEmpRoleByRoleId(@Param("roleId") Integer roleId);

	/**
	 * �ӽ�ɫȨ�޹������и��ݽ�ɫid��ѯ�Ƿ�������
	 * 
	 * @param roleId
	 *            ��ɫid
	 * @return
	 */
	Integer getCountRolePermissionByRoleId(@Param("roleId") Integer roleId);

}
