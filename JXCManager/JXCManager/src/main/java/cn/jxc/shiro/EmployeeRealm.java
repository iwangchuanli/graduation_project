package cn.jxc.shiro;

import java.util.ArrayList;
import java.util.List;

import org.apache.shiro.authc.AuthenticationException;
import org.apache.shiro.authc.AuthenticationInfo;
import org.apache.shiro.authc.AuthenticationToken;
import org.apache.shiro.authc.SimpleAuthenticationInfo;
import org.apache.shiro.authc.UnknownAccountException;
import org.apache.shiro.authc.UsernamePasswordToken;
import org.apache.shiro.authz.AuthorizationInfo;
import org.apache.shiro.authz.SimpleAuthorizationInfo;
import org.apache.shiro.realm.AuthorizingRealm;
import org.apache.shiro.subject.PrincipalCollection;
import org.springframework.beans.factory.annotation.Autowired;

import cn.jxc.pojo.Employee;
import cn.jxc.pojo.Permission;
import cn.jxc.service.EmployeeService;
import cn.jxc.service.PermissionService;

public class EmployeeRealm extends AuthorizingRealm {

	@Autowired
	private EmployeeService employeeService;
	@Autowired
	private PermissionService permissionService;
	

	/**
	 * ������Ȩ�ķ���
	 */
	@Override
	protected AuthorizationInfo doGetAuthorizationInfo(PrincipalCollection principalCollection) {
		// ��principals��ȡ�������Ϣ
		// ��getPrimaryPrincipal��������ֵתΪ��ʵ�������(���ϱߵ�goGetAuthenticationInfo��֤ͨ����䵽SimpleAuthenticationInfo)
		Employee emp = (Employee) principalCollection.getPrimaryPrincipal();
		System.err.println("==============������Ȩ�ķ���========================" + emp.getEmpLoginName());
		// System.out.println(username);
		// �����ݿ��ȡ��̬Ȩ������
		List<Permission> permissions = permissionService.findPermissionByEmp(emp.getEmpLoginName());
		System.err.println(permissions.size() + "   ~~~��Ȩ�ķ�����������������������");
		List<String> permissionCodes = new ArrayList<String>();
		if (permissions != null) {
			for (Permission per : permissions) {
				// �����ݿ��е�Ȩ�ޱ�ǩ�����뼯��
				permissionCodes.add(per.getPermissionCode());
			}
		}
		// �鵽Ȩ�����ݣ�������Ȩ��Ϣ(�����ϱߵ�permissions)
		SimpleAuthorizationInfo simpleAuthorizationInfo = new SimpleAuthorizationInfo();
		simpleAuthorizationInfo.addStringPermissions(permissionCodes);
		return simpleAuthorizationInfo;
	}

	/**
	 * ������֤�ķ���
	 */
	@Override
	protected AuthenticationInfo doGetAuthenticationInfo(AuthenticationToken authenticationToken)
			throws AuthenticationException {
		UsernamePasswordToken token = (UsernamePasswordToken) authenticationToken;
		System.err.println("������֤�ķ���=====================================" + "�û���" + token.getUsername());
		Employee emp = employeeService.findEmployeeByLoginName(token.getUsername());
		if (null == emp) {
			throw new UnknownAccountException();
		}
		SimpleAuthenticationInfo info = new SimpleAuthenticationInfo(emp, emp.getEmpLoginPwd(),
				this.getClass().getSimpleName());
		return info;
	}

}
