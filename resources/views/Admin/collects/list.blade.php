@extends('admin.index')
@section('content')
<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
	 <div class="col-xs-12">
		<h3 class="header smaller lighter blue">收藏管理</h3>
		<div class="table-header">
			收藏列表
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
						<th class="center">收藏用户ID</th>
						<th class="center">商品名称</th>
						<th class="center">图片</th>
						<th class="center">收藏</th>
						<th class="center">操作</th>
					</tr>
				</thead>

				<tbody>
					@foreach($collects as $num => $collect)
					<tr>
						<td class="center">
							<label>
								<input type="checkbox" class="ace" />
								<span class="lbl"></span>
							</label>
						</td>
						<td class="center">{{$num+1}}</td>
						<td class="center">{{$collect->name}}</td>
						<td class="center">{{$collect->gname}}</td>
						<td class="center"><img src="/{{$collect->logo}}" width="50" height="50" /></td>
						<td class="center">
							<!--0是收藏-->
							<a class="label label-sm label-warning status" id="{{$collect->gid}}" href="javascript:void(0)">{{$collect->status ? '取消' : '收藏'}}</a>
						</td>
						<td class="center">
							<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
								<a class="red del" id="{{$collect->aid}}" href="javascript:void(0)" title="删除">
									<i class="icon-trash bigger-130"></i>
								</a>
							</div>
						</td>
					</tr>
					@endforeach


				</tbody>
			</table>


		</div>
		<div class="col-sm-6 col-sm-offset-9">
		</div>
	</div>
	<script>
					$(function(){
						//选中元素
						$('.del').click(function(){


							//获取当前收藏的id
							var id=$(this).attr('id');
							//确定操作
							if(!confirm('您确定删除id为'+id+'的收藏吗')){
								return false;
							}
							//ajax操作
							$.ajax({
								//url
								url:'/collects/delete/'+id,
								type:'get',
								dataType:'text',
								success:function(data){
									//根据返回数据操作
									if(data==1){
										//删除数据
										$('#'+id).parent().parent().parent().remove();
									}else{
										alert('删除收藏失败');
									}

								},
								error:function(){

								}

							})

						});

						$('.status').click(function(){


							//获取当前操作的id
							var id=$(this).attr('id');
							var status = $(this).text();
							// alert(state);
							//ajax操作
							$.ajax({
								//url
								url:'/goods/changeCollectState/'+id,
								type:'get',
								dataType:'text',
								success:function(data){
									//根据返回数据操作
									if(data==1){
										//更新状态
										if(status == '收藏'){
											$('#'+id).text("取消");
										}else{
											$('#'+id).text('收藏') ;
										}

									}else{
										alert('更新失败');
									}
								},
								error:function(){
									return '0';
								}
							})

						});
					})
		</script>
@endsection