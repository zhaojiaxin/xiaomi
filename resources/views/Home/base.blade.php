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
<link rel="stylesheet" type="text/css" href="{{URL::asset('/Css/main.min.css?v=2016053001')}}"/>
<link rel="stylesheet" type="text/css" href="{{URL::asset('./Css/main.min.css')}}" />
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script src="/Scripts/jquery-1.8.3.min.js"></script>
<link type="text/css" rel="stylesheet" href="{{URL::asset('/Css/reset.css')}}">
<link type="text/css" rel="stylesheet" href="{{URL::asset('/Css/layout.css')}}">
<link rel="stylesheet" href="{{URL::asset('/Css/base.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{URL::asset('/Css/goods-comment-add.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{URL::asset('/Css/modacctip.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/goods-comment-detail.min.css')}}" />
</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="/home" >小米网</a>
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
			<a href="/home/1">小米欣赏</a>
        </div>
        <div class="topbar-cart" id="J_miniCartTrigger">
			@if(Session::get('id'))
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="/addCart/{{Session::get('id')}}">
				<i class="iconfont">&#xe60c;</i>购物车<span class="cart-mini-num J_cartNum"></span>
			</a>
			@else
			<a rel="nofollow" class="cart-mini cart-login" id="J_miniCartBtn" href="/auth/login">
				<i class="iconfont">&#xe60c;</i>购物车<span class="cart-mini-num J_cartNum"></span>
			</a>
			@endif
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading">
					<div class="loader"></div>
				</div>
            </div>
        </div>
        <script>
			$('.cart-login').click(function(){

				if(!confirm('您还未登录,请先登录')){
								return false;
					}
			});
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
            <a  rel="nofollow" class="link" href="/auth/login" data-needlogin="true">登录</a>
			<span class="sep">|</span>
			<a  rel="nofollow" class="link" href="/auth/register" >注册</a>&nbsp;
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
                        <a rel="nofollow" href="/logout">退出登录</a>
                    </li>
                </ul>
            </span>
            <span class="sep">|</span>
            <a rel="nofollow" class="link link-order" href="home/order" target="_blank" >我的订单</a>
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
<div class="site-header">

    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="/home" title="小米官网">小米官网</a>
			<div class="doodle" style="display: block;">
				<a class="link-block" style="background-image:url(//c1.mifile.cn/f/i/15/doodles/20160618.gif)" href="/home/list" target="_blank">618活动</a>
			</div>
        </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
    			<li id="J_navCategory" class="nav-category">
                    <a class="link-category" href="//list.mi.com">
    					<span class="text">全部商品分类</span>
    				</a>
					@yield('content3')

                    <!-- 左侧导航结束 -->


    			</li>
                <!-- 头部导航开始 -->

                @foreach($results as $types => $goods)
                    @if($topnav[$types] === 1)


                    <li class="nav-item">
                        <a class="link" href="javascript:void(0);">
    						<span class="text">{{$types}}</span>
    						<span class="arrow"></span>
    					</a>

                        <div class="item-children">
                            <div class="container">
                                <ul class="children-list clearfix">
                                	@foreach($goods as $good)
                                     <li class="first">
                                        <div class="figure figure-thumb">
                                            <a href="//www.mi.com/mimax/">
    											<img src="Picture/placeholder-220!110x110.png" data-src="./Picture/xintu/maxdingbu!160x110.jpg" srcset="./Picture/xintu/maxdingbu!160x110.jpg 2x" alt="小米Max" width="160" height="110" />
    										</a>
                                        </div>
                                        <div class="title">
    										<a href="//www.mi.com/mimax/">{{$good->gname}}</a>
    									</div>
                                        <p class="price">{{$good->gprice}}元</p>
                                     </li>
                                     @endforeach

                                </ul>
                            </div>
                        </div>
                    </li>

                    @endif
                @endforeach
                 <!-- 头部导航js开始 -->
                            <script>
                                $(function(){
                                    $('.nav-item').mouseover(function(){
                                       $(this).addClass("nav-item-active nav-item-active");
                                       // $(this).children("div").attr("style","display:block");
                                       // $("p").wrap("<div id="J_navMenu" class="header-nav-menu" style="display: none;"><div class="container"></div></div>");
										// .nav-item-active:after{position:absolute;top:50px;left:50%;width:600px;height:40px;margin-left:-300px;content:'';background-color:transparent


                                    }).mouseout(function(){
                                        $(this).removeClass("nav-item-active");
                                    });
                                });
                            </script>
                            <!-- 左侧导航js结束 -->
                <!-- 头部导航结束 -->
                 @if(Session::get('id') == null)
				 <li class="nav-item" style="position:relative;top:25px;left:8px"> <a href="#">登录领优惠券</a></li>
				@else
                 <li class="nav-item" style="position:relative;top:25px;left:8px"> <a href="/discount/index">优惠券</a></li>
				@endif
            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="/home/searchgood/{keyword}" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" type="search" id="search" name="keyword" autocomplete="off" value="{{Input::old('keyword')}}"/>
                <input type="button" class="search-btn iconfont" id="aaa" value="&#xe616;" />
                <div class="search-hot-words">
                    <a href="//search.mi.com/search_%E7%BA%A2%E7%B1%B3note%203">红米Note 3</a>
					<a href="//www.mi.com/shouhuan2/">小米手环 2</a>
				</div>
            </form>
        </div>
        <script>

        $('#aaa').click(function(){

                    var searchText  = $('#search').val();
                    //console.log(searchText);
                    $.ajax({
                        type: 'get',
                        url: '/home/searchgood/'+searchText,
                        dataType: 'text',
                        success: function(data){
                            var str = '';
                            if(data == 3){
                                alert('3');

                            }else if(data == 0){
                                alert('0');
                            }else{

                                $('.goods-item').remove();
                                $('.goods-list').append('21');
                                window.location.href ='/home/searchlist/'+searchText;
                                /*for(var i=0;i<data.length;i++){
                                str += '<div class="figure figure-img"><a href="//www.mi.com/capsuleearphone/?cfrom=list"><img src="/'+data[i].logo+' " width="200" height="200" alt="" /></a></div><p class="desc"></p><h2 class="title"><a href="//www.mi.com/capsuleearphone/?cfrom=list">'+data[i].gname+'</a></h2><p class="price">'+data[i].gprice+'元</p><div class="thumbs"><ul class="thumb-list clearfix"><li><img src="/'+data[i].logo+'" width="34" height="34" /></li></ul></div>';
                                $('.goods-list').html(str);*/
                            }
                        },
                        error: function(){
                            alert('0');

                        }

                    });


                });



            </script>

    </div>
</div>

@yield('content')
<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                <li>
                    <a rel="nofollow" href="//www.mi.com/service/exchange#repaire" target="_blank"><i class="iconfont">&#xe634;</i>1小时快修服务</a>
                </li>
                <li>
                    <a rel="nofollow" href="//www.mi.com/service/exchange#back" target="_blank"><i class="iconfont">&#xe635;</i>7天无理由退货</a>
                </li>
                <li>
                    <a rel="nofollow" href="//www.mi.com/service/exchange#free" target="_blank"><i class="iconfont">&#xe636;</i>15天免费换货</a>
                </li>
                <li>
                    <a rel="nofollow" href="//www.mi.com/service/exchange#mail" target="_blank"><i class="iconfont">&#xe638;</i>满150元包邮</a>
                </li>
                <li>
                    <a rel="nofollow" href="//www.mi.com/c/service/poststation/" target="_blank"><i class="iconfont">&#xe637;</i>520余家售后网点</a>
                </li>
            </ul>
        </div>
        <div class="footer-links clearfix">
            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>

                <dd><a rel="nofollow" href="//www.mi.com/service/help_center/guide/"   target="_blank">购物指南</a></dd>

                <dd><a rel="nofollow" href="//www.mi.com/service/help_center/pay/"   target="_blank">支付方式</a></dd>

                <dd><a rel="nofollow" href="//www.mi.com/service/help_center/delivery/"   target="_blank">配送方式</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>服务支持</dt>

                <dd><a rel="nofollow" href=""   target="_blank">售后政策</a></dd>

                <dd><a rel="nofollow" href=""   target="_blank">自助服务</a></dd>

                <dd><a rel="nofollow" href=""   target="_blank">相关下载</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>线下门店</dt>

                <dd><a rel="nofollow" href=""   target="_blank">小米之家</a></dd>

                <dd><a rel="nofollow" href=""   target="_blank">服务网点</a></dd>

                <dd><a rel="nofollow" href=""   target="_blank">零售网点</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>关于小米</dt>

                <dd><a rel="nofollow" href=""   target="_blank">了解小米</a></dd>

                <dd><a rel="nofollow" href=""   target="_blank">加入小米</a></dd>

                <dd><a rel="nofollow" href=""   target="_blank">联系我们</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>关注我们</dt>

                <dd><a rel="nofollow" href=""   target="_blank">新浪微博</a></dd>

                <dd><a rel="nofollow" href=""   target="_blank">小米部落</a></dd>

                <dd><a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" >官方微信</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>特色服务</dt>

                <dd><a rel="nofollow" href=""   target="_blank">F 码通道</a></dd>

                <dd><a rel="nofollow" href=""   target="_blank">小米移动</a></dd>

                <dd><a rel="nofollow" href=""   target="_blank">防伪查询</a></dd>

            </dl>

            <div class="col-contact">
                <p class="phone">400-100-5678</p>
                <p>
                <span class="J_serviceTime-normal" style="">周一至周日 8:00-18:00</span>
                <span class="J_serviceTime-holiday" style="display:none;">2月7日至13日服务时间 9:00-18:00</span><br>（仅收市话费）
                </p>
                <a rel="nofollow" class="btn btn-line-primary btn-small" href="" target="_blank">
                    <i class="iconfont">&#xe600;</i> 24小时在线客服
                </a>
            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <div class="logo ir">小米官网</div>
        <div class="info-text">
            <p class="sites">
                <a rel="nofollow" href=""   target="_blank">小米网</a>
                <span class="sep">|</span>
                <a rel="nofollow" href=""   target="_blank">MIUI</a>
                <span class="sep">|</span>
                <a rel="nofollow" href=""   target="_blank">米聊</a>
                <span class="sep">|</span>
                <a rel="nofollow" href=""   target="_blank">多看书城</a>
                <span class="sep">|</span>
                <a rel="nofollow" href=""   target="_blank">小米路由器</a>
                <span class="sep">|</span>
                <a rel="nofollow" href=""   target="_blank">视频电话</a>
                <span class="sep">|</span>
                <a rel="nofollow" href=""   target="_blank">小米后院</a>
                <span class="sep">|</span>
                <a rel="nofollow" href=""   target="_blank">小米天猫店</a>
                <span class="sep">|</span>
                <a rel="nofollow" href=""   target="_blank">小米淘宝直营店</a>
                <span class="sep">|</span>
				<a rel="nofollow" href=""   target="_blank">小米网盟</a>
                <span class="sep">|</span>
                <a rel="nofollow" href=""   target="_blank">问题反馈</a>
                <span class="sep">|</span>
                <a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal" >Select Region</a>
            </p>
            <p>&copy;<a href="//www.mi.com/" target="_blank" title="mi.com">mi.com</a> 京ICP证110507号 京ICP备10046444号 <a rel="nofollow"  href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank">京公网安备11010802020134号 </a><a rel="nofollow"  href="//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" rel="nofollow">京网文[2014]0059-0009号</a><br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
            <a  rel="nofollow" href="//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&lang=zh-cn" target="_blank">
                <img  rel="nofollow" src="Picture/6177493f5f1d4a958f74cb37c6cf2616.gif" alt="TRUSTe Privacy Certification" />
            </a>
            <a  rel="nofollow" href="//search.szfw.org/cert/l/CX20120926001783002010" target="_blank">
                <img  rel="nofollow" src="Picture/v-logo-2.png" alt="诚信网站" />
            </a>
            <a  rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&ct=df&pa=461082" target="_blank">
                <img  rel="nofollow" src="Picture/v-logo-1.png" alt="可信网站" />
            </a>
            <a  rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank">
                <img  rel="nofollow" src="Picture/v-logo-3.png" alt="网上交易保障中心" />
            </a>
        </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>
<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal"><i class="iconfont">&#xe602;</i></a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <p style="margin: 0 0 10px;">打开微信，点击右上角的“+”，选择“扫一扫”功能，<br/>对准下方二维码即可。</p>
            <img alt="" src="Picture/qr.png" width="375" height="375" />
        </div>
</div>

<div class="modal modal-hide modal-bigtap-queue" id="J_bigtapQueue">
    <div class="modal-body">
        <span class="close" data-dismiss="modal" aria-hidden="true"><i class="iconfont">&#xe602;</i></span>
        <h3>正在排队，请稍候喔！</h3>
        <p class="queue-tip">抱歉，目前排队人数较多，导致服务器压力山大，请您耐心排队等待，<br>我们将在稍后告诉您排队结果。</p>
        <div class="queue-animate">
            <div id="J_mituWalking" class="mitu-walk"> </div>
            <div class="animate-mask animate-mask-left"></div>
            <div class="animate-mask animate-mask-right"></div>
        </div>
    </div>
</div>

<div id="J_bigtapError" class="modal modal-hide modal-bigtap-error">
    <span class="close" data-dismiss="modal" aria-hidden="true"><i class="iconfont">&#xe602;</i></span>
    <div class="modal-body">
        <h3>抱歉，网络拥堵无法连接服务器</h3>
        <p  class="error-tip">由于访问人数太多导致服务器压力山大，请您稍后再重试。</p>
        <p >
            <a class="btn btn-primary" id="J_bigtapRetry">重试</a>
        </p>
    </div>
</div>


<div id="J_bigtapModeBox" class="modal fade modal-hide modal-bigtap-mode">
        <span class="close" data-dismiss="modal" ><i class="iconfont">&#xe602;</i></span>
        <div class="modal-body">
            <h3 class="title">为防黄牛，请您输入下面的验证码</h3>
            <p class="desc">在防黄牛的路上，我们一直在努力，也知道做的还不够。<br>
    所以，这次劳烦您多输一次验证码，我们一起防黄牛。</p>
            <div class="mode-loading" id="J_bigtapModeLoading">
                <img src="Picture/loading.gif" alt="" width="32" height="32">
                <a  id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);">网络错误，点击重新获取验证码！</a>
            </div>
            <div class="mode-action hide" id="J_bigtapModeAction">
                <div class="mode-con" id="J_bigtapModeContent"></div>
                <input type="text" name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码">
                <p class="tip" id="J_bigtapModeTip"></p>
                <a class="btn  btn-gray" id="J_bigtapModeSubmit">确认</a>
            </div>
        </div>
    </div>

<div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640">
       <div class="modal-hd">
            <a class="close" data-dismiss="modal"><i class="iconfont">&#xe602;</i></a>
            <span class="title">Select Region</span>
        </div>
        <div class="modal-bd">
            <h3>Welcome to Mi.com</h3>
            <p class="modal-globalSites-tips">Please select your country or region</p>
            <p class="modal-globalSites-links clearfix">
                <a href="//www.mi.com/index.html">Mainland China</a>
                <a href="http://www.mi.com/hk/">Hong Kong</a>
                <a href="http://www.mi.com/tw/">TaiWan</a>
                <a href="http://www.mi.com/sg/">Singapore</a>
                <a href="http://www.mi.com/my/">Malaysia</a>
                <a href="http://www.mi.com/ph/">Philippines</a>
                <a href="http://www.mi.com/in/">India</a>
                <a href="http://www.mi.com/id/">Indonesia</a>
                <a href="http://br.mi.com/">Brasil</a>
                <a href="http://www.mi.com/en/">Global Home</a>
                <a href="http://www.mi.com/mena/"> MENA</a>
            </p>
        </div>
    </div>

</body>
</html>
   @endif
@endforeach