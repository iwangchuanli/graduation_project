<html class="ks-webkit537 ks-webkit ks-chrome54 ks-chrome">
 <head> 
  <meta charset="utf-8" /> 
  <title>淘宝网 - 淘！我喜欢 </title> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <link rel="stylesheet" href="{{asset('css/j_auction_old-sell-rely_1.0.2.header-min.css')}}" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_0.0.34_error.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_4.0.31_supply_match.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_0.0.34_reset_css_index.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_4.0.31_iconfont_index.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_4.0.31_helper.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_pop_tip.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_4.0.31_props.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_0.0.34_modules_index.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_4.0.31_commit.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_assets_editor.css')}}" rel="stylesheet" /> 
  <link rel="stylesheet" href="{{asset('css/j_aucrion_detail_portal_0.2.8_api.css')}}" /> 
  <link rel="stylesheet" href="{{asset('css/j_auction_magicpen_1.0.0_css_index.css')}}" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_4.0.31_tpl_plug.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_aucrion_4.0.31_dropdown.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_4.0.31_info_help.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_xshll_4.0.31_info_block.css')}}" rel="stylesheet" /> 
  <link charset="utf-8" href="{{asset('css/j_auction_xsell_4.0.31_info_simple_inline.css')}}" />
  <link charset="utf-8" href="{{asset('css/sku.css')}}" />
  <script src="{{asset('js/jquery_sku.js')}}" type="text/javascript"></script>  
  <script src="{{asset('js/sku.js')}}" type="text/javascript"></script>  
    
 </head> 
 <body>
 
    <link rel="stylesheet" href="{{asset('css/global-min.2.6.13.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/index-min.css')}}">
    @include('head')
  <a href="/auction/container/page_switch.htm" target="_self" style="position: absolute; left: -1000px; top: -1000px;">新版发布支持读屏软件，有问题请按Control+Alt+R进行反馈, 您也可以按 新版发布支持读屏软件，有问题请按Control+Alt+R返回老版</a> 
  <!-- from c2c vmcommon --> 
  <!-- end c2c vmcommon --> 
 <div id="page" control_type="root">
   <header class="clearfix">
    <span class="fl">宝贝发布</span>
   </header>
   <div data-spm="1998855314" id="main">
    <div id="catPath" data-gcid="{{$cidarr[1]}}">
     类目：{{$cnamearr[0]}}&gt;&gt;{{$cnamearr[1]}}
    </div>
    <h1>1. 宝贝基本信息</h1>
    <div class="struct rootStruct" control_type="struct" control_classpath="xsell/modules/struct/index" id="itemBasic">
     <table class="showbar">
      <tbody>
       <tr>
        <td class="bar"><em style="display: inline;">*<em></em></em><label for="title" style="display: inline;">宝贝标题</label></td>
        <td>
         <div class="texbox title-box" control_type="title" control_classpath="xsell/modules/textbox/title" control_id="title" > 
          <div class="inputbox"> 
           <input id="title" type="text" aria-required="true" />
          </div>
         </div></td>
       </tr>
       <tr>
        <td class="bar"><em style="display: none;">*<em></em></em><label for="props" style="display: inline;">宝贝属性</label></td>
        <td>
         <div class="block info" style="margin: 0px 0px 3px;">
          错误填写宝贝属性，可能会引起宝贝下架或搜索流量减少，影响您的正常销售，请认真准确填写！
         </div>
         <div class="props clearfix" control_type="props" control_classpath="xsell/modules/props/index" control_id="props" id="props">
          <table class="props-table">
           <tbody>
            <tr>
             <td><em style="display: none;">*<em></em></em><label for="prop_13021751" style="display: inline;">列表价</label></td>
             <td>
              <div class="texbox" control_type="text" control_classpath="xsell/modules/textbox/index" control_id="prop_13021751"> 
               <div class="inputbox"> 
                <input id="listprice" style="width:200" name="listprice" type="text" /> 
               </div>
              </div></td>
            </tr>
			<tr>
             <td><em style="display: none;">*<em></em></em><label for="prop_13021751" style="display: inline;">货号</label></td>
             <td>
              <div class="texbox" control_type="text" control_classpath="xsell/modules/textbox/index" control_id="prop_13021751"> 
               <div class="inputbox"> 
                <input id="ghuohao" style="width:200" name="ghuohao" type="text" /> 
               </div>
              </div></td>
            </tr>
            <tr>
             <td><em style="display: inline;">*<em></em></em><label for="wrap_20000" style="display: inline;">品牌</label></td>
             <td>
              <div class="sub-props" control_type="prop_wrap" control_classpath="xsell/modules/props/sub_props" control_id="wrap_20000"> 
               <div class="clearfix">
                <div class="clearfix fl">
                 <div class="combo-props" control_type="combobox" control_classpath="xsell/modules/props/combo_props" control_id="prop_20000">
                  <div class="combobox disableInput"> 
                   <div class="combobox-sel clearfix"> 
                    <select class="combobox-inputbox" style="width:200" name="brand" type="text" readonly="" oldval="19819" role="combobox" aria-autocomplete="list" aria-owns="prop_20000" aria-label="品牌: 上下键打开选项列表，回车选中选项，ESC关闭列表，关闭后TAB键跳, 转到其他选项">
					@foreach($brand as $br)
						@if($br['brid']==$cidarr[2])
						<option value="{{$br['brid']}}" selected="selected">{{$br['brname']}}</option>
						@else
						<option value="{{$br['brid']}}">{{$br['brname']}}</option>
						@endif
					@endforeach
					</select> 
                   </div>
                  </div>
                 </div>
                </div>
               </div> 
               <div></div>
              </div></td>
            </tr>
			<!--基本属性  加个div吧-->
			@foreach($norarr as $nor)
			<tr>
             <td><em style="display: none;">*<em></em></em><label for="wrap_122216507" style="display: inline;">{{$nor['atnname']}}</label></td>
             <td>
              <div class="sub-props" control_type="prop_wrap" control_classpath="xsell/modules/props/sub_props" control_id="wrap_122216507"> 
               <div class="clearfix">
                <div class="clearfix fl">
                 <div class="combo-props" control_type="combobox" control_classpath="xsell/modules/props/combo_props" control_id="prop_122216507">
                  <div class="combobox disableInput"> 
                   <div class="combobox-sel clearfix"> 
                    <select class="baseattr" style="width:200" type="text" readonly="" role="combobox" aria-autocomplete="list" aria-owns="prop_122216507" aria-label="厚薄">
					<option></option>
					@foreach($nor['nor'] as $no)
					<option value="{{$nor['atnid'].':'.$no['atvid']}}" data-baseatname="{{$nor['atnname'].':'.$no['atvname']}}">{{$no['atvname']}}</option>
					@endforeach
					</select>
                   </div>
                  </div>
                 </div>
                </div>
               </div> 
               <div></div>
              </div></td>
            </tr>
			@endforeach
           </tbody>
          </table>
         </div></td>
       </tr>
       <tr>
        <td class="bar"><em style="display: inline;">*<em></em></em><label for="multiMedia" style="display: inline;">电脑端宝贝图片</label></td>
        <td>
         <div class="block info" style="margin: 0px 0px 3px;">
          宝贝主图大小不能超过3MB；700*700 以上图片上传后宝贝详情页自动提供放大镜功能。第五张图发商品白底图可增加手淘首页曝光机会 
          <a href="//taobaosell.bbs.taobao.com/detail.html?spm=a210m.7877990.0.0.yyNpgt&amp;appId=23012&amp;postId=6529756" target="_blank">查看规范</a>
         </div>
         <div class="multmedia-wrap clearfix" control_type="multi_media" control_classpath="xsell/modules/multi_media/index" control_id="multiMedia" id="multiMedia">
          <div class="multimage-wrap" control_type="multi_img" control_classpath="xsell/modules/multi_img/index" control_id="multiMedia.image">
           <ul class="image-list">
            <li data-media="image" aria-label="宝贝主图: 按Enter键打开图片空间选择图片，按Esc退出弹层">
             <div class="operate">
              <i class="icon iconfont icon-sortleft toleft" title="左移"></i>
              <i class="icon iconfont icon-sortright toright" title="右移"></i>
              <i class="icon iconfont icon-remove del" title="删除"></i>
             </div>
             <div class="preview">
              <a title="上传图片" tabindex="0" class="upload-tip" style="display: inline;"><i class="icon iconfont icon-tianjia"></i></a>
             </div><span class="info"><em>*</em>宝贝主图</span></li>
            <li data-media="image" aria-label="宝贝主图: 按Enter键打开图片空间选择图片，按Esc退出弹层">
             <div class="operate">
              <i class="icon iconfont icon-sortleft toleft" title="左移"></i>
              <i class="icon iconfont icon-sortright toright" title="右移"></i>
              <i class="icon iconfont icon-remove del" title="删除"></i>
             </div>
             <div class="preview">
              <a title="上传图片" tabindex="0" class="upload-tip" style="display: inline;"><i class="icon iconfont icon-tianjia"></i></a>
             </div></li>
            <li data-media="image" aria-label="宝贝主图: 按Enter键打开图片空间选择图片，按Esc退出弹层">
             <div class="operate">
              <i class="icon iconfont icon-sortleft toleft" title="左移"></i>
              <i class="icon iconfont icon-sortright toright" title="右移"></i>
              <i class="icon iconfont icon-remove del" title="删除"></i>
             </div>
             <div class="preview">
              <a title="上传图片" tabindex="0" class="upload-tip" style="display: inline;"><i class="icon iconfont icon-tianjia"></i></a>
             </div></li>
            <li data-media="image" aria-label="宝贝主图: 按Enter键打开图片空间选择图片，按Esc退出弹层">
             <div class="operate">
              <i class="icon iconfont icon-sortleft toleft" title="左移"></i>
              <i class="icon iconfont icon-sortright toright" title="右移"></i>
              <i class="icon iconfont icon-remove del" title="删除"></i>
             </div>
             <div class="preview">
              <a title="上传图片" tabindex="0" class="upload-tip" style="display: inline;"><i class="icon iconfont icon-tianjia"></i></a>
             </div></li>
            <li data-media="image" aria-label="宝贝主图: 按Enter键打开图片空间选择图片，按Esc退出弹层">
             <div class="operate">
              <i class="icon iconfont icon-sortleft toleft" title="左移"></i>
              <i class="icon iconfont icon-sortright toright" title="右移"></i>
              <i class="icon iconfont icon-remove del" title="删除"></i>
             </div>
             <div class="preview">
              <a title="上传图片" tabindex="0" class="upload-tip" style="display: inline;"><i class="icon iconfont icon-tianjia"></i></a>
             </div><span class="info">宝贝白底图</span></li>
           </ul>
           <a href="#"></a>
          </div>
          <div class="kou-msg J_tpbh_wrap" id="kou-msg-wrap" style="display: none;">
           <div class="J_kou_soft" style="display: none;">
            <i class="icon iconfont icon-exclamationcircle dun_info"></i>图片保护： 亲，第
            <span class="J_dun_pos"></span>个位置的图片已参加
            <a href="//tupian.taobao.com/main.htm" target="_blank">图片保护</a>。若您认为对方不是原创者，请
            <a class="J_jb" href="#" target="_blank">举报非原创</a>。
           </div>
           <div class="J_kou_hard" style="display: none;">
            <i class="icon iconfont icon-exclamationcircle dun_info"></i>图片保护： 亲，第
            <span class="J_dun_pos"></span>个位置的图片已参加
            <a href="//tupian.taobao.com/main.htm" target="_blank">图片保护</a>，请获得对方许可后再使用。若您认为对方不是原创者，请
            <a href="#" target="_blank" class="J_jb">举报非原创</a>。
           </div>
           <div class="J_kou_hold" style="display: none;">
            <i class="icon iconfont icon-removecircle dun_alert"></i>
            <font style="color: #f60;">图片保护： 亲，第<span class="J_dun_pos"></span>个位置的图片已参加<a href="//tupian.taobao.com/main.htm" target="_blank">图片保护</a>，请获得对方许可后再使用，否则不能发布。</font>
           </div>
           <div class="J_kou_hr_hold" style="display: none;">
            <i class="icon iconfont icon-removecircle dun_alert"></i>
            <font style="color: #f60;">图片保护： 亲，第<span class="J_dun_pos"></span>个位置的图片已参加<a href="//tupian.taobao.com/main.htm" target="_blank">图片保护</a>，无法发布。若有异议，请<a target="_blank" href="//feedback.taobao.com/pc/feedbacks?productId=390&amp;source=Web">点击这里反馈</a>.</font>
           </div>
           <div class="J_kou_ipo" style="display: none;">
            <i class="icon iconfont icon-dengpao dun_ipo"></i>
            <a href="//kou.taobao.com" target="_blank">图片护盾</a> 
            <i class="icon iconfont icon-questioncircle J_dun_tip dun_tip"></i> : 第
            <span class="J_dun_pos"></span>个位置的图片是首发图，可以
            <span style="color:#f60;">加护盾，防止被盗用</span>。 
            <span class="J_dun_change" id="kou-change" style="color:#09f; cursor: pointer;">加护盾</span>&nbsp;&nbsp; 
            <a href="//kou.taobao.com/auth.htm" target="_blank">许可名单设置</a>
           </div>
           <div class="J_kou_ipoed" style="display: none;">
            <i class="icon iconfont icon-checkcircle dun_suc"></i>
            <a href="//kou.taobao.com" target="_blank">图片护盾</a> 
            <i class="icon iconfont icon-questioncircle J_dun_tip dun_tip"></i> : 第
            <span class="J_dun_pos"></span>个位置的图片已经
            <span style="color:#f60;">加护盾</span>，其他卖家未经您的许可不能使用。 &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" style="vertical-align: middle;" class="J_kou_auto" /> 以后默认加护盾 
            <a href="//kou.taobao.com/auth.htm" target="_blank">许可名单设置</a>
           </div>
           <div class="J_kou_ipo0" style="display: none;">
            <i class="icon iconfont icon-dengpao dun_ipo"></i>
            <a href="//kou.taobao.com" target="_blank">图片护盾</a> 
            <i class="icon iconfont icon-questioncircle J_dun_tip dun_tip"></i> : 对不起，没有符合
            <a href="//www.taobao.com/market/spbh/no-kou.php" target="_blank">加护盾要求</a>的图片，编辑时只检测变更图片。 &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" style="vertical-align: middle;" class="J_kou_auto" /> 以后默认加护盾 
            <a href="//kou.taobao.com/auth.htm" target="_blank">许可名单设置</a>
           </div>
          </div>
         </div></td>
       </tr>
	   <!--sku组合start-->
	   
       <tr>
        <td class="bar"><em style="display: none;">*<em></em></em><label for="saleProps" style="display: inline;">宝贝规格</label></td>
        <td>
         <div class="struct div_contentlist" control_type="struct" control_classpath="xsell/modules/struct/index" control_id="saleProps" id="saleProps">
          <table class="showbar" style="display: table;">
           <tbody> 
		   <!--遍历销售属性-->
			@foreach($salearr as $key=>$sa)
			<tr>
             <td class="bar"><em style="display: none;">*<em></em></em><label class="Father_Title" data-atnid="{{$sa['atnid']}}" for="prop_20509" style="display: inline;">{{$sa['atnname']}}</label></td>
            </tr>
			<tr>
             <td>
              <div class="frame" control_type="frame" control_classpath="xsell/modules/frame/index" control_id="{{$sa['atnid']}}">
               <div>
                <div class="col-content">
                </div>
               </div>
               <div>
                <div class="col-content">
                 <div control_type="sku_size" control_classpath="xsell/modules/sku/sku_size" control_id="prop_20509_136553091-men_tops" style="display: block;">
                  <ul class="sku-size clearfix Father_Item{{$key}}">
				  @foreach($sa['sav'] as $sav)
                   <li data-order="5" class="remark"><label><input data-atvid="{{$sa['atnid'].':'.$sav['atvid']}}" data-atvname="{{$sa['atnname'].':'.$sav['atvname']}}" type="checkbox" name="checkbox{{$key}}" value="{{$sav['atvname']}}" /> {{$sav['atvname']}}</label></li>
				   @endforeach
                  </ul>
                 </div>
                </div>
               </div>
              </div>
              </td>
            </tr>
			@endforeach
	</div>
	
			<!--sku组合end-->
			<!--sku生成start-->
            <tr>
             <td class="bar"><em style="display: none;">*<em></em></em><label for="sku" style="display: inline;">宝贝销售规格</label></td>
            </tr>
            <tr>
			
             <td>
              <div class="sku" control_type="sku" control_classpath="xsell/modules/sku/index" control_id="sku" id="sku">
			  </td>
            </tr>
           </tbody>
          </table>
         </div></td>
       </tr>
	   </table>
    </div>
	<!--sku组合生成表 s-->
	<div id="createTable"></div>
	</div>
    <!--sku组合生成表 e-->
	<h1></h1>
    <div id="commit" control_type="commit_sell" control_classpath="xsell/modules/commit_sell/index" control_id="commitBtn" class="floatbar rootStruct">
     <button class="blue" type="button">发 布</button>
    </div>
	<script>
		$(function(){
			$(document).on('click','.blue',function(){
				//获得类别id
				var gcid = $('#catPath').attr('data-gcid');
				//获得商品标题
				var title=$('#title').val();
				//获得列表价格
				var listprice = $('#listprice').val();
				//获得货号
				var ghuohao = $('#ghuohao').val();
				//获得品牌id
				var brid = $('.combobox-inputbox[name="brand"]').val();
				//获得基本属性
				var baseobj = $('.baseattr');
				var basearr = new Array();
				$.each(baseobj,function(b,bpro){
					basearr.push($(this).val());
				});
				//获得sku组合
				var skufix = $('#createTable tbody tr').eq(0).find('input[name="sku_count"]').val();
				var skuObj = $('#createTable tbody tr');
				var skuArr = new Array();//sku数组
				$.each(skuObj,function(i,pro){
					var skusarr = new Array();
					var skustr="";
					var skuname="";
					$(this).find('td[name="ssku"]').each(function(d){
						if(skustr==""){
							skustr = $(this).attr('data-skufix');
						}else{
							skustr = skustr+';'+$(this).attr('data-skufix');
						}
						if(skuname==""){
							skuname = $(this).attr('data-skuname');
						}else{
							skuname = skuname+';'+$(this).attr('data-skuname');
						}
					});
					skusarr.push(skustr);
					skusarr.push(skuname);
					var skuprice = $(this).find('input[name="sku_price"]').val();
					skusarr.push(skuprice);
					var skucount = $(this).find('input[name="sku_count"]').val();
					skusarr.push(skucount);
					skuArr.push(skusarr);
				});
				//ajax传输数据
				$.ajax({
					url:'/shelves',
					data:{"gcid":gcid,"title":title,"listprice":listprice,"ghuohao":ghuohao,"brid":brid,"basearr":basearr,"skuArr":skuArr},
					type:'get',
					dataType:'text',
					success:function(data){
						if(data == 1){
							location.href='/istore';
						}else{
							alert('a');
						}
					}
				});
			});
		});
	</script>
   </div>
   <div data-spm="1998855311" id="helper" control_type="helper" control_classpath="xsell/modules/helper/index" style="left: 100%; top: 34px;"> 
    <div id="helperheader">
     发布助手
    </div>
    <div class="helper-items">
     <div class="header">
      <i class="icon iconfont icon-questioncircle"></i>当前项提示
     </div>
     <div class="content" style="display: block;">
      <ul>
       <li>1 选择颜色或者输入出现的联想词都会进入搜索<br />2 选择尺码，可以使用任一码制，但是不支持同时使用多组码制<br />3 批量填充功能，当填写价格后确定，所有宝贝规格的价格自动填充<br /></li>
      </ul>
     </div>
    </div>
    <div class="helper-items">
     <div class="header">
      <i class="icon iconfont icon-dingwei"></i>页面导航
      <i class="icon iconfont icon-sortdown fr"></i>
     </div>
     <div class="content" style="display: none;">
      <ul class="nav-content">
       <li>宝贝标题</li>
       <li>宝贝属性</li>
       <li>商品资质</li>
       <li>宝贝规格</li>
       <li>宝贝价格</li>
       <li>宝贝数量</li>
       <li>宝贝图片</li>
       <li>宝贝描述</li>
       <li>店铺类目</li>
      </ul>
     </div>
    </div>
    <div class="helper-items" id="helpererrors" style="display: none;">
     <div class="header">
      <i class="icon iconfont icon-crying"></i>出错项 
      <span id="counterrors"></span> 
      <i class="icon iconfont icon-sortdown fr"></i>
     </div>
     <div class="content" style="display: none;">
      <ul></ul>
     </div>
    </div>
    <div class="helper-items" id="helperwarning" style="display: none;">
     <div class="header">
      <i class="icon iconfont icon-exclamationcircle"></i>优化项 
      <span id="countwarning"></span> 
      <i class="icon iconfont icon-sortdown fr"></i>
     </div>
     <div class="content" style="display: none;">
      <ul></ul>
     </div>
    </div>
    <div class="helper-items" id="questions">
     <div class="header">
      <i class="icon iconfont icon-questioncircle"></i>常见问题
      <i class="icon iconfont icon-sortdown fr"></i>
      <div id="roboticon"></div>
     </div>
     <div class="content" style="display: none;">
      <div>
       宝贝基本属性
      </div>
      <ul>
       <li>
        <div class="questions-box"></div><span>如何修改商品类目</span></li>
       <li>
        <div class="questions-box"></div><span>宝贝所有的属性都一定要填写吗</span></li>
       <li>
        <div class="questions-box"></div><span>男装类目宝贝不能点击全新</span></li>
       <li>
        <div class="questions-box"></div><span>上传商品资质（如证书、包装图、吊牌等）有什么好处</span></li>
       <li>
        <div class="questions-box"></div><span>我能发布多少商品</span></li>
       <li>
        <div class="questions-box"></div><span>上传商品资质（如证书、包装图、吊牌等）要求是什么</span></li>
      </ul>
      <div>
       更多问题咨询
      </div>
     </div>
    </div>
    <div class="suggest-box">
     <a class="back-ink J_reBack" href="/auction/container/page_switch.htm">返回旧版</a>
     <a target="_blank" class="J_suggest" href="//feedback.taobao.com/pc/feedbacks?productId=248&amp;source=Web_sell发布">意见反馈</a>
    </div>
   </div>
  </div> 
  <!-- from vmcommon --> 
  <div id="footer"> 
   <div class="g_foot"> 
    <div class="g_foot-ali"> 
     <a href="//news.alibaba.com/specials/aboutalibaba/aligroup/index.html">阿里巴巴集团</a> 
     <b>|</b> 
     <a href="//www.alibaba.com">阿里巴巴国际站</a> 
     <b>|</b> 
     <a href="//www.1688.com">阿里巴巴中国站</a> 
     <b>|</b> 
     <a href="//www.aliexpress.com">全球速卖通</a> 
     <b>|</b> 
     <a href="//www.taobao.com/index_global.php">淘宝网</a> 
     <b>|</b> 
     <a href="//www.tmall.com">天猫</a> 
     <b>|</b> 
     <a href="//ju.taobao.com">聚划算</a> 
     <b>|</b> 
     <a href="//www.etao.com">一淘</a> 
     <b>|</b> 
     <a href="//www.alimama.com">阿里妈妈</a> 
     <b>|</b> 
     <a href="//www.aliyun.com">阿里云计算</a> 
     <b>|</b> 
     <a href="//www.yunos.com">云OS</a> 
     <b>|</b> 
     <a href="//www.net.cn">万网</a> 
     <b>|</b> 
     <a href="//cn.yahoo.com">中国雅虎</a> 
     <b>|</b> 
     <a href="//www.alipay.com">支付宝</a> 
    </div> 
    <div class="g_foot-nav"> 
     <a href="//www.taobao.com/about/">关于淘宝</a> 
     <a href="//www.taobao.com/about/partners.php">合作伙伴</a> 
     <a href="//pro.taobao.com/">营销中心</a> 
     <a href="//service.taobao.com/support/main/service_route.htm">联系客服</a> 
     <a href="//open.taobao.com/">开放平台</a> 
     <a href="//www.taobao.com/about/join.php">诚征英才</a> 
     <a href="//www.taobao.com/about/contact.php">联系我们</a> 
     <a href="//www.taobao.com/sitemap.php">网站地图</a> 
     <a href="//www.taobao.com/about/copyright.php">法律声明</a> 
     <span>? 2015 Taobao.com 版权所有</span> 
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
    sell011250054223.eu13
   </div> 
  </div> 
  <!-- end vmcommon --> 
  <div style="padding:25px 0px"></div> 
  
 </body>
</html>