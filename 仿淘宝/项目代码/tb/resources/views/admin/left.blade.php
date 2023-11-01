<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/admin/index" class="site_title"><i class="fa fa-paw"></i> <span>tb后台管理</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{asset(session('head'))}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{session('uname')}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>管理员</h3>
                <ul class="nav side-menu">
                   <li><a><i class="fa fa-home"></i> 网站配置 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/config/index">查看当前配置</a></li>
                    </ul>
                  </li>
				  <li><a><i class="fa fa-home"></i> 权限管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/permission/index">用户权限</a></li>
                      <li><a href="/admin/permission/add">添加角色</a></li>
                      <li><a href="/admin/permission/adds">添加权限</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> 用户管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/user/index">用户列表</a></li>
                      <li><a href="/admin/user/add">添加用户</a></li>
                      <li><a href="/admin/user/find">查找用户</a></li>
                    </ul>
                  </li>
				  <li><a><i class="fa fa-home"></i> 品牌管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/brand/index">品牌列表</a></li>
                      <li><a href="/admin/brand/add">添加品牌</a></li>
                      <li><a href="/admin/brand/find">品牌查找</a></li>
                    </ul>
                  </li>
				  <li><a><i class="fa fa-cubes"></i> 商品类别管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/goodsclass/index">查看所有商品父类</a></li>
                      <li><a href="/admin/goodsclass/scindex">查看所有商品子类</a></li>
                      <li><a href="/admin/goodsclass/add">添加商品类别</a></li>
                      <li><a href="/admin/goodsclass/find">查找商品类别</a></li>
                    </ul>
                  </li>
				  <li><a><i class="fa fa-steam-square"></i> 商品属性名管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/attname/index">属性名列表</a></li>
                      <li><a href="/admin/attname/add">添加属性名</a></li>
                      <li><a href="/admin/attvalue/vindex">所有属性值</a></li>
                    </ul>
                  </li>
                  <li><a><i class="glyphicon glyphicon-paperclip"></i> 友情链接管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/flink/index">友情链接列表</a></li>
                      <li><a href="/admin/flink/add">添加链接</a></li>
                      <li><a href="/admin/flink/find">查找链接</a></li>
                    </ul>
                  </li>
				  <li><a><i class="fa fa-home"></i>轮播管理<span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
						<li> <a href="/admin/img/add">添加图片一</a></li>
						<li> <a href="/admin/img/index">轮播图一</a></li>
						<li> <a href="/admin/img/append">添加图片二</a></li>
						<li> <a href="/admin/img/hompg">轮播图二</a></li>
					</ul>
				  </li>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
		
		