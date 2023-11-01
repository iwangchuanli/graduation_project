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

						<!-- END BEGIN STYLE CUSTOMIZER -->  

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							<strong>商品列表</strong>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">网站信息统计</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">商品管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">商品列表</a></li>

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

								<div class="caption"><i class="icon-globe"></i>商品列表</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<form class="form-search" method="get" action="/admin/goods/find">

      									<input type="text" class="input-medium search-query" name="key">

     									<button type="submit" class="btn"><span class=" icon-search"></span></button>

     									<span class="help-inline" style="color:red">请输入商品ID或名称</span>
										
    								</form>

								</div>
								<style>
									.table th,.table td{
										text-align: center;										
									}
								</style>
								<table class="table table-striped table-bordered table-hover" id="sample_1">

									<thead>

										<tr>
											<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>

											<th>商品id</th>
											<th>商品名称</th>
											<th>商品类型</th>									
											<th>商品列表图</th>									
											<th>上新时间</th>									
											<th>商品颜色</th>
											<th>商品容量</th>
											<th>网络类型</th>
											<th>会员价格</th>
											<th>非会员价格</th>
											<th>商品积分</th>
											<th>商品库存</th>
											<th>商品详情</th>
											<th>操作</th>
										</tr>

									</thead>
									<tbody>
										@if(count($goods)>0)
										@foreach($goods as $good)

										<tr class="odd gradeX">
											<td>
												<input type="checkbox" class="checkboxes" value="{{$good['gid']}}" />
											</td>

                                            <td>{{$good['gid']}}</td>
                                            <td>{{$good['gname']}}</td>
                                            <td>{{$good['gtype']}}</td>
                                            <td><img src="{{asset($good['gimg'])}}" style="width:50px;height:50px"></a></td>
                                            <td>{{$good['gtime']}}</td>
                                            <td>{{$good['gcolor']}}</td>
                                            <td>{{$good['volume']}}</td>
                                            <td>{{$good['network']}}</td>
                                            <td>{{$good['gprice']}}</td>
                                            <td>{{$good['vipprice']}}</td>
                                            <td>{{$good['integrate']}}</td>
                                            <td>{{$good['gnum']}}</td>
                                            <td>{{$good['details']}}</td>
                                            
											<td class="center">
												<a href="/admin/goods/modify?gid={{$good['gid']}}"><button type="submit"><span class=" icon-pencil"></span></button><a/>  

												<button data-id="{{$good['gid']}}" class="delete" type="submit"><span class="icon-remove"></span></button>
											</td>
                                            
                                        </tr>
										@endforeach
										@else
											<td colspan="15">暂无数据</td>
										@endif
									</tbody>
				
								</table>
								<div class="span6"><div class="dataTables_paginate paging_bootstrap pagination" ><ul>{!! $goods->render() !!}</ul></div>
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
		$(function(){
			
			//删除用户操作
			$('.delete').bind('click',function(){
			
				
			
				//获取删除的用户id
				var gid = $(this).attr('data-id');
				//确定用户操作
				if(!confirm('您确定要删除gid为'+gid+'的评论吗?')){
					return false;
				}
				
				var $btn = $(this);
				
				//ajax传送到服务器
				$.ajax({
					url:'/admin/goods/delete',
					data:'gid='+gid,
					type:'get',
					dataType:'text',
					success:function(data){
						//根据返回结果判断你是否删除成功
						if(data == 1){
							//清空当前行
							//找到tr 标签进行删除操作
							$btn.parents('tr').remove();
							alert('删除成功');
						}else{
							//失败警告即可
							alert('删除失败');
						}
					}
				
				});
				
				//接收结果
			});
		});
	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>