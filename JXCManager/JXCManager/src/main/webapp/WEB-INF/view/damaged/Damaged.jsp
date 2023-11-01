<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
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
<!-- <link rel="stylesheet" href="static/css/bootstrap.css"/> -->
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
<style type="text/css">
h3 {
	display: inline;
}
</style>
<body>
	<div class="container-fluid-full">
		<div class="row-fluid">
			<!-- start: Content -->
			<div id="content" class="span10">
				<ul class="breadcrumb">
					<li><i class="icon-home"></i> <a href="gowelcome">首页</a> <i
						class="icon-angle-right"></i></li>
					<li><a href="godamaged">报损订单管理</a></li>
				</ul>

				<div class="row-fluid">
					<form action="godamaged" method="post" class="form-horizontal">
						<div class="control-group">
							<div data-condition="search">
								报损单号:<input type="text" name="damagedRequestId"
									class="input-medium" id="damagedRequestId" placeholder="请输入报损单号"
									value="${damagedRequestId }" /> 制单人: <input type="text"
									name="requestEmp"  class="input-medium" placeholder="请输入制单人"
									value="${requestEmp }" />制单时间：<input type="text" 
									  name="startDate" value="${startDate }" readonly="readonly"
									class="input-small datepicker" placeholder="开始时间" /> 至
									<input type="text" style="width: 100px" name="endDate" value="${endDate }" readonly="readonly"
									class="input-small datepicker" placeholder="结束时间" />
								<button type="submit" class="btn btn-success"
									data-command="search">
									<i class="icon-search"></i>&nbsp;搜索
								</button>
								<div style="float: right;">
									<shiro:hasPermission name="damaged:add">
										<a class="btn btn-primary" href="damagedrequestadd"
											data-command="Add"><i class="icon-plus"></i>&nbsp;新增报损</a>
									</shiro:hasPermission>
									<shiro:hasPermission name="damaged:delete">
										<a class="btn btn-warning" href="javascript:void(0)"
											onclick="deleteDamagedRequest()" data-command="Delete"><i
											class="icon-remove"></i>&nbsp;删除</a>
									</shiro:hasPermission>
									<div class="btn-group">
										<button class="btn btn-success dropdown-toggle"
											data-toggle="dropdown">
											<span class="caret"></span>&nbsp;导出
										</button>
										<ul class="dropdown-menu">
											<li><a href="javascript:;" onclick="exportAllData()">导出所有数据</a></li>
											<li><a href="javascript:;" onclick="exportCurrentData()">导出当前显示的数据</a></li>
										</ul>
									</div>
									<a class="btn btn-danger" href="godamaged"
										data-command="Refresh"><i class="icon-refresh"></i>&nbsp;刷新</a>
								</div>
							</div>
						</div>
					</form>
					<div class="box">
						<div class="box-header" data-original-title>
							<h2>
								<i class="halflings-icon white user"></i><span class="break"></span>报损订单管理
							</h2>
						</div>
						<div style="clear: both;">&nbsp;</div>
						<div style="clear: both;">&nbsp;</div>
						<div class="box-content" style="z-index: 1;">
							<table
								class="table table-striped table-bordered bootstrap-datatable">
								<thead>
									<tr>
										<th><input type="checkbox" id="productCheckAll" /></th>
										<th align="center">报损单号</th>
										<th align="center">制单人</th>
										<th align="center">制单时间</th>
										<th align="center">所在仓库</th>
										<th align="center">报损详情</th>
										<th align="center">操作</th>
									</tr>
								</thead>
								<tbody id="productBody">
									<c:forEach var="d" items="${damged.list}">
										<tr>
											<th><input type="checkbox" name="productCheck"
												value="${d.damagedRequestId}" /></th>
											<td>${d.damagedRequestId}</td>
											<td class="center">${d.requestEmp.empLoginName}</td>
											<td class="center"><fmt:formatDate
													value="${d.requestTime}" pattern="yyyy-MM-dd hh:mm" /></td>
											<td>${d.damagedStoreHouse.shName}</td>
											<td><span
												<c:choose>
													<c:when test="${d.orderStatus.no==2}">class="label label-important"</c:when>
													<c:when test="${d.orderStatus.no==1}">class="label label-warning"</c:when>
													<c:when test="${d.orderStatus.no==7}">class="label label-success"</c:when>
													<c:when test="${d.orderStatus.no==5}">class="label label-important"</c:when>
													<c:otherwise>class="label label-info"</c:otherwise>
												</c:choose>>${d.orderStatus.orderType}</span>
											</td>
											<td><input type="hidden" value="${d.damagedRequestId}" />
												<a id="detail" href="javascript:;">查看</a> <shiro:hasPermission
													name="damaged:update">
													<shiro:hasPermission name="damaged:update">
														<c:if
															test="${d.orderStatus.no ==1 || d.orderStatus.no ==5}">
															<a href="javascript:;"
																onclick="javascript:location.href='goDamagedUpdate?damagedRequestId=${d.damagedRequestId}';">编辑</a>
														</c:if>
													</shiro:hasPermission>
													<c:if test="${d.orderStatus.no ==9}">
														<a href="javascript:;"
															onclick="operaDamaged('${d.damagedRequestId}',7)">出库</a>
													</c:if>
												</shiro:hasPermission> <c:if test="${d.orderStatus.no==1 }">
													<a href="javascript:;"
														onclick="operaDamaged('${d.damagedRequestId}',3)">提交</a>
													<a href="javascript:;"
														onclick="operaDamaged('${d.damagedRequestId}',2)">取消</a>
												</c:if> <shiro:hasPermission name="damaged:review">
													<c:if test="${ d.orderStatus.no == 3 }">
														<a href="javascript:;" id="deptreview"
															onclick="damagedReview('${d.damagedRequestId}')">审核</a>
													</c:if>
												</shiro:hasPermission></td>
										</tr>
									</c:forEach>
								</tbody>
							</table>
						</div>
						<div class="pagination pagination-centered">
							<ul id="productPageButton">
								<li><a href="godamaged?pageNo=1">首页</a></li>
								<li><a href="javascript:goproductpage('pre');">上一页</a> <input
									type="hidden" name="pageNo" value="${damged.pageNum}" /></li>
								<c:if test="${damged.pageNum-2>1}">
									<li><a>...</a></li>
								</c:if>
								<c:forEach begin="1" end="${damged.pages}" var="d">
									<c:if test="${d>=damged.pageNum-2 && d<=damged.pageNum+2 }">
										<li <c:if test="${d==damged.pageNum}">class="active"</c:if>>
											<a href="javascript:goproductpage(${d});">${d}</a>
										</li>
									</c:if>
								</c:forEach>
								<c:if test="${damged.pageNum+2<damged.pages}">
									<li><a>...</a></li>
								</c:if>
								<li><a href="javascript:goproductpage('next');">下一页</a></li>
								<li><a href="godamaged?pageNo=${damged.pages}">尾页</a></li>
								<li><h2>当前第${damged.pageNum}页/共${damged.pages}页</h2></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 审核弹框 -->
	<div class="modal hide fade" id="damagedReviewModal"
		style="width: 800px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h2>报损单审核</h2>
		</div>
		<div class="modal-body">
			<div>
				<table style="width: 100%; table-layout: fixed;">
					<tbody>
						<tr>
							<th style="width: 120px;">报损单审核是否通过</th>
							<th>
								<div class="controls">
									<label class="radio"> <input type="radio"
										name="damagedReview" value="2" checked="checked" /> 是
									</label> <label class="radio" style="position: relative; top: 3px;">
										<input type="radio" name="damagedReview" value="3" /> 否
									</label>
								</div>
							</th>
						</tr>
						<tr>
							<th>原因</th>
							<th style="padding-right: 20px;"><textarea rows="4"
									id="damagedReviewReason" cols="30" style="width: 100%;"></textarea></th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="modal-footer">
			<a href="javascript:;" class="btn btn-primary"
				id="damagedReviewCommit">确定</a> <a href="javascript:;"
				class="btn btn-primary" data-dismiss="modal">取消</a>
		</div>
	</div>
	<!-- 查看详情的弹框 -->
	<div class="modal hide fade" id="myModal" style="width: 800px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h2>报损订单明细</h2>
		</div>
		<div class="modal-body">
			<!-- 报损订单中所有内容 -->
			<div>
				<table style="width: 100%; table-layout: fixed;">
					<tbody id="damagedRequestDetail">
						<tr style="height: 30px;">
							<td><h3>报损单号:</h3> <span></span></td>
							<td><h3>申请人:</h3>&nbsp;<span></span></td>
							<td><h3>报损时间:</h3> <span></span></td>
						</tr>
						<tr style="height: 30px;">
							<td><h3>报损仓库:</h3> <span></span></td>
							<td><h3>订单状态:</h3>&nbsp;<span></span></td>
							<td><h3>报损原因:</h3>&nbsp;<span></span></td>
						</tr>
						<tr style="height: 30px;">
							<td><h3>审核人:</h3> <span></span></td>
							<td><h3>审核时间:</h3> <span></span></td>
							<td><h3>审核状态:</h3> <span></span></td>
						</tr>
						<tr style="height: 30px;">
							<td><h3>审核原因:</h3> <span></span></td>
							<td colspan="2"><h3>备注</h3>&nbsp;<span></span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div style="clear: both;">&nbsp;</div>
			<div class="box-content">
				<table class="table table-bordered" style="table-layout: fixed;">
					<thead>
						<tr>
							<th>产品名称</th>
							<th>产品编号</th>
							<th>规格</th>
							<th>数量</th>
						</tr>
					</thead>
					<tbody id="damagedRequestProductDetail">
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					<ul id="damagedDetailPage">
					</ul>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn btn-primary" data-dismiss="modal">关闭</a>
		</div>
	</div>

	<!-- start: JavaScript-->
	<script src="static/js/jquery-1.9.1.min.js"></script>
	<script src="static/js/jquery-migrate-1.0.0.min.js"></script>
	<script src="static/js/jquery-ui-1.10.0.custom.min.js"></script>
	<script src="static/js/jquery.ui.touch-punch.js"></script>
	<script src="static/js/modernizr.js"></script>
	<script src="static/js/bootstrap.min.js"></script>
	<script src="static/js/jquery.cookie.js"></script>
	<script src="static/js/fullcalendar.min.js"></script>
	<script src="static/js/jquery.dataTables.min.js"></script>
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

	<script src="static/js/bootstrap-transition.js"></script>
	<script src="static/js/bootstrap-modal.js"></script>
	<script src="static/own/purchase.js"></script>
	<!-- end: JavaScript-->
	<script type="text/javascript">
		//产品信息分页实现  
		function goproductpage(type) {
			var pageNum = parseInt($("[name=pageNo]").val()); //获取当前的页码
			var pagePageTotal = parseInt('${damged.pages}'); //总页数
			if (pageNum == 1 && type == "pre") {
				return;
			}
			if (pageNum == pagePageTotal && type == "next") {
				return;
			}
			if (type == "next") { //下一页
				pageNum = pageNum + 1;
			} else if (type == "pre") { //上一页
				pageNum = pageNum - 1;
			} else {
				pageNum = parseInt(type);
			}
			location.href = "godamaged?pageNo=" + pageNum;
		}

		//审核
		function damagedReview(singleNo) {
			$("#damagedReviewModal").modal("show");
			$("#damagedReviewCommit").live(
					'click',
					function() { //点击保存
						var status = $("input[name=damagedReview]:checked")
								.val(); //审核是否通过 2 表示通过  3表示不通过						
						var reason = $("#damagedReviewReason").val(); //审核原因
						if (reason.trim() == "" || reason == undefined) {
							alert("请输入原因");
							return;
						}
						location.href = "damagedReview?singleNo=" + singleNo
								+ "&status=" + status + "&reason=" + reason;
					});
		};

		//修改订单状态
		function operaDamaged(singleNo, type) {
			if (type == 3) {
				var s = confirm("确认提交报损单吗?");
				if (s == false) {
					return;
				}
			} else if (type == 2) {
				var s = confirm("确认取消订单吗?");
				if (s == false) {
					return;
				}
			}
			location.href = "operaDamaged?singleNo=" + singleNo + "&type="
					+ type;
		}

		$("#detail")
				.live(
						'click',
						function() {
							empty();
							$("#myModal").modal("show");
							//获取选中的订单号
							var id = $(this).parent().find("input:hidden")
									.val();
							$
									.ajax({
										type : "POST",
										url : "getDamagedRequestById",
										data : "id=" + id,
										dataType : "JSON",
										success : function(result) {
											//报损详情表格赋值
											damagedRequestDetailAss(result);
											//显示所有页码
											disPageNum(result);
											//为调拨订单各种信息赋值
											$("#damagedRequestDetail")
													.children("tr:eq(0)")
													.children("td:eq(0)")
													.find("span")
													.html(
															result.list[0].damagedRequest.damagedRequestId);
											$("#damagedRequestDetail")
													.children("tr:eq(0)")
													.children("td:eq(1)")
													.find("span")
													.html(
															result.list[0].damagedRequest.requestEmp.empLoginName);
											$("#damagedRequestDetail")
													.children("tr:eq(0)")
													.children("td:eq(2)")
													.find("span")
													.html(
															dateformat(result.list[0].damagedRequest.requestTime));

											//4
											$("#damagedRequestDetail")
													.children("tr:eq(3)")
													.children("td:eq(0)")
													.find("span")
													.html(
															result.list[0].damagedRequest.deptReviewReason);

											$("#damagedRequestDetail")
													.children("tr:eq(3)")
													.children("td:eq(1)")
													.find("span")
													.html(
															result.list[0].damagedRequest.remark);

											//2
											$("#damagedRequestDetail")
													.children("tr:eq(1)")
													.children("td:eq(0)")
													.find("span")
													.html(
															result.list[0].damagedRequest.damagedStoreHouse.shName);

											$("#damagedRequestDetail")
													.children("tr:eq(2)")
													.children("td:eq(1)")
													.find("span")
													.html(
															dateformat(result.list[0].damagedRequest.deptReviewTime));
											$("#damagedRequestDetail")
													.children("tr:eq(2)")
													.children("td:eq(2)")
													.find("span")
													.html(
															result.list[0].damagedRequest.deptReviewStatus.rsName);

											$("#damagedRequestDetail")
													.children("tr:eq(1)")
													.children("td:eq(1)")
													.find("span")
													.html(
															result.list[0].damagedRequest.deptReviewStatus.rsName);
											$("#damagedRequestDetail")
													.children("tr:eq(1)")
													.children("td:eq(2)")
													.find("span")
													.html(
															result.list[0].damagedRequest.damagedReason);
											//3
											$("#damagedRequestDetail")
													.children("tr:eq(2)")
													.children("td:eq(0)")
													.find("span")
													.html(
															result.list[0].damagedRequest.deptReviewEmp.empLoginName);

											/* var employeeByReviewEmp = result.list[0].damagedRequest.employeeByReviewEmp.empLoginName;
											if(employeeByReviewEmp==null){
												employeeByReviewEmp="暂未填写";
											} 
											$("#damagedRequestDetail")
													.children("tr:eq(2)")
													.children("td:eq(0)")
													.find("span")
													.html(employeeByReviewEmp);
											var deptreviewTime = dateformat(result.list[0].damagedRequest.outboundStoreHouseTime);
											 */

										}
									});
						});
		// 清空查看详情里的东西
		function empty() {
			for (var i = 0; i < 4; i++) {//row
				for (var j = 0; j < 3; j++) { //column
					$("#requisitionDetail").children("tr:eq(" + i + ")")
							.children("td:eq(" + j + ")").find("span").html("");
				}
			}
		}
		//为报损产品详情div赋值
		function damagedRequestDetailAss(result) {
			var s = "";
			for (var i = 0; i < result.list.length; i++) {
				s += "<tr>" + "<td>" + result.list[i].product.productName
						+ "</td>" + "<td>" + result.list[i].product.productId
						+ "</td>" + "<td>" + result.list[i].productUnit.puName
						+ "</td>" + "<td>" + result.list[i].count + "</td>"
						+ "</tr>";
			}
			$("#damagedRequestProductDetail").html(s);
		}
		//分页查询明细  ajax实现
		function goDetailPage(type, pageNum, pageTotal) {
			if (type == -1) { //上一页
				if (pageNum == 1) {
					return;
				}
				pageNum -= 1;
			} else if (type == -2) { //下一页
				if (pageNum == pageTotal) {
					return;
				}
				pageNum += 1;
			} else {
				pageNum = type;
			}
			var singleNo = $("#damagedRequestDetail").children("tr:eq(0)")
					.children("td:eq(0)").find("span").html();
			$.ajax({
				type : "POST",
				url : "getDamagedRequestById",
				data : "id=" + singleNo + "&pageNo=" + pageNum,
				dataType : "JSON",
				success : function(result) {
					//为表格详情赋值
					damagedRequestDetailAss(result);
					//显示页码目录
					disPageNum(result);
				}
			});
		}

/*
 * 

 function exportCurrentData() {
		var requisitionId = $("input[name=requisitionId]").val();
		var requisitionnameEmp = $("input[name=requisitionnameEmp]").val();
		//var suppName = $("input[name=suppName]").val();
		var pageNo = parseInt($("input[name=pageNo]").val());
		location.href = "requisitionExport?pageNo=" + pageNo + "&requisitionId="
				+ requisitionId + "&requisitionnameEmp=" + requisitionnameEmp;
	}

 */

		/* 导出当前显示的数据 */
		function exportCurrentData() {
			var damagedRequestId = $("input[name=damagedRequestId]").val();
			var requestEmp = $("input[name=requestEmp]").val();
			//var suppName = $("input[name=suppName]").val();
			var pageNo = parseInt($("input[name=pageNo]").val());
			var startDate=$("input[name=startDate]").val();
			var endDate=$("input[name=endDate]").val();
			location.href = "damagedExport?pageNo=" + pageNo
					+ "&damagedRequestId=" + damagedRequestId
					+ "&requestEmp=" + requestEmp+"&startDate="+startDate+"&endDate="+endDate;
		}

		/* 导出所有数据 */
		function exportAllData() {
			location.href = "damagedExport";
		}

		/* 删除报损订单订单 */
		function deleteDamagedRequest() {
			var s = $("#productBody input[name='productCheck']:checked");
			if (s.length == 0) {
				alert("请选择订单");
				return;
			}
			$.ajaxSettings.async = false;
			var purchases = "-";

			var flag = false;
			$(s).each(function() { //循环所有选中的框
				var a = $(this).val();
				$.get("lw", {
					singleNo : a
				}, function(result) {
					if (result == "0") {
						alert("处于审核通过的单据不可以删除");
						flag = true;
						return;
					} else {
						purchases += a + "-";
					}
				});
			});
			if (flag == false) {
				location.href = "deleteDamagedRequest?damagedid=" + purchases;
			}
		}
		//显示所有页码
		function disPageNum(result) {
			var pageNo = result.pageNum;
			var pageTotal = result.pages;
			//页码数
			var detailPages = "<li><a href='javascript:goDetailPage(-1,"
					+ pageNo + "," + pageTotal + ")'>上一页</a></li>";
			for (var i = 1; i <= result.pages; i++) {
				if (i == result.pageNum) {
					detailPages += "<li class='active'><a href='javascript:goDetailPage("
							+ i
							+ ","
							+ pageNo
							+ ","
							+ pageTotal
							+ ")'>"
							+ i
							+ "</a></li>"
				} else {
					detailPages += "<li><a href='javascript:goDetailPage(" + i
							+ "," + pageNo + "," + pageTotal + ")'>" + i
							+ "</a></li>";
				}
			}
			detailPages += "<li><a href='javascript:goDetailPage(-2," + pageNo
					+ "," + pageTotal + ")'>下一页</a></li>";
			$("#damagedDetailPage").html(detailPages);
		}
	</script>
	<script type="text/javascript">
		$(function() {

		});
	</script>
</body>
</html>
