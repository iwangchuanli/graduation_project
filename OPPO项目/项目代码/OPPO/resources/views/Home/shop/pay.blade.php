<!DOCTYPE html>
<!-- saved from url=(0054)../myOrder/myOrder.html/161114102911479/payments -->
<html class=" js no-touch backgroundsize cssanimations csstransforms svg inlinesvg"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE">
    <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
    <title>OPPO手机购买支付页面 </title>
    <meta name="keywords" content="OPPO智能手机支付,OPPO手机购买支付页面,OPPO购买支付银行,OPPO购买支付平台 ">
    <meta name="description" content="登陆OPPO手机官网支付页面，可以查询订单提交状态、订单编号、应付金额等信息，并请在48小时内完成支付，否则订单会被自动取消。 ">
    <link media="all" type="text/css" rel="stylesheet" href=" {{asset('Home/shop/css/styles.css')}}">

    <script type="text/javascript" defer="" async="" src="{{asset('Home/shop/js/uta.js')}}"></script><script src="{{asset('Home/shop/js/optj-1.0.4.min.js')}}"></script><script async="" src=" {{asset('Home/shop/js/analytics.js')}}"></script><script src="{{asset('Home/shop/js/hm.js')}}"></script><script type="text/javascript">
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
  <main class="main-content slab-light order-payments-revision opr">
    <div class="wrapper">
      <ul class="breadcrumb">
  <li>
    <a href="http://www.oppo.com/cn/">
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  <a href="http://www.opposhop.cn/products?is_promotion=0&category=1">
            在线购物
            <span>/</span>
          </a>
              </li>
          <li>
                  <a href="http://www.opposhop.cn/trade">
            购物车结算
            <span>/</span>
          </a>
              </li>
          <li>
                  支付
              </li>
      </ul>
      <div class="brick-bottom">
        <ul class="steps"><li class="one active ">
    <div class="step-content">
            <h5 class="step-heading">购物车</h5>
      <div class="step-gradient"></div>
    </div>
  </li><li class="two  active">
    <div class="step-content palm-right-text">
            <h5 class="step-heading">填写订单</h5>
      <div class="step-gradient"></div>
    </div>
  </li><li class="three active step-completed">
    <div class="step-content">
            <h5 class="step-heading">支付</h5>
      <div class="step-gradient"></div>
    </div>
  </li></ul>
      </div>
	<form action="order/alipay" method="post" target="_blank">
	{!! csrf_field() !!}
          <input type="hidden" name="oid" value="{{$oid}}">

      @foreach($orders as $order)
	  <div class="slab-white opr-detail">
        <div class="g">
          <div class="gi desk-two-thirds one-whole">
            <div class="opr-title">订单提交成功！</div>

            <div class="opr-text">订单号为 <i>{{$order['obh']}}</i>，                请您在提交订单后<span class="alert-danger">48</span>小时内付款（逾期订单将自动取消）。</div>
          </div>
          <div class="gi desk-one-third one-whole opr-prices">
            <div class="opr-price">应付金额：<span>{{$order['oprice']}}</span></div>
            <div class="opr-order-detail"><a href="javascript:;" class="oppo-tj" data-tj="store|link|order|detail">订单详情&nbsp;<span class="icon icon-arrow-down-green"></span></a></div>
          </div>
        </div>
        <div class="opr-order-details">
          <p><label>商品清单：</label></p>
                                          <p>{{$order['gname']}}<span>x</span><span>{{$order['onum']}}</span></p>
                                                                                        <p>蓝牙音箱Q9<span>x</span><span>1</span></p>
                                                                        <p>收纳包<span>x</span><span>1</span></p>
                                                                                                                                                                                                                                                                                                                                                        <p><label>收货信息：</label></p>
          <p>
                        {{$order['address']}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         {{$order['name']}}
              （{{$order['utel']}}） </p>
        </div>
      </div>
@endforeach
      

                                                      <!--支付宝支付-->
                    <div class="gi one-whole">
  <div class="field radio-item pay dark xl" style="display: block;">
    <!--<span class="radio webkit webkit46 not_msie custom-form_radio_alipay checked_radio">--><input class="parent_radio oppo-tj" id="radio_alipay" checked="" name="payonline_category" code="alipay" type="radio" bankcode="directpay" paymethod="0" seed="payment_alipay" qr_pay="0" data-tj="store|radio|order|alipay"></span>
    <label for="radio_alipay">
      <img alt="" src=" {{asset('Home/shop/image/alipay_logo.png')}}">
                                                                                                                                                                                                              </label>
    
  </div>
</div> 
     
   
          </div>
          <div class="opr-btn-pay">
            <div class="g">
              <div class="gi desk-three-quarters">
                <p class="error_msg_note">
                                  </p>
              </div>
              <div class="gi desk-one-quarter">
              <button class="button cart-button" type="submit">立即支付</button>
	</form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
        
 
      <div id="dialog" class="hidden">
    <div class="mask"></div>
      <div class="dialog dialog-payment">
        <div class="dialog-container">
          <div class="dialog-close"><a href="../myOrder/myOrder.html/161114102911479/payments#">x</a></div>
          <div class="dialog-content">
            <div class="field">
              <h4 class="dialog-title">请确认您的支付情况</h4>
            </div>
            <div class="field dialog-btn">
              <div class="g g-wrapper-s">
                <div class="gi lap-one-half">
                  <a id="paymentJumpUrl" href="../myOrder/myOrder.html/161114102911479/show" class="button">支付成功</a>
                </div>
                <div class="gi lap-one-half">
                  <a href="javascript:;" id="failed_to_pay" class="button-light">支付失败</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
	@include('Home/oppozhu/footer');
    <div class="navi-scroll" style="display: none;">
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
        var controllerNameWithAction = "OrdersController@payments".split('@');
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

<script src="{{asset('Home/shop/js/tingyun-rum.js')}}"></script>
</body></html>