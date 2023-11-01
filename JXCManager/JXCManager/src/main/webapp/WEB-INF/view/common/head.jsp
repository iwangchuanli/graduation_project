<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/fmt" prefix="fmt"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn"%>
<!-- start: Header -->

<div class="navbar">
	<!-- 首部开始 -->
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse"
				data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse"> <span
				class="icon-bar"></span> <span class="icon-bar"></span> <span
				class="icon-bar"></span>
			</a> <a class="brand" href="javascript:;"
				onclick="javascript:location.href='gowelcome';"><span>进销存</span></a>

			<!-- start: Header Menu -->
			<div class="nav-no-collapse header-nav">
				<ul class="nav pull-right">
					<li class="dropdown"><a
						class="btn dropdown-toggle" data-toggle="dropdown" href="javascript:;"> <i
							class="icon-group"></i>
					</a>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-title"><span>拥有${fn:length(emproles)}个角色</span>
							</li>

							<c:forEach items="${emproles}" var="s">
								<li><a href="javascript:;"> <span class="message">${s.roleName}</span>
								</a></li>
							</c:forEach>

						</ul></li>
					<li class="dropdown"><a class="btn dropdown-toggle"
						data-toggle="dropdown" href="#"> <i
							class="halflings-icon white user"></i>${loginEmp.empLoginName}<span
							class="caret"></span>
					</a>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-title"><span>账户设置</span></li>
							<!-- <li><a href="#"><i class="halflings-icon user"></i> 修改密码</a></li> -->
							<li><a href="javascript:;"
								onclick="javascript:location.href='logout';"><i
									class="halflings-icon off"></i> 注销</a></li>
						</ul></li>
					<!-- end: User Dropdown -->
				</ul>
			</div>
			<!-- end: Header Menu -->
		</div>
	</div>
</div>
<!-- start: Header -->