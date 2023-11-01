<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>淘宝</title>
<link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css" />
<!--[if IE 6]> 
<link href="css/main.ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 7]> 
<link href="css/main.ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="{{asset('js/jquery-1.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-imgslideshow.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ks-switch.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lib.js')}}"></script>
<script type="text/javascript">
var timeout = 500;
var closetimer  = 0;
var ddmenuitem  = 0;

$(document).ready(function(){
    $('.cat_item').mousemove(function(){
        $(this).addClass('cat_item_on');
    });
    $('.cat_item').mouseleave(function(){   
        $(this).removeClass('cat_item_on');
    });
    $('#slideshow').imgSlideShow({itemclass: 'i'})
    $("#slide-qg").switchTab({titCell: "dt a", trigger: "mouseover", delayTime: 0});
    $("#s_cart_nums1").hover(function(){
        mcancelclosetime();
        if(ddmenuitem) ddmenuitem.hide();
        ddmenuitem = $(document).find("#s_cartbox");
        ddmenuitem.fadeIn();
    },function(){
        mclosetime();
    });
    $("#s_cart_nums2").hover(function(){
        mcancelclosetime();
        if(ddmenuitem) ddmenuitem.hide();
        ddmenuitem = $(document).find("#s_cartbox");
        ddmenuitem.fadeIn();
    },function(){
        mclosetime();
    });
    $("#s_cartbox").hover(function(){
        mcancelclosetime();
    },function(){
        mclosetime();
    });
     var $cur = 1;
    var $i = 4;
    var $len = $('.hot_list>ul>li').length;
    var $pages = Math.ceil($len / $i);
    var $w = $('.hotp').width()-66;
    
    var $showbox = $('.hot_list');
    
    var $pre = $('div.left_icon');
    var $next = $('div.rgt_icon');
    
    $pre.click(function(){
        if (!$showbox.is(':animated')) { 
            if ($cur == 1) {   
                $showbox.animate({
                    left: '-=' + $w * ($pages - 1)
                }, 500); 
                $cur = $pages; 
            }
            else { 
                $showbox.animate({
                    left: '+=' + $w
                }, 500); 
                $cur--;
            }
           
        }
    });

    $next.click(function(){
        if (!$showbox.is(':animated')) { 
            if ($cur == $pages) {  
                $showbox.animate({
                    left: 0
                }, 500); 
                $cur = 1; 
            }
            else {
                $showbox.animate({
                    left: '-=' + $w
                }, 500);
                $cur++; 
            }
            
        }
    });
    
});
function mclose()
{
    if(ddmenuitem) ddmenuitem.hide();
}
function mclosetime()
{
    closetimer = window.setTimeout(mclose, timeout);
}
function mcancelclosetime()
{
    if(closetimer)
    {
        window.clearTimeout(closetimer);
        closetimer = null;
    }
}
</script>
</head>

<body>
<div id="doc">
    
    </div><!--s_hdw end-->
    
    <link type="text/css" href="{{asset('css/detail.css')}}" rel="stylesheet" />
    
    <div id="s_bdw">
        <div id="s_bd">
            
            
                
                <script type="text/javascript" src="js/slider.js"></script>
                <script type="text/javascript">
                $(document).ready(function(){
                    
                    //点击到中图
                    var midChangeHandler = null;
                    $("#imageMenu li img").bind("click",
                        function() {
                
                            if ($(this).attr("id") != "onlickImg") {
                                midChange($(this).attr("src").replace("small", "mid"));
                                $("#imageMenu li").removeAttr("id");
                                $(this).parent().attr("id", "onlickImg");
                            }
                        }).bind("mouseover",
                        function() {
                            if ($(this).attr("id") != "onlickImg") {
                                window.clearTimeout(midChangeHandler);
                                midChange($(this).attr("src").replace("small", "mid"));
                            }
                        }).bind("mouseout", function() {
                            if ($(this).attr("id") != "onlickImg") {
                                $(this).removeAttr("style");
                                midChangeHandler = window.setTimeout(function() {
                                    midChange($("#onlickImg img").attr("src").replace("small", "mid"));
                                }, 1000);
                
                            }
                        });
                
                    function midChange(src) {
                        $("#midimg").attr("src", src).load(function() {
                            changeViewImg();
                        });
                    }
                
                    //大视窗看图
                    function mouseover(e) {
                        if ($("#winSelector").css("display") == "none") {
                            $("#winSelector,#bigView").show();
                        }
                
                        $("#winSelector").css(fixedPosition(e));
                        e.stopPropagation();
                    }
                
                
                    function mouseOut(e) {
                        if ($("#winSelector").css("display") != "none") {
                            $("#winSelector,#bigView").hide();
                        }
                        e.stopPropagation();
                    }
                
                
                    $("#midimg").mouseover(mouseover); //中图事件
                    $("#midimg,#winSelector").mousemove(mouseover).mouseout(mouseOut); //选择器事件
                
                    var $divWidth = $("#winSelector").width(); //选择器宽度
                    var $divHeight = $("#winSelector").height(); //选择器高度
                    var $imgWidth = $("#midimg").width(); //中图宽度
                    var $imgHeight = $("#midimg").height(); //中图高度
                    var $viewImgWidth = $viewImgHeight = $height = null; //IE加载后才能得到 大图宽度 大图高度 大图视窗高度
                
                    function changeViewImg() {
                        $("#bigView img").attr("src", $("#midimg").attr("src").replace("mid", "big"));
                    }
                
                    changeViewImg();
                
                    $("#bigView").scrollLeft(0).scrollTop(0);
                    function fixedPosition(e) {
                        if (e == null) {
                            return;
                        }
                        var $imgLeft = $("#midimg").offset().left; //中图左边距
                        var $imgTop = $("#midimg").offset().top; //中图上边距
                        X = e.pageX - $imgLeft - $divWidth / 2; //selector顶点坐标 X
                        Y = e.pageY - $imgTop - $divHeight / 2; //selector顶点坐标 Y
                        X = X < 0 ? 0 : X;
                        Y = Y < 0 ? 0 : Y;
                        X = X + $divWidth > $imgWidth ? $imgWidth - $divWidth : X;
                        Y = Y + $divHeight > $imgHeight ? $imgHeight - $divHeight : Y;
                
                        if ($viewImgWidth == null) {
                            $viewImgWidth = $("#bigView img").outerWidth();
                            $viewImgHeight = $("#bigView img").height();
                            if ($viewImgWidth < 200 || $viewImgHeight < 200) {
                                $viewImgWidth = $viewImgHeight = 800;
                            }
                            $height = $divHeight * $viewImgHeight / $imgHeight;
                            $("#bigView").width($divWidth * $viewImgWidth / $imgWidth);
                            $("#bigView").height($height);
                        }
                
                        var scrollX = X * $viewImgWidth / $imgWidth;
                        var scrollY = Y * $viewImgHeight / $imgHeight;
                        $("#bigView img").css({ "left": scrollX * -1, "top": scrollY * -1 });
                
                
                        $("#bigView").css({ "top": 0, "left":$(".filmslide").width()+15 });
                
                        return { left: X, top: Y };
                    }
                    
                    $(".smallpic").xslider({
                        unitdisplayed:5,
                        movelength:1,
                        unitlen:68
                    });
                });
                </script>
                
                
                
                <script type="text/javascript">
                /* reduce_add */
                var setAmount = {
                    min:1,
                    max:999,
                    reg:function(x) {
                        return new RegExp("^[1-9]\\d*$").test(x);
                    },
                    amount:function(obj, mode) {
                        var x = $(obj).val();
                        if (this.reg(x)) {
                            if (mode) {
                                x++;
                            } else {
                                x--;
                            }
                        } else {
                            alert("请输入正确的数量！");
                            $(obj).val(1);
                            $(obj).focus();
                        }
                        return x;
                    },
                    reduce:function(obj) {
                        var x = this.amount(obj, false);
                        if (x >= this.min) {
                            $(obj).val(x);
                        } else {
                            alert("商品数量最少为" + this.min);
                            $(obj).val(1);
                            $(obj).focus();
                        }
                    },
                    add:function(obj) {
                        var x = this.amount(obj, true);
                        if (x <= this.max) {
                            $(obj).val(x);
                        } else {
                            alert("商品数量最多为" + this.max);
                            $(obj).val(999);
                            $(obj).focus();
                        }
                    },
                    modify:function(obj) {
                        var x = $(obj).val();
                        if (x < this.min || x > this.max || !this.reg(x)) {
                            alert("请输入正确的数量！");
                            $(obj).val(1);
                            $(obj).focus();
                        }
                    }
                }
                </script>
                
                <div class="clear"></div>
                
                
                
                <script type="text/javascript">
                $(function(){
                    $(".dtsummary").switchTab({titCell: "dt a", trigger: "click", titOnClassName: "current", delayTime: 0});
                })
                </script>
                
                <script type="text/javascript">
                $(function(){
                    $("#mydiscuss").switchTab({titCell: "dt a", trigger: "click", mainCell: ".discusstabcon", titOnClassName: "current", delayTime: 0});
                })
                </script>
                
                <div class="discuss" id="mydiscuss">

                    <dl>
                        <dt class="discusstab"><a class="current" href="javascript:void(0);">全部评论</a><a href="javascript:void(0);">好评(100)</a><a href="javascript:void(0);">中评(100)</a><a href="javascript:void(0);">差评(100)</a></dt>
                        <div class="f-r plbtn">
                            <!-- <span></span><br/>
                            <a class="plbtnimg" href="#" ><img src="{{asset('images/2016-12-03_052902.jpg')}}" height="36"></a> -->
                        </div>
                        <dd class="discusstabcon">
                            <div class="discussnum cf">
                                <div class="f-l disnum">
                                    <strong>100%</strong><span>好评</span>
                                </div>
                                <div class="f-l disbar">
                                    <dl class="cf">
                                        <dt>好评</dt><dd class="barbox"><div class="bar" style="width:97%;"></div></dd><dd>97%</dd>
                                    </dl>
                                    <dl class="cf">
                                        <dt>中评</dt><dd class="barbox"><div class="bar" style="width:1%;"></div></dd><dd>1%</dd>
                                    </dl>
                                    <dl class="cf">
                                        <dt>差评</dt><dd class="barbox"><div class="bar" style="width:2%;"></div></dd><dd>2%</dd>
                                    </dl>
                                </div>
                                <div class="f-l pl5"></div>
                                <div class="f-r plbtn">
                                    <span></span>
                                    <a class="plbtnimg" href="#"></a>
                                </div>
                            </div>
                            <div class="discusslist">
                                <ul>
                                    @foreach($orassess as $one)
                                    <li class="cf">
                                        <div class="f-l dislpic"><a href="#"><img src="{{asset($one['head'])}}" height="25" /></a><span>{{$one['uname']}}</span></div>
                                        <div class="f-l disrdis">
                                            <div class="disdate"><span class="f-l"></span><span class="f-l">时间:{{date('Y-m-d',$one['astime'])}}</span><span class="starpoint"></span></div>
                                            <div class="disinfo"><span class="f-l">评论：{{$one['ascontent']}}</span><div class="f-r withme"><span class="f-l">这个评论对我</span><a href="#">有用 <b class="red">0</b></a><a href="#">没用 <b class="red">0</b></a></div>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            
                            <div class="afqpage">
                                {!! $orassess->appends(['type'=>"book"])->render() !!}
                                
                            </div>
                            
                        </dd>
                        
        
    </div><!--s_ftw end-->

</div>
</body>
</html>
