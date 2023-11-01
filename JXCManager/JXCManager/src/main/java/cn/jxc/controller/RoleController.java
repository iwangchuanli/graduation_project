package cn.jxc.controller;

import java.util.Arrays;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import com.alibaba.fastjson.JSON;
import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.Permission;
import cn.jxc.pojo.Role;
import cn.jxc.service.PermissionService;
import cn.jxc.service.RoleService;

@Controller
public class RoleController {

	@Autowired
	private RoleService roleService;
	@Autowired
	private PermissionService permissionService;

	@RequestMapping("/goRole")
	public String goRole(@RequestParam(value = "pageNo", required = false) Integer pageNo, Model model) {
		if (null == pageNo) {
			pageNo = 1;
		}
		PageInfo<Role> roleAll = roleService.getRoleAll(pageNo, 5);
		List<Permission> permissionAll = permissionService.getPermissionAll(1, 10000).getList();
		model.addAttribute("roleAll", roleAll);
		model.addAttribute("permissionAll", permissionAll);
		return "role/role";
	}

	@RequestMapping("/goRoleAdd")
	public String goRoleAdd(Role role) {
		int s = roleService.addRole(role);
		if (s > 0) {
			return "redirect:goRole";
		}
		return "error"; // ���ʧ�� ��ת������ҳ��
	}

	/**
	 * �ύ�޸�
	 * 
	 * @param roleId
	 *            ���
	 * @param roleName
	 *            ����
	 * @param roleCode
	 *            ����
	 * @param description
	 *            ����
	 * @return
	 */
	@RequestMapping("/roleUpdateForm")
	public String goRoleUpdate(Integer roleId, @RequestParam("roleUpdateName") String roleName,
			@RequestParam("roleUpdateCode") String roleCode, @RequestParam("updateDescription") String description) {
		Role role = new Role(roleId, roleName, description, roleCode);
		int updateRole = roleService.updateRole(role);
		if (updateRole > 0) { // �޸ĳɹ�
			return "redirect:goRole";
		}
		return "error";
	}

	/**
	 * ajax ���ݽ�ɫ��Ų�ѯ��ɫ��Ϣ
	 * 
	 * @param roleId
	 *            ��ɫ���
	 * @return
	 */
	@RequestMapping("/findRoleById")
	@ResponseBody
	public String getRoleById(Integer roleId) {
		Role findRoleById = roleService.findRoleById(roleId);
		return JSON.toJSONString(findRoleById);
	}

	/**
	 * ���ݽ�ɫID��ѯӵ�е�Ȩ����Ϣ
	 * 
	 * @param roleId
	 *            ��ɫ���
	 * @return
	 */
	@RequestMapping("/findPermissionByRoleId")
	@ResponseBody
	public String findPermissionByRoleId(Integer roleId) {
		List<Permission> permissionByRole = permissionService.getPermissionByRole(roleId.toString());
		return JSON.toJSONString(permissionByRole);
	}

	/**
	 * ����Ȩ�� �ύ�޸�
	 * 
	 * @param assignRoleId
	 *            Ҫ����Ľ�ɫ
	 * @param assignRole
	 *            Ҫ�����Ȩ��
	 * @return
	 */
	@RequestMapping("/goRolePermissionAssign")
	public String goRolePermissionAssign(Integer assignRoleId, Integer[] assignRole) {
		List<Integer> permissions = null;
		if (assignRole != null) {
			permissions = Arrays.asList(assignRole);
		}
		Integer a = permissionService.addRolePermissionAssign(assignRoleId, permissions);
		if (a == 1) { // Ȩ�޷���ɹ�
			return "redirect:goRole";
		}
		return "error";
	}

	/**
	 * ɾ����ɫ
	 * 
	 * @param roleId
	 * @return
	 */
	@RequestMapping("/deleteRoleById")
	public String deleteRoleById(@RequestParam("roleId") String roleId) {
		System.out.println(roleId);
		int a = roleService.delRoleById(roleId);
		if (a > 0) { // ɾ���ɹ�
			return "redirect:goRole";
		}
		return "error";
	}

	/**
	 * ���ݽ�ɫ�����Ƿ��б�����
	 * 
	 * @param roles
	 * @return
	 */
	@ResponseBody
	@RequestMapping("/roleJudgmen")
	public String judgmen(String roles) {
		System.err.println(roles);
		Integer roleJudgmen = roleService.roleJudgmen(roles);
		if (roleJudgmen > 0) {
			return "1";
		}
		return "0";
	}

}
