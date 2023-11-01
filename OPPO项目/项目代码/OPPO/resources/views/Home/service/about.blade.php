<!DOCTYPE html>
<html class='no-js'>
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta content='width=device-width,initial-scale=1, user-scalable=no' name='viewport'>
  <title>联系我们-OPPO智能手机官网 </title>
  <meta name="keywords" content="联系我们-OPPO智能手机官网 " />
  <meta name="description" content="OPPO官网联系我们页面为您提供多种联系OPPO方式，你可在此页面进行意见反馈及联系方式查询。 " />
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
			window.location.href = "lower.html"/*tpa=http://www.oppo.com/cn/lower.html*/;
		}
    </script>
  </head>

<body>
	@include('Home/oppozhu/header');
  <main class='main-content slab-light about'>
    <div class='wrapper'>
      <ul class='breadcrumb'>
  <li>
    <a href="/">
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  联系我们
              </li>
      </ul>
      <div class='brick-title'></div>
      <h1 class='h-gamma mobile-plan-title title-under-breadcrumb'>联系我们</h1>
      <!-- brick-bottom start -->
      <div class='brick-bottom'>
        <!--slab-white-border start -->
        <div class='slab-white-border'>
          <div class='about-content'>
            <div class='g g-wrapper-s'>
              <div class='gi desk-one-half one-whole'>
                <form class='about-form' method='post' id='about_contact_form' action="http://www.oppo.com/cn/about/contact" onsubmit = 'return vm.contactValidate()'>
                  <input type="hidden" name="_token" value="Ffxn96IxfR6AiFuCggVykhulgfsmQUrJ1BI04Yi5"/>
                  <div class='field'>
                    <p class='about-title'>意见反馈</p>
                  </div>
                  <div class='field'>
                    <input placeholder='您的名字' type='text' name="name" value="">
                  </div>
                  <div class='field'>
                    <input placeholder='邮箱' type='text' name="email" value="">
                  </div>
                  <div class='field'>
                    <input placeholder='手机号' type='text' name="mobile" value="">
                  </div>
                  <div class='field'>
                    <textarea placeholder='您的意见反馈' name="content"></textarea>
                  </div>
                                    <div class='error_msg_note' style="color:#F00">
                  	                  </div>
                  <div class='field about-submit'>
                    <button class='button' type='submit'>发&nbsp;&nbsp;送</button>
                  </div>
                </form>
              </div>
              <div class='gi desk-one-half one-whole'>
                <div class='g g-wrapper-s'>
                  <div class='gi'>
                    <div class='about-point'>
                      <div class='field'>
                        <p class='about-title'>联系我们</p>
                      </div>
                      <div class="g one-whole about-contact">
                        <div class="about-contact-icon">
                          <span class="icon icon-tel"></span>
                        </div>
                        <div class="about-contact-info">
                          <h4 class='h-delta'>
                            <span class="highlight">4001-666-888</span>
                          </h4>
                          <p style="">7*24小时客服电话</p>
                        </div>
                      </div>
                      <div class="g one-whole field about-contact">
                        <a id="btn-kf" href="" target="_blank">
                        <div class="about-contact-icon">
                          <span class="icon icon-chat"></span>
                        </div>
                        <div class="about-contact-info">
                          <h4 class='h-delta'>
                            <span class="highlight">在线客服</span>
                            <span class="icon icon-arrow"></span>
                          </h4>
                          <p>服务时段：8:30~22:00</p>
                        </div>
                        </a>
                      </div>
                      <div class="g one-whole about-contact">
                        <a href="" target="_blank">
                        <div class="about-contact-icon">
                          <span class="icon icon-weibo"></span>
                        </div>
                        <div class="about-contact-info">
                          <h4 class='h-delta'>
                            <span class="highlight">官方微博</span>
                            <span class="icon icon-arrow"></span>
                          </h4>
                          <p></p>
                        </div>
                        </a>
                      </div>
                      <div class="g one-whole field about-contact">
                        <div class="about-contact-icon">
                          <span class="icon icon-weixin"></span>
                        </div>
                        <div class="about-contact-info">
                          <img src="{{asset('Home/service/image/wx.png')}}"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--brick-shadow start -->
          <div class='brick-shadow about-content about-bottom'>
            <div class='g'>
              <div class='g one-half'>
                <div class='field'>
                  <p class='about-address'>我们的地址:</p><br>
                  <p class='about-address'>广东省东莞市长安镇乌沙海滨路18号 邮编：523860</p><br>
                </div>
                <div class='field about-icons'>
                  <div class='g'>
                    
                    <div class='gi one-third  badge-mobile'>
                      <div class='badge-icon'>
                        <span class='icon icons-plus icons-plus-send'></span>

                        <div class='badge-icon-tip'>
                          <div class='badge-icon-tip-container'>
                            <div class='badge-icon-tip-close'><a href='#'>x</a></div>
                            <div class='badge-icon-tip-triangle'></div>
                            <div class='badge-icon-tip-content badge-icon-tip-message'>
                              <form action="http://www.oppo.com/cn/about/sendsms" id="sendMsg">
                                <h4 class='badge-icon-tip-title'>输入您的手机号码</h4>
                                <div class='input-captcha'>
                                  <input type='text' name='mobile' placeholder='输入您的手机号码' value='' />
                                </div>
                                <div class='g input-captcha'>
                                  <div class='gi one-half'><input type='text' name='captcha' placeholder='图片验证码' value='' /></div>
                                  <div class='gi one-half'><a href='javascript:;' onclick='vm.refreshCaptcha();' id='refreshCaptcha'><img src="{{asset('Home/service/image/default-hhC2PWaR- alt=-captcha--')}}" width='100%'/></a></div>
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
                    <div class='gi one-half center-text'>
                      <div class='gi badge-qrcode'>
                        <p>
                          <img width='120' height='120' class='video-bg' src="{{asset('Home/service/image/content/others/qrcode.png')}}">
                        </p>
                        <h5 class='h-epsilon'>扫二维码获取地址</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='g one-half'>
                <div class='field about-map'>
                  <div class='map' id='map'></div>
                </div>
              </div>
            </div>
          </div>
          <!--brick-shadow end -->
        </div>
        <!--slab-white-border end -->
      </div>
      <!-- brick-bottom end -->
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

<script src="{{asset('Home/service/js/oppo.min.js-v=20161009101515.js')}}" ></script>


  <script src="{{asset('Home/service/js/api-v=2.0&ak=84943bd4d6cdee6b618a9baad6696e39.js')}}" ></script>


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
    var controllerNameWithAction = "AboutController@index".split('@');
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
      vm.initMap('东莞市', 'OPPO售后服务部', '东莞市长安镇乌沙海滨路18号');
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
