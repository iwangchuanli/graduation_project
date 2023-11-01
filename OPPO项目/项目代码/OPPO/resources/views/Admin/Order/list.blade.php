<!DOCTYPE html>

<!-- 

Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1

Version: 1.3

Author: KeenThemes

Website: http://www.keenthemes.com/preview/?theme=metronic

Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469

-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>OPPO商城</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="基于Bootstrap的网站后台模板Metronic DEMO" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="{{asset('media/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/style-metro.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/style.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/style-responsive.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/default.css')}}" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="{{asset('media/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES --> 

	<link href="{{asset('media/css/jquery.gritter.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/daterangepicker.css')}}" rel="stylesheet" type="text/css" />

	<link href="{{asset('media/css/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/jqvmap.css')}}" rel="stylesheet" type="text/css" media="screen"/>

	<link href="{{asset('media/css/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="{{asset('media/image/favicon.ico')}}" />
	<style>
		#asdf{
			width:530px;
			height:30px;
		}
	</style>


</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">
			
			<!--包含顶部区域-->
			@include('admin/top');
			
			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	
	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container">

		<!-- BEGIN SIDEBAR -->

		<!--包含左侧区域-->
		@include('Admin/left');


		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>Widget Settings</h3>

				</div>

				<div class="modal-body">

					Widget settings form goes here

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->
				

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<div class="color-mode-icons icon-color"></div>

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default" data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label>

									<span>Layout</span>

									<select class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

									</select>

								</label>

								<label>

									<span>Header</span>

									<select class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

									</select>

								</label>

								<label>

									<span>Sidebar</span>

									<select class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

								<label>

									<span>Footer</span>

									<select class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER -->  

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							<strong>订单列表</strong>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">网站信息统计</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">订单管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">订单列表</a></li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<div class="portlet box light-grey">

							<div class="portlet-title">

								<div class="caption"><i class="icon-globe"></i>订单列表</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<form action="/admin/order/find" method="get">
										<button type="submit"  class="btn">查询</button>
      									<input type="text" name="keywords" class="input-medium search-query">

     									

    								</form>

								</div>

								<table class="table table-striped table-bordered table-hover" id="sample_1">

									<thead>

										<tr>

											<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>

											<th class="hidden-200" style="text-align:center">用户ID</th>

											<th class="hidden-200" style="text-align:center">订单编号</th>
											
											<th class="hidden-200" style="text-align:center">商品ID</th>
											
											<th class="hidden-200" style="text-align:center">商品价格</th>
										
											<th class="hidden-200" style="text-align:center">商品数量</th>

											<th class="hidden-200" style="text-align:center">会员价格</th>
											
											<th class="hidden-200" style="text-align:center">下单时间</th>
											
											<th class="hidden-200" style="text-align:center">小计</th>
											
											<th class="hidden-200" style="text-align:center">交易状态</th>
											
											<th class="hidden-200" style="text-align:center">订单详情</th>

											<th class="hidden-200" style="text-align:center">操作</th>

										</tr>

									</thead>

									<tbody>
									@foreach($orders as $order)
										<tr class="odd gradeX" id="del">
										
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
									
											<td class="hidden-200" style="text-align:center">{{$order['uid']}}</td>

											<td class="hidden-200" style="text-align:center">{{$order['obh']}}</td>

											<td class="hidden-200" style="text-align:center">{{$order['gid']}}</td>
											
											<td class="hidden-200" style="text-align:center">￥{{$order['oprice']}}</td>

											<td class="hidden-200" style="text-align:center">ｘ{{$order['onum']}}</td>
											
											<td class="hidden-200" style="text-align:center">￥{{$order['vipprice']*$order['onum']}}</td>
											
											<td class="hidden-200" style="text-align:center">{{$order['otime']}}</td>
											
											<td class="hidden-200" style="text-align:center">￥{{$order['oprice']}}</td>
											
											<td class="hidden-200" style="text-align:center">{{$order['ostatus']}}</td>
											
											<td class="hidden-200" style="text-align:center"><a href="/admin/order/info?oid={{$order['oid']}}&uid={{$order['uid']}}">点击查看</a></td>

											<td class="hidden-200" style="text-align:center">
												<input type="button" value="{{$order['send']}}" class="send" data-id="{{$order['oid']}}"/><span class="glyphicon glyphicon-pencil"></span>
												<button class="modify" data-toggle="modal" data-target="#myModal" data-id="{{$order['oid']}}"><span class="glyphicon glyphicon-modify"></span>修改</button>
												<button class="delete" data-id="{{$order['oid']}}"><span class="glyphicon glyphicon-remove"></span>删除</button>
											</td>

										</tr>
										@endforeach
									</tbody>

								</table>

							</div>

						</div>
							<div class="span6">
							<div class="dataTables_paginate paging_bootstrap pagination" ><ul>{!! $orders->render() !!}</ul></div>
							</div>

						<!-- END EXAMPLE TABLE PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT-->

			</div>

						
			<!-- END PAGE CONTAINER-->    

		</div>

		<!-- END PAGE -->

	</div>
	<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form role="form" action="/admin/order/update" class="form-horizontal" method="post">
	{!! csrf_field() !!}

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					用户信息详情
				</h4>
			</div>
			<div class="modal-body">
				  <input type="hidden" name="oid" value="" />
                  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">收货人姓名</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="name"  placeholder="">
					</div>
				</div>
				<div id="asdf"></div>
				 <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">默认收获地址</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="address"  placeholder="">
					</div>
				</div>
				<div id="asdf"></div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">手机号</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="utel"  placeholder="">
					</div>
				</div>
				<div id="asdf"></div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">商品ID</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="gid"  placeholder="">
					</div>
				</div>
				<div id="asdf"></div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">商品价格</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="oprice"  placeholder="">
					</div>
				</div>
				<div id="asdf"></div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">商品数量</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="onum"  placeholder="">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
				<button type="submit" class="btn btn-primary">
					提交更改
				</button>
			</div>
		</div><!-- /.modal-content -->
		 
		</div>
	</form>
</div><!-- /.modal -->

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			oppo backstage management system

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="{{asset('media/js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="{{asset('media/js/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>      

	<script src="{{asset('media/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="{{asset('media/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.blockui.min.js')}}" type="text/javascript"></script>  

	<script src="{{asset('media/js/jquery.cookie.min.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.uniform.min.js')}}" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="{{asset('media/js/jquery.vmap.js')}}" type="text/javascript"></script>   

	<script src="{{asset('media/js/jquery.vmap.russia.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.vmap.world.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.vmap.europe.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.vmap.germany.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.vmap.usa.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>  

	<script src="{{asset('media/js/jquery.flot.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.flot.resize.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.pulsate.min.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/date.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/daterangepicker.js')}}" type="text/javascript"></script>     

	<script src="{{asset('media/js/jquery.gritter.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/fullcalendar.min.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.easy-pie-chart.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.sparkline.min.js')}}" type="text/javascript"></script>  

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="{{asset('media/js/app.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/index.js')}}" type="text/javascript"></script>        

	<!-- END PAGE LEVEL SCRIPTS -->  

	<script>

		jQuery(document).ready(function() {    

		   App.init(); // initlayout and core plugins

		   Index.init();

		   Index.initJQVMAP(); // init index page's custom scripts

		   Index.initCalendar(); // init index page's custom scripts

		   Index.initCharts(); // init index page's custom scripts

		   Index.initChat();

		   Index.initMiniCharts();

		   Index.initDashboardDaterange();

		   Index.initIntro();

		});

	</script>
	<script>
		//删除订单
		$(function(){
			
			
			//查找元素
			$('.delete').bind('click',function(){
				
				//获取元素ID
				var oid = $(this).attr('data-id');
				if(!confirm('你确定要删除'+oid+'号订单吗？')){
					return false;
				}
				//ajax请求操作
				
				var bt = $(this);
				$.ajax({
					//请求地址
					url:'/admin/order/delete',
					//请求方式
					type:'get',
					//请求数据
					data:'oid='+oid,
					//返回时的信息类型
					dataType:'text',
					//成功的方法
					success:function(data){
						if(data == 1){
							bt.parents('tr').remove();
						}else{
							alert('删除失败');
						}
					}
				});
			});
		});
	</script>
	<script>
		$(function(){
			//绑定事件
			$('.send').bind('click',function(){
				//获取元素ID
				var oid = $(this).attr('data-id');
				if(!confirm('确定要发货吗？')){
					return false;
				}
				//进行ajax请求
				$.ajax({
					url:'/admin/order/send',
					data:'oid='+oid,
					type:'get',
					dataType:'text',
					success:function(data){
						if(data == 1){
							alert('已发货！');
							window.location.reload();
						}else{
							alert('请勿重复发货！');
						}
					}
				});
			});
		});
		
		$(function(){
			$('.modify').click(function(){
				//获取oid
				var oid = $(this).attr('data-id');
				$.ajax({
					url:'/admin/order/modify',
					data:'oid='+oid,
					type:'get',
					dataType:'json',
					success:function(data){
						//将用户信息摆放到弹出框中
						$('input[name="name"]').val(data.name);
						$('input[name="address"]').val(data.address);
						$('input[name="utel"]').val(data.utel);
						$('input[name="gid"]').val(data.gid);
						$('input[name="oprice"]').val(data.oprice);
						$('input[name="onum"]').val(data.onum);
						$('input[name="oid"]').val(data.oid);
					}
				
				});
			});
		});
	</script>
	
	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>