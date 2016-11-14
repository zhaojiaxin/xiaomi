@extends('admin.index')
@section('content')
<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
<!-- <script src="{{URL::asset('assets/js/flot/jquery.flot.min.js')}}"></script> -->
	 <div class="col-xs-12">
		<h3 class="header smaller lighter blue">商品管理</h3>
		<div class="table-header">
			商品详情
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
						<th class="center">序号</th>
						<th class="center">名称</th>
						<th class="center">颜色</th>
						<th class="center">版本</th>
						<th class="center">描述</th>
						<th class="center">价格</th>
						<th class="center">库存</th>
						<th class="center">状态</th>
						<th class="center">操作</th>
					</tr>
				</thead>

				<tbody>
					@foreach($goods as $num => $good)
					<tr>
						<td class="center">
							<label>
								<input type="checkbox" class="ace" />
								<span class="lbl"></span>
							</label>
						</td>
						<td class="center">{{$num+1}}</td>
						<td class="center">{{$good->gname}}</td>
						<td class="center">{{$good->color}}</td>
						<td class="center">{{$good->version}}</td>
						<td class="center">{{$good->des}}</td>
						<td class="center">{{$good->price}}</td>
						<td class="center">{{$good->stock}}</td>
						<td class="center">
							<a class="label label-sm label-warning state" id="{{$good->gid}}" href="javascript:void(0)">{{$good->state ? '上架' : '下架'}}</a>
						</td>
						<td class="center">
							<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
								<a href="/goods/addAttr/{{$good->gid}}" class="tooltip-info" data-rel="tooltip" title="添加属性">
									<i class="icon-zoom-in bigger-120"></i>
								</a>
								<a class="green" href="/goods/modify/{{$good->gid}}" title="修改">
									<i class="icon-pencil bigger-130"></i>
								</a>
								<a class="red del" id="{{$good->gid}}" href="javascript:void(0)" title="删除">
									<i class="icon-trash bigger-130"></i>
								</a>
							</div>
						</td>
					</tr>
					@endforeach
					<script>
									$(function(){
										//选中元素
										$('.del').click(function(){


											//获取当前操作的商品id
											var gid=$(this).attr('id');
											//确定操作
											if(!confirm('您确定删除id为'+gid+'的商品吗')){
												return false;
											}
											//ajax操作
											$.ajax({
												//url
												url:'/goods/Attrdelete/'+gid,
												type:'get',
												dataType:'text',
												success:function(data){
													//根据返回数据操作
													if(data==1){
														//删除数据
														$('#'+gid).parent().parent().parent().remove();
													}else{
														alert('删除商品失败');
													}

												},
												error:function(){

												}

											});

										});

										$('.state').click(function(){


											//获取当前操作的商品id
											var gid=$(this).attr('id');
											var state = $(this).text();
											// alert(state);
											//ajax操作
											$.ajax({
												//url
												url:'/goods/changeState/'+gid,
												type:'get',
												dataType:'text',
												success:function(data){
													//根据返回数据操作
													if(data==1){
														//更新状态
														if(state == '上架'){
															$('#'+gid).text("下架");
														}else{
															$('#'+gid).text('上架') ;
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
									});
								</script>

				</tbody>
			</table>


		</div>
		<div class="col-sm-6 col-sm-offset-9">
			{!!$goods->render()!!}
		</div>
	</div>

@endsection