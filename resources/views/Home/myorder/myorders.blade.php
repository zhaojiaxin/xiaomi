@extends('home.base2')
@section('content2')
		<script src="/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
		<style>

			.pagination li{
				color:blue;
				float:left;
				border:1px solid red;
				padding:5px 10px;
				text-align:center;
			}
		</style>
        <div class="breadcrumbs">
            <div class="container">
                <a href="//www.mi.com/index.html">
                    首页
                </a>
                <span class="sep">
                    &gt;
                </span>
                <span>
                    交易订单
                </span>
            </div>
        </div>

                    <div class="span16">
                        <div class="uc-box uc-main-box">
                            <div class="uc-content-box order-list-box">
                                <div class="box-hd">
                                    <h1 class="title">
                                        我的订单
                                        <small>
                                            请谨防钓鱼链接或诈骗电话，
                                            <a href="//www.mi.com/service/help_center/fraud/" target="_blank">
                                                了解更多&gt;
                                            </a>
                                        </small>
                                    </h1>
                                    <div class="more clearfix">
                                        <ul class="filter-list J_orderType">
                                            <li class="first">
                                                <a href="#" data-type="0">
                                                    全部有效订单
                                                </a>
                                            </li>
                                            <li>
                                                <a id="J_unpaidTab" href="//static.mi.com/order/#type=7" data-type="7">
                                                  
                                                </a>
                                            </li>
                                            <li>
                                                <a id="J_sendTab" href="//static.mi.com/order/#type=8" data-type="8">
                                                   
                                                </a>
                                            </li>
                                            <li>
                                                <a href="//static.mi.com/order/#type=5" data-type="5">
                                                 
                                                </a>
                                            </li>
                                        </ul>
										<!--
                                        <form id="J_orderSearchForm" class="search-form clearfix" action="#" method="get">
                                            <label for="search" class="hide">
                                                站内搜索
                                            </label>
                                            <input class="search-text" type="search" id="J_orderSearchKeywords" name="keywords"
                                            autocomplete="off" placeholder="输入商品名称、商品编号、订单号" />
                                            <input type="submit" class="search-btn iconfont" value="&#xe616;" />
                                        </form>
										-->
                                    </div>
                                </div>
                                <div id="J_orderList">
								
								@foreach($orders as $one)
                                    <ul class="order-list">
                                        <li class="uc-order-item uc-order-item-pay">
                                            <div class="order-detail">
                                                <div class="order-summary">
                                                    <div class="order-status">
                                                        
														@if($one->order_status===0)
															等待付款
														@elseif($one->order_status===1)
															已付款未发货
														@elseif($one->order_status===2)
															已付款已发货
														@elseif($one->order_status===3)
															已取消
														@endif
                                                    </div>
													<!--
                                                    <p class="order-desc J_deliverDesc">
                                                        21:30前支付，预计明天送达
                                                        <span class="beta">
                                                            Beta
                                                        </span>
                                                    </p>
													-->
                                                </div>
                                                <table class="order-detail-table">
                                                    <thead>
                                                        <tr>
														
                                                            <th class="col-main">
                                                                <p class="caption-info">
                                                                    {{Date('Y年m月d H:i:s',$one->create_time)}}
                                                                    <span class="sep">
                                                                        |
                                                                    </span>
                                                                    {{$one->name}}
                                                                    <span class="sep">
                                                                        |
                                                                    </span>
                                                                    订单号：
                                                                    <a href="//order.mi.com/user/orderView/1160624595529660">
                                                                        {{$one->id}}
                                                                    </a>
                                                                    <span class="sep">
                                                                        |
                                                                    </span>
                                                                    在线支付
                                                                </p>
                                                            </th>
                                                            <th class="col-sub">
                                                                <p class="caption-price">
                                                                    订单金额：
                                                                    <span class="num">
                                                                        {{($one->total_price)}}
                                                                    </span>
                                                                    元
                                                                </p>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="order-items">
                                                                <ul class="goods-list">
                                                                    <li>
                                                                        <div class="figure figure-thumb">
                                                                            <a href="//item.mi.com/1151100013.html" target="_blank">
                                                                                <img src="/{{$one->logo}}" alt="{{$one->gname}}"
                                                                                height="80" width="80">
                                                                            </a>
                                                                        </div>
                                                                        <p class="name">
                                                                            <a target="_blank" href="//item.mi.com/1151100013.html">
                                                                                {{$one->gname}}
                                                                            </a>
                                                                        </p>
                                                                        <p class="price">
                                                                            {{($one->total_price)/($one->good_num)}}元 × {{$one->good_num}}
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td class="order-actions">
																
																
                                                                    
																
																
																@if($one->order_status===0)
                                                                <a class="nowPay btn btn-small btn-line-gray" id="{{$one->id}}" href="javascript:void(0);">
                                                                    立即支付
                                                                </a>
																@elseif($one->order_status===1)
																	<a class="cancel btn btn-small btn-line-gray" id="{{$one->id}}" href="javascript:void(0);" >
																		取消订单并退款
																	</a>
																@elseif($one->order_status===2)
																	<a class="cancel btn btn-small btn-line-gray" href="javascript:void(0);" >
																		已支付(发货中)
																	</a>
																@elseif($one->order_status===3)
																	
																	<a class="btn btn-small btn-line-gray" href="javascript:void(0);" >
																		已取消订单
																	</a>
																
																@endif

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                    </ul>
								
								@endforeach	
								 
								<script>
									$(function(){
										//选中元素
										$('.nowPay').click(function(){				
										//获取当前操作的地址id
										var aid=$(this).attr('id');
										//alert(aid);
										//确定操作
										if(!confirm('您确定支付该订单吗？')){
											return false;
										}

										//ajax操作
										$.ajax({
											//url
											url:'/home/pay/'+aid,
											type:'get',
											dataType:'text',
											success:function(data){
												//console.log(data)
												//根据返回数据操作
												if(data==1){
													//刷新页面
													location.reload();
												}else{
													alert('支付失败');
												}
																						
											},
											error:function(){
																				
											}
											
											});
															
										});
										
										//选中元素
										$('.cancel').click(function(){				
										//获取当前操作的地址id
										var aid=$(this).attr('id');
										//alert(aid);
										//确定操作
										if(!confirm('您确定取消该订单吗？')){
											return false;
										}
										
										//ajax操作
										$.ajax({
											//url
											url:'/home/cancel/'+aid,
											type:'get',
											dataType:'text',
											success:function(data){
												//console.log(data)
												//根据返回数据操作
												if(data==1){
													// 刷新页面
													location.reload();
												}else{
													alert('取消失败');
												}
																						
											},
											error:function(){
																				
											}
											
											});
															
										});
															
									});
								</script>
                                
								</div>
							{!! $orders->render() !!}
                            </div>
							
                        </div>
                    
					</div>
					
                @endsection