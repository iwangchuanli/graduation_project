package org.ljy.controller.verify;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.ljy.common.Constants;
import org.ljy.common.GeetestLib;

@WebServlet("/startCaptcha")
public class StartCaptchaServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		GeetestLib gtSdk = new GeetestLib(Constants.GEETEST_ID, Constants.GEETEST_KEY);

		String resStr = "{}";

		// 自定义userName
		String userName = request.getParameter("userName");
		System.out.println(userName);
		// 进行验证预处理
		int gtServerStatus = gtSdk.preProcess(userName);

		// 将服务器状态设置到session中
		request.getSession().setAttribute(gtSdk.gtServerStatusSessionKey, gtServerStatus);
		// 将userName设置到session中
		request.getSession().setAttribute("userName", userName);

		resStr = gtSdk.getResponseStr();

		PrintWriter out = response.getWriter();
		out.println(resStr);

	}

}
