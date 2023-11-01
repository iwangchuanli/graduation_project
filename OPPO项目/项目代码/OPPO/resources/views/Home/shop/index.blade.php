<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<html class='no-js'>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
    <meta content='width=device-width,initial-scale=1, user-scalable=no' name='viewport'>
    <title>『OPPO智能手机大全』OPPO最新手机报价_图片_机型-OPPO智能手机官网</title>
    <meta name="keywords" content="OPPO最新款智能手机在线订购,OPPO最新款智能手机在线购买,OPPO最新款智能手机快捷支付 " />
    <meta name="description" content="OPPO官网购物首页为您提供OPPO最新款智能手机在线订购,OPPO最新款智能手机在线购买,OPPO最新款智能手机快捷支付等信息,多种OPPO智能手机任您选择与订购,智能手机网上购买尽在OPPO官网。 " />
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('Home/shop/shop/stylesheets/styles.css-v=201610171809.css')}}" >

    <script type="text/javascript">
		function checkBrowser(){
			var browser = {};
			var div = document.createElement( "div" );
			div.innerHTML = "<link/><table></table><a href='404.html'>a</a><input type='checkbox'/>";
            var a = div.getElementsByTagName( "a" )[0];
			style = a && a.style;
			if (!style) {
				return;
			}
			style.cssText = "float:left;opacity:.5";
			browser.opacity = style.opacity === "0.5";
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
			window.location.href = "404.html";
		}
    </script>
    <script src="{{asset('Home/shop/shop/lib/modernizr.custom.js')}}" ></script>

          </head>
  <body>
   @include('Home/header');
   <main class='main-content slab-white'>
        <div class='full-carousel slick-dot-circle'>
      <div class='hero slick-slide'>
  <div class='hero-image center'>
      <a  href="/shop/391?gid=62"  target='_blank' title=''>
    <picture>
      <img alt='' title='' src="{{asset('Home/shop/static.oppo.com/archives/201611/201611220411565834018c94d90.jpg')}}" >
    </picture>
    </a>
  </div>
</div>
  <div class='hero slick-slide'>
  <div class='hero-image center'>
      <a  href="/shop/391?gid=59"  target='_blank' title=''>
    <picture>
      <img alt='' title='' src="{{asset('Home/shop/static.oppo.com/archives/201611/201611121211295825f009831e6.jpg')}}"    >
    </picture>
    </a>
  </div>
</div>
    </div>



    <section class='brick-m'>
      <div class='wrapper'>
          <div class='grid-special equalize top-bar'> 

            @foreach($goodPhone as $good)
                <div class='box'>
                    <a target='_blank' href="/shop/391?gid={{$good['gid']}}"  title="">
                        <div class='box-photo'>
                            <img alt='' title="R9s 黑色版" src="{{asset($good['gimg'])}}" >
                        </div>
                        <h2 class='box-heading'>
                            <a target='_blank' href=""  title="R9s 黑色版   11月11日新品上市">{{$good['gname']}}</a>
                        </h2>
                        <div class='box-details'>
                            <p class='box-price'>
                               <span class='normal'>&nbsp;</span>
                                <strong>￥{{$good['gprice']}}</strong>
                            </p>
                        </div>
                        <i class="ribbon  ribbon-new"></i>
                        <!-- 折扣、促销标签   <div class='box-features'></div>   -->
                    </a>
                </div>
            @endforeach            
        </div>
      </div>
    </section>

    <section class='brick-m'>
      <div class='wrapper'>
        <div class='grid-special equalize top-bar'>

          @foreach($goodother as $good)
            <div class='box '>
                <a target='_blank' href="/shop/385?gid={{$good['gid']}}"  title="">
                    <div class='box-photo'>
                        <img alt='' title="OPPO VOOC闪充电源适配器 AK779（不带数据线）" src="{{asset($good['gimg'])}}" >
                    </div>
                    <h2 class='box-heading'>
                        <a target='_blank' href=""  title="OPPO VOOC闪充电源适配器 AK779（不带数据线）">{{$good['gname']}}</a>
                    </h2>

                    <div class='box-details'>
                        <p class='box-price box-price-offer'>
                            <span class='normal'>￥{{$good['gprice']}}</span>
                            <strong class='reduced'>￥{{$good['vipprice']}}</strong>
                        </p>
                    </div>
                    <!-- 折扣、促销标签
                    <div class='box-features'>
                        <div class='box-feature red'>
                            <span class='icon icon-percentage'></span>
                        </div>
                    </div> -->
                </a>
          </div>
          @endforeach        
        </div>
      </div>
    </section>




            <section class='brick-s grid-one store-portable-hidden'>
      <div class="wrapper">
        <img src="{{asset('Home/shop/shop/media/content/services.png')}}"  alt="">
      </div>
    </section>
      </main>
      @include('Home/footer');
    <div class='navi-scroll'>
  <div class="navi-scroll-content">
    <a href="javascript:;" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href=" "  target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <a href=" "  class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a>
  </div>
</div>

    
    <div class="purchase-advisory">
        <a href=" "  target="_blank" id="advisory">购机咨询</a>
    </div>

    <script src="{{asset('shop/lib/jquery-1.9.1.min.js')}}" ></script>

    <script src="{{asset('shop/lib/jquery.lazyload.min.js')}}" ></script>

    <script src="{{asset('shop/lib/underscore-min.js')}}" ></script>

    <script src="{{asset('shop/lib/es5-shim.min.js')}}" ></script>

    <script src="{{asset('shop/lib/base64.min.js')}}" ></script>

    <script src="{{asset('shop/lib/custom_form.js-v=20150914144728.js')}}" ></script>

    <script src="{{asset('shop/lib/jquery.countdown.min.js')}}" ></script>

    <script src="{{asset('shop/lib/slick.min.js')}}" ></script>

    <script src="{{asset('shop/lib/responsive.js')}}" ></script>

    <script src="{{asset('shop/lib/picturefill.min.js')}}" ></script>

    <script src="{{asset('shop/lib/scripts.js-v=201511041533.js')}}" ></script>

        <script src="{{asset('shop/lib/opposhop.min.js-v=201611021544.js')}}" ></script>

            <script type="text/javascript">
    var vm;
    OPPO.conf.BASE_URL = "index.htm"/*tpa=http://www.opposhop.cn/*/;
    OPPO.conf.STORE_URL = 'index.htm'/*tpa=http://www.opposhop.cn/*/;
    OPPO.conf.ACCOUNT_URL = '';
    OPPO.conf.WWW_URL = "";
    OPPO.conf.SSO_LOGIN_URL = "";

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
        var controllerNameWithAction = "HomeController@index".split('@');
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
   
<noscript><img src="{{asset('Home/shop/shop/media/img-site=1351.gif')}}"  style="border:0" alt="" /></noscript>


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

<script src="{{asset('Home/shop/shop/lib/tingyun-rum.js')}}" ></script>

  </body>
</html>
<!-- cached at 2016-11-14 19:00:02 -->