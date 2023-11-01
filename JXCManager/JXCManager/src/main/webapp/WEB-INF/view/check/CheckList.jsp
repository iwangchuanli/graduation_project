<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn"%>
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
	<%--   <c:if test="${fn:length(cs.list)==0}">
    <script>
      location.href="${pageContext.request.contextPath}/goCheck";
    </script>
   </c:if> --%>
	<div class="container-fluid-full">
		<div class="row-fluid">
			<!-- start: Content -->
			<div id="content" class="span10">
				<ul class="breadcrumb">
					<li><i class="icon-home"></i> <a href="index.jsp">首页</a> <i
						class="icon-angle-right"></i></li>
					<li><a href="gorequisition">盘点管理</a></li>
				</ul>

				<div class="row-fluid">
					<form action="goCheck" method="post" class="form-horizontal">
						<div class="control-group">
							<div data-condition="search">
								<table
									class="table table-striped table-bordered bootstrap-datatable">
									<tr>
										<td>盘点单号:<input type="text" name="singleNo" value="${singleNo }"
											class="input-medium" placeholder="请输入盘点单号" />
										</td>
										<td>时间: <input type="text" class="input-small datepicker"
											readonly="readonly"
											<c:if test="${start!=null}">value="${start}"</c:if>
											id="start" name="start" placeholder="开始日期" /> <input
											type="text" class="input-small datepicker"
											readonly="readonly"
											<c:if test="${end!=null}">value="${end}"</c:if> id="end"
											name="end" placeholder="结束日期" />
										</td>
										<td>审核状态: <select name="rsid">
												<option value="0">请选择</option>
												<c:forEach var="rs" items="${rslist}">
													<option value="${rs.rsId}">${rs.rsName}</option>
												</c:forEach>
										</select>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
											<button type="submit" class="btn btn-success"
												data-command="search">
												<i class="icon-search"></i>&nbsp;搜索
											</button>
											
										</td>

										<td>
											<div style="float: right;">
												<a class="btn btn-primary" href="goCheckAdd"
													data-command="Add"><i class="icon-plus"></i>&nbsp;新增盘点</a>
												<a class="btn btn-warning" href="javascript:void(0)"
													onclick="deleteRequisition()" data-command="Delete"><i
													class="icon-remove"></i>&nbsp;删除</a> <a class="btn btn-danger"
													href="goRefresh" data-command="Refresh"><i
													class="icon-refresh"></i>&nbsp;刷新</a>
											</div>

										</td>
									</tr>
								</table>
							</div>
						</div>
					</form>
					<div class="box">
						<div class="box-header" data-original-title>
							<h2>
								<i class="halflings-icon white user"></i><span class="break"></span>盘点管理
							</h2>
						</div>
						<div style="clear: both;">&nbsp;</div>
						<div style="clear: both;">&nbsp;</div>
						<div class="box-content" style="z-index: 1;">
							<table
								class="table table-striped table-bordered bootstrap-datatable">
								<!-- table table-bordered table-striped table-condensed
								 -->
								<thead>
									<tr>
										<th><input type="checkbox" id="productCheckAll" /></th>
										<th>盘点单号</th>
										<th>状态</th>
										<th>制单人</th>
										<th>创建时间</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody id="productBody">
									<c:if test="${cs!=null}">
										<c:forEach items="${cs.list}" var="c">
											<tr>
												<td><input type="checkbox" name="productCheckAlls" />
													<input type="hidden" value="${c.cid}" /></td>
												<td>${c.cid}</td>
												<td>${c.states.rsName}</td>
												<td>${c.ccreater}</td>
												<td><fmt:formatDate value="${c.createStartDate}"
														pattern="yyyy-MM-dd HH:mm" /></td>
												<td><input type="hidden" value="${c.cid}" /> <a
													id="detail" href="javascript:;">查看</a> <c:if
														test="${c.states.rsId==1}">
														<a id="updateEnterStock">编辑</a>
														<a id="review" href="javascript:;">审核</a>
													</c:if> </td>
											</tr>
										</c:forEach>
									</c:if>
									<c:if test="${fn:length(cs.list)==0}">
										<tr>
											<th colspan="8">对不起 没有查询到数据</th>
										</tr>
									</c:if>
								</tbody>
							</table>
						</div>
						<div class="pagination pagination-centered">
							<ul id="productPageButton">
								<li><a href="gorequisition?pageNos=1">首页</a></li>
								<li><a href="javascript:goproductpage('pre');">上一页</a> <input
									type="hidden" name="pageNo" value="${cs.pageNum}" /></li>
								<c:if test="${cs.pageNum-2>1}">
									<li><a>...</a></li>
								</c:if>
								<c:forEach begin="1" end="${cs.pages}" var="s">
									<c:if test="${s>=cs.pageNum-2 && s<=cs.pageNum+2 }">
										<li <c:if test="${s==cs.pageNum}">class="active"</c:if>>
											<a href="javascript:goproductpage(${s});">${s}</a>
										</li>
									</c:if>
								</c:forEach>
								<c:if test="${cs.pageNum+2<cs.pages}">
									<li><a>...</a></li>
								</c:if>
								<li><a href="javascript:goproductpage('next');">下一页</a></li>
								<li><a href="gorequisition?pageNo=${cs.pages}">尾页</a></li>
								<li><h2>当前第${cs.pageNum}页/共${cs.pages}页</h2></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal hide fade" id="myModal" style="width: 800px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h2>盘点订单明细</h2>
		</div>
		<div class="modal-body">
			<!-- 采购订单中所有内容 -->
			<div>
				<table style="width: 100%; table-layout: fixed;">
					<tbody id="requisitionDetail">
						<tr style="height: 30px;">
							<td><h3>盘点号:</h3> <span></span></td>
							<td><h3>创建时间:</h3>&nbsp;<span></span></td>
							<td><h3>创建人:</h3> <span></span></td>
						</tr>
						<tr style="height: 30px;">
							<td><h3>状态:</h3> <span></span></td>
							<td><h3></h3>&nbsp;<span></span></td>
							<td><h3></h3>&nbsp;&nbsp;<span></span></td>
						</tr>
						<!-- <tr style="height: 30px;">
							<td><h3>审核原因:</h3> <span></span></td>
							<td><span></span></td>
							<td><span></span></td>
						</tr> -->
					</tbody>
				</table>
			</div>
			<div style="clear: both;">&nbsp;</div>
			<div class="box-content" style="z-index: 1;">
				<table class="table table-bordered" style="table-layout: fixed;">
					<thead>
						<tr>
							<th>产品编号</th>
							<th>产品名称</th>
							<th>单价</th>
							<th>应入库</th>
						</tr>
					</thead>
					<tbody id="purchaseRequestDetail">
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					<ul id="requisitionDetailPage">
					</ul>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn btn-primary" data-dismiss="modal">关闭</a>
		</div>
	</div>
	<!-- 审核弹框 -->
	<div class="modal hide fade" id="reviewModal" style="width: 800px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h2>部门审核</h2>
		</div>
		<div class="modal-body">
			<div>
				<table style="width: 100%; table-layout: fixed;">
					<tbody>
						<tr>
							<th style="width: 120px;">部门审核是否通过</th>
							<th>
								<div class="controls">
									<label class="radio"> <input type="radio"
										name="reviewCheck" value="1" checked="checked" /> 是
									</label> <label class="radio" style="position: relative; top: 3px;">
										<input type="radio" name="reviewCheck" value="0" /> 否
									</label>
								</div>
							</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="modal-footer">
			<a href="javascript:;" class="btn btn-primary" id="reviewCommit">Save</a>
			<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
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
	<!-- end: JavaScript-->
	<script type="text/javascript">
		//产品信息分页实现  
		function goproductpage(type) {
			var pageNum = parseInt($("[name=pageNo]").val()); //获取当前的页码
			var pagePageTotal = parseInt('${cs.pages}'); //总页数
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
			location.href = "goCheck?pageNo=" + pageNum;
		}
		$("#review").live("click", function() {
			$("#reviewModal").modal("show");
			singleNo = $(this).parent().find("input:hidden").val();
		});
		/* 点击保存按钮 */
		$("#reviewCommit").live(
				'click',
				function() { //点击保存
					var s = $("input[name=reviewCheck]:checked").val(); //审核是否通过 0 表示不通过  1表示通过
					/* var reason = $("#reviewReason").val(); //审核原因 */
					location.href = "ChecksReview?singleNo=" + singleNo
							+ "&review=" + s;
				});

		$("#updateEnterStock").live('click', function() {
			var s = $(this).parent().find("input:hidden").val();
			location.href = "goChecksUpdate?singleNo=" + s;
		});
		$("#detail")
				.live(
						'click',
						function() {
							empty();
							$("#myModal").modal("show");
							//获取选中的订单
							var singleNo = $(this).parent()
									.find("input:hidden").val();
							$.ajaxSettings.async = false;
							$
									.ajax({
										type : "POST",
										url : "ajaxCheckDetails",
										data : "singleNo=" + singleNo,
										dataType : "JSON",
										success : function(result) {
											//采购详情表格赋值
											puchaseDetailAss(result);
											//显示所有页码
											disPageNum(result);
											$("#requisitionDetail")
													.children("tr:eq(0)")
													.children("td:eq(0)")
													.find("span")
													.html(result.list[0].cid.id);

											$("#requisitionDetail")
													.children("tr:eq(0)")
													.children("td:eq(2)")
													.find("span")
													.html(
															result.list[0].cid.ccreater);
											//2
											$("#requisitionDetail")
													.children("tr:eq(1)")
													.children("td:eq(0)")
													.find("span")
													.html(
															result.list[0].cid.states.rsName);
											$("#requisitionDetail")
													.children("tr:eq(0)")
													.children("td:eq(1)")
													.find("span")
													.html(
															dateformat(result.list[0].cid.createStartDate));
										}
									});
						});
		function empty() {
			$("#requisitionDetail").children("tr:eq(0)").children("td:eq(0)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(0)").children("td:eq(1)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(0)").children("td:eq(2)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(1)").children("td:eq(0)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(1)").children("td:eq(1)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(1)").children("td:eq(2)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(2)").children("td:eq(0)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(2)").children("td:eq(1)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(2)").children("td:eq(2)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(3)").children("td:eq(0)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(3)").children("td:eq(1)")
					.find("span").html("");
			$("#requisitionDetail").children("tr:eq(3)").children("td:eq(2)")
					.find("span").html("");
		}
		function puchaseDetailAss(result) {
			var s = "";
			for (var i = 0; i < result.list.length; i++) {
				s += "<tr>" + "<td>" + result.list[i].productid.productName
						+ "</td>" + "<td>" + result.list[i].productid.productId
						+ "</td>" + "<td>个" + "</td>" + "<td>"
						+ result.list[i].productCount + "</td>" + "</tr>";
			}
			$("#purchaseRequestDetail").html(s);
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
			var singleNo = $("#requisitionDetail").children("tr:eq(0)")
					.children("td:eq(0)").find("span").html();
			$.ajax({
				type : "POST",
				url : "getRequisitionBySingleNo",
				data : "singleNo=" + singleNo + "&pageNo=" + pageNum,
				dataType : "JSON",
				success : function(result) {
					//为表格详情赋值
					puchaseDetailAss(result);
					//显示页码目录
					disPageNum(result);
				}
			});
		}
		/* 删除盘点单订单 */
		function deleteRequisition() {
			var s = $("#productBody input[name='productCheckAlls']:checked");
			if (s.length == 0) {
				alert("请选择订单");
				return;
			}
			var checksId = "-";
			var flag = false;
			$.ajaxSettings.async = true;
			$(s).each(
					function() { //循环所有选中的框
						var a = $(this).parent().parent().next().val();
						/*  var a2=$(this).parent().parent().parent().html(); */
						var status = $(this).parent().parent().parent()
								.parent().html();
						var s = $(this).parent().parent().parent().parent();
						if (status == "订单审核中") {
							flag = true;
						} else {
							checksId += a + "-";
						}
					});
			if (flag == true) {
				alert("处于审核通过的单据不可以删除");
			} else {
				location.href = "deleteCheckAndDetails?singleNo=" + checksId;
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
			$("#requisitionDetailPage").html(detailPages);
		}
	</script>
	<script type="text/javascript">
		$(function() {
			var msg = '${msg}';
			if (msg == 'a') {
				$("#success").click();
			}
		});
	</script>
</body>
</html>
