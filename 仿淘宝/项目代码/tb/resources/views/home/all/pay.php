<html><head>
<meta charset="GBK">
<title>支付宝 - 网上支付 安全快速！</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="中国最大的第三方电子支付服务提供商">
<link rel="shortcut icon" href="https://i.alipayobjects.com/common/favicon/favicon.ico" type="image/x-icon">
<!-- FD:20:cashier/config/config.vm:START --><!-- FD:20:cashier/config/config.vm:239:config/config.schema:收银台配置:START --> 
    <!-- FD:20:cashier/config/config.vm:239:config/config.schema:收银台配置:END -->
<!-- FD:20:cashier/config/config.vm:END --> 
<link href="https://a.alipayobjects.com" rel="dns-prefetch">
<link href="https://app.alipay.com" rel="dns-prefetch">
<link href="https://my.alipay.com" rel="dns-prefetch">
<link href="https://lab.alipay.com" rel="dns-prefetch">
<link href="https://cashier.alipay.com" rel="dns-prefetch">
<link href="https://financeprod.alipay.com" rel="dns-prefetch">
<link href="https://shenghuo.alipay.com" rel="dns-prefetch">
<!-- uitpl:/component/trackerTime.vm -->
<!-- FD:106:alipay/tracker/monitor.vm:START --><!-- FD:106:alipay/tracker/sai_seer.vm:START -->
<!-- FD:106:alipay/tracker/sai_seer.vm:END --><!-- FD:106:alipay/tracker/monitor.vm:END -->
<!-- FD:106:alipay/tracker/seajs.vm:START --><!-- FD:106:alipay/tracker/seajs.vm:782:seajs.schema:seajs-静态文件地址:START -->
<!-- monitor 防错代码 -->
<!-- seajs以及插件 -->
<!-- seajs config 配置 -->
<!-- 兼容原有的 plugin-i18n 写法 -->
<!-- https://github.com/seajs/seajs/blob/1.3.1/src/plugins/plugin-i18n.js -->
<!-- 路由旧 ID，解决 seajs.use('select/x.x.x/select') 的历史遗留问题 -->
<!-- FD:106:alipay/tracker/seajs.vm:782:seajs.schema:seajs-静态文件地址:END --><!-- FD:106:alipay/tracker/seajs.vm:END -->
<!-- FD:106:alipay/tracker/tracker_time.vm:START --><!-- FD:106:alipay/tracker/tracker_time.vm:784:tracker_time.schema:全站 tracker 开关:START -->
<!-- FD:106:alipay/tracker/tracker_time.vm:784:tracker_time.schema:全站 tracker 开关:END -->
<!-- FD:106:alipay/tracker/tracker_time.vm:END -->  
<style>
@font-face {
  font-family: 'cashier';
  src: url("//at.alicdn.com/t/font_1434596335_6737535.eot"); /* IE9*/
  src: url("//at.alicdn.com/t/font_1434596335_6737535.eot?#iefix") format('embedded-opentype'), /* IE6-IE8 */
  url("//at.alicdn.com/t/font_1434596335_6737535.woff") format('woff'), /* chrome、firefox */
  url("//at.alicdn.com/t/font_1434596335_6737535.ttf") format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url("//at.alicdn.com/t/font_1434596335_6737535.svg#cashier") format('svg'); /* iOS 4.1- */
}
.iconfont {
    font-family:"cashier" !important;
    font-style: normal;
    font-weight: normal;
    cursor: default;
    -webkit-font-smoothing: antialiased;
}
</style>  
<link charset="utf-8" rel="stylesheet" href="./css/j_pay_2.0.11_lightpay.css" media="all">
<style>
  .icon-gray {
  filter: url("https://cashiergtj.alipay.com:443/filters.svg#grayscale");
  filter:gray\9;
  -webkit-filter: grayscale(90%);
}
.mfe-tip-warp{
    width: 320px;
}
.mfe-tip-title{
  line-height: 20px;
}

.manage-item .fn-green{
  color:#393;
}
/* 超限科学引导开始 */
.extra-item .ui-button-guide {
  color: #000;
  background-color: #fafafa;
  padding: 0 10px;
  font-size: 12px;
  font-weight: normal;
  margin-top: 6px;
  margin-bottom: 10px;
}
.extra-item .ui-tipbox-recommend {
  color: #fff;
  background-color: #d9524e;
  padding: 1px 4px 2px 4px;
  margin-right: 4px;
  border-radius: 2px;
}
/* 超限科学引导结束 */


/* 账户渠道开始*/
  .account-chls {
    margin-bottom: 20px;
    padding: 0 20px;
  }
  .account-chl {
    position: relative;
    height: 20px;
    margin-bottom: 1px;
    padding: 8px 20px 8px 18px;
  }
  .account-chl-used {
    background: #E9F0FE;
  }
  .account-chl-disabled {
    color: #999;
  }
  .account-chl .iconfont {
    font-size: 14px;
  }
  .account-chl em {
    font-weight: bold;
  }
  .account-amount {
    position: absolute;
    right: 39px;
    top: 9px;
    line-height:18px;
  }
  .account-amount em{
    font-size: 14px;
    color: #f60;
    font-weight:700;
  }
  /* 购物卡 */
  .account-card {
    margin-right: 4px;
    padding: 2px 4px;
    border: 1px dashed #bbcbef;
    background: #fff;
  }
  .account-card-used {
    padding: 1px 4px;
    border: 2px solid #ffac21;
  }
  .account-card-err {
    border-color: #f00;
  }
  .account-card em{
    font-weight: bold;
  }
  .account-card i {
    color: #999;
  }
/* 账户渠道结束*/

.limit-result-off{margin-left:8px;}
.limit-result-off{
  display:none
}

.ch-limiting .icon-limit-exceed{
  display:inline;
}
.action-rt-gray .limit-result-off{
  display:none
}

/* 分期用到 */
.ui-select-trigger-disabled {
    background-image: -moz-linear-gradient(center top , #FBFBFB, #F3F3F3);
    border-color: #CCCCCC;
    color: #B2B2B2;
    cursor: default;
}


/* 渠道加载 loading */
.action-rt {
  line-height: 14px;
  height: 14px;
  font-size: 12px !important;
  background-color: #FFFFFF !important;
  border: 1px solid #1E73C1;
  color: #1E73C1;
  margin-right: 2px;
  display: inline-block;
  zoom: 1;
}

.action-rt .action-rt-type {
  background-color: #1E73C1;
  display: inline-block;
  color: #ffffff;
  height: 14px;
  line-height: 14px;
  padding: 0 2px;
}

.action-rt .rt-discount {
  color: #1E73C1;
  padding: 0;
  background: none;
}
.action-rt-gray .action-rt {
  border: 0;
  background-color: #cccccc !important;
  color: #FFFFFF !important;
}
.action-rt-gray .action-rt-type,
.action-rt-gray .rt-discount {
  background-color: #cccccc !important;
  color: #FFFFFF !important;
}

.channel-label .ui-fm-error .ui-fm-explain {
  color: #FF5243;
  padding: 3px 0 0;
  padding: 5px 0 0 \9;
  _padding-top: 3px;
  _margin-left: 3px;
  font-size: 12px;
  padding-left: 20px;
  background: url(https://i.alipayobjects.com/e/201208/3JRI1gkfUX.png) no-repeat -138px -83px;
}
</style>
<style type="text/css" class="iconStyle">.banklogo-ICBC_s{background-color:#fff;background-repeat:no-repeat;background-position:0 0;}
.banklogo-ICBC_s{background-image:url(https://as.alipayobjects.com/g/cashier-wd/bank-logo/1.0.18/ICBC_s.png)}</style><style></style><link charset="utf-8" crossorigin="anonymous" rel="stylesheet" href="./css/j_pay_201402_2ACTshL8Vh.css"></head>
<body>

    <div id="header">
    <div class="header-container fn-clear">
        <div class="header-title">
            <span class="logo">支付宝<s></s></span>
                        <span class="logo-title">我的收银台</span>
                    </div>
                            <div class="ui-select fn-left switchTemplate" id="switchTemplate">
	<a href="#" class="ui-select-text" seed="switchTemplate-link" smartracker="on">
				<span>中国大陆版</span>
		 <i class="iconfont">?</i>
	</a>
	<ul class="ui-select-content">
		<li class="ui-select-item">
			<a href="https://cashiergtj.alipay.com:443/standard/payment/cashier.htm?outBizNo=P201611160295140858&amp;timeStamp=1479259251881&amp;bizIdentity=merge10001&amp;orderId=1116e60752bafed8da573ciercNN9580&amp;country=CN" seed="-CN">中国大陆版</a>
		</li>
				<li class="ui-select-item">
			<a href="/standard/common/dispatch.htm?orderId=1116e60752bafed8da573ciercNN9580&amp;target=HKFOREIGNPAY" seed="switchTemplate-linkT1" smartracker="on">香港版</a>
		</li>
						<li class="ui-select-item">
			<a href="/standard/common/dispatch.htm?orderId=1116e60752bafed8da573ciercNN9580&amp;target=TWFOREIGNPAY" seed="switchTemplate-linkT2" smartracker="on">台湾版</a>
		</li>
						<li class="ui-select-item">
			<a href="/standard/common/dispatch.htm?orderId=1116e60752bafed8da573ciercNN9580&amp;target=FOREIGNPAY" seed="switchTemplate-linkT3" smartracker="on">海外其他地区版</a>
		</li>
			</ul>
</div>
                <ul class="header-right">
                            <li class="account-id">支付宝账户：<span id="J-accountId">18875084378</span></li>
                                                                                                <li><a target="_blank" seed="pay-by-standard" href="https://shenghuo.alipay.com/peerpaycore/prePeerPayApply.htm?biz_no=P201611160295140858&amp;biz_type=BATCHPAY">找人代付</a></li>
                        <li>唯一热线：95188</li>
        </ul>
    </div>
</div>
<!-- FD:20:cashier/common/notice.vm:START --><!-- FD:20:cashier/common/notice.vm:65:common/notice.schema:公告列表:START -->
  
    
    
    
    
    
    
    
    
<!-- FD:20:cashier/common/notice.vm:65:common/notice.schema:公告列表:END -->

<!-- FD:20:cashier/common/notice.vm:END --><!--[if lte IE 8]>

<![endif]-->
              <div id="content">
  








        <div id="J_Order" class="order order-with-qr" data-config="{&quot;codeInfo&quot;:&quot;https://qr.alipay.com/_d?_b=TRADE_DY&amp;mergeOrder=true&amp;tradeNo=P201611160295140858&quot;,&quot;isNeedPollResult&quot;:&quot;true&quot;,&quot;isNeedLongPoll&quot;:&quot;true&quot;,&quot;orderId&quot;:&quot;1116e60752bafed8da573ciercNN9580&quot;,&quot;outBizNo&quot;:&quot;P201611160295140858&quot;,&quot;pollingUrl&quot;:&quot;https://webpushgw.alipay.com/polling&quot;,&quot;barCodeSign&quot;:&quot;b7f199eb0cf9c951b36a0b08fd72e6b8&quot;,&quot;extraData&quot;:&quot;merge10001|true||&quot;,&quot;longPollingQueryMaxTimes&quot;:&quot;40&quot;,&quot;longPollingQueryPace&quot;:&quot;30000&quot;,&quot;size&quot;: 100 ,&quot;isNew&quot;:&quot;true&quot;}">
    <div class="order-wrapper">
                    <div class="qr J_APop" data-arrowposition="10" data-target="J_QrTip">
                                <div id="J_QrWrapper" class="qr-wrapper"><canvas width="100" height="100" style="width: 100px; height: 100px;"></canvas></div>
            </div>
            
        
        <div class="order-title">
            
            
            
                        合并｜2笔订单
                    </div>


                            
        <div class="order-amount">
            <div class="order-real-amount">
                                                <em class="">299.50</em>
                元
                                    <i class="iconfont" title="刷新">
                                            <a href="http://cashiergtj.alipay.com/standard/lightpay/lightPayCashier.htm?orderId=1116e60752bafed8da573ciercNN9580&amp;bizIdentity=merge10001&amp;outBizNo=P201611160295140858&amp;timeStamp=1479259251881&amp;country=CN" class="order-reload" seed="get_price">?</a>
                                        </i>
                            </div>

                                            </div>
        <a id="J_OrderExtTrigger" class="order-ext-trigger" href="#" seed="order-detail-more">
            <i class="iconfont" title="记录">?</i>
            订单详情
        </a>
        <p id="J_OrderExtLoading" class="order-ext-loading fn-hide">
            加载订单详情信息...
                            <a href="http://cashiergtj.alipay.com/standard/lightpay/lightPayCashier.htm?orderId=1116e60752bafed8da573ciercNN9580&amp;bizIdentity=merge10001&amp;outBizNo=P201611160295140858&amp;timeStamp=1479259251881&amp;country=CN" seed="refresh-account">刷新</a>
                    </p>
        <div id="J_OrderExt" class="order-ext fn-hide" data-url="https://cashiergtj.alipay.com:443/tile/service/standard:orderDetailAsyncProxy.tile?outBizNo=P201611160295140858&amp;outRelationId=&amp;bizIdentity=merge10001&amp;signData=c220d510e9a4d1bd8531413aa50c19fe&amp;orderId=1116e60752bafed8da573ciercNN9580"></div>
    </div>
</div>
  <!-- CMS:收银台cms/快速付款/快付大促主引导tip开始:fastpay/fastpayDacuMaintip.vm --><!-- CMS:收银台cms/快速付款/快付大促主引导tip结束:fastpay/fastpayDacuMaintip.vm -->  <div id="J-payMethod" class="main-container">
        <div id="J-rcPaymentDisabled"></div>
        
    <form name="expressFastPayFrom" id="lightPayForm" action="" method="post">
      	<input type="hidden" name="_form_token" value="9a7a7c85613f480da15edb815fda663fRZ12">


      <div id="J-rcChannels" data-url="data.html"><div data-reactid=".0"><ul id="J_MarketinglList" data-reactid=".0.0"></ul><ul class="saved-card-list" id="J_SavecardList" data-reactid=".0.1"><li class="channel-bank row-container fn-clear row-container-focus" data-reactid=".0.1.$ch0"><div class="row-basic fn-clear" data-reactid=".0.1.$ch0.$/=10">
	  <label class="channel-label" for="icbc906-0" data-reactid=".0.1.$ch0.$/=10.0"><span class="pay-amount" data-reactid=".0.1.$ch0.$/=10.0.0"><span class="amount" data-reactid=".0.1.$ch0.$/=10.0.0.0"><span data-reactid=".0.1.$ch0.$/=10.0.0.0.0">支付</span><em class="amount-font-R16" data-reactid=".0.1.$ch0.$/=10.0.0.0.3">299.50</em><span data-reactid=".0.1.$ch0.$/=10.0.0.0.4"> 元</span></span><span data-reactid=".0.1.$ch0.$/=10.0.0.2"></span></span><span class="channel-tit channel-icon icon banklogo-ICBC_s" data-id="ICBC_s" data-reactid=".0.1.$ch0.$/=10.0.1"></span><span class="channel-name" title="中国工商银行" data-reactid=".0.1.$ch0.$/=10.0.2">中国工商银行</span><span class="card-number" data-reactid=".0.1.$ch0.$/=10.0.3">**4958</span><span class="card-type" data-reactid=".0.1.$ch0.$/=10.0.4">储蓄卡 | 快捷</span><span class="card-info" data-reactid=".0.1.$ch0.$/=10.0.5"></span></label>
	  
	  <input checked="" class="channel-input" id="icbc906-0" name="apiCode" type="radio" data-reactid=".0.1.$ch0.$/=10.1" seed="rowBasic-icbc9060" smartracker="on"></div><div class="row-extra fn-hide" data-reactid=".0.1.$ch0.$/=11"></div></li></ul><div class="manage-list fn-clear" data-reactid=".0.2"><a class="manage-item manage-more fn-left" data-seed="lightpay-more-savedCard" href="#" data-reactid=".0.2.0" seed="manageList-manageItem" smartracker="on"><span data-reactid=".0.2.0.0">其他付款方式 </span></a><a class="J_XBox manage-item manage-item-xbox fn-left" data-seed="lightpay-use-newCard" href="https://cashiergtj.alipay.com:443/standard/fastpay/useNewCard.htm?orderId=1116e60752bafed8da573ciercNN9580" data-reactid=".0.2.1" seed="manageList-J_XBox" smartracker="on">添加快捷/网银付款</a></div></div></div>
    
            
              <div id="J-security" class="">
                    <input type="hidden" name="securityId" id="securityId" value="web|cashier_payment_3|e87be6b4-a7c4-41af-98bd-43f9458a2a29RZ12">
<div class="ui-securitycore ui-securitycore-tip J-securitycoreTip " data-link-in-xbox="">

            
  <div class="ui-form-item ui-form-item-success">
    <div class="ui-form-explain">你在安全的环境中，请放心使用！</div>
              <div class="J-checkResult fn-hide" data-status="">你在安全的环境中，请放心使用！</div>
        </div>

</div>  
<!-- Powered by Alipay Security -->  
<div class="ui-securitycore J-securitycoreMain" data-request="web|cashier_payment_3|e87be6b4-a7c4-41af-98bd-43f9458a2a29RZ12" data-system="cashier" data-server="https://securitycore.alipay.com" data-status="" data-extension="false" data-orderid="1116e60752bafed8da573ciercNN9580">

    <input style="display:none" seed="JSecuritycoreMain-ipt" smartracker="on">
  <input type="password" style="display:none" seed="JSecuritycoreMain-iptT1" smartracker="on">
<style type="text/css">
  .edit-section .edit-link a {
    line-height: 24px;
  }
</style>

                                    

    <div class="edit-section">
      <div class="ui-form-item">
        <label class="ui-label" for="payPassword">
                    支付宝支付密码：
        </label>

                <span class="standardPwdContainer" style="display:none">
          <input type="password" tabindex="1" id="payPassword_input" name="payPassword_input" class="ui-input" oncontextmenu="return false" onpaste="return false" oncopy="return false" oncut="return false" autocomplete="off" seed="standardPwdContainer-payPassword_input" smartracker="on">
        </span>
        <span class="alieditContainer" id="payPassword_container"><input type="password" tabindex="1" id="payPassword_rsainput" name="payPassword_rsainput" class="ui-input i-text sixDigitPassword" oncontextmenu="return false" onpaste="return false" oncopy="return false" oncut="return false" autocomplete="off" value="" maxlength="6" minlength="6" style="outline: none; margin-left: -999px;"><div class="sixDigitPassword" tabindex="0" style="width: 180px;"><i class="" style="width: 29px; border-color: transparent;"><b style="visibility: hidden;"></b></i><i style="width: 29px;"><b style="visibility: hidden;"></b></i><i style="width: 29px;"><b style="visibility: hidden;"></b></i><i style="width: 29px;"><b style="visibility: hidden;"></b></i><i style="width: 29px;"><b style="visibility: hidden;"></b></i><i style="width: 29px;"><b style="visibility: hidden;"></b></i><span style="width: 29px; visibility: hidden; left: 0px;"></span></div></span>

        <span class="ui-form-other edit-link">
          <a target="_blank" href="https://lab.alipay.com/user/passwordfind/index.htm?type=P" seed="sc_edit_forgetPwd">忘记密码？</a>        </span>

        <div class="ui-form-explain">
          <p id="J_edit_prompt_default" class="">
            <!-- CMS:安全核心/安全服务化收银台/未安装控件开始:securitycore/cashier/editPrompt.vm -->

  请输入6位数字支付密码
          </p>

          <p id="J_edit_prompt_noEdit" class="fn-hide">
            <!-- CMS:安全核心/安全服务化收银台/默认的密码控件下方的提示信息开始:securitycore/cashier/editPromptNoEdit.vm -->

          </p>
                                        </div>
        

<input type="hidden" name="J_aliedit_using" value="true">
<input type="hidden" id="payPassword" name="payPassword" value="">
<input type="hidden" name="J_aliedit_key_hidn" value="payPassword">

<input type="hidden" name="J_aliedit_uid_hidn" value="alieditUid">
<input type="hidden" id="alieditUid" name="alieditUid" value="cbf9f47ad2e43a9ae754b6f997ecb5dc">

<input type="hidden" name="REMOTE_PCID_NAME" value="_seaside_gogo_pcid">
<input type="hidden" name="_seaside_gogo_pcid" value="">
<input type="hidden" name="_seaside_gogo_" value="">
<input type="hidden" name="_seaside_gogo_p" value="">

<input type="hidden" name="J_aliedit_prod_type" value="payment_password">

<input type="hidden" name="security_activeX_enabled" value="false">

<input type="hidden" name="J_aliedit_net_info" value="">

<input type="hidden" id="edit_infor" value="" render="R">

      </div>
    </div>

    <style type="text/css">
  input.sixDigitPassword {
    position: absolute;
    color: #fff;
    opacity: 0;
    width: 1px;
    height: 1px;
    font-size: 1px;
    left: 0;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-user-select:initial; /* 取消禁用选择页面元素 */
    outline: 'none';
    margin-left: '-9999px';
  }

  div.sixDigitPassword {
    cursor:text;
    background: #fff;
    outline: none;
    position: relative;
    padding: 8px 0;
    height: 14px;
    border: 1px solid #cccccc;
    border-radius: 2px;
  }

  div.sixDigitPassword i {
    float: left;
    display: block;
    padding: 4px 0;
    height: 7px;
    border-left: 1px solid #cccccc;
  }

  div.sixDigitPassword i.active {
    background-image: url("https://t.alipayobjects.com/images/rmsweb/T1nYJhXalXXXXXXXXX.gif");
    background-repeat: no-repeat;
    background-position: center center;
  }

  div.sixDigitPassword b {
    display: block;
    margin: 0 auto;
    width: 7px;
    height: 7px;
    overflow: hidden;
    visibility:hidden;
    background-image: url("https://t.alipayobjects.com/tfscom/T1sl0fXcBnXXXXXXXX.png");
  }

  div.sixDigitPassword span {
    position: absolute;
    display: block;
    left: 0px;
    top: -1px;
    height: 30px;
    border: 1px solid rgba(82, 168, 236, .8);
    border: 1px solid #00ffff\9;
    border-radius: 2px;
    visibility: hidden;
    -webkit-box-shadow: inset 0px 2px 2px rgba(0, 0, 0, 0.75), 0 0 8px rgba(82, 168, 236, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
  }

  .ui-securitycore .ui-form-item-loading .ui-form-explain{
    background: url(https://t.alipayobjects.com/tfscom/T1hBFfXnRnXXXXXXXX.gif) 0 4px no-repeat !important;
  }
  .ui-securitycore .ui-form-item-error .ui-form-explain, .ui-securitycore .ui-form-item-warn .ui-form-explain, .ui-securitycore .ui-form-item-success .ui-form-explain, .ui-securitycore .ui-form-item-success .ui-form-text, .ui-securitycore-tip .ui-form-explain{
    background-image: url( https://t.alipayobjects.com/tfscom/T1dmlfXc0dXXXXXXXX.png) !important;
  }
  .ui-securitycore .ui-form-item .ui-form-explain{
    margin-top: 8px;
  }

</style>











  

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>



        
        </div>
            
      <div id="J-rcSubmit"><div class="ui-fm-item ui-fm-action j-submit" data-reactid=".1"><input class="ui-button ui-button-lblue" id="J_authSubmit" type="submit" value="确认付款" data-reactid=".1.0" seed="jSubmit-J_authSubmit" smartracker="on"><span class="ui-fm-status fn-hide" data-reactid=".1.1"> 正在提交中... </span></div></div>
    </form>
  </div>
        <!-- CMS:收银台cms/light_fast/creditExpressCharge.vm开始:light_fast/creditExpressCharge.vm --><!-- CMS:收银台cms/light_fast/creditExpressCharge.vm结束:light_fast/creditExpressCharge.vm -->  <!-- CMS:收银台cms/轻付快付/url配置开始:light_fast/urls.vm -->	<!-- CMS:收银台cms/轻付快付/url配置结束:light_fast/urls.vm -->    <!-- CMS:收银台cms/快速付款/余额渠道引导tips开始:fastpay/balanceExplain.vm -->
<!-- CMS:收银台cms/快速付款/余额渠道引导tips结束:fastpay/balanceExplain.vm -->  <!-- CMS:收银台cms/light_fast/balance.vm开始:light_fast/balance.vm -->	<!-- CMS:收银台cms/light_fast/balance.vm结束:light_fast/balance.vm -->        <!-- CMS:收银台cms/轻付快付/huabei开始:cashier/light_fast/huabei.vm -->	<!-- CMS:收银台cms/轻付快付/huabei结束:cashier/light_fast/huabei.vm -->  <div id="J-yueguangbao_agreement" class="fn-hide">
  <!-- CMS:收银台cms/help/huabeiUnsignedTips.vm开始:cashier/help/huabeiUnsignedTips.vm --><p class="ui-tipbox-desc">
你信用很好，花呗可帮你付该订单，下月按时还款即可（0费用） |你的花呗信用额度<span class="J-huabei-channel-limit"></span>元，支付宝自动还款<a href="javascript:void(0)" class="J_APop" data-triggertype="hover" data-target="J-error-huabei-signed-overlay" data-width="200" seed="JYueguangbao_agreement-J_APop" smartracker="on">[?]</a>
<br>
我已阅读并同意<a href="https://f.alipay.com/moonlight/contract.htm" target="_blank" seed="huabei-agreement-in-error-page">《花呗服务协议》</a></p>

<div id="J-error-huabei-signed-overlay" style="display: none;">
每月还款日将从余额、余额宝、借记卡快捷自动扣款；或登录手机支付宝-财富-花呗进行还款。</div>
<!-- CMS:收银台cms/help/huabeiUnsignedTips.vm结束:cashier/help/huabeiUnsignedTips.vm -->  </div>
      <!-- CMS:收银台cms/快速付款/月光宝运营位开始:cashier/fastpay/yueguangbao_tip.vm -->
<!-- CMS:收银台cms/快速付款/月光宝运营位结束:cashier/fastpay/yueguangbao_tip.vm -->  
    </div>





<div id="footer">
    <!-- CMS:全站公共 cms/foot/copyright.vm开始:foot/copyright.vm --><style>
.copyright,.copyright a,.copyright a:hover{color:#808080;}
</style>
<div class="copyright">
      支付宝版权所有 2004-2016 <a href="http://fun.alipay.com/certificate/jyxkz.htm" target="_blank" seed="copyright-link" smartracker="on">ICP证：沪B2-20150087</a>
  </div>
<div class="server" id="ServerNum">
  antcashiercloud-30-147 &nbsp; 0a6e035d14792592940521925228481_0
</div><!-- CMS:全站公共 cms/foot/copyright.vm结束:foot/copyright.vm -->  <noscript>&lt;img src="//kcart.alipay.com/web/bi.do?ref=https%3A%2F%2Fcashier.alipay.com%2F&amp;pg=https%3A%2F%2Fcashier.alipay.com%2F%3Fseed%3Dsyslog-cashier%255Einfo%255Ejavascript.not.enabled&amp;v=0.9.2&amp;BIProfile=clk" alt="" width="1" height="1" /&gt;</noscript>
</div>

<div id="partner">
    <img src="https://i.alipayobjects.com/e/201303/2R3cKfrKqS.png" seed="partner-iE2013032R3cKfrKqS" smartracker="on">
  </div>




<!-- FD:73:cashier/common/onlineServiceVars.vm:START --><!-- FD:73:cashier/common/onlineServiceVars.vm:398:onlineServiceVars.schema:onlineServiceVars-智能小宝业务参数变量:START -->
      	      	      
<!-- hihihi: 2016111621001001580208961297;2016111621001001580201448438 -->
<!-- FD:73:cashier/common/onlineServiceVars.vm:398:onlineServiceVars.schema:onlineServiceVars-智能小宝业务参数变量:END --><!-- FD:73:cashier/common/onlineServiceVars.vm:END -->



                                                                                                                                                                                                                                        
    <!-- FD:174:alipay/foot/cliveService.vm:START --><!-- FD:174:alipay/foot/cliveService.vm:1261:cliveService.schema:在线客服配置:START -->
    <div style="display:none">onlineServer</div>
    
<!-- FD:174:alipay/foot/cliveService.vm:1261:cliveService.schema:在线客服配置:END -->

<!-- FD:174:alipay/foot/cliveService.vm:END -->

 
<!-- uitpl:/component/tracker.vm -->
<!-- FD:106:alipay/tracker/tracker.vm:START --><!-- FD:106:alipay/tracker/tracker.vm:785:tracker.schema:全站自动化/性能/敏感信息打点开关:START -->

















<!-- FD:106:alipay/tracker/sai.vm:START -->


<!-- FD:106:alipay/tracker/sai.vm:END -->



<!-- FD:106:alipay/tracker/cmsbuffer.vm:START --><!-- FD:106:alipay/tracker/cmsbuffer.vm:997:cmsbuffer.schema:main-CMS全站修复:START -->
	
			
			
			
			
			
			
			
			
			










<!-- FD:106:alipay/tracker/cmsbuffer.vm:997:cmsbuffer.schema:main-CMS全站修复:END -->
<!-- FD:106:alipay/tracker/cmsbuffer.vm:END --><!-- FD:106:alipay/tracker/tracker.vm:785:tracker.schema:全站自动化/性能/敏感信息打点开关:END -->
<!-- FD:106:alipay/tracker/tracker.vm:END -->


<iframe src="https://tscenter.alipay.com/home/pc.htm?apikey=cashier&amp;token=&amp;userid=2088712561449580&amp;sid=2098d6e4ee31f99bea056313db514802&amp;href=https%3A%2F%2Fcashiergtj.alipay.com%2Fstandard%2Flightpay%2FlightPayCashier.htm%3ForderId%3D1116e60752bafed8da573ciercNN9580%26bizIdentity%3Dmerge10001%26outBizNo%3DP201611160295140858%26timeStamp%3D1479259251881%26country%3DCN" style="display: none;"></iframe><div id="onlineService" seed="online-service" data-sourceid="464"><a href="javascript:void(0)" seed="csc_portal" style="position:relative;display:inline-block;"><img style="display: block;" src="https://i.alipayobjects.com/e/201401/1tdi7nR70h.png"><span title="关闭" class="J-close-online-service-trigger" style="position: absolute;right:5px;top:-12px;font-size:14px;background:#eee;padding:1px 2px;border-radius:3px;font-family:simsun;line-height: normal;color: #AC593F;" seed="pcportal_close_icon_trigger">×</span></a></div></body></html>