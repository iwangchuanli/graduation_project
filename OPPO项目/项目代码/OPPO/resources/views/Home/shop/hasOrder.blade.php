<!DOCTYPE html>
<!-- saved from url=(0029)../myOrder -->
<html class=" js no-touch backgroundsize cssanimations csstransforms svg inlinesvg"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE">
    <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
    <title>『OPPO最新款智能手机在线订购』OPPO最新款智能手机在线购买_OPPO最新款智能手机快捷支付-OPPO智能手机官网 </title>
    <meta name="keywords" content="OPPO最新款智能手机在线订购,OPPO最新款智能手机在线购买,OPPO最新款智能手机快捷支付 ">
    <meta name="description" content="OPPO官网购物首页为您提供OPPO最新款智能手机在线订购,OPPO最新款智能手机在线购买,OPPO最新款智能手机快捷支付等信息,多种OPPO智能手机任您选择与订购,智能手机网上购买尽在OPPO官网。 ">
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

          </head>
  <body>
	@include('Home/oppozhu/header');
      <main class="main-content user">
    <div class="wrapper">
      <ul class="breadcrumb">
  <li>
    <a href="/index">
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  我的订单
              </li>
      </ul>
      <div class="myOppo-menu">
  <h1 class="h-gamma">我的订单</h1>
  <ul class="navigation">
    <li class="is-active">
      <a href="/order/orders">我的订单</a>
    </li>
    <li class="">
      <a href="/address/show?uid=1">配送地址</a>
    </li>
    <li class="">
      <a href="/youhui">优惠券</a>
    </li>
    <li>
      <a href="/userinfo">账户信息</a>
    </li>
              </ul>
</div>
	@foreach($order as $one)
      <div class="g">
                <div class="gi one-whole my-oppo-content slab-white-border order">
         <div class="g">
                <div class="gi one-whole my-oppo-content slab-white-border order">
          <div class="g brick-shadow order-list-top">
  <div class="gi one-whole desk-one-half">
    订单编号：<strong><a class="clickable order-id" href="http://www.opposhop.cn/orders/161125231647765/show">{{$one['obh']}}</a></strong>
  </div>
  <div class="gi one-whole desk-one-half desk-text-align-right">
    下单时间：{{$one['otime']}}
  </div>
</div>
<ul class="order-list-header">
  <li class="order-product">商品</li>
  <li class="order-quantity">数量</li>
  <li class="order-amount">订单金额</li>
  <li class="order-detail">收货信息</li>
  <li class="order-primary">状态操作</li>
</ul>
<div class="order-list">
  <div class="order-item order-product desk-text-align-center">
          <a href="http://www.opposhop.cn/products/393" target="_blank">
                  <img class="order-product-thumbnail" alt="" src="{{$one['gimg']}}">
              </a>
    
<div class="row">
      <a href="http://www.opposhop.cn/products/393" target="_blank">{{$one['gname']}}</a>
  </div>
     
      </div>
  <div class="order-item order-quantity desk-text-align-center">
   <span class="order-desk-hide">商品数量：</span>{{$one['onum']}}
  </div>
  <div class="order-item order-amount desk-text-align-center">
    <span class="order-desk-hide">订单金额：</span>¥{{$one['oprice']}}
  </div>
  <div class="order-item order-detail">
    <div class="row order-username">{{$one['name']}}</div>
    <div class="row">{{$one['utel']}}</div>
        <div class="row">{{$one['uemail']}}</div>
    <div class="row">{{$one['address']}}</div>
          </div>
  <div class="order-item order-primary desk-text-align-center">
    <div class="row">订单状态：{{$one['ostatus']}}</div>
		@if($one['ostatus']=="未支付")
		<div class="row"><a class="button button-s" href="/pay?oid={{$one['oid']}}">立即支付</a></div>
		 @endif
        <div class="row"><a class="button button-s" href="/orderXq?oid={{$one['oid']}}">查看详情</a></div>
		
      </div>
</div>
     </div>
    </div>
    </div>
    </div>
@endforeach


  </main>
  <ul class="pagination">{!! $order->appends(['sort' => 'votes'])->render() !!} </ul> 
  <div id="dialog-confirm" class="hidden">
			<div class="mask-common"></div>
			<div class="dialog-common dialog-box-common">
				<div class="dialog-container">
					<a class="dialog-close-common">×</a>
					<div class="dialog-content-common">
												<div class="field">
							<h4 class="dialog-title-common">您确定取消订单吗？</h4>
						</div>
																		<div class="dialog-common-content">
												</div>
												<div class="field dialog-btn">
							<div class="g g-wrapper-s">
																<div class="gi lap-one-half">
									<a class="button button-one">确定</a>
								</div>
																								<div class="gi lap-one-half">
									<a class="button-light button-two">取消</a>
								</div>
															</div>
						</div>
																	</div>
				</div>
			</div>
		</div>
    @include('Home/oppozhu/footer');
    <div class="navi-scroll">
  <div class="navi-scroll-content">
    <a href="javascript:;" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href="https://www.wenjuan.com/s/2AzYrm/" target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <a href="https://www.wenjuan.com/s/2AzYrm/" class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a>
  </div>
</div>

    
    <div class="purchase-advisory">
        <a href="http://oim.oppo.com/oim/chatClient/chatbox.jsp?companyID=8092&configID=890&enterurl=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2Fpreview%2Ejsp&pagereferrer=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2FembedScript%2Ejsp%3Ft%3D1517&k=1" target="_blank" id="advisory">购机咨询</a>
    </div>

    <script src=" {{asset('Home/shop/js/jquery-1.9.1.min.js')}}"></script>

    <script src=" {{asset('Home/shop/js/jquery.lazyload.min.js')}}"></script>

    <script src=" {{asset('Home/shop/js/underscore-min.js')}}"></script>

    <script src=" {{asset('Home/shop/js/es5-shim.min.js')}}"></script>

    <script src=" {{asset('Home/shop/js/base64.min.js')}}"></script>

    <script src=" {{asset('Home/shop/js/custom_form.js')}}"></script>

    <script src=" {{asset('Home/shop/js/jquery.countdown.min.js')}}"></script>

    <script src=" {{asset('Home/shop/js/slick.min.js')}}"></script>

    <script src=" {{asset('Home/shop/js/responsive.js')}}"></script>

    <script src=" {{asset('Home/shop/js/picturefill.min.js')}}"></script>

    <script src=" {{asset('Home/shop/js/scripts.js')}}"></script>

        <script src=" {{asset('Home/shop/js/opposhop.min.js')}}"></script>

            <script type="text/javascript">
    var vm;
    OPPO.conf.BASE_URL = "http://www.opposhop.cn";
    OPPO.conf.STORE_URL = 'http://www.opposhop.cn';
    OPPO.conf.ACCOUNT_URL = 'http://my.oppo.com';
    OPPO.conf.WWW_URL = "../../index.htm";
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
        var controllerNameWithAction = "OrdersController@index".split('@');
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

<script src=" {{asset('Home/shop/js/tingyun-rum.js')}}"></script>
</body></html>