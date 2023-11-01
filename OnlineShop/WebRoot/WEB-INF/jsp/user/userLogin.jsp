<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%
	String path = request.getContextPath();
	String basePath = request.getScheme() + "://" + request.getServerName() + ":" + request.getServerPort()
			+ path + "/";
%>

<html>
<head>
<base href="<%=basePath%>">

<title>用户登录</title>

<link rel="stylesheet" type="text/css"
	href="${pageContext.request.contextPath}/css/user/login.css">
<link rel="stylesheet" type="text/css"
	href="${pageContext.request.contextPath}/css/common.css">
<script src="/OnlineShop/js/jquery-1.8.3.min.js"></script>
<script src="/OnlineShop/js/geetest.js"></script>
<script src="/OnlineShop/js/user/login.js"></script>
</head>

<body>
	<div id="div_top">
		<a href="${pageContext.request.contextPath}"><img id="logo"
			alt="LOGO" src="image/logo.png" /></a>
		<div class="separator"></div>
		<div id="div_title">
			<h1>用户登录</h1>
		</div>
	</div>
	<div id="div_middle">
		<div id="div_logn_table">
			<table id="login_table">
				<tr>
					<td colspan="2"><img id="portrait" alt="portrait"
						src="image/default-head.png"></td>
				</tr>
				<tr>
					<td>用户名：</td>
					<td colspan="2"><input class="inp" id="input_userName"
						type="text" name="userName"></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td colspan="2"><input class="inp" id="input_password"
						type="password" name="password"></td>
				</tr>
				<tr>
					<td colspan="2"><input class="btn" id="popup-submit"
						type="submit" value="确认"></td>
				</tr>
			</table>
			<div id="popup-captcha"></div>
		</div>
	</div>
	<div id="div_bottom">
		<div id="div_bottom_rights">
			<hr id="bottom_separator">
			<p>
				基于SpringMVC、Spring和MyBatis的网上商城<br> 1306102-04 廖俊瑶 毕业设计 <br>
				<img class="img_frameworks" alt="Spring"
					src="${pageContext.request.contextPath}/image/spring-logo.png" />
				<img class="img_frameworks" alt="MyBatis"
					src="${pageContext.request.contextPath}/image/mybatis-logo.png" />
				<br>
			</p>
		</div>
	</div>
</body>
</html>
