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

  	<link media="all" type="text/css" rel="stylesheet" href="{{asset('Home/oppozhu/css/styles.css-v=20161009101515.css')}}" >

	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=IGWnMUEqRXtLQ7hWfXxp9u4eOSHELegG"></script>
	<style type="text/css">
	#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
	</style>
  </head>

<body>
	@include('Home/oppozhu/header');

  <main class='main-content slab-light offline-store-detail'>
    <div class='wrapper'>
      <ul class='breadcrumb'>
  <li>
    <a href="/" >
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  <a href="/shops" >
            体验店
            <span>/</span>
          </a>
              </li>
          <li>{{$result['tname']}}</li>
      </ul>
      <div class='brick-title'></div>
      <h1 class='h-gamma mobile-plan-title'>{{$result['tname']}}<span>{{$result['ttype']}}</span></h1>
      <!-- brick-bottom start -->
      <div class='brick-bottom'>
        <!--slab-white-border start -->
        <div class='slab-white-border'>
          <div class='offline-store-content'>
            <div class='g'>
              <div class='gi lap-one-half one-whole'>
                <!--offline-store-about start -->
                <div class='offline-store-about'>
                  <div class='field'>
                    <p class='offline-store-title'>营业电话和地址</p>
                  </div>
                  <div class='field'>
                    <p class='offline-store-date'>{{$result['tnumber']}}<span>08 : 30-20 : 30</span></p>
                  </div>
                  <div class='field'>
                    <p>
                      <strong name="address">{{$result['taddress']}}</strong>
                    </p>
                  </div>
                  <div class='field about-icons'>
                    <div class='g'>
                      <div class='gi one-third badge-mobile'>
                        <div class='badge-icon'>
                          <span class='icon icons-plus icons-plus-send'></span>
                          <div class='badge-icon-tip'>
                            <div class='badge-icon-tip-container'>
                              <div class='badge-icon-tip-close'><a href='#'>x</a></div>
                              <div class='badge-icon-tip-triangle'></div>
                              <div class='badge-icon-tip-content badge-icon-tip-message'>
                                <form action="http://www.oppo.com/cn/shops/sendsms" id="sendMsg">
                                  <h4 class='badge-icon-tip-title'>输入您的手机号码</h4>
                                  <div class='input-captcha'>
                                    <input type='hidden' name='sid' value='11767'/>
                                    <input type='text' name='mobile' placeholder='输入您的手机号码' value='' />
                                  </div>
                                  <div class='g input-captcha'>
                                    <div class='gi one-half'><input type='text' name='captcha' placeholder='图片验证码' value='' /></div>
                                    <div class='gi one-half'><a href='javascript:;' onclick='vm.refreshCaptcha();' id='refreshCaptcha'><img src="{{asset('Home/oppozhu/image/default-DMKqmHji.png')}}"  width='100%'/></a></div>
                                  </div>
                                  <div class='sendMessageError error'></div>
                                  <div><button class='button button-s'>确定</button></div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class='badge-info'>
                          <h5 class='h-epsilon'>发送地址到手机</h5>
                        </div>
                      </div>
                      <div class='gi one-half badge-qrcode'>
                        <p>
                          <img width='120' height='120' class='video-bg' src="{{asset('Home/oppozhu/image/3a772cdce82e3a3b429c17de61dd9c0e.png')}}" >
                        </p>
                        <h5 class='h-epsilon'>扫二维码获取地址</h5>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!--offline-store-about end -->
              </div>
              <div class='gi lap-one-half one-whole'>
                <div class='field map-follow'>

                </div>
                <div class='field offline-store-map location-map location-map-fix'>
                  <div class='map map-fix-infowindow' id='shop_map'>
					<div id="allmap"></div>
				</div>
                </div>
              </div>
            </div>
                      </div>
        </div>
        <!-- slab-white-border end -->
      </div>
      <!-- brick-bottom end -->
    </div>
  </main>
	@include('Home/oppozhu/footer');
	<script src="{{asset('Home/oppozhu/js/jquery-1.9.1.min.js')}}"></script>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	var point = new BMap.Point(116.331398,39.897445);
	map.centerAndZoom(point,12);
	// 创建地址解析器实例
	
	var myGeo = new BMap.Geocoder();
	// 将地址解析结果显示在地图上,并调整地图视野
	var address= $('strong[name=address]').text();
	
	myGeo.getPoint(address, function(point){
		if (point) {
			map.centerAndZoom(point, 16);
			map.addOverlay(new BMap.Marker(point));
		}else{
			alert("您选择地址没有解析到结果!");
		}
	}, "北京市");
</script>

<div class='navi-scroll'>
  <div class="navi-scroll-content">
    <a href="javascript:;" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href=""  target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <a href=""  class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a>
  </div>
</div>
<script src="{{asset('Home/oppozhu/js/lib.min.js')}}" ></script>

<script src="{{asset('Home/oppozhu/js/custom_form.js-v=20150914144728.js')}}" ></script>

<script src="{{asset('Home/oppozhu/js/scripts.js-v=201506151120596.js')}}" ></script>

<script src="{{asset('Home/oppozhu/js/oppo.min.js-v=20161009101515.js')}}" ></script>



  <script type="text/javascript" src="{{asset('Home/oppozhu/js/SearchInfoWindow_min.js')}}" ></script>
  <link rel="stylesheet" href="{{asset('Home/oppozhu/css/SearchInfoWindow_min.css')}}"  />

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
    var controllerNameWithAction = "ShopsController@show".split('@');
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
</script>

</script>
<noscript><img src="{{asset('Home/oppozhu/image/img-site=1351.gif')}}"  style="border:0" alt="" /></noscript>

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

<script src="{{asset('Home/oppozhu/js/tingyun-rum.js')}}" ></script>

</body>

</html>
