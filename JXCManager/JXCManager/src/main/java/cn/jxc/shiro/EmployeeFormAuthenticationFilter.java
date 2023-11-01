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
		System.err.println("进入登录成功的方法");
		Employee employee = (Employee) subject.getPrincipal();
		System.err.println(employee.getEmpLoginName() + "=============" + employee.getEmpLoginPwd());
		// session中添加登录的信息
		HttpSession session = ((HttpServletRequest) request).getSession();
		
		session.setAttribute("loginEmp", employee);
		List<Permission> list = permissionService.findPermissionByEmp(employee.getEmpLoginName());
		List<Permission> navi = new ArrayList<Permission>();
		for (Permission permission : list) {
			if (permission.getIsNavi() == 1) {
				navi.add(permission); // 如果是一级加入集合
			}
		}
		session.setAttribute("navibar", navi);
		
//		List<String> roles = new ArrayList<String>();
		//根据用户名查找所有角色  并且加入集合中
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
