<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>淘宝</title>

<!-----------发帖插件开始-------------->
<script charset="utf-8" src="./kindeditor-v4.0.6/kindeditor-min.js"></script>
<script charset="utf-8" src="./kindeditor-v4.0.6/lang/zh_CN.js"></script>
<script>
    var5 editor;
    KindEditor.ready(function(K) {
        editor = K.create('textarea[name="ascontent"]', {
            allowFileManager : true
        });
        
    });
</script>
<!-------------发帖插件结束------------->

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
                            <div class="discussnum cf">
                                <form role="form" action="/home/assess/insert"  class="form-horizontal" method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <table border="1" width="900" align="center">
                                        <tr>
                                            <td>评价内容</td>
                                            <td><textarea name="ascontent" cols="90" rows="20"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td >评论时间<input type="text" name="astime" readonly value="{{date('Y-m-d',time())}}"></td>
                                        </tr>
                                        <input type="hidden"  name="uid"  value="{{Session::get('uid') }}" />
                                        <input type="hidden"  name="gid"  value="{{Session::get('gid') }}" />
                                       <!--  <?php
                                           //var_dump(Session::get('uid'));
                                       ?> -->
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" value="发表评论" ></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="discusslist">
                                <ul>
                                    @foreach($assess as $one)
                                    <li class="cf">
                                        <div class="f-l dislpic">
                                            <a href="#"><img src="{{asset($one['head'])}}" height="25" /></a>
                                            <span>{{$one['uname']}}</span>
                                        </div>
                                        <div class="f-l disrdis">
                                            <div class="disdate">
                                                <span class="f-l"></span>
                                                <span class="f-l">时间:{{date('Y-m-d',$one['astime'])}}</span>
                                                <span class="starpoint"></span>
                                            </div>
                                            <div class="disinfo">
                                                <span class="f-l">评论：{{$one['ascontent']}}</span>
                                            </div>
                                            <div class="f-r withme">
                                                <span class="f-l">这个评论对我</span>
                                                <a href="#">有用 <b class="red">0</b></a>
                                                <a href="#">没用 <b class="red">0</b></a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <div class="afqpage">
                                {!! $users->fragment('foo')->render() !!}
                                
                            </div>
                            
                        </dd>
    </div><!--s_ftw end-->
</div>
</body>
</html>
