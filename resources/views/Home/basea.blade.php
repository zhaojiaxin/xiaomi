@extends('home.base')
@section('content3')
<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/Css/base.min.css" />
<link rel="stylesheet" href="/Css/index.min.css" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('/Css/main.min.css?v=2016053001')}}"/>
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script src="/Scripts/jquery-1.8.3.min.js"></script>
<link type="text/css" rel="stylesheet" href="{{URL::asset('/Css/reset.css')}}">
<link type="text/css" rel="stylesheet" href="{{URL::asset('/Css/layout.css')}}">
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
                                                         <a class="btn btn-line-primary btn-small btn-buy" href="/buygoods/{{$good->gid}}">选购</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endif
                            @endforeach

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
    </ul>
</div>
@endsection



