<script src="{{asset('media/js/jquery-1.10.1.min.js')}}"></script>
<script>
	$(function(){ 
	
		$.getJSON('/home/flink',function(data){

			$('#aa').html(data[0]['fname']);
			$('#aa').attr('href',data[0]['furl']);
			$('#bb').attr('href',data[1]['furl']);
			$('#cc').attr('href',data[2]['furl']);
			$('#dd').attr('href',data[3]['furl']);
			$('#ee').html(data[4]['fname']);
			$('#ee').attr('href',data[4]['furl']);
		});
	});
</script>


<footer class='main-footer'>
    <div class='footer-sitemap'>
    <nav class='wrapper'>
  <div class="g">
    <div class="gi lap-three-quarters">
      <ul class='g'>
    	                <li class='gi lap-one-quarter'>
          <a class='m-item' href="products.htm"  target="_blank">推荐机型</a>
          <span class="toggle js-toggle-sitemap"></span>
          <ul>
                        <li>
              <a href="/shop/393" target='_blank'>R9s</a>
            </li>
                        <li>
              <a href="/shop/360"  target='_blank'>R9</a>
            </li>
                        <li>
              <a href="/shop/391"  target='_blank'>R9 plus</a>
            </li>
                        <li>
              <a href="/shop/389"  target='_blank'>A59</a>
            </li>
                      </ul>
        </li>
                <li class='gi lap-one-quarter'>
          <a class='m-item' href=""  target="_blank">在线购买</a>
          <span class="toggle js-toggle-sitemap"></span>
          <ul>
                        <li>
              <a href="/shop"  target='_blank'>手机</a>
                        <li>
              <a href=""  target='_blank'>配件</a>
            </li>
                        <li>
              <a href=" "  target='_blank'>购物指南</a>
            </li>
                        <li>
              <a href=" "  target='_blank'>官方授权网店</a>
            </li>
                      </ul>
        </li>
                <li class='gi lap-one-quarter'>
          <a class='m-item' href="/service"  target="_blank">服务</a>
          <span class="toggle js-toggle-sitemap"></span>
          <ul>
                        <li>
              <a href="service/map.htm"  target='_blank'>服务网点查询</a>
            </li>
                        <li>
              <a href="service/part.htm"  target='_blank'>零配件价格查询</a>
            </li>
                        <li>
              <a id="ee" href=""  target='_blank'></a>
            </li>
                        <li>
              <a href="about.htm"  target='_blank'>建议反馈</a>
            </li>
                      </ul>
        </li>
                <li class='gi lap-one-quarter'>
          <a class='m-item' href="blogs.htm"  target="_blank">关于我们</a>
          <span class="toggle js-toggle-sitemap"></span>
          <ul>
                        <li>
              <a href="/about1"  target='_blank'>关于OPPO</a>
            </li>
                        <li>
              <a href="blogs-group_name=资讯.htm"  target='_blank'>OPPO动态</a>
            </li>
                        <li>
              <a id="aa"href=""  target='_blank'></a>
            </li>
                        <li>
              <a href="service/help/605-name=sourcing.htm"  target='_blank'>采购相关</a>
            </li>
                      </ul>
        </li>
            	      </ul>
    </div>
    <div class="gi lap-one-quarter align-right">
      <div class="one-half lap-one-whole contact-online">
        <a id="dd"href=""  target="_blank"><img src="{{asset('Home/oppozhu/image/icon-online.png')}}"  alt=""></a>
      </div>
      <div class="one-half lap-one-whole contact-tel">
        <p class="contact-number">4001-666-888</p>
        <p class="contact-tips">（24小时全国服务热线）</p>
      </div>
    </div>
  </div>
</nav>  </div>

  <div class="g wrapper">
    <div class="footer-linear"></div>
  </div>
    <div class='footer-info'>
    <div class='wrapper'>
            <div class="footer-focus">
        <span class='text'>关注我们：</span>
        <a id="cc" href=""  target='_blank' class="footer-focus-weibo">
          <span class='icon icon-weibo'></span>
        </a>
        <a href='#' class='footer-focus-icon footer-focus-wechat relative'>
          <span class='icon icon-wechat'></span>
          <img src="{{asset('Home/oppozhu/image/qrcode-wx.jpg')}}"  class="wx-float" alt="">
        </a>
        <a href='#' class='footer-focus-icon footer-focus-fuwuchuang relative'>
          <span class='icon icon-fuwuchuang'></span>
          <img src="{{asset('Home/oppozhu/image/qrcode-fwc.jpg')}}"  class="wx-float" alt="">
        </a>
      </div>
            <p class='copy'>© 2005 - 2016 东莞市永盛通信科技有限公司 版权所有 粤ICP备08130115号-1 联系方式：4001-666-888</p>
      <a id="bb" href="" target="_blank" title="企业名称：广东欧珀电子工业有限公司
法定代表人：金乐亲
标识状态：已激活 粤工商备E191512001248
电子标识有效期：2015-12-14～2020-12-16" class="footer-identification"></a>
    </div>
  </div>
</footer>