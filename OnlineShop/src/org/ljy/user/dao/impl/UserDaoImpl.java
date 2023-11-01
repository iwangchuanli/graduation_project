package org.ljy.user.dao.impl;

import java.util.List;

import org.ljy.domain.User;
import org.ljy.user.dao.IUserDao;
import org.springframework.stereotype.Repository;
@Repository("userDao")
public class UserDaoImpl implements IUserDao {

	@Override
	public User addUser(User user) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public boolean deleteUserByUserName(String userName) {
		// TODO Auto-generated method stub
		return false;
	}

	@Override
	public boolean deleteUserByUserID(String userID) {
		// TODO Auto-generated method stub
		return false;
	}

	@Override
	public User updateUser(User user) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<User> queryUserByUserName(String userName) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public User queryUserByUserID(String userID) {
		// TODO Auto-generated method stub
		return null;
	}
	
}
