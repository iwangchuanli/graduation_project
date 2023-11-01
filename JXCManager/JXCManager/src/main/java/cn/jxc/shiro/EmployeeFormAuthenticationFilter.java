package cn.jxc.shiro;

import java.util.ArrayList;
import java.util.List;

import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import org.apache.shiro.authc.AuthenticationToken;
import org.apache.shiro.subject.Subject;
import org.apache.shiro.web.filter.authc.FormAuthenticationFilter;
import org.springframework.beans.factory.annotation.Autowired;

import cn.jxc.pojo.Employee;
import cn.jxc.pojo.Permission;
import cn.jxc.pojo.Role;
import cn.jxc.service.PermissionService;
import cn.jxc.service.RoleService;

public class EmployeeFormAuthenticationFilter extends FormAuthenticationFilter {

	@Autowired
	private PermissionService permissionService;
	@Autowired
	private RoleService roleService;

	@Override
	protected boolean onLoginSuccess(AuthenticationToken token, Subject subject, ServletRequest request,
			ServletResponse response) throws Exception {
		System.err.println("�����¼�ɹ��ķ���");
		Employee employee = (Employee) subject.getPrincipal();
		System.err.println(employee.getEmpLoginName() + "=============" + employee.getEmpLoginPwd());
		// session����ӵ�¼����Ϣ
		HttpSession session = ((HttpServletRequest) request).getSession();
		
		session.setAttribute("loginEmp", employee);
		List<Permission> list = permissionService.findPermissionByEmp(employee.getEmpLoginName());
		List<Permission> navi = new ArrayList<Permission>();
		for (Permission permission : list) {
			if (permission.getIsNavi() == 1) {
				navi.add(permission); // �����һ�����뼯��
			}
		}
		session.setAttribute("navibar", navi);
		
//		List<String> roles = new ArrayList<String>();
		//�����û����������н�ɫ  ���Ҽ��뼯����
		List<Role> findRoleByEmp = roleService.findRoleByEmp(employee.getEmpLoginName());
//		if (findRoleByEmp != null) {
//			for (Role role : findRoleByEmp) {
//				roles.add(role.getRoleName());
//				System.err.println(role.getRoleName());
//			}
//		}
		session.setAttribute("emproles", findRoleByEmp);
		return super.onLoginSuccess(token, subject, request, response);
	}

}
