@foreach($web as $w)
	@if($w->status==0)
		网站维护中!!!!!
	@else
<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>{{$w->title}}</title>
<meta name="description" content="小米官方网站包含小米手机系列小米NOTE、小米4，红米手机系列红米Note、红米2/2A还有小米电视40/49/55英寸、手环、移动电源、运动相机,小米智能家居系列路由器、空气净化器、体重秤、插线板等小米商城均有售。" />
<meta name="keywords" content="小米,小米手机,小米官网,红米手机,小米商城,小米电视" />
<meta name="viewport" content="width=1226" />
<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/Css/base.min.css" />
<link rel="stylesheet" href="/Css/index.min.css" />
<link rel="stylesheet" href="{{URL::asset('css/base.min.css?v2016d18')}}"/>
<link rel="stylesheet" type="text/css" href="{{URL::asset('/Css/main.min.css?v=2016053001')}}"/>
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script src="/Scripts/jquery-1.8.3.min.js"></script>
<link type="text/css" rel="stylesheet" href="{{URL::asset('/Css/reset.css')}}">
<link type="text/css" rel="stylesheet" href="{{URL::asset('/Css/layout.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/base.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{URL::asset('/Css/goods-comment-add.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{URL::asset('/Css/modacctip.css')}}">

<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/goods-comment-detail.min.css')}}" />
<style type="text/css">
	.score_1{color:rgb(255,0,0)}
	.score_2{color:rgb(255,102,0)}
	.score_3{color:rgb(255,204,0)}
	.score_4{color:rgb(51,204,0)}
	.score_bg_1{background-color:rgb(255,0,0)}
	.score_bg_2{background-color:rgb(255,102,0)}
	.score_bg_3{background-color:rgb(255,204,0)}
	.score_bg_4{background-color:rgb(51,204,0)}
	.score_outer_1 em{color:rgb(255,0,0)}
	.score_outer_2 em{color:rgb(255,102,0)}
	.score_outer_3 em{color:rgb(255,204,0)}
	.score_outer_4 em{color:rgb(51,204,0)}
	/*禁用修改头像功能*/
	.na-img-area:hover .na-edit{
		display:none;
	}
	.na-img-area{cursor:default}
	/*叹号垂直居中*/
	.error-tip{
		line-height: 1.0;
	}
	/*米号可复制*/
	.na-num{
		position: relative;
		z-index: 10;
	}
	/*解决英文被垂直遮挡*/
	.font-img-item{
		height: 42px;
	}
	/*统一颜色*/
	.color-active{
		color:rgb(255,102,0)!important;
	}
	/*tip additionals*/
	/*
	.tip, .mod_acc_tip{
		position:fixed;
		top:50%;
		left:50%;
		margin-left:-212px;
		margin-top: -266px;
		z-index:20;
	}
	*/
	.tip_h295{
		margin-top: -152px;
	}
	.tip_h424{
		margin-top: -218px;
	}
	.tip_h436{
		margin-top: -224px;
	}
	/*动态select的布局*/
	#popSetMibao .i_currentselected{
		width: auto !important;
	}
	#popSetMibao .i_selectoption{
		width: 100% !important;
	}
	#popSetMibao .set_qst li{
		width: 190px;
	}
	#popSetMibao .set_qst label{
		/*height: 22px;*/
		width: 185px;
	}
	#popAnswerMibao .set_qst label{
		height: 22px;
		width:175px;
		display: block;
	}
	#popAnswerMibao .set_qst li{
		height: 60px;
	}
	/*显示和隐藏备用手机*/
	#popManageTokenStatus dd .no_fb_mobile{
		display: block;
	}
	#popManageTokenStatus dd .fb_mobile{
		display: none;
	}
	#popManageTokenStatus .has_fb_mobile .no_fb_mobile{
		display: none;
	}
	#popManageTokenStatus .has_fb_mobile .fb_mobile{
		display: block;
	}
	/*popup的遮层*/
	.popup_mask .mod_wrap{
		height: 100%;
		overflow-y: auto;
		position: absolute;
		width: 100%;
		z-index: 1;
	}
	.popup_mask .mod_acc_tip{
		display:none;
		position:absolute;
		left:50%;
		margin-left:-206px;
		top:50%;
		margin-top:-187px;
		_top: 500px;
	}
	/*某些要在前面的对话框*/
	.callable{
		z-index: 200;
	}
	/*vertically center*/
	#popSetMibao, #popAnswerMibao, #popManageTokenStatus, #popManageTokenKeys{
		top:0;
		margin-top: 0;
	}
	/*下拉框限高*/
	.i_selectoption {
		height: 150px;
	}
	/*已完成安装*/
	#popManageTokenDownload .tip_btns .installed{
		display:inline-block;
	}
	#popManageTokenDownload .tip_btns .goback{
		display:none;
	}
	#popManageTokenDownload .token_enabled .installed{
		display:none;
	}
	#popManageTokenDownload .token_enabled .goback{
		display:inline-block;
	}
	/*IE6*/
	#popUpdatePassword .capt_box{
		display: none;
	}
	/*sms not sent*/
	#sms-unsent{
		width:100%;
		height:100%;
		position:fixed;
		_position:absolute;
		left:0;
		top:0;
		z-index:10000;
		display:none;
	}
	#sms-unsent .bg{
		width:100%;
		height:100%;
		position:absolute;
		left:0;
		top:0;
		z-index:-1;
		filter:alpha(opacity=70);
		-moz-opacity:.7;
		opacity:.7;
		background-color:#aaa;
	}
	#sms-unsent .msg-box{
		width:560px;
		height:200px;
		position:absolute;
		left:50%;
		top:50%;
		margin-left:-280px;
		margin-top:-100px;
		background-color:#fff;
	}
	#sms-unsent .msg-box .text{
		position:absolute;
		text-align:center;
		top:56px;
		font-size:18px;
		color:#585858;
		width:500px;
	}
	#sms-unsent .msg-box .button{
		position:absolute;
		text-align:center;
		top:100px;
		width:120px;
		height:40px;
		color:#333;
		border:1px solid #dadada;
		left:50%;
		margin-left:-61px;
		cursor:pointer;
		line-height:40px;
		font-size:16px;
		-webkit-border-radius:1px;
		-moz-border-radius:1px;
		border-radius:1px;
	}
	/*干掉该死的IE6的遮罩问题*/
	#loadingMask .bkc{
		_height:2000px;
	}
	/*wap*/
	.bugfix_ie6,
	.n-account-area-box{ display:block;}
	/*hide default options*/
	.def-opt{
		display: none;
	}
	#popEnterNewPhone{
		margin-top:-250px;
	}
	.del-account-deny h4{
	  font-size:14px;
	  font-weight:normal;
	}
	.del-account-deny-content{
	  list-style:disc;
	  font-fize:14px;
	}
	.del-account-deny-content  li{
	  list-style:disc;
	  font-fize:14px;
	}

</style>
<style type="text/css" media="print">
	.n-logo-area .logout,
	.n-account-area,
	.n-frame,
	.n-main-nav,
	.n-footer{display : none; }
</style>
</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="//www.mi.com/index.html" >小米网</a>
			<span class="sep">|</span>
			<a rel="nofollow" href="" target="_blank">MIUI</a>
			<span class="sep">|</span>
			<a rel="nofollow" href="" target="_blank">米聊</a>
			<span class="sep">|</span>
			<a rel="nofollow" href="" target="_blank">游戏</a>
			<span class="sep">|</span>
			<a rel="nofollow" href="" target="_blank">多看阅读</a>
			<span class="sep">|</span>
			<a rel="nofollow" href="" target="_blank">云服务</a>
			<span class="sep">|</span>
			<a rel="nofollow" href="" target="_blank">小米网移动版</a>
			<span class="sep">|</span>
			<a rel="nofollow" href="" target="_blank">问题反馈</a>
			<span class="sep">|</span>
			<a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">Select Region</a>
        </div>
        <div class="topbar-cart" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="//static.mi.com/cart/">
				<i class="iconfont">&#xe60c;</i>购物车<span class="cart-mini-num J_cartNum"></span>
			</a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading">
					<div class="loader"></div>
				</div>
            </div>
        </div>
        <script>
	        $(function(){
	        		$('.topbar-cart').mouseover(function(){
	        			$('.user').removeClass('user-active');
		        		$('.user-menu').css({display:'none'});
	        			$(this).addClass('topbar-cart-active');
		        		$('.cart-menu').css({display:'block'});
		        		$('.topbar-cart').mouseout(function (){
		        			$('.topbar-cart').removeClass('topbar-cart-active');
		        			$('.cart-menu').css({display:'none'});

		        		});
	        		});

	        	});

        </script>

		@if(Session::get('id') == null)
        <div class="topbar-info" id="J_userInfo">
            <a  rel="nofollow" class="link" href="http://www.tss.com/auth/login" data-needlogin="true">登录</a>
			<span class="sep">|</span>
			<a  rel="nofollow" class="link" href="http://www.tss.com/auth/register" >注册</a>&nbsp;
        </div>
        @else
        <div class="topbar-info">
			<span class="user">

                <a rel="nofollow" class="user-name" href="//my.mi.com/portal" target="_blank" >
                    <span class="name">{{Session::get('name')}}</span>
                    <i class="iconfont"></i>
                </a>
                <ul class="user-menu" style="display:none;">
                    <li>
                        <a rel="nofollow" href="/oneself/centre" target="_blank">个人中心</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="/evaluate/appraise" target="_blank" >评价晒单</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="/like/goods" target="_blank">我的喜欢</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="/oneself/safety" target="_blank" >小米账户</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="//order.mi.com/site/logout">退出登录</a>
                    </li>
                </ul>
            </span>
            <span class="sep">|</span>
            <a rel="nofollow" class="link link-order" href="//static.mi.com/order/" target="_blank" >我的订单</a>
        </div>
        @endif
        <script>
        	$(function(){
        		$('.user').mouseover(function(){
        			$(this).addClass('user-active');
	        		$('.user-menu').css({display:'block'});
	        		$('.user-menu').mouseout(function (){
	        			$('.user').removeClass('user-active');
	        			$(this).css({display:'none'});
	        		});
        		});

        	});

        </script>

    </div>
</div>
   @endif
@endforeach