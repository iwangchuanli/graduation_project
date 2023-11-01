<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <title>『OPPO帐号』-注册</title>
    <meta name="keywords" content=" OPPO帐号,登录,注册,找回密码,OPPO账号,OPPO会员" /> 
    <meta name="description" content="登录OPPO帐号，可以在OPPO官网、社区、软件商店、游戏中心、主题商店等享受更多功能服务。 " />
    <link rel="stylesheet" href="{{asset('Home/login/css/common.css;JSESSIONID=7a55fa6e-35a1-4a41-acf5-6b6e54a9ed01-r=20160815.css')}}"  />
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "Home/login/js/hm.js-dab8ebc7a6ef7a5ec81d04159d20faa6.js"/*tpa=http://hm.baidu.com/hm.js?dab8ebc7a6ef7a5ec81d04159d20faa6*/;
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
                <li><a href="/" >OPPO官网</a></li>
                <li><a href=" " >OPPO社区</a></li>
                <li><a href="/coloros/index" >ColorOS</a></li>
                <div class="clear"></div>
            </ul>   
            <div class="clear"></div> 
        </div>
    </div>

    <div class="register_area">       

        <div class="register_title">注册OPPO帐号</div>
        <!--主体注册框-->
        <form  class="register_form" id="sms_form" action="/add" method="post" ">
		{!! csrf_field() !!}
            <div class="input_area">
                <input type="text"   name="uname"  class="username" value="" placeholder="请输入用户名"/>
                 
            </div>
			<div class="input_area">
				 <input type="password"   name="upwd"    value="" placeholder="请输入密码"/>
                 
            </div>
			<div class="input_area">
				<input type="password"   name="repwd"  value="" placeholder="确认密码"/>
                 
            </div>
            <div class="error_tip" id="info_mobile"></div>

            <div class="input_area">
                <input type="text" id="vercode" name="captcha" class="vercode"  autocomplete="off"/>
                <label class="placeholder" for="vercode">请输入验证码</label>
                <div class="pic">
                    <img src="/vcode" id="vcode" onclick="re_captcha()"/>
                </div>
			      	 
			<script>
					
						function re_captcha(){
							$url="{{URL('/vcode')}}";
							$url=$url+"?"+Math.random();
							document.getElementById('vcode').src=$url;
						} 
						 
			</script>	

            </div>
            <div class="error_tip" id="info_vercode"></div>


            <div class="field">
                <div class="fl">
                    <label id="forCheckBox" for="isaccept" onclick="changeCheckbox1()" class="checkBoxLabel choosed"></label>
                    <input type="checkbox" id="isaccept" checked="checked" name="accept"/>
                    <label id="checkBoxLabel1">已阅读并同意<a class="agree_link" href= "  target="_blank">《OPPO帐号注册协议》</a></label>
                </div>
                <div class="clear"></div>
            </div>
            <div class="error_tip" id="info_accept"></div>

            <input type="submit" class="button login_button" id="smsBtn" value="立即注册" style="margin-top:22px" />
			 
            <!--<div class="error_tip1" id="info_sms_form"></div>
            <input type="hidden" id="errorCode" value=""/>
            <input type="hidden" id="errorMsg" value=""/>
            <input type="hidden" id="source" name="source"   value=""/>
            <input type="hidden" id="type" name="type" value="1" />
            <input type="hidden" id="style" name="style" value="2" />-->
        </form>
    </div>
    <div class="footer_info">
         <p>© 2005 - 2016 东莞市永盛通信科技有限公司 版权所有 粤ICP备08130115号-1</p>
     </div>
</div>


<input type="hidden" value="/captcha;JSESSIONID=7a55fa6e-35a1-4a41-acf5-6b6e54a9ed01" id="captchaUrl"/>


<script src="{{asset('Home/login/js/jquery-1.9.1.min.js;JSESSIONID=7a55fa6e-35a1-4a41-acf5-6b6e54a9ed01.js')}}" ></script>
<script src="{{asset('Home/login/js/register.js;JSESSIONID=7a55fa6e-35a1-4a41-acf5-6b6e54a9ed01-r=20160713.js')}}"  ></script>
 <!--<script>
    var u=(function getData(){
        var url=window.location.href;
        if (url.indexOf("?") != -1) {
            var url_info=url.split("?")[1];
            var arr_info=url_info.split("&");
            var url_obj={};
            for(var i=0;i<arr_info.length;i++){
                url_obj[arr_info[i].split("=")[0]]=arr_info[i].split("=")[1];
            }
            return url_obj;
        }else{
            return {};
        }
    })()

    $(document).ready(function(){
        if (u.callback && $("#source").val()=='') {
            $("#source").val(u.callback);
        }
        if ($("#mobile").val() != "") {
            $("#mobile").next(".placeholder").css("display","none");
        }
        var code = $("#errorCode").val();
        var errMsg =  $("#errorMsg").val();
        switch (code){
                case "2009":
                    showinfo("info_vercode", "验证码错误", 1);
                    break;
                case "3004":
                    showinfo("info_mobile", "手机号已注册", 1);
                    break;
                case "3016":
                    showinfo("info_vercode", "验证时间间隔太短", 1);
                    break;
                case "3017":
                    showinfo("info_vercode", "今日验证次数已达上限", 1);
                    break;
                default:
                    showinfo("info_sms_form", errMsg, 1);
                    break;
            }
    });


</script>-->

</body>
</html>
