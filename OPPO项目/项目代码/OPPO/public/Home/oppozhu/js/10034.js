(function(){
    // window.ClickiTimeLogger && window.ClickiTimeLogger.start('boot.content');
    var CLICKI_CF = {
        version: '146719445',
        host: 'http://collect.cn.miaozhen.com/ca/collect.cn.miaozhen.com',
        track_host: 'http://collect.cn.miaozhen.com/ca/collect.cn.miaozhen.com',
        site_host: 'http://collect.cn.miaozhen.com/ca/sitemonitorv3.cn.miaozhen.com',
        cdn_host: 'http://collect.cn.miaozhen.com/ca/alicdnv3.sitemonitor.cn.miaozhen.com',
        site_id: Number('10034'),
        site_name: "OPPO%u5B98%u7F51",
        visitor_id: '1478960156460834',
        millisecond: '1478960156460834',
        session_key: '2l5ipy',
        time: '1478960156460',
        is_logined: true,
        rf_key: "",
        track_type: Number('0')||0,
        track_split_length: Number('5')||5,
        cross_domains: "http://collect.cn.miaozhen.com/ca/www.oppo.com,account.oppo.com,theme.oppo.com,career.oppo.com,store.opposhop.com.cn,bbs.myoppo.com,store.oppo.com,n1.oppo.com",
        jscode: null,
        widgets: null,

        track_to_multi:{},
        cookie_key:{"prefix":"__v3_c_","keys":{"visitor":"{{prefix}}visitor","sesslist":"{{prefix}}sesslist_{{site_id}}","isactive":"{{prefix}}isactive_{{site_id}}","uactiveat":"{{prefix}}uactiveat_{{site_id}}","session":"{{prefix}}session_{{site_id}}","pv":"{{prefix}}pv_{{site_id}}","review":"{{prefix}}review_{{site_id}}","today":"{{prefix}}today_{{site_id}}","session_at":"{{prefix}}session_at_{{site_id}}","last":"{{prefix}}last_{{site_id}}","localdb":"{{prefix}}localdb_{{site_id}}"}}
    };

    var CClickiName = 'CClickiV3';
    // window.ClickiTimeLogger && window.ClickiTimeLogger.end('boot');
    // window.ClickiTimeLogger && window.ClickiTimeLogger.start('clicki.js'/*tpa=http://collect.cn.miaozhen.com/ca/clicki.js*/);

    if (!window[CClickiName]) {
        var id = '__v3__clicki_js_tracker_loader__';
        if (!document.getElementById(id)) {
            var host = CLICKI_CF.cdn_host || CLICKI_CF.host;
            if ('https:' == document.location.protocol){ // 当前cdn缺少ssh证书，在有证书时可以去掉 20150311
                host = CLICKI_CF.host;
            }
            var c = document.createElement('script');
            c.id = id;
            c.type = 'text/javascript';
            c.charset = 'UTF-8';
            c.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + host + '/boot/clicki.js?v=' + CLICKI_CF.version;
                         // + "&i=" + CLICKI_CF.site_id + "&rf="+CLICKI_CF.rf_key;
            var h = document.getElementsByTagName('script')[0];
            // window.ClickiTimeLogger && window.ClickiTimeLogger.start('clicki.js.insert');
            h.parentNode.insertBefore(c, h);
            // window.ClickiTimeLogger && window.ClickiTimeLogger.end('clicki.js.insert');
        }
    }
    function check () {
        if (window[CClickiName]) {
            if (window[CClickiName][CLICKI_CF.site_id]) return;
            window[CClickiName].New(CLICKI_CF);
        }else{
            setTimeout(check, 50);
        }
    };
    check();
})();
