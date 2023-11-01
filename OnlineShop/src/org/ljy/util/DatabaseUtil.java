package org.ljy.util;

import java.io.InputStream;

import org.apache.ibatis.session.SqlSession;
import org.apache.ibatis.session.SqlSessionFactory;
import org.apache.ibatis.session.SqlSessionFactoryBuilder;

/**
 * 数据库查询工具
 * 
 * @author 廖俊瑶
 *
 */

public class DatabaseUtil {

	private SqlSessionFactory sessionFactory;
	private SqlSession session;

	/*
	 * 1、定位MyBatis的配置文件位置；
	 * 2、获得SqlSessionFactory；
	 * 3、获得SqlSession
	 */
	public DatabaseUtil() {
		String cfgXml = "org/ljy/config/mybatis-cfg.xml";
		InputStream is = DatabaseUtil.class.getResourceAsStream(cfgXml);
		sessionFactory = new SqlSessionFactoryBuilder().build(is);
		session = sessionFactory.openSession();
	}

	/**
	 * 获得SqlSession
	 * @return SqlSession
	 */
	public SqlSession getSession() {
		return session;
	}

}
