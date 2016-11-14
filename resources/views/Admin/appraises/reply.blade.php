@extends('admin.index')
@section('content')

		 <div class="col-xs-12">
			<h3 class="header smaller lighter blue">商品评价</h3>
			<div class="table-header">
				评价列表
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
							<th>回复ID</th>
							<th>评价ID</th>
							<th>用户ID</th>
							<th class="hidden-480">商品名</th>

							<th>
								<i class="icon-time bigger-110 hidden-480"></i>
								回复内容
							</th>
							<th>操作</th>


						</tr>
					</thead>

					<tbody>
						
						@foreach($result as $one)
						<tr>
							<td class="center">
								<label>
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</td>
							<td>
								<a href="#">
								{{$one->id}}
								</a>
							</td>
							<td>
								<a href="#">
								{{$one->comment_id}}
								</a>
							</td>
							<td>
								{{$one->user_id}}
							</td>

							<td >{{$one->gname}}</td>
							<td>{{$one->content}}</td>
							<td>
								<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
									<a class="red" id="{{$one->id}}" href="javascript:void(0);">
										<i class="icon-trash bigger-130"></i>
									</a>
								</div>

							</td>
						</tr>
						@endforeach
					</tbody>
					<script>
						$(function(){
							$('.red').click(function(){
								if(!confirm('确认删除该回复吗？')){
									return false;
								}	
								var id=$(this).attr('id');
								console.log(id);
								//ajax操作
								$.ajax({
								//url
								url:'/appraises/Rdelete/'+id,
								type:'get',
								dataType:'text',
								success:function(data){
									console.log(data);
									//根据返回数据操作
									if(data){
										
										//更新操作
										$('#'+id).parent().parent().parent().remove();
										
									}else{
										alert('删除失败');
									}
																			
								},
								error:function(){
																	
								}
								
								});
							})
							
						});
					</script>
				</table>
				{!! $result->render() !!}
			</div>
		</div>

@endsection