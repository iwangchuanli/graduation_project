//cookie
$.cookie = function(n, v, o) {
    if (v != undefined) {
        o = o || {};
        var s = function() {
                var a = [];
                $.each(v, function(i, j) {
                    a.push(i + '=' + encodeURIComponent(j))
                });
                return a.join('&')
            },
            e = function() {
                var d = new Date();
                d.setDate(d.getDate() + o.expires);
                return d.toUTCString()
            };
        document.cookie = [n, '=', $.type(v) == "object" ? s() : encodeURIComponent(v), o.expires ? '; expires=' + e() : '', o.path ? '; path=' + o.path : '; path=/', o.domain ? '; domain=' + o.domain : '', o.secure ? '; secure' : ''].join('');
        return v
    } else {
        var a = document.cookie.match(new RegExp('(^| )' + n + '=([^;]*)(;|$)'));
        if (a && a[2]) {
            var j = {};
            $.each(a[2].split('&'), function() {
                var t = this.split('=');
                t[1] != undefined ? (j[t[0]] = decodeURIComponent(t[1])) : j = decodeURIComponent(t[0])
            });
            return j
        } else {
            return ''
        }
    }
};
//request
$.request = function(n) {
    var a = window.location.search.substr(1).match(new RegExp("(^|&)" + n + "=([^&]*)(&|$)"));
    return a != null ? decodeURIComponent(a[2]) : '';
};
//select填充
$.fn.addOption = function(callback, name, val) {
    var tag = this[0],
        add = function(result) {
            $.each(result, function() {
                tag.options.add(new Option(this[name], this[val]))
            });
        };
    tag.options.length = 0;
    tag.options.add(new Option('--请选择--', ''));
    $.isFunction(callback) ? callback(add) : add(callback);
    return this
};
//随屏滚动 
$.fn.scrollFollow = function(position) {
    var $window = $(window),
        ie6 = $.browser.msie && ($.browser.version == '6.0') && !$.support.style;
    return this.each(function() {
        var $this = $(this);
        $this.appendTo('body').css({
            position: 'fixed',
            zIndex: '999'
        }).css($.isFunction(position) ? position($window, $this) : {
            top: position.top !== undefined ? position.top : 'auto',
            bottom: position.bottom !== undefined ? position.bottom : 'auto',
            left: position.left !== undefined ? position.left : 'auto',
            right: position.right !== undefined ? position.right : 'auto'
        });
        if (ie6) {
            $window.scroll(function() {
                $this.css({
                    position: 'absolute',
                    bottom: 'auto',
                    top: position.top !== undefined ? ($window.scrollTop() + parseInt(position.top)) : ($window.scrollTop() + $window.height() - $this.outerHeight(true) - parseInt(position.bottom))
                });
            }).scroll();
        }
    });
};
//弹出显示 
$.fn.popShow = function() {
    var ie6 = $.browser.msie && ($.browser.version == '6.0') && !$.support.style;
    !window.$posMask && (window.$posMask = $('<div style=\"width:100%;height:100%;opacity:0.3;filter:alpha(opacity=30);background:#000;\"><iframe frameborder=\"0\" scrolling=\"no\" style=\"width:100%;height:100%;opacity:0;filter:alpha(opacity=0);\"></iframe></div>').scrollFollow({
        top: 0,
        left: 0
    }));
    return this.each(function() {
        var $this = $(this).show();
        $this.data('parent', $this.parent()).scrollFollow(function(w, t) {
            return {
                top: w.height() / 2 / 1 - t.outerHeight() / 2 + 'px',
                left: w.width() / 2 / 1 - t.outerWidth() / 2 + 'px'
            }
        });
    });
};
//弹出隐藏 
$.fn.popHide = function() {
    if ($posMask) {
        $posMask.remove();
        $posMask = null;
    }
    return this.each(function() {
        var $this = $(this).hide();
        $this.data('parent').length > 0 ? $this.appendTo($this.data('parent')) : $this.remove();
    });
};
//冒泡显示
$.fn.bubShow = function(delay) {
    return this.each(function() {
        var $this = $(this).hide();
        $this.data('parent', $this.parent()).scrollFollow({
			right: 0,
			bottom: 0
        }).hover(function() {
            $this.clearQueue();
        }, function() {
            $this.stop().slideDown('fast').delay(delay || 5000).bubHide();
        }).mouseleave();
    });
};
//冒泡隐藏
$.fn.bubHide = function() {
    return this.each(function() {
        var $this = $(this).slideUp('fast', function() {
            $this.data('parent').length > 0 ? $this.appendTo($this.data('parent')) : $this.remove();
        });
    });
};
//返回属性数组
$.fn.attrs = function(v) {
    var r = [];
    this.each(function() {
        r.push($(this).attr(v) || '');
    });
    return r;
};
//替换alert
window.alert = function(s) {
    var $d = $('<div style="padding:30px;border:2px solid #47B185;background:#fff;text-align:center;max-width:400px;min-width:200px;"><p style="margin-bottom:20px;">' + s + '</p></div>').popShow();
	$('<a class="Btn1">确定</a>').click(function(){
		$d.popHide();
	}).appendTo($d);
};
//get扩展
$.getEx = function(u, p, s, e) {
    $.get(u, p, function(d) {
        d.ret == 0 ? s(d) : (e ? e(d.ret, d.errormsg) : alert(d.errormsg || '未知异常！'));
    });
};