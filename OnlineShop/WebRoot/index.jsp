<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%
	String path = request.getContextPath();
	String basePath = request.getScheme() + "://" + request.getServerName() + ":" + request.getServerPort()
			+ path + "/";
%>

<!DOCTYPE html>
<html>
<head>
<title>网上商城</title>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/index_banner.css"
	media="screen" />

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.banner.revolution.min.js"></script>
<script type="text/javascript" src="js/banner.js"></script>
</head>
<body>
	<div id="div_body">
		<div id="div_top">
			<div id="div_top_logo" class="div_tops">
				<img id="img_logo" src="image/logo.png">
			</div>
			<div id="div_search" class="div_tops">
				<form id="div_top_search_form"
					action="${pageContext.request.contextPath}/search" method="get">
					<input id="input_search" type="text" maxlength="15" name="keyWord"
						placeholder="搜索用户、商品、商家"> <input id="bt_search" type="submit"
						value="">
				</form>
			</div>
			<div id="div_top_user" class="div_tops">
				<div id="div_user_operate">
					<img id="portrait" alt="portrait" src="image/default-head.png" />
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

		<div id="div_middle">
			<div id="wrapper">
				<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<ul>
							<li data-transition="3dcurtain-horizontal" data-slotamount="15"
								data-masterspeed="300"><img src="image/slides/slide3.jpg"
								alt="" /></li>
							<li data-transition="3dcurtain-vertical" data-slotamount="15"
								data-masterspeed="300" data-link="#"><img
								src="image/slides/slide5.jpg" alt="" /></li>
							<li data-transition="papercut" data-slotamount="15"
								data-masterspeed="300" data-link="#"><img
								src="image/slides/slide2.jpg" alt="" /></li>
							<li data-transition="turnoff" data-slotamount="15"
								data-masterspeed="300"><img src="image/slides/slide1.jpg"
								alt="" /></li>
							<li data-transition="flyin" data-slotamount="15"
								data-masterspeed="300"><img src="image/slides/slide6.jpg"
								alt="" /></li>
						</ul>
					</div>
				</div>
				<div id="div_middle_catalog">
					<div id="div_middle_catalog_man" class="div_catalog">
						<img class="div_middle_catalog_img" alt="男装" src="image/catalog/man.jpg">
						<p class="catalog_name">男装</p>
						<hr class="catalog_separator">
						<ul>
							<li><a href="">外套</a></li>
							<li><a href="">鞋裤</a></li>
						</ul>
					</div>
					<div id="div_middle_catalog_woman" class="div_catalog">
						<img class="div_middle_catalog_img" alt="女装" src="image/catalog/woman.jpg">
						<p class="catalog_name">女装</p>
						<hr class="catalog_separator">
						<ul>
							<li><a href="">外套</a></li>
							<li><a href="">鞋裤</a></li>
						</ul>
					</div>
					<div id="div_middle_catalog_read" class="div_catalog">
					<img class="div_middle_catalog_img" alt="阅读" src="image/catalog/read.jpg">
						<p class="catalog_name">阅读</p>
						<hr class="catalog_separator">
						<ul>
							<li><a href="">文学</a></li>
							<li><a href="">科幻</a></li>
						</ul>
					</div>
					<div id="div_middle_catalog_digital" class="div_catalog">
						<img class="div_middle_catalog_img" alt="数码" src="image/catalog/digital.jpg">
						<p class="catalog_name">数码</p>
						<hr class="catalog_separator">
						<ul>
							<li><a href="">电脑</a></li>
							<li><a href="">手机</a></li>
						</ul>
					</div>
					<div id="div_middle_catalog_outdoor" class="div_catalog">
					<img class="div_middle_catalog_img" alt="户外" src="image/catalog/outdoor.jpg">
						<p class="catalog_name">户外</p>
						<hr class="catalog_separator">
						<ul>
							<li><a href="">运动</a></li>
							<li><a href="">探险</a></li>
						</ul>
					</div>
				</div>
			</div>


			<div id="div_bottom">
				<div id="div_bottom_rights">
					<hr id="bottom_separator">
					<p>
						基于SpringMVC、Spring和MyBatis的网上商城<br>
						1306102-04 廖俊瑶 毕业设计
						<br>
						<img class="img_frameworks" alt="Spring" src="image/spring-logo.png"/>
						<img class="img_frameworks" alt="MyBatis" src="image/mybatis-logo.png"/>
						<br>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
