var agent = window.navigator.userAgent.toLowerCase();
var islessIE = false;
var isFirefox = false;
var isSafari = false;
var ismobile = false;
var scroll_top = 0;
var scroll_timer;
var cur = 0;

if (agent.indexOf("msie 8") != -1 || agent.indexOf("msie 7") != -1 || agent.indexOf("msie 6") != -1) {
    islessIE = true;
}
if (agent.indexOf("firefox") != -1) {
    isFirefox = true;
}
if (agent.indexOf("safari") != -1 && agent.indexOf("chrome") == -1) {
    isSafari = true;
}
if (agent.toLowerCase().indexOf("mobile") != -1) {
    ismobile = true;
}

function playvideo() {
    initvideo();
    $("#videomask").height($(document).height());
    $("#videopop").show();
    $("#videomask").show();
}

function playclonephonevideo() {
    initvideo();
    $("#videomask").height($(document).height());
    $("#videoclonephonepop").css("top", $(window).scrollTop() + $("#videoclonephonepop").height());
    $("#videoclonephonepop").show();
    $("#videomask").show();
}

function initvideo() {
    if ($("#videopop").length > 0 && $("#videopop").html() == "") {
        $("#videopop").html('<iframe height=524 width=860 src="http://v.qq.com/iframe/player.html?vid=w0302r1aqny&tiny=0&auto=0" frameborder=0 allowfullscreen></iframe><div class="videopopclose" onclick="closevideo()">X</div>');
    }
    if ($("#videoclonephonepop").length > 0 && $("#videoclonephonepop").html() == "") {
        $("#videoclonephonepop").html('<iframe height=524 width=860 src="http://v.qq.com/iframe/player.html?vid=t0302kym88s&tiny=0&auto=0" frameborder=0 allowfullscreen></iframe><div class="videopopclose" onclick="closevideo()">X</div>');
    }
}

function closevideo() {
    $("#videopop").hide();
    $("#videoclonephonepop").hide();
    $("#videomask").hide();
}

function dialog(dialog_id) {
    $(".dialog").hide();
    $("#" + dialog_id).show();
    $("#dialogmask").height($(document).height());
    $("#dialogmask").show();
    $("#dialogmask").bind("click", function () {
        $(".dialog").hide();
        $("#dialogmask").hide();
        $("#dialogmask").unbind("click");
    });
}

// 超过范围的值只取最大范围
function rangval(val, min, max) {
    try {
        if (val > parseInt(max)) {
            val = max;
        }
        else if (val < parseInt(min)) {
            val = min;
        }
    }
    catch (e) {
        console.log(e.message);
    }
    return val;
}

function scroll_navigation() {
    cur = $(window).scrollTop();
    var nav_height = $("#nav_container").height();
    //顶部小导航位置挪动
    if (cur > nav_height) {
        $("#nav_small").css("top", "0px");
    }
    else {
        $("#nav_small").css("top", (nav_height - cur) + "px");
    }
}

// 滚轮事件
function scroll_event() {
    scroll_navigation();

    //低版本IE以及safari取消动画
    if (!islessIE && !isSafari) {
        $("div.animate_activited img.animated").each(function (i) {
            var data = JSON.parse($(this).attr("data-animated"));
            var rang = JSON.parse($(this).attr("data-animated-rang"));
            var matrix = JSON.parse($(this).attr("data-animated-cur"));
            var transform = "";
            var new_matrix = new Object();
            if (cur < scroll_top) {
                //up
                new_matrix['translateX'] = rangval((parseFloat(matrix.translateX) - parseFloat(data.translateX)), -999, 999);
                new_matrix['translateY'] = rangval((parseFloat(matrix.translateY) - parseFloat(data.translateY)), rang['minY'], rang['maxY']);
                new_matrix['rotate'] = rangval((parseFloat(matrix.rotate) - parseFloat(data.rotate)), rang['minRotate'], rang['maxRotate']);
            } else {
                //down
                new_matrix['translateX'] = rangval((parseFloat(matrix.translateX) + parseFloat(data.translateX)), -999, 999);
                new_matrix['translateY'] = rangval((parseFloat(matrix.translateY) + parseFloat(data.translateY)), rang['minY'], rang['maxY']);
                new_matrix['rotate'] = rangval((parseFloat(matrix.rotate) + parseFloat(data.rotate)), rang['minRotate'], rang['maxRotate']);
            }
            transform = "translateX(" + new_matrix['translateX'] + "px) translateY(" + new_matrix['translateY'] + "px) rotate(" + new_matrix['rotate'] + "deg)"
            $(this).css("transform", transform);
            $(this).attr("data-animated-cur", JSON.stringify(new_matrix));
        });
    }
    scroll_top = cur;
}

$(window).load(function () {
    // cnzz 统计
    $("body").append('<script src="http://s22.cnzz.com/z_stat.php?id=1000077757" type="text/javascript"></script>');
});

$(document).ready(function () {
    $("#gotop").bind("click", function () {
        $("#fp-nav a").eq(0).trigger("click");
    });

    //初次加载回顶部
    $(window).scroll(function () {
        if (isFirefox) {
            //firefox一次滚动会触发多次
            clearTimeout(scroll_timer);
            scroll_timer = setTimeout("scroll_event()", 300);
            scroll_navigation();
        }
        else {
            scroll_event();
        }
    });

    //顶部小导航位置挪动
    scroll_navigation();

    // 初始化视频衔接
    initvideo();
});