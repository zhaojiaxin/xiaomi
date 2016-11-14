@extends('home.basea')
@section('content')
<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>小米官网——小米手机、红米手机、小米电视官方正品专卖网站</title>
<meta name="description" content="小米官方网站包含小米手机系列小米NOTE、小米4，红米手机系列红米Note、红米2/2A还有小米电视40/49/55英寸、手环、移动电源、运动相机,小米智能家居系列路由器、空气净化器、体重秤、插线板等小米商城均有售。" />
<meta name="keywords" content="小米,小米手机,小米官网,红米手机,小米商城,小米电视" />
<meta name="viewport" content="width=1226" />
<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/Css/base.min2.css" />
<link rel="stylesheet" href="/Css/index.min2.css" />
<link rel="stylesheet" href="/Css/buy-choose.min.css" />
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script src="/Scripts/jquery-1.8.3.min.js"></script>
</head>
<body>
<div class="container buy-choose-box">
    <div class="bd">
        <div class="pro-choose-main clearfix" id="J_chooseMain">
            <div class="pro-view">
                <img src="/{{$signal->logo}}" alt="" id="J_proImg">
            </div>
            <div class="pro-info">
                <div class="pro-title clearfix">

                    <h1>

                        <span class="pro-name J_proDesc">购买{{$signal->gname}}</span>
                        <span class="pro-price J_proPrice">{{$signal->gprice}}元起</span>

                    </h1>

                </div>
                <p></p><p style="color:red;">温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p><p></p>
                <div id="J_proStep">
               	 	<div class="pro-choose-step J_step" data-index="1">
               	 	 	<div class="step-title">
	               	 	 	 1. 选择版本 <i class="pro-version-desc-icon">!</i>
	               	 	 	 <span class="pro-version-desc J_verDesc" data-index="1"></span>
               	 	 	</div>
               	 	 	<ul class="step-list clearfix J_stepList">
               	 	 		@foreach($attrs as $key => $attr)
	               	 	 	  <li class="J_stepItem version " id="{{$attr->version_id}}" data-index="1" data-node-id="770" data-desc="{{$attr->des}}" title="{{$attr->version}}" >
	               	 	 	  	{{$attr->version}}
	               	 	 	  </li>
	               	 	 	@endforeach
	               	 	</ul>
	               	</div>
	               	<div class="pro-choose-step J_step" data-index="2">
	               		<div class="step-title">
		               		2. 选择颜色 <i class="pro-version-desc-icon">!</i>
		               		<span class="pro-version-desc J_verDesc" data-index="2"></span>
	               		</div>
	               		<ul class="step-list clearfix J_stepList">
	               			@foreach($attrs as $key => $attr)
	               			<li class="J_stepItem color " id="{{$attr->color_id}}" uid="{{Session::get('id')}}" value="{{$attr->gid}}">
	               			    {{$attr->color}}
	               			</li>
	               			@endforeach
               	 	 	</ul>
               	 	 </div>
                </div>
                <div class="choose-result-msg" id="J_chooseResultMsg">
                    <span class="msg-tit">您选择了以下产品:</span>
                    <p class="msg-bd"></p>
                </div>
                <div class="pro-choose-result hide" id="J_chooseResult"></div>
                <div class="pro-choose-result" id="J_chooseResultInit">
                    <a href="javascript:void(0);" class="btn btn-large btn-dakeLight addCart"  id="{{$signal->gid}}"  alt="" data-stat-id="7326452943dc03b6" >下一步</a>
                    <!-- <span class="next-desc">请选择商品</span> -->
                </div>
				<div>
					 <div class="pro-choose-step J_step" >
               	 	 	<div class="step-title">

               	 	 	</div>
               	 	 	<ul class="step-list clearfix J_stepList">

							@if(Session::get('id') == null)

							 <li class="J_stepItem">
								<a href="/auth/login">喜欢</a>
	               	 	 	  </li>
							@else
	               	 	 	  <li class="J_stepItem">
								<a class="sta" id="{{$signal->gid}}" uid="{{Session::get('id')}}"  href="javascript:void(0)">{{$signal->status ? '取消喜欢' : '喜欢'}}</a>
	               	 	 	  </li>
							@endif
	               	 	 	   <li class="J_stepItem">
								<a href="/revert/reply/{{$signal->gid}}">商品评价</a>
	               	 	 	  </li>
	               	 	</ul>
	               	</div>
				</div>

            </div>
            <!-- pro-info END -->

        </div>
        <!-- pro-choose_main End-->
    </div>
    <!-- bd END -->
</div>
<!-- buy-choose-box END -->
<!--
<div class="main-pro-box" id="J_proDetailBox">

    <div class="pro-detail-box"></div>
-->
 <script src="{{URL::asset('/Scripts/jquery-2.0.3.min.js')}}"></script>

	<script>
		$('.sta').click(function(){
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
								$('.sta').text("取消喜欢");
							}else{
								$('.sta').text('喜欢') ;
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
<script>
    $(function(){
				//选择版本
				$('.version').click(function(){
					$(this).addClass('active').siblings().removeClass('active');
					vid = $(this).attr('id');

					//选择颜色
					$('.color').click(function(){
						$(this).addClass('active').siblings().removeClass('active');
						cid = $(this).attr('id');

						//加入购物车
						// $('.addCart').click(function(){
							gid = $(this).attr('value');
							var uid=$(this).attr('uid');
							//console.log(uid);
							//连接数据库
							$.ajax({
								//url
								url:'/getGoods/'+gid+'/'+vid+'/'+cid,
								type:'get',
								contentType: "application/json",
								dataType:'json',
								success:function(data){

									if(data){
										//console.log(data['0'].stock);
										$('.msg-bd').html(data['0'].gname +'&nbsp'+ data['0'].version +'&nbsp'+ data['0'].color +'&nbsp'+ data['0'].price+'元');
										if(uid){
											//设置点击事件
											$('.addCart').click(function(){
												//console.log(data);
												//跳转到加入购物车页面
												location.href = '/addCart1/'+gid+'/'+uid;
											});
										}else{
											$('.addCart').click(function(){
												alert('请先登录');
											});
										}
										//判断库存(库存5%为警戒线)
										if(data['0'].stock > (data['0'].stock)*0.05 ){
											$('.addCart').html('加入购物车');
										}else{
											$('.addCart').html('缺货');
										}
									}else{
										alert('请选择其他款式');
									}
								},
								error:function(){
									alert('请先登录');
								}


							})
						// })


				 })


				});

	});

</script>
@endsection
