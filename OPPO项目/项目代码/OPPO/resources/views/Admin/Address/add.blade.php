<!DOCTYPE html>


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

						<h2 class="page-title">

							<strong>添加地址</strong>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">网站信息统计</a> 

								<span class="icon-angle-right"></span>

							</li>

							<li>

								<a>地址管理</a>

								<span class="icon-angle-right"></span>

							</li>

							<li><a>添加地址</a></li>

						</ul>

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN SAMPLE FORM PORTLET-->   

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>请添加地址</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body form">

								<!-- BEGIN FORM-->

								<form action="/admin/address/insert"   method="post"  >
									{!! csrf_field() !!}

									<div class="control-group">

										<label class="control-label">用户id</label>

										<div class="controls">

											<input type="text" class="span6" name="uid" id="gname" />

											<span class="help-inline" style="color:red"></span>

										</div>

									</div>

									 


									<div class="control-group">

										<label class="control-label">收货人姓名</label>

										<div class="controls">

											<input type="text" class="span6" name="name" />

											<span class="help-inline" style="color:red"></span>

										</div>

									</div>

									<div class="control-group">

										<label class="control-label">联系邮箱</label>

										<div class="controls">

											<input type="email" class="span6" name="uemail" />

											<span class="help-inline" style="color:red"></span>

										</div>

									</div>

									<div class="control-group">

										<label class="control-label">联系电话</label>

										<div class="controls">

											<input type="number" class="span6" name="utel" />

											<span class="help-inline" style="color:red"></span>

										</div>

									</div>

									<div class="control-group">

										<label class="control-label">收货地址</label>

										<div class="controls">

											<input type="text" class="span6" name="address" />

											<span class="help-inline" style="color:red"></span>

										</div>

									</div>
									 
									<div class="form-actions">

										<button type="submit" class="btn blue">提交</button>

										<button type="resect" class="btn">取消</button>                            
									</div>

								</form>

								<!-- END FORM-->       

							</div>

						</div>

						<!-- END SAMPLE FORM PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT-->         

			</div>

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

			$('input[name="gname"]').blur(function(){

				if($(this).val()==''){
					$(this).next().html('请输入商品名称');
				}else{
					$(this).next().html('');
				}

			});

			$('input[name="gtime"]').blur(function(){

				if($(this).val()==''){
					$(this).next().html('请选择时间');
				}else{
					$(this).next().html('');
				}

			});

			$('input[name="gcolor"]').blur(function(){

				if($(this).val()==''){
					$(this).next().html('请输入商品颜色');
				}else{
					$(this).next().html('');
				}
				
			});

			$('input[name="gnum"]').blur(function(){

				if($(this).val()==''){
					$(this).next().html('请输入商品库存');
				}else{
					$(this).next().html('');
				}
				
			});

			$('input[name="gprice"]').blur(function(){

				if($(this).val()==''){
					$(this).next().html('请输入商品价格');
				}else{
					$(this).next().html('');
				}
				
			});

			$('input[name="vipprice"]').blur(function(){

				if($(this).val()==''){
					$(this).next().html('请输入商品会员价格');
				}else{
					$(this).next().html('');
				}
				
			});

			$('input[name="integrate"]').blur(function(){

				if($(this).val()==''){
					$(this).next().html('请输入商品积分');
				}else{
					$(this).next().html('');
				}
				
			});

			$('input[name="details"]').blur(function(){

				if($(this).val()==''){
					$(this).next().html('请输入商品详情');
				}else{
					$(this).next().html('');
				}
				
			});
		});

		
	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>					

									