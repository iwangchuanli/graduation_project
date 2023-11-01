<!DOCTYPE html>
<!-- saved from url=(0037)../shopAddress/address.html -->
<html class=" js no-touch backgroundsize cssanimations csstransforms svg inlinesvg"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE">
    <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
    <title>『OPPO智能手机个人首页』OPPO手机个人最新动态|历史记录查询-OPPO智能手机官网 </title>
    <meta name="keywords" content="OPPO智能手机个人首页,OPPO手机个人最新动态,OPPO手机历史记录查询 ">
    <meta name="description" content="OPPO智能手机个人首页可查看个人最新动态，通过OPPO官网也可实现OPPO手机历史记录查询功能，更多信息，就来OPPO智能手机官网。 ">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('Home/shop/css/styles.css?v=201610171809')}}">

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
    <main class="main-content user">
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
      <a href="/address/show">配送地址</a>
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
              </div>
      <a class="button-light field" id="address_new" href="javascript:;">添加新地址</a>
      <div class="js-content address-form-new" style="display:none;">
        <div id="address-create" class="g">
  <div class="gi field lap-one-whole desk-one-quarter">
    <label>*收货人姓名</label>
    <input type="text" name="receiver">
  </div>
  <div class="g">
    <div class="gi field lap-one-whole desk-one-quarter">
      <label>*手机号码</label>
      <input type="text" name="mobile">
    </div>
  </div>
    <div class="g field">
  <label>*收货地址</label>
  <div class="g">
    <div class="gi basic-input one-whole desk-one-fifth">
      <span class="icon icon-grey-arrow-down"></span>
      <select id="select1" name="province_id"></select><a class="select webkit webkit46 not_msie custom-form_select1 responsive_select"><span class="select_content"><span class="select_button"><span class="select_button_icon"></span></span><span class="select_label"><span></span></span></span></a>
    </div>
    <div class="gi basic-input one-whole desk-one-fifth">
      <span class="icon icon-grey-arrow-down"></span>
      <select id="select2" name="city_id"></select><a class="select webkit webkit46 not_msie custom-form_select2 responsive_select"><span class="select_content"><span class="select_button"><span class="select_button_icon"></span></span><span class="select_label"><span></span></span></span></a>
    </div>
    <div class="gi basic-input one-whole desk-one-fifth">
      <span class="icon icon-grey-arrow-down"></span>
      <select id="select3" name="district_id"></select><a class="select webkit webkit46 not_msie custom-form_select3 responsive_select"><span class="select_content"><span class="select_button"><span class="select_button_icon"></span></span><span class="select_label"><span></span></span></span></a>
    </div>
    <div class="gi basic-input one-whole desk-one-fifth">
      <span class="icon icon-grey-arrow-down"></span>
      <select id="select4" name="town_id"></select><a class="select webkit webkit46 not_msie custom-form_select4 responsive_select"><span class="select_content"><span class="select_button"><span class="select_button_icon"></span></span><span class="select_label"><span></span></span></span></a>
    </div>
  </div>
  <div class="g">
    <div class="gi desk-two-thirds one-whole">
      <input class="address-detail" type="text" name="address-detail" value="" placeholder="详细街道地址">
    </div>
  </div>
</div>
  <div class="g">
    <div class="gi field lap-one-whole desk-one-quarter">
      <label>联系邮箱</label>
      <input type="text" name="email">
    </div>
  </div>
  <div class="form-actions">
    <div class="pull-left">
      <a class="button-light pull-left address-store" href="javascript:;">保存</a>
      <a class="button-light pull-left address-new-cancel" href="javascript:;">取消</a>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</form>
    </div>
  </main>
	@include('Home/oppozhu/footer');
    <div class="navi-scroll">
  <div class="navi-scroll-content">
    <a href="javascript:;" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href=" " target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
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
        var controllerNameWithAction = "AddressesController@index".split('@');
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