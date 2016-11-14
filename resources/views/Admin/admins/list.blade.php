@extends('admin.index')
@section('content')
		<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
		 <div class="col-xs-12">
			<h3 class="header smaller lighter blue">管理员</h3>
			<div class="table-header">
				管理员列表
			</div>
			
			<div class="table-responsive">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							
							<th>ID</th>
							<th>邮箱</th>
							<th class="hidden-480">昵称</th>			
					
							<th>头像</th>
							<th>登录时间</th>
				
							
							<th>状态</th>
							
							<th>操作</th>
						</tr>
					</thead>

					<tbody>
						@foreach($admin as $one)
					
						<tr>
							<td>
								<a href="/admins/specifics/{{$one->id}}">{{$one->id}}</a>
							</td>
							<td>{{$one->email}}</td>
							<td>{{$one->name}}</td>
						    <td><img src="/{{$one->photo}}" style="width:50px;height:28px "/></td>
							<td>{{$one->created_at}}</td>
							
						<td>
								<a class="state" id="{{$one->id}}" href="javascript:void(0)">{{$one->state ? '启用' : '禁用'}}</a>
							</td>

							<td>
								<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
							

									<a class="green" href="/admins/modi/{{$one->id}}">
										<i class="icon-pencil bigger-130"></i>
									</a>

									<a class="red" id="{{$one->id}}" href="javascript:void(0)">
										<i class="icon-trash bigger-130"></i>
									</a>

								</div>
							</td>
						</tr>
		
					@endforeach
					</tbody>	
				</table>
			</div>
				
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
						url:'/admins/delete/'+id,
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
				$('.state').click(function(){

					//获取当前操作的管理员id
					var id=$(this).attr('id');
					var state = $(this).text();
					//ajax操作
					$.ajax({
						//url
						url:'/admins/change/'+id,
						type:'get',
						dataType:'text',
						success:function(data){
							//根据返回数据操作
							if(data==1){
								//更新状态
								
								if(state == '禁用'){
									$('#'+id).text("启用");
								}else{
									$('#'+id).text('禁用') ;
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