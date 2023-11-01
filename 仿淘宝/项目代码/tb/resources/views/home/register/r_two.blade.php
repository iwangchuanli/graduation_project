<html class="ks-webkit537 ks-webkit ks-chrome35 ks-chrome">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="data-spm" content="a2145">
    <title>账户注册 | 淘宝网</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <!--吊顶assets START-->
    <!--<link rel="stylesheet" href="//g.alicdn.com/??tb/global/2.6.13/global-min.css?t=20140305">-->
    <link rel="stylesheet" href="{{asset('css/index-min.css')}}">
    <!--吊顶assets END-->
    <!-- S GLOBAL CSS -->
    <link rel="stylesheet" href="{{asset('css/global-min.3.5.34.css')}}">
    <link rel="stylesheet" href="{{asset('css/global-header-min.1.0.css')}}">
    <!-- S GLOBAL CSS -->

    <link
        href="{{asset('css/register-common.2.8.11.css')}}" rev="stylesheet" rel="stylesheet">

    <style type="text/css">@font-face {
            font-family: alicare-dialog-iconfont;
            src: url("./fonts/font_1471933726_7338545.eot");
            src: url("./fonts/font_1471933726_7338545iefix.eot") format("embedded-opentype"), url("./fonts/font_1471933726_7338545.woff") format("woff"), url("./fonts/font_1471933726_7338545.ttf") format("truetype"), url("./fonts/font_1471933726_7338545.svg") format("svg")
        }

        .alicare-dialog-iconfont {
            font-family: alicare-dialog-iconfont;
            font-size: 16px;
            font-style: normal;
            line-height: normal;
            -webkit-font-smoothing: antialiased
        }

        #J_xiaomi_dialog {
            position: fixed
        }

        #J_xiaomi_dialog .J_weak {
            background-color: #fff;
            width: 56px;
            text-align: center;
            padding: 8px 0;
            border: 2px solid #f5f5f5;
            border-radius: 4px;
            color: #b7b7b7;
            cursor: pointer
        }

        #J_xiaomi_dialog .J_weak:hover {
            border-color: #f7931e;
            color: #f7931e
        }

        #J_xiaomi_dialog .J_weak.active {
            border-color: #f7931e;
            background-color: #f7931e;
            color: #fff
        }

        #J_xiaomi_dialog .J_weak.active .xiaomi-avatar, #J_xiaomi_dialog .J_weak.active:hover {
            color: #fff
        }

        #J_xiaomi_dialog .J_weak .xiaomi-avatar {
            margin-bottom: 4px;
            height: 32px;
            font-size: 30px;
            color: #f7931e
        }

        #J_xiaomi_dialog .J_weak p {
            font-size: 14px;
            margin: 0;
            height: 17px
        }

        #J_xiaomi_dialog .J_weak p:first-of-type {
            position: relative;
            left: 3px
        }

        #J_xiaomi_dialog .J_strong {
            width: 150px;
            position: relative
        }

        #J_xiaomi_dialog .J_strong .xiaomi-body {
            background-image: url("./images/TB1eua9LXXXXXa7aFXXXXXXXXXX-245-66.png");
            width: 45px;
            height: 36px;
            position: absolute;
            right: 0;
            top: -27px
        }

        #J_xiaomi_dialog .J_strong .card {
            background-color: #f9f9f9;
            border-radius: 4px;
            overflow: hidden;
            position: relative
        }

        #J_xiaomi_dialog .J_strong .card .header {
            background-color: #f7931e;
            text-align: center;
            color: #fff;
            font-size: 12px;
            padding: 11px 0 5px;
            margin: 0
        }

        #J_xiaomi_dialog .J_strong .card .header span {
            font-size: 18px
        }

        #J_xiaomi_dialog .J_strong .card ul {
            list-style: none;
            margin: 0;
            padding: 3px 7px;
            font-size: 12px
        }

        #J_xiaomi_dialog .J_strong .card ul li {
            border-bottom: 1px solid #ddd;
            padding: 0 8px 1px;
            line-height: 24px;
            width: 100%;
            box-sizing: border-box;
            overflow: hidden;
            max-height: 48px;
            cursor: pointer
        }

        #J_xiaomi_dialog .J_strong .card ul li:hover {
            background-color: #fff
        }

        #J_xiaomi_dialog .J_strong .card .consult {
            text-align: center;
            font-size: 14px;
            margin: 0;
            padding: 8px 0
        }

        #J_xiaomi_dialog .J_strong .card .consult a {
            color: #34bbf9;
            cursor: pointer
        }

        #J_xiaomi_dialog .J_strong .card .consult span {
            vertical-align: middle;
            display: inline-block
        }

        #J_xiaomi_dialog .J_strong .card .consult .talk-icon {
            margin-left: 7px;
            background-image: url("./images/TB1eua9LXXXXXa7aFXXXXXXXXXX-245-66.png");
            width: 15px;
            height: 16px;
            background-position: -230px 0
        }

        #J_xiaomi_dialog .J_strong .close-icon {
            background: #f7931e ;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            position: absolute;
            right: -8px;
            top: -8px;
            cursor: pointer
        }

        #J_xiaomi_dialog .J_strong .xiaomi-dialog {
            width: 64px;
            height: 34px;
            background-position: -150px 0;
            left: 16px;
            top: -39px
        }

        #J_xiaomi_dialog .J_strong .xiaomi-dialog, #J_xiaomi_dialog .J_strong .xiaomi-header {
            background-image: url("./images/TB1eua9LXXXXXa7aFXXXXXXXXXX-245-66.png");
            position: absolute
        }

        #J_xiaomi_dialog .J_strong .xiaomi-header {
            width: 49px;
            height: 66px;
            background-position: -45px 0;
            right: 14px;
            top: -59px
        }

        #J_xiaomi_dialog .J_Dialog {
            position: absolute;
            overflow: hidden;
            display: none;
            padding: 8px;
            width: 724px;
            height: 554px;
            left: -728px;
            bottom: -8px
        }

        #J_xiaomi_dialog .J_Dialog .alicare-dialog-wrapper {
            position: absolute;
            overflow: hidden;
            border: 2px solid #ddd;
            border-radius: 10px 10px 10px 0;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .3)
        }

        #J_xiaomi_dialog .J_Dialog .alicare-dialog-wrapper .fake-header {
            position: absolute;
            top: 0;
            width: 100%;
            height: 60px
        }

        #J_xiaomi_dialog .J_Dialog .alicare-dialog-wrapper .fake-header .im-close {
            position: absolute;
            top: 19px;
            left: 680px;
            cursor: pointer
        }

        #J_xiaomi_dialog .J_Dialog .alicare-dialog-wrapper .fake-header .im-close img {
            display: block;
            width: 21px
        }

        #J_xiaomi_dialog .J_Dialog .alicare-dialog-wrapper iframe {
            display: block;
            border: none
        }

        #J_xiaomi_dialog .J_Dialog .alicare-dialog-wrapper .dialog-fake-mask {
            background: transparent;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden
        }</style>
    <style type="text/css">#J_xiaomi_dialog .J_weak:hover {
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
        }</style>
</head>
<body data-spm="7275777">

<!--吊顶 START-->
<!-- S GLOBAL HTML -->
@include('head')
<!-- -->
<!-- 全网顶通 -->
<!-- E GLOBAL HTML   -->

<!--吊顶 END-->


<div class="page lang-zh-S">


    <input class="J_From" type="hidden" value="TB">
    <input class="J_AllowIframe" type="hidden" value="false">

    <!-- register010178254168.et2 -->

    <input type="hidden" id="J_Member" value="member.9">

    <div class="header">
        <div class="logo">
            <h1><a href="//www.taobao.com"><img src="{{asset('images/tb.png')}}" width="115"></a>
            </h1>
            <h2 class="tsl" data-phase-id="r_p_registration">用户注册</h2>
        </div>
    </div>

<div class="steps">
	<ol>
		            <li class="active"><i>1</i><span class="tsl" data-phase-id="r_p_createAccount">设置用户名</span></li>
				<li class="active"><i>2</i><span class="tsl" data-phase-id="r_p_fillUserInfo">填写账号信息</span></li>
				<li><i class="iconfont">√</i><span class="tsl" data-phase-id="r_p_regSuc">注册成功</span></li>
	</ol>

	</div>


    <div class="content">
        <div class="form-list form-main-list">

            <form method="post" action="/checkRegister" id="J_InfoForm">
			{!! csrf_field() !!}
                <input name="_tb_token_" type="hidden" value="423F8TDY4q">

                <div class="form-group">
                    <div class="form-item">
                        <span class="form-label form-label-b tsl" data-phase-id="r_p_loginName">登录名</span>
                        {{$uname}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <span class="form-label form-label-b tsl" data-phase-id="r_ui_enterPwdTip">设置登录密码</span>
                        <span class="tsl" data-phase-id="r_ui_pwdTip">登录时验证，保护账号信息</span>
                    </div>
                    <div class="form-item">
                        <span class="form-label tsl" data-phase-id="r_p_password">登录密码</span>
                        <input class="form-text" id="J_Password" name="pwd" type="password" placeholder="设置你的登录密码"
                               data-inner_placeholder="r_p_input_enterPassword" value="">


                        <div class="pw-tip" id="J_PwdTip">
                            <i class="pw-tip-arr"></i>
                            <div class="pw-tip-bd">
                                <div class="pw-strength">
                                    <span class="tsl" data-phase-id="r_ui_pwd_strength">强度：</span>
                                    <div class="pw-strength-bar">
                                        <span class="pw-strength-1"></span>
                                        <span class="pw-strength-2"></span>
                                        <span class="pw-strength-3"></span>
                                        <em></em>
                                    </div>
                                </div>
                                <div class="pw-rule">
                                    <div class="pw-rule-item pw-rule-length">
                                        <i class="iconfont"></i><span class="tsl" data-phase-id="r_ui_pwdLengthTip">6~20个字符</span>
                                    </div>
                                    <div class="pw-rule-item pw-rule-legal">
                                        <i class="iconfont"></i><span class="tsl" data-phase-id="r_ui_pwdCharacterTip">只能包含字母、数字以及标点符号（除空格）</span>
                                    </div>
                                    <div class="pw-rule-item pw-rule-multi">
                                        <i class="iconfont"></i><span class="tsl" data-phase-id="u_ui_pwdStengthTip">字母、数字和标点符号至少包含2种</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-item">
                        <span class="form-label tsl" data-phase-id="r_p_confirmPassword">密码确认</span>

                        <input class="form-text" id="J_RePassword" name="rpwd" type="password"
                               placeholder="请再次输入你的密码" data-inner_placeholder="r_p_input_reEnterPassword"
                               data-outer_placeholder="r_p_input_reEnterPwd" value="">

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <span class="form-label form-label-b tsl" data-phase-id="r_ui_enterUserNameTip">设置会员名</span>
                    </div>
                    <div class="form-item">
                        <span class="form-label tsl" data-phase-id="r_p_userName">登录名</span>

                        <input class="form-text" id="J_Nick" name="uname" autocomplete="off" type="text"
                               placeholder="会员名一旦设置成功，无法修改" data-inner_placeholder="r_p_input_enterUserName"
                               data-outer_placeholder="r_p_tip_enterUserName" value="">
                        <div class="nick-suggest-container">
                            <div class="nick-suggest" id="J_NickSuggest"></div>
                        </div>

                        <div class="nick-size" id="J_NickSize" style="visibility: hidden;">{size} <span class="tsl"
                                                                                                        data-phase-id="r_ui_nickCountTip">字符</span>
                        </div>
                    </div>
                    <div class="form-item">
                        <button type="submit" id="J_BtnInfoForm" class="btn btn-large tsl" data-phase-id="r_p_submit">
                            提交
                        </button>
                        <div class="msg tsl msg-type-error" data-phase-id="" data-type="error" data-show="0"
                             id="J_MsgInfoForm" data-display="block"><i class="iconfont">󰅕</i>
                            <div class="msg-tit"></div>
                            <div class="msg-cnt" aria-live="assertive"></div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="ua" id="UA_InputId"
                       value="082#b3SktkkekrGktkWOkkkkkTVKAUfhiMYdCzOkWEqZj6VDJZGTiKvl8PoKAfShi6s5TkSkW1bG0VQHkqkbmvL+pOO30GQ+ikSkwEk3ykW7KZ5A19CbIqCyZjF/oMBKOdxtkqkj45MplcFhkkW10pL8Duitu/D7y6RR0ffO45ayYrFhNVw10pL8Duii0xjWkkA9IGkrxA60g8UWkk2elht3hSJQkqW8+0Fm9kIQc6vQvwKQVWetXjuGwt+e1IVn5pT/UkH2hxnNlkdtQF5bjb93bbUzSPcQdeIzUGkscmxDmqLzV/7klZedViixw+QnGePFEUS2UBc/L4dtVw5zvbxXVIqQ1pQz5pfOUqgI3mB0dUSkWUkUm8GklNqWkk4nDVWfQkSkWk0VkqrJkqkRunwTKfihzRSQWwgjq9TCrUnIuVtEI9zINWWo2GBN0Rf1SwFgt7jWkWlWfoslV3fFtayic0HABhPpL0lFhw8Quu9XhxfWkk5vm53+maw743Oskqkij2Y05Lvk9PLAgtcolkSkQsmvfHWsHub0Vk==">
            </form>
        </div>
    </div>
</div>





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
            <em>© 2016 Taobao.com 版权所有</em>
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

    <div id="server-num" style="color:#FFF;font-size:11px;text-align:center">register010178254168.et2</div>
</div>
<!-- 页脚 -->
<!-- S GLOBAL JS -->

<!-- E GLOBAL JS -->


<div id="_umfp" style="display:inline;width:1px;height:1px;overflow:hidden">
    <object type="application/x-shockwave-flash" data="https://g.alicdn.com/security/umflash/fp.swf?v1=1&amp;f=umx"
            width="1" height="1" id="umFlash" class="umidWrapper" tabindex="-1">
        <param name="movie" value="https://g.alicdn.com/security/umflash/fp.swf?v1=1&amp;f=umx">
        <param name="allowScriptAccess" value="always">
    </object>
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
<div class="msg msg-type-info" data-type="info" data-show="0" id="J_MsgPassword" data-display="block"><i
        class="iconfont">󰅂</i>
    <div class="msg-tit"></div>
    <div class="msg-cnt" aria-live="assertive"></div>
</div>
<div class="msg msg-type-info" data-type="info" data-show="0" id="J_MsgRePassword" data-display="block"><i
        class="iconfont">󰅂</i>
    <div class="msg-tit"></div>
    <div class="msg-cnt" aria-live="assertive"></div>
</div>
<div class="msg msg-type-info" data-type="info" data-show="0" data-display="inline" id="J_MsgNick"><i class="iconfont">󰅂</i>
    <div class="msg-tit"></div>
    <div class="msg-cnt" aria-live="assertive"></div>
</div>
<div id="J_xiaomi_dialog" style="z-index: 999999; bottom: 54%; right: 9%;">
    <div class="J_weak">
        <div class="xiaomi-avatar alicare-dialog-iconfont"></div>
        <p>有问题？</p>
        <p>找小蜜</p></div>
    <div class="J_Dialog" style="bottom: -408px;">
        <div class="alicare-dialog-wrapper">
            <div class="dialog-fake-mask" style="visibility: hidden;"></div>
            <div class="fake-header"><a class="im-close"><img
                        src="{{asset('images/TB1NHW2LpXXXXXlXFXXXXXXXXXX-21-21.png')}}"></a></div>
            <iframe width="720" height="550" name="alicare-dialog" frameborder="0"></iframe>
        </div>
    </div>
</div>
</body>
</html>