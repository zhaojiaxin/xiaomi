@extends('admin.index')
@section('content')
<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
		 <div class="col-xs-12">
			<h3 class="header smaller lighter blue">订单管理</h3>
			<div class="table-header">
				订单列表
			</div>
			<div class="table-responsive">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">
								<label>
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</th>
							<th>订单号</th>
							<th>下单时间</th>
							<th>下单用户</th>
							<th class="hidden-480">金额</th>
							<th class="hidden-480">订单状态</th>
							<th class="hidden-480">订单详情</th>
							<th>操作</th>
						</tr>
					</thead>

					<tbody>
						@foreach($orders as $one)
							<tr>
								<td class="center">
									<label>
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</td>
									<td>{{$one->id}}</td>
									<td>{{$one->create_time}}</td>
									<td>{{$one->user_id}}</td>
									<td class="hidden-480">{{$one->total_price}}</td>
									<td>
									@if($one->order_status===0)
										未付款
									@elseif($one->order_status===1)
										付款未发货
									@elseif($one->order_status===2)
										付款已发货
									@elseif($one->order_status===3)
										已取消
									@endif
									</td>
									<td>小米5 双网通16G 5.5英寸 白色 2.3版本</td>
								<td>
									<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">


										<a class="alt" href="/orders/modify/{{$one->id}}">
											<i class="icon-pencil bigger-130"></i>
										</a>

										<a class="del" id="{{$one->id}}" href="javascript:void(0)">
											<i class="icon-trash bigger-130"></i>
										</a>
									</div>

									<div class="visible-xs visible-sm hidden-md hidden-lg">
										<div class="inline position-relative">
											<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
												<i class="icon-caret-down icon-only bigger-120"></i>
											</button>

											<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
												<li>
													<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
														<span class="blue">
															<i class="icon-zoom-in bigger-120"></i>

														</span>
													</a>
												</li>

												<li>
													<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
														<span class="green">
															<i class="icon-edit bigger-120"></i>
														</span>

													</a>
												</li>


												<li>
													<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
														<span class="red">
															<i class="icon-trash bigger-120"></i>
														</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
		<div class="col-sm-6 col-sm-offset-9">
			{!! $orders->render() !!}
		</div>

				<script>
							$(function(){
								//选中元素
								$('.del').click(function(){


								//获取当前操作的商品id
								var oid=$(this).attr('id');
								//确定操作
								if(!confirm('您确定删除id为'+oid+'的商品吗')){
									return false;
								}
								//ajax操作
								$.ajax({
								//url
								url:'/order/delete/'+oid,
								type:'get',
								dataType:'text',
								success:function(data){
									//根据返回数据操作
										if(data==1){
											//删除数据
											$('#'+oid).parent().parent().parent().remove();
										}else{
											alert('删除商品失败');
										}

								},
								error:function(){

								}

								});

								});
							});


						</script>
			</div>
		</div>

@endsection