<html>
 <head> 
  <link rel="stylesheet" href="{{asset('css/j_auction_2.4.3_entry.css')}}" charset="utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="renderer" content="webkit" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=GBK" /> 
  <title>淘宝网 - 淘!我喜欢</title> 
  <meta name="description" content="中国最大、最安全的网上交易社区，尽享淘宝乐趣！" /> 
  <meta name="keywords" content="淘宝,掏宝,网上购物,购物,论坛,联盟,买,卖,1元,一元,电脑,视听,MP3,MD,CD,VCD,DV,耗材,化妆,相机,数码,配件,珠宝,手表,艺术,宠物,求购,出租,出售,二手,汽车,音响,保健,讨价换价,一口价,拍卖,auction,sell,buy,price,bid" /> 
  <!-- vmcommon_s_2_assets  begin --> 
  <link rel="stylesheet" href="{{asset('css/j_auction_1.0.2_header_min.css')}}" /> 
  <!-- vmcommon_s_2_assets end --> 
  <meta name="data-spm" content="686" /> 
  <link rel="stylesheet" href="{{asset('css/j_2.0.23_v2_index-min.css')}}" /> 
  <link href="{{asset('css/j_auction_tmsg_3.4.6_index-min.css')}}" rel="stylesheet" />
  <script type="text/javascript" src="{{asset('js/jquery.1.11.js')}}"></script>
 </head> 
 <body class="W950 CurHome new-seller " data-spm="1000923"> 
  <link href="{{asset('css/j_auction_0.4.6_global_index.css')}}" rel="stylesheet" /> 
 
    <link rel="stylesheet" href="{{asset('css/global-min.2.6.13.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/index-min.css')}}">
    @include('head')
  <style>
#seller-announce {
   display:none; text-align:center;width:100%;height: 30px;line-height: 30px;background: #fffdc6;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;font-size:12px;
}
.announce-b {
    font-family:'sellerCenter';color:#0085d7;
}
</style> 
  <div data-spm="1998917851" id="seller-announce"> 
   <span style="color:#666;"> <b class="announce-b"></b>&nbsp;&nbsp;通知！新《食安法》要求经营食品卖家需办证传证（初级农产品除外），不合规商品1月开始将陆续强制下架！ &nbsp;&nbsp;&nbsp; <a href="//shangjiafuwu.bbs.taobao.com/detail.html?postId=1921779" target="_blank" style="color:#0085d7;">详情点击</a> </span> 
  </div> 
  <div id="page"> 
   <div id="header"> 
    <h1 id="logo"> <a href="//www.taobao.com/" target="_top"><img alt="淘宝网 Taobao.com - 阿里巴巴旗下网站" src="//assets.alicdn.com/tbsp/img/header/logo.png" width="140" height="35" /></a> </h1> 
   </div> 
   <div class="cateNavWrap"> 
    <ul class="cateNav clearfix" role="navigation"> 
     <li class="J_CateNavItem current" data-value="b" tabindex="0">一口价</li> 
     <li class="prompt"> <span>只有消保卖家才能发布拍卖宝贝<a target="_blank" href="#">查看详情</a></span> </li> 
    </ul>
   </div> 
   <div id="main"> 
    <div id="J_CategorySearch" class="category-search" data-spm="1000797"> 
     <div class="searchbox"> 
      <span calss="caption">类目搜索：</span> 
      <label id="J_SearchHolder" class="search-holder" for="J_SearchKeyWord">请输入宝贝名/货号，数码电器输入型号，书籍类输入ISBN号</label>
      <input name="q" id="J_SearchKeyWord" class="search-keyword" aria-label="类目搜索" type="text" /> 
      <button type="button" id="J_SearchButton" class="search-submit btn btn-primary" aria-label="快速找到类目">
       <div class="btn-txt">
        快速找到类目
       </div></button> 
     </div> 
    </div> 
    <div class="lastused-category  "> 
     <label for="J_CateLastUsed">您最近使用的类目：</label> 
     <div role="button" class="used-inline-block used-button used-select used-menu-button" aria-labelledby="ks-button-labelby306" aria-expanded="false" tabindex="0" aria-pressed="false">
      <div class="used-contentbox  used-button-outer-box">
       <div id="ks-button-labelby306" class="used-button-inner-box" aria-haspopup="true">
        <div class="used-inline-block used-menu-button-caption" style="width: 391px;">
         请选择
        </div>
        <div class="used-inline-block used-menu-button-dropdown">
         &nbsp;
        </div>
       </div>
      </div>
     </div> 
    </div> 
    <!--类目选择器 start--> 
    <div class="cate-container" data-spm="1000796"> 
     <div class="cate-main"> 
      <div id="cate-cascading"> 
       <a href="#" class="cc-prev cc-nav" title="上一级" id="J_LinkPrev" style="visibility: hidden;"><span>上一级</span></a> 
       <div class="cc-listwrap"> 
        <ol id="J_OlCascadingList" class="cc-list"> 
        <li class="cc-list-item" tabindex="-1">
          <div class="cc-cbox-filter">
           <label for="cc-cbox-filter319">输入名称/拼音首字母<i style="display:none;">当前第1级类目，回车选择类目/属性</i></label>
           <input role="textbox" autocomplete="off" aria-label="当前第1级类目，回车选择类目/属性" id="cc-cbox-filter319" style="width: 176px;" />
          </div>
          <div role="tree" class="cc-tree" aria-activedescendant="cc-tree-item334">
           <ul role="listbox" tabindex="-1" hidefocus="-1" unselectable="on" class="cc-tree-cont pc-tree">
              @foreach($pclass as $pc)
              <li role="treeitem" id="{{$pc['gcid']}}" class="cc-tree-item cc-hasChild-item">{{$pc['gcname']}}</li>
			  @endforeach
           </ul>
          </div>
		</li>
         <li class="cc-list-item" tabindex="-1">
          <div class="cc-cbox-filter">
           <label for="cc-cbox-filter620">输入名称/拼音首字母<i style="display:none;">当前第2级类目，回车选择类目/属性</i></label>
           <input role="textbox" autocomplete="off" aria-label="当前第2级类目，回车选择类目/属性,Shift 键加 Table 键回到上一级" id="cc-cbox-filter620" style="width: 176px;" />
          </div>
          <div role="combobox" class="cc-cbox" aria-activedescendant="cc-cbox-item685">
           <ul role="listbox" tabindex="-1" hidefocus="-1" unselectable="on" class="cc-cbox-cont sc-tree">
              
           </ul>
          </div>
		</li>
         <li class="cc-list-item" tabindex="-1">
          <div class="cc-cbox-filter">
           <label for="cc-cbox-filter734">输入名称/拼音首字母<i style="display:none;">当前第3级类目，回车选择类目/属性</i></label>
           <input role="textbox" autocomplete="off" aria-label="当前第3级类目，回车选择类目/属性,Shift 键加 Table 键回到上一级" id="cc-cbox-filter734" style="width: 176px;" />
          </div>
          <div role="combobox" class="cc-cbox" aria-activedescendant="cc-cbox-item738"> 
           <ul role="listbox" tabindex="-1" hidefocus="-1" unselectable="on" class="cc-cbox-cont brand-tree">
           </ul> 
          </div>
		</li> 
        </ol> 
       </div>
	   
		<!--发布商品级联start-->
	   <script>
		$(function(){
			var arr = <?php echo $ctree?>;
			var l1 = 0,
				l2 = 0;
			var cname1, cname2, cname3;
			var cid1, cid2, cid3;
			$('.pc-tree li').click(function(){
				$(this).addClass('cc-selected').siblings().removeClass('cc-selected');
				$('.cc-listwrap ul:eq(2)').html("");
				fillDate($(this).index());
				l1 = $(this).index();
				cname1 = $(this).text();
				cid1 = $(this).attr('id');
				$('fieldset input[name="cid"]').val(cid1);
				$('fieldset input[name="cname"]').val(cname1);
				$('.category-path li').html(cname1);
			});
			$(document).on("click",'.sc-tree li',function(){
				$(this).addClass('cc-selected').siblings().removeClass('cc-selected');
				fillDate(l1,$(this).index());
				l2=$(this).index();	
				cname2 = $(this).text();
				cid2 = $(this).attr('id');
				$('fieldset input[name="cid"]').val(cid1+','+cid2);
				$('fieldset input[name="cname"]').val(cname1+','+cname2);
				$('.category-path li').html(cname1+"&nbsp;&gt;&nbsp;"+cname2);
			});
			$(document).on("click",'.brand-tree li',function(){
				$(this).addClass('cc-selected').siblings().removeClass('cc-selected');
				cname3 = $(this).text();
				cid3 = $(this).attr('id');
				$('fieldset input[name="cid"]').val(cid1+','+cid2+','+cid3);
				$('fieldset input[name="cname"]').val(cname1+','+cname2+','+cname3);
				$('.category-path li').html(cname1+"&nbsp;&gt;&nbsp;"+cname2+"&nbsp;&gt;&nbsp;"+cname3);
			});
			function fillDate(l1,l2){
				var temp_html="";
				if(typeof(arr[l1]['sc']) !='undefined' && arguments.length==1){
					$.each(arr[l1]['sc'],function(n,pro){
						temp_html += '<li role="option" id="'+pro.gcid+'" class="cc-cbox-item cc-hasChild-item">'+pro.gcname+'</li>';
					});
				}else if(typeof(arr[l1]['sc'][l2]['brand']) != 'undefined' && arguments.length==2){
					$.each(arr[l1]['sc'][l2]['brand'],function(n,pro){
						temp_html += '<li role="option" id="'+pro.brid+'" class="cc-cbox-item">'+pro.brname+'</li>'
					});
				}
				$('.cc-listwrap ul:eq('+arguments.length+')').html(temp_html);
			}
		});
	   </script>
	   <!--发布商品级联end-->
       <a href="#" class="cc-next cc-nav" title="下一级" id="J_LinkNext" style="visibility: hidden;"><span>下一级</span></a> 
      </div> 
      <div id="J_SearchResult" class="search-result" style="display:none;"> 
       <div class="result-note"> 
        <strong>匹配到<em class="J_RecordCount">0</em>个类目</strong>
        <span class="note">(双击直接发布，括号中为该类目下相关宝贝的数量)</span> 
        <a class="J_TriggerExit trigger-exit" href="#exit"><i></i>关闭，返回类目</a> 
       </div> 
       <div class="result-list"> 
        <ol></ol> 
        <a class="J_FlexTrigger trigger-expand" href="#expand">展开更多<i></i></a> 
        <a class="J_FlexTrigger trigger-close" href="#close">收起更多<i></i></a> 
       </div> 
      </div> 
      <div class="cc-loading"> 
       <div class="cc-loading-content"> 
        <div class="cc-loading-icon">
         <img src="//img.alicdn.com/tps/i3/T1jBamXj4fXXXXXXXX-16-16.gif" />
        </div> 
        <span class="cc-loading-text">加载中，请稍候...</span> 
       </div> 
      </div> 
     </div> 
     <div class="cate-aside"> 
      <h3 class="caption" style="">该类目下宝贝示例：</h3> 
      <div class="guid-wrap" id="J_GuidWrap">
       <div class="preview loaded">
        <div class="wrap">
         <img src="https://img.alicdn.com/imgextra/i4/TB1.fm0NXXXXXXTapXXXXXXXXXX_!!0-item_pic.jpg_70x70.jpg" />
        </div>
       </div>
       <div class="preview loaded">
        <div class="wrap">
         <img src="https://img.alicdn.com/imgextra/i3/2756418150/TB2UeA5cHaI.eBjy1XdXXcoqXXa_!!2756418150.jpg_70x70.jpg" />
        </div>
       </div>
       <div class="preview loaded">
        <div class="wrap">
         <img src="https://img.alicdn.com/imgextra/i1/TB197AyOXXXXXajaXXXXXXXXXXX_!!0-item_pic.jpg_70x70.jpg" />
        </div>
       </div>
       <div class="preview loaded">
        <div class="wrap">
         <img src="https://img.alicdn.com/imgextra/i4/TB1urHrOXXXXXX0XpXXXXXXXXXX_!!0-item_pic.jpg_70x70.jpg" />
        </div>
       </div>
       <div class="preview loaded">
        <div class="wrap">
         <img src="https://img.alicdn.com/imgextra/i4/TB1SJEZOXXXXXbGXVXXXXXXXXXX_!!0-item_pic.jpg_70x70.jpg" />
        </div>
       </div>
       <div class="preview loaded">
        <div class="wrap">
         <img src="https://img.alicdn.com/imgextra/i1/376607588/TB2Z5hebpLzQeBjSZJiXXXesFXa_!!376607588.jpg_70x70.jpg" />
        </div>
       </div>
      </div> 
     </div> 
    </div> 
    <!--类目选择器 end--> 
    <div class="cate-path"> 
     <dl> 
      <div class="clearfix"> 
       <dt>
        您当前选择的是：
       </dt> 
       <dd> 
        <ol class="category-path" id="J_OlCatePath">
         <li></li>
        </ol> 
       </dd> 
      </div> 
     </dl> 
     <span id="J_SpanPointer" class="arrow up"></span> 
    </div> 
    <form id="J_FrmCateFilter" method="post" action="/upload" name="mainform" data-spm="1000796">
	{!! csrf_field() !!}
     <fieldset> 
      <!--自定义类目信息--> 
		<input type="hidden" name="cname" />
		<input type="hidden" name="cid" />
      <div class="cateBottom"> 
       <span class="cateBtn catePublish"><button type="submit" hidefocus="true" id="J_CatePubBtn">我已阅读以下规则，现在发布宝贝</button></span> 
       <span id="J_PubLinkWrap" class=""> <a href="//upload.taobao.com/auction/spu/search_spu.htm?auction_type=b&amp;auction_id=null&amp;itemNumId=542183348242&amp;wirelessOption=null&amp;wirelessmpChoosed=null&amp;isEdit=false" id="J_CatePubLink">利用宝贝模版发布</a> <span id="J_OperateBook" class="hidden"> <a href="//upload.taobao.com/auction/spu/search_spu.htm?auction_type=b&amp;auction_id=null&amp;itemNumId=542183348242&amp;isEdit=false">搜索产品</a> </span> </span> 
      </div> 
     </fieldset> 
    </form> 
    <div class="agreement"> 
     <div class="notice">
      <h5>发布须知：</h5>淘宝禁止发布侵犯他人知识产权的商品，请确认商品符合知识产权保护的规定
     </div> 
     <h5 align="center">淘宝规则</h5> 
    </div> 
    <div style="margin: 0 0 5px;"> 
     <img width="18" height="18" style="vertical-align: middle;" alt="反馈" src="//img.alicdn.com/tps/i1/T1TPhsXoRlXXXXXXXX-18-18.png" /> 我对类目选择有意见或建议， 
     <a target="_blank" href="//ur.taobao.com/survey/view.htm?id=999">跟淘宝说两句</a> 
    </div> 
   </div> 
   <!-- from vmcommon --> 
   <div id="footer"> 
    <div class="g_foot"> 
     <div class="g_foot-ali"> 
      <a href="//news.alibaba.com/specials/aboutalibaba/aligroup/index.html">阿里巴巴集团</a> 
      <b>|</b> 
      <a href="//www.alipay.com">支付宝</a> 
     </div> 
     <div class="g_foot-nav"> 
      <a href="//www.taobao.com/about/">关于淘宝</a> 
      <span>&copy; 2015 Taobao.com 版权所有</span> 
     </div> 
     <span class="g_foot-toy"></span> 
     <span class="g_foot-line"></span> 
    </div> 
    <style>
.g_foot{
  width: 960px;
  margin: 0 auto;
  font: 12px/1.5 tahoma,arial,宋体b8b\4f53;
  padding: 7px 0 9px;
  color: #b0b0b0;
  text-align: left !important;
  position: relative;
  clear:both;
}
.g_foot a{
  margin: 0 2px;
  color: #3e3e3e;
  text-decoration:none;
}
.g_foot a:hover{
  color: #F60;
  text-decoration: underline;

}
.g_foot-ali{
  margin-right: 100px;
  padding-left: 0;
  border-bottom: 1px solid #D3D3D3;
  padding-bottom: 8px;
  height: 18px;
}
.g_foot-nohover{
  cursor: default;
}
.g_foot-nohover:hover{
  color:#3e3e3e !important;
  text-decoration:none !important;
}
.g_foot-ali a,.g_foot-ali b{
  float: left;

}
.g_foot-ali b {
  margin: 0 2px;
  color:#d3d3d3;
  font-weight: normal;
  *margin-top:-1px;
  margin-top:-1px \0/;
}
.g_foot-nav{
  margin-top: 8px;
  line-height: 20px;
}
.g_foot-nav span{
  margin-left: 50px;
}
.g_foot-toy{
  position: absolute;
  background: url(//img.alicdn.com/tps/i1/T1MMPaXkNjXXaXezbh-48-70.png) no-repeat;
  _background: url(//img.alicdn.com/tps/i1/T1XgzaXX0kXXaXezbh-48-70.png) no-repeat;
  width: 69px;
  height: 100px;
  display: block;
  right: 0px;
  top:0px;
}
/* IE9 only */
:root .g_foot-toy {
    right:-20px\9; 
 } 
.g_foot-line{
  display: none;
  position: absolute;
  background: url(//img.alicdn.com/tps/i1/T1I_56Xl0wXXXXXXXX-104-1.png) no-repeat;
  width: 104px;
  height: 1px;
  right: 45px;
  top:33px;
}

.footer-more {
  cursor: pointer;
  z-index: 1;
  position: relative;
  padding-top: 1px;
  width: 82px;
  float: left;
  *top:-1px;
  top:-2px \0/;

}
.footer-more-trigger {
  position: absolute;

  padding: 6px 11px 4px 14px;
  width: 37px;
  line-height: 1.3;
  border: 1px solid #fff;
  left:-12px;
  top:-5px;
}

.footer-more-trigger .arrow{
    position: absolute;
    display: inline-block;
    font-size: 0;
    line-height: 0;
    width: 0;
    height: 0;
    border: dashed 4px;
}
.footer-more-trigger .arrow-d {
  border-color: #666 transparent transparent transparent;
  border-top-style: solid;
  right: 12px;
  top: 11px;
}
.footer-more-panel {
  text-align: left;
  position: absolute;
  right: 26px;
  bottom: -90px;
  padding: 7px 3px 2px 2px;
  border: 1px solid #C5C5C5;
  width: 57px;
  background: 
  white;
  line-height: 1.9;
  display: none;
}
.footer-more-panel a {
  float: none;
  margin-right: 3px;
}
.footer-more-hover .footer-more-trigger,.footer-more:hover .footer-more-trigger {
  border-color: #c5c5c5;
  background: #fff;
  border-bottom: 0;
}
.footer-more-hover .footer-more-panel,.footer-more:hover .footer-more-panel  {
  display: block;
}

.footer-more-hover .footer-more-trigger .arrow-d,.footer-more:hover .footer-more-trigger .arrow-d {
  -moz-transform: rotate(180deg);
  -moz-transform-origin: 50% 30%;
  -o-transform: rotate(180deg);
  -o-transform-origin: 50% 30%;
  -webkit-transform: rotate(180deg);
  -webkit-transform-origin: 50% 30%;
  transform: rotate(180deg);
  transform-origin: 50% 30%;
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation = 2);
  *top: 8px;
  top:8px \0/;
}
</style> 
    <div id="server-num">
     sell011250052159.eu13
    </div> 
   </div> 
   <!-- end vmcommon --> 
  </div> 
  <div id="J_UmppUserContainer" style="height:1px;width:1px;overflow:hidden;position:absolute;bottom:1px">
   <embed src="https://g.alicdn.com/tbc/umpp/1.4.35/trinity.swf" width="1" height="1" id="ks-flash-318" name="umpp-trinity-name" type="application/x-shockwave-flash" allowscriptaccess="always" flashvars="jsentry=_umpp_trinity_&amp;swfid=UM_drenched%25E5%25A4%258F1479827337269&amp;group=drenched%25E5%25A4%258F" />
  </div>
  <div class=" aw-wrapper double11 small" style="top: 116px; right: 5px; opacity: 1;">
   <div class="aw-window lowreso-dialog small">
    <h3 class="aw-title aw-dragger" style="opacity: 0; padding-top: 0px; display: none; height: 0px;">猜您想问：</h3>
    <ul class="aw-content" style="opacity: 0; height: 0px; display: none;">
     <li class="aw-lineitem"><a class="aw-item" href="#" data-type="knowledge" data-idx="0" data-src="contents">必须缴纳消保保证金的商品类目有哪些？</a></li>
     <li class="aw-lineitem"><a class="aw-item" href="#" data-type="knowledge" data-idx="1" data-src="contents">如何发布宝贝？</a></li>
     <li class="aw-lineitem"><a class="aw-item" href="#" data-type="knowledge" data-idx="2" data-src="contents">发布商品应该如何选择类目？</a></li>
     <li class="aw-lineitem"><a class="aw-item" href="#" data-type="knowledge" data-idx="3" data-src="contents">编辑类目时提示&quot;不能更换到当前类目下&quot;怎么办？</a></li>
     <li class="aw-lineitem"><a class="aw-item last" href="#" data-type="knowledge" data-idx="4" data-src="contents">为什么编辑类目时提示&quot;销量要清零”</a></li>
    </ul>
    <ul class="aw-default-tool" style="width: 50px;">
     <li class="aw-lineitem stress tool-active-notify"><a class="aw-tool-item" href="#"><i class="anywhere-iconfont toolicon ring-icon" style="margin-right: 0px;"></i><span class="toolwording" style="display: none;">万象提醒</span><span class="activeNotifyCount">10</span><span class="actived-corner" data-service="activeNotify"></span></a>
      <div class="aw-hover-tip stress" data-name="tool-active-notify">
       万象提醒
      </div>
      <div class="active-notify-tooltip">
       <div class="active-notify-logo-wrapper">
        <i class="anywhere-iconfont active-notify-logo"></i>
       </div>
       <i class="anywhere-iconfont active-notify-close"></i>
       <div class="active-notify-anchor"></div>
       <div class="active-notify-content">
        <div class="active-notify-content-header"></div>
        <div class="active-notify-content-detail"></div>
        <a href="#" class="active-notify-content-check">查看详情</a>
       </div>
      </div></li>
     <li class="aw-lineitem stress tool-connect " style="display: block;"><a class="aw-tool-item" href="#"><i class="anywhere-iconfont toolicon" style="margin-right: 0px;"></i><span class="toolwording" style="display: none;">召唤客服</span><span class="msgCount"></span><span class="actived-corner" data-service="imDialogService"></span></a>
      <div class="aw-hover-tip stress" data-name="tool-connect" style="right: 42px; display: none; width: 0px;">
       召唤客服
      </div></li>
     <li class="aw-lineitem stress tool-ser-history" style="display:none;"><a class="aw-tool-item" href="#"><i class="anywhere-iconfont toolicon" style="margin-right: 0px;"></i><span class="toolwording" style="display: none;">服务追踪</span><span class="red-point"></span><span class="actived-corner" data-service="serviceHistory"></span></a>
      <div class="aw-hover-tip stress" data-name="tool-ser-history">
       服务追踪
      </div></li>
    </ul>
    <img class="aw-logo double11 aw-dragger" src="//img.alicdn.com/tps/TB1lLshNVXXXXXqXXXXXXXXXXXX-124-139.png" alt="万象LOGO" style="right: 0px; width: 50px; top: -52px;" />
    <div class="aw-anim-lge-logo"></div>
    <div class="aw-anim-small-logo"></div>
    <div class="aw-bubble-wrapper" style="display: none; right: -15px; top: -110px;">
     <div class="aw-bubble-text">
      有问题找我哦~
     </div>
     <img class="aw-bubble-close" src="//img.alicdn.com/tps/TB1OE0BLVXXXXaVXXXXXXXXXXXX-18-18.png" alt="万象叉叉" style="display:none;" />
     <img class="aw-bubble" src="//img.alicdn.com/tps/TB1K9ghNVXXXXa.XpXXXXXXXXXX-97-63.png" alt="万象气泡" />
    </div>
   </div>
  </div>
 </body>
</html>