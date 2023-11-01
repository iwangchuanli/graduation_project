<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>淘宝电商 | 网上购物商城</title>
    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
    <!--按钮样式-->
    <style>.div1{float: left;height: 34px;width: 54px;position:relative;}.div2{text-align:center;padding-top:0px;padding-left:12px;font-size:15px;font-weight:800}.inputstyle{width: 54px; height: 34px;cursor: pointer;font-size: 30px;outline: medium none;position: absolute;
    filter:alpha(opacity=0);-moz-opacity:0;opacity:0; left:0px;top: 0px;}</style>
</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<!--包含左侧区域-->
			@include('admin/left');
			<!--包含左侧区域结束-->
			<!-- top navigation -->
			<!--包含顶部区域-->
			@include('admin/top');
			<!--包含顶部区域结束-->
			<!-- /top navigation -->
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_content">
									<p style="font-size:20px"><strong>图片列表1 </strong></p>
									<div class="table-responsive">
										<table class="table table-striped jambo_table bulk_action">
											<thead>
												<tr class="headings" style="color:#fff; background: #003371;font-weight:300;">
													<th>
														<input type="checkbox" id="check-all" class="flat">
													</th>
													<th>图片ID</th>
													<th>图片显示</th>
													<th>图片名称</th>
													<th>图片描述</th>
													<th>图片链接</th>          
													<th>图片管理</th>		
												</tr>
											</thead>

											<tbody>
												@foreach($imgs as $one)
												<tr class="even pointer">
													<td class="a-center ">
														<input type="checkbox" class="flat" name="table_records">
													</td>
													<td>{{$one['imid']}}</td>
													<td><img src="{{asset($one['impic'])}}" height="40"/></td>
													<td>{{$one['imname']}}</td>
													<td>{{$one['iminfo']}}</td>
													<td>{{$one['imlink']}}</td>
													<td>
													  <button data-id="{{$one['imid']}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info btn-xs imgupdate">修改 </button>
													  <button data-id="{{$one['imid']}}" type="button" class="btn btn-danger btn-xs imgdelete">删除</button>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>

								<!-- 模态框（Modal） -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<form class="form-horizontal" role="form" action="/admin/img/update" method="post" enctype="multipart/form-data">
										{!! csrf_field() !!}
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title" id="myModalLabel">图片信息</h4>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">图片ID</label>
														<div class="col-sm-10">
														  <input type="text" name="imid" class="form-control" id="inputEmail3" readonly>
														</div>
													</div>
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label"> 图片显示</label>
														<div class="col-sm-10">
														  <input type="file" name="impic" class="form-control" id="inputEmail3">
														</div>
													</div>
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">图片名称</label>
														<div class="col-sm-10">
														  <input type="text" name="imname" class="form-control" id="inputEmail3">
														</div>
													</div>
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">图片描述</label>
														<div class="col-sm-10">
														  <input type="text" name="iminfo" class="form-control" id="inputEmail3">
														</div>
													</div>
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">图片链接</label>
														<div class="col-sm-10">
														  <input type="text" name="imlink" class="form-control" id="inputEmail3">
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-info btn-sm" data-dismiss="modal">关闭
													</button>
													<button type="submit" class="btn btn-success btn-sm">提交</button>
												</div>
											</div>
											<!-- /.modal-content -->
										</div>
									</form>
								</div>
								<!-- /.modal-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>

		<!-- jQuery -->
		<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
		<!-- Bootstrap -->
		<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<!-- FastClick -->
		<script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
		<!-- NProgress -->
		<script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
		<!-- iCheck -->
		<script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
		<!-- Datatables -->
		<script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
		<script src="{{asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
		<script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
		<script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
		<script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

		<!-- Custom Theme Scripts -->
		<script src="{{asset('build/js/custom.min.js')}}"></script>

		<!-- Datatables -->
		<script>
			$(document).ready(function() {
				var handleDataTableButtons = function() {
					if ($("#datatable-buttons").length) {
						$("#datatable-buttons").DataTable({
							dom: "Bfrtip",
							buttons: [
								{
									extend: "copy",
									className: "btn-sm"
								},
								{
									extend: "csv",
									className: "btn-sm"
								},
								{
									extend: "excel",
									className: "btn-sm"
								},
								{
									extend: "pdfHtml5",
									className: "btn-sm"
								},
								{
									extend: "print",
									className: "btn-sm"
								},
							],
							responsive: true
						});
					}
				};

				TableManageButtons = function() {
					"use strict";
					return {
						init: function() {
							handleDataTableButtons();
						}
					};
				}();

				$('#datatable').dataTable();

				$('#datatable-keytable').DataTable({
					keys: true
				});

				$('#datatable-responsive').DataTable();

				$('#datatable-scroller').DataTable({
					ajax: "js/datatables/json/scroller-demo.json",
					deferRender: true,
					scrollY: 380,
					scrollCollapse: true,
					scroller: true
				});

				$('#datatable-fixed-header').DataTable({
					fixedHeader: true
				});

				var $datatable = $('#datatable-checkbox');

				$datatable.dataTable({
					'order': [[ 1, 'asc' ]],
					'columnDefs': [
						{ orderable: false, targets: [0] }
					]
				});
				$datatable.on('draw.dt', function() {
					$('input').iCheck({
						checkboxClass: 'icheckbox_flat-green'
					});
				});

				TableManageButtons.init();
			});
		</script>
		<!-- /Datatables -->
		<script type="text/javascript">
			$(function(){
				//修改图片操作
				$('.imgupdate').bind('click',function(){
					//获取图片信息 写入弹出框
					//到数据库中获取数据 //更新图片列表
					var imid=$(this).attr('data-id');

					//ajax传送到服务器
					$.ajax({
						url:'/admin/img/modify',
						data:'imid='+imid,
						type:'get',
						dataType:'json',
						success:function(data){
							//将用户信息摆放到模态框
							$('input[name="imid"]').val(data.imid);
							$('input[name="imname"]').val(data.imname);
							$('input[name="iminfo"]').val(data.iminfo);
							$('input[name="imlink"]').val(data.imlink);
						}
					});
				});

				//删除图片操作
				$('.imgdelete').bind('click',function(){
					//获取删除的图片id
					var imid=$(this).attr('data-id');
					//ajax传送到服务器
					if (!confirm('您确定删除id为:'+imid+'的图片信息吗')) {
						return false;
					}
					var $btn=$(this);
					
					$.ajax({
						url:'/admin/img/delete',
						data:'imid='+imid,
						type:'get',
						dataType:'text',
						success:function(data){
							//根据返回结果判断是否删除成功
							if (data==1) {
								//清空当前行
								//找到tr标签进行删除操作
								$btn.parents('tr').remove();
							}else{
								//失败提醒
								alert('删除失败');
							}
						}
					});
				});
			});
		</script>
	</div>
</body>
</html>