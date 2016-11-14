<!DOCTYPE html>
<!-- saved from url=(0063)http://bj.jumei.com/?from=Home_show_nav_fresh_new_2#brands_head -->
<html lang="zh-cn" style="height: 100%;"><!--<![endif]-->
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="qc:admins" content="56207406376255516375">
    <!-- 引入bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="/jquery-1.7.2.js"></script>

     <!-- 瀑布流 -->
    <link rel="stylesheet" type="text/css" href="/css/default.css" />
    <link rel="stylesheet" type="text/css" href="/css/component.css" />
    <script src="/js/modernizr.custom.js"></script>


    <link rel="stylesheet" type="text/css" href="{{URL::asset('Css/common.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('Css/app.css')}}">
        <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('Css/main.css')}}">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>聚美优品 - 搜索</title>
<!-- 子系统的样式 end -->
    <style type="text/css">.ibar .ibar_sub_panel .ibar_plugin_content{height:628px;overflow-y:auto;}</style>
    </head>
    <body style="height: 100%;">
        <iframe src="javascript:false;" style="display: none;" src="home/saved_resource.html"></iframe>
        <style type="text/css"> 
            .newuser_text{display:none;}
            .newuser0424{width:920px;height:612px;overflow:hidden;background:url(http://p0.jmstatic.com/banner/3512/43840_920_612_007-web.jpg) top center no-repeat;} 
            .newuser0424 .link_btm{display:block;height:178px;overflow:hidden;margin-top:434px;} 
            .newuser0424 .user_btn{background: none; width:38px;height:38px;top:0px;right:0px;position: absolute;cursor: pointer;}
            .new_user_clorbox #cboxClose { background: none; width:38px;height:38px;top:0px;right:0px;}
        </style> 
  
        <textarea id="newuser_text" class="newuser_text">&lt;div class="newuser0424" id="newuser0424"&gt;
            &lt;a class="link_btm" href="http://www.jumei.com/i/account/signup?from=all_top_banner_all_html_null&amp;lo=3512&amp;mat=43840" target="_blank"&gt;&lt;/a&gt;  
            &lt;span class="user_btn" id="user_btn"&gt;&lt;/span&gt;            
            &lt;/div&gt;
        </textarea>
        <script type="text/javascript">
        $(function(){
            //美妆商城js
            $('#meizhuangshangcheng').mouseover(function(){
                $('#header_pop_subAct').css('display','block').click(function(){
                    $(this).css('display','none');
                });
            });

            //搜索js
            $('#sousuo').keyup(function(){
                
                //alert($(this).val());
                
                    $('.dropdown-menu-right').css('display','block');
                    $.ajax({
                        type: 'get',
                        url: '/goodsSousuo?name='+$(this).val(),
                        //data: $(this).val(),

                        dataType: 'json',
                        success: function(data){
                            //$(this).html(data);
                            var str = '';
                            for(var i=0;i<data.length;i++){
                                str += '<tr><td class=sousuotd onclick=xuan(this)>'+data[i].name+'</td></tr>';
                                console.log(data[i].name);
                                $('#sousuobiaoge').html(str);
                            }
                        },
                        error: function(xhr, type){
                            
                        }
                    
                });


                //$(this).val(data);
            });

            //选中那个点击然后把字写入输入框
            // $('.sousuotd').click(function(){
            //  //var zi =$(this).val();
            //  alert('aaa');
            //  //console.log(zi);
            // });
        })
        function xuan(abc){
             var val = document.getElementById('sousuo');
            // console.log(val);
            //document.getElementsByClassName('sousuotd');
            //console.log(document.getElementsByClassName('sousuotd').innerHTML);
            //console.log(val.setAttributeNode('value','aaa'));
            //alert('aa');
            val.value = abc.innerHTML;
            document.querySelector('.dropdown-menu-right').style.display='none';

            //var val = huida.innerHTML();
            //console.log(val);
        }
    

    </script>
    <style type="text/css">
        /* 轮播速度*/
        .carousel-inner > .item {
          -webkit-transition: -webkit-transform .5s ease-in-out;
          -o-transition: -o-transform .5s ease-in-out;
          transition: transform .5s ease-in-out;
        }
        .nav_box_520 {
            height: 38px;
            clear: both;
            width: 100%;
            background: #e50150;
        }
        .nav_list_520 {text-align: center;
            height: 38px;
            margin: 0 auto;
        }
        .nav_list_520 li {
          float:center;
          display: inline;
        }
        .nav_list_520 a {
          display: inline-block;
          line-height: 36px;
          padding: 0 6px;
          height: 38px;
          color: #fff;
          font-size: 14px;
          text-align: center;
          color: #fff;
          text-decoration: none;
        }
        #header_pop_subAct:hover{
            display:block;
        }
        .nav_list_520 a:hover {
            color: #adadad;
        }
        #sousuobiaoge td:hover{
            background:#339DFF;
        }
        .home_top_tab .tab_menu .current {
            background: #666;
            color: #e6e6e6;
        }
        .home_top_tab .tab_menu li {
            float: left;
            height: 44px;
            width: 232px;
            line-height: 44px;
            font-size: 22px;
            text-align: center;
            color: #333;
            background: #f7f7f7;
            position: relative;
            cursor: pointer;
        }
    </style>
    

<div class="header header_wide_lv2">
@if(isset($users))
<!--header top-->
<div class="header_top">
    <div class="header_top_box">
        <<!--login></!--login>-->
        <ul class="header_top_left" id="headerTopLeft"><li class="signin">欢迎您，<span class="col_jumei"><a href="account/addresses/" target="_self">{{$users->name}}</a></span> [ <a class="signout" href="/home/logout">退出</a> ]</li></ul>
        <!--login end-->
        <!--city choose-->
        <div class="default-city fl" style="visibility: visible;">
                <span class="add-city-icons">
                    送至
                <span class="add-default-city">北京</span>
                    <s class="icon_arrow_down"></s>
                    <i class="user-local-icon"></i>
                </span>
            <div class="header-city-list"><dl class="user-local-city"><dd class="noborder"><span class="sheng">华北</span><div class="city-list"><a class="city user-hover" href="javascript:;" data-id="bj" data-city="beijing">北京</a><a href="javascript:;" class="city" data-id="bj" data-city="tianjin">天津</a><a href="javascript:;" class="city" data-city="hebei" data-id="bj">河北</a><a href="javascript:;" class="city" data-id="bj" data-city="shanxi1">山西</a><a href="javascript:;" class="city" data-id="bj" data-city="neimenggu">内蒙古</a></div></dd><dd><span class="sheng">华东</span><div class="city-list"><a href="javascript:;" class="city" data-id="sh" data-city="shanghai">上海</a><a href="javascript:;" class="city" data-id="sh" data-city="zhejiang">浙江</a><a href="javascript:;" class="city" data-id="sh" data-city="jiangsu">江苏</a><a href="javascript:;" class="city" data-id="gz" data-city="fujian">福建</a><a href="javascript:;" class="city" data-id="gz" data-city="jiangxi">江西</a><a href="javascript:;" class="city" data-id="bj" data-city="shandong">山东</a><a href="javascript:;" class="city" data-id="sh" data-city="anhui">安徽</a></div></dd><dd><span class="sheng">华南</span><div class="city-list"><a href="javascript:;" class="city" data-id="gz" data-city="guangdong">广东</a><a href="javascript:;" class="city" data-id="gz" data-city="hainan">海南</a><a href="javascript:;" class="city" data-id="gz" data-city="guangxi">广西</a></div></dd><dd><span class="sheng">华中</span><div class="city-list"><a href="javascript:;" class="city" data-id="sh" data-city="hubei">湖北</a><a href="javascript:;" class="city" data-id="gz" data-city="hunan">湖南</a><a href="javascript:;" class="city" data-id="bj" data-city="henan">河南</a></div></dd><dd><span class="sheng">东北</span><div class="city-list"><a href="javascript:;" class="city" data-id="bj" data-city="liaoning">辽宁</a><a href="javascript:;" class="city" data-id="bj" data-city="jilin">吉林</a><a href="javascript:;" class="city" data-id="bj" data-city="heilongjiang">黑龙江</a></div></dd><dd><span class="sheng">西南</span><div class="city-list"><a href="javascript:;" class="city" data-id="cd" data-city="chongqing">重庆</a><a href="javascript:;" class="city" data-id="cd" data-city="sichuan">四川</a><a href="javascript:;" class="city" data-id="cd" data-city="yunnan">云南</a><a href="javascript:;" class="city" data-id="cd" data-city="guizhou">贵州</a><a href="javascript:;" class="city" data-id="bj" data-city="xizang">西藏</a></div></dd><dd><span class="sheng">西北</span><div class="city-list"><a href="javascript:;" class="city" data-id="bj" data-city="shanxi">陕西</a><a href="javascript:;" class="city" data-id="bj" data-city="gansu">甘肃</a><a href="javascript:;" class="city" data-id="bj" data-city="ningxia">宁夏</a><a href="javascript:;" class="city" data-id="bj" data-city="qinghai">青海</a><a href="javascript:;" class="city" data-id="bj" data-city="xinjiang">新疆</a></div></dd><dd><span class="sheng">更多</span><div class="city-list"><a href="javascript:;" class="city" data-id="bj" data-city="xianggang">香港</a><a href="javascript:;" class="city" data-id="bj" data-city="aomen">澳门</a><a href="javascript:;" class="city" data-id="bj" data-city="taiwan">台湾</a><a href="javascript:;" class="city" data-id="bj" data-city="diaoyudao">钓鱼岛</a><a href="javascript:;" class="city" data-id="bj" data-city="haiwai">海外</a></div></dd></dl><div class="city-loading hidden"><i></i>正在切换至<span>上海</span>...</div></div>
        </div>
        <!--city choose end-->
        <!--right list-->
        <ul class="header_top_right" id="headerTopRight">
            <li><a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=Home_show_nav_fresh_new_2">正品保证</a></li>
            <li><a href="http://i.jumei.com/i/order/list" rel="nofollow">订单查询</a></li>
            <li><a href="http://i.jumei.com/i/product/fav_brands" rel="nofollow"><s class="icon_favorite"></s>收藏的品牌</a></li>
            <li class="item_ijumei">
                <a href="http://i.jumei.com/i/order/list" rel="nofollow">我的聚美<s class="icon_arrow_down"></s></a>
                <i class="icon_arrow_back"></i>
                <div class="sub_nav">
                    <ul>
                        <li><a href="http://i.jumei.com/i/order/list" rel="nofollow">我的订单</a></li>
                        <li><a href="http://i.jumei.com/i/membership/show_promocards" rel="nofollow">我的现金券</a></li>
                        <li><a href="http://i.jumei.com/i/membership/show_red_envelope" rel="nofollow">我的红包</a></li>
                        <li><a href="http://i.jumei.com/i/account/balance" rel="nofollow">我的余额</a></li>
                        <li><a href="http://i.jumei.com/i/account/balance_record" rel="nofollow">我的提现退款</a></li>
                        <li><a href="http://i.jumei.com/i/product/fav_products" rel="nofollow">我的收藏</a></li>
                        <li><a href="http://i.jumei.com/i/wishdeal/onsale" rel="nofollow">我的心愿单</a></li>
                        <li><a href="http://i.jumei.com/i/membership" rel="nofollow">会员中心</a></li>
                        <li><a href="http://www.jumei.com/i/membership/gift_card" rel="nofollow">兑换礼品卡</a></li>
                    </ul>
                </div>
            </li>
            
            <li class="item_koubei"><a href=""><s class="icon_koubei"></s>口碑中心</a></li>
            <li id="see_more">
                <span class="line"></span>
                <!--查看更多 (广告位) star-->
                                <!-- 查看分类(广告位) end  -->
            </li>
           
        </ul>
        <!--right
         list end-->
        </div>
    </div>
@else
<div class="header_top">
    <div class="header_top_box">
        <!--login-->
        <ul class="header_top_left" id="headerTopLeft">
            <li>欢迎来到聚美！</li>
            <li><a href="http://www.fjumei.com/home/login" rel="nofollow">请登录</a></li>
            <li><a href="http://www.fjumei.com/home/register" rel="nofollow">快速注册</a></li>
        </ul>
        <!--login end-->
        <!--city choose-->
        <div class="default-city fl" style="visibility: visible;">
                <span class="add-city-icons">
                    送至<span class="add-default-city">北京</span>
                    <s class="icon_arrow_down"></s>
                    <i class="user-local-icon" style="display: none;"></i>
                </span>
            <div class="header-city-list" style="height: auto;"><dl class="user-local-city"><dd class="noborder"><span class="sheng">华北</span><div class="city-list"><a class="city user-hover" href="javascript:;" data-id="bj" data-city="beijing">北京</a><a href="javascript:;" class="city" data-id="bj" data-city="tianjin">天津</a><a href="javascript:;" class="city" data-city="hebei" data-id="bj">河北</a><a href="javascript:;" class="city" data-id="bj" data-city="shanxi1">山西</a><a href="javascript:;" class="city" data-id="bj" data-city="neimenggu">内蒙古</a></div></dd><dd><span class="sheng">华东</span><div class="city-list"><a href="javascript:;" class="city" data-id="sh" data-city="shanghai">上海</a><a href="javascript:;" class="city" data-id="sh" data-city="zhejiang">浙江</a><a href="javascript:;" class="city" data-id="sh" data-city="jiangsu">江苏</a><a href="javascript:;" class="city" data-id="gz" data-city="fujian">福建</a><a href="javascript:;" class="city" data-id="gz" data-city="jiangxi">江西</a><a href="javascript:;" class="city" data-id="bj" data-city="shandong">山东</a><a href="javascript:;" class="city" data-id="sh" data-city="anhui">安徽</a></div></dd><dd><span class="sheng">华南</span><div class="city-list"><a href="javascript:;" class="city" data-id="gz" data-city="guangdong">广东</a><a href="javascript:;" class="city" data-id="gz" data-city="hainan">海南</a><a href="javascript:;" class="city" data-id="gz" data-city="guangxi">广西</a></div></dd><dd><span class="sheng">华中</span><div class="city-list"><a href="javascript:;" class="city" data-id="sh" data-city="hubei">湖北</a><a href="javascript:;" class="city" data-id="gz" data-city="hunan">湖南</a><a href="javascript:;" class="city" data-id="bj" data-city="henan">河南</a></div></dd><dd><span class="sheng">东北</span><div class="city-list"><a href="javascript:;" class="city" data-id="bj" data-city="liaoning">辽宁</a><a href="javascript:;" class="city" data-id="bj" data-city="jilin">吉林</a><a href="javascript:;" class="city" data-id="bj" data-city="heilongjiang">黑龙江</a></div></dd><dd><span class="sheng">西南</span><div class="city-list"><a href="javascript:;" class="city" data-id="cd" data-city="chongqing">重庆</a><a href="javascript:;" class="city" data-id="cd" data-city="sichuan">四川</a><a href="javascript:;" class="city" data-id="cd" data-city="yunnan">云南</a><a href="javascript:;" class="city" data-id="cd" data-city="guizhou">贵州</a><a href="javascript:;" class="city" data-id="bj" data-city="xizang">西藏</a></div></dd><dd><span class="sheng">西北</span><div class="city-list"><a href="javascript:;" class="city" data-id="bj" data-city="shanxi">陕西</a><a href="javascript:;" class="city" data-id="bj" data-city="gansu">甘肃</a><a href="javascript:;" class="city" data-id="bj" data-city="ningxia">宁夏</a><a href="javascript:;" class="city" data-id="bj" data-city="qinghai">青海</a><a href="javascript:;" class="city" data-id="bj" data-city="xinjiang">新疆</a></div></dd><dd><span class="sheng">更多</span><div class="city-list"><a href="javascript:;" class="city" data-id="bj" data-city="xianggang">香港</a><a href="javascript:;" class="city" data-id="bj" data-city="aomen">澳门</a><a href="javascript:;" class="city" data-id="bj" data-city="taiwan">台湾</a><a href="javascript:;" class="city" data-id="bj" data-city="diaoyudao">钓鱼岛</a><a href="javascript:;" class="city" data-id="bj" data-city="haiwai">海外</a></div></dd></dl><div class="city-loading hidden"><i></i>正在切换至<span>上海</span>...</div></div>
        </div>
        <!--city choose end-->
        <!--right list-->
        <ul class="header_top_right" id="headerTopRight">
            <li><a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=Home_show_nav_fresh_new_2">正品保证</a></li>
            <li><a href="http://i.jumei.com/i/order/list" rel="nofollow">订单查询</a></li>
            <li><a href="http://i.jumei.com/i/product/fav_brands" rel="nofollow"><s class="icon_favorite"></s>收藏的品牌</a></li>
            <li class="item_ijumei">
                <a href="http://i.jumei.com/i/order/list" rel="nofollow">我的聚美<s class="icon_arrow_down"></s></a>
                <i class="icon_arrow_back"></i>
                <div class="sub_nav" style="display: none; height: auto; padding-top: 8px; margin-top: 0px; padding-bottom: 8px; margin-bottom: 0px; overflow: visible;">
                    <ul>
                        <li><a href="http://i.jumei.com/i/order/list" rel="nofollow">我的订单</a></li>
                        <li><a href="http://i.jumei.com/i/membership/show_promocards" rel="nofollow">我的现金券</a></li>
                        <li><a href="http://i.jumei.com/i/membership/show_red_envelope" rel="nofollow">我的红包</a></li>
                        <li><a href="http://i.jumei.com/i/account/balance" rel="nofollow">我的余额</a></li>
                        <li><a href="http://i.jumei.com/i/account/balance_record" rel="nofollow">我的提现退款</a></li>
                        <li><a href="http://i.jumei.com/i/product/fav_products" rel="nofollow">我的收藏</a></li>
                        <li><a href="http://i.jumei.com/i/wishdeal/onsale" rel="nofollow">我的心愿单</a></li>
                        <li><a href="http://i.jumei.com/i/membership" rel="nofollow">会员中心</a></li>
                        <li><a href="http://www.jumei.com/i/membership/gift_card" rel="nofollow">兑换礼品卡</a></li>
                    </ul>
                </div>
            </li>
            <li class="item_mobile"><a href="http://hd.jumei.com/act/9-478-1477-download_app.html?from=Home_top_nav_fresh_mobile_tab_new" rel="nofollow"><span class="line"></span><s class="icon_mobile"></s>手机聚美</a></li>
            <li class="item_koubei"><a href="http://koubei.jumei.com/?from=Home_top_nav_fresh_koubei_tab_new"><s class="icon_koubei"></s>口碑中心</a></li>
            <li id="see_more">
                <span class="line"></span>
                <!--查看更多 (广告位) star-->
                                <!-- 查看分类(广告位) end  -->
            </li>
            <li class="item_more">
                <a href="javascript:void(0)">更多<s class="icon_arrow icon_arrow_down"></s></a>
                <i class="icon_arrow_back"></i>
                <div class="sub_nav">
                    <ul>
                        <li><a href="http://i.jumei.com/i/account/referrals/" target="_blank" rel="nofollow">邀请好友</a></li>
                        <li><a href="javascript:void(0)" rel="nofollow" id="bookmark_us"><span class="bottomline">加入收藏</span></a></li>
                        <li><a href="http://weibo.com/tuanmei" class="er_box" rel="nofollow" target="_blank">新浪微博<span style="display: none;"><img src="http://p0.jmstatic.com/templates/jumei/images/sina_er.png"></span></a></li>
                        <li><a href="javascript:void(0)" class="er_box" rel="nofollow">聚美微信<span style="display: none;"><img src="http://p0.jmstatic.com/jumei_weixin_header1.png"></span></a></li>
                        <li><a href="http://tieba.baidu.com/f?kw=%BE%DB%C3%C0%D3%C5%C6%B7&amp;fr=ala0" class="er_box" target="_blank">百度贴吧</a></li>
                        <li><a href="http://t.qq.com/jumei_tuangou" class="er_box" rel="nofollow" target="_blank">腾讯微博<span style="display: none;"><img src="http://p0.jmstatic.com/templates/jumei/images/qq_er.png"></span></a></li>
                        <li><a href="http://page.renren.com/601021070" class="er_box" rel="nofollow" target="_blank">人人公众主页<span style="display: none;"><img src="http://p0.jmstatic.com/templates/jumei/images/renren_er.png"></span></a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--right list end-->
    </div>
</div>
@endif
<!--header top end-->
<!--header middle-->
    <div class="header_center">
        <h1 class="logo"><a href="" id="home" title="聚美优品" style="background:url() no-repeat top left;">化妆品品牌排行榜大全网站聚美优品</a></h1>
        <!-- 活动、节日入口广告位 -->
        <a href="" style="float:left;margin-top:18px;margin-right:-60px"><img src="{{URL::asset('Images/118-6.jpg')}}"></a>                <!-- 活动、节日入口广告位 end -->
        <!--商城页面加 --><!-- <h2 class="sub_mall_logo"><a href="http://mall.jumeihmy.com" title="聚美优品美妆商城">聚美优品美妆商城</a></h2>-->
        <div class="header_searchbox header_out_searchbox">
            <form action="/home/search" method="get" pos="top" onsubmit="return mall_search_validate(this)">
               
                <div class="input-group">

                    <input type="text" value="{{$search}}" name="search" class="form-control" id="sousuo" autocomplete="off" style="border-radius: 4px; background: rgba(255, 0, 0, 0.0980392);" >
                    <span class="input-group-addon " style="padding:0;" id="basic-addon1"><input style="width:60px;height:33px;" type="submit" value="搜索"></span>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu" style="padding-top: 0px; max-height: 375px; max-width: 800px; overflow: auto; width: auto; transition: 0.3s; -webkit-transition: 0.3s; left: -1px; right: auto; min-width: 480px; padding-right: 0px;">
                        <table class="table table-condensed table-sm" style="margin-bottom: 0px;">
                            
                            <tbody id="sousuobiaoge">
                            </tbody>
                        </table>
                    </ul>
                </div>
            </form>


            <div class="search_result_pop_a" id="top_out_search_pop_div"></div>

            <ul class="hot_word">
            @foreach($redus as $redu)
                <li><a href="/home/search?search={{$redu->name}}" target="_blank">{{$redu->name}}</a><s class="line"></s></li>
            @endforeach
            </ul>
        </div>
        
        <div id="cart_box" class="cart_box">
            <a id="cart" class="cart_link" href="/shopCart" rel="nofollow" >
                <img src="{{URL::asset('Images/cart.gif')}}" width="28" height="28" class="cart_gif">
                <span class="text">去购物车结算</span>
                <span class="num" style="">1</span>
                <s class="icon_arrow_right"></s>
            </a>

            <div class="cart_content" id="cart_content">
                <i class="cart-icons"></i>
                <div class="cart_content_null">购物车中还没有商品，<br>快去挑选心爱的商品吧！</div>
                <div class="cart_content_all">
                    <div class="cart_left_time">已超过购物车商品保留时间，请尽快结算。</div>
                    <div class="cart_content_center"></div>
                    <div class="con_all">
                        <div class="price_whole"><span>共<span class="num_all"></span>件商品</span></div>
                        <div><span class="price_gongji">共计<em>￥</em><span class="total_price">69</span></span><a href="" class="cart_btn" rel="nofollow">去购物车结算</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--header middle end-->
<!--header bottom-->
<div class="header_bottom">
    <div class="channel_nav_box">
        <div class="channel_nav_list_wrap">
            
            <ul class="channel_nav_list">
                <li class="current"><a href="" class="home">首页</a></li>
                <li class="gif_301_wrap"><a target="_blank" href="" class="gif_301"><img src="{{URL::asset('Images/97-50.jpg')}}"></a></li>
                <li class="haitao_li"><a href="">极速免税店</a></li>
                <li class="gif_301_wrap"><a target="_blank" href="" class="gif_301"><img src="{{URL::asset('Images/muy1.gif')}}"></a></li>
                <li id="meizhuangshangcheng"><a href="" >美妆商城<b></b></a><textarea class="pop_act_area hide">
            </textarea></li>
            <li class="gif_301_wrap"><a target="_blank" href="" class="gif_301"><img src="{{URL::asset('Images/lux2.jpg')}}"></a></li>
                <li><a target="_blank" href="">服装运动</a></li>
                <li><a target="_blank" href="">鞋包配饰</a></li>
            </ul>

            <div class="header_pop_subAtc box-shadow" id="header_pop_subAct" > 
            <div class="mz_imglist">
                            <a target="_blank" href=""><img src="/uploads/30573_254_135_003-web.jpg"></a>
                <a target="_blank" href=""><img src="/uploads/30573_254_135_005-web.jpg"></a>
            </div>
            <div class="mz_inner clearfix">
                @foreach($daohangs as $daohang)
                    @if($daohang->pid == 0)
                        <dl style="">
                            
                            <dt class="item_int png"><a>
                                {{$daohang->name}}<?php $pid = $daohang->tid ?>
                            </a></dt>
                            @foreach($daohangs as $daohang)
                                @if($daohang->pid ==$pid)
                                    <dd><a href="" target="_blank">{{$daohang->name}}</a></dd>
                                @endif
                            @endforeach
                        </dl>
                    @endif
                @endforeach
                <!-- <dl>
                    <dt class="item_hufu png"><a href="" target="_blank"> 护肤</a></dt>
                    <dd><a href="" target="_blank">洁面</a></dd>
                </dl>
                <!-- <dl>
                    <dt class="item_caizhuang png"><a href="" target="_blank">彩妆</a></dt>
                    <dd><a href="" target="_blank">卸妆</a></dd>
                </dl>
                <dl style="border-bottom:none;border-left:none">
                    <dt class="item_xiangfen png"><a href="" target="_blank">香氛</a></dt>
                    <dd><a href="" target="_blank">女士香水</a></dd>
                </dl>
                <dl style="border-bottom:none">
                    <dt class="item_nanshi png"><a href="" target="_blank">男士专区</a></dt>
                    <dd><a href="" target="_blank">洁面</a></dd>
                </dl>
                <dl style="border-bottom:none">
                    <dt class="item_hot png"><a>热门搜索</a></dt>
                    <dd><a href="" target="_blank">面膜贴</a></dd>
                </dl>
                -->
                </div>
            </div>
            <!--导航icon 动画-->
            <ul id="icon_wrap" class="icon_Wrap">
                <li>
                    <div class="divlist divlist01">
                        <a href=""><span class=""></span> <b>品牌防伪码</b></a></div></li><li><div class="divlist divlist02">
                        <a href=""><span class="th"></span> <b>美妆30天无理由退货</b></a></div></li><li><div class="divlist divlist03">
                        <a href=""><span class="by"></span> <b>美妆满2件或299包邮</b></a>
                    </div>
                </li>            
            </ul>
            <!--导航icon 动画 end-->
        </div>
    </div>
</div>
<!--header bottom end-->
</div>



<link rel="stylesheet" href="{{URL::asset('css/jumei_search.min.css')}}" type="text/css" media="screen" charset="utf-8" />
    <!-- 主体 -->
    <div id="container"  >
                
<div id="bread_container">
    <a id="bread_prev" href="javascript:void(0);"></a>
    <div class="bread_container_con">
        <div class="search_crumb clearfix" style="width:1090px">
            <ul class="clearfix fl bread_ul">
                <li class="bread_first_item"><a href="#">首页</a></li>
                                            </ul>
                        
           
                        <!----右侧搜索框 start ---->
                        <div class="right_search" id="J_bread_search">
                <form action="/" method="get" target="_self">
                    <span class="search_gt_1">&gt;</span>
                         <input type="text" class="bread_search_input" name="search" id="J_bread_search_input" value=""/>
                    <input type="submit" value="#" class="bread_search_img" id="J_right_search_submit"/>
                </form>
            </div>
                        <!----右侧搜索框 end---->
        </div>
    </div>
    <a id="bread_next" href="javascript:void(0);"></a>
</div>


<div id="body">
<div id="search_result_wrap">
        <!--存在搜索结果显示的 页面内容 start-->

        <div class="search_info" id="J_search_info"> </div>

        
<div class="search_filter_title">
<div class="search_filter_top">
<strong>在<span></span>中筛选 <!-- <label>（多选模式，每个属性最多可同时选5个选项）</label> --></strong>
</div>
</div>
    <div class="search_filter">
            <div class="filter_con">
                <div class="filter_tit">品牌:</div>
                <div class="filter_attrs" id="filter_brand">

                    <div class="filter_attrs_top clearfix">
                        <!--搜索-->
                        <div class="filter_search_input">
                            <input type="text" class="#" id="filter_search_brand" />
                        </div>
                        <div class="multi_letters">
                            <a href="javascript:;" class="letter selected all" k="#">全部品牌<b></b></a>
                            <a href="javascript:;" class="letter" k="A">A<b></b></a>
                                                       
                        </div>
                    </div>
                    <ul>
                    	<li rel="Y" title="" pinyin="yiyezi" class="#">
                        <a name="1208"  id="item_0_1208" href="#"> </a></li>                 
                    </ul>
                    <div class="placeholder_line"></div>
                    <div class="bottom_multi_selecteds">
                        <label class="filter_tit_wide">已选品牌:</label>
                        <div class="bms_container">
                            <span style="display: none;" class="search_current_item">0</span>
                        </div>
                    </div>
                </div>
                <!-- <a href="javascript:;" class="btn_fliter_expan" title="展开">展开</a>
                <a href="javascript:;" class="btn_fliter_multi J_btn_fliter_multi" id="search_filter_brand" title="开启多选"></a>
                <div class="multi_buttons clearfix">
                    <p class="btn_multi_hint">提示:最多可同时选5个选项</p>                
                	<div class="multi_area">
                        <a href="javascript:;" class="btn_multi_submit" title="确定" id="btn_multi_submit" name="0"></a>
                        <a href="#container" title="重选" class="btn_multi_reset J_btn_multi_reset" id="btn_multi_reset"></a>
           			</div>
                </div> -->
            </div>
        
            <div class="filter_con">
                <div class="filter_tit">
                    <span>分类:</span>
                </div>
                <div class="filter_attrs" id="filter_cat">
                    <ul>
                        <li class="#" title="">
                        	<a name="107" id="item_1_107" href="#"></a>
                        </li>                                 
                    </ul>
                    <div class="placeholder_line"></div>
                    <div class="bottom_multi_selecteds">
                        <label class="filter_tit_wide">已选分类:</label>
                        <div class="bms_container">
                            <span style="display: none;" class="search_current_item">1</span>
                        </div>
                    </div>
                </div>
               <!--  <a href="javascript:;" class="btn_fliter_expan" title="展开">展开</a>
                <div class="multi_buttons clearfix">
                    <div class="multi_area">
                        <a href="javascript:;" class="btn_multi_submit" title="确定" id="btn_multi_submit" name="1"></a>
                        <a href="#container" title="重选" class="btn_multi_reset J_btn_multi_reset" id="btn_multi_reset"></a>
            		</div>
                </div> -->
            </div>
        
            <div class="filter_con">
                <div class="filter_tit">价格:</div>
                <div class="filter_attrs" id="filter_price">
                    <ul>
                        <li title="#"><a name="0-119" id="item_3_0-119" href="#">0-119元</a></li>
                        <li title="#"><a name="120-239" id="item_3_120-239" href="#">120-239元</a></li>
                        <li title="#"><a name="240-489" id="item_3_240-489" href="#">240-489元</a></li>        
                        <li title="#"><a name="490-879" id="item_3_490-879" href="#">490-879元</a></li>       
                        <li title="#"><a name="880" id="item_3_880" href="#">880元以上</a></li>     
                    </ul>
                    	<div class="placeholder_line"></div>
                    	<div class="bottom_multi_selecteds">
                        	<label class="filter_tit_wide">已选价格:</label>
                        	<div class="bms_container">
                            	<span style="display: none;" class="search_current_item">3</span>
                        	</div>
                    	</div>
                </div>
                <!-- <a href="javascript:;" class="btn_fliter_expan" title="展开">展开</a>
                                <a href="javascript:;" class="btn_fliter_multi J_btn_fliter_multi" id="search_filter_brand" title="开启多选"></a>
                <div class="multi_buttons clearfix">
            		<div class="multi_area">
                        <a href="javascript:;" class="btn_multi_submit" title="确定" id="btn_multi_submit" name="3"></a>
                        <a href="#container" title="重选" class="btn_multi_reset J_btn_multi_reset" id="btn_multi_reset"></a>
            		</div>
                </div> -->
            </div>
            </div>
    
    
        <div id="search_list_wrap">
                            <div style="display:none" id="s_r_t" name="搜索点击流用">1</div>
            
                        <div class="search_list_head_fiex">
            <div class="search_list_head">

            <div class="slh_label">排序:</div>
            <ul>
                <li class="selected">
                    <a class="down"
                       >默认</a>
                </li>
                <li class="#">
                
                <a href="/home/search?price={{$price}}&search={{$search}}" class="price_sort up">价格</a>
                </li>
                <li >
                    <a class="down"
                       href="/home/search?xiaoliang={{$xiaoliang}}&search={{$search}}">销量</a>
                </li>

                <li >
                    <a class="add_time"
                       href="/home/search?shangjia=0&search={{$search}}">上架时间</a>
                </li>
            </ul>
            <div class="have_stock">
                <a href="#">仅显示有货</a>
            </div>
            <!--头部分页-->

            <div class="head_pagecount">
                共<span>2075</span>个商品
            </div>

        </div>
        </div>
                
    <div class="products_wrap">
    <ul class="grid effect-7" id="grid">
    @foreach($searchs as $search)
        <li class="hai item" >
            <div class="item_wrap clearfix" style="left: -16px;">
                <div class="item_wrap_right deal_item_wrap">
                    <div class="s_l_pic">
                        <a href="http://www.fjumei.com/goodsInfo?gid={{$search->gid}}" target="_blank">
                            <img alt="{{$search->goods_name}}" original="http://www.fjumei.com/goodsInfo/{{$search->gid}}" width="255" height="255" src="{{$search->gimg}}" style="display: inline;">
                        </a>
                        </div>

                        <div class="" align="center">
                            <a href="http://item.jumei.com/1564703.html?from=sr_%E8%A1%A3%E6%9C%8D_1_1" target="_blank">
                                {{$search->goods_name}}
                            </a>
                        </div>
                            <div class="s_l_view_bg">
                            <div class="icon_wrap_bot clearfix">
                            </div>
                            <div class="search_list_price">
                                <label>¥</label>
                                <span>{{$search->price}}</span>
                            <div class="saleinfos">
                            </div>
                            </div>
                        </div>
                        <div class="search_deal_buttom_bg clearfix">
                            <div class="search_pl">新品上线|总销量:{{$search->xiaoliang}}</div>
                            <div class="rating">
                            <div style="width:100%" class="value"></div>
                            </div>
                        </div>
                        <div class="search_list_button">
                            <a target="_blank" class="track_click  zuhe_zhifu_dingjing" title="去看看" href="http://www.fjumei.com/goodsInfo/{{$search->gid}}"></a>
                            <a href="javascript:;" class="btn_fav" pid="1564703" title="收藏商品"></a>
                        </div>
                    </div>
                </div>
            </li>
@endforeach
        <!-- ---------------------------------------------------------------- -->                                                    <!--deal start-->
        
        

        <script src="/js/masonry.pkgd.min.js"></script>
        <script src="/js/imagesloaded.js"></script>
        <script src="/js/classie.js"></script>
        <script src="/js/AnimOnScroll.js"></script>
        <script>
            new AnimOnScroll( document.getElementById( 'grid' ), {
                minDuration : 0.4,
                maxDuration : 0.7,
                viewportFactor : 0.2
            } );
        </script>
    <script type="text/javascript">

        
        //瀑布流
        // var page=1;
        // var num=20;
        // //alert(location.href+'&page='+page+'&num='+num);
        // function loadImg(){
        //     //使用ajax请求数据
        //     $.ajax({
        //         url : location.href+'&page='+page+'&num='+num,
        //         type: 'get',
        //         dateType: 'json',
        //         success:function InsertImg(txt){
        //             //InsertImg();

        //             //将返回的json字符串转化为JSON对象
        //             var imgs=eval('('+txt+')');
        //             //将imgs中的所有图片插入页面
                    
        //             //获取所有的li标签
        //             var lis=document.getElementsByTagName('li');
                    
        //             //遍历返回的图片对象
        //             for(var i=0;i<imgs.length;i++){
        //                 //创建一个div节点
        //                 var div=document.createElement('div');
        //                 //设置内容
        //                 div.innerHTML='<img src="'+imgs[i].path+'"><p>'+imgs[i].info+'</p>';
        //                 //将div插入div
        //                 lis[i%4].appendChild(div);
        //             }


        //         },
        //         error:function(err){

        //         }
        //     })
        //     //myAjax().get('returnImg.php?page='+page+'&num='+num,InsertImg)
        // }
        
        // loadImg();
        
        // //将图片插入页面的函数
        // function InsertImg(txt){
        //     //将返回的json字符串转化为JSON对象
        //     var imgs=eval('('+txt+')');
        //     //将imgs中的所有图片插入页面
            
        //     //获取所有的li标签
        //     var lis=document.getElementsByTagName('li');
            
        //     //遍历返回的图片对象
        //     for(var i=0;i<imgs.length;i++){
        //         //创建一个div节点
        //         var div=document.createElement('div');
        //         //设置内容
        //         div.innerHTML='<img src="'+imgs[i].path+'"><p>'+imgs[i].info+'</p>';
        //         //将div插入div
        //         lis[i%4].appendChild(div);
        //     }
            
        // }
        
        // //console.dir(window.document.documentElement.scrollHeight);
        
        // //添加滚动事件
        // window.onscroll=function(){
        //     //获取页面的高度
        //     var pageH=document.documentElement.scrollHeight;
        //     //获取当前滚动条的高度
        //      var scrollH=Math.max(document.documentElement.scrollTop,document.body.scrollTop);
        
        //     console.log(pageH+'---'+scrollH);
        //     //判断何时出发加载图片的方法
            
        //     if(pageH-scrollH<800){
        //         //更新页数
        //         page++;
        //         //调用加载函数
        //         loadImg();
        //     }
            
            
        // }

    </script>

            <!--global deal end-->
            <!--mall start-->
                                                            
            <!-- mall end-->
            <!--global mall start-->
                                          
            <!-- mall end-->
            <!--global mall start-->
        </ul>
    <div class="clear"></div>
</div>
<div style="display:none;">
    <i id="brand_id"></i>
    <i id="search_keywords">面膜</i>
</div>
                


    <!--存在搜索结果显示的 页面内容 end-->
    
    <!--可能喜欢-->
        
    <!--最终购买 异步ajax-->
    <div class="search_last_buy" search="面膜"></div>
        <div class="search_footer ">
            <p class="sf_other"></p>
            
            <div class="search_foot_label">搜索全部</div>
		        <div class="search_footer_wrap">
		            <form action="#" method="get" onsubmit="return mall_search_validate(this)">
		                <input type="hidden" name="filter" value="0-11-1">
		                <input name="search" type="text" class="#" value="面膜" id="search_footer_input" default_val="#" autocomplete="off" x-webkit-speech="#" x-webkit-grammar="builtin:search" lang="zh"/>
		                <input name="from" type="hidden" value="#"/>
		                <input name="cat" type="hidden" value="#"/>
		                <button type="submit">搜索</button>

		            </form>
		            <!--搜索结果容器-->
		            <div class="search_result_pop_a" id="foot_search_pop_div">

		            </div>
		        </div>
        	<div class="clear"></div>
            	<p style="padding: 10px 0 0 76px;" class="bottom_othersearch"><a href="#" target="_blank">去口碑中心搜索</a></p>
        </div>

    <div id="browse_history">
    <div class="title">
        您最近查看的商品<em>RECENTLY VIEWD ITEMS</em>
    </div>
    <div class="bh_content">
        <!--浏览记录-->
        <div class="browse_list_wrap fl">
            <h2 class="browse_tit">查看记录</h2>
            <div class="browse_list">

            </div>
        </div>
        <div class="browse_Recommend fr">
            <h2 class="browse_tit">根据查看记录推荐<span>第<em id="br_curpage">0</em>页,共<em id="br_pagecount">0</em>页</span></h2>
            <div class="br_slide_container">
                <em class="slidearrow slidearrow_l"><</em>
                <div class="br_slide" id="br_slide">
                <ul></ul>
                </div>
                <em class="slidearrow slidearrow_r">></em>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>


    <div class="clear"></div>




<!----------------------尾部------------------------>
<div id="footer" class="footer">
    <div id="footer_textarea"> 
       <div class="footer_top">
            <div class="footer_con footer_credit" id="footer_credit">
                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer" class="foot_link mostmall" target="_blank" rel="nofollow">
                    <span class="first corn"></span><span class="con"><b>值得信赖美妆电商</b></span>四千万用户信赖
                </a>
                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#jumei_ipo" class="foot_link quality" target="_blank" rel="nofollow">
                    <span class="corn"></span><span class="con"><b>成功在美上市</b></span>股票代码NYSE:JMEI
                </a>
                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#brand_con" class="foot_link back" rel="nofollow" target="_blank">
                    <span class="corn"></span><span class="con"><b>品牌防伪码</b></span>支持品牌官网验真
                </a>
                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#unconditionally_backtrack" class="foot_link depot" target="_blank" rel="nofollow">
                    <span class="corn"></span><span class="con"><b>30天无理由退货</b></span>只要不满意无理由退货
                </a>
                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#user_confide" class="foot_link consignment" target="_blank" rel="nofollow">
                    <span class="corn"></span><span class="con"><b>百万用户口碑</b></span>帮你只选对的,不选贵的
                </a>
                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#bold_consignment" class="foot_link packaging" target="_blank" rel="nofollow">
                    <span class="corn"></span><span class="con"><b>订单闪电发货</b></span>1.5小时订单急速出库
                </a>
                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#star_commend" class="foot_link confide" target="_blank" rel="nofollow">
                    <span class="corn"></span><span class="con"><b>大牌明星热荐</b></span>打造精致明星脸
                </a>
            </div>
        </div>
        <div class="footer_top_sen">
            <div class="footer_con footer_links" id="footer_links">
                <ul class="linksa">
                    <li class="links">服务保障</li>
                    <li><a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer&amp;site=bj#brand_con" target="_blank" rel="nofollow">品牌真品防伪码</a></li>
                    <li><a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer" target="_blank" rel="nofollow">正品保证</a></li>
                    <li><a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#unconditionally_backtrack" target="_blank" rel="nofollow">30天无条件退货</a></li>
                    <li><a href="http://www.jumei.com/help/faq?from=footer" target="_blank" rel="nofollow">7×24小时客服服务</a></li>
                    <li><span class="footer_zcemail">总裁邮箱ceo@jumei.com</span></li>
                </ul>
                <ul class="linksb">
                    <li class="links">使用帮助</li>
                    <li><a href="http://www.jumei.com/help/guidebook" target="_blank" rel="nofollow">新手指南</a></li>
                    <li><a href="http://www.jumei.com/help/faq" target="_blank" rel="nofollow">常见问题</a></li>
                    <li><a href="http://www.jumei.com/help/main" target="_blank" rel="nofollow">帮助中心</a></li>
                    <li><a href="http://www.jumei.com/i/help/user_terms" target="_blank" rel="nofollow">用户协议</a></li>
                    <li><a href="http://www.jumei.com/activity_qiye_tuangou.html" target="_blank" rel="nofollow">企业用户团购</a></li>
                </ul>
                <ul class="linksc">
                    <li class="links">支付方式</li>
                    <li><a href="http://www.jumei.com/help/pay_cod" target="_blank" rel="nofollow">货到付款</a></li>
                    <li><a href="http://www.jumei.com/help/pay_online" target="_blank" rel="nofollow">在线支付</a></li>
                    <li><a href="http://www.jumei.com/help/pay_balance" target="_blank" rel="nofollow">余额支付</a></li>
                    <li><a href="http://www.jumei.com/help/pay_promocards?from=footer" target="_blank" rel="nofollow">现金券支付</a></li>
                </ul>

                <ul class="linksd">
                    <li class="links">配送方式</li>
                    <li><a href="http://www.jumei.com/help/two_for_freeshipping?from=footer" target="_blank" rel="nofollow">包邮政策</a></li>
                    <li><a href="http://www.jumei.com/help/delivery_state?from=footer" target="_blank" rel="nofollow">配送说明</a></li>
                    <li><a href="http://www.jumei.com/help/delivery_fee?from=footer" target="_blank" rel="nofollow">运费说明</a></li>
                    <li><a href="http://www.jumei.com/help/check_goods?from=footer" target="_blank" rel="nofollow">验货签收</a></li>
                </ul>

                <ul class="linkse">
                    <li class="links">售后服务</li>
                    <li><a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer" target="_blank" rel="nofollow">正品承诺</a></li>
                    <li><a href="http://www.jumei.com/help/faq?from=footer" target="_blank" rel="nofollow">售后咨询</a></li>
                    <li><a href="http://www.jumei.com/help/refund_policies" target="_blank" rel="nofollow">退货政策</a></li>
                    <li><a href="http://www.jumei.com/help/refund_handle" target="_blank" rel="nofollow">退货办理</a></li>
                </ul>
                <div class="links_er_box">
                    <ul class="linksf">
                        <li class="links">手机聚美</li>
                        <li><span class="link_bottom_pic"></span></li>
                        <li>下载移动客户端</li>
                    </ul>
                    <ul class="linksg">
                        <li class="links">聚美微信</li>
                        <li><span class="link_bottom_pic"></span></li>
                        <li>聚美官方微信</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer_dy" id="footer_dy">
            <div class="play_box">
                <span class="play"></span>
            </div>
        </div>
        <div class="footer_center">
            <div class="footer_con" id="footer_link">
                <a href="http://www.jumei.com/about/about_us?from=footer" target="_blank" rel="nofollow">关于聚美优品</a>
                <a href="http://ir.jumei.com/?from=footer" target="_blank" rel="nofollow">INVESTOR RELATIONS</a>
                <a href="http://hd.jumei.com/act/9-478-2448-pop_invite_business_page.html?site={$current_site}&amp;from=footer" target="_blank" rel="nofollow">商家入驻</a>
                <a href="http://www.jumei.com/help/get_update?from=footer" target="_blank" rel="nofollow">获取更新</a>
                <a href="http://jumei.ihrscloud.com/outterSupport/jumei?from=footer" target="_blank" rel="nofollow">加入聚美</a>
                <a href="http://www.jumei.com/i/market/cooperation?from=footer" target="_blank" rel="nofollow">品牌合作专区</a>
                <a href="http://cps.jumei.com/?from=footer" target="_blank" rel="nofollow">网站联盟</a>
                <a href="http://www.jumei.com/about/news_center?from=footer" target="_blank" rel="nofollow">媒体报道</a>
                <a href="http://www.jumei.com/about/business?from=footer" target="_blank" rel="nofollow">商务合作</a>
            </div>
        </div>
        <div id="footer_copyright" class="footer_copyright">
            <div class="footer_con">
                <p class="footer_copy_con">
                    COPYRIGHT © 2010-2015 北京创锐文化传媒有限公司 JUMEI.COM 保留一切权利。
                    客服热线：400-123-8888
                    <br>
                    京公网安备 11010102001226 | <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">京ICP证111033号</a> | 食品流通许可证 SP1101051110165515（1-1）
                    | <a href="http://p2.jmstatic.com/activity/2013_chuangrui.jpeg" target="_blank" rel="nofollow">营业执照</a>
                </p>
                <p>
                    <a href="javascript:void(0)" class="footer_copy_logo logo01" rel="nofollow"></a>
                    <a href="https://www.itrust.org.cn/yz/pjwx.asp?wm=1693268180" target="_blank" class="footer_copy_logo logo02" rel="nofollow"></a>
                    <a href="javascript:void(0)" class="footer_copy_logo logo03" rel="nofollow"></a>
                    <a href="javascript:void(0)" class="footer_copy_logo logo04" rel="nofollow"></a>
                    <a href="https://ss.knet.cn/verifyseal.dll?sn=e12070911010031011307708&amp;ct=df&amp;pa=453163" target="_blank" class="footer_copy_logo logo05" rel="nofollow"></a>
                </p>
            </div>
        </div>
    </div>
</div>
<style>
    .ad_btm a{position:fixed;left:0;bottom:0;height:0;_position:absolute;*top: expression( (-44 + (document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight ) + ( ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop )) + 'px'); visibility:hidden;z-index: 999;}
    .ad_btm a img{width:400px;height:267px;}
    .ad_btm  .ad_close{
        position:absolute;
        right:0;
        top:0;
        display: block;
        width:25px;
        height:25px;
    }
</style>
<div class="ad_btm">
    
</div>


    <!-- 晶赞 -->
    <!-- 公共JS end -->


    <div class="ibar" id="iBar" style="z-index: 9990; right: 0px; position: fixed; top: 0px; display: block; height: 623px;">
        <div class="ibar_main_panel" style="left: 0px;">
            <ul class="ibar_mp_center">
                <li class="mpbtn_login"><a href="/auth/login"><s></s>登录</a></li>
                <li class="mpbtn_cart" style="left: 0px;">
                    <a href="#" data-plugin="iBarCart">
                        <s></s>
                        <span class="text">购物车</span>
                        <span class="cart_num">0</span>
                    </a>
                </li>
                <li class="mpbtn_asset">
                    <a href="#" data-judgelogin="1" data-plugin="iBarAsset"><s></s>我的财产</a>
                    <div class="mp_tooltip">我的财产<s class="icon_arrow_right_black"></s></div>
                </li>
                <li class="mpbtn_favorite">
                    <a href="#" data-judgelogin="1" data-plugin="iBarFavorite"><s></s>我的心愿单</a>
                    <div class="mp_tooltip">我的心愿单<s class="icon_arrow_right_black"></s></div>
                </li>
                <li class="mpbtn_histroy">
                    <a href="#" data-plugin="iBarHistroy"><s></s>我看过的</a>
                    <div class="mp_tooltip">我看过的<s class="icon_arrow_right_black"></s></div>
                </li>
                <li class="mpbtn_recharge">
                    <a href="#" data-plugin="iBarRecharge"><s></s><span class="text">充</span></a>
                    <div class="mp_tooltip">我要充值<s class="icon_arrow_right_black"></s></div>
                </li>
            </ul>
            <ul class="ibar_mp_bottom">
                <li class="mpbtn_qrcode">
                    <a href=""><s></s>手机聚美</a>
                    <div class="mp_qrcode">
                        <img src="{{URL::asset('Images/placeholder.png')}}" data-lazysrc="http://p0.jmstatic.com/assets/qrcode.png?v=2" width="148" height="175"><s class="icon_arrow_white"></s>
                    </div>
                </li>
                <li class="mpbtn_support">
                    <a href="#" data-plugin="iBarFaq"><s></s>客服中心</a>
                    <div class="mp_tooltip">客服中心<s class="icon_arrow_right_black"></s></div>
                </li>
                <li class="mpbtn_gotop" id="gotop" style="visibility: visible; display: block;">
                    <a href="#" class="btn_gotop"><s></s>返回顶部</a>
                    <div class="mp_tooltip">返回顶部<s class="icon_arrow_right_black"></s></div>
                </li>
            </ul>
        </div>
    <div class="ibar_login_box  status_login">
    <div class="avatar_box">
        <p class="avatar_imgbox">
            <img src="{{URL::asset('Images/avatar_small.png')}}" alt="头像" width="62" height="62">
        </p>
         <ul class="user_info">
             <li>用户名：JM185BCCH1278</li>
             <li>级 别：普通会员</li>
         </ul>
    </div>
    <div class="login_btnbox">
            <a href="http://www.jumei.com/i/order/list" class="login_order" target="_blank">我的订单</a>
            <a href="http://www.jumei.com/i/product/fav_products" class="login_favorite" target="_blank">我的收藏</a>
    </div>
    <div>
        <s class="icon_arrow_white"></s>
        <a href="javascript:;" class="ibar_closebtn" title="关闭"></a>
    </div>
    <div class="ibar_sub_panel">
        <a href="javascript:;" class="ibar_closebtn" title="关闭"></a>
        <span class="ibar_loading_text">正在为您努力加载数据！</span>
    </div>
    <div class="ibar_tips_box">
        <div class="tips_customer_box">
            <div class="olduser_cash">
                <h3>这里查看百元现金券</h3>
                <p>有效期24小时</p>
            </div>
            <s class="icon_arrow_white"></s>
            <a href="javascript:;" class="ibar_closebtn" title="关闭"></a>
        </div>
    </div>
</div>
    <img src="{{URL::asset('Resource/pv')}}" style="display: none; width: 0px; height: 0px;">
    <div id="criteo-tags-div" style="display: none;">
        <iframe height="0" width="0" src="{{URL::asset('Resource/dis.html')}}" style="display: none;"></iframe>
    </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/1.11.3_jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap-suggest.js"></script>
</body>
</html>