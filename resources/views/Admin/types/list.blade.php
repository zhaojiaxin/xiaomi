@extends('admin.index')
@section('content')
<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
		 <div class="col-xs-12">
			<h3 class="header smaller lighter blue">商品分类</h3>
			<div class="table-header">
				分类管理
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
							<th>序号</th>
							<th>类别</th>
							<th>操作</th>
						</tr>
					</thead>

					<tbody>
						@foreach($types as $num => $type)
						<tr >
							<td class="center">
								<label>
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</td>

							<td>
								<a href="#">{{$num+1}}</a>
							</td>
							<td>{{str_repeat('|---',$type->level)}}{{$type->tname}}</td>

							<td>
								<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
									<a class="green" href="/types/modify/{{$type->tid}}">
										<i class="icon-pencil bigger-130"></i>
									</a>

									<a class="red del" href="javascript:void(0)" id="{{$type->tid}}">
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

											//获取当前操作的分类id
											var gid=$(this).attr('id');
											//确定操作
											if(!confirm('您确定删除id为'+gid+'的分类吗')){
												return false;
											}
											//ajax操作
											$.ajax({
												//url
												url:'/types/delete/'+gid,
												type:'get',
												dataType:'text',
												success:function(data){
													//根据返回数据操作
													if(data==1){
														//删除数据
														$('#'+gid).parent().parent().parent().remove();
													}else{
														alert('删除分类失败');
													}

												},
												error:function(){

												}

											});

										});
									});
								</script>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-sm-6 col-sm-offset-9">
			{!!$types->render()!!}
		</div>
@endsection