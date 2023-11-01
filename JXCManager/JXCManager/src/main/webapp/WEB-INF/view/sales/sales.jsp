<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/fmt" prefix="fmt"%>
<%@ taglib uri="http://shiro.apache.org/tags" prefix="shiro"%>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- start: Meta -->
<meta charset="utf-8">
<title></title>
<meta name="description" content="Bootstrap Metro Dashboard">
<meta name="author" content="Dennis Ji">
<meta name="keyword"
	content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<!-- end: Meta -->
<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end: Mobile Specific -->

<!-- start: CSS -->
<link id="bootstrap-style" href="static/css/bootstrap.min.css"
	rel="stylesheet">
<link href="static/css/bootstrap-responsive.min.css" rel="stylesheet">
<link id="base-style" href="static/css/style.css" rel="stylesheet">
<link id="base-style-responsive" href="static/css/style-responsive.css"
	rel="stylesheet">
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
	rel='stylesheet' type='text/css'>
<!-- end: CSS -->

<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="static/css/ie.css" rel="stylesheet">
	<![endif]-->

<!--[if IE 9]>
		<link id="ie9style" href="static/css/ie9.css" rel="stylesheet">
	<![endif]-->

<!-- start: Favicon -->
<link rel="shortcut icon" href="static/img/favicon.png">
<!-- end: Favicon -->
</head>

<body>
	<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Content -->
			<div id="content" class="span10">
				<ul class="breadcrumb">
					<li><i class="icon-home"></i> <a href="index.html">Home</a> <i
						class="icon-angle-right"></i></li>
					<li><a href="form">销售管理</a></li>
				</ul>

				<div class="row-fluid">
					<form class="form-horizontal" action="gosales"
						method="post">
						<div class="control-group">
							<div data-condition="search">
								销售单号:<input type="text" name="soId" class="input-medium"
									placeholder="请输入销售单号" /> 销售人:<input type="text"
									name="empLoginName" class="input-medium" placeholder="请输入销售人名称" />
								<input type="submit" value="搜索" class="btn btn-success" />
								<button class="btn btn-success " data-command="Clear">
									<i class="icon-random"></i>&nbsp;清空搜索条件
								</button>
								<div style="float: right;">
									<a id="add" class="btn btn-primary" href="gosalesSearch" data-command="Add"><i
										class="icon-plus"></i>&nbsp;申请</a> <a class="btn btn-warning"
										href="javascript:void(0)" data-command="Delete"><i
										class="icon-remove"></i>&nbsp;删除</a> <a class="btn btn-danger"
										href="javascript:void(0)" data-command="Refresh"><i
										class="icon-refresh"></i>&nbsp;刷新</a>
								</div>

							</div>
						</div>

					</form>
				</div>

				<div class="box">
					<div class="box-header" data-original-title>
						<h2>
							<i class="halflings-icon white user"></i><span class="break"></span>销售订单管理
						</h2>
					</div>
					<div class="box-content">
						<table
							class="table table-striped table-bordered bootstrap-datatable">
							<thead>
								<tr>
									<th><input type="checkbox"></th>
									<th>编号</th>
									<th>销售人</th>
									<th>客户</th>
									<th>交易时间</th>
									<th>销售金额</th>
									<th>审核人</th>
									<th>审核时间</th>
									<th>审核状态</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<c:forEach items="${prbb.list}" var="s">
									<tr>
										<th><input type="checkbox"></th>
										<td>${s.soId}</td>
										<td>${s.employeeByEmployeeId.empLoginName}</td>
										<td>${s.customer.cusName}</td>
										<td class="center"><fmt:formatDate value="${s.salesTime}"
												pattern="yyyy-MM-dd" /></td>
										<td>${s.salesPrice }</td>
										<td class="center">${s.employeeByReviewEmpId.empLoginName }</td>
										<td><fmt:formatDate value="${s.reviewDate}"
												pattern="yyyy-MM-dd" /></td>
										<td class="center"><span class="label label-success">${s.reviewstatus.rsName }</span>
										</td>
										<td class="center"><a class="btn btn-info btn-setting"
											href="goPurchaseDetail"> <i
												class="halflings-icon white zoom-in"></i>
										</a> <a class="btn btn-success" href="gosalesadd"> &nbsp;<i
												class="icon-plus"></i>
										</a> <a class="btn btn-info" href="gosalesupdate"> &nbsp;<i
												class="halflings-icon white edit"></i>
										</a> <a class="btn btn-danger" href="#"> &nbsp;<i
												class="halflings-icon white trash"></i>
										</a></td>
									</tr>
								</c:forEach>

							</tbody>
						</table>
					</div>
					<div class="pagination pagination-centered">
								<ul>
									<li><a href="javascript:goproductpage(1);">First</a></li>
									<li><a href="javascript:goproductpage('pre');">Prev</a></li>
									<c:if test="${prbb.pageNum-2>1}">
										<li><a>...</a></li>
									</c:if>
									<c:forEach begin="1" end="${prbb.pages}" var="s">
										<c:if test="${s>=prbb.pageNum-2 && s<=prbb.pageNum+2 }">
											<li <c:if test="${s==prbb.pageNum}">class="active"</c:if>>
												<a href="javascript:goproductpage(${s});">${s}</a>
											</li>
										</c:if>
									</c:forEach>
									<c:if test="${prbb.pageNum+2<prbb.pages}">
										<li><a>...</a></li>
									</c:if>
									<li><a href="javascript:goproductpage('next');">Next</a> <!-- 隐藏域 存放当前页码 -->
										<input type="hidden" name="pageNo" value="${prbb.pageNum}" /></li>
									<li><a href="javascript:goproductpage(${prbb.pages});">Last</a></li>
								</ul>
							</div>
				</div>
				<!--/span-->
			</div>
			<!--/row-->
		</div>
		<!--/.fluid-container-->

		<!-- end: Content -->
	</div>
	<!--/#content.span10-->
	<!--/fluid-row-->
	<div class="modal hide fade" id="myModal" style="width: 800px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h2>销售订单明细</h2>
		</div>
		<div class="modal-body">
			<!-- 采购订单中所有内容 -->
			<div>
				<table style="width: 100%;">
					<tr style="height: 30px;">
						<td>编号:aaa</td>
						<td>销售人:张三</td>
						<td>客户:李四</td>
					</tr>
					<tr style="height: 30px;">
						<td>交易时间:2016-02-03</td>
						<td>销售金额:100000</td>
						<td>审核人:王五</td>
					</tr>
					<tr style="height: 30px;">
						<td>审核时间:2016-02-03</td>
						<td>审核状态:审核通过</td>
					</tr>
					<tr style="height: 30px;">
						<td colspan="3">备注:今天周二</td>
					</tr>
				</table>
			</div>
			<div class="box-content">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>产品名称</th>
							<th>产品编号</th>
							<th>规格</th>
							<th>数量</th>
							<th>单价</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Dennis Ji</td>
							<td class="center">2012/01/01</td>
							<td class="center">Member</td>
							<td class="center">Active</td>
							<td class="center">sss</td>
						</tr>
						<tr>
							<td>Dennis Ji</td>
							<td>2012/01/01</td>
							<td class="center">Member</td>
							<td class="center">Active</td>
							<td class="center">sss</td>
						</tr>
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					<ul>
						<li><a href="#">上一页</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">下一页</a></li>
					</ul>
				</div>
			</div>

		</div>
		<div class="modal-footer">
			<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
		</div>
	</div>

	<!-- 页面尾部 -->
	<%-- <%@ include file="common/foot.jsp"%> --%>
	<!-- start: JavaScript-->

	<script src="static/js/jquery-1.9.1.min.js"></script>
	<script src="static/js/jquery-migrate-1.0.0.min.js"></script>

	<script src="static/js/jquery-ui-1.10.0.custom.min.js"></script>

	<script src="static/js/jquery.ui.touch-punch.js"></script>

	<script src="static/js/modernizr.js"></script>

	<script src="static/js/bootstrap.min.js"></script>

	<script src="static/js/jquery.cookie.js"></script>

	<script src='static/js/fullcalendar.min.js'></script>

	<script src='static/js/jquery.dataTables.min.js'></script>

	<script src="static/js/excanvas.js"></script>
	<script src="static/js/jquery.flot.js"></script>
	<script src="static/js/jquery.flot.pie.js"></script>
	<script src="static/js/jquery.flot.stack.js"></script>
	<script src="static/js/jquery.flot.resize.min.js"></script>

	<script src="static/js/jquery.chosen.min.js"></script>

	<script src="static/js/jquery.uniform.min.js"></script>

	<script src="static/js/jquery.cleditor.min.js"></script>

	<script src="static/js/jquery.noty.js"></script>

	<script src="static/js/jquery.elfinder.min.js"></script>

	<script src="static/js/jquery.raty.min.js"></script>

	<script src="static/js/jquery.iphone.toggle.js"></script>

	<script src="static/js/jquery.uploadify-3.1.min.js"></script>

	<script src="static/js/jquery.gritter.min.js"></script>

	<script src="static/js/jquery.imagesloaded.js"></script>

	<script src="static/js/jquery.masonry.min.js"></script>

	<script src="static/js/jquery.knob.modified.js"></script>

	<script src="static/js/jquery.sparkline.min.js"></script>

	<script src="static/js/counter.js"></script>

	<script src="static/js/retina.js"></script>

	<script src="static/js/custom.js"></script>
	<!-- 自己编写JS代码 -->
	<script src="static/own/purchase.js"></script>

	<script type="text/javascript">
	
	function goAdd(){
		location.href="gosalesSearch";
	}
	
	function goproductpage(type) {
		var pageNum = parseInt($("input[name=pageNo]").val()); //获取当前的页码
		var pagePageTotal = parseInt('${prbb.pages}'); //总页数
		if (pageNum == 1 && type == 'pre') {
			return;
		}
		if (pageNum == pagePageTotal && type == 'next') {
			return;
		}
		if (type == "next") { //下一页
			pageNum = pageNum + 1;
		} else if (type == "pre") { //上一页
			pageNum = pageNum - 1;
		} else {
			pageNum = parseInt(type);
		}
		location.href = "gosales?pageNo=" + pageNum;
	}
	</script>
	<!--
		end: JavaScript-->

</body>
</html>
