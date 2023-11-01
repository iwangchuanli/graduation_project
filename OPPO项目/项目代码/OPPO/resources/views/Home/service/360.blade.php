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

  	<link media="all" type="text/css" rel="stylesheet" href="{{asset('Home/service/css/styles.css-v=20161009101515.css')}}" tppabs="{{asset('Home/service/css/styles.css-v=20161009101515.css')}}">
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
        	<h1 style="font-size:24px; font-family: &#39;Microsoft YaHei&#39;; text-align:center; padding-top:30px;">&nbsp; 物流查询</h1><p style="font-size: 14px; margin: 30px 30px 20px 50px; color: rgb(241, 153, 4); text-align: center;">&nbsp; &nbsp;
	OPPO商城订单商品由顺丰速运、邮政EMS和圆通速递进行配送，您可以随时对您的快递状态进行查询。</p><p>&nbsp; &nbsp;	<img src="{{asset('Home/service/image/20151230/1451446305410347.png')}}" style="width: 14px; height: 14px;"/>&nbsp;<strong>查询方法</strong></p><p style="text-indent: 2em;">详细请咨询OPPO客服查询快递单号，并前往相应的快递公司官网查询商品快递状态。</p><p><br/></p><p style="text-align:center"><img src="{{asset('Home/service/image/20151230/1451446305299510.jpg')}}" title="" alt="" width="615" height="426" border="0" vspace="0" style="width: 615px; height: 426px;"/></p><p>&nbsp; &nbsp;	<img alt="{{asset('Home/service/image/rings.png')}}" src="{{asset('Home/service/image/20151230/1451446305410347.png')}}"/>&nbsp;<strong>查询入口</strong></p><p>&nbsp; &nbsp;
	点击查询：<a href="" target="_blank" style="color: rgb(42, 173, 111); text-decoration: none;"><strong><span style="color: rgb(42, 173, 111);">顺丰速运</span></strong><strong><span style="color: rgb(42, 173, 111);"></span></strong></a><span style="text-decoration: none;"><strong><span style="text-decoration: none; color: rgb(42, 173, 111);">&nbsp; &nbsp;&nbsp;</span></strong></span><strong style="color: rgb(42, 173, 111); text-decoration: none;"><span style="color: rgb(42, 173, 111);"><a href="" target="_blank" style="color: rgb(42, 173, 111); text-decoration: none;">邮政EMS<strong style="color: rgb(42, 173, 111); text-decoration: none;"><span style="color: rgb(42, 173, 111);">&nbsp; &nbsp;&nbsp;</span></strong></a><a href="" target="_blank">圆通速递</a><strong style="white-space: normal; color: rgb(42, 173, 111);"><a href="" target="_blank" style="color: rgb(42, 173, 111); text-decoration: none;">&nbsp; &nbsp;&nbsp;</a></strong><a href="" target="_blank" textvalue="快递查询"><strong style="white-space: normal; color: rgb(42, 173, 111);">快递查询</strong></a></span></strong></p><p><br/></p>
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
