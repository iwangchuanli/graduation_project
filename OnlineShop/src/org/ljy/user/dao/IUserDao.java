package org.ljy.user.dao;

import java.util.List;

import org.ljy.domain.User;

public interface IUserDao {
	/**
	 * 添加一个新用户到数据库
	 * 
	 * @param user
	 * @return 新注册的User
	 */
	public User addUser(User user);

	/**
	 * 根据userName删除用户
	 * 
	 * @param userName
	 * @return 成功删除则返回true，否则返回false
	 */
	public boolean deleteUserByUserName(String userName);

	/**
	 * 根据userID删除用户
	 * 
	 * @param userID
	 * @return 成功删除则返回true，否则返回false
	 */
	public boolean deleteUserByUserID(String userID);

	/**
	 * 更新用户信息
	 * 
	 * @param user
	 * @return 更新信息后的User
	 */
	public User updateUser(User user);

	/**
	 * 根据userName查询用户
	 * 
	 * @param userName
	 * @return 查询到用户则返回List<User>，否则返回null
	 */
	public List<User> queryUserByUserName(String userName);

	/**
	 * 根据userID查询用户
	 * 
	 * @param userID
	 * @return 查询到用户则返回User，否则返回null
	 */
	public User queryUserByUserID(String userID);
}
