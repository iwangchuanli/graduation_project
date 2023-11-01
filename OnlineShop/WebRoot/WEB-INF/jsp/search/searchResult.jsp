<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%
	String path = request.getContextPath();
	String basePath = request.getScheme() + "://" + request.getServerName() + ":" + request.getServerPort()
			+ path + "/";
%>

<html>
<head>
<base href="<%=basePath%>">

<title>搜索结果</title>
<link rel="stylesheet" type="text/css"
	href="${pageContext.request.contextPath}/css/common.css">
<link rel="stylesheet" type="text/css"
	href="${pageContext.request.contextPath}/css/search/searchResult.css">

</head>

<body>
	<div id="body">
		<div id="div_top">
			<div id="div_top_logo" class="div_tops">
				<img id="img_logo" src="image/logo.png">
			</div>
			<div id="div_search" class="div_tops">
				<form id="div_top_search_form"
					action="${pageContext.request.contextPath}/search" method="get">
					<input id="input_search" type="text" maxlength="15" name="keyWord"
						placeholder="搜索用户、商品、商家"> <input id="bt_search"
						type="submit" value="">
				</form>
			</div>
			<div id="div_top_user" class="div_tops">
				<div id="div_user_operate">
					<img id="portrait" alt="portrait"
						src="${pageContext.request.contextPath}/image/default-head.png" />
					<c:choose>
						<c:when test="${sessionScope.user!=null}">
							<label>你好，${sessionScope.user.userName}</label>
						</c:when>
						<c:when test="${sessionScope.user==null}">
							<div id="div_top_user_operate">
								<label>你好，请</label> <a id="user_info_login"
									href="/OnlineShop/user_login">登录</a> <a id="user_info_reg"
									href="/OnlineShop/user_reg">注册</a>
							</div>
						</c:when>
					</c:choose>
				</div>
			</div>
		</div>
		<div id="div_middle"></div>
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
	</div>
</body>
</html>
