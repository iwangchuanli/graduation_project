<!DOCTYPE html>

<html class='no-js'>
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta content='width=device-width,initial-scale=1, user-scalable=no' name='viewport'>
  <title> 『OPPO手机官网』OPPO智能手机_OPPO最新款手机-OPPO智能手机官方网站 </title>
  <meta name="keywords" content=" OPPO,OPPO手机官网,OPPO智能手机,OPPO拍照手机,OPPO新款手机,OPPO手机资讯 " />
  <meta name="description" content=" OPPO是一家全球性智能手机制造商和移动互联网服务商，让您随时了解OPPO手机官网,OPPO智能手机,,OPPO拍照手机OPPO新款手机,OPPO手机资讯等内容，为客户开创先进的智能手机产品和移动互联网服务。 " />
  <meta property="qc:admins" content="1257363774670076375" />

  	<link media="all" type="text/css" rel="stylesheet" href="{{asset('Home/service/css/styles.css-v=20161009101515.css')}}">
  	<script type="text/javascript">
    	function checkBrowser(){
			var browser = {};
			var div = document.createElement( "div" );
			div.innerHTML = "<link/><table></table><a href='http://www.oppo.com/a'>a</a><input type='checkbox'/>";
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
			window.location.href = "http://www.oppo.com/cn/lower.html";
		}
    </script>

  </head>

<body>
	@include('Home/oppozhu/header');
  <main class='main-content slab-light'>
  <div class="supports">
    <div class='wrapper'>
      <ul class='breadcrumb'>
  <li>
    <a href="">
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  <a href="">
            服务
            <span>/</span>
          </a>
              </li>
          <li>
                  购买帮助
              </li>
      </ul>
    </div>

    <div class="g wrapper supports-help">
	@include('Home/service/left');
     <div class="gi one-whole lap-three-quarters desk-four-fifths supports-help-content slab-white">
        <div class="word-break article-response">
        	<h1 style="font-size:24px; padding:30px 50px 30px 50px;text-align:center">&nbsp; 发货时间</h1><p>
	1、选择在线支付的订单，OPPO商城将会在订单完成支付的48小时内安排仓储中心为您发货。</p><p>
	2、选择货到付款的订单，OPPO商城将在客服完成订单核实后的48小时内安排仓储中心为您发货。</p><p>
	3、您可通过登陆OPPO商城查询订单详情，了解订单发货情况。</p><p>
	4、由于某些原因（如系统故障、缺货等），个别订单的配送可能会有延迟，请您耐心等待。我们会尽最大努力保证发货的速度，感谢您的支持和谅解。</p>
        </div>
      </div>
    </div>
  </div>
  </main>

	@include('Home/oppozhu/footer');
<div class='navi-scroll'>
  <div class="navi-scroll-content">
    <a href="javascript:;" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href="" target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <a href="" class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a>
  </div>
</div>
<script src="{{asset('Home/service/js/lib.min.js')}}"></script>

<script src="{{asset('Home/service/js/custom_form.js-v=20150914144728.js')}}"></script>

<script src="{{asset('Home/service/js/scripts.js-v=201506151120596.js')}}"></script>

<script src="{{asset('Home/service/js/oppo.min.js-v=20161009101515.js')}}"></script>



<script type="text/javascript">
  var vm;
  OPPO.conf.BASE_URL = "http://www.oppo.com/cn";
  OPPO.conf.STORE_URL = 'http://www.opposhop.cn/';
  OPPO.conf.ACCOUNT_URL = 'http://my.oppo.com/';
  OPPO.conf.domains = [];
  OPPO.conf.jsonpDone = false;
      OPPO.conf.jsonpDone = true;
  
  var url = OPPO.conf.STORE_URL + '/auth/check';
  //callback for jsonp
  var successCallback = function(data){
    $('ul.log-area .hasLogout').removeClass('show').addClass('hidden');
    $('ul.log-area .hasLogin').removeClass('hidden').addClass('show');
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
    var controllerNameWithAction = "SupportsController@helpShow".split('@');
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
  $(function () {
      });
</script>
<noscript><img src="{{asset('Home/service/image/img-site=1351.gif')}}" style="border:0" alt="" /></noscript> 

<!--听云监测-->
<script src="{{asset('Home/service/js/tingyun-rum.js')}}"></script>

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
</body>

</html>
