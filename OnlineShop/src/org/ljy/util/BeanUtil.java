package org.ljy.util;

import javax.servlet.ServletContext;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import org.springframework.context.ApplicationContext;
import org.springframework.web.context.support.WebApplicationContextUtils;

/**
 * 获取Spring容器中的Bean的工具类
 * @author 廖俊瑶
 * 2017年1月14日 11:22:30
 */
public class BeanUtil {
	private HttpSession session;
	private HttpServletRequest request;
	private ApplicationContext appContext;
	
	public BeanUtil(HttpSession session, HttpServletRequest request, ApplicationContext appContext) {
		this.session = session;
		this.request = request;
		this.appContext = appContext;
		session =request.getSession();
		ServletContext context = session.getServletContext();
		appContext = WebApplicationContextUtils.getWebApplicationContext(context);
	}
	public HttpSession getSession() {
		return session;
	}
	public void setSession(HttpSession session) {
		this.session = session;
	}
	public HttpServletRequest getRequest() {
		return request;
	}
	public void setRequest(HttpServletRequest request) {
		this.request = request;
	}
	public ApplicationContext getAppContext() {
		return appContext;
	}
	public void setAppContext(ApplicationContext appContext) {
		this.appContext = appContext;
	}
	
}
