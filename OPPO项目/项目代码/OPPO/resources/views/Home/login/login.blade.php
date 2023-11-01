<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    <title>『OPPO帐号』-登录</title>
    <meta name="keywords" content=" OPPO帐号,登录,注册,找回密码,OPPO账号,OPPO会员" /> 
    <meta name="description" content="登录OPPO帐号，可以在OPPO官网、社区、软件商店、游戏中心、主题商店等享受更多功能服务。 " />
    <link rel="stylesheet" href="{{asset('Home/login/css/common.css;JSESSIONID=d6794221-1b09-4a65-873b-59d48d472b66-r=20161011.css')}}" />
        <style>
            input:-webkit-autofill+label{display:none;}
            input:-moz-autofill+label{display:none;}
        </style>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "../hm.baidu.com/hm.js-dc85f549df5b5343343aad449e4ea382.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
	 
</head>
<body>
<div class="wrapper">
        <div class="header">
            <div class="w960">
                 <ul class="menu_sec">
                    <li><a href="/">OPPO官网</a></li>
                    <li><a href=" ">OPPO社区</a></li>
                    <li><a href="/coloros/index ">ColorOS</a></li>
                    <div class="clear"></div>
                </ul>               
                <div class="clear"></div>
            </div>  
        </div>



        <div class="login_box">
            <div class="mainbox">
                <!--头部logo-->
                <div class="lgnheader">
                    <div class="logo"></div>
                    <h3 class="title">登录OPPO帐号可享受更多的服务</h3>
                </div>
                <!--主体登录框-->
				<form action="/index" method="post">
				{!! csrf_field() !!}
                <div class="login_area">
                    <div class="login_form" >
                        <div class="input_area">
                            <input type="text"  id="username" name="uname" autocomplete="off"  class="username" />
                            <label class="placeholder" for="username">请输入手机号码/邮箱/用户名</label>
                        </div>
                        <div class="error_tip" id="info_username"></div>


                        <div class="input_area">
                            <input type="password"  id="pwd" name="upwd" autocomplete="off"  class="pwd"/>
                            <label class="placeholder" for="pwd">请输入帐号密码</label>
                        </div>
                        <div class="error_tip" id="info_pwd"></div>
						
						

                        <div class="field">
                            <a href="" class='text_green fr' style='padding-left:5px;border-left:1px solid gray'>帐号申诉</a>
                            <a class="text_green fr" id="find_pwd_link" style='margin-right:5px'>找回密码</a>
                            <div class="clear"></div>

                        </div>

                        <input type="submit" class="button login_button mt30" id="loginBtn" value="登录"    style="margin-bottom:15px;" />
                        <a href="/zhuce"><input type="button" class="button register_button oppo-tj" id="registerBtn" value="注册OPPO帐号" /></a>
						</form>
                        <div class="error_tip1" style="margin-top:10px;" id="info_login_form"></div>

                        <!--其他登录方式-->
                        <div class="n_links_area">
                            <div class="oth_type_list"></div>                            
                            <div class="oth_type_links">
                                <a class="other_link ico_qq oppo-tj" link=""></a>
                                <a  class="other_link ico_wb oppo-tj" link=""></a>
                                <a  class="other_link ico_alipay oppo-tj" link=""></a>
                                <a class="other_link ico_wx oppo-tj" link=""></a>
                            </div>
                        </div>
                        <input type="hidden"  id="password" name="password" />
                    </div>
                </div>
            </div>

            <div class="footer_info">
                <p>© 2005 - 2016 东莞市永盛通信科技有限公司 版权所有 粤ICP备08130115号-1</p>
            </div>
        </div>    
    </div>

    
    <!--找回密码弹窗-->
    <div class="pop_dlg" id="find_pwd_dlg">
	<form action='/zhao' method="post">
	{!! csrf_field() !!}
        <a class="ico_close"></a>
        <h4 class="dlg_title">找回密码</h4>
        <div class="dlg_wrapper">
            <div class="dlg_content">请输入需要找回密码的帐号，点击“下一步”选择找回密码方式。</div>
            <div class="input_area">
                <input type="text"  id="username1" name="uname"  autocomplete="off"   class="uname" />
                <label class="placeholder" for="username1">请输入手机号码/邮箱/用户名</label>
            </div>
            <div class="error_tip" id="info_username1"></div>
			 <div class="input_area">
                <input type="text"  id="username1" name="upwd"  autocomplete="off"   class="upwd" />
                <label class="placeholder" for="username1">新密码</label>
            </div>
			 <div class="input_area">
                <input type="text"  id="username1" name="repwd"  autocomplete="off"   class="repwd" />
                <label class="placeholder" for="username1">确认密码</label>
            </div>
			<div class="input_area">
                <input type="text"  id="username1" name="uemail"  autocomplete="off"   class="email" />
                <label class="placeholder" for="username1">邮箱号</label>
            </div>
			<div class="input_area">
                <input type="text"  id="username1" name="utel"  autocomplete="off"   class="utel" />
                <label class="placeholder" for="username1">手机号</label>
            </div>
             
            <div class="error_tip" id="info_vercode1"></div>
             
			<input type="submit" value="下一步" class="button login_button">
            <div class="error_tip1" id="info_find_pwd_dlg"></div>
			</form>
        </div>
							 
    </div>

    <!--短信验证身份-->
    <div class="pop_dlg" id="yz_sms_dlg">
        <a class="ico_close"></a>
        <h4 class="dlg_title">验证身份</h4>
        <div class="dlg_wrapper">
            <div class="dlg_content">点击发送短信按钮，将发送一条含有数字验证码的短信至您的手机<span id="phoneNum" class="phoneNum"></span>，用于验证身份。</div>
            <div class="button login_button" style="margin-top:25px">发送短信</div>
            <div class="error_tip1" id="info_yz_sms_dlg"></div>
            <a class="other_way mt30" onclick = "hideDiv($('#yz_sms_dlg'));showDiv($('#yz_email_dlg'))">使用安全邮箱验证身份</a>
            <a class="other_way" onclick = "hideDiv($('#yz_sms_dlg'));showDiv($('#yz_mibao_dlg'))">使用密保问题验证身份</a>
        </div>
    </div>

    <div class="pop_dlg" id="yz_sms_dlg1">
        <a class="ico_close"></a>
        <h4 class="dlg_title">验证身份</h4>
        <div class="dlg_wrapper">
            <div class="dlg_content">已发送一条含有数字验证码的短信至您的手机<span id="phoneNum1" class="phoneNum"></span>，请输入短信中的验证码。</div>
            <div class="input_area">
                <input type="text" id="vercode2" name="verifycode" class="vercode" autocomplete="off" />
                <label class="placeholder" for="vercode2">请输入验证码</label>
                <div class="pic">
                    <a class="btn_verify_unedit" id="btn_verify"><span id="time">60</span>S</a>
                </div>
            </div>
            <div class="error_tip" id="info_vercode2"></div>
            <div class="button login_button" style="margin-top:20px">验证</div>
            <div class="error_tip1" id="info_yz_sms_dlg1"></div>

        </div>
    </div>

    <!--邮箱验证身份-->
    <div class="pop_dlg" id="yz_email_dlg">
        <a class="ico_close"></a>
        <h4 class="dlg_title">验证身份</h4>
        <div class="dlg_wrapper">
            <div class="dlg_content">点击发送邮件按钮，将发送一封邮件至您的邮箱<span id="email" class="phoneNum"></span>，用于找回密码。</div>
            <div class="button login_button" style="margin-top:25px">发送邮件</div>
            <div class="error_tip1" id="info_yz_email_dlg"></div>


            <a class="other_way mt30" onclick = "hideDiv($('#yz_email_dlg'));showDiv($('#yz_sms_dlg'))">使用安全手机验证身份</a>
            <a class="other_way"  onclick = "hideDiv($('#yz_email_dlg'));showDiv($('#yz_mibao_dlg'))">使用密保问题验证身份</a>
        </div>
    </div>


    <div class="pop_dlg" id="yz_email_dlg1">
        <a class="ico_close"></a>
        <h4 class="dlg_title">邮件已发送</h4>
        <div class="dlg_wrapper">
            <div class="dlg_content">已发送验证邮件至您的邮箱，请于24小时内前往邮箱进行操作。</div>
            <div class="button login_button" style="margin-top:25px">知道了</div>
        </div>
    </div>

    <!--密保验证身份-->
    <div class="pop_dlg" id="yz_mibao_dlg">
        <a class="ico_close"></a>
        <h4 class="dlg_title">验证身份</h4>
        <div class="dlg_wrapper">
            <h5>问题一</h5>
            <div class="question" id="question0"></div>
            <div class="input_area">
                <input type="text" id="answer0" name="" class="answer" autocomplete="off"/>
                <label class="placeholder" for="answer0">请输入答案</label>

            </div>
            <div class="error_tip" id="info_answer0"></div>

            <h5>问题二</h5>
            <div class="question" id="question1"></div>
            <div class="input_area">
                <input type="text" id="answer1" name="" class="answer" autocomplete="off"/>
                <label class="placeholder" for="answer1">请输入答案</label>

            </div>
            <div class="error_tip" id="info_answer1"></div>

            <h5>问题三</h5>
            <div class="question" id="question2"></div>
            <div class="input_area">
                <input type="text" id="answer2" name="" class="answer" autocomplete="off"/>
                <label class="placeholder" for="answer2">请输入答案</label>

            </div>
            <div class="error_tip" id="info_answer2"></div>
            <div class="button login_button" style="margin-top:15px">确定</div>
            <div class="error_tip1" id="info_yz_mibao_dlg"></div>
        </div>
    </div>





    <div class="pop_dlg" id="set_pwd_dlg">
        <a class="ico_close"></a>
        <h4 class="dlg_title">重置密码</h4>
        <div class="dlg_wrapper">
            <h5>新密码</h5>
            <div class="input_area">
                <input type="password"  id="newpwd" name="password" autocomplete="off" />
                <label class="placeholder" for="newpwd">请输入密码</label>
            </div>
            <div class="error_tip" id="info_newpwd"></div>

            <div class="input_area">
                <input type="password"  id="repwd" name="repassword" autocomplete="off" />
                <label class="placeholder" for="repwd">请再次输入密码</label>
            </div>
            <div class="error_tip" id="info_repwd" style="color:#878b8a;padding-top:15px;">密码包含6-16位字母、数字</div>
            <div class="btns mt30">
                <a class="cancel_btn">取消</a>
                <a class="confirm_btn">确定</a>
                <div class="clear"></div>
            </div>
            <div class="error_tip1" id="info_set_pwd_dlg" ></div>
        </div>
    </div>



    <!--超时弹框-->
    <div class="pop_dlg" id="timeout_dlg">
        <a class="ico_close"></a>
        <h4 class="dlg_title">操作超时</h4>
        <div class="dlg_wrapper">
            <div class="dlg_content">您长时间未操作，请重新操作。</div>
            <div class="button login_button" style="margin-top:25px" id="timeout_btn">知道了</div>
        </div>
    </div>
    <!--成功重置密码的气泡-->
    <div class="toast" id="success_toast"><img src="Home/login/images/ico_success.jpg;JSESSIONID=d6794221-1b09-4a65-873b-59d48d472b66.jpg" /><span id="toast_content">已成功重置密码</span></div>

    <!--正在登录的气泡-->
    <div class="toast" id="loading_toast"><img src="Home/login/images_wap/ico_loading_s.png;JSESSIONID=d6794221-1b09-4a65-873b-59d48d472b66.png" class="loading_pic"/>正在登录...</div>
<input type="hidden" value="" id="needCaptcha"/>
<input type="hidden" value="/login;JSESSIONID=d6794221-1b09-4a65-873b-59d48d472b66?type=1" id="loginUrl"/>
<input type="hidden" value="/captcha;JSESSIONID=d6794221-1b09-4a65-873b-59d48d472b66" id="captchaUrl"/>
<input type="hidden" value="/account/profile;JSESSIONID=d6794221-1b09-4a65-873b-59d48d472b66?type=1" id="profileUrl"/>

<input type="hidden" value=""  id="requestKey_0"/>
<input type="hidden" value=""  id="requestKey_1"/>
<input type="hidden" value=""  id="requestKey_2"/>
<input type="hidden" id="dlg_id"/>
<div class="mask" id="mask"></div>


<script src="{{asset('Home/login/js/jquery-1.9.1.min.js;JSESSIONID=d6794221-1b09-4a65-873b-59d48d472b66.js')}}" ></script>
<script src="{{asset('Home/login/js/jquery-md5-min.js;JSESSIONID=d6794221-1b09-4a65-873b-59d48d472b66.js')}}" ></script>
<script src="{{asset('Home/login/js/login.js;JSESSIONID=d6794221-1b09-4a65-873b-59d48d472b66-r=20160713.js')}}" ></script>
</body>
</html>
