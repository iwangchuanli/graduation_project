<!DOCTYPE html>
<!-- saved from url=(0028)http://www.opposhop.cn/trade -->
<html class=" js no-touch backgroundsize cssanimations csstransforms svg inlinesvg"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE">
    <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
    <title> 『OPPO最新款智能手机在线订购』OPPO最新款智能手机在线购买_OPPO最新款智能手机快捷支付-OPPO智能手机官网 </title>
    <meta name="keywords" content=" OPPO最新款智能手机在线订购,OPPO最新款智能手机在线购买,OPPO最新款智能手机快捷支付 ">
    <meta name="description" content=" OPPO官网购物首页为您提供OPPO最新款智能手机在线订购,OPPO最新款智能手机在线购买,OPPO最新款智能手机快捷支付等信息,多种OPPO智能手机任您选择与订购,智能手机网上购买尽在OPPO官网。 ">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('Home/shop/css/styles.css')}}">

    <script type="text/javascript" defer="" async="" src="{{asset('Home/shop/js/uta.js')}}"></script><script src="{{asset('Home/shop/js/optj-1.0.4.min.js')}}"></script><script async="" src="{{asset('Home/shop/js/analytics.js')}}"></script><script src="{{asset('Home/shop/js/hm.js')}}"></script><script type="text/javascript">
		function checkBrowser(){
			var browser = {};
			var div = document.createElement( "div" );
			div.innerHTML = "<link/><table></table><a href='/a'>a</a><input type='checkbox'/>";
            var a = div.getElementsByTagName( "a" )[0];
			style = a && a.style;
			if (!style) {
				return;
			}
			style.cssText = "float:left;opacity:.5";
			// Support: IE<9
			// Make sure that element opacity exists (as opposed to filter)
			browser.opacity = style.opacity === "0.5";
			// Verify style float existence
			// (IE uses styleFloat instead of cssFloat)
			browser.cssFloat = !!style.cssFloat;
			if(browser.opacity && browser.cssFloat){
				return true;
			}else{
                //IE 8测试
                var userAgent = navigator.userAgent.toLocaleUpperCase();
                var msie = /MSIE [\d\.]+/;
                var version = msie.exec(userAgent);
                if (version<"MSIE 8") return false;
                else return true;
			}
		}
        var v = checkBrowser();
		if (!v) {
			window.location.href = "http://www.opposhop.cn/lower.html";
		}
    </script>

    <script src="{{asset('Home/shop/js/modernizr.custom.js')}}"></script>

        <script>var is_cod_allowed = true;</script>
  </head>
  <body>
		@include('Home/oppozhu/header');
   
    <div class="wrapper">
	  <ul class="breadcrumb">
  <li>
    <a href="http://www.oppo.com/cn/">
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  配送地址
              </li>
      </ul>
      <div class="myOppo-menu">
  <h1 class="h-gamma">配送地址</h1>
  <ul class="navigation">
    <li class="">
      <a href="/order/orders">我的订单</a>
    </li>
    <li class="is-active">
      <a href="address/show">配送地址</a>
    </li>
    <li class="">
      <a href="/youhui">优惠券</a>
    </li>
    <li>
      <a href="/userinfo">账户信息</a>
    </li>
              </ul>
</div>
      <div class="row">
        <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <ul class="list-unstyled">
            <strong class="error_msg_note">
            </strong>
          </ul>
        </div>
        </div>
      </div>
      <form class="g">
  <div class="gi one-whole">
    <div class="brick-shadow">
      <div class="radio-title">
        <strong>我们默认首选顺丰快递，如收货地址顺丰快递不能送达，我们会更改为EMS快递为您配送。</strong>
      </div>             
            <div class="content">

	<!--------------------------------------------地址开始----------------------------------------------------->
				<div class="address-form-item">
    <div class="address-form" style="display: none;" data-address-id="1121815">
   <div id="address-edit-1121815" class="g">
  <div class="gi field lap-one-whole desk-one-quarter">
  <!--点击编辑出现的表单-->
   <label>*收货人姓名</label>
	<input type="hidden" name="isme" />
    <input type="text" name="unames" value="">
  </div>
  <div class="g">
    <div class="gi field lap-one-whole desk-one-quarter">
      <label>*手机号码</label>
      <input type="text" name="utels" value="">
    </div>
  </div>
    <div class="g field">
    <label>*收货地址</label>

    <div class="g">
      <div class="gi desk-two-thirds one-whole">
        <input type="text" name="uaddresss" value="">
      </div>
    </div>
  </div>
  <div class="g">
    <div class="gi field lap-one-whole desk-one-quarter">
      <label>联系邮箱</label>
      <input type="text" name="uemails"  >
    </div>
  </div>
  <div class="form-actions">
    <div class="pull-left">
      <a class="button-light pull-left update" href="javascript:;">保存</a>
      <a class="button-light pull-left" href="">取消</a>
    </div>
  </div>
  <div class="dividing-line"></div>
</div>
		
                </div>
				@foreach($address as $one)
				@if($one['isdef'] == 1)
              <div id="yc" class="field radio-item dark xl address_list_0" style="display: block;">
               
                  <input type="hidden"  class="address-form-receiver" value="{{$one['name']}}">
                  <input type="hidden"  class="address-form-mobile" value="{{$one['utel']}}">
                  <input type="hidden"  class="address-form-email" value="{{$one['uemail']}}">
                  <input type="hidden"  class="address-form-address" value="{{$one['address']}}">
				  
                  
				  <input id="demo" name="na" data-id="{{$one['aid']}}" type="radio" checked/> 
                    <label for="radio0">
                      <div class="g address-form-content">
                        <div class="gi desk-one-fifth one-whole title">{{$one['name']}}</div>
                        <div class="gi desk-one-fifth one-whole">{{$one['utel']}}</div>
                        <div class="gi desk-one-fifth one-whole">{{$one['uemail']}}</div>
                        <div class="gi desk-two-fifths one-whole">{{$one['address']}}</div>
                      </div>
                      <div class="links">
                        <a href="javascript:;" class="get" data-id="{{$one['aid']}}">编辑</a>
                        <a href="javascript:;" class="remove-address" data-id="{{$one['aid']}}">删除</a>
                        <a href="javascript:;" class="isdef-address" data-id="{{$one['aid']}}">默认地址</a>
                      </div>
                    </label>
                  
                </div>
				@else
					<div id="yc" class="field radio-item dark xl address_list_0" style="display: block;">
               
                  <input type="hidden"  class="address-form-receiver" value="{{$one['name']}}">
                  <input type="hidden"  class="address-form-mobile" value="{{$one['utel']}}">
                  <input type="hidden"  class="address-form-email" value="{{$one['uemail']}}">
                  <input type="hidden"  class="address-form-address" value="{{$one['address']}}">
				  
                  
				  <input id="demo" name="na" data-id="{{$one['aid']}}" type="radio" /> 
                    <label for="radio0">
                      <div class="g address-form-content">
                        <div class="gi desk-one-fifth one-whole title">{{$one['name']}}</div>
                        <div class="gi desk-one-fifth one-whole">{{$one['utel']}}</div>
                        <div class="gi desk-one-fifth one-whole">{{$one['uemail']}}</div>
                        <div class="gi desk-two-fifths one-whole">{{$one['address']}}</div>
                      </div>
                      <div class="links">
                        <a href="javascript:;" class="get" data-id="{{$one['aid']}}">编辑</a>
                        <a href="javascript:;" class="remove-address" data-id="{{$one['aid']}}">删除</a>
                        <a href="javascript:;" class="isdef-address" data-id="{{$one['aid']}}">设为默认</a>
                      </div>
                    </label>
                  
                </div>
				@endif
				@endforeach
              </div>
				
	<!--------------------------------------------地址结束----------------------------------------------------->

				
                                          <p class="field">
                <a href="javascript:;" id="address_new" class="button-light">添加新地址</a>
                </p><div class="js-content address-form-new" style="display:none;">
				
		 	
                  <div id="address-create" class="g">
  <div class="gi field lap-one-whole desk-one-quarter">
    <label>*收货人姓名</label>
    <input type="text" name="uname" value="" />
  </div>
  <div class="g">
    <div class="gi field lap-one-whole desk-one-quarter">
      <label>*手机号码</label>
      <input type="text" name="utel" value="">
    </div>
  </div>
    <div class="g field">
  <label>*收货地址</label>
  <div class="g">
    <div class="gi desk-two-thirds one-whole">
      <input class="address-detail" type="text" name="uaddress" value="" placeholder="详细街道地址">
    </div>
  </div>
</div>
  <div class="g">
    <div class="gi field lap-one-whole desk-one-quarter">
      <label>联系邮箱</label>
      <input type="text" name="uemail" value="">
    </div>
	 
  </div>
  <div class="form-actions">
    <div class="pull-left">
      <a class="button-light pull-left address-add" href="javascript:;">保存</a>
	 
      <a class="button-light pull-left address-new-cancel" href="javascript:;">取消</a>
    </div>
  </div>
</div>
 
                </div>
              <p></p>
    

  </div>
     </div>

        </form>
      </div>
    </div>
  </main>
		@include('Home/oppozhu/footer');
    <div class="navi-scroll" style="display: block;">
  <div class="navi-scroll-content">
    <a href="javascript:;" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href="https://www.wenjuan.com/s/2AzYrm/" target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <a href="https://www.wenjuan.com/s/2AzYrm/" class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a>
  </div>
</div>

    
    <div class="purchase-advisory">
        <a href="" target="_blank" id="advisory">购机咨询</a>
    </div>

    <script src="{{asset('Home/shop/js/jquery-1.9.1.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/jquery.lazyload.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/underscore-min.js')}}"></script>

    <script src="{{asset('Home/shop/js/es5-shim.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/base64.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/custom_form.js')}}"></script>

    <script src="{{asset('Home/shop/js/jquery.countdown.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/slick.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/responsive.js')}}"></script>

    <script src="{{asset('Home/shop/js/picturefill.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/scripts.js')}}"></script>

    <script src="{{asset('Home/shop/js/region0.js')}}"></script>

<script src="{{asset('Home/shop/js/region-select.js')}}"></script>

    <script src="{{asset('Home/shop/js/opposhop.min.js')}}"></script>

            <script type="text/javascript">
    var vm;
    OPPO.conf.BASE_URL = "http://www.opposhop.cn";
    OPPO.conf.STORE_URL = 'http://www.opposhop.cn';
    OPPO.conf.ACCOUNT_URL = 'http://my.oppo.com';
    OPPO.conf.WWW_URL = "http://www.oppo.com/cn/";
    OPPO.conf.SSO_LOGIN_URL = "http://id.oppo.com/login";

    var url = OPPO.conf.STORE_URL + '/auth/check';
    //callback for jsonp
    var successCallback = function(data){
        $('ul.log-area .hasLogout').removeClass('show').addClass('hidden');
        $('ul.log-area .hasLogin').removeClass('hidden').addClass('show');
        $('.cart_number').text(data['cart_number']);
        $('.n-messages').text("(" + data['message_number'] + ")");
        $('.user-menu').addClass('isLogin');
        $('.user-menu-toLogin').hide();
        if (data['message_number']>0 || data['cart_number']>0) {
          $('.js-open-user').addClass('point-red');
          if (data['message_number']>0) $('.user-menu-message a').addClass('point-red');
          if (data['cart_number']>0) $('.user-menu-cart a').addClass('point-red');
        };
        if (data['append'] != '') $('body').append(data['append']);
    };
    var errorCallback = function(){
        $('ul.log-area .hasLogin').removeClass('show').addClass('hidden');
        $('ul.log-area .hasLogout').removeClass('hidden').addClass('show');
        $('.cart_number').text(0);
    };
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'jsonp',
        error: function() {
            errorCallback();
        },
        success: function(data){
            successCallback(data);
        }
    });

    (function () {
        var controllerNameWithAction = "TradesController@index".split('@');
        var controllerName = controllerNameWithAction[0];
        var actionName = controllerNameWithAction[1];
        var controller = OPPO.controller[controllerName];
        if (controller) {
            action = controller()[actionName];
            if (action) {
                $(function () {
                    vm = action();
                });
            }
        }
        // else console.log(controllerNameWithAction);
    })();
    </script>

    <script type="text/javascript">
      $(function(){
        $("#coupon-type-2").trigger('click');
$('#coupon-type-2').parent().addClass('checked_radio');//IE8 兼容
      });
    </script>
<noscript>&lt;img src="http://sit.gentags.net/site/img?site=1351" style="border:0" alt="" /&gt;</noscript>


<script type="text/javascript">
$(function(){
  $("body").on("click",".oppo-tj",function(){
    if (typeof $(this).data('tj') != 'undefined' && typeof _optj != 'undefined') {
      var tj = $(this).data('tj');
      var tjs = tj.split("|");
      _optj.push(['_trackEvent', tjs[0], tjs[1], tjs[2], tjs[3]]);
    };
  });
});
</script>
<script src="{{asset('Home/shop/js/tingyun-rum.js')}}"></script>

<script>
		
		
		
		
		$(function(){
			$('.get').click(function(){
				//显示更改框
				$('.address-form').css({display:'block'});
				aid = $(this).attr('data-id');
				var name = $(this).parent('div').prev().first().children().first().html();
				var utel = $(this).parent('div').prev().first().children().next().first().html();
				var uemail = $(this).parent('div').prev().first().children().next().next().first().html();
				var address = $(this).parent('div').prev().first().children().first().next().next().next().html();
				
				//将获取的值插入input标签
				$('input[name="unames"]').attr('value',name);
				$('input[name="utels"]').attr('value',utel);
				$('input[name="uemails"]').attr('value',uemail);
				$('input[name="uaddresss"]').attr('value',address);
				
			});
			
		//绑定点击事件
		$('.update').bind('click',function(){
			
			//获取input表单地址值
			var unames = $('input[name="unames"]').val();
			var utels = $('input[name="utels"]').val();
			var uaddresss = $('input[name="uaddresss"]').val();
			var uemails = $('input[name="uemails"]').val();
			
			//alert(uid+unames+utels+uaddresss+uemails);
			//进行ajax传输请求
			//准备请求url地址
			var url = '/order/address/update?unames='+unames+'&utels='+utels+'&uaddresss='+uaddresss+'&uemails='+uemails;
			 
			$.ajax({
				//请求地址
				url:url,
				data:'aid='+aid,
				type:'GET',
				dataType:'text',
				success:function(data){
					if(data == 1){
						window.location.reload();
					}else{
						alert('失败了');
					}
				}
			});
		});
		

			
	});
		
		
	
</script>
<script>
	$('.address-add').bind('click',function(){
		//获取用户id
		var uid = 1;
		//获取表单值
		var uname = $('input[name="uname"]').val();
		var utel = $('input[name="utel"]').val();
		var uaddress = $('input[name="uaddress"]').val();
		var uemail = $('input[name="uemail"]').val();
		//准备url路径
		var url = '/address/reinsert?uname='+uname+'&utel='+utel+'&uaddress='+uaddress+'&uemail='+uemail;
	
		$.ajax({
			url:url,
			headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
			data:'uid='+uid,
			dataType:'text',
			type:'post',
			success:function(data){
				if(data){
					if(data == 1){
						//window.history.go(-1);
						window.location.reload();
					}else{
						alert('添加失败');
					}
					
				}
				
			}
		});
	});
</script>

<script>
	//删除操作
	$(function(){
		$('.remove-address').bind('click',function(){
			//获取要删除的id
			var aid = $(this).attr('data-id');
			
			
			if(!confirm('确定要删除该地址吗')){
				return false;
			}
			//ajax
			$.ajax({
				url:'/address/delete',
				data:'aid='+aid,
				dataType:'text',
				type:'get',
				success:function(data){
					if(data == 1){
						window.location.reload();
					}else{
						window.location.reload();
					}
				}
			});
		});
		
		 
	});
	$(function(){
		$('input[id="demo"]').click(function(){
							
			var me = $(this).attr('data-id');
			
			$('input[name="isme"]').val(me);
		});
	})
			  
			  
	
</script>
<script>
	$('.isdef-address').click(function(){
		var aid = $(this).attr('data-id');
		var url = '/address/setdef';
		$.ajax({
			url:url,
			data:'aid='+aid,
			type:'GET',
			dataType:'text',
			success:function(data){
				if(data == 1){
					alert('已设置为默认');
					window.location.reload();
				}else{
					alert('失败');
				}
				
			}
		});
	});
</script>
 </body>
 </html>