<!DOCTYPE html>
<!-- saved from url=(0132)https://accounts.alipay.com/console/queryStrategy.htm?site=0&page_type=fullpage&sp=0-resetQueryPwd-fullpage&scene_code=resetQueryPwd -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <meta charset="GBK">
    <title>重置登录密码</title>

    <meta name="keywords" content="网上购物-网上支付-安全支付-安全购物-购物，安全-支付-支付宝,在线-付款,收款-网上,贸易-网上贸易">

    <meta name="description" content="中国最大的第三方电子支付服务提供商">


    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <link charset="utf-8" rel="stylesheet" href="./css/membercenter.console.css" media="all">

    <style type="text/css">
        /**
 * @author: 宗渊（xingyun.wxy）
 * @desc: 兼容性icon，处理双因子校验
 * @create: 2014.08.04
 */
        .icon-sms-id_card, .icon-id_card-sms, .icon-id_card_raw-sms, .icon-sms-id_card_raw, .icon-sms-fast_pay_privacy, .icon-fast_pay_privacy-sms, .icon-sms-express_bank_card_info, .icon-express_bank_card_info-sms, .icon-sms-sec_qa, .icon-sec_qa-sms {
            background: url(./images/64KlQLdpf.png) no-repeat 0 0;
        }

        .ui-loading {
            width: 50px;
            height: 50px;
            background-repeat: no-repeat;
            background-image: url('data:image/gif;base64,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');
            background-image: url(./images/M9UQl3TuH.gif);
            text-align:center;
            line-height: 50px;
            font-size: 11px;
            color: #777;
            position: absolute;
            top: 8px;
            left: 20px;
        }

        #J-check-wait .ui-tipbox-content .ui-tipbox-title {
            font-size: 14px;
            color: #999;
        }

        #J-check-wait .ui-tipbox-content .check-ok1, #J-check-wait .ui-tipbox-content .check-ok3, #J-check-wait .ui-tipbox-content .check-ok5 {
            display: inline;
            padding-right: 50px;
            background: url("./images/3BZqRfJuPV.gif") right no-repeat;
        }

        #J-check-wait .ui-tipbox-content .check-ok3 {
            background-image: url("./images/3BZr1SAQqj.gif");
        }

        #J-check-wait .ui-tipbox-content .check-ok5 {
            background-image: url("./images/3BZrVN8NpF.gif");
        }

        .infobox {
            width: 670px;
            margin-top: 30px;
        }
    </style>

    <link href="" rel="dns-prefetch">
    <link href="" rel="dns-prefetch">
    <link href="" rel="dns-prefetch">
    <link href="" rel="dns-prefetch">
    <link href="" rel="dns-prefetch">
    <link href="" rel="dns-prefetch">
    <link href="" rel="dns-prefetch">


    <!-- uitpl:/component/trackerTime.vm -->
    <!-- CMS:全站公共 cms/tracker/iconfont.vm开始:tracker/iconfont.vm --><style>
        @font-face {
            font-family: "rei";
            src: url("./fonts/rei.eot"); /* IE9 */
            src: url("./fonts/rei_iefix.eot") format("embedded-opentype"), /* IE6-IE8 */
            url("./fonts/rei.woff") format("woff"), /* chrome 6+、firefox 3.6+、Safari5.1+、Opera 11+ */
            url("./fonts/rei.ttf")  format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+ */
            url("https://i.alipayobjects.com/common/fonts/rei.svg?20150616#rei") format("svg"); /* iOS 4.1- */
        }
        .iconfont {
            font-family:"rei";
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
    <!-- FD:106:alipay/tracker/tracker_time.vm:START --><!-- FD:106:alipay/tracker/tracker_time.vm:784:tracker_time.schema:全站 tracker 开关:START -->

    <!-- FD:106:alipay/tracker/tracker_time.vm:784:tracker_time.schema:全站 tracker 开关:END -->
    <!-- FD:106:alipay/tracker/tracker_time.vm:END -->
</head>
<!--[if lt IE 7]>
<body class="ie6"><![endif]--><!--[if IE 7]>
<body class="ie7"><![endif]--><!--[if IE 8]>
<body class="ie8"><![endif]--><!--[if IE 9]>
<body class="ie9"><![endif]--><!--[if !IE]><!-->
<body><!--<![endif]-->

<!-- 全站公告位 -->


<!-- CMS:全站公共 cms/notice/headNotice.vm开始:alipay/notice/headNotice.vm --><!--[if lte IE 7]>
<style>.kie-bar { display: none; height: 24px; line-height: 1.8; font-weight:normal; text-align: center; border:1px solid #fce4b5; background-color:#FFFF9B; color:#e27839; position: relative; font-size: 12px; margin: 5px 0 0 0; padding: 5px 0 2px 0; } .kie-bar a { text-decoration: none; color:#08c; background-repeat: none; } .kie-bar a#kie-setup-IE8,.kie-bar a#kie-setup-taoBrowser { padding: 0 0 2px 20px; *+padding-top: 2px; *_padding-top: 2px; background-repeat: no-repeat; background-position: 0 0; } .kie-bar a:hover { text-decoration: underline; } .kie-bar a#kie-setup-taoBrowser { background-position: 0 -20px; }</style>
<div id="kie-bar" class="kie-bar">您现在使用的浏览器版本过低，可能会导致部分图片和信息的缺失。请立即 <a href="http://www.microsoft.com/china/windows/IE/upgrade/index.aspx" id="kie-setup-IE8" seed="kie-setup-IE8" target="_blank" title="免费升级至IE8浏览器">免费升级</a> 或下载使用 <a href="http://download.browser.taobao.com/client/browser/down.php?pid=0080_2062" id="kie-setup-taoBrowser" seed="kie-setup-taoBrowser" target="_blank" title="淘宝浏览器">淘宝浏览器</a> ，安全更放心！ <a title="查看帮助" target="_blank" seed="kie-setup-help" href="http://help.alipay.com/lab/help_detail.htm?help_id=260579">查看帮助</a></div>
<![endif]-->

<!-- CMS:全站公共 cms/notice/headNotice.vm结束:alipay/notice/headNotice.vm --><!-- /全站公告位 -->
<!-- 头部 -->
<div class="head">
    <div class="header">
        <div class="header-cnt fn-clear">
            <h1 class="logo">
                <a href="http://member1.taobao.com/member/fresh/account_security.htm" class="logo-img logo-img-taobao" title="淘宝" seed="header-link-logo">
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
                    <a href="https://login.taobao.com/" seed="nav-link-login">登录</a>
                </li>
                <li>
                    <a href="http://member1.taobao.com/member/fresh/account_security.htm" seed="nav-link-mySite">我的淘宝</a>
                </li>
                <li class=" nav-last ">
                    <a href="http://service.taobao.com/support/main/service_center.htm" target="_blank" seed="nav-link-help">帮助中心</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- / 头部 -->

<div class="container">
    <div class="content">


        <!-- CMS:会员中心cms/console/scene.vm开始:console/scene.vm -->


        <p class="ft-14">你正在为账户 <em class="ft-orange">    		183****2704
            </em> 重置登录密码，请选择重置方式：</p>

        <!-- CMS:会员中心cms/会员中心/查询风险建议政策_除修改手机场景开始:console/queryRiskAdvicePolicy2.vm --><div class="infobox">
            <div class="ui-tipbox ui-tipbox-message fn-hide" id="J-check-wait">
                <div class="ui-loading"></div>
                <div class="ui-tipbox-content">





                    <h3 class="ui-tipbox-title check-ok5">安全产品检测完成</h3>
                </div>
            </div>
            <div class="ui-tipbox ui-tipbox-success" id="J-check-ok">
                <div class="ui-tipbox-icon ui-icon-success">
                </div>

                <div class="ui-tipbox-content">
                    <h3 class="ui-tipbox-title">经过检测，你在<font color="#f57800">不常用的环境</font>下操作，需要进行安全校验</h3>
                </div>
            </div>
            <div class="ui-tipbox ui-tipbox-error fn-hide" id="J-check-fail">
                <div class="ui-tipbox-icon ui-icon-error">
                </div>

                <div class="ui-tipbox-content">
                    <h3 class="ui-tipbox-title">账户状态异常，别担心还有客服为你服务</h3>
                </div>
            </div>
        </div>
        <!-- CMS:会员中心cms/会员中心/查询风险建议政策_除修改手机场景结束:console/queryRiskAdvicePolicy2.vm -->
        <ol class="select-strategy" id="J-select-strategy">
            <li class="fn-clear">
                <i class="icon icon-sms"></i>
                <div class="desc desc-hasnotice">
                    <h3 class="title"><span class="text">通过验证短信</span><i class="recommend">推荐</i></h3>
                    <p class="notice">如果你的183****2704手机还在正常使用，请选择此方式</p>
                </div>
                <div class="ui-button ui-button-morange">
                    <a class="ui-button-text j-strategy" data-method="sms" seed="Do-resetQueryPwd-Select-sms" href="https://accounts.alipay.com/console/selectStrategy.htm?sp=0-resetQueryPwd-fullpage&strategy=sms">立即重置</a>
                </div>
            </li>
            <li class="fn-clear">
                <i class="icon icon-manual"></i>
                <!-- CMS:会员中心cms/console/queryStrategy.vm开始:console/queryStrategy.vm -->                                        <div class="desc desc-hasnotice">
                    <h3 class="title"><span class="text">通过人工服务</span></h3>
                    <p class="notice">填写申请单，上传身份证件图片，等待审核结果</p>
                </div>
                <div class="ui-button ui-button-morange">
                    <a class="ui-button-text j-strategy" data-method="manual" seed="Do-resetQueryPwd-Select-manual" href="http://service.taobao.com/support/main/complain_user.htm" target="_blank">立即重置</a>
                </div>
            </li>
        </ol>



    </div></div><!-- CMS:会员中心cms/console/siteInfo.vm开始:console/siteInfo.vm -->
<!-- CMS:会员中心cms/console/siteInfo.vm结束:console/siteInfo.vm --><div class="foot">
    <div class="footer">
        <div class="copyright">
            &#169;2016 Taobao.com 版权所有        </div>
        <div class="server" id="ServerNum">
            membercenter-60-53 &nbsp; 0ae4205f1479225072660700531989_0
        </div>
    </div>
</div>



<!-- uitpl:/component/tracker.vm -->
<!-- FD:106:alipay/tracker/tracker.vm:START --><!-- FD:106:alipay/tracker/tracker.vm:785:tracker.schema:全站自动化/性能/敏感信息打点开关:START -->

<!-- FD:106:alipay/tracker/sai.vm:START -->

<!-- FD:106:alipay/tracker/sai.vm:END -->



<!-- FD:106:alipay/tracker/cmsbuffer.vm:START --><!-- FD:106:alipay/tracker/cmsbuffer.vm:997:cmsbuffer.schema:main-CMS全站修复:START -->

<!-- FD:106:alipay/tracker/cmsbuffer.vm:997:cmsbuffer.schema:main-CMS全站修复:END -->
<!-- FD:106:alipay/tracker/cmsbuffer.vm:END --><!-- FD:106:alipay/tracker/tracker.vm:785:tracker.schema:全站自动化/性能/敏感信息打点开关:END -->
<!-- FD:106:alipay/tracker/tracker.vm:END -->



</body></html>