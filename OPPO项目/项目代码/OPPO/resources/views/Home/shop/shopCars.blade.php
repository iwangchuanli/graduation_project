<!DOCTYPE html>
<!-- saved from url=(0027)http://www.opposhop.cn/cart -->
<html class=" js no-touch backgroundsize cssanimations csstransforms svg inlinesvg"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE">
    <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
    <title>购物车-OPPO智能手机官网 </title>
    <meta name="keywords" content="购物车,OPPO智能手机官网 ">
    <meta name="description" content="OPPO手机购物车为您提供OPPO手机购物车流程,想知道更多的购物车信息，就在OPPO智能手机官网。 ">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('Home/shop/css/styles.css')}}">

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
     <main class="main-content slab-light">
      <div class="wrapper">
        <ul class="breadcrumb">
  <li>
    <a href="http://www.oppo.com/cn/">
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  购物车
              </li>
      </ul>
        <div class="brick-bottom">
          <ul class="steps"><li class="one active step-completed">
    <div class="step-content">
            <h5 class="step-heading">购物车</h5>
      <div class="step-gradient"></div>
    </div>
  </li><li class="two  ">
    <div class="step-content palm-right-text">
            <h5 class="step-heading">填写订单</h5>
      <div class="step-gradient"></div>
    </div>
  </li><li class="three ">
    <div class="step-content">
            <h5 class="step-heading">支付</h5>
      <div class="step-gradient"></div>
    </div>
  </li></ul>

          <div class="row">
            <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
              <ul class="list-unstyled">
               
              </ul>
            </div>
            </div>
          </div>

            <div class="gi one-whole slab-white-border cart-reversion">
              <ul class="purchase-list-header">
                <li class="first">
                  <label class="check-box-label check-box-all" for="checkAll">
                    <span class="icon icon-checkbox"></span>
                    <span class="space-ml-10">全选</span>
                  </label>
                </li>
                <li class="second">产品</li>
                <li class="third">数量</li>
                <li class="four">单价</li>
                <li class="five">操作</li>
              </ul>
			   @foreach($cart as $carts)
              <div class="brick-shadow purchase-list" id="del">
                <div class="cart-product cart-product-l cart-product-10da7c9a79119688c135223cd07efc0c  ">
            <div class="cart-product-choice">
                                <label class="check-box-label check-box-item">
                    <span class="icon icon-checkbox" price="{{$carts['gprice']}}" num="{{$carts['num']}}"></span>
                </label>
                                <a class="cart-product-image" href="http://www.opposhop.cn/products/393" target="_blank">
                    <img src="{{$carts['gimg']}}">
                </a>
            </div>
            <div class="cart-product-info">
                <div class="cart-product-description">
                    <h3 class="heading"><a href="" target="_blank">{{$carts['gname']}}</a></h3>

                    <p>{{$carts['gcolor']}}|全网通|64G</p>
                </div>
                <div class="cart-counter-box">
                    <div class="counter-box">
                        <a class="btn minus" data-id="{{$carts['cid']}}">-</a>
                        <input class="number" readonly="" type="text" value="{{$carts['num']}}" data-quantity="1" data-price="{{$carts['gprice']}}">
                        <a class="btn plus" data-id="{{$carts['cid']}}">+</a>
                    </div>
                </div>
                <div class="cart-product-price">
                                            <span class="normals">{{$carts['gprice']*$carts['num']}}</span>
                                    </div>
                <div class="cart-product-delete cart-product-delete-word dalete-carts" data-id="{{$carts['cid']}}">删除</div>
                <span class="cart-product-delete cart-product-delete-icon icon icon-close-circle" data-id="{{$carts['cid']}}"></span>
            </div>
        </div>

                     </div>
           
                @endforeach
			 
				 
                                <div class="cart-fee">
        <ul>
          <li>
            <span class="cart-fee-title">商品数量：</span>
            <span class="cart-fee-data total-num"></span>
          </li>
          <li>
			<span class="cart-fee-title">小计:￥</span>
            <span class="cart-fee-data total-price"></span>
			 
          </li>
          <li class="cart-alipay-hb">
            <span class="cart-fee-title"><i class="icon-hb"></i>订单满600可使用花呗分期3/6/12期</span>
          </li>
        </ul>
    </div>

			
              <div class="form-actions brick-shadow">
                <div class="form-actions-left">
                  <a class="link-primary" href="/" target="_blank">继续购买&gt;&gt;</a>
                </div>
                <div class="form-actions-right">
                                    <a href="fillOrder?cid={{$carts['cid']}}" class="button cart-button" >结算</a>
                                  </div>
              </div>
            </div>
			
       
        </div>
        <div class="cart-btn-check">
          <a class="button cart-button oppo-tj" id="shipping_btn_m" href="javascript:;" data-tj="store|btn|check|sticky">结算</a>
        </div>
              </div>
    </main>
    <div id="dialog-confirm" class="hidden">
			<div class="mask-common"></div>
			<div class="dialog-common dialog-box-common">
				<div class="dialog-container">
					<a class="dialog-close-common">×</a>
					<div class="dialog-content-common">
												<div class="field">
							<h4 class="dialog-title-common">您确定要删除该商品吗？</h4>
						</div>
																		<div class="dialog-common-content">
												</div>
												<div class="field dialog-btn">
							<div class="g g-wrapper-s">
																<div class="gi lap-one-half">
									<a class="button button-one" id="yes">确定</a>
								</div>
																								<div class="gi lap-one-half">
									<a class="button-light button-two" id="no">取消</a>
								</div>
															</div>
						</div>
																	</div>
				</div>
			</div>
		</div>
	    <div id="dialog-error-msg" class="hidden">
			<div class="mask-common"></div>
			<div class="dialog-common dialog-box-common">
				<div class="dialog-container">
					<a class="dialog-close-common">×</a>
					<div class="dialog-content-common">
												<div class="field">
							<h4 class="dialog-title-common">.</h4>
						</div>
																		<div class="dialog-common-content">
												</div>
																		<div class="field dialog-btn">
							<div class="g g-wrapper-s">
								<div class="gi lap-one-whole">
									<a class="button button-one-whole">确定</a>
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
        var controllerNameWithAction = "CartsController@index".split('@');
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

<script>
	$(function(){
		$('.dalete-carts').on('click',function(){
			//显示隐藏框
			cid = $(this).attr('data-id');

			$('.hidden').css({display:'block'});
		});
		
		//确定按钮
		$('#yes').on('click',function(){
			//ajax数据请求传输
			$.ajax({
				url:'/shopcart/delete',
				data:'cid='+cid,
				type:'get',
				dataType:'text',
				success:function(data){
					if(data == 1){
						$('#del').remove();
						window.location.reload();
					}else{
						alert('删除失败,稍后重试！');
					}
				}
			});
		});
	});
	
	$(function(){
		var total = 0;
		$('.icon-checkbox').click(function(){
			total += 100;
			$('.total-price').html(total);
		}).click(function(){
			total -= 100;
			$('.total-price').html(total);
		});
	
	});
	
	$(function(){
		$('.plus').click(function(){
			//点击之后获取获取id
			var cid = $(this).attr('data-id');
			var url = '/shopcar/addNum';
			$.ajax({
				url:url,
				data:'cid='+cid,
				dataType:'json',
				type:'GET',
				success:function(data){
					$('.number').val(data.num);
					$('.normals').html(data.gprice*data.num);
				}
			});
		});
		
			$('.minus').click(function(){
			//点击之后获取获取id
			var cid = $(this).attr('data-id');
			var url = '/shopcar/jianNum';
			$.ajax({
				url:url,
				data:'cid='+cid,
				dataType:'json',
				type:'GET',
				success:function(data){
					$('.number').val(data.num);
					$('.normals').html(data.gprice*data.num);
				}
			});
		});
	});
	
	$(function(){
	
	});
	
	$(function(){
		 //给选择框加一个点击事件
		var allprice=0;//总价格  
		var allnum=0;//总数量 
		 $('.icon-checkbox').click(function(){
			 $(this).toggleClass('oncheck');
			
			 if($(this).hasClass('oncheck')){
				var price = $(this).attr('price');
				var num = $(this).attr('num');
				allprice+=num*price;
				allnum+=num*1;
			 }else{
				var price = $(this).attr('price');
				var num = $(this).attr('num');
				allprice-=num*price;
				allnum-=num*1;
			 }
			 $('.total-price').html(allprice);
			 $('.total-num').html(allnum);
		 });
	});
</script>



</body></html>