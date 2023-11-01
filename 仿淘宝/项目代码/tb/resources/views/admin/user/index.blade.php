<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentellela</title>

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
	
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
		@include('admin.left')
        <!-- top navigation -->
        
        <!-- /top navigation -->
		@include('admin.top')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plus Table Design</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th><input type="checkbox" id="check-all" class="flat"></th>
                          <th>用户id</th>
                          <th>用户名</th>
                          <th>邮箱</th>
                          <th>联系电话</th>
                          <th>注册时间</th>
                          <th>是否管理员</th>
						  <th>操作</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  @foreach($users as $user)
                        <tr>
                          <td><input type="checkbox" class="flat" name="table_records"></td>
                          <td>{{$user['uid']}}</td>
                          <td>{{$user['uname']}}</td>
                          <td>{{$user['uemail']}}</td>
                          <td>{{$user['uphone']}}</td>
                          <td>{{$user['addtime']}}</td>
						  <td>{{$user['isAdmin']}}</td>
						  <td>
							<ul class="nav navbar-right panel_toolbox">
							  <li class="dropdown">
								<a data-id="{{$user['uid']}}" class="userupdate" data-toggle="modal" data-target="#myModal" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							  </li>
							  <li><a data-id="{{$user['uid']}}" class="userdelete"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
						  </td>
                        </tr>
					   @endforeach
                      </tbody>
					</table>
				<!-- 模态框（Modal） -->
		
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" action="/admin/user/update" method="post">
				{!! csrf_field() !!}
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel">
								用户基本信息
							</h4>
						</div>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">用户id</label>
							<div class="col-sm-10">
							  <input type="text" name="uid" class="form-control" id="inputEmail3" placeholder="" readonly>
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
							<div class="col-sm-10">
							  <input type="text" name="uname" class="form-control" id="inputEmail3" placeholder="">
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
							<div class="col-sm-10">
							  <input type="email" name="uemail" class="form-control" id="inputEmail3" placeholder="">
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">手机</label>
							<div class="col-sm-10">
							  <input type="text" name="uphone" class="form-control" id="inputEmail3" placeholder="">
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">密码</label>
							<div class="col-sm-10">
							  <input type="text" name="upwd" class="form-control" id="inputEmail3" placeholder="">
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">管理员</label>
								<div class="col-sm-10">								
									<input type="radio" name="isAdmin" value="0" >否
									<input type="radio" name="isAdmin" value="1">是							
								</div>
						  </div>
						   <div class="form-group">
						   <label class="checkbox-inline">							 
						   </label>
						   </div>						   
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">关闭
							</button>
							<button type="submit" class="btn btn-primary">
								提交更改
							</button>
						</div>
						</form>
					</div>
          <!-- /.modal-content -->
				</div>
        <!-- /.modal -->
					</div>
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
	<script>
		$(function(){
			//更新用户操作
			$('.userupdate').bind('click',function(){
				//获取用户信息 写入弹出框
				//到数据库中获取数据 //更新用户界面
				var uid = $(this).attr('data-id');
				//ajax传送到服务器
				
				$.ajax({
					url:'/admin/user/modify',
					data:'uid='+uid,
					type:'get',
					dataType:'json',
					success:function(data){
						//将用户信息摆放到模态框中
						
						$('input[name="uid"]').val(data.uid);
						$('input[name="uname"]').val(data.uname);
						$('input[name="uemail"]').val(data.uemail);
						$('input[name="uphone"]').val(data.uphone);
						if(data.isAdmin==1){
							$('input[value="1"]').attr('checked',true);
						}else{
							$('input[value="0"]').attr('checked',true);
						}
						
					}
				});
				
				
			});
			//删除用户操作
			$('.userdelete').bind('click',function(){
				
				//获取删除的用户id
				var uid = $(this).attr('data-id');
				//ajax传送到服务器
				if(!confirm('您确定要删除id为:'+uid+'的用户吗')){
					return false;
				};
				var $btn = $(this);
				$.ajax({
					url:'/admin/user/delete',
					data:'uid='+uid,
					type:'get',
					dataType:'text',
					success:function(data){
						//根据返回结果判断是否删除成功
						if(data == 1){
							//清空当前行
							//找到tr标签进行删除操作
							$btn.parents('tr').remove();
						}else{
							//失败警告
							alert('删除失败');
						}
					}
				});
				//接受结果
			});
		});
	</script>
    <!-- /Datatables -->
  </body>
</html>