
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="data-spm" content="a2145">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <title>账户注册 | 淘宝网</title>

    <!-- S GLOBAL CSS -->
    <link rel="stylesheet" href="{{asset('css/global-min.3.5.34.css')}}">
    <link rel="stylesheet" href="{{asset('css/global-header-min.1.0.css')}}">
    <!-- S GLOBAL CSS -->
	<script src="{{asset('js/jquery.1.11.js')}}"></script>

	<script src="{{asset('js/z_self.js')}}"></script>
    <link href="{{asset('css/register-common.2.8.11.css')}}" rev="stylesheet" rel="stylesheet">
    <link href="{{asset('css/z_r_one.css')}}" rev="stylesheet" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('picture/T11naSFbdaXXcCcBHm-72-72.png')}}">
    <link rel="stylesheet" href="{{asset('css/index-min.css')}}">


    <link rel="stylesheet" href="{{asset('css/init.css')}}" type="text/css">

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <link charset="utf-8" href="{{asset('css/new_suggest-min.css')}}" rel="stylesheet">

    <link type="text/css" href="{{asset('css/nc.css')}}" rel="stylesheet" >
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript">
		
			var sends ={
				checked:1,
				send : function ()
				{
					var numbers = /^1[34578]\d{9}$/;
					var val = $('#uphone').val(); //获取输入手机号码
					if ($('.div-phone').find('span').length == 0 && $('.div-phone a').attr('class') == 'send1')
					{
						if (!numbers.test(val) || val.length == 0)
						{
							$('.div-phone').append('<span class="error">手机格式错误</span>');
							return false;
						}else{
						var uphone = $('#uphone').val();
                        
									$.ajax(
									{     
                                        //返回剩余条数
										//url : '/elsems',
                                        //发送验证码
										url: '/sendms',
										type : 'get',
										dataType : 'json',
										data :
										{
											uphone : uphone
										},
										success : function (data)
										{
											if (data == 'success')
											{
												alert('发送成功');
											}
											else
											{
												alert(data);
											}
										}
									}
									)
						}
					}
					if (numbers.test(val))
					{
						var time = 60;
						$('.div-phone span').remove();
						function timeCountDown()
						{
							if (time == 0)
							{
								clearInterval(timer);
								$('.div-phone a').addClass('send1').removeClass('send0');
								$('.div-phone a').html("发送验证码");
								sends.checked = 1;
									
							}else{
							$('.div-phone a').html(time + "S后再次发送");
							time--;
							return false;
							sends.checked = 0;
							}
						}
						$('.div-phone a').addClass('send0').removeClass('send1');
						timeCountDown();
						var timer = setInterval(timeCountDown, 1000);
					}
				}
			};
			$(function(){
				$('#J_Agreement').bind("click",function(){
					if($('#J_BtnEmailForm').attr('disabled',true))
					$('#J_BtnEmailForm').attr('disabled',true);
					
				})
			});
			$(function(){
				$('#J_Agreement').change(
				function(){
					
					if($(this).is(":checked"))
					   {
						$('#J_BtnEmailForm').attr('disabled',false);
					   }
					   else
					   {
						$('#J_BtnEmailForm').attr('disabled',true);
					   }
					}			   
				)
			});
		
        </script>
</head>
<body data-spm="7268393">
<div
    style="width: 100%; left: 0px; top: 0px; height: 100%; position: fixed; -webkit-user-select: none; z-index: 100001;"
    class="ks-dialog-mask ks-overlay-mask ks-dialog-mask-hidden ks-overlay-mask-hidden"></div>
<div style="width: 100%; left: 0px; top: 0px; height: 100%; position: fixed; -webkit-user-select: none;"
     class="ks-dialog-mask ks-overlay-mask ks-dialog-mask-hidden ks-overlay-mask-hidden"></div>
<div style="width: 100%; left: 0px; top: 0px; height: 100%; position: fixed; -webkit-user-select: none;"
     class="ks-dialog-mask ks-overlay-mask ks-dialog-mask-hidden ks-overlay-mask-hidden"></div>

<!-- S GLOBAL HTML -->
@include('head')
<!-- -->
<!-- 全网顶通 -->
<!-- E GLOBAL HTML   -->
<div class="page lang-zh-S">

		
<input class="J_From" type="hidden" value="TB_ENTERPRISE"/>
<input class="J_AllowIframe" type="hidden"  value="true"  />

<!-- registerali010178058160.n.et2 -->
		
<form>
  <input type="hidden" id="J_Member" value="member.9" />
</form>

<div class="header">
  <div class="logo">
    <h1><a href="//www.taobao.com"><img src="{{asset('images/tb.png')}}" style="width:120px" /></a></h1>


    <h2 class="tsl" data-phase-id="r_p_registration">用户注册</h2>

  </div>
</div>

<div class="steps">
  <ol>
    <li class="active"><i>1</i><span class="tsl" data-phase-id="r_p_createAccount">设置用户名</span></li>

    <li><i>2</i><span class="tsl" data-phase-id="r_p_fillUserInfo">填写账号信息</span></li>

    <li><i class="iconfont">√</i><span class="tsl" data-phase-id="r_p_regSuc">注册成功</span></li>
  </ol>
</div>

<div class="content">
  <div class="form-list form-main-list">

    <form id="J_EmailForm" method="post" action="/checkcode" name="J_EmailForm">
   {!! csrf_field() !!}
      <div class="form-group">
        <div class="form-item">
          <span class="form-label tsl" data-phase-id="r_p_email">手机</span> 
		  <span style="/* display: inline-block; */position: relative;z-index: 0;">
			<div id="mailListBox_0" class="justForJs out_box" style="min-width:222px;_width:222px;position:absolute;left:-6000px;top:37px;z-index:1;">
			</div>
			<input autocomplete="off" class="form-text reg_text" id="uphone" style="float: left; color: rgb(51, 51, 51);" name="mobile" type="tel" value="" placeholder="请输入手机号" data-inner_placeholder="r_p_input_inner_enterEmail" maxlength="60" data-outer_placeholder="r_p_input_enterEmail">
		  </span>
		  <div class="form">
			<div class="div-phone">
				<a href="javascript:;" id="code" class="send1" onclick="sends.send();">获取验证码</a>
			</div>
		  </div>
          <div class="msg" data-type="info" data-show="0" id="J_MsgEmail"></div>
		  
        </div>

        <div class="form-item">
          <span class="form-label tsl" data-phase-id="r_p_noCaptcha">验证码</span>
           <input autocomplete="off" class="form-text reg_text" id="ecode" name="ecode" type="text" value="" placeholder="请输入收到的验证码" data-inner_placeholder="r_p_input_inner_enterEmail" maxlength="60" data-outer_placeholder="r_p_input_enterEmail" />
            
        </div>
      </div>

      <div class="form-group">
        <div class="form-item">

          <input class="form-checkbox" type="checkbox" checked="checked" name="agreement" id="J_Agreement" style="float: left" value="" />
          <div class="agreement-content" style="float:left;line-height: 18px;font-size:12px;">
            <p class="tsl" data-phase-id="r_p_agreementTip">同意<a href='http://terms.alicdn.com/legal-agreement/terms/TD/TD201609301342_19559.html' target='_blank'>淘宝服务协议</a>、<a href='//www.taobao.com/go/chn/tb-fp/2014/law.php' target='_blank'>《法律声明及隐私权政策》</a>及愿意接收相关来自taobao.com的会员及服务邮件</p>
          </div>
        </div>

        <div class="form-item form-item-short">
          <button type="submit" class="btn btn-large tsl" data-phase-id="r_p_next" id="J_BtnEmailForm">下一步</button>

          <div class="msg" data-show="0" id="J_MsgEmailForm"></div>
        </div>

        <div class="form-item f12 tsl" data-phase-id="r_1e_useMobileTip">
          没有邮箱？先去注册邮箱<br />
          <a href='http://reg.taobao.com/member/new_register.jhtml?_regfrom=TB'>个人用户可以使用手机号注册&gt;</a>
        </div>
      </div>
    </form>
  </div>
</div>








<!--   协议     -->
<!--<div class="ks-dialog hide ks-dialog-focused ks-overlay-focused ks-dialog-hidden ks-overlay-hidden"-->
<!--     id="J_AgreementDialog" aria-hidden="true" style="display: block; left: 358px; top: 170px;">-->
<!--    <div class="ks-dialog-content">-->
<!--        <a target="_top" href="http://www.taobao.com/" class="ks-overlay-close" role="button">-->
<!--            <span class="iconfont ks-dialog-close-x ks-overlay-close-x">?</span>-->
<!--        </a>-->
<!--        <div class="ks-dialog-header">-->
<!--            <h3>注册协议</h3>-->
<!--        </div>-->
<!--        <div class="ks-dialog-body">-->
<!--            <p><strong>【审慎阅读】</strong>您在申请注册流程中点击同意前，应当认真阅读以下协议。<strong style="text-decoration: underline">请您务必审慎阅读、充分理解协议中相关条款内容，其中包括：</strong>-->
<!--            </p>-->
<!--            <p>1、<strong style="text-decoration: underline">与您约定免除或限制责任的条款；</strong></p>-->
<!--            <p>2、<strong style="text-decoration: underline">与您约定法律适用和管辖的条款；</strong></p>-->
<!--            <p>3、<strong style="text-decoration: underline">其他以粗体下划线标识的重要条款。</strong></p>-->
<!--            <p>如您对协议有任何疑问，可向平台客服咨询。</p>-->
<!--            <p><strong>【特别提示】</strong>当您按照注册页面提示填写信息、阅读并同意协议且完成全部注册程序后，即表示您已充分阅读、理解并接受协议的全部内容。如您因平台服务与淘宝发生争议的，适用《淘宝平台服务协议》处理。如您在使用平台服务过程中与其他用户发生争议的，依您与其他用户达成的协议处理。-->
<!--            </p>-->
<!--            <p><strong style="text-decoration: underline">阅读协议的过程中，如果您不同意相关协议或其中任何条款约定，您应立即停止注册程序。</strong></p>-->
<!---->
<!---->
<!--            <p><a href="http://terms.alicdn.com/legal-agreement/terms/TD/TD201609301342_19559.html" target="_blank">《淘宝服务协议》</a>-->
<!--            </p>-->
<!--            <p><a href="http://www.taobao.com/go/chn/tb-fp/2014/law.php" target="_blank">《法律声明及隐私权政策》</a></p>-->
<!--            <p><a href="https://ds.alipay.com/fd-inhm9zcq/index.html" target="_blank">《支付宝服务协议》</a></p>-->
<!---->
<!--            <p style="text-align: center">-->
<!--                <button class="btn btn-large" type="button" id="J_AgreementBtn">同意协议</button>-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<!-- UE -->
<div class="ue-suggest">
    <img width="18" height="18" alt="注册改进建议" src="{{asset('images/T1Pt0FXmJcXXXXXXXX-18-18.png')}}">
    <a target="_blank" href="//ur.taobao.com/survey/view.htm?id=587">"淘宝注册"改进建议</a>
</div>


<!-- 页脚 -->
<div class="footer">
    <div class="footer-hd">
        <p>
            <a href="//page.1688.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a>
            <b>|</b>
            <a href="//www.alibaba.com">阿里巴巴国际站</a>
            <b>|</b>
            <a href="//www.1688.com">阿里巴巴中国站</a>
            <b>|</b>
            <a href="//www.aliexpress.com">全球速卖通</a>
            <b>|</b>
            <a href="//www.taobao.com">淘宝网</a>
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
            <a href="//www.alipay.com">支付宝</a>
        </p>
    </div>
    <div class="footer-bd">
        <p>
            <a href="//www.taobao.com/about">关于淘宝</a>
            <a href="//www.taobao.com/about/partners.php">合作伙伴</a>
            <a href="//pro.taobao.com">营销中心</a>
            <a href="//service.taobao.com/support/main/service_route.htm">联系客服</a>
            <a href="//open.taobao.com">开放平台</a>
            <a href="//www.taobao.com/about/join.php">诚征英才</a>
            <a href="//www.taobao.com/about/contact.php">联系我们</a>
            <a href="//www.taobao.com/sitemap.php">网站地图</a>
            <a href="//www.taobao.com/go/chn/tb-fp/2014/law.php">法律声明</a>
            <em>? 2016 Taobao.com 版权所有</em>
        </p>
        <p>
            <span>网络文化经营许可证：<a href="{{asset('images/T1ysdvXtNeXXcPpEkQ-972-636.jpg')}}">文网文[2010]040号</a></span>
            <b>|</b>
            <span>增值电信业务经营许可证：浙B2-20080224-1</span>
            <b>|</b>
            <span>信息网络传播视听节目许可证：1109364号</span>
        </p>
    </div>
    <div class="footer-ft">
        <a href="//www.pingpinganan.gov.cn/web/index.aspx?file=index.aspx"><img width="36" height="36"
                                                                                src="{{asset('images/T1FeW3XXNfXXXXXXXX-36-36.gif')}}"></a>
        <a href="//idinfo.zjaic.gov.cn/bscx.do?method=hddoc&amp;id=33018400000067" class="mod mod-a"></a>
        <a href="//idinfo.zjaic.gov.cn/bscx.do?&amp;method=hddoc&amp;id=33018400000067" class="mod mod-b"></a>
        <a href="//www.theclimategroup.org.cn/about/friend" class="mod mod-c"></a>
        <a href="https://ss.cnnic.cn/verifyseal.dll?&amp;sn=2010062300100001357&amp;pa=20100701" class="mod mod-d"></a>
        <a href="//www.ppaaol.com/verifySite.do?id=1051" class="mod mod-e"></a>
    </div>
    <div class="footer-toy"></div>

    <div id="server-num" style="color:#FFF;font-size:11px;text-align:center">register011250145217.eu13</div>
</div>
<!-- 页脚 -->

<!-- S GLOBAL JS -->

<!-- E GLOBAL JS -->


<style type="text/css" class="nc-style">.nc-container #nc_1_wrapper, .nc-container.tb-login #nc_1_wrapper {
        width: 300px
    }

    .nc-container .imgCaptcha, .nc-container .clickCaptcha {
        width: 298px;
    }

    .nc-container.tb-login .imgCaptcha, .nc-container.tb-login .clickCaptcha {
        width: 300px;
    }

    .nc-container.tb-login .imgCaptcha .captcha-error, .nc-container.tb-login .clickCaptcha .captcha-error {
        width: 292px;
    }

    .nc-container.tb-login .errloading, .nc-container .errloading {
        width: 290px;
    }

    .nc-container #nc_1_wrapper, .nc-container.tb-login #nc_1_wrapper {
        width: 300px
    }

    .nc-container .imgCaptcha, .nc-container .clickCaptcha {
        width: 298px;
    }

    .nc-container.tb-login .imgCaptcha, .nc-container.tb-login .clickCaptcha {
        width: 300px;
    }

    .nc-container.tb-login .imgCaptcha .captcha-error, .nc-container.tb-login .clickCaptcha .captcha-error {
        width: 292px;
    }

    .nc-container.tb-login .errloading, .nc-container .errloading {
        width: 290px;
    }</style>


<div id="_umfp" style="display:inline;width:1px;height:1px;overflow:hidden">
    <img
        src="{{asset('images/clear.png')}}">
</div>


<div style="height: 0px; width: 0px; overflow: hidden;">
    <object width="0" height="0" tabindex="-1" style="height:0;width:0;overflow:hidden;"
            classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
            codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="JSocket">
        <param name="allowScriptAccess" value="always">
        <param name="movie" value="https://aeu.alicdn.com/flash/JSocket.swf">
        <embed src="https://aeu.alicdn.com/flash/JSocket.swf" name="JSocket" allowscriptaccess="always"
               type="application/x-shockwave-flash" pluginspage="https://www.adobe.com/go/getflashplayer_cn" width="0"
               height="0">
    </object>
</div>
<div class="msg msg-type-info" data-type="info" data-show="0" id="J_MsgMobile" data-display="block"
     style="position: absolute; left: 936.5px; top: 245px;"><i class="iconfont">??</i>
    <div class="msg-tit"></div>
    <div class="msg-cnt" aria-live="assertive"></div>
</div>
<!-- <div id="J_xiaomi_dialog" style="z-index: 999999; bottom: 54%; right: 9%;">
    <div class="J_weak">
        <div class="xiaomi-avatar alicare-dialog-iconfont"></div>
        <p>有问题？</p>
        <p>找小蜜</p></div>
    <div class="J_Dialog" style="bottom: -408px;">
        <div class="alicare-dialog-wrapper">
            <div class="dialog-fake-mask" style="visibility: hidden;"></div>
            <div class="fake-header"><a class="im-close"><img
                        src="{{asset('images/TB1NHW2LpXXXXXlXFXXXXXXXXXX-21-21.png')}}"></a></div>
            <iframe width="720" height="550" name="alicare-dialog" frameborder="0"
                    data-spm-act-id="a2145.7268393.0.i1.rkEcph"></iframe>
        </div>
    </div>
</div> -->
<style type="text/css">
    #J_xiaomi_dialog .J_weak:hover {
        border-color: #f7931e;
        color: #f7931e;
    }

    #J_xiaomi_dialog .J_weak.active {
        border-color: #f7931e;
        background-color: #f7931e;
    }

    #J_xiaomi_dialog .J_weak .xiaomi-avatar {
        color: #f7931e;
    }

    #J_xiaomi_dialog .J_strong .card .header {
        background-color: #f7931e;
    }

    #J_xiaomi_dialog .J_strong .close-icon {
        background-color: #f7931e;
    }
</style>
</body>
</html>