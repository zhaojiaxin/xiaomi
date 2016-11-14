@extends('admin.index')
@section('content')
		<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
		 <div class="col-xs-12">
			<h3 class="header smaller lighter blue">管理员</h3>
			<div class="table-header">
				轮播图管理
			</div>
			
			<div class="table-responsive">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							
							<th>编号</th>
							<th>图片名称</th>
							<th>图片</th>
							
							<th>图片描述</th>
							<th>状态</th>
							<th>修改时间</th>
							<th>操作</th>
						</tr>
					</thead>

					<tbody>
				
						@foreach($user as $web)
					
										<tr>
						<td>{{$web->id}}</td>
						<td>{{$web->gname}}</td>
						 <td><img src = "/{{$web->photo}}" style="width:80px; height:60px"/></td>
						<td>{{$web->descript}}</td>
						<td>@if($web->state==1)
							上架
							@else
							下架
							@endif	
						</td>
						<td>{{$web->time}}</td>
						 <td><a href="/ppt/pptupdate/{{$web->id}}">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/ppt/pptdelete/{{$web->id}}">删除</a></td>
        </tr> 
		@endforeach

      
					</tbody>	
				</table>
			<div> 
				<script type="text/javascript">
				$('.tablelist tbody tr:odd').addClass('odd');
				
					
				
				
				</script>
			</div>	

@endsection