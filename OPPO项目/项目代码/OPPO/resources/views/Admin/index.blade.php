<!DOCTYPE html>

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
		*{
			list-style:none;
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

		<div class="page-content" style="background-image:url(/23.jpg)" >
			<div style="position:absolute;left:640px;top:420px;">
 
			<ul style="color:white;font-size:20px" >
				<li style="line-height:50px">欢迎管理员登录</li>
				<li style="position:relative;left:-80px">上次登录时间为:{{$result['time']}}</li>
				<li style="position:relative;left:-80px">上次下线时间为:{{$result['endtime']}}</li>
			</ul>
			 
			</div>
		</div>

		<!-- END PAGE -->

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	 

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

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>