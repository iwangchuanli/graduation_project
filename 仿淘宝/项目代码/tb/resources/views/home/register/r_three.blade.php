
<html class="ks-webkit537 ks-webkit ks-chrome35 ks-chrome ks-webkit537 ks-webkit ks-chrome35 ks-chrome">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="data-spm" content="a2145">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <title>账户注册 | 淘宝网</title>
    <!--吊顶assets START-->
    <link rel="stylesheet" href="{{asset('css/global-min.2.6.13.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/index-min.css')}}">
    <!--吊顶assets END-->
    <!-- S GLOBAL CSS -->
    <link rel="stylesheet" href="{{asset('css/global-min.3.5.34.css')}}">
    <link rel="stylesheet" href="{{asset('css/global-header-min.1.0.css')}}">
    <!-- S GLOBAL CSS -->

	<script src="{{asset('js/jquery.1.11.js')}}"></script>

    <link
        href="{{asset('css/register-common.2.8.11.css')}}" rev="stylesheet" rel="stylesheet">

    <link charset="utf-8" href="{{asset('css/countdown-index-min.2.0.1.css')}}" rel="stylesheet">
</head>
<body data-spm="7378697">

<!--吊顶 START-->
<!-- S GLOBAL HTML -->
@include('head')
<!-- -->
<!-- 全网顶通 -->
<!-- E GLOBAL HTML   -->


<!--吊顶 END-->


<!-- S GLOBAL JS -->

<!-- E GLOBAL JS -->


<div class="page lang-zh-S">


    <input class="J_From" type="hidden" value="TB">
    <input class="J_AllowIframe" type="hidden" value="false">


    <!-- register010178254175.et2 -->

    <input type="hidden" id="J_Member" value="member.9">

    <div class="header">

       <div class="header">
  <div class="logo">
    <h1><a href="//www.taobao.com"><img src="http://www.tb.com/images/tb.png" style="width:120px"></a></h1>

    <h2 class="tsl" data-phase-id="r_p_registration">用户注册</h2>
  </div>
</div>
    </div>


    <div class="content" style="margin-top:20px">
        <div class="reg-success">
            <i class="iconfont"><img src="{{asset('images/yes.png')}}" width="25" height="25"></i>
            <h2 class="tsl" data-phase-id="r_suc_successTip">恭喜注册成功，你的账户为：</h2>
            <p><span class="tsl" data-phase-id="r_suc_loginAccount">用户ID</span>
                <em>{{$uid}}</em>
                <span class="tsl" data-phase-id="r_suc_loginTip">(你的账号通用于支付宝、天猫、一淘、聚划算、来往、阿里云、阿里巴巴)</span>
            </p>
            <div class="nick-item">
                <div class="nick"><span class="tsl" data-phase-id="r_suc_nickName">用户手机号：</span>{{$uphone}}</div>
                <div class="ui-tiptext-container ui-tiptext-container-message">
                    <div class="ui-tiptext-arrow ui-tiptext-arrowleft">
                        <em>◆</em>
                        <span>◆</span>
                    </div>
                    <div class="ui-tiptext ui-tiptext-message">
                        领新手红包，赚淘金币，尽在新手专区！<a href="//vip.taobao.com/new.htm">查看详情</a>
                    </div>
                </div>
                <div class="ui-tiptext-container ui-tiptext-container-message" style="margin-left: 10px;">
                    <div class="ui-tiptext-arrow ui-tiptext-arrowleft">
                        <em>◆</em>
                        <span>◆</span>
                    </div>
                    <div class="ui-tiptext ui-tiptext-message tsl" data-phase-id="r_1e_openStoreFree">
                        <a href="//openshop.mai.taobao.com/openshop/welcome.htm">免费开店入口</a>
                    </div>
                </div>
                <div class="ui-tiptext-container ui-tiptext-container-message" style="margin-left: 10px;">
                    <div class="ui-tiptext-arrow ui-tiptext-arrowleft">
                        <em>◆</em>
                        <span>◆</span>
                    </div>
                    <div class="ui-tiptext ui-tiptext-message">
                        安心购物，100万账号安全险<a href="http://qd.alibaba.com/zt/insurance/index.html" target="_blank">免费领</a>
                    </div>
                </div>
            </div>
        </div>

        <ul class="reg-success-iframe">
            <li>
                <a href="http://weibo.com/a/bind/check?tbp=FWSg315wmr22k1vFZraUqiSxtpfa%2FP73be0Uk51%2F9aH%2Bih93pcbvpbu1eo0b5PQWn%2BTsqJrnpzYC%0AlF55tcP8Vy0l18XUp3SrnvR%2BVX3NIXtcWH%2BBmOlyFrNV&amp;sign=MCwCFEJLHFHAhzKdiAoB9gYNtsu4FcOdAhR1%2BfHSxyzcYl%2BClbnYGv3%2BvaIbXg%3D%3D&amp;goto=https%3A%2F%2Fmember1.taobao.com%2Fmember%2Ffresh%2Fweibo_bind.htm%3Ffrom%3Dregister%26theme%3Dpage%26sid%3Dc1293ce126c956837ff3f219ee493aab&amp;entry=taobao"
                   target="_blank">
                    <img src="{{asset('images/TB1qXXcIVXXXXbYXpXXXXXXXXXX.png')}}" alt="快速绑定微博账号">
                </a>
            </li>
            <li>
                <a  href="https://cmspromo.alipay.com/beitoukj/zfblqhb.htm?skip=false&amp;sign_from=3000&amp;sign_account_no=20885222901713420156">
                    <img src="{{asset('images/tui.png')}}" alt="">
                </a>
            </li>
            <li>
                <a href="//wangwang.taobao.com/?channel=register" target="_blank">
                    <img src="{{asset('images/TB1B7JzLVXXXXb9XVXXFseY4XXX-330-240.png')}}" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="extra-mod" data-spm="1998021088">

    <link rel="./css/global-min.3.4.6.css">

    <style>
        /* 布局总置 */
        .vip_layout_wrap {
            width: 100%;
        }

        .vip_layout_content {
            width: 1190px;
            margin: 0 auto;
            position: relative;
        }

        @media screen and (max-width: 1209px) {
            .vip_layout_content {
                width: 990px;
            }

            .vip_sign_hidden {
                display: none;
            }
        }

        .vip_newer-price,
        .vip_title_h3 em,
        .vip_button_get-gift,
        .vip_newer-gift_more a,
        .vip_link_newer-rights,
        .vip_newer-gift_menu_item a {
            background-image: url("./images/TB1JgBXFFXXXXXebVXX1oqRUFXX-414-576.png");
            background-repeat: no-repeat;
            display: block;
            overflow: hidden;
            text-indent: -999px;
        }

        /* 导航 */
        .vip_newer-gift_menu {
            height: 40px;
            margin-top: 13px;
            background: #03B7E8;
            position: relative;
        }

        .vip_layout_background-hold {
            width: 50%;
            height: 40px;
            position: absolute;
            background: #FFF;
            top: 0;
            right: 0;
        }

        .vip_newer-gift_menu .vip_layout_content {
            background: #FFF;
        }

        .vip_newer-gift_menu_list {
            height: 40px;
            overflow: hidden;
            position: relative;
            z-index: 100;
        }

        .vip_newer-gift_menu_item {
            float: left;
            margin-right: 4px;
        }

        .vip_newer-gift_menu_item a {
            height: 40px;
        }

        .vip_newer-gift_menu_item_1 a {
            width: 143px;
            background-position: 0 0;
        }

        .vip_newer-gift_menu_item_2 a {
            width: 207px;
            background-position: 0 -40px;
        }

        .vip_newer-gift_menu_item_2 a:hover {
            background-position: -207px -40px;
        }

        .vip_newer-gift_menu_item_3 a {
            width: 147px;
            background-position: 0 -80px;
        }

        .vip_newer-gift_menu_item_3 a:hover {
            background-position: -147px -80px;
        }

        .vip_link_newer-rights {
            display: block;
            width: 280px;
            height: 36px;
            padding-left: 40px;
            text-indent: 0;
            background-position: 0 -159px;
            position: absolute;
            top: -44px;
            right: 0;
            font: 20px/36px 'microsoft yahei';
            color: #FF6602;
            z-index: 1000;
        }

        .vip_link_newer-rights:hover {
            text-decoration: none;
        }

        /* 新人大礼包 */
        .vip_newer-gift_wrap {
            height: 366px;
            background-image: url("./images/TB1TRFsXpXXXXcPbVXXdqnD9XXX-1439-366.jpg");
            background-position: center center;
            background-size: cover;
            position: relative;
            z-index: 100;
        }

        .vip_newer-gift_wrap .vip_layout_content {
            position: relative;
        }

        .vip_button_go {
            display: block;
            width: 103px;
            height: 102px;
            position: absolute;
            top: -51px;
            left: 544px;
            z-index: 200px;
        }

        @media screen and (max-width: 1209px) {
            .vip_button_go {
                left: 550px;
            }
        }

        .vip_button_go .vip_layout_border-hold {
            display: block;
            display: none \0;
            width: 98px;
            height: 98px;
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
            border: 3px solid #21B6D7;
            border-radius: 50px;
        }

        .vip_title_h3 {
            height: 39px;
            padding: 17px 0 16px;
            overflow: hidden;
            font: 14px/50px 'microsoft yahei';
            color: #FFF;
        }

        .vip_title_h3 em {
            height: 39px;
            float: left;
        }

        .vip_newer-gift_wrap .vip_title_h3 em {
            width: 168px;
            background-position: 0 -120px;
        }

        .vip_newer-gift_item {
            background: #FFF;
            border: 3px solid #FFF;
            float: left;
            margin-right: 10px;
            border-radius: 8px;
            text-align: center;
        }

        .vip_newer-gift_item:hover {
            border-color: #FF6501;
        }

        .vip_newer-gift_item a {
            display: block;
            width: 184px;
            height: 254px;
            overflow: hidden;
            color: #5D5D5D;
        }

        .vip_newer-gift_item a:hover {
            text-decoration: none;
        }

        .vip_newer-gift_more {
            margin-right: 0;
        }

        .vip_newer-gift_more a {
            background-position: 0 -195px;
        }

        .vip_newer-gift_item img {
            display: block;
            margin: 26px auto 0;
        }

        .vip_newer-gift_item h4 {
            font: 14px/47px 'microsoft yahei'
        }

        .vip_button_get-gift {
            width: 106px;
            height: 28px;
            background-position: -214px -257px;
            margin: 14px auto 0;
        }

        /* 新人体验价精选 */
        .vip_newer-price_wrap {
            height: 806px;
            background-image: url("./images/TB10vJtFFXXXXafaFXX8jlb8XXX-1440-806.jpg");
            background-position: center center;
            background-size: cover;
            border-top: 3px solid #12DAAC;
        }

        .vip_newer-price_wrap .vip_title_h3 em {
            width: 219px;
            background-position: 0 -455px;
        }

        .vip_newer-price_list {
            width: 100%;
            overflow: hidden;
        }

        .vip_newer-price_item {
            width: 224px;
            height: 338px;
            float: left;
            margin: 0 10px 10px 0;
            background: #FFF;
            border: 3px solid #1BCEA6;
        }

        .vip_newer-price_item:hover {
            border-color: #FF6600;
        }

        @media screen and (max-width: 1209px) {
            .vip_newer-price_item {
                margin-right: 23px;
            }
        }

        .vip_newer-price_item_last {
            margin-right: 0;
        }

        .vip_newer-price_item h4 {
            width: 220px;
            height: 32px;
            padding: 0 5px;
            line-height: 32px;
            overflow: hidden;
            color: #3B3B3B;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-weight: normal;
        }

        .vip_newer-price_item h4 a {
            color: #3C3C3C;
        }

        .vip_newer-price {
            height: 19px;
            line-height: 19px;
            overflow: hidden;
            padding-left: 89px;
            background-position: 5px -549px;
            text-indent: 0;
            color: #FF4100;
            font-weight: bold;
            font-family: arial, sans serif;
        }

        .vip_newer-price_large {
            font-size: 16px;
        }

        .vip_info_item_vip-price {
            height: 45px;
            margin: 10px 5px 0;
            padding-top: 1px;
            border-top: 2px solid #DBDBDB;
            overflow: hidden;
            color: #999;
        }

        .vip_info_item_vip-price dl {
            float: left;
            height: 45px;
            text-align: center;
            line-height: 20px;
        }

        .vip_info_item_vip-price .yen {
            font-family: arial, sans serif;
        }

        .vip_info_item_level-1,
        .vip_info_item_level-3 {
            width: 69px;
        }

        .vip_info_item_level-2 {
            width: 74px;
        }

        .vip_info_item_level-1,
        .vip_info_item_level-2 {
            border-right: 1px dotted #DBDBDB;
        }

        .vip_button_more-items {
            position: absolute;
            width: 106px;
            height: 28px;
            text-indent: -999px;
            overflow: hidden;
            background: url("./images/TB1WRU7FFXXXXcoXXXXukX9_pXX-106-28.png") no-repeat 0 0;
            top: 20px;
            right: 0;
        }

        .vip_newer-price_countdown {
            position: absolute;
            top: 20px;
            right: 150px;
            color: #FFF;
            font-size: 14px;
        }

        .cd-slide .hand {
            background: url("./images/TB1.cw6FFXXXXbzXVXXukmWFVXX-30-31.png") no-repeat 0 0;
            padding: 0 2px;
        }

        .cd-slide .hand .digital {
            color: #18C8A1;
        }

        /* 淘宝购物教程 */
        .vip_newer-steps_wrap {
            background: #FFF;
        }

        .vip_newer-steps_wrap .vip_title_h3 {
            color: #505050
        }

        .vip_newer-steps_wrap .vip_title_h3 em {
            width: 248px;
            background-position: 0 -494px;
        }

        .newer-mod .newer-hd {
            padding: 17px 0 0 29px;
            text-align: left;
            background: url("./images/T1LbXBFkXhXXcX6QHX-4-18.png") no-repeat 18px 20px transparent;
        }

        .newer-mod .newer-hd h3 {
            font-family: 'microsoft yahei';
            font-size: 16px;
            font-weight: normal;
            color: #222222;
        }

        .newer-mod .newer-hd h3 span {
            font-size: 14px;
            color: #858585;
            margin-left: 10px;
        }

        .newer-mod .newer-hd .more-link {
            padding-right: 10px;
            margin-top: 5px;
            _margin-top: -19px;
            float: right;
            font-size: 14px;
            font-weight: normal;
            color: #858585;
            text-decoration: none;
            background: url("./images/T19vibFnXfXXabBjU_-10-79.png") right 3px no-repeat;
        }

        .newer-mod .newer-hd .shopping {
            display: none;
            font: 12px/1.5 'microsoft yahei';
            margin-right: 15px;
            padding-right: 20px;
            float: right;
            color: #4BABE5;
            background: url("./images/T1zRevFl8aXXX1azE.-13-13.png") 87px 3px no-repeat;
            *margin-top: -30px;
            _margin-top: -30px;
        }

        .newer-step {
            width: 988px;
            margin: 0 auto 60px;
            border: #E9E9E9 solid 1px;
        }

        .newer-step .newer-bd {
            height: 330px;
            overflow: hidden;
            position: relative;
        }

        .newer-step .newer-bd .newer-stepitem {
            width: 988px;
            height: 214px;
            position: relative;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlink {
            padding: 5px 0;
            padding-left: 20px;
            position: absolute;
            color: #adacac;
            background: url("./images/T16fyEFsXdXXXeCKDX-15-15.png") 0 7px no-repeat;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlink img {
            display: none;
            margin-left: 5px;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlinkfinish {
            background: url("./images/T15cdKFBtlXXXeCKDX-15-15.png") 0 7px no-repeat;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlink-0 {
            left: 200px;
            top: 144px;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlink-1 {
            left: 308px;
            top: 144px;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlink-2 {
            left: 390px;
            top: 144px;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlink-3 {
            left: 206px;
            top: 165px;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlink-4 {
            left: 326px;
            top: 165px;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlink-5 {
            left: 202px;
            top: 162px;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlink-6 {
            left: 296px;
            top: 162px;
        }

        .newer-step .newer-bd .newer-stepitem .newer-stepitemlink-7 {
            left: 400px;
            top: 162px;
        }

        .newer-step .newer-bd .ks-switchable-content {
            height: 214px;
            overflow: hidden;
            position: absolute;
            left: 0px;
            top: 120px;
            z-index: 100;
        }

        .newer-step .newer-bd .ks-switchable-nav {
            width: 990px;
            height: 100px;
            background: url("./images/T1E71xFdFeXXbF8zHv-999-95.png") -4px 2px no-repeat;
            position: absolute;
            left: 0;
            top: 15px;
            z-index: 100;
        }

        .newer-step .newer-bd .ks-switchable-nav li {
            width: 87px;
            height: 100px;
            float: left;
            margin: 0 30px 0 73px;
            _display: inline;
            cursor: pointer;
            background: url("./images/T1YXdZFlliXXbZ1InD-999-124.png") -9999em -9999em no-repeat;
        }

        .newer-step .newer-bd .ks-switchable-nav #newer-steptriggers-1.ks-active {
            background-position: -82px -3px;
        }

        .newer-step .newer-bd .ks-switchable-nav #newer-steptriggers-2.ks-active {
            background-position: -271px -3px;
        }

        .newer-step .newer-bd .ks-switchable-nav #newer-steptriggers-3.ks-active {
            background-position: -463px -3px;
        }

        .newer-step .newer-bd .ks-switchable-nav #newer-steptriggers-4.ks-active {
            background-position: -648px -3px;
        }

        .newer-step .newer-bd .ks-switchable-nav #newer-steptriggers-5.ks-active {
            background-position: -843px -3px;
        }

        .newer-step .packdown-btn {
            position: absolute;
            width: 32px;
            height: 32px;
            display: block;
            text-indent: -9999px;
            background: url("./images/T1OtWrFiJdXXa94Hfd-32-32.png") -1px 0 no-repeat;
            right: 7px;
            top: 35px;
            cursor: pointer;
            outline: none;
            z-index: 1000;
        }
    </style>

    <!--[if IE]>
    <style>
        .vip_button_go .vip_layout_border-hold {
            display: none;
        }
    </style>
    <![endif]-->

    <div id="J_VIP_Wrap">
        <div class="vip_layout_wrap vip_newer-gift_menu">
            <div class="vip_layout_content">
                <ul class="vip_newer-gift_menu_list">
                    <li class="vip_newer-gift_menu_item vip_newer-gift_menu_item_1"><a class="J_VIP_Log"
                                                                                       data-log="1.8.1"
                                                                                       href="#J_VIP_Box1">新人大礼包</a></li>
                    <li class="vip_newer-gift_menu_item vip_newer-gift_menu_item_2"><a class="J_VIP_Log"
                                                                                       data-log="1.8.2"
                                                                                       href="#J_VIP_Box2">v5尊贵会员体验价</a>
                    </li>
                    <li class="vip_newer-gift_menu_item vip_newer-gift_menu_item_3"><a class="J_VIP_Log"
                                                                                       data-log="1.8.3"
                                                                                       href="#J_VIP_Box3">新手购物宝典</a>
                    </li>
                </ul>
            </div>
            <div class="vip_layout_background-hold"></div>
        </div>

        <div id="J_VIP_Box1" class="vip_layout_wrap vip_newer-gift_wrap" >
            <div class="vip_layout_content">
                <h3 class="vip_title_h3"><em>新人大礼包</em> <span>直接领取现金红包、包邮卡、淘金币等多重特惠礼包</span></h3>

                <ul class="vip_newer-gift_list">
                    <li class="vip_newer-gift_item">
                        <a href="//vip.taobao.com/newuser/commonView.htm?spm=a1z1d.3067229.0.0.ISic0r&amp;code=huafei"
                           target="_blank">
                            <img width="106" height="104" src="{{asset('images/T125IiFmxaXXbkbOsp-106-104.png')}}"
                                 alt="">
                            <h4>话费现金红包</h4>
                            <span class="vip_button_get-gift">立即领取</span>
                        </a>
                    </li>
                    <li class="vip_newer-gift_item">
                        <a href="//vip.taobao.com/newuser/commonView.htm?spm=a1z1d.3067229.0.0.U8q636&amp;code=taojinbi"
                           target="_blank">
                            <img width="106" height="104" src="{{asset('images/T19Z_BFn4gXXbkbOsp-106-104.png')}}"
                                 alt="">
                            <h4>领金币享低价</h4>
                            <span class="vip_button_get-gift">立即领取</span>
                        </a>
                    </li>
                    <li class="vip_newer-gift_item">
                        <a href="//vip.taobao.com/newuser/commonView.htm?spm=a1z1d.3067229.0.0.U8q636&amp;code=kuaijie"
                           target="_blank">
                            <img width="106" height="104" src="{{asset('images/T1a3pkFLVaXXbkbOsp-106-104.png')}}"
                                 alt="">
                            <h4>快捷支付送运费险</h4>
                            <span class="vip_button_get-gift">立即领取</span>
                        </a>
                    </li>
                    <li class="vip_newer-gift_item">
                        <a href="//vip.taobao.com/newuser/commonView.htm?spm=a1z1d.3067229.0.0.wLUWI4&amp;code=xiami"
                           target="_blank">
                            <img width="106" height="104" src="{{asset('images/T1LMAhFb8aXXbkbOsp-106-104.png')}}"
                                 alt="">
                            <h4>虾米免费音乐</h4>
                            <span class="vip_button_get-gift">立即领取</span>
                        </a>
                    </li>
                    <li class="vip_newer-gift_item vip_sign_hidden" style="display:none">
                        <a href="//vip.taobao.com/newuser/commonView.htm?spm=a1z1d.3067229.0.0.U8q636&amp;code=cod"
                           target="_blank">
                            <img width="106" height="104" src="{{asset('images/T1vtMjFdhaXXbkbOsp-106-104.png')}}"
                                 alt="">
                            <h4>领专享包邮卡</h4>
                            <span class="vip_button_get-gift">立即领取</span>
                        </a>
                    </li>
                    <li class="vip_newer-gift_item vip_newer-gift_more">
                        <a href="//vip.taobao.com/newuser/allGift.htm?spm=a1z1d.3067229.0.0.QXkMRP"
                           target="_blank">更多礼包</a>
                    </li>
                </ul>

                <a class="J_VIP_Log J_vIP_Button_GO vip_button_go" data-log="1.8.4" href="#J_VIP_Box1">
                    <img class="J_VIP_Log" data-log="1.8.4" width="103" height="102"
                         src="{{asset('images/TB13tsWFFXXXXadXFXXwsWBYpXX-103-102.gif')}}" alt="">
                    <span class="J_VIP_Log vip_layout_border-hold" data-log="1.8.4"></span>
                </a>

                <a class="J_VIP_Log vip_link_newer-rights" data-log="1.8.5" href="#J_VIP_Box1">快来开启你的新人专属特权~</a>
            </div>
        </div>

        <div id="J_VIP_Box2" class="vip_layout_wrap vip_newer-price_wrap">
            <div class="vip_layout_content">
                <h3 class="vip_title_h3"><em>新人体验价精选</em> <span>新人限时体验V5尊贵会员专享价</span></h3>

                <div class="J_VIP_NewerPriceList vip_newer-price_list">
                    <div class="vip_newer-price_item "><a href="//item.taobao.com/item.htm?id=521275417756"
                                                          target="_blank"> <img width="224" height="224"
                                                                                src="{{asset('picture/TB1hI6WMVXXXXcgaXXXXXXXXXXX_!!0-item_pic.jpg_230x230xz.jpg')}}"
                                                                                alt=""> </a>   <h4><a
                                href="//item.taobao.com/item.htm?id=521275417756" target="_blank">秋装新品 男士休闲针织开衫
                                韩版修身加绒加厚连帽毛衣外套男潮</a></h4>
                        <p class="vip_newer-price"><span class="vip_newer-price_large">¥101</span>.66</p>
                        <div class="vip_info_item_vip-price">
                            <dl class="vip_info_item_level-1">
                                <dt>V0</dt>
                                <dd class="act"><span class="yen">¥</span>598.00</dd>
                            </dl>
                            <dl class="vip_info_item_level-2">
                                <dt>V1-V3</dt>
                                <dd class="act"><span class="yen">¥</span>113.62</dd>
                            </dl>
                            <dl class="vip_info_item_level-3">
                                <dt>V4-V5</dt>
                                <dd class="act"><span class="yen">¥</span>101.66</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="vip_newer-price_item "><a href="//item.taobao.com/item.htm?id=522730063284"
                                                          target="_blank"> <img width="224" height="224"
                                                                                src="{{asset('picture/TB1HshMJVXXXXX6XpXXXXXXXXXX_!!0-item_pic.jpg_230x230xz.jpg')}}"
                                                                                alt=""> </a>   <h4><a
                                href="//item.taobao.com/item.htm?id=522730063284" target="_blank">2016女秋冬新款加绒加厚外穿假两件打底裤高腰大码蕾丝裙裤打底裤</a>
                        </h4>
                        <p class="vip_newer-price"><span class="vip_newer-price_large">¥33</span>.28</p>
                        <div class="vip_info_item_vip-price">
                            <dl class="vip_info_item_level-1">
                                <dt>V0</dt>
                                <dd class="act"><span class="yen">¥</span>208.00</dd>
                            </dl>
                            <dl class="vip_info_item_level-2">
                                <dt>V1-V3</dt>
                                <dd class="act"><span class="yen">¥</span>37.44</dd>
                            </dl>
                            <dl class="vip_info_item_level-3">
                                <dt>V4-V5</dt>
                                <dd class="act"><span class="yen">¥</span>33.28</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="vip_newer-price_item "><a href="//item.taobao.com/item.htm?id=526234945716"
                                                          target="_blank"> <img width="224" height="224"
                                                                                src="{{asset('picture/TB2tJhJXaa5V1Bjy0FaXXaXvpXa_!!1862317969.jpg_230x230xz.jpg')}}"
                                                                                alt=""> </a>   <h4><a
                                href="//item.taobao.com/item.htm?id=526234945716" target="_blank">气囊防摔苹果6手机壳软6plus硅胶透明防爆六男女iphone日韩6s防震</a>
                        </h4>
                        <p class="vip_newer-price"><span class="vip_newer-price_large">¥17</span>.94</p>
                        <div class="vip_info_item_vip-price">
                            <dl class="vip_info_item_level-1">
                                <dt>V0</dt>
                                <dd class="act"><span class="yen">¥</span>78.00</dd>
                            </dl>
                            <dl class="vip_info_item_level-2">
                                <dt>V1-V3</dt>
                                <dd class="act"><span class="yen">¥</span>19.50</dd>
                            </dl>
                            <dl class="vip_info_item_level-3">
                                <dt>V4-V5</dt>
                                <dd class="act"><span class="yen">¥</span>17.94</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="vip_newer-price_item "><a href="//item.taobao.com/item.htm?id=538174794053"
                                                          target="_blank"> <img width="224" height="224"
                                                                                src="{{asset('picture/TB1FuF6NVXXXXcHXpXXXXXXXXXX_!!0-item_pic.jpg_230x230xz.jpg')}}"
                                                                                alt=""> </a>   <h4><a
                                href="//item.taobao.com/item.htm?id=538174794053" target="_blank">手套女冬可爱毛绒全指手套韩版卡通情侣手套男女加厚半指手套学生</a>
                        </h4>
                        <p class="vip_newer-price"><span class="vip_newer-price_large">¥15</span>.01</p>
                        <div class="vip_info_item_vip-price">
                            <dl class="vip_info_item_level-1">
                                <dt>V0</dt>
                                <dd class="act"><span class="yen">¥</span>79.00</dd>
                            </dl>
                            <dl class="vip_info_item_level-2">
                                <dt>V1-V3</dt>
                                <dd class="act"><span class="yen">¥</span>16.59</dd>
                            </dl>
                            <dl class="vip_info_item_level-3">
                                <dt>V4-V5</dt>
                                <dd class="act"><span class="yen">¥</span>15.01</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="vip_newer-price_item  vip_newer-price_item_last "><a
                            href="//item.taobao.com/item.htm?id=45563741846" target="_blank"> <img width="224"
                                                                                                   height="224"
                                                                                                   src="{{asset('picture/TB1yt9WIXXXXXcuXXXXXXXXXXXX_!!0-item_pic.jpg_230x230xz.jpg')}}"
                                                                                                   alt=""> </a>   <h4><a
                                href="//item.taobao.com/item.htm?id=45563741846" target="_blank">爱悦姿薄款蕾丝女士内衣性感背心式厚小胸罩聚拢调整型无钢圈文胸</a>
                        </h4>
                        <p class="vip_newer-price"><span class="vip_newer-price_large">¥25</span>.20</p>
                        <div class="vip_info_item_vip-price">
                            <dl class="vip_info_item_level-1">
                                <dt>V0</dt>
                                <dd class="act"><span class="yen">¥</span>168.00</dd>
                            </dl>
                            <dl class="vip_info_item_level-2">
                                <dt>V1-V3</dt>
                                <dd class="act"><span class="yen">¥</span>28.56</dd>
                            </dl>
                            <dl class="vip_info_item_level-3">
                                <dt>V4-V5</dt>
                                <dd class="act"><span class="yen">¥</span>25.20</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="vip_newer-price_item "><a href="//item.taobao.com/item.htm?id=526280861266"
                                                          target="_blank"> <img width="224" height="224"
                                                                                src="{{asset('picture/TB1U7HROXXXXXXxXFXXXXXXXXXX_!!0-item_pic.jpg_230x230xz.jpg')}}"
                                                                                alt=""> </a>   <h4><a
                                href="//item.taobao.com/item.htm?id=526280861266" target="_blank">正品全身去角质去鸡皮搓泥宝 男女士沐浴露
                                深层清洁搓泥浴宝包邮</a></h4>
                        <p class="vip_newer-price"><span class="vip_newer-price_large">¥24</span>.50</p>
                        <div class="vip_info_item_vip-price">
                            <dl class="vip_info_item_level-1">
                                <dt>V0</dt>
                                <dd class="act"><span class="yen">¥</span>98.00</dd>
                            </dl>
                            <dl class="vip_info_item_level-2">
                                <dt>V1-V3</dt>
                                <dd class="act"><span class="yen">¥</span>29.40</dd>
                            </dl>
                            <dl class="vip_info_item_level-3">
                                <dt>V4-V5</dt>
                                <dd class="act"><span class="yen">¥</span>24.50</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="vip_newer-price_item "><a href="//item.taobao.com/item.htm?id=535330827357"
                                                          target="_blank"> <img width="224" height="224"
                                                                                src="{{asset('picture/TB1XnreOXXXXXckXXXXYXGcGpXX_M2.SS2_230x230xz.jpg')}}"
                                                                                alt=""> </a>   <h4><a
                                href="//item.taobao.com/item.htm?id=535330827357" target="_blank">2016新款女包菱格链条包单肩斜挎包日韩百搭迷你小包包小香风潮包</a>
                        </h4>
                        <p class="vip_newer-price"><span class="vip_newer-price_large">¥18</span>.17</p>
                        <div class="vip_info_item_vip-price">
                            <dl class="vip_info_item_level-1">
                                <dt>V0</dt>
                                <dd class="act"><span class="yen">¥</span>79.00</dd>
                            </dl>
                            <dl class="vip_info_item_level-2">
                                <dt>V1-V3</dt>
                                <dd class="act"><span class="yen">¥</span>19.75</dd>
                            </dl>
                            <dl class="vip_info_item_level-3">
                                <dt>V4-V5</dt>
                                <dd class="act"><span class="yen">¥</span>18.17</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="vip_newer-price_item "><a href="//item.taobao.com/item.htm?id=521095982684"
                                                          target="_blank"> <img width="224" height="224"
                                                                                src="{{asset('picture/TB1oBRYNVXXXXXBXFXXXXXXXXXX_!!0-item_pic.jpg_230x230xz.jpg')}}"
                                                                                alt=""> </a>   <h4><a
                                href="//item.taobao.com/item.htm?id=521095982684" target="_blank">青年运动裤男士秋冬加绒加厚大码束脚休闲裤小脚针织卫裤跑步裤子</a>
                        </h4>
                        <p class="vip_newer-price"><span class="vip_newer-price_large">¥119</span>.80</p>
                        <div class="vip_info_item_vip-price">
                            <dl class="vip_info_item_level-1">
                                <dt>V0</dt>
                                <dd class="act"><span class="yen">¥</span>599.00</dd>
                            </dl>
                            <dl class="vip_info_item_level-2">
                                <dt>V1-V3</dt>
                                <dd class="act"><span class="yen">¥</span>131.78</dd>
                            </dl>
                            <dl class="vip_info_item_level-3">
                                <dt>V4-V5</dt>
                                <dd class="act"><span class="yen">¥</span>119.80</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="vip_newer-price_item "><a href="//item.taobao.com/item.htm?id=537991341994"
                                                          target="_blank"> <img width="224" height="224"
                                                                                src="{{asset('picture/TB1eIX9NXXXXXbgXpXXXXXXXXXX_!!0-item_pic.jpg_230x230xz.jpg')}}"
                                                                                alt=""> </a>   <h4><a
                                href="//item.taobao.com/item.htm?id=537991341994" target="_blank">秋季新款韩版女装宽松大码上衣镂空字母印花长袖学生T恤打底衫女</a>
                        </h4>
                        <p class="vip_newer-price"><span class="vip_newer-price_large">¥26</span>.88</p>
                        <div class="vip_info_item_vip-price">
                            <dl class="vip_info_item_level-1">
                                <dt>V0</dt>
                                <dd class="act"><span class="yen">¥</span>128.00</dd>
                            </dl>
                            <dl class="vip_info_item_level-2">
                                <dt>V1-V3</dt>
                                <dd class="act"><span class="yen">¥</span>29.44</dd>
                            </dl>
                            <dl class="vip_info_item_level-3">
                                <dt>V4-V5</dt>
                                <dd class="act"><span class="yen">¥</span>26.88</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="vip_newer-price_item  vip_newer-price_item_last "><a
                            href="//item.taobao.com/item.htm?id=532915358745" target="_blank"> <img width="224"
                                                                                                    height="224"
                                                                                                    src="{{asset('picture/TB2tJhJXaa5V1Bjy0FaXXaXvpXa_!!1862317969.jpg_230x230xz.jpg')}}"
                                                                                                    alt=""> </a>   <h4>
                            <a href="//item.taobao.com/item.htm?id=532915358745" target="_blank">苹果iPad2/3/4保护套全包边手持防滑防摔超薄带休眠奢华超轻潮壳</a>
                        </h4>
                        <p class="vip_newer-price"><span class="vip_newer-price_large">¥31</span>.68</p>
                        <div class="vip_info_item_vip-price">
                            <dl class="vip_info_item_level-1">
                                <dt>V0</dt>
                                <dd class="act"><span class="yen">¥</span>132.00</dd>
                            </dl>
                            <dl class="vip_info_item_level-2">
                                <dt>V1-V3</dt>
                                <dd class="act"><span class="yen">¥</span>34.32</dd>
                            </dl>
                            <dl class="vip_info_item_level-3">
                                <dt>V4-V5</dt>
                                <dd class="act"><span class="yen">¥</span>31.68</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <a class="vip_button_more-items"
                   href="//vip.taobao.com/new.htm?spm=a1z1d.7256925.0.0.w196sj&amp;#vipercard" target="_blank">更多商品</a>
            </div>
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

                                                                                src="{{asset('img.alicdn.com/tps/i1/T1FeW3XXNfXXXXXXXX-36-36.gif')}}"></a>
        <a href="//idinfo.zjaic.gov.cn/bscx.do?method=hddoc&amp;id=33018400000067" class="mod mod-a"></a>
        <a href="//idinfo.zjaic.gov.cn/bscx.do?&amp;method=hddoc&amp;id=33018400000067" class="mod mod-b"></a>
        <a href="//www.theclimategroup.org.cn/about/friend" class="mod mod-c"></a>
        <a href="https://ss.cnnic.cn/verifyseal.dll?&amp;sn=2010062300100001357&amp;pa=20100701" class="mod mod-d"></a>
        <a href="//www.ppaaol.com/verifySite.do?id=1051" class="mod mod-e"></a>
    </div>
    <div class="footer-toy"></div>


    <div id="server-num" style="color:#FFF;font-size:11px;text-align:center">register010178254175.et2</div>
</div>
<!-- 页脚 -->
</body>
</html>