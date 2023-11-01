<!DOCTYPE html>
 
<html lang="zh-CN" xml:lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript"  ></script> <script type="text/javascript" async="" src="{{asset('Home/evaluate/unjcV2.js')}}"></script><script type="text/javascript" async="" src="{{asset('Home/evaluate/mstr.js')}}"></script><script type="text/javascript" async="" src="{{asset('Home/evaluate/jquery.statData.min(1).js')}}"></script>
<script src="{{asset('Home/oppozhu/js/jquery-1.9.1.min.js')}}"></script>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>【OPPO官网商品评价】</title>
<meta name="viewport" content="width=1226">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="shortcut icon" href="" type="image/x-icon">
<link rel="icon" href="" type="image/x-icon">
<link rel="stylesheet" href="{{asset('Home/evaluate/base.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Home/evaluate/goods-comment-add.min.css')}}">
</head>
<body>
 
 
<script type="text/javascript" async="" src="{{asset('Home/evaluate/xmst.js')}}"></script><script type="text/javascript">
var goodsConfig={
    
    // 商品ID
    goodsId:"11878",
    userImage: "",
    total: "2"    
};

</script>
 <form action="/shop/insert?gid={{$goods['gid']}}" method="post" enctype= "multipart/form-data">
 {!! csrf_field() !!}
<div class="goods-comment goods-comment-add-block" id="J_writeBlock">
    <div class="container" style="margin-top:80px">
        <div class="row">
            <div class="span7 goods-info-block">
                <div class="goods-info-detail">
                    <h2 class="goods-img">
                        <img src="{{asset($goods['gimg'])}}" alt="">
                    </h2>
                    <h3 class="goods-name">
                        {{$goods['gname']}}                   </h3>
                    <div class="goods-price">
                                            </div>
                   
                </div>
            </div>

    

            <div class="span13 goods-comment-add-detail-block">
                <div class="star-block">
                    <div class="star-detail">
                        <ul class="star-list J_comment_star">
                            <li class="">
                                <div class="star-icon ">
                                    <i class="iconfont"></i>
                                </div>
                            </li>
                            <li class="">
                                <div class="star-icon">
                                    <i class="iconfont"></i>
                                </div>
                            </li>
                            <li class="">
                                <div class="star-icon">
                                    <i class="iconfont"></i>
                                </div>
                            </li>
                            <li class="">
                                <div class="star-icon">
                                    <i class="iconfont"></i>
                                </div>
                            </li>

                            <li>
                                <div class="star-icon">
                                    <i class="iconfont"></i>
                                </div>
                            </li>
                            
                        </ul>
                    </div>

                <style>
                    .one{
                        font-size: 20px;
                        margin-top:5px;
                    }
                </style>
                <span class="one" style="color:orange">请输入您宝贵的意见</span>

                <textarea id="J_commentContent" name="content" class="goods-comment-content"> </textarea>
                </span><input type="file" style="padding-top:15px" name="img" value=""/>
                
                <div class="submit-block " id="J_submitBlock">
                    <div class="left-show-block">
                        <ul class="img-list hide J_imgList">
                        </ul>
                        <dl class="comment-tip-info ">
                            <dt class="J_commentTipInfo">如何写高质量的评价？</dt>
                            <dd>感受如何：记录下开箱时的感受。 </dd>
                            <dd>产品如何：写点有理有据的产品分析。 </dd>
                            <dd>上传图片：放几张优雅的产品照片。</dd>
                            <dd>提点建议：说说你的改进建议和好点子。</dd>
                        </dl>
                    </div>
                    <div class="right-btn-block">
                        
                        <div class="btn btn-primary comment-answer-btn" >
                            <button type="button"  name="tijiao">发表评价</button>
                        </div>

                        <div id="J_submit" class="btn btn-primary comment-answer-btn" >
                            <button type="reset">取消评价</button>
                        </div>

                    </div>
                </div>
        

            </div>
        </div>
    </div>

</div>
</form>


 
<script src="{{asset('Home/evaluate/base.min.js')}}"></script>
<script>
(function() {
    MI.namespace('GLOBAL_CONFIG');
    MI.GLOBAL_CONFIG = {
        orderSite: '',
        wwwSite: '',
        cartSite: '',
        itemSite: '',
        assetsSite: '',
        listSite: '',
        searchSite: '',
        mySite: '',
        damiaoSite: '',
        damiaoGoodsId:[],
        logoutUrl: '',
        staticSite: '',
        quickLoginUrl: ''
    };
    MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
    MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
    MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
    MI.miniCart.init();
    MI.updateMiniCart();
})();
</script>

<script type="text/javascript" src="{{asset('Home/evaluate/goodsCommentAdd.min.js')}}"></script>

    <script>
     //单品页面所用链接
     MI.goodsDetailConfig = {};
     MI.goodsDetailConfig.commentWwwUrl = "";
     MI.goodsDetailConfig.commentOrderUrl = "//comment.huodong.mi.com";
     MI.goodsDetailConfig.commentHuodongUrl = "//comment.huodong.mi.com";
     MI.goodsDetailConfig.imgSaveUrl = "";
</script>

<script>
var _msq = _msq || [];
_msq.push(['setDomainId', 100]);
_msq.push(['trackPageView']);
(function() {
    var ms = document.createElement('script');
    ms.type = 'text/javascript';
    ms.async = true;
    ms.src = '//c1.mifile.cn/f/i/15/stat/js/xmst.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ms, s);
})();
</script>



<script type="text/javascript">
    
    $(function(){
        $('textarea[name="content"]').blur(function(){
            
            if($(this).val()==''){
                alert('请输入内容');
            }
        })
        
        $('button[name="tijiao"]').click(function(){

            if( $('textarea[name="content"]').val() != '' ){
                
                $('button[name="tijiao"]').attr('type','submit');
            }
        });
    });

</script>




</body>
</html>