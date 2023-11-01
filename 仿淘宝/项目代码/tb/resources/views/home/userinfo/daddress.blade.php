<html xmlns="http://www.w3.org/1999/xhtml" class="ks-webkit537 ks-webkit ks-chrome56 ks-chrome"><head>

    <meta http-equiv="Content-Type" content="text/html; charset=GB18030">
	<meta name="data-spm" content="a1z08">
    <title>淘宝网</title>
    <meta name="description" content="淘宝网(Taobao.com)中国最大,最安全的个人网上交易社区(C2C)，作为专业的购物网站拥有全球时尚前沿的消费者购物集市,100%认证网上商城及超值二手商品区，同时购物安全，产品丰富，应有尽有,任你选购,让你尽享网上在线购物乐趣！">
    <meta name="keywords" content="淘宝,掏宝,网上购物,C2C,在线交易,交易市场,网上交易,交易市场,网上买,网上卖，购物网站,团购,网上贸易,安全购物,电子商务,放心买,供应,买卖信息,网店,一口价,拍卖,网上开店,网络购物,打折,免费开店,网购,频道,店铺">
	<link href="{{asset('images/favicon.ico')}}" rel="icon" type="image/x-icon">
	<link href="{{asset('images/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
    <link rel="search" type="application/opensearchdescription+xml" href="//assets.alicdn.com//plugins/opensearch/provider.xml" title="淘宝购物">
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/z_account_security_tbmbis0.4.3oldtbsp.csst=20090602.css')}}">
			<!-- S GLOBAL CSS -->
	<link rel="stylesheet" href="{{asset('css/z_account_security_tbglobal3.5.34global-min.css')}}">
	<!-- S GLOBAL CSS -->
	<!-- S GLOBAL JS -->
	<link id="yui__dyn_0" type="text/css" charset="utf-8" rel="stylesheet" href="{{asset('css/z_account_security_tbra1.0assetstbra.csst=20090604.css')}}">
	<!-- E GLOBAL JS -->
	<link href="{{asset('css/z_account_security_tbmbis0.4.3oldaccount.css20090820.css')}}" type="text/css" rel="stylesheet">
	<link href="{{asset('css/z_account_security_tbmbis0.4.3oldcommon_v2.css20090609.css')}}" type="text/css" rel="stylesheet">
	<script src="{{asset('js/jquery-1.7.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/Area.js')}}" type="text/javascript"></script>
<script src="{{asset('js/AreaData_min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
$(function (){
	initComplexArea('seachprov', 'seachcity', 'seachdistrict', area_array, sub_array, '44', '0', '0');

	$('.btn').mousedown(function(){
		
	//地区码
	var areaID = getAreaID();
	//地区名
	var areaName = getAreaNamebyID(areaID) ;
	
		$('#barea').attr('value',areaName);

	});

	$('.thead-tbl-status').hover(function(){
		$(this).children().first().removeClass('hide')
	},function(){
		$(this).children().first().addClass('hide')
	})

	$('.back').hover(function(){
		$(this).addClass('address-hover')
	},function(){
		$(this).removeClass('address-hover')
	})

	$('.modf').click(function() {
		$('.done').css('display','block');
		$('.dtwo').css('display','none');
	});
	
});

//得到地区码
function getAreaID(){
	var area = 0;          
	if($("#seachdistrict").val() != "0"){
		area = $("#seachdistrict").val();                
	}else if ($("#seachcity").val() != "0"){
		area = $("#seachcity").val();
	}else{
		area = $("#seachprov").val();
	}
	return area;
}



//根据地区码查询地区名
function getAreaNamebyID(areaID){
	var areaName = "";
	if(areaID.length == 2){
		areaName = area_array[areaID];
	}else if(areaID.length == 4){
		var index1 = areaID.substring(0, 2);
		areaName = area_array[index1] + " " + sub_array[index1][areaID];
	}else if(areaID.length == 6){
		var index1 = areaID.substring(0, 2);
		var index2 = areaID.substring(0, 4);
		areaName = area_array[index1] + " " + sub_array[index1][index2] + " " + sub_arr[index2][areaID];
	}
	return areaName;
}
</script>
    
    
    
<style type="text/css">
.modf{
	display:inline-block;zoom:1;height:28px;line-height:28px;padding:0 20px;color:#FFF;font-weight:700;font-size:14px;text-align:center;background:#ff4001;border:0;border-radius:3px;cursor:pointer
}


.dredge-pop{width:390px;padding:3px;overflow:hidden;border:1px solid #b2d1ff;position:absolute;top:0px; left:0px;visibility: hidden;box-shadow: 2px 2px 3px #aaa;-moz-box-shadow:2px 2px 3px #aaa;-webkit-box-shadow:2px 2px 3px #aaa;filter:progid:DXImageTransform.Microsoft.Shadow(color="#969696", Direction =135, Strength = 3);background-color:#e5f0ff;z-index:10000;};.dredge-pop .bd{background-color:#fff;}.dredge-pop .bd iframe{	width:390px;	height:285px;	border-width:0px;	overflow:hidden;	vertical-align:middle;}.dredge-pop .close {width: 9px;height: 9px;display: block;border-width: 0px;overflow: hidden;text-indent: -200px;cursor: pointer;position: absolute;right: 6px;top: 6px;background: url(./images/T1QspFXfNJXXXXXXXX-9-9.png) no-repeat}.safe-masked{width:100%;position:absolute;top:0px;left:0px;visibility:hidden; background-color:#aaa;opacity:0.5;filter: alpha(opacity = 50);z-index:9999;}.masked-shim{position:absolute;top:0px;width:100%;height:100%;left:0px;filter: alpha(opacity = 0);z-index:9999;visibility:hidden;}</style><style type="text/css">#immediate-help-trigger{position:fixed;right:0;bottom:70%;cursor:pointer;z-index:10001;}#immediate-help-trigger a{display:block;width:46px;height:120px;background:url(./images/T1jrqcXcxrXXXXXXXX-46-120.gif) no-repeat 0 0}body #immediate-help-trigger a{_background: none;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="{{asset('images/T1jrqcXcxrXXXXXXXX-46-120.gif')}}",sizingMethod="image");}#immediate-help-trigger a:hover{cursor: pointer;background:url(./images/T1kbqcXcJrXXXXXXXX-46-120.gif) no-repeat 0 0;border:none;}body #immediate-help-trigger a:hover{_background: none;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="{{asset('images/T1kbqcXcJrXXXXXXXX-46-120.gif')}}",sizingMethod="image");}#immediate-help-trigger a:focus{outline: none;}#immediate-help-trigger{_position: absolute;_zoom: expression(function(el) {el.style.zoom = 1;window.onscroll = function() {el.className = el.className;};}(this));}</style>
<style type="text/css">
input{height:26px}
    .msg{padding:4px 4px 4px 24px;font-size:12px;line-height:16px;color:#404040;background-color:#FFFFE5;border:1px solid #FFCC7F;overflow:hidden;zoom:1;display:inline-block;zoom:1;*display:inline}.msg-b{padding:9px 9px 9px 50px;font-size:14px;line-height:16px;color:#404040;background-color:#FFFFE5;border:1px solid #FFCC7F;overflow:hidden;zoom:1}.msg-inline{display:inline-block;zoom:1;*display:inline}.msg-b .msg-vm,.msg-b-weak .msg-vm{padding-top:7px}.msg-b .msg-middle{padding-top:7px}.msg-ok,.msg-b-ok{background-color:#F0FFE5;border-color:#4DBF00}.msg-error,.msg-stop,.msg-b-error,.msg-b-stop{background-color:#FFF2F2;border-color:#FF8080}.msg-attention,.msg-b-attention{background-color:#E5F5FF;border-color:#40B3FF}.msg-weak{padding:5px 5px 5px 25px;font-size:12px;line-height:16px;color:#404040;background:0 0;border:0}.msg-b-weak{padding:10px 10px 10px 46px;font-size:14px;line-height:16px;color:#404040;background:0 0;border:0}.msg-ok{}.msg-ok i{background-position:0 -200px}.msg-error{}.msg-error i{background-position:0 0}.msg-stop{}.msg-stop i{background-position:0 -40px}.msg-question{}.msg-question i{background-position:0 -80px}.msg-notice{}.msg-notice i{background-position:0 -240px}.msg-attention{}.msg-attention i{background-position:0 -120px}.msg-tips{}.msg-tips i{background-position:0 -160px}.msg-b-ok{}.msg-b-ok i{background-position:100% -200px}.msg-b-error{}.msg-b-error i{background-position:100% 0}.msg-b-stop{}.msg-b-stop i{background-position:100% -40px}.msg-b-question{}.msg-b-question i{background-position:100% -80px}.msg-b-notice{}.msg-b-notice i{background-position:100% -240px}.msg-b-attention{}.msg-b-attention i{background-position:100% -120px}.msg-b-tips{}.msg-b-tips i{background-position:100% -160px}.item-devision .msg-box{margin-left:100px;width:300px}.ks-popupmenu{background:#fff;border-color:#999;border-style:solid;border-width:1px;cursor:default;margin:0;outline:0;padding:0;position:absolute;z-index:99999;left:-9999px;top:-9999px}.ks-popupmenu-shown{visibility:visible}.ks-popupmenu-hidden{visibility:hidden}.ks-menuitem{color:#404040;list-style:none;margin:0;font-size:12px;line-height:18px;padding:1px 0 2px 2px;white-space:nowrap}.ks-menuitem-disabled .ks-menuitem-content{color:#ccc!important}.ks-menuitem-highlight,.ks-menuitem-hover{background-color:#39F;color:#fff}.ks-combobox{display:inline-block;overflow:hidden;zoom:1;*display:inline}.ks-combobox-trigger{text-decoration:none;color:#000;float:right;text-align:center;border-left:1px solid #b5b6b5}.ks-combobox-trigger-inner{float:left;line-height:18px;height:18px;margin:0 4px;vertical-align:middle}.ks-combobox-input-wrap{overflow:hidden;vertical-align:middle;position:relative}.ks-menuitem-disabled{color:gray}body,div,table,h1,h2,h3,h4,h5,h6,ul,ol,li,p,dl,dt,dd,th,td,form,fieldset{margin:0;padding:0}table{border-collapse:collapse}pre,code{white-space:pre;font-family:"Courier New",Courier,monospace}li{list-style:none}em{font-style:normal}img,object{border:0;outline:0}a img{vertical-align:top}abbr,article,aside,audio,canvas,datalist,details,figure,footer,header,menu,nav,output,progress,section,video{display:block;margin:0;padding:0}body{color:#333;font:400 12px/1.6 arial,sans-serif}textarea:disabled,textarea[disabled],textarea[disabled=disabled],textarea.disabled{background:#F5F5F5}.mtb10{margin-top:10px;margin-bottom:10px}#content{width:990px;margin:0 auto}#Content .col-sub,#content .col-sub{width:139px;margin-left:-100%;*display:inline}.main-wrap{background:#fff;padding-bottom:30px}.form-box{position:relative;margin-top:20px;width:530px}.form-box select{width:150px}.form-box .item-mobile select,.form-box .item-phone select{width:100px;background-color:#fff;background-image:none;border:1px solid #ccc;outline:0;cursor:pointer;height:24px}.form-box .item{position:relative;padding-left:105px;padding-bottom:10px;zoom:1;text-align:left;z-index:100}.form-box .item-devision{z-index:101}.form-box .item-label{display:inline;float:left;width:100px;margin-left:-105px;text-align:right;height:26px;line-height:26px}.form-box .item-warp{position:relative;display:inline-block;_zoom:1;*display:inline}.form-box .item-label i{color:red;font-style:normal}.form-box .item-set-default{line-height:26px}.form-box .item-title{line-height:26px}.form-box .item-title .item-label{color:#fc6210}.form-box .disabled{background:#F5F5F5}.form-box .i-text{border:1px solid #afafaf;padding:3px;width:200px;height:18px;line-height:18px;vertical-align:middle}.form-box .i-text-short{width:65px}.form-box .i-chk,.form-box label{vertical-align:middle}.form-box .i-ta{display:block;margin:0;padding:3px;width:392px;height:62px;border:1px solid #afafaf;font-size:12px}.form-box .input-err{border-color:#ff8380}.ph{font-size:12px;color:#bbb}.msg,.msg-weak{vertical-align:middle}.msg-tit{font-size:16px;padding-bottom:8px}.msg-cnt{font-size:12px}.global-msg{margin:10px;display:block}.btn{display:inline-block;zoom:1;height:28px;line-height:28px;padding:0 20px;color:#FFF;font-weight:700;font-size:14px;text-align:center;background:#ff4001;border:0;border-radius:3px;cursor:pointer}.hide{display:none}a{color:#36c}a:hover{color:#f60}.clearfix{zoom:1}.clearfix:after{content:"";display:block;clear:both;visibility:hidden;height:0}.tbl-deliver-address{margin:15px 0 0 25px}.tbl-deliver-address .tbl-main{width:97%;table-layout:fixed;border:1px solid #e7e7e7}.tbl-deliver-address .caption{height:21px;font-weight:700;color:#fc6210;text-align:left}.thead-tbl-grade th{height:40px;padding:0 5px;border-top:1px solid #e7e7e7;border-bottom:1px solid #e7e7e7;background:#f2f2f2;text-align:left}.tbl-deliver-address .col-man{width:65px}.tbl-deliver-address .col-area{width:140px}.tbl-deliver-address .col-postcode{width:60px}.tbl-deliver-address .col-phone{width:130px}.tbl-deliver-address .col-address{width:200px}.tbl-deliver-address tr{border-bottom:1px solid #e7e7e7}.tbl-deliver-address .address-hover{background-color:#eee}.tbl-deliver-address .need-update{background-color:#f0f0f0;color:#cfcfcf}.tbl-deliver-address td{padding:5px;white-space:normal;word-wrap:break-word;word-break:break-all;position:relative}.tbl-deliver-address .note{padding:4px 5px;background:#f60;color:#fff;border:1px solid #f60;border-radius:3px;text-decoration:none}.need-update .note{background-color:#ff9c7c;border-color:#ff9c7c}.tbl-deliver-address .need-update .thead-tbl-status a{color:#fff}.address-default .note{padding:2px 5px;border-color:#ff3800;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;background:#ffd6cc;color:#f30}.tbl-deliver-address td.cell-align-center{text-align:center}.h2-single{font-size:14px;color:#014d7f;background-color:#f3f8fe;height:30px;line-height:30px}.h2-single .entity{padding-left:10px}.mt-avatar{width:110px;padding:15px 15px 0}.tbl-attach{margin:10px 0}.ks-dialog,.ks-overlay{position:absolute;left:-9999px;top:-9999px;outline:0;-webkit-tap-highlight-color:rgba(0,0,0,0)}.ks-overlay-hidden{visibility:hidden}.ks-overlay-mask-hidden{display:none}.ks-overlay-shown{visibility:visible}.ks-overlay-mask-shown{display:block}.ks-dialog,.ks-popup{background-color:#FBFBFB;border:1px solid #ACB4BE}.ks-dialog .ks-dialog-header{background:repeat-x scroll 0 0 #D6DBE2;border-bottom:1px solid #ACB4BE;font-size:14px;font-weight:700;height:30px;line-height:30px;padding:0 0 0 18px}.ks-overlay-mask{background-color:#000;opacity:.3;filter:alpha(opacity=15);z-index:20001!important}.del-dialog{padding:0 20px 20px}.del-dialog .msg-b-attention{border:0;background:transparent}.del-dialog .msg-cnt{margin-top:10px}.del-dialog-actions{margin-left:50px}.del-dialog-actions a{margin-right:10px;padding:5px 20px;text-decoration:none;background:#ccc;color:#000}.feedback{background-repeat:repeat-y;background-color:#fff;width:25px;overflow:hidden;position:fixed;right:0;top:50%;z-index:1000;border:1px solid #e8e8e8;border-radius:2px;-webkit-border-radius:2px;-moz-border-radius:2px;_position:absolute;_top:expression(documentElement.scrollTop+(documentElement.clientHeight - this.clientHeight)/2 +'px');_zoom:expression(function(el) {el.style.zoom = 1;window.onscroll = function() {el.className = el.className;};}(this))}.feedback span{display:block}.feedback span a{display:block;word-wrap:break-word;word-break:normal;width:13px;text-align:center;color:#666;padding:8px 6px 10px;line-height:1.1em}.feedback span s{width:0;height:0;border:3px solid #19377f;display:block;position:relative;top:-1px;right:-1px;border-color:#fff #19377f #19377f #fff;margin:-6px 0 0 19px;overflow:hidden;_margin-left:17px;zoom:1}.feedback span a:hover{color:#f50;text-decoration:none}.ks-overlay-close{cursor:pointer;position:absolute;text-decoration:none;width:15px;height:15px;right:368px;top:108px;z-index:99}.ks-overlay-close .ks-overlay-close-x{display:block;height:15px;text-indent:-9999px;width:15px}.city-select-tab{border-bottom:1px solid #ccc;border-right:1px solid #ccc;border-top:1px solid #ccc;width:299px;height:35px;background:#f0f0f0}.city-select-tab a{float:left;display:inline;margin-bottom:-1px;padding:8px 20px;width:33px;border-left:1px solid #ccc;border-bottom:1px solid transparent;color:#4D4D4D;text-align:center;outline:0}.city-select-tab .last{width:36px}.kot-select-tab a{width:58px}.kot-select-tab .last{width:60px}.city-select-tab .current{background:#fff;border-bottom:1px solid #fff;color:#f60}.city-select{border:1px #ccc solid;border-top:0;padding:10px 15px;width:268px;background:#fff;font-size:12px}.city-title{margin-right:10px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;color:#ccc}.has-city-title{color:#333}.sSelect{width:72px}.lSelect{width:282px}.city-select dl{line-height:2;clear:both;padding:3px 0;margin:0}.city-select dl:after{clear:both;content:" ";display:block;font-size:0;height:0;visibility:hidden}.city-select dt{display:inline-block;width:25px;float:left;padding-right:10px;font-weight:700;text-align:right}.city-select dd{width:233px;display:inline;float:left;margin-left:0}.city-select a{display:inline-block;color:#4D4D4D;padding:0 10px;outline:0;text-decoration:none;white-space:nowrap;margin-right:2px}.city-select a:hover,.city-select a:focus{background-color:#fff8f3;border-radius:2px;color:#f60}.city-select a.current{background-color:#f60;color:#fff;border-radius:2px}.city-select .border-top{border-top:1px solid #ccc}.city-select-province dd,.city-select-city dd,.city-select-street dd,.city-select-district dd{width:270px}.ks-overlay{position:absolute;left:-9999px;top:-9999px;z-index:999999}.ks-overlay-hidden{visibility:hidden}.ks-overlay-mask-hidden{display:none}.ks-overlay-shown{visibility:visible}.ks-overlay-mask-shown{display:block}.bf-select{float:left;margin-right:10px}.bf-popupmenu-content{max-height:300px;_height:expression(this.scrollHeight > 300 ? "300px" : "auto");overflow-y:auto;overflow-x:hidden}.bf-menu{z-index:999}body .bf-menu .bf-menuitem{padding-left:20px}body .bf-menu .bf-menuitem-selected{background-position:5px 10px}body .select-error{border-color:#FF8080}.tip-content{position:absolute;bottom:-79px;background:#fff;border:1px solid #ccc;width:268px;padding:5px 15px;right:-1px}.bf-select a,.bf-menu-content a{text-decoration:none;color:#333}.bf-menu .bf-menuitem-selected a{color:#f60}


    
</style>
<link href="{{asset('css/z_account_security_tbctmsg3.4.6index-min.css')}}" rel="stylesheet"></head>
	
<body id="mytaobao" data-spm="2">
@include('head')

    <link rel="stylesheet" href="{{asset('css/global-min.2.6.13.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/index-min.css')}}">

<!-- -->
<!-- 全网顶通 -->
<!-- E GLOBAL HTML   -->
	<div id="page">		
		            <!--
<style>
.mt-header{
margin-top:10px !important;
}
#decSaleTopBanner{ display:none;} 
</style>
<a href="//www.taobao.com/market/2012/1212/home.php?spm=1.377271.302995.1&ad_id=&am_id=1301045826a610fee231&cm_id=&pm_id=" target=_blank>
<img src="{{asset('img.alicdn.com/tps/i1/T1tYUvXaFgXXcAwN6h-990-125.png')}}" width="990" style="border:none;display:block;width:990px;margin-left:auto;margin-right:auto;">
</a>
--> 
            

	<link rel="stylesheet" href="{{asset('css/z_account_security_tbmtb-profile0.0.4othmtbasebase.csst=20140318.css')}}">
		
		<style>
			#Content .main-wrap,
			#content .main-wrap {
			    margin-left: 140px;
			}

			#Content .col-sub,
			#content .col-sub {
			    width: 140px;
				margin-left: -100%;
				*display: inline;
			}
		</style>

	
        <header class="mt-header" data-spm="a210b" data-spm-max-idx="12">
    <article> 
        <div class="mt-logo">
            <a href="//i.taobao.com/my_taobao.htm?spm=a1z08.2.a210b.d1000351.fJjZAS&nekot=1479268686721&tracelog=newmytb_logodianji" class="mt-tblogo" data-spm="d1000351" data-spm-anchor-id="a1z08.2.a210b.d1000351"><img src="{{asset('images/T1cT6EXhhpXXcSFIrn-194-35.png')}}"></a>
        </div>
        <nav class="mt-nav">
            <ul id="J_MtMainNav">
                <li>
                    <a href="//i.taobao.com/my_taobao.htm?spm=a1z08.2.a210b.d1000352.fJjZAS&tracelog=mytaobaonavindex&nekot=1479268686721" data-spm="d1000352" data-spm-anchor-id="a1z08.2.a210b.d1000352">首页</a>
                </li>
                <li class="J_MtNavSubTrigger">
                    <a class="mt-nav-parent" href="http://member1.taobao.com/member/fresh/account_security.htm?spm=a1z08.2.a210b.d1000356.fJjZAS&tracelog=mytaobaonavsetup&nekot=1479268686721" data-spm="d1000356" data-spm-anchor-id="a1z08.2.a210b.d1000356">账户设置<s></s></a>
                    <div class="J_MtNavSub mt-nav-sub hide">
                        <p><a href="//member1.taobao.com/member/fresh/account_security.htm?spm=a1z08.2.a210b.4.fJjZAS&tracelog=snsmytaobaoshezhi1ed" data-spm-anchor-id="a1z08.2.a210b.4">安全设置</a></p>
                        <p><a href="//i.taobao.com/user/baseInfoSet.htm?spm=a1z08.2.a210b.5.fJjZAS&tracelog=snsmytaobaoshezhi2ed" data-spm-anchor-id="a1z08.2.a210b.5">个人资料</a></p>
                        <p><a href="//member1.taobao.com/member/fresh/account_management.htm?spm=a1z08.2.a210b.6.fJjZAS&tracelog=snsmytaobaoshezhi3ed" data-spm-anchor-id="a1z08.2.a210b.6">支付宝绑定设置</a></p>
                        <p><a href="//member1.taobao.com/member/fresh/deliver_address.htm?spm=a1z08.2.a210b.7.fJjZAS&tracelog=snsmytaobaoshezhi4ed" data-spm-anchor-id="a1z08.2.a210b.7">收货地址</a></p>
                        <p><a href="//i.taobao.com/user/privacy_set.htm?spm=a1z08.2.a210b.8.fJjZAS&tracelog=snsmytaobaoshezhi5ed" data-spm-anchor-id="a1z08.2.a210b.8">隐私设置</a></p>
                        <p><a href="//member1.taobao.com/member/fresh/account_security.htm?spm=a1z08.2.a210b.9.fJjZAS&tracelog=snsmytaobaoshezhi6ed&nekot=1348020359357" data-spm-anchor-id="a1z08.2.a210b.9">更多</a></p>
                    </div>
                </li>
                <li class="J_MtNavSubTrigger">
                    <a class="mt-nav-parent" href="//msg.taobao.com/message/list.htm?spm=a1z08.2.a210b.d1000357.fJjZAS&tracelog=mytaobaonavmessage&nekot=1479268686721" data-spm="d1000357" data-spm-anchor-id="a1z08.2.a210b.d1000357">消息</a>
                </li>
            </ul> 
                            <div id="J_MtSearch" class="mt-search">
                    <div class="mt-search-type J_Type">
                        <dl>
                            <dt><a href="#nohash" data-type="item" data-spm-anchor-id="a1z08.2.a210b.11">宝贝</a></dt>
                            <dt><a href="#nohash" data-type="shop" data-spm-anchor-id="a1z08.2.a210b.12">店铺</a></dt>
                            <dd class="mt-search-arrows"></dd>
                        </dl>
                    </div>
                    <form id="J_TSearchForm" action="//s.taobao.com/search">
                        <input type="input" class="mt-search-query J_MtSearchQuery" placeholder="" name="q" style="height:30px">
                        <input type="hidden" name="tracelog" value="newmytb_sousuotijiao">
						<input type="hidden" name="spm" value="a1z02.1.6856637.d4910789"> 
                        <button type="submit" class="mt-search-submit">搜索</button>
                    </form>
                </div>
                    </nav>
    </article>
</header>

<!-- end vmcommon/mytaobao -->
	
				
		<div id="content">
	        <!-- 页面content内容开始 -->
<div id="content" style="overflow:hidden;">
   <div class="col-main">
    <div class="main-wrap">
        <h2 class="h2-single"><span class="entity">收货地址</span></h2>
                        
<link href="{{asset('css/z_baseInfoSet_skissy1.3.0cssdplbase-min.css')}}" rel="stylesheet">
<link href="{{asset('css/z_baseInfoSet_tbmbis0.4.13addresscssaddress.csst=20150910.css')}}" rel="stylesheet">
<div class="global-msg msg  hide  " id="J_MsgGlobal">
    <i></i>
    <div class="msg-cnt">${error_msg}</div>
</div>
<div class="form-box" id="J_FormBox">
    <div id="mapContainer"></div>
    
            <div class="item item-title ">
            <span class="item-label tsl" data-phase-id="d_p_addNewDeliverAddress" id="J_DeliverTitle">新增收货地址　</span><span class="tsl" data-phase-id="d_p_addNewDeliverAddressNotice">电话号码、手机号选填一项, 其余均为必填项</span>
                    </div>
  <form id="J_FormDeliver" action="/aupdate/{{$aid}}"method="post">
  {!! csrf_field() !!}

        <input type="hidden" name="action" value="DeliverAddressMgr">
        <input type="hidden" name="event_submit_do_save" value="anything">
        <input type="hidden" name="from" value="mbis">
        <input type="hidden" name="isFrame" value="false">
        <input type="hidden" name="token" value="">
        <input type="hidden" name="lang" value="zh-S" id="J_lang"> 
        <input name="_tb_token_" type="hidden" value="3fee437b3e68">
        <input type="hidden" name="id" id="J_iId" value="">
            <input type="hidden" name="x" id="J_lat" value="">
            <input type="hidden" name="y" id="J_lng" value="">
        <input type="hidden" name="reurl" value="">

        <div class="item item-devision" id="J_ItemDivision">
            <span class="item-label tsl" data-phase-id="d_p_location">所在地区 <i>*</i></span>

            <div id="J_CitySelect" class="ks-clear clearfix">
                <input type="hidden" name="country" class="J_iCountry" value="">
                <input type="hidden" name="prov" class="J_iProv" value="">
                <input type="hidden" name="provExt" class="J_iProvExt" value="">
                <input type="hidden" name="city" class="J_iCity" value="">
                <input type="hidden" name="area" class="J_iArea" value="">
                <input type="hidden" name="town" class="J_iTown" value="">
                <div id="ks-component104" class="bf-select bf-select bf-menu-button bf-button sSelect" tabindex="0" role="button" title="" aria-describedby="" aria-expanded="false" aria-haspopup="true" style="user-select: none; width:50px"><div id="ks-content-ks-component104" class="bf-select-content bf-select-content bf-menu-button-content bf-button-content"><a href="javascript:;" style="height:26px;line-height:26px;font-size:inherit;">中国大陆</a></div>
<div class="bf-select-dropdown bf-select-dropdown bf-menu-button-dropdown bf-button-dropdown">
    <div class="bf-select-dropdown-inner bf-select-dropdown-inner bf-menu-button-dropdown-inner bf-button-dropdown-inner">
    </div>
</div>


</div>
<div class="bf-select bf-cn-select lSelect select-node J_CnCity"  >
<center  class="dtwo" >
	<input type="text" style="border:1px solid white;font-size:small" readonly value="{{$modf['area']}}">
	<a class="modf" >修改</a>
</center >
	<center class="done" style="display:none">
	<select id="seachprov" style="width:70px;float:left;height:26px;margin-right:5px" name="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>&nbsp;&nbsp;
	<select id="seachcity" style="width:70px;float:left;height:26px;margin-right:5px" name="homecity" onChange="changeCity(this.value,'seachdistrict','seachdistrict');"></select>&nbsp;&nbsp;
	<span id="seachdistrict_div">
		<select id="seachdistrict" style="width:70px;float:left;height:26px;margin-right:5px" name="seachdistrict"></select>
	</span>
	<!-- 地区传值隐藏表单 -->
	<input type="hidden" name="area" id="barea" value="{{$modf['area']}}">

</center>
	<div class="bf-menu-button-dropdown"></div>
	
</div>
</div>
            <div class="msg-box">
                <div class="msg msg-error  hide  " id="J_MsgDivision">
                    <i></i>

                    <div class="msg-cnt tsl" data-phase-id="d_p_mapRecomend">
                                            </div>
                </div>
            </div>
            <div class="msg-box">
                <div class="msg msg-attension hide" id="J_MsgSuggestion">
                    <i></i>

                    <div class="msg-cnt"></div>
                </div>
            </div>
        </div>
        <div class="item item-street" id="J_ItemStreet">
            <span class="item-label tsl" data-phase-id="d_p_addressDetail">详细地址 <i>*</i></span>

            <div class="ks-combobox" id="J_ComboboxStreet" aria-pressed="false">
                <div class="ks-combobox-input-wrap">
                    <textarea style="resize: none;" class="ks-combobox-input i-ta disabled tsl" aria-combobox="list" role="combobox" autocomplete="off" name="addressDetail" id="J_Street" aria-label="详细地址" placeholder="建议您如实填写详细收货地址，例如街道名称，门牌号码，楼层和房间号等信息" data-inner_placeholder="d_p_input_inner_detailAddress" data-pattern="^[\s\S]{5,120}$" data-msg="d_p_detailAddress_msg" data-ph="建议您如实填写详细收货地址，例如街道名称，门牌号码，楼层和房间号等信息"> {{$modf['faddress']}}</textarea>
                </div>
            </div>
            <div class="msg-box">
                <div class="msg msg-error hide" id="J_MsgStreet">
                    <i></i>

                    <div class="msg-cnt"></div>
                </div>
            </div>
        </div>
        <div class="item item-postcode" id="J_ItemPostCode">
            <span class="item-label tsl" data-phase-id="d_p_postCode">邮政编码 </span>
            <div class="item-warp">
            @if($modf['zcode'] == '0')
            <input style="height:26px;width:300px" name="post" aria-label="邮政编码" maxlength="16" data-item="postcode" placeholder="如您不清楚邮递区号，请填写000000" data-inner_placeholder="d_p_input_inner_postCode" data-ph="如您不清楚邮递区号，请填写000000" data-pattern="^.{0,16}$" data-msg="d_p_postCode_msg" class="i-text tsl hh" id="J_PostCode" type="text" value="000000">
            </div>
			@else
            <input style="height:26px" name="post" aria-label="邮政编码" maxlength="16" data-item="postcode" placeholder="如您不清楚邮递区号，请填写000000" data-inner_placeholder="d_p_input_inner_postCode" data-ph="如您不清楚邮递区号，请填写000000" data-pattern="^.{0,16}$" data-msg="d_p_postCode_msg" class="i-text tsl hh" id="J_PostCode" type="text" value="">

            </div> @endif
            
            <div class="msg hide" id="J_MsgPostCode">
                <i></i>

                <div class="msg-cnt tsl" data-phase-id="d_p_postNotExit">邮编不存在</div>
            </div>
        </div>
        <div class="item item-name" id="J_ItemName">
            <span class="item-label tsl" data-phase-id="d_p_receiverName">收货人姓名 <i>*</i></span>
            <div class="item-warp">
            <input name="fullName" style="height:26px" class="i-text tsl hh" aria-label="收货人姓名" type="text" id="J_Name" placeholder="长度不超过25个字符" data-inner_placeholder="d_p_input_inner_fullName" data-pattern="^.{2,25}$" data-msg="d_p_fullName_msg" data-ph="长度不超过25个字符" value="{{$modf['gname']}}">
            </div>
            
            <div class="msg hide" id="J_MsgName">
                <i></i>

                <div class="msg-cnt"></div>
            </div>
        </div>
        <div class="item item-mobile" id="J_ItemMobile">
            <span class="item-label tsl" data-phase-id="d_p_mobileNumber">手机号码 </span>
            <select style="height:26px" name="mobile_area" id="J_MobileArea" aria-label="手机号码">
                                    <option value="1" data-code="86"> 中国大陆  +86</option>
                                    <option value="2" data-code="852"> 香港  +852</option>
                                    <option value="3" data-code="853"> 澳门  +853</option>
                                    <option value="4" data-code="886"> 台湾  +886</option>
                                    <option value="5" data-code="82"> 韩国  +82</option>
                                    <option value="6" data-code="81"> 日本  +81</option>
                                    <option value="7" data-code="1"> 美国  +1</option>
                                    <option value="8" data-code="1"> 加拿大  +1</option>
                                    <option value="9" data-code="44"> 英国  +44</option>
                                    <option value="10" data-code="65"> 新加坡  +65</option>
                                    <option value="11" data-code="60"> 马来西亚  +60</option>
                                    <option value="12" data-code="66"> 泰国  +66</option>
                                    <option value="13" data-code="84"> 越南  +84</option>
                                    <option value="14" data-code="63"> 菲律宾  +63</option>
                                    <option value="15" data-code="62"> 印度尼西亚  +62</option>
                                    <option value="16" data-code="39"> 意大利  +39</option>
                                    <option value="17" data-code="7"> 俄罗斯  +7</option>
                                    <option value="18" data-code="64"> 新西兰  +64</option>
                                    <option value="19" data-code="31"> 荷兰  +31</option>
                                    <option value="20" data-code="46"> 瑞典  +46</option>
                                    <option value="36" data-code="61"> 澳大利亚  +61</option>
                                    <option value="21" data-code="380"> 乌克兰  +380</option>
                                    <option value="91" data-code="33"> 法国  +33</option>
                                    <option value="96" data-code="49"> 德国  +49</option>
                                    <option value="22" data-code="93"> 阿富汗  +93</option>
                                    <option value="25" data-code="355"> 阿尔巴尼亚  +355</option>
                                    <option value="26" data-code="213"> 阿尔及利亚  +213</option>
                                    <option value="27" data-code="1684"> 东萨摩亚(美)  +1684</option>
                                    <option value="28" data-code="376"> 安道尔  +376</option>
                                    <option value="29" data-code="244"> 安哥拉  +244</option>
                                    <option value="30" data-code="1264"> 安圭拉岛(英)  +1264</option>
                                    <option value="32" data-code="1268"> 安提瓜和巴布达  +1268</option>
                                    <option value="33" data-code="54"> 阿根廷  +54</option>
                                    <option value="34" data-code="374"> 亚美尼亚  +374</option>
                                    <option value="35" data-code="297"> 阿鲁巴岛  +297</option>
                                    <option value="37" data-code="43"> 奥地利  +43</option>
                                    <option value="38" data-code="994"> 阿塞拜疆  +994</option>
                                    <option value="39" data-code="973"> 巴林  +973</option>
                                    <option value="41" data-code="880"> 孟加拉国  +880</option>
                                    <option value="42" data-code="1246"> 巴巴多斯  +1246</option>
                                    <option value="43" data-code="375"> 白俄罗斯  +375</option>
                                    <option value="44" data-code="32"> 比利时  +32</option>
                                    <option value="45" data-code="501"> 伯利兹  +501</option>
                                    <option value="46" data-code="229"> 贝宁  +229</option>
                                    <option value="47" data-code="1441"> 百慕大群岛(英)  +1441</option>
                                    <option value="48" data-code="975"> 不丹  +975</option>
                                    <option value="49" data-code="591"> 玻利维亚  +591</option>
                                    <option value="50" data-code="387"> 波斯尼亚和黑塞哥维那  +387</option>
                                    <option value="51" data-code="267"> 博茨瓦纳  +267</option>
                                    <option value="52" data-code="55"> 巴西  +55</option>
                                    <option value="53" data-code="359"> 保加利亚  +359</option>
                                    <option value="54" data-code="226"> 布基纳法索  +226</option>
                                    <option value="55" data-code="257"> 布隆迪  +257</option>
                                    <option value="56" data-code="237"> 喀麦隆  +237</option>
                                    <option value="58" data-code="238"> 佛得角  +238</option>
                                    <option value="59" data-code="1345"> 开曼群岛(英)  +1345</option>
                                    <option value="60" data-code="236"> 中非  +236</option>
                                    <option value="61" data-code="235"> 乍得  +235</option>
                                    <option value="62" data-code="56"> 智利  +56</option>
                                    <option value="63" data-code="61"> 圣诞岛  +61</option>
                                    <option value="64" data-code="61"> 科科斯岛  +61</option>
                                    <option value="65" data-code="57"> 哥伦比亚  +57</option>
                                    <option value="66" data-code="269"> 科摩罗  +269</option>
                                    <option value="67" data-code="242"> 刚果  +242</option>
                                    <option value="68" data-code="682"> 科克群岛(新)  +682</option>
                                    <option value="69" data-code="506"> 哥斯达黎加  +506</option>
                                    <option value="70" data-code="385"> 克罗地亚  +385</option>
                                    <option value="71" data-code="53"> 古巴  +53</option>
                                    <option value="72" data-code="357"> 塞浦路斯  +357</option>
                                    <option value="73" data-code="420"> 捷克  +420</option>
                                    <option value="75" data-code="45"> 丹麦  +45</option>
                                    <option value="77" data-code="253"> 吉布提  +253</option>
                                    <option value="78" data-code="1767"> 多米尼克国  +1767</option>
                                    <option value="79" data-code="1809"> 多米尼加共和国  +1809</option>
                                    <option value="80" data-code="593"> 厄瓜多尔  +593</option>
                                    <option value="81" data-code="20"> 埃及  +20</option>
                                    <option value="82" data-code="503"> 萨尔瓦多  +503</option>
                                    <option value="83" data-code="240"> 赤道几内亚  +240</option>
                                    <option value="84" data-code="291"> 厄立特里亚  +291</option>
                                    <option value="85" data-code="372"> 爱沙尼亚  +372</option>
                                    <option value="86" data-code="251"> 埃塞俄比亚  +251</option>
                                    <option value="87" data-code="500"> 福克兰群岛  +500</option>
                                    <option value="88" data-code="298"> 法罗群岛(丹)  +298</option>
                                    <option value="89" data-code="679"> 斐济  +679</option>
                                    <option value="90" data-code="358"> 芬兰  +358</option>
                                    <option value="92" data-code="689"> 法属波里尼西亚  +689</option>
                                    <option value="93" data-code="241"> 加蓬  +241</option>
                                    <option value="94" data-code="220"> 冈比亚  +220</option>
                                    <option value="95" data-code="995"> 格鲁吉亚  +995</option>
                                    <option value="97" data-code="233"> 加纳  +233</option>
                                    <option value="98" data-code="350"> 直布罗陀(英)  +350</option>
                                    <option value="99" data-code="30"> 希腊  +30</option>
                                    <option value="100" data-code="299"> 格陵兰岛  +299</option>
                                    <option value="101" data-code="1473"> 格林纳达  +1473</option>
                                    <option value="102" data-code="590"> 瓜德罗普岛(法)  +590</option>
                                    <option value="103" data-code="1671"> 关岛(美)  +1671</option>
                                    <option value="104" data-code="502"> 危地马拉  +502</option>
                                    <option value="105" data-code="224"> 几内亚  +224</option>
                                    <option value="106" data-code="245"> 几内亚比绍  +245</option>
                                    <option value="108" data-code="592"> 圭亚那  +592</option>
                                    <option value="109" data-code="509"> 海地  +509</option>
                                    <option value="110" data-code="504"> 洪都拉斯  +504</option>
                                    <option value="111" data-code="36"> 匈牙利  +36</option>
                                    <option value="112" data-code="354"> 冰岛  +354</option>
                                    <option value="113" data-code="91"> 印度  +91</option>
                                    <option value="114" data-code="98"> 伊郎  +98</option>
                                    <option value="115" data-code="964"> 伊拉克  +964</option>
                                    <option value="116" data-code="353"> 爱尔兰  +353</option>
                                    <option value="118" data-code="972"> 以色列  +972</option>
                                    <option value="119" data-code="225"> 科特迪瓦  +225</option>
                                    <option value="120" data-code="1876"> 牙买加  +1876</option>
                                    <option value="122" data-code="962"> 约旦  +962</option>
                                    <option value="123" data-code="855"> 柬埔塞  +855</option>
                                    <option value="124" data-code="7"> 哈萨克斯坦  +7</option>
                                    <option value="125" data-code="254"> 肯尼亚  +254</option>
                                    <option value="126" data-code="686"> 基里巴斯  +686</option>
                                    <option value="127" data-code="965"> 科威特  +965</option>
                                    <option value="128" data-code="996"> 吉尔吉斯斯坦  +996</option>
                                    <option value="129" data-code="856"> 老挝  +856</option>
                                    <option value="130" data-code="371"> 拉脱维亚  +371</option>
                                    <option value="131" data-code="961"> 黎巴嫩  +961</option>
                                    <option value="132" data-code="266"> 莱索托  +266</option>
                                    <option value="133" data-code="231"> 利比里亚  +231</option>
                                    <option value="134" data-code="218"> 利比亚  +218</option>
                                    <option value="135" data-code="423"> 列支敦士登  +423</option>
                                    <option value="136" data-code="370"> 立陶宛  +370</option>
                                    <option value="137" data-code="352"> 卢森堡  +352</option>
                                    <option value="138" data-code="389"> 马其顿  +389</option>
                                    <option value="139" data-code="261"> 马达加斯加  +261</option>
                                    <option value="140" data-code="265"> 马拉维  +265</option>
                                    <option value="141" data-code="960"> 马尔代夫  +960</option>
                                    <option value="142" data-code="223"> 马里  +223</option>
                                    <option value="143" data-code="356"> 马耳他  +356</option>
                                    <option value="144" data-code="692"> 马绍尔群岛  +692</option>
                                    <option value="145" data-code="596"> 马提尼克(法)  +596</option>
                                    <option value="146" data-code="222"> 毛里塔尼亚  +222</option>
                                    <option value="147" data-code="230"> 毛里求斯  +230</option>
                                    <option value="148" data-code="262"> 马约特岛  +262</option>
                                    <option value="149" data-code="52"> 墨西哥  +52</option>
                                    <option value="150" data-code="691"> 密克罗尼西亚(美)  +691</option>
                                    <option value="152" data-code="377"> 摩纳哥  +377</option>
                                    <option value="153" data-code="976"> 蒙古  +976</option>
                                    <option value="155" data-code="1664"> 蒙特塞拉特岛(英)  +1664</option>
                                    <option value="156" data-code="212"> 摩洛哥  +212</option>
                                    <option value="157" data-code="258"> 莫桑比克  +258</option>
                                    <option value="158" data-code="95"> 缅甸  +95</option>
                                    <option value="159" data-code="264"> 纳米比亚  +264</option>
                                    <option value="160" data-code="674"> 瑙鲁  +674</option>
                                    <option value="161" data-code="977"> 尼泊尔  +977</option>
                                    <option value="162" data-code="599"> 荷属安的列斯群岛  +599</option>
                                    <option value="163" data-code="687"> 新喀里多尼亚群岛(法)  +687</option>
                                    <option value="164" data-code="505"> 尼加拉瓜  +505</option>
                                    <option value="165" data-code="227"> 尼日尔  +227</option>
                                    <option value="166" data-code="234"> 尼日利亚  +234</option>
                                    <option value="167" data-code="683"> 纽埃岛(新)  +683</option>
                                    <option value="168" data-code="672"> 诺福克岛(澳)  +672</option>
                                    <option value="169" data-code="850"> 朝鲜  +850</option>
                                    <option value="170" data-code="1670"> 马里亚纳群岛  +1670</option>
                                    <option value="171" data-code="47"> 挪威  +47</option>
                                    <option value="172" data-code="968"> 阿曼  +968</option>
                                    <option value="173" data-code="92"> 巴基斯坦  +92</option>
                                    <option value="174" data-code="680"> 帕劳(美)  +680</option>
                                    <option value="175" data-code="507"> 巴拿马  +507</option>
                                    <option value="176" data-code="675"> 巴布亚新几内亚  +675</option>
                                    <option value="177" data-code="595"> 巴拉圭  +595</option>
                                    <option value="178" data-code="51"> 秘鲁  +51</option>
                                    <option value="179" data-code="48"> 波兰  +48</option>
                                    <option value="180" data-code="351"> 葡萄牙  +351</option>
                                    <option value="181" data-code="1"> 波多黎各(美)  +1</option>
                                    <option value="182" data-code="974"> 卡塔尔  +974</option>
                                    <option value="183" data-code="373"> 摩尔多瓦  +373</option>
                                    <option value="184" data-code="262"> 留尼汪岛  +262</option>
                                    <option value="185" data-code="40"> 罗马尼亚  +40</option>
                                    <option value="186" data-code="250"> 卢旺达  +250</option>
                                    <option value="187" data-code="247"> 阿森松(英)  +247</option>
                                    <option value="188" data-code="290"> 圣赫勒拿  +290</option>
                                    <option value="189" data-code="1869"> 圣克里斯托弗和尼维斯  +1869</option>
                                    <option value="190" data-code="1758"> 圣卢西亚  +1758</option>
                                    <option value="191" data-code="508"> 圣皮埃尔岛及密克隆岛  +508</option>
                                    <option value="192" data-code="1784"> 圣文森特岛(英)  +1784</option>
                                    <option value="193" data-code="685"> 西萨摩亚  +685</option>
                                    <option value="194" data-code="378"> 圣马力诺  +378</option>
                                    <option value="195" data-code="239"> 圣多美和普林西比  +239</option>
                                    <option value="196" data-code="966"> 沙特阿拉伯  +966</option>
                                    <option value="197" data-code="221"> 塞内加尔  +221</option>
                                    <option value="199" data-code="248"> 塞舌尔  +248</option>
                                    <option value="200" data-code="232"> 塞拉利昂  +232</option>
                                    <option value="202" data-code="421"> 斯洛伐克  +421</option>
                                    <option value="203" data-code="386"> 斯洛文尼亚  +386</option>
                                    <option value="204" data-code="677"> 所罗门群岛  +677</option>
                                    <option value="205" data-code="252"> 索马里  +252</option>
                                    <option value="206" data-code="27"> 南非  +27</option>
                                    <option value="208" data-code="34"> 西班牙  +34</option>
                                    <option value="209" data-code="94"> 斯里兰卡  +94</option>
                                    <option value="210" data-code="249"> 苏丹  +249</option>
                                    <option value="211" data-code="597"> 苏里南  +597</option>
                                    <option value="213" data-code="268"> 斯威士兰  +268</option>
                                    <option value="214" data-code="41"> 瑞士  +41</option>
                                    <option value="215" data-code="963"> 叙利亚  +963</option>
                                    <option value="216" data-code="992"> 塔吉克斯坦  +992</option>
                                    <option value="217" data-code="1242"> 巴哈马国  +1242</option>
                                    <option value="218" data-code="14397"> 梵蒂冈  +14397</option>
                                    <option value="220" data-code="228"> 多哥  +228</option>
                                    <option value="222" data-code="676"> 汤加  +676</option>
                                    <option value="223" data-code="1868"> 特立尼达和多巴哥  +1868</option>
                                    <option value="224" data-code="216"> 突尼斯  +216</option>
                                    <option value="225" data-code="90"> 土耳其  +90</option>
                                    <option value="226" data-code="993"> 土库曼斯坦  +993</option>
                                    <option value="227" data-code="1649"> 特克斯和凯科斯群岛(英)  +1649</option>
                                    <option value="228" data-code="688"> 图瓦卢  +688</option>
                                    <option value="229" data-code="256"> 乌干达  +256</option>
                                    <option value="231" data-code="44"> 英国  +44</option>
                                    <option value="232" data-code="255"> 坦桑尼亚  +255</option>
                                    <option value="234" data-code="598"> 乌拉圭  +598</option>
                                    <option value="235" data-code="998"> 乌兹别克斯坦  +998</option>
                                    <option value="236" data-code="678"> 瓦努阿图  +678</option>
                                    <option value="237" data-code="58"> 委内瑞拉  +58</option>
                                    <option value="238" data-code="1340"> 维尔京群岛(英)  +1340</option>
                                    <option value="242" data-code="967"> 也门  +967</option>
                                    <option value="243" data-code="381"> 南斯拉夫  +381</option>
                                    <option value="244" data-code="260"> 赞比亚  +260</option>
                                    <option value="245" data-code="259"> 桑给巴尔  +259</option>
                                    <option value="246" data-code="263"> 津巴布韦  +263</option>
                            </select>
            <div class="item-warp">
            <input name="mobile" style="height:26px" class="i-text tsl hh" aria-label="手机号码" type="text" id="J_Mobile" placeholder="电话号码、手机号码必须填一项" data-inner_placeholder="d_p_input_inner_mobile" data-pattern="^\d{6,20}$" data-ph="电话号码、手机号码必须填一项" data-msg="d_p_mobile_msg" value="{{$modf['gphone']}}">
            </div>

            <div class="msg hide" id="J_MsgMobile">
                <i></i>

                <div class="msg-cnt"></div>
            </div>
        </div>
        
        <div class="item item-set-default" id="j_ItemSetDefault">
            <input type="checkbox" class="i-chk" name="defaultAddress" id="J_SetDefault"> <label for="J_SetDefault" class="tsl" data-phase-id="d_p_saveAsDefaultAddress">设置为默认收货地址</label>
        </div>
        <div class="item">
        @if(count($info['address']) >=10 )
            <button class=" btn  tsl" data-phase-id="d_p_saveSubmit" style="background:#666" disabled="disabled">保存</button>
        @else
 			<button   class=" btn tsl sub" data-phase-id="d_p_saveSubmit">保存</button>
        @endif
            <div class="msg hide" id="J_MsgSubmit">
                <i></i>
                <div class="msg-cnt"></div>
            </div>
        </div>
    </form>
</div>









        
            <div class="tbl-deliver-address">
                        <div class="caption mtb10">已保存了{{count($info['address'])}}条地址，还能保存{{10-count($info['address'])}}条地址</div>
                            <div class="msg-box mtb10">
                    <div class="msg msg-attention show">
                        <i></i>

                        <div class="msg-cnt">为提升收货速度和准确性，请点击下方地址列表进行升级。
                        </div>
                    </div>
                </div>

                <table border="0" cellspacing="0" cellpadding="0" class="tbl-main">
                    <colgroup>
                        <col class="col-man">
                        <col class="col-area">
                        <col class="col-address">
                        <col class="col-postcode">
                        <col class="col-phone">
                        <col class="col-actions">
                    </colgroup>
                    <tbody>
                    <tr class="thead-tbl-grade">
                        <th>收货人</th>
                        <th>所在地区</th>
                        <th>详细地址</th>
                        <th>邮编</th>
                        <th>电话/手机</th>
                        <th>操作</th>
                        <th></th>
                    </tr>

                    @foreach($info['address'] as $address)
                    <tr class="thead-tbl-address back">
                        <td style="height:40px" >{{$address['gname']}}</td>

                        <td style="height:40px">{{$address['area']}}</td>

                        <td style="height:40px">{{$address['faddress']}}</td>
						@if($address['zcode'] == 0)
						<td style="height:40px">000000</td>
						@else
                        <td style="height:40px">{{$address['zcode']}}</td>
						@endif
                        <td style="height:40px">{{$address['gphone']}}</td>

                        <td style="height:40px"><a href="/deliver_address/{{$address['aid']}}">修改</a> | <a href="/adef/del/{{$address['aid']}}" class="del">删除</a></td>
                        @if($address['def'] == 1)
                        <td style="height:40px">
						<span style="padding:2px 5px;border-color:#ff3800;border-radius:3px;background:#ffd6cc;color:#f30">默认地址</span>
						</td>
						@elseif($address['def'] == 0)
						<td style="height:40px" class="thead-tbl-status">
                        <a id="def" class="note implicit hide" href="/adef/{{$address['aid']}}" data-spm-anchor-id="0.0.0.0">设为默认</a>
                        <input type="hidden" name="uid" value="">
                        </td>
                        @endif
                                
                      </tr>
                      @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>

    <div class="col-sub">
                    <style>
        #Content .main-wrap,
        #content .main-wrap {
            margin-left: 139px;
        }

        #Content .col-sub,
        #content .col-sub {
            width: 139px;
            margin-left: -100%;
            *display: inline;
        }
    </style>
    
  @include('home.userinfo.left')


        <!-- 注释不能删,解决ie6下面的一个bug -->
    </div>
    <div class="feedback J_Feedback" style="margin-top: -24px;"><span><a href="//survey.taobao.com/survey/4gyytUUDx" target="_blank" data-spm-anchor-id="a210c.1.0.0">意见反馈</a><s></s></span></div>
</div>


	    <!-- 页面content内容结束 -->		
		
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
        <span>© 2015 Taobao.com 版权所有</span>
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
  background: url(./images/T1MMPaXkNjXXaXezbh-48-70.png) no-repeat;
  _background: url(./images/T1XgzaXX0kXXaXezbh-48-70.png) no-repeat;
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
  background: url(./images/T1I_56Xl0wXXXXXXXX-104-1.png) no-repeat;
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
	<div id="server-num">mbis010179017042.et2</div>
</div>
<!-- end vmcommon -->

	</div>

<div id="immediate-help-trigger"><a target="_blank" href="//service.taobao.com/support/minerva/minerva_ask.htm?minervasource=144&sURL=http%3A%2F%2Fmember1.taobao.com%2Fmember%2Ffresh%2Faccount_security.htm%3Fspm%3Da1z09.2.a210b.d1000356.Ts9SzK%26tracelog%3Dmytaobaonavsetup%26nekot%3D1479266586797" title="即时帮助"></a></div><div id="J_UmppUserContainer" style="height:1px;width:1px;overflow:hidden;position:absolute;bottom:1px"><embed src="http://g.alicdn.com/tbc/umpp/1.4.35/trinity.swf" width="1" height="1" id="ks-flash-17" name="umpp-trinity-name" type="application/x-shockwave-flash" allowscriptaccess="always" flashvars="jsentry=_umpp_trinity_&swfid=UM_zzz12285700781479268685892&group=zzz1228570078"></div></body></html>