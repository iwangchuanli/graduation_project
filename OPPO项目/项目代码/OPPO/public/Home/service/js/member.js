$.fn.imgCrop = function(obj) {
    obj.wrap = obj.wrap || [];
    obj.rect = obj.rect || [];
    return this.each(function() {
        var getXY = function(e) {
                return {
                    x: e.pageX || e.originalEvent.touches[0].pageX,
                    y: e.pageY || e.originalEvent.touches[0].pageY
                };
            },
            wrap = $(this).empty().css({
                position: 'relative',
                overflow: 'hidden',
                padding: 0,
                cursor: 'move'
            }),
            wrapWidth = obj.wrap[0] || wrap.width(),
            wrapHeight = obj.wrap[1] || wrapWidth,
            imgSize = [],
            imgWidth, imgHeight, imgLeft, imgTop,
            imgMin = 0,
            imgMax = 1,
            imgScale = 1,
            img = $('<img />').attr('src', obj.src).css('position', 'absolute').appendTo(this).load(function() {
                imgWidth = img.width();
                imgHeight = img.height();
                imgSize = [imgWidth, imgHeight];
                (imgSize[0] > rectWidth && imgSize[1] > rectHeight) && resize.show();
                (imgSize[0] <= rectWidth && imgSize[1] <= rectHeight) && wrap.css('cursor', 'default');
                img.css({
                    left: (wrapWidth - imgSize[0]) / 2,
                    top: (wrapHeight - imgSize[1]) / 2
                });
                getXYWH();
            }),
            rectWidth = obj.rect[0] || 200,
            rectHeight = obj.rect[1] || 200,
            rectLeft, rectTop,
            rect = $('<span></span>').css($.extend({
                position: 'absolute',
                top: '50%',
                left: '50%',
                border: '1000px solid #000',
                opacity: .5
            }, function() {
                rectLeft = (wrapWidth - rectWidth) / 2;
                rectTop = (wrapHeight - rectHeight) / 2;
                return {
                    width: rectWidth,
                    height: rectHeight,
                    marginLeft: -1000 - rectWidth / 2,
                    marginTop: -1000 - rectHeight / 2
                }
            }())).appendTo(this),
            resizeX,
            resize = $('<i title="拖拽缩放"></i>').css({
                position: 'absolute',
                width: '12px',
                height: '12px',
                background: '#fff',
                bottom: '-6px',
                right: '-6px',
                cursor: 'se-resize',
                display: 'none'
            }).appendTo(rect),
            getXYWH = function() {
                var imgPos = img.position(),
                    o = {
                        x: Math.round((rectLeft - imgPos.left) * imgScale),
                        y: Math.round((rectTop - imgPos.top) * imgScale),
                        w: Math.round(rectWidth * imgScale),
                        h: Math.round(rectHeight * imgScale),
                        s: imgSize
                    };
                //console.log('x:%d; y:%d; w:%d; h:%d;', o.x, o.y, o.w, o.h);
                obj.callback && obj.callback.call(wrap[0], o);
            };
        img[0].complete && img.load();
        wrap.width(wrapWidth).height(wrapHeight).off().on('mousedown touchstart', function(e) {
            if (e.target == resize[0]) {
                resizeX = getXY(e).x;
            }
            if (wrap.css('cursor') != 'default' && e.target == rect[0]) {
                var o = getXY(e),
                    imgPos = img.position();
                imgLeft = o.x - imgPos.left;
                imgTop = o.y - imgPos.top;
            }
            return false;
        }).on('mousemove touchmove', function(e) {
            if (resizeX !== undefined) {
                var r = -rectWidth / 2,
                    d = getXY(e).x - resizeX;
                d < r && (d = r);
                d > rectLeft && (d = rectLeft);
                ((d < 0 && imgMax) || (d > 0 && imgMin)) ? (resizeX = undefined) : rect.css(function() {
                    var w = rectWidth + d;
                    return {
                        width: w,
                        height: w
                    }
                }());
            }
            if (imgLeft !== undefined) {
                var o = getXY(e),
                    x = o.x - imgLeft,
                    y = o.y - imgTop,
                    a = -imgWidth + rectLeft + rectWidth,
                    b = -imgHeight + rectTop + rectHeight;
                img.css('left', function() {
                    if (x > rectLeft) {
                        return rectLeft
                    } else if (x < a) {
                        return a
                    } else {
                        return x
                    }
                });
                img.css('top', function() {
                    if (y > rectTop) {
                        return rectTop
                    } else if (y < b) {
                        return b
                    } else {
                        return y
                    }
                });
                getXYWH();
            }
            return false;
        }).on('mouseup touchend', function(e) {
            if (resizeX !== undefined) {
                var n = rectWidth / rect.width(),
                    s = imgSize[0] / imgSize[1];
                imgWidth = Math.round(imgWidth * n);
                imgHeight = Math.round(imgHeight * n);
                rect.animate({
                    width: rectWidth,
                    height: rectHeight
                });
                if (imgWidth < rectWidth || imgHeight < rectHeight) {
                    if (imgWidth < rectWidth) {
                        imgWidth = rectWidth;
                        imgHeight = Math.round(imgWidth / s);
                    }
                    if (imgHeight < rectHeight) {
                        imgHeight = rectHeight;
                        imgWidth = Math.round(imgHeight * s);
                    }
                    imgMin = 1;
                } else {
                    imgMin = 0;
                }
                if (imgWidth > imgSize[0] || imgHeight > imgSize[1]) {
                    imgWidth = imgSize[0];
                    imgHeight = imgSize[1];
                    imgMax = 1;
                } else {
                    imgMax = 0;
                }
                img.animate({
                    left: (wrapWidth - imgWidth) / 2,
                    top: (wrapHeight - imgHeight) / 2,
                    width: imgWidth,
                    height: imgHeight
                }, getXYWH);
                imgScale = imgSize[0] / imgWidth;
                resizeX = undefined;
            }
            if (imgLeft !== undefined) {
                imgLeft = imgTop = undefined;
            }
            return false;
        }).mouseleave(function() {
            wrap.mouseup();
        });
    });
};
//个人中心
var Member = function() {
    return {
        init: function() {
            Member.top = $('#Member_Top');
            Member.top_bot = Member.top.find('.Bot');
            Member.top_btn = Member.top_bot.find('button');
            Member.top_ava = Member.top.find('.Avatar').click(function() {
                if (Member.avatar.length > 0) {
                    Member.reset();
                    Member.avatar.popShow();
                }
                return false;
            });
            Member.top_btn.eq(0).click(function() {
                Member.top.css('background-image', 'url(' + Member.top_btn.eq(0).attr('old') + ')');
                Member.top_bot.hide();
            });
            Member.top.find('button[uid]').click(function() {
                if (!_isLogin.jump('关注')) {
                    return false;
                }
                var t = $(this);
                friendsFollow(t, t.hasClass('Btn-D'), t.attr('uid'), 'Btn-D', '+ ');
            });
            $('#Member_Top .Set').ajaxUpload({
                accept: 'image/*',
                url: '/member/index/wallpaper.json',
                success: function(r) {
                    Member.top_bot.show();
                    Member.top_btn.eq(1).attr('aj-param', $.stringify({
                        'url': r.url
                    }));
                    Member.top.css('background-image', 'url(' + r.url + ')');
                }
            });
            Member.avatar = $('#Member_Avatar');
            Member.avatar_img = Member.avatar.find('img');
            Member.avatar_pic = Member.avatar.find('.Pic');
            Member.avatar.find('[name=Avatar]').ajaxUpload({
                size: 2,
                accept: 'image/*',
                url: '/member/index/avatar.json',
                success: function(r) {
                    var u = Member.getImg(r.url);
                    Member.avatar_img.attr('src', u);
                    Member.avatar_pic.imgCrop({
                        src: u,
                        callback: function(o) {
                            Member.avatar_x.val(o.x);
                            Member.avatar_y.val(o.y);
                            Member.avatar_w.val(o.w);
                            Member.avatar_h.val(o.h);
                            var g = function(w, h) {
                                var x = w / o.w,
                                    y = h / o.h;
                                return {
                                    width: Math.round(x * o.s[0]),
                                    height: Math.round(y * o.s[1]),
                                    marginLeft: -Math.round(x * o.x),
                                    marginTop: -Math.round(y * o.y)
                                }
                            };
                            Member.avatar_img.eq(0).css(g(120, 120));
                            Member.avatar_img.eq(1).css(g(60, 60));
                            Member.avatar.popShow();
                        }
                    });
                }
            });
            Member.avatar_reset = Member.avatar.find('button:reset');
            Member.avatar_close = Member.avatar.find('.Close');
            Member.avatar_close.add(Member.avatar_reset).click(function() {
                Member.avatar_pic.empty().removeAttr('style');
                Member.avatar_img.attr('src', Member.avatar_reset.attr('old'));
            });
            Member.avatar_x = Member.avatar.find('[name=x]');
            Member.avatar_y = Member.avatar.find('[name=y]');
            Member.avatar_w = Member.avatar.find('[name=w]');
            Member.avatar_h = Member.avatar.find('[name=h]');
        },
        getImg: function(u) {
            return u + '?' + Math.random();
        },
        reset: function() {
            Member.jcrop_api && Member.jcrop_api.destroy();
            Member.avatar_img.removeAttr("style");
            Member.avatar_x.val('');
            Member.avatar_y.val('');
            Member.avatar_w.val('');
            Member.avatar_h.val('');
        },
        pAvatar: function(p) {
            if (!p.x) {
                alert('还没有上传图片');
                return false;
            }
        },
        sAvatar: function(d) {
            Member.avatar_close.click();
            Member.top_ava.children('img').add('#Top_User img').attr('src', Member.getImg(d.url));
        }
    };
}();
$(function() {
    Member.init();
});