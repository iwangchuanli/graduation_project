			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="/admin/index">

				<img src="{{asset('media/image/logo.png')}}" alt="logo"/>

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="{{asset('media/image/menu-toggler.png')}}" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">
					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						 
						<img id='touxiang' alt="" src="{{Session::get('uface')}}"/>
						<!--另一种方法
						<script src='{{asset("media/js/jquery-1.10.1.min.js")}}' ></script>
						<script>
							$(function(){
								
								$.getJSON('/getHeadPic',function(data){
									//	获得路径地址
									//	给img 指定地址
									$('#touxiang').attr('src',data[1]);
								});
							});
						</script>
						-->
						
						 
						<span class="uname">{{Session::get('uname')}}</span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">
							<li><a href="/admin/user/detail?uid={{Session::get('uid')}}"><i class="icon-lock"></i>个人信息</a></li>

							<li><a href="/logout"><i class=" icon-signout"></i>退出</a></li>

						</ul>

					</li>
				</ul>

				<!-- END TOP NAVIGATION MENU --> 
