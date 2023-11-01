 <header class='main-header'>
  <div class='upper-area'>
    <div class='wrapper g'>
                  <ul class='gi log-area'>
						@if(Session::get('uid'))
						<li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
						<a href="/order/orders" >
						  <span class='text'>我的OPPO</span>
						  <span class='icon icon-messages'></span>
						  <span class='n-messages'>()</span>
						</a>
					  </li>

					  <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
						<a class='logout' href="/outq" >退出</a>
					  </li>
					 
					 @else
						<li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
						  <a href="/login" >
							登录
						  </a>
						</li>
					  <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
						<a href="/zhuce" >
						  注册
						</a>
					 @endif
					  </li>
  <li class='gi' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area' id='old-version-link'>
  </li>
</ul>      <ul class='gi menu-lang'>
  <li class='gi gi-language' data-desktop='.menu-lang' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a class='lang-link js-toggle-close' href='#'>Global</a>
    <div class='languages js-content' data-desktop='.gi-language' data-mobile='.languages-panel'>
      <div class='wrapper'>
        <h3 class='h-epsilon'>Select your country or region</h3>
        <ul>
          <li>
          <a  href="" >Algérie</a>
          </li>
          <li>
          <a  href="7" >Australia</a>
          </li>
          <li>
          <a  href="" >Bangladesh</a>
          </li>
          <li>
          <a  href="" >Egypt</a>
          </li>
          <li>
          <a href="" >Global</a>
          </li>
          <li>
          <a  href="" >India</a>
          </li>
          <li>
          <a  href="" >Indonesia</a>
          </li>
          <li>
          <a  href="" >Kenya</a>
          </li>
          <li>
          <a  href="" >Malaysia</a>
          </li>
          <li>
          <a  href="" >Maroc</a>
          </li>
          <li>
          <a  href="" >Pakistan</a>
          </li>
          <li>
          <a  href="" >Philippines</a>
          </li>
          <li>
          <a  href="" >Singapore</a>
          </li>
          <li>
          <a  href="" >Sri Lanka</a>
          </li>
          <li>
          <a  href="" >台灣</a>
          </li>
          <li>
          <a  href="" >UAE</a>
          </li>
          <li>
          <a  href="" >Việt Nam</a>
          </li>
          <li>
          <a  href="" >ประเทศไทย</a>
          </li>
          <li>
          <a  href="" >Myanmar</a>
          </li>
          <li>
          <a  class='current'  href="index.htm" >中国</a>
          </li>
        </ul>
      </div>
    </div>
  </li>
</ul>    </div>
  </div>
  <div class='bottom-area'>
    <div class='wrapper'>
      <a class='js-open-menu' href='#'>
        <i class='js-open-menu-bar'></i>
      </a>
      <div class='logo logo-extend'>
        <a href="index.htm" >
          <img src="{{asset('Home/oppozhu/image/logo.png')}}"  alt="">
        </a>
      </div>
      <a class='js-open-user' href='#'>
        <img src="{{asset('Home/oppozhu/image/icon-menu-user.png')}}"  alt="">
      </a>
      <div class='main-menu'>
        <div class='search'></div>
        <nav>
  <div class='nav-ul-view'>
  <ul class='menu g'>
    <li class='gi
        is-active
        '>
      <a class='m-item' href="/" >
        <span>首页</span>
      </a>
    </li>
    <li class='gi
        '>
      <a class='m-item' href="/products" >
        <span>产品</span>
      </a>
    </li>
                                <li class='gi'>
      <a class='m-item' id='storeLink' href="/shop/index" >
        <span>商城</span>
              </a>
          </li>
    <li class='gi
        '>
      <a class='m-item' href="/shops" >
        <span>体验店</span>
      </a>
    </li>
    <li class='gi
        '>
      <a class='m-item' href="/service" >
        <span>服务</span>
              </a>
    </li>
          <li class='gi'>
      <a class='m-item' href="/coloros/index"  target="_blank">
        ColorOS
      </a>
    </li>
    <li class='gi'>
      <a class='m-item' href=""  target="_blank">
        社区
      </a>
    </li>
  </ul>
  </div>
</nav>      </div>
      <div class='user-menu'>
<div class='relative'>
  <ul>
    <li class='user-menu-'>
      <a href="" >我的订单</a>
    </li>
    <li class='user-menu-'>
      <a href="" >配送地址</a>
    </li>
    <li class='user-menu-'>
      <a href="" >优惠券</a>
    </li>
    <li class='user-menu- user-menu-message'>
      <a href="" >账户信息</a>
    </li>
    <li class='user-menu- user-menu-cart'>
      <a href="" >购物车</a>
    </li>
    <li class='user-menu- user-menu-to'>
      <a href="" >
        登录
      </a>
    </li>
    <li class='user-menu-logout'>
      <a href="" >退出</a>
    </li>
  </ul>
</div>
</div>    </div>
  </div>
  <div class='nav-sub-menu'>
  <div class='relative'></div>
</div>
<div class='nav-search-mask'></div>
<div class='nav-search'>
  <div class='nav-search-container'>
    <div class='nav-search-content'>
      <div class='nav-search-input'>
        <form action="http://www.opposhop.cn/products" class='main-form'>
          <input placeholder='搜索OPPO商品' type='text' name="q">
          <button class='button' type='submit'>搜索</button>
          <a href='#' class='nav-search-close'>取消</a>
        </form>
      </div>
    </div>
  </div>
</div>  <div class="languages-panel"></div>
</header>