@extends('admin.index')
@section('content')
<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
<!-- <script src="{{URL::asset('assets/js/flot/jquery.flot.min.js')}}"></script> -->
	 <div class="col-xs-12">
		<h3 class="header smaller lighter blue">商品管理</h3>
		<div class="table-header">
			商品列表
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
						<th class="center">类别</th>
						<th class="center">价格</th>
						<th class="center">图片</th>
						<th class="center">状态</th>
						<th class="center">操作</th>
					</tr>
				</thead>

				<tbody id="search">
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
						<td class="center">{{$good->tname}}</td>
						<td class="center">{{$good->gprice}}</td>
						<td class="center"><img src="/{{$good->logo}}" width="50" height="50" /></td>
						<td class="center">
							<a class="label label-sm label-warning state" id="{{$good->gid}}" href="javascript:void(0)">{{$good->state ? '上架' : '下架'}}</a>
						</td>
						<td class="center">
							<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
								<a href="/goods/addAttr/{{$good->gid}}" class="tooltip-info" data-rel="tooltip" title="添加属性">
									<i class="icon-zoom-in bigger-120"></i>
								</a>
								<a href="/goods/detail/{{$good->gid}}" class="tooltip-info" data-rel="tooltip" title="商品详情">
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
												url:'/goods/delete/'+gid,
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


									 $('#nav-search-input').keyup(function(){
									 	//console.log('111');
										var searchText  = $(this).val();
										//alert(searchText);
					                    $.ajax({
					                        type: 'get',
					                        url: '/goodsSousuo/'+searchText,
					                        dataType: 'json',
					                        success: function(data){
					                        	// console.log(data);
					                            var str = '';
					                            for(var i=0;i<data.length;i++){
					                                str += '<tr><td class="center"><label><input type="checkbox" class="ace" /></label></td><td class="center">'+(i+1)+'</td><td class="center">'+data[i].gname+'</td><td class="center">'+data[i].tname+'</td><td class="center">'+data[i].gprice+'</td><td class="center"><img src="/'+data[i].logo+'" width="50" height="50" /></td><td class="center"><a class="label label-sm label-warning state" id="'+data[i].gid+' href="javascript:void(0)">'+(data[i].state ? '上架' : '下架')+'</a></td><td class="center"><div class="visible-md visible-lg hidden-sm hidden-xs action-buttons"><a href="/goods/addAttr/'+data[i].gid+'" class="tooltip-info" data-rel="tooltip" title="添加属性"><i class="icon-zoom-in bigger-120"></i></a><a href="/goods/detail/'+data[i].gid+'" class="tooltip-info" data-rel="tooltip" title="商品详情"><i class="icon-zoom-in bigger-120"></i></a><a class="green" href="/goods/modify/'+data[i].gid+'" title="修改"><i class="icon-pencil bigger-130"></i></a><a class="red del" id="'+data[i].gid+'href="javascript:void(0)" title="删除"><i class="icon-trash bigger-130"></i></a></div></td></tr>';

					                                $('#search').html(str);

					                            }
					                        },
					                        error: function(){

					                        }

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