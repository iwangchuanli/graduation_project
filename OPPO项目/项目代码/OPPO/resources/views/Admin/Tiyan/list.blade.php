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
		#page {
		  overflow: hidden;
		  margin: 0 auto;
		  text-align: center;
		}
		td,th{
			height:20px;line-height:20px;
			vertical-align: middle;
			white-space: nowrap;
			text-overflow: ellipsis;
			overflow: hidden;
		}
		#one{
			width:180px;
		}
		#two{
			width:120px;
		}
		#three{
			width:50px;
		}
		#four{
			width:300px;
		}
		#five{
			width:80px;
		}
		#six{
			width:60px;
		}
		.mo{
			height:30px;
			width:530px;
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
			@include('public/bootstrapt');
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

							<strong>体验店管理</strong>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">网站信息统计</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">体验店管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">体验店列表</a></li>

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

								<div class="caption"><i class="icon-globe"></i>体验店列表</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<form class="form-search" action="/admin/tiyan/search" method="get">
										 
     									<button type="submit" class="btn">查询</button>
										<input type="text" class="input-medium search-query" name="key">
    								</form>

								</div>

								<table style="table-layout:fixed;width:1000px" class="table table-striped table-bordered table-hover" id="sample_1">

									<thead>

										<tr>
											<th id="one">名称</th>

											<th id="two">域名</th>

											<th id="three">类型</th>

											<th id="four">地址</th>
											
											<th id="five">联系方式</th>
											
											<th id="six">省名称</th>
											
											<th id="six">市名称</th>
											
											<th id="six">操作</th>

										</tr>

									</thead>

									<tbody>
										@foreach($result as $one)
										<tr class="odd gradeX" >

											<td id="one"><b>{{$one['tname']}}</b></td>

											<td id="two" class="hidden-480" >{{$one['turl']}}</td>

											<td id="three" class="hidden-480" style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" >{{$one['ttype']}}</td>

											<td id="four" class="center hidden-480">{{$one['taddress']}}</td>
											
											<td id="five" class="center hidden-480">{{$one['tnumber']}}</td>
											
											<td id="six" class="center hidden-480">{{$one['tsheng']}}</td>
											
											<td id="six" class="center hidden-480">{{$one['tshi']}}</td>
											
											<td id="six">
												<button data-id="{{$one['tid']}}" class="update" data-toggle="modal" data-target="#myModal" type="submit" class="btn"><span class="icon-pencil"></span></button>
												<button data-id="{{$one['tid']}}" class="delete" type="submit" class="btn"><span class="icon-remove"></span></button>
											</td>

										</tr>
										@endforeach
									</tbody>

								</table>
								<ul class="pagination" id="page">{!! $result->render() !!} </ul>
							</div>

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

	<!-- END CONTAINER -->
	<script>
	$(function(){ 
		alert(${param.name}); 
	}); 
	</script>
	<!-- BEGIN FOOTER -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form role="form" action="/admin/tiyan/update" class="form-horizontal" method="post">
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
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">体验店ID</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="tid" readonly placeholder="">
					</div>
				</div>
				<div class="mo">
				</div>
                  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">体验店名称</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="tname" placeholder="">
					</div>
				</div>
				<div class="mo">
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">体验店域名</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="turl" placeholder="">
					</div>
				</div>
				<div class="mo">
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">体验店类型</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="ttype" placeholder="">
					</div>
				</div>
				<div class="mo">
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">体验店地址</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="taddress" placeholder="">
					</div>
				</div>
				<div class="mo">
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">联系方式</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="tnumber" placeholder="">
					</div>
				</div>
				<div class="mo">
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">省名称</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="tsheng" placeholder="">
					</div>
				</div>
				<div class="mo">
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">市名称</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="tshi" placeholder="">
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
		</form>
		</div>
	</div>

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



	<script src="{{asset('media/js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="{{asset('media/js/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>      

	<script src="{{asset('media/js/bootstrap.min.js')}}" type="text/javascript"></script>


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
		$(function(){
			
			//删除友情链接操作
			$('.delete').bind('click',function(){
				//获取友情链接id
				var tid = $(this).attr('data-id');
				//确定友情链接操作
				if(!confirm('您确定要删除ID为:'+tid+'体验店吗')){
					return false;
				}				
				var $btn = $(this);				
				//ajax传送到服务器
				$.ajax({
					url:'/admin/tiyan/delete',
					data:'tid='+tid,
					type:'get',
					dataType:'text',
					success:function(data){
						//根据返回结果判断你是否删除成功
						if(data == 1){
							//清空当前行
							//找到tr 标签进行删除操作
							$btn.parents('tr').remove();
						}else{
							//失败警告即可
							alert('删除失败');;
						}
					}				
				});
				
				//接收结果
			});

			//更新用户操作
			$('.update').bind('click',function(){
				//获取 写入弹出窗
				var tid = $(this).attr('data-id');
				//到数据库中获取数据 //更新用户界面
				
				//ajax传送到服务器
				$.ajax({
					url:'/admin/tiyan/pencil',
					data:'tid='+tid,
					type:'get',
					dataType:'json',
					success:function(data){
						//将友情链接信息摆放到弹出框中
						$('input[name="tid"]').val(data.tid);
						$('input[name="tname"]').val(data.tname);
						$('input[name="turl"]').val(data.turl);
						$('input[name="ttype"]').val(data.ttype);
						$('input[name="taddress"]').val(data.taddress);
						$('input[name="tnumber"]').val(data.tnumber);
						$('input[name="tsheng"]').val(data.tsheng);
						$('input[name="tshi"]').val(data.tshi);
					}
				
				});
				
			});
			
			
		});
	</script>
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

	<!-- END JAVASCRIPTS -->

	<script type="text/javascript">
		var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();
	</script>
</body>

	<!-- END BODY -->

</html>