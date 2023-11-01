<!DOCTYPE html>
<!-- saved from url=(0050)http://www.opposhop.cn/orders/161114102911479/show -->
<html class=" js no-touch backgroundsize cssanimations csstransforms svg inlinesvg"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE">
    <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
    <title>OPPO最新款智能手机在线订购 </title>
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
    <a href="http://www.oppo.com/cn/">
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  <a href="http://www.opposhop.cn/orders">
            我的订单
            <span>/</span>
          </a>
              </li>
          <li>
		    订单详情
              </li>
      </ul>
      <div class="myOppo-menu">
  <h1 class="h-gamma">订单详情</h1>
  <ul class="navigation">
    <li class="is-active">
      <a href="/order/orders">我的订单</a>
    </li>
    <li class="">
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
	@foreach($orders as $order)
      <div class="g slab-white-border order">
        <div class="g brick-shadow order-list-top clearfix">
  <div class="gi one-whole desk-three-quarters pull-left">
    <div class="one-whole lap-width-auto">
      <input type="hidden" id="order-number" value="161114102911479">
      <span>订单编号：<strong>{{$order['obh']}}</strong></span>
    </div>
    <div class="one-whole lap-width-auto">
     订单状态： <span style="color:green">{{$order['ostatus']}}</span>
    </div>
    <div class="gi one-whole lap-width-auto">
      <div class="gi pull-left">
              </div>
      <div class="gi pull-left">
              </div>
    </div>
  </div>
  <div class="gi one-whole desk-one-quarter pull-left desk-text-align-right">
    <span>下单时间：{{$order['otime']}}</span>
  </div>
</div>

<div class="order-list">
  <div class="order-summary">
    <div class="order-show-item one-whole lap-one-half desk-one-half">
      <div class="title">收货信息:</div>
      <div class="row">收&nbsp;&nbsp;件&nbsp;&nbsp;人：{{$order['name']}}</div>
              <div class="row">收货地址：{{$order['address']}}</div>
            <div class="row">联系电话：{{$order['utel']}}</div>
              <div class="row">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：{{$order['uemail']}}</div>
          </div>
    <div class="order-show-item one-whole lap-one-half desk-one-half">
      <div class="title">支付及配送信息：</div>
      <div class="row">支付方式：在线支付</div>
            <div class="row">配送方式：快递</div>
        <div class="row">配送状态：<span class="color-primary">{{$order['send']}}</span></div>
            <div class="row">支付状态：{{$order['ostatus']}}</div>
              <div class="row">发票抬头：{{$order['name']}}</div>
                  </div>
  </div>
</div>

<div class="g clearfix">
  <div class="order-product-list brick-shadow one-whole desk-two-thirds pull-left">
    <div class="order-good-title">商品清单：</div>
                              <div class="goods-list">
          <div class="goods-list-show">
            <a class="goods-list-image" href="http://www.opposhop.cn/products/393" target="_blank">
                            <img src="{{$order['gimg']}}">
                          </a>
                      </div>
          <div class="goods-list-detail">
                        <div class="goods-list-info goods-list-main">
              <div class="goods-list-description">
                <h4 class="heading">
                                      <a href="http://www.opposhop.cn/products/393" target="_blank">{{$order['gname']}}
                    </a>
                                  </h4>
                <p>黑色|全网通|64G</p>
              </div>
              <div class="goods-list-quantity"><strong>×1</strong></div>
              <div class="goods-list-price"><strong>￥{{$order['oprice']}}</strong></div>
            </div>

                                                                                <div class="goods-list-info goods-list-attach goods-list-gift">
                  <div class="goods-list-description">
                    <i class="goods-list-flag-gift">赠品</i>
                    <a href="http://www.opposhop.cn/products/383" target="_blank">蓝牙音箱Q9</a>
                  </div>
                  <div class="goods-list-quantity">×1</div>
                                  </div>
                                                        <div class="goods-list-info goods-list-attach goods-list-gift">
                  <div class="goods-list-description">
                    <i class="goods-list-flag-gift">赠品</i>
                    <a href="http://www.opposhop.cn/products/386" target="_blank">收纳包</a>
                  </div>
                  <div class="goods-list-quantity">×1</div>
                                  </div>
                          
                                                                                                
                                                                                                      
          </div>
        </div>
                                </div>

  <div class="total-price slab-extra-light gi one-whole desk-one-third">
    <div class="title hidden">您的订单</div>
    <ul>
      <li>
        <span class="product">商品数量：</span>
        <span class="amount">x{{$order['onum']}}</span>
      </li>
      <li>
        <span class="product">总价：</span>
        <span class="amount">￥{{$order['oprice']}}</span>
      </li>
    </ul>
    <ul>
      <li>
        <span class="product">邮费：</span>
        <span class="amount">+ ￥0.00</span>
      </li>
      <li>
        <span class="product">手续费：</span>
        <span class="amount">+ ￥0.00</span>
      </li>
      <li>
        <span class="product">优惠：</span>
        <span class="amount">- ￥0.00</span>
      </li>
    </ul>
    <div class="total">
      <span class="label">应付总额：</span>
      <span class="price">￥{{$order['oprice']}}</span>
    </div>
              </div>
</div>

<div class="form-actions brick-shadow lap-invisible">
  <div class="form-actions-left">
    <a class="button-light" href="/order/orders">返回订单列表</a>
  </div>
</div>
      </div>
	@endforeach
    </div>
  </main>
  <div id="return-confirm" class="hidden">
			<div class="mask-common"></div>
			<div class="dialog-common dialog-box-common">
				<div class="dialog-container">
					<a class="dialog-close-common">×</a>
					<div class="dialog-content-common">
												<div class="field">
							<h4 class="dialog-title-common">您确定要提交退换货申请吗？</h4>
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
	  <div id="return-error" class="hidden">
			<div class="mask-common"></div>
			<div class="dialog-common dialog-box-common">
				<div class="dialog-container">
					<a class="dialog-close-common">×</a>
					<div class="dialog-content-common">
																		<div class="dialog-common-content">
												</div>
																		<div class="field dialog-btn">
							<div class="g g-wrapper-s">
								<div class="gi lap-one-whole">
									<a class="button button-one-whole">好的</a>
								</div>
							</div>
						</div>
											</div>
				</div>
			</div>
		</div>
	  <div id="return-already" class="hidden">
			<div class="mask-common"></div>
			<div class="dialog-common dialog-box-common">
				<div class="dialog-container">
					<a class="dialog-close-common">×</a>
					<div class="dialog-content-common">
												<div class="field">
							<h4 class="dialog-title-common">退换货申请提交成功！</h4>
						</div>
																		<div class="dialog-common-content">
													<p>请及时带上需退换的商品，选择就近的售后服务中心进行退换货业务办理。</p><p>为了方便您及时办理退换货业务，建议立即<a href="" target="_blank">预约售后服务中心&gt;&gt;</a></p><p>如有疑问，请查看<a href="" target="_blank">退换货流程说明</a>或联系我们的<a id="btn-kf" href="" target="_blank">在线客服</a>，我们将竭诚为您服务，感谢您对OPPO的支持！</p>
												</div>
																		<div class="field dialog-btn">
							<div class="g g-wrapper-s">
								<div class="gi lap-one-whole">
									<a class="button button-one-whole">好的</a>
								</div>
							</div>
						</div>
											</div>
				</div>
			</div>
		</div>
		<div id="return-twice" class="hidden">
			<div class="mask-common"></div>
			<div class="dialog-common dialog-box-common">
				<div class="dialog-container">
					<a class="dialog-close-common">×</a>
					<div class="dialog-content-common">
												<div class="field">
							<h4 class="dialog-title-common">您已提交过退换货申请!</h4>
						</div>
																		<div class="dialog-common-content">
													<p>请及时带上需退换的商品，选择就近的售后服务中心进行退换货业务办理。</p><p>为了方便您及时办理退换货业务，建议立即<a href="" target="_blank">预约售后服务中心&gt;&gt;</a></p><p>如有疑问，请查看<a href="" target="_blank">退换货流程说明</a>或联系我们的<a id="btn-kf" href="" target="_blank">在线客服</a>，我们将竭诚为您服务，感谢您对OPPO的支持！</p>
												</div>
																		<div class="field dialog-btn">
							<div class="g g-wrapper-s">
								<div class="gi lap-one-whole">
									<a class="button button-one-whole">好的</a>
								</div>
							</div>
						</div>
											</div>
				</div>
			</div>
		</div>
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
        var controllerNameWithAction = "OrdersController@show".split('@');
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