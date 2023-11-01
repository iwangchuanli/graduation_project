<!DOCTYPE html>
<html class='no-js'>
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta content='width=device-width,initial-scale=1, user-scalable=no' name='viewport'>
  <title>『OPPO智能手机大全』OPPO最新手机报价_图片_机型-OPPO智能手机官网 </title>
  <meta name="keywords" content="OPPO手机,OPPO智能手机大全,OPPO智能手机最新报价,OPPO智能手机图片,OPPO智能手机机型 " />
  <meta name="description" content="OPPO手机官网为您提供OPPO手机,OPPO智能手机大全,OPPO智能手机最新报价,OPPO智能手机图片,OPPO智能手机机型等信息，是您全面了解OPPO智能手机最新机型的最佳途径。 " />
  <meta property="qc:admins" content="1257363774670076375" />

  	<link media="all" type="text/css" rel="stylesheet" href="{{asset('Home/oppozhu/css/styles.css-v=20161009101515.css')}}" >
  </head>

<body>
  
    @include('Home/header');
  <main class='main-content'>

  <div class="product-index">

  	<div class='wrapper'>
    <ul class='breadcrumb'>
  <li>
    <a href="index.htm" >
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  产品
              </li>
      </ul>
    </div>
  	<!-- PC端featured图 -->
    <div class="main-flagship">
  		<div class="wrapper">
        <div class="pull-left">
          <a class="left-up hover-box oppo-tj" data-tj="www|link|product|left_up" href="/shop/391?gid=62"  target="_blank">
  					<img src="{{asset('Home/oppozhu/image/20160317030319IpvqyhjYmpGYvdlO.jpg')}}"  class="left-up-img hover-animation">
  					<img src="{{asset('Home/oppozhu/image/20160317030354OOY1uYdClqq7CcLP.png')}}"  class="left-up-text">
  				</a>
          <a class="left-down hover-box oppo-tj" data-tj="www|link|product|left_down" href="/shop/391?gid=60"  target="_blank">
  					<img src="{{asset('Home/oppozhu/image/20160325040354GR8m4v6a3fh4HYcj.jpg')}}"  class="left-down-img hover-animation">
  					<img src="{{asset('Home/oppozhu/image/20160325040357WotT60IYvIxXBlR4.png')}}"  class="left-down-text">
  				</a>
        </div>

  			<div class="pull-right">
          <a class="whole-right hover-box oppo-tj" data-tj="www|link|product|right" href="/shop/391?gid=59"  target="_blank">
  					<img src="{{asset('Home/oppozhu/image/201610170810015804c3d185376.jpg')}}"  class="whole-right-img hover-animation">
  					<img src="{{asset('Home/oppozhu/image/20161017051031580493a77b204.png')}}"  class="whole-right-text">
  				</a>
        </div>
      </div>
  	</div>
	
  	<!-- 移动端featured图 -->
  	<div class="flagship-mobile">
            <a href="/shop/r9spc"  class="oppo-tj" data-tj="www|link|product|mobile"><img src="{{asset('Home/oppozhu/image/201610170810365804becc4bdbd.jpg')}}"  alt=""></a>
        	</div>

    <div class="tabs-blank"></div>
    <ul class="tabs-mobile font-normal">
                 
        <li class="tab" id="tab-1">R系列</li>
             
        <li class="tab" id="tab-2">A系列</li>
             
        <li class="tab" id="tab-4">N系列</li>
                </ul>

    <div class="box-products">
      <div class="wrapper">
        <!-- <img src="/cn/assets/images/content/product-gallery/title-1.png" class="desk-title"> -->



        <div class="desk-title">OPPO 产品系列</div>                                
            <div class="brick-name">
                <div class="pull-left">
                    <span class="serial-slogan"><span  class="serial-name">R系列</span>&nbsp;&nbsp;&nbsp;&nbsp;纤薄设计·至美外观</span>
                </div>
                <div class="pull-right">
                    <span class=""><a href="/shop/goodslist"  class="oppo-tj" data-tj="www|link|product|serial_1_more'])" target="_blank">查看更多</a></span>
                    <span class="icon-more">
                        <a href="/shop/goodslist"  target="_blank" class="oppo-tj" data-tj="www|link|product|serial_1_more'])">
                            <img src="{{asset('Home/oppozhu/image/icon-more.png')}}" >
                        </a>
                    </span>
                </div>
            </div>
            <div class="brick-list">
                @foreach($goodR as $good)          
                <div class="brick-item serial " id="serial-1" style="width:283px">
                    <a href="/shop/391?gid={{$good['gid']}}"  class="oppo-tj" data-tj="www|link|product|serial_1_1" target="_blank">
                        <div class="brick-img">
                          <img src="{{asset($good['gimg'])}}">
                        </div>
                        <div class="brick-content">
                          <div class="brick-title">{{$good['gname']}}</div>
                          <p class="brick-desc">点击了解详情</p>
                          <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_1_1_more" href="" >&nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;</a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>             
                

            <div class="brick-mobile-more">
                <span class="font-normal"><a href=""  class="oppo-tj" data-tj="www|link|product|serial_1_mobile_more">&nbsp;&nbsp;R系列更多产品&nbsp;&nbsp;&gt;&gt;</a></span>
            </div>
             

            <div class="brick-name">
                <div class="pull-left">
                    <span class="serial-slogan"><span  class="serial-name">A系列</span>&nbsp;&nbsp;&nbsp;&nbsp;潮流设计·实用体验</span>
                </div>
            </div>
            <div class="brick-list">
              @foreach($goodA as $good)         
                <div class="brick-item serial " id="serial-2" style="width:283px">
                    <a href="/shop/391?gid={{$good['gid']}}"  class="oppo-tj" data-tj="www|link|product|serial_2_1" target="_blank">
                        <div class="brick-img">
                            <img src="{{asset($good['gimg'])}}" >
                        </div>
                        <div class="brick-content">
                            <div class="brick-title">{{$good['gname']}}</div>
                            <p class="brick-desc">11月11日0点开售</p>
                            
                         </div>
                    </a>
                </div>
              @endforeach
            </div>
                                 
               
                               
            <div class="brick-name">
                <div class="pull-left">
                    <span class="serial-slogan"><span  class="serial-name">N系列</span>&nbsp;&nbsp;&nbsp;&nbsp;旋转镜头·创意拍摄</span>
                </div>
            </div>
            <div class="brick-list">
              @foreach($goodN as $good)           
                <div class="brick-item serial " id="serial-4" style="width:283px">
                    <a href="/shop/391?gid={{$good['gid']}}"  class="oppo-tj" data-tj="www|link|product|serial_4_1" target="_blank">
                        <div class="brick-img">
                            <img src="{{asset($good['gimg'])}}" >
                        </div>
                        <div class="brick-content">
                            <div class="brick-title">{{$good['gname']}}</div>
                            <p class="brick-desc">{{$good['details']}}</p>
                            
                        </div>
                    </a>
                </div>
              @endforeach
            </div>



            <div class="brick-name">
                <div class="pull-left">
                    <span class="serial-slogan"><span  class="serial-name">Find系列</span>&nbsp;&nbsp;&nbsp;&nbsp;先进科技·智能旗舰</span>
                </div>
            </div>
            <div class="brick-list">
              @foreach($goodFind as $good)           
                <div class="brick-item serial " id="serial-4" style="width:283px">
                    <a href="/shop/391?gid={{$good['gid']}}"  class="oppo-tj" data-tj="www|link|product|serial_4_1" target="_blank">
                        <div class="brick-img">
                            <img src="{{asset($good['gimg'])}}" >
                        </div>
                        <div class="brick-content">
                            <div class="brick-title">{{$good['gname']}}</div>
                            <p class="brick-desc">{{$good['details']}}</p>
                            
                        </div>
                    </a>
                </div>
              @endforeach
            </div>



      </div>
    </div>

    <div class="oppo-feature">
      <div class="wrapper">
        <!-- <img src="/cn/assets/images/content/product-gallery/title-2.png" class="desk-title"> -->
        <div class="desk-title">OPPO 产品特色</div>
        <div class="feature-item">
                    <div class="pull-left">
            <a href="/dian"  target="_blank" class="oppo-tj" data-tj="www|link|product|feature_1">
              <img src="{{asset('Home/oppozhu/image/20160121100120Nobg0mg0q08c8ThO.jpg')}}" >
            </a>
          </div>
          <div class="pull-right">
            <a href="/sheying"  target="_blank" class="oppo-tj" data-tj="www|link|product|feature_2">
              <img src="{{asset('Home/oppozhu/image/201601211001243YG3UFpx23RdhMt0.jpg')}}"  class="feature-second">
            </a>
          </div>
                  </div>
      </div>
    </div>

  </div>

  <div class="other-link font-normal">
    <a href="" >对比手机</a>
    <span>|</span>
    <a href="" >商城</a>
    <span>|</span>
    <a href="service/proarea.htm" >产品使用</a>
    <span>|</span>
    <a href="" >全部产品</a>
  </div>


  </main> 

  <div class="font-normal">
	@include('Home/footer');
  </div>

<div class='navi-scroll'>
  <div class="navi-scroll-content">
    <a href="javascript:;" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href="javascript:if(confirm(%27https://www.wenjuan.com/s/2AzYrm/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://www.wenjuan.com/s/2AzYrm/%27"  target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <a href="javascript:if(confirm(%27https://www.wenjuan.com/s/2AzYrm/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://www.wenjuan.com/s/2AzYrm/%27"  class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a>
  </div>
</div>

<script src="{{asset('Home/oppozhu/js/lib.min.js')}}" ></script>

<script src="{{asset('Home/oppozhu/js/custom_form.js-v=20150914144728.js')}}" ></script>

<script src="{{asset('Home/oppozhu/js/scripts.js-v=201506151120596.js')}}" ></script>

<script src="{{asset('Home/oppozhu/js/oppo.min.js-v=20161009101515.js')}}" ></script>



<script type="text/javascript">
  var vm;
  OPPO.conf.BASE_URL = "";
  OPPO.conf.STORE_URL = '';
  OPPO.conf.ACCOUNT_URL = '';
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
    var controllerNameWithAction = "ProductsController@index".split('@');
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
<!-- cached at 2016-11-12 22:00:04 -->