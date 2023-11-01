<html>
<head>
    <meta charset="GBK">
    <title>重置登录密码</title>

    <meta name="keywords" content="网上购物-网上支付-安全支付-安全购物-购物，安全-支付-支付宝,在线-付款,收款-网上,贸易-网上贸易">

    <meta name="description" content="中国最大的第三方电子支付服务提供商">


    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <link charset="utf-8" rel="stylesheet"
          href="./css/membercenter.console.css" media="all">

    <style type="text/css">
        /* 找回登录密码，邮箱＋短信验证，验证短信页面样式 */
        .ui-select-country-box .ui-select-trigger {
            position: relative;
            top: 2px;
            top: 0px \0;
            *top: -2px;
            _top: -1px;
            width: auto !important;
            min-width: 49px !important;
            margin-right: 5px;
            zoom: 1;
        }

        .ui-select-country-box.ui-form-item-error .ui-select-trigger {
            border: 1px solid #ccc;
        }

        .ui-select-country .ui-select-content {
            width: 440px;
            height: auto;
            clear: both;
            background: #fff;
            zoom: 1;
        }

        .ui-select-country .ui-select-content:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0
        }

        .ui-select-country .ui-select-item {
            width: 125px;
            float: left;
            padding-left: 10px;
            padding-right: 10px;
        }

        .ui-select-country .ui-select-item-top {
            width: 90px;
            padding: 5px 10px;
            border-bottom: 1px dashed #dedede;
        }

        .ui-input-countryCode {
            width: 35px;
            border: 1px solid #ccc;
            background: #f2f2f2;
            zoom: 1;
        }

        .ui-form-item-focus .ui-input-countryCode,
        .ui-input-countryCode:focus {
            outline-style: none;
            border: 1px solid #ccc !important;
        }

        .ui-form-item-error .ui-input-countryCode, .ui-form-item-hover .ui-input-countryCode {
            border: 1px solid #ccc;
            color: #595959;
        }

        .ui-form-item-error .ui-input-countryCode:focus {
            outline-style: none;
        }

        .ml-8 {
            margin-left: 8px;
        }

        .mt-2 {
            margin-top: 2px;
        }
    </style>

    <link href="https://a.alipayobjects.com" rel="dns-prefetch">
    <link href="https://app.alipay.com" rel="dns-prefetch">
    <link href="https://my.alipay.com" rel="dns-prefetch">
    <link href="https://lab.alipay.com" rel="dns-prefetch">
    <link href="https://cashier.alipay.com" rel="dns-prefetch">
    <link href="https://financeprod.alipay.com" rel="dns-prefetch">
    <link href="https://shenghuo.alipay.com" rel="dns-prefetch">


    <!-- uitpl:/component/trackerTime.vm -->
    <!-- CMS:全站公共 cms/tracker/iconfont.vm开始:tracker/iconfont.vm -->
    <style>
        @font-face {
            font-family: "rei";
            src: url("https://i.alipayobjects.com/common/fonts/rei.eot?20150616"); /* IE9 */
            src: url("https://i.alipayobjects.com/common/fonts/rei.eot?20150616#iefix") format("embedded-opentype"), /* IE6-IE8 */ url("https://i.alipayobjects.com/common/fonts/rei.woff?20150616") format("woff"), /* chrome 6+、firefox 3.6+、Safari5.1+、Opera 11+ */ url("https://i.alipayobjects.com/common/fonts/rei.ttf?20150616") format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+ */ url("https://i.alipayobjects.com/common/fonts/rei.svg?20150616#rei") format("svg"); /* iOS 4.1- */
        }

        .iconfont {
            font-family: "rei";
            font-style: normal;
            font-weight: normal;
            cursor: default;
            -webkit-font-smoothing: antialiased;
        }
    </style>
    <!-- CMS:全站公共 cms/tracker/iconfont.vm结束:tracker/iconfont.vm -->


    <!-- CMS:全站公共 cms/tracker/monitor.vm开始:tracker/monitor.vm --><!-- FD:106:alipay/tracker/sai_seer.vm:START -->

    <!-- FD:106:alipay/tracker/sai_seer.vm:END --><!-- CMS:全站公共 cms/tracker/monitor.vm结束:tracker/monitor.vm -->
    <!-- CMS:全站公共 cms/tracker/seajs.vm开始:tracker/seajs.vm -->

    <!-- monitor 防错代码 -->


    <!-- seajs以及插件 -->


    <!-- seajs config 配置 -->


    <!-- 兼容原有的 plugin-i18n 写法 -->
    <!-- https://github.com/seajs/seajs/blob/1.3.1/src/plugins/plugin-i18n.js -->


    <!-- 路由旧 ID，解决 seajs.use('select/x.x.x/select') 的历史遗留问题 -->
    <!-- CMS:全站公共 cms/tracker/seajs.vm结束:tracker/seajs.vm -->
    <!-- FD:106:alipay/tracker/tracker_time.vm:START -->
    <!-- FD:106:alipay/tracker/tracker_time.vm:784:tracker_time.schema:全站 tracker 开关:START -->



    <!-- FD:106:alipay/tracker/tracker_time.vm:784:tracker_time.schema:全站 tracker 开关:END -->
    <!-- FD:106:alipay/tracker/tracker_time.vm:END -->

    <style id="alipay-rare-words-1-0-0-rare-words-css">div.ui-rarewords {
            font: 12px / 1.5 tahoma, arial, "Hiragino Sans GB",  b8b  f53;
            border: 1px solid #CECECE;
            margin: 0;
            padding: 0;
            background: #fff;
            overflow: hidden;
            z-index: 1000;
            position: absolute;
            width: 360px;
            box-shadow: 1px 1px 3px #E0E0E0
        }

        .ui-rarewords-spells, .ui-rarewords-words {
            position: relative;
            z-index: 100;
            padding: 0;
            margin: 0;
            zoom: 1
        }

        .ui-rarewords-spells::after, .ui-rarewords-words::after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0
        }

        .ui-rarewords-spells {
            border-bottom: 1px solid #CECECE
        }

        .ui-rarewords-spell, .ui-rarewords-word {
            padding: 3px 5px 2px;
            text-decoration: none;
            color: #08C;
            float: left
        }

        a.ui-rarewords-spell:hover, a.ui-rarewords-word:hover {
            text-decoration: none
        }

        a.ui-rarewords-spell:hover {
            background: #006EFF;
            color: #fff
        }

        a.ui-rarewords-word:hover {
            background: #FEFF48
        }

        .ui-rarewords-spells a.selected {
            background: #006EFF;
            color: #fff
        }

        .ui-rarewords-words a.selected {
            background: #FEFF48
        }</style>
    <style id="alipay-object-shim-1-0-0-object-shim-css">body .object-shim-class {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            height: 22px;
            width: 198px;
            border: 1px solid #999
        }

        body .object-shim-class object, body .object-shim-class embed {
            display: none
        }</style>
</head>
<!--[if lt IE 7]>
<body class="ie6"><![endif]--><!--[if IE 7]>
<body class="ie7"><![endif]--><!--[if IE 8]>
<body class="ie8"><![endif]--><!--[if IE 9]>
<body class="ie9"><![endif]--><!--[if !IE]><!-->
<body><!--<![endif]-->

<!-- 全站公告位 -->


<!-- CMS:全站公共 cms/notice/headNotice.vm开始:alipay/notice/headNotice.vm --><!--[if lte IE 7]>
<style>.kie-bar {
    display: none;
    height: 24px;
    line-height: 1.8;
    font-weight: normal;
    text-align: center;
    border: 1px solid #fce4b5;
    background-color: #FFFF9B;
    color: #e27839;
    position: relative;
    font-size: 12px;
    margin: 5px 0 0 0;
    padding: 5px 0 2px 0;
}

.kie-bar a {
    text-decoration: none;
    color: #08c;
    background-repeat: none;
}

.kie-bar a#kie-setup-IE8, .kie-bar a#kie-setup-taoBrowser {
    padding: 0 0 2px 20px;
    *+padding-top: 2px;
    *_padding-top: 2px;
    background-repeat: no-repeat;
    background-position: 0 0;
}

.kie-bar a:hover {
    text-decoration: underline;
}

.kie-bar a#kie-setup-taoBrowser {
    background-position: 0 -20px;
}</style>
<div id="kie-bar" class="kie-bar">您现在使用的浏览器版本过低，可能会导致部分图片和信息的缺失。请立即 <a
    href="http://www.microsoft.com/china/windows/IE/upgrade/index.aspx" id="kie-setup-IE8" seed="kie-setup-IE8"
    target="_blank" title="免费升级至IE8浏览器">免费升级</a> 或下载使用 <a
    href="http://download.browser.taobao.com/client/browser/down.php?pid=0080_2062" id="kie-setup-taoBrowser"
    seed="kie-setup-taoBrowser" target="_blank" title="淘宝浏览器">淘宝浏览器</a> ，安全更放心！ <a title="查看帮助" target="_blank"
                                                                                   seed="kie-setup-help"
                                                                                   href="http://help.alipay.com/lab/help_detail.htm?help_id=260579">查看帮助</a>
</div>

<![endif]-->

<!-- CMS:全站公共 cms/notice/headNotice.vm结束:alipay/notice/headNotice.vm --><!-- /全站公告位 -->
<!-- 头部 -->
<div class="head">
    <div class="header">
        <div class="header-cnt fn-clear">
            <h1 class="logo">
                <a href="http://member1.taobao.com/member/fresh/account_security.htm" class="logo-img logo-img-taobao"
                   title="淘宝" seed="header-link-logo">
                    淘宝
                </a>
            </h1>
            <h2 class="logo-title">
                重置登录密码
            </h2>
            <ul class="nav">
                <li class="nav-first">
                    <a href="http://reg.taobao.com/member/new_register.jhtml" seed="nav-link-reg">注册</a>
                    -
                    <a href="https://login.taobao.com" seed="nav-link-login">登录</a>
                </li>
                <li>
                    <a href="http://member1.taobao.com/member/fresh/account_security.htm"
                       seed="nav-link-mySite">我的淘宝</a>
                </li>
                <li class=" nav-last ">
                    <a href="http://service.taobao.com/support/main/service_center.htm" target="_blank"
                       seed="nav-link-help">帮助中心</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- / 头部 -->

<div class="container">
    <div class="content">


        <!-- CMS:会员中心cms/console/scene.vm开始:console/scene.vm -->


        <div class="maincenter">

            <ol class="ui-iconfontstep ui-iconfontstep-3">
                <li class="ui-iconfontstep-start  ui-iconfontstep-active ">
                    <em><i class="iconfont" title="菱形">y</i><strong></strong><i
                            class="ui-iconfontstep-stepNum">1</i></em>
                    <span>验证身份</span>
                </li>
                <li class="ui-iconfontstep-press ">
                    <em><i class="iconfont" title="菱形">y</i><strong></strong><i
                            class="ui-iconfontstep-stepNum">2</i></em>
                    <span>重置登录密码</span>
                </li>
                <li class="ui-iconfontstep-end ">
                    <em><i class="iconfont" title="菱形">y</i><strong></strong><i
                            class="iconfont ui-iconfontstep-stepNumEnd" title="成功">r</i></em>
                    <span>重置成功</span>
                </li>
            </ol>
            <div class="maincenter-box">
                <div class="maincenter-box-tip">
                    <p class="ui-tiptext ui-tiptext-message"><span class="ui-tiptext-icon"></span>您正在使用 “<span
                            class="strong">验证短信</span>” 进行校验。</p>
                </div>

                <form class="ui-form" name="strategyForm" id="J-selectStrategyForm" method="post"
                      action="https://accounts.alipay.com:443/console/checkStrategy.htm?sp=0-resetQueryPwd-fullpage"
                      novalidate="novalidate" data-widget-cid="widget-0">
                    <input type="hidden" name="_form_token" value="1da495a84ed946f0aee91b5dd9859b9cGZ00">
                    <div class="ui-form-item">
                        <label class="ui-label ui-label-reset">手机号码</label>
                        <p class="ui-form-text" id="J-mobile">183****2704</p>
                    </div>
                    <div class="ui-form-item    ">
                        <label class="ui-label">校验码</label>
                        <p class="ui-button ui-button-swhite " id="J-getCode">
                            <input type="button" autocomplete="off" class="ui-button-text" value="点此免费获取"
                                   seed="Use-checkCode-for-resetQueryPwd-1">
                        </p>
                        <input type="text" class="ui-input ui-input-checkcode  fn-hide " placeholder="6位数字"
                               id="J-inputCode" name="checkCode" autocomplete="off" value="" data-explain=" "
                               maxlength="6" seed="Use-checkCode-for-resetQueryPwd-2" data-widget-cid="widget-1">
                        <span class="ui-form-other  fn-hide " id="J-noCode">
                            <a href="#" class="ui-form-other-link" id="J-noCode-link"
                               seed="Use-checkCode-for-resetQueryPwd-3">没收到短信校验码？</a>
                        </span>
                        <div class="ui-poptip ui-poptip-blue j-tipshow fn-hide" id="J-resentCode"
                             data-widget-cid="widget-1">
                            <div class="ui-poptip-shadow">
                                <div class="ui-poptip-container">
                                    <div class="ui-poptip-arrow ui-poptip-arrow-7">
                                        <em>◆</em>
                                        <span>◆</span>
                                    </div>
                                    <div class="ui-poptip-content">
                                        <ul class="list">
                                            <li><i class="icon-list"></i>网络通讯异常可能会造成短信丢失，请重新获取或稍后再试。</li>
                                            <li class="list-btn">
                                                <p class="ui-button  ui-button-sdisable" id="J-reGetCode"
                                                   data-widget-cid="widget-0">
                                                    <button class="ui-button-text" disabled="disabled" type="button"
                                                            autocomplete="off" seed="JReGetCode-btn" smartracker="on">
                                                        重新获取校验码
                                                    </button>
                                                </p>
                                                <span class="list-btn-explain list-btn-explain-loading"
                                                      id="J-reGetCode-success"></span>
                                                <p class="list-btn-explain list-btn-explain-error fn-hide"
                                                   id="J-reGetCode-error"><i class="icon icon-error"></i></p>
                                            </li>
                                            <li><i class="icon-list"></i>请核实手机是否已欠费停机，或者屏蔽了系统短信。</li>
                                            <li><i class="icon-list"></i>如果手机183****2704已丢失或停用，请 <a
                                                    href="https://accounts.alipay.com:443/console/queryStrategy.htm?sp=0-resetQueryPwd-fullpage"
                                                    seed="list-link" smartracker="on">选择其他验证方式</a>。
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="ui-form-item ui-form-item-last    ">
                        <div class="ui-button ui-button-morange" id="J-submit-btn">
                            <input type="submit" value="下一步" class="ui-button-text" seed="Do-resetQueryPwd-By-sms">
                        </div>
                        <a href="https://accounts.alipay.com:443/console/queryStrategy.htm?sp=0-resetQueryPwd-fullpage"
                           class="ui-form-other" seed="Do-resetQueryPwd-When-sms">重新选择验证方式</a>
                    </div>
                </form>
            </div>
        </div>




    </div>
</div><!-- CMS:会员中心cms/console/siteInfo.vm开始:console/siteInfo.vm -->
<!-- CMS:会员中心cms/console/siteInfo.vm结束:console/siteInfo.vm -->
<div class="foot">
    <div class="footer">
        <div class="copyright">
            ©2016 Taobao.com 版权所有
        </div>
        <div class="server" id="ServerNum">
            membercenter-60-53 &nbsp; 0ae4205f1479225560300731131989_0
        </div>
    </div>
</div>



<!-- uitpl:/component/tracker.vm -->
<!-- FD:106:alipay/tracker/tracker.vm:START -->
<!-- FD:106:alipay/tracker/tracker.vm:785:tracker.schema:全站自动化/性能/敏感信息打点开关:START -->



<!-- FD:106:alipay/tracker/sai.vm:START -->

<!-- FD:106:alipay/tracker/sai.vm:END -->


<!-- FD:106:alipay/tracker/cmsbuffer.vm:START -->
<!-- FD:106:alipay/tracker/cmsbuffer.vm:997:cmsbuffer.schema:main-CMS全站修复:START -->

<!-- FD:106:alipay/tracker/cmsbuffer.vm:997:cmsbuffer.schema:main-CMS全站修复:END -->
<!-- FD:106:alipay/tracker/cmsbuffer.vm:END -->
<!-- FD:106:alipay/tracker/tracker.vm:785:tracker.schema:全站自动化/性能/敏感信息打点开关:END -->
<!-- FD:106:alipay/tracker/tracker.vm:END -->


</body>
</html>