<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>R9s拍照体验季</title>
</head>
<style type="text/css">
    *{
        margin:0;
        padding:0;
        background:#000;
    }
 .pclogo{
    position:absolute;
    width:150px;
    height:24px;
    left:35px;
    top:24px;
 }
 .pcbox{
    position:absolute;
    width:340px;
    height:332px;
    left:50%;
    top:50%;
    margin-left:-170px;
    margin-top:-166px;
 }
 .pcewm{
    margin:0px auto;
    text-align:center;
 }
 .pcfont{
    padding-top:32px;
    margin:0 auto;
 }
 .pcmain{
     width:100%;
     height:100%;
     min-width:535px;
     min-height:550px;
     background: url(img/BANNER3.jpg)/*tpa=http://oppo.nplusgroup.net/resource/oppo/r9spc/img/BANNER3.jpg*/ center no-repeat;
 }
 .pcmain p{ text-align:center;color:#fff; font-size:16px; text-align:center;}
</style>
<body>
<div class="pcmain">
    <div class="pclogo"><img src="{{asset('Home/oppozhu/images/pcLogo.png')}}" height="24" width="150"></div>
</div>
<script>
    var oDiv = document.querySelector('.pcmain');
    var oH = window.innerHeight;
    oDiv.style.height = oH+'px';
    window.onresize = function(){
        oH = window.innerHeight;
        oDiv.style.height = oH+'px';
    };
</script>
<!--百度统计-->
<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "hm.baidu.com/hm.js-bd301fba01105cc5876d9f32e20c8e2b.js"/*tpa=http://hm.baidu.com/hm.js?bd301fba01105cc5876d9f32e20c8e2b*/;
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
</script>
<!--百度统计-->
</body>
</html>
