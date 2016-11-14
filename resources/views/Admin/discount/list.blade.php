@extends('admin.index')
@section('content')
		<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
		 <div class="col-xs-12">
			<h3 class="header smaller lighter blue">优惠劵管理</h3>
			<div class="table-header">
				优惠劵列表
			</div>
			<div class="table-responsive">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>优惠劵名称</th>
							<th class="hidden-480">优惠劵面值</th>
							<th>有效天数</th>
							<th>状态</th>
							<th>操作</th>
						</tr>
					</thead>

					<tbody>
						@foreach($discount as $one)
						<tr>
							<td>
								<a href="#">{{$one->dis_id}}</a>
							</td>
							<td>{{$one->dis_title}}</td>
							<td>{{$one->dis_rule}}</td>
							<td>{{$one->dis_day}}</td>
							<td class="hidden-480">
								<a class="dis_state" id="{{$one->dis_id}}" href="javascript:void(0)">{{$one->dis_state ? '有效' : '无效'}}</a>
							</td>

							<td>
								<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">

									<a class="green" href="/discount/modi/{{$one->dis_id}}">
										<i class="icon-pencil bigger-130"></i>
									</a>

									<a class="red" id="{{$one->dis_id}}" href="javascript:void(0)">
										<i class="icon-trash bigger-130"></i>
									</a>

								</div>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			{!! $discount->render() !!}
		</div>
		<script>
			$(function(){
				//选中元素
				$('.red').click(function(){
					//获取当前操作的用户id
					var id=$(this).attr('id');
					
					//确定操作
					if(!confirm('您确定删除id为'+id+'的用户吗')){
						return false;
					}
					//ajax操作
					$.ajax({
						url:'/discount/delete/'+id,
						type:'get',
						dataType:'text',
						success:function(data){
							//根据返回数据操作
							if(data==1){
								//删除数据
								$('#'+id).parent().parent().remove();
							}else{
								alert('删除用户失败');
							}	
						},
						error:function(){
						
						}		
					});
				});
				$('.dis_state').click(function(){
					//获取当前操作的商品id
					var id=$(this).attr('id');
					var dis_state = $(this).text();
					//ajax操作
					$.ajax({
						//url
						url:'/discount/change/'+id,
						type:'get',
						dataType:'text',
						success:function(data){
							//根据返回数据操作
							if(data==1){
								//更新状态
								
								if(dis_state == '无效'){
									$('#'+id).text("有效");
								}else{
									$('#'+id).text('无效') ;
								}
								
								//location.reload();
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
@endsection