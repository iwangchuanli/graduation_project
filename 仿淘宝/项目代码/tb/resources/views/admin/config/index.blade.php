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
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                  
                  <h2 align="center"><font color="blue"><b>网站配置信息</b></font></h2>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="webname">网站名称<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="webname" required="required" class="form-control col-md-7 col-xs-12" value="{{$conf['webname']}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="webkey">网站关键字<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="last-name" name="webkey" required="required" class="form-control col-md-7 col-xs-12" value="{{$conf['webkey']}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="webright" class="control-label col-md-3 col-sm-3 col-xs-12">网站版权</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="webright" value="{{$conf['webright']}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">网站Logo<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src= "{{asset($conf['weblogo'])}}" height="60">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">网站开关</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                           <button type="button" class="btn btn-success active btn-sm">{{$conf['webswitch']}}</button>                    
                        </div>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="button" data-id="{{$conf['webid']}}" class="btn btn-primary confupdate" data-toggle="modal" data-target="#myModal">修改</button>
                        </div>
                      </div>
                  </form>
                </div>
                <!-- 模态框（Modal） -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <form class="form-horizontal" role="form" action="/admin/config/update" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="webid">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">修改配置信息中...</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">网站名称</label>
                            <div class="col-sm-10">
                              <input type="text" name="webname" class="form-control" id="inputEmail3">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"> 网站Logo</label>
                            <div class="col-sm-10">
                              <input type="file" name="weblogo" class="form-control" id="inputEmail3">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">网站关键字</label>
                            <div class="col-sm-10">
                              <input type="text" name="webkey" class="form-control" id="inputEmail3">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">网站版权</label>
                            <div class="col-sm-10">
                              <input type="text" name="webright" class="form-control" id="inputEmail3">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">网站开关</label>
                            <div class="col-sm-10">
                              <div id="weblogo" class="btn-group" data-toggle="buttons" name="webswitch">
                                <input type="radio" name="webswitch" value="开">开&nbsp;
                                <input type="radio" name="webswitch" value="关">关
                              </div>
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
        //修改配置信息操作
        $('.confupdate').bind('click',function(){
          //获取配置信息 写入弹出框
          //到数据库中获取数据 //更新配置信息
          var webid=$(this).attr('data-id');

          //ajax传送到服务器
          $.ajax({
            url:'/admin/config/modify',
            data:'webid='+webid,
            type:'get',
            dataType:'json',
            success:function(data){
              //将用户信息摆放到模态框
              $('input[name="webid"]').val(data.webid);
              $('input[name="webname"]').val(data.webname);
              $('input[name="webkey"]').val(data.webkey);
              $('input[name="webright"]').val(data.webright);
              if (data.webswitch=='开') {
                $('input[value="开"]').attr('checked',true);
              }else{
                $('input[value="关"]').attr('checked',true);
              }
              $('input[name="weblogo"]').val(data.weblogo);
            }
          });
        });
      });
    </script>
  </div>
</body>
</html>