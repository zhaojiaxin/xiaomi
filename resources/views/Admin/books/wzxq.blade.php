@extends('admin.index')
@section('content')
		<script src="{{URL::asset('assets/Scripts/jquery-2.0.3.min.js')}}"></script>
		 <div class="col-xs-12">
			<h3 class="header smaller lighter blue">管理员</h3>
			<div class="table-header">
				配置详情
			</div>
			
			<div class="table-responsive">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							
							<th>编号</th>
							<th>网站名称</th>
							<th>网站LOGO</th>
							<th>关键字</th>
							<th>网站描述</th>
							<th>网站版权</th>
							<th>网站状态</th>
							<th>修改</th>
						</tr>
					</thead>

					<tbody>
						@foreach($user as $web)
					
										<tr>
						<td>{{$web->id}}</td>
						<td>{{$web->title}}</td>
						<td><img src = "/{{$web->logo}}" style="width:80px; height:60px"/></td>
						<td>{{$web->keywords}}</td>
						<td>{{$web->description}}</td>
						<td>{{$web->copy}}</td>
						<td>@if($web->status==1)
							开启
							@else
							关闭
							@endif	
						</td>
						<td>
							<a href="/books/wzx/{{$web->id}}">修改</a>
						</td>
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