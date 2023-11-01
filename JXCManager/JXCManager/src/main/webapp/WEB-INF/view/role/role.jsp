<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/fmt" prefix="fmt"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn"%>
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
					<li><i class="icon-home"></i> <a href="javascript:;">首页</a> <i
						class="icon-angle-right"></i></li>
					<li><a href="javascript:;">角色管理</a></li>
				</ul>
				<div class="row-fluid">
					<div class="control-group">
						<div data-condition="search">
							<div style="float: right;">
								<shiro:hasPermission name="role:add">
									<a class="btn btn-primary" href="javascript:;" id="roleAdd"
										data-command="Add"><i class="icon-plus"></i>&nbsp;添加</a>
								</shiro:hasPermission>
								<shiro:hasPermission name="role:delete">
									<a class="btn btn-warning" href="javascript:;"
										onclick="delRole()" data-command="Delete"><i
										class="icon-remove"></i>&nbsp;删除</a>
								</shiro:hasPermission>
								<a class="btn btn-danger" href="javascript:;"
									data-command="Refresh"><i class="icon-refresh"></i>&nbsp;刷新</a>
							</div>
						</div>
					</div>
					<div style="clear: both;">&nbsp;&nbsp;&nbsp;</div>
					<div class="box">
						<div class="box-header" data-original-title>
							<h2>
								<i class="halflings-icon white user"></i><span class="break"></span>角色管理
							</h2>
						</div>
						<div style="clear: both;">&nbsp;</div>
						<div class="box-content" style="z-index: 1;">
							<table
								class="table table-striped table-bordered bootstrap-datatable">
								<thead>
									<tr>
										<th><input type="checkbox" id="productCheckAll" /></th>
										<th>编号</th>
										<th>名称</th>
										<th>描述</th>
										<th>角色代码</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody id="productBody">
									<c:forEach items="${roleAll.list}" var="s">
										<tr>
											<th><input type="checkbox" name="productCheck"
												value="${s.roleId}" /></th>
											<td>${s.roleId}</td>
											<td>${s.roleName}</td>
											<td>${s.description}</td>
											<td>${s.roleCode}</td>
											<td><input type="hidden" value="${s.roleId}" /> <a
												id="assignDetail" href="javascript:;"
												onclick="assignPermissionsss(${s.roleId})">权限</a> <a
												href="javascript:;" onclick="update(${s.roleId})">修改</a></td>
										</tr>
									</c:forEach>
									<c:if test="${fn:length(roleAll.list)==0}">
										<tr>
											<th colspan="8">对不起 没有查询到数据</th>
										</tr>
									</c:if>
								</tbody>
							</table>
						</div>
						<div class="pagination pagination-centered">
							<ul>
								<li><a href="javascript:;" onclick="gorolepage(1)">首页</a></li>
								<li><a href="javascript:;" onclick="gorolepage('prev')">上一页</a></li>
								<c:if test="${roleAll.pageNum-2>1}">
									<li><a>...</a></li>
								</c:if>
								<c:forEach begin="1" end="${roleAll.pages}" var="s">
									<c:if test="${s>=roleAll.pageNum-2 && s<=roleAll.pageNum+2 }">
										<li <c:if test="${s==roleAll.pageNum}">class="active"</c:if>>
											<a href="javascript:;" onclick="gorolepage(${s})">${s}</a>
										</li>
									</c:if>
								</c:forEach>
								<c:if test="${roleAll.pageNum+2<roleAll.pages}">
									<li><a>...</a></li>
								</c:if>
								<li><a href="javascript:;" onclick="gorolepage('next')">下一页</a>
									<!-- 隐藏域 存放当前页码 --> <input type="hidden" name="pageNo"
									value="${roleAll.pageNum}" /></li>
								<li><a href="javascript:;"
									onclick="gorolepage(${roleAll.pages})">末页</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 添加角色 -->
	<div class="modal hide fade" id="roleAddModel" style="width: 800px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h2>添加角色</h2>
		</div>
		<div class="modal-body">
			<div>
				<form method="post" action="goRoleAdd" id="roleForm">
					<table style="width: 100%; table-layout: fixed;">
						<tbody>
							<tr>
								<td align="center"><div class="control-group">
										<label class="control-label" for="roleName">角色名称</label>
									</div></td>
								<td><div class="controls">
										<input class="input-xlarge focused" id="roleName"
											name="roleName" type="text" placeholder="此处填写角色名" />
									</div></td>
							</tr>
							<tr>
								<td align="center"><div class="control-group">
										<label class="control-label" for="roleCode">角色代码</label>
									</div></td>
								<td><div class="controls">
										<input class="input-xlarge focused" id="roleCode"
											name="roleCode" type="text" placeholder="此处填写角色代码" />
									</div></td>
							</tr>
							<tr>
								<td align="center"><div class="control-group">
										<label class="control-label" for="description">角色描述</label>
									</div></td>
								<td><div class="controls">
										<input class="input-xlarge focused" id="description"
											name="description" type="text" placeholder="此处填写对于角色的描述" />
									</div></td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="javascript:;" class="btn btn-primary" id="roleAddCommit">Save</a>
			<a href="javascript:;" class="btn btn-primary" data-dismiss="modal">Close</a>
		</div>
	</div>
	<!-- 修改角色 -->
	<div class="modal hide fade" id="roleUpdateModel" style="width: 800px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h2>角色修改</h2>
		</div>
		<div class="modal-body">
			<div>
				<form method="post" action="roleUpdateForm" id="roleUpdateForm">
					<table style="width: 100%; table-layout: fixed;">
						<tbody>
							<tr>
								<td align="center"><div class="control-group">
										<label class="control-label" for="roleUpdateName">角色名称</label>
										<input type="hidden" name="roleId" id="roleId" />
									</div></td>
								<td><div class="controls">
										<input class="input-xlarge focused" id="roleUpdateName"
											name="roleUpdateName" type="text" placeholder="此处填写角色名" />
									</div></td>
							</tr>
							<tr>
								<td align="center"><div class="control-group">
										<label class="control-label" for="roleUpdateCode">角色代码</label>
									</div></td>
								<td><div class="controls">
										<input class="input-xlarge focused" id="roleUpdateCode"
											name="roleUpdateCode" type="text" placeholder="此处填写角色代码" />
									</div></td>
							</tr>
							<tr>
								<td align="center"><div class="control-group">
										<label class="control-label" for="updateDescription">角色描述</label>
									</div></td>
								<td><div class="controls">
										<input class="input-xlarge focused" id="updateDescription"
											name="updateDescription" type="text"
											placeholder="此处填写对于角色的描述" />
									</div></td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="javascript:;" class="btn btn-primary" id="roleUpdateCommit">Update</a>
			<a href="javascript:;" class="btn btn-primary" data-dismiss="modal">Close</a>
		</div>
	</div>

	<!-- 分配权限弹框 -->
	<div class="modal hide fade" id="assignPermissionModals"
		style="width: 800px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h2>分配权限</h2>
		</div>
		<div class="modal-body">
			<div>
				<form method="post" action="goRolePermissionAssign"
					id="assignPermissionForm">
					<table style="width: 100%; table-layout: fixed;">
						<tbody>
							<tr>
								<td>
									<div class="control-group">
										<label class="control-label">谨慎分配</label> <input type="hidden"
											name="assignRoleId" />
										<div class="controls" id="havePermission" align="center">
											<!-- <label class="checkbox inline"> <input
												name="assignRole" type="checkbox" id="inlineCheckbox1"
												value="option1"> Option 1
											</label>-->
											<c:forEach items="${permissionAll}" var="s" varStatus="a">
												<label class="checkbox inline"> <input
													name="assignRole" type="checkbox"
													id="checkboxPermission${s.permissionId}"
													value="${s.permissionId}"> ${s.permissionDesc}
												</label>
												<c:if test="${(a.index+1)%5==0}">
													<br />
												</c:if>
											</c:forEach>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="javascript:;" class="btn btn-primary"
				id="commitAssignPermission">Save</a> <a href="javascript:;"
				class="btn btn-primary" data-dismiss="modal">Close</a>
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

	<script src="static/own/purchase.js"></script>

	<!-- end: JavaScript-->
	<script type="text/javascript">
		function gorolepage(type){
			var pageNum = parseInt($("input[name=pageNo]").val()); //获取当前的页码
			var pagePageTotal = parseInt('${roleAll.pages}'); //总页数
			if (pageNum == 1 && type == 'prev') {
				return;
			}
			if (pageNum == pagePageTotal && type == 'next') {
				return;
			}
			if (type == "next") { //下一页
				pageNum = pageNum + 1;
			} else if (type == "prev") { //上一页
				pageNum = pageNum - 1;
			} else {
				pageNum = parseInt(type);
			}
			location.href = "goRole?pageNo=" + pageNum;
		}
		/* 点击修改按钮触发事件 */
		function update(roleId){
			$("#roleId").val(roleId);
			/* 清空三个输入框 */
			$("#roleUpdateName").val("");
			$("#roleUpdateCode").val("");
			$("#updateDescription").val("");
			/* 使用ajax 给表单赋值 */
			$("#roleUpdateModel").modal("show");
			$.ajax({
				type:"POST",
				url:"findRoleById",
				data:"roleId="+roleId,
				dataType:"JSON",
				success:function(result){
					$("#roleUpdateName").val(result.roleName);
					$("#roleUpdateCode").val(result.roleCode);
					$("#updateDescription").val(result.description);
				}
			});
		}
		// 点击权限按钮  弹出分配权限按钮
		function assignPermissionsss(roleId){
			$("#havePermission").find("input[name='assignRole']").each(function(i, n) {
				$(n).removeAttr("checked");
				$(n).parent().removeClass("checked");
			})
			$.ajax({
				type:"POST",
				url:"findPermissionByRoleId",
				data:"roleId="+roleId,
				dataType:"JSON",
				success:function(result){
					//拥有的角色选中
					for(var i = 0 ; i < result.length ; i++){
						$("#checkboxPermission"+result[i].permissionId).prop("checked",true);
						$("#checkboxPermission"+result[i].permissionId).parent().addClass("checked");
					}
				}
			});
			$("input[name=assignRoleId]:hidden").val(roleId);
			$("#assignPermissionModals").modal("show");
		}
		
		//删除选中角色
		function delRole(){
			//获取选中复选框
			var s = $("#productBody input[name='productCheck']:checked");
			if (s.length == 0) {
				alert("请选择要删除角色");
				return;
			}
			var b = confirm("确认删除所选角色吗? 此操作不可恢复");
			if(b==false) { return;}
			$.ajaxSettings.async = false;
			var a = "-";
			$(s).each(function(){
				var c = $(this).val();
				a += c + "-";
			});
			var sss=0;
			$.post("roleJudgmen",{roles:a},function(data){
				sss=data;
			});
			if(sss=="1"){
				alert("角色正在使用中  不可以删除");
				return;
			}else{
				location.href="deleteRoleById?roleId="+a;
			}
		}
		
		$(function(){
			/* 弹出添加角色弹框 */
			$("#roleAdd").click(function(){
				$("#roleAddModel").modal("show");
			});
			/* 添加角色 */
			$("#roleAddCommit").click(function(){
				var roleName=$("#roleName").val();
				var roleCode=$("#roleCode").val();
				if(roleName=='' || roleName==undefined ){
					alert("请填写角色名称");
					return;
				}
				if(roleCode=='' || roleCode==undefined ){
					alert("请填写角色代码");
					return;
				}
				$("#roleForm").submit();/* 提交表单 */
			});
			
			/* 提交修改 */
			$("#roleUpdateCommit").click(function(){
				var roleId=$("#roleId").val();  //角色id
				var roleName=$("#roleUpdateName").val();
				if(roleName=="" || roleName==undefined){
					alert("请填写角色名称");
					return;				
				}
				var roleCode=$("#roleUpdateCode").val();
				if(roleCode=="" || roleCode==undefined){
					alert("请填写角色代码");
					return;				
				}
				$("#roleUpdateForm").submit();  //表单提交
			});
			/* 分配权限提交 */
			$("#commitAssignPermission").click(function(){
				var s=confirm("确认分配权限吗?");
				if(s==false) { return;}
				$("#assignPermissionForm").submit();  //提交表单
			});
		});
	</script>
</body>
</html>