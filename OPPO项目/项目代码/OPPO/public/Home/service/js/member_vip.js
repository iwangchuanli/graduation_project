function pRegister() {
    var imei = $('[name=imei]', this),
        mobile = $('[name=mobile]', this),
        verifycode = $('[name=verifycode]', this);
    if (!/^\w{14,16}$/.test(imei.val())) {
        alert('IMEI号错误，请重新输入');
        return false;
    }
    if (!/^1\d{10}$/.test(mobile.val())) {
        alert('手机号码错误，请重新输入');
        return false;
    }
    if (!/^\d{4}$/.test(verifycode.val())) {
        alert('验证码错误，请重新输入');
        return false;
    }
}
$(function() {
    var mobile = $('[name=mobile]'),
        verifycode_btn = $('#verifycode_btn').click(function() {
            var v = mobile.val();
            !verifycode_btn.hasClass('g') && (/^1\d{10}$/.test(v) ? verifycode_btn.addClass('g').text('验证码发送中...').ajaxPlus({
                post: '/member/product/verify.json',
                param: {
                    mobile: v
                },
                success: function(d) {
                    var s = 60,
                        t = setInterval(function() {
                            verifycode_btn.text((s--) + 's后重发');
                            if (s < 0) {
                                verifycode_btn.text('重发验证码').removeClass('g');
                                clearInterval(t);
                                return false;
                            }
                        }, 1000);
                }
            }) : alert('手机号码错误，请重新输入'))
        });
});