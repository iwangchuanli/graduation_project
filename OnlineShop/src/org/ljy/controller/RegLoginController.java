package org.ljy.controller;

import org.ljy.domain.User;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
/**
 * 
 * @author 廖俊瑶
 *
 */
@Controller
public class RegLoginController{
	@RequestMapping("/")
	public String index(){
		return "../../index";
	}
	
	@RequestMapping("/user_reg")
	public String userRegPage(){
		return "user/userReg";
	}
	
	@RequestMapping("/user_reg/confirm")
	public String user_Register(User user){
		System.out.println(user);
		return "redirect:/";
	}
	
	@RequestMapping("/user_login")
	public String userLogin(){
		return "user/userLogin";
	}
	
}
