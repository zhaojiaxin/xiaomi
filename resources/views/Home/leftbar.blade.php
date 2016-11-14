<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/Css/base.min.css" />
<link rel="stylesheet" href="/Css/index.min.css" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('/Css/main.min.css?v=2016053001')}}"/>
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script src="/Scripts/jquery-1.8.3.min.js"></script>
<link type="text/css" rel="stylesheet" href="{{URL::asset('/Css/reset.css')}}">
<link type="text/css" rel="stylesheet" href="{{URL::asset('/Css/layout.css')}}">
<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="//www.mi.com/index.html" title="小米官网">小米官网</a>
            <div class="doodle" style="display: block;">
                <a class="link-block" href="/home/list" target="_blank">全部商品分类</a>
            </div>
        </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
                <li id="J_navCategory" class="nav-category">
                    <a class="link-category" href="//list.mi.com">
                        <span class="text">全部商品分类</span>
                    </a>
                     <div class="site-category">
                        <ul id="J_categoryList" class="site-category-list clearfix">
                             @foreach($results as $types => $goods)
                                @if($leftnav[$types] === 1)
                                    <li class="category-item">
                                        <a class="title" href="//www.mi.com/buyphone/">{{$types}}<i class="iconfont"></i></a>
                                        <div class="children clearfix children-col-2">
                                            <ul class="children-list children-list-col children-list-col-1">
                                                 @foreach($goods as $good)
                                                    <li class="star-goods">
                                                        <a class="link" href="/buygoods/{{$good->gid}}">
                                                            <img class="thumb" src="/{{$good->logo}}" width="40" height="40" alt="">
                                                            <span class="text">{{$good->gname}}</span>
                                                        </a>
                                                         <a class="btn btn-line-primary btn-small btn-buy" href="//item.mi.com/buyphone/mi5">选购</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endif
                            @endforeach


                        </ul>
                    </div>
                    <!-- 左侧导航结束 -->

                    <!-- 左侧导航js开始 -->
                            <script>
                                $(function(){
                                        $('.category-item').mouseover(function(){
                                            // var items =  $(this).index();
                                           $(this).addClass("category-item-active");

                                           // $("items > div").eq(items).show();
                                        }).mouseout(function(){
                                            $(this).removeClass("category-item-active");
                                             // $(".category-item > div").hide();
                                        });
                                        }
                                    );

                            </script>
                            <!-- 左侧导航js结束 -->


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
                 <li class="nav-item" style="position:relative;top:25px;left:8px"> <a href="/discount/index">优惠券领</a></li>
            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" type="search" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米手机5','Rst':8},{'Key':'空气净化器2','Rst':1},{'Key':'活塞耳机','Rst':3},{'Key':'小米路由器','Rst':8},{'Key':'移动电源','Rst':26},{'Key':'运动相机','Rst':1},{'Key':'小蚁摄像机','Rst':2},{'Key':'小米体重秤','Rst':1},{'Key':'小米插线板','Rst':13},{'Key':'配件优惠套装','Rst':31}]}" />
                <input type="submit" class="search-btn iconfont" value="&#xe616;" />
                <div class="search-hot-words">
                    <a href="//search.mi.com/search_%E7%BA%A2%E7%B1%B3note%203">红米Note 3</a>
                    <a href="//www.mi.com/shouhuan2/">小米手环 2</a>
                </div>
            </form>
        </div>
    </div>
</div>




































