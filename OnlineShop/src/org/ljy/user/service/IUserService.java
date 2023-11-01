package org.ljy.user.service;

import java.util.List;

import org.ljy.domain.User;

/**
 * User接口
 * 
 * @author 廖俊瑶 2016年12月10日
 */
public interface IUserService {
	/**
	 * 用户注册
	 * 
	 * @param user
	 * @return 注册成功的User
	 */
	public User register(User user);

	/**
	 * 用户登录
	 * 
	 * @param user
	 * @return 登录成功的User
	 */
	public User login(User user);

	/**
	 * 根据UserName查询User
	 * 
	 * @param userName
	 * @return 一个或多个User
	 */
	public List<User> queryUserByUserName(String userName);

	/**
	 * 根据UserID查询User
	 * 
	 * @param userID
	 * @return 一个User
	 */
	public User queryUserByUserID(String userID);
}
