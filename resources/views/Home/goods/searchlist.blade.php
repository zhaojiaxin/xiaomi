@extends('home.basea')
@section('content')
<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>小米手机原装配件——小米手机官网(耳机_保护套_移动电源_手机贴膜_蓝牙设备) 在线购买</title>
<meta name="viewport" content="width=1226" />
<meta name="description" content="小米手机原装配件官方正品包含小米手机个性后盖、小米手机耳机、手机保护壳、小米手机屏幕贴膜、蓝牙设备等品质保障，服务一流。" />
<meta name="keywords" content="小米手机,原装配件,耳机,移动电源,电池,后盖,米兔,贴膜" />
<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/Css/base.min.css" />
<link rel="stylesheet" href="/Css/list.min.css" />
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script src="/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.6-dist/css/bootstrap.css" /> -->
<style>

	.pagination li{
		color:blue;
		float:left;
		border:1px solid orange;
		padding:10px 20px;
		text-align:center;
	}
</style>
</head>
<body>
<div class="breadcrumbs">
    <div class="container">
        <a href='//www.mi.com/index.html'>首页</a><span class="sep">&gt;</span><span>所有商品</span>    </div>
</div>
<div class="container">
    <div class="filter-box">
        <div class="filter-list-wrap">
            <dl class="filter-list clearfix">
                <dt>分类：</dt>
                <dd class="active">全部</dd>
                @foreach($types as $type)
                <dd ><a href="/home/typesearch/{{$type->tid}}">{{$type->tname}}</a></dd>
                @endforeach

            </dl>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
       <!--  <div class="order-list-box clearfix">
           <ul class="order-list">
               <li class="up price"><a href="" rel="nofollow">价格 <i class="iconfont">&#xe62f;</i></a></li>
           </ul>
               <script>
                   $(function(){
                       $('.price').click(function(){
                           $(this).addClass('active');
                       });
                   });

               </script>
       </div> -->
        <div class="goods-list-box">
            <div class="goods-list clearfix">
            @foreach($attrs as $num => $attr)
                <div class="goods-item">
                    <div class="figure figure-img">
	                    <a href="/buygoods/{{$attr->gid}}">
	                    	<img src="/{{$attr->logo}}" width="200" height="200" alt="" />
	                    </a>
                    </div>
                    <p class="desc"></p>
                    <h2 class="title">
                    	<a href="/buygoods/{{$attr->gid}}">{{$attr->gname}}</a>
                    </h2>
                    <p class="price">{{$attr->gprice}}元</p>
                    <div class="thumbs">
                        <ul class="thumb-list clearfix">
                            <li data-config='{"cid":"1161800009","gid":"2161800006","price":"69\u5143","discount":"0","new":1,"is-cos":0,"package":0,"hasgift":0,"postfree":1,"postfreenum":"1","cfrom":"list"}' >
                            	<img src="/{{$attr->logo}}" width="34" height="34" alt="小米胶囊耳机 黑色" />
                            </li>
                        </ul>
                    </div>
                    <div class="actions clearfix">
                        @if(Session::get('id') == null)
                        <a class="btn-like J_likeGoods" data-cid="1161800009" href="/auth/login">
                        	 <span>喜欢</span>
                        </a>
                        <a class="btn-buy J_buyGoods" data-gid="2161800006" href="/buygoods/{{$attr->gid}}">
                        	<span>加入购物车</span> <i class="iconfont">&#xe60a;</i>
                        </a>
                        @else
                        <a class="btn-like J_likeGoods" data-cid="1161800009" id="{{$attr->gid}}" uid="{{Session::get('id')}}" href="javascript: void(0);">
                        	 <span>{{$attr->status ? '喜欢' : '取消喜欢'}}</span>
                        </a>
                        @endif
                        <a class="btn-buy J_buyGoods" data-gid="2161800006" href="/buygoods/{{$attr->gid}}">
                        	<span>加入购物车</span> <i class="iconfont">&#xe60a;</i>
                        </a>
                    </div>
                    <div class="notice"></div>
                </div>
            @endforeach
        	</div>

            <script>
            $('.btn-like').click(function(){
                    //获取当前操作的商品id
                    //
                    var gid=$(this).attr('id');
                    var user_id=$(this).attr('uid');
                    var status = $(this).text();
                    // alert(state);
                    //ajax操作
                    $.ajax({
                        //url
                        url:'/buygoods/changes/'+gid+'/'+user_id,
                        type:'get',
                        dataType:'text',
                        success:function(data){
                            //根据返回数据操作
                            if(data==1){
                                //更新状态
                                if(status == '喜欢'){
                                    $('.btn-like').text("取消喜欢");
                                }else{
                                    $('.btn-like').text('喜欢') ;
                                }

                            }else{
                                alert('更新失败');
                            }
                        },
                        error:function(){
                            return '0';
                        }
                    });

                });



            </script>
        	<!--分页-->

        </div>
 		<div style="margin-left:450px">
				{!! $attrs->render() !!}
        </div>
    <div id="J_renovateWrap" class="xm-recommend-container"> <!-- <span class="numbers first iconfont">&#xe629;</span><span class="numbers current">1</span><a class="numbers" href="//list.mi.com/0-0-0-0-1-0-0-0-2">2</a><a class="numbers" href="//list.mi.com/0-0-0-0-1-0-0-0-3">3</a><a class="numbers" href="//list.mi.com/0-0-0-0-1-0-0-0-4">4</a><a class="numbers" href="//list.mi.com/0-0-0-0-1-0-0-0-5">5</a><a class="numbers" href="//list.mi.com/0-0-0-0-1-0-0-0-6">6</a><a class="numbers" href="//list.mi.com/0-0-0-0-1-0-0-0-7">7</a><a class="numbers" href="//list.mi.com/0-0-0-0-1-0-0-0-8">8</a><span class="numbers">…</span><a class="numbers last iconfont" href="//list.mi.com/0-0-0-0-1-0-0-0-2">&#xe624;</a>            </div> --></div>
</div>

@endsection
