@extends('admin.index')
@section('content')
		<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
		 <div class="col-xs-12">
			<h3 class="header smaller lighter blue">友情链接</h3>
			<div class="table-header">
				链接详情
			</div>
			
			<div class="table-responsive">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							
							<th>编号</th>
							<th>链接名称</th>
							<th>链接地址</th>
							<th>链接状态</th>
							<th>修改</th>
							<th>删除</th>
							
						</tr>
					</thead>

					<tbody>
						@foreach($res as $res)
					
										<tr>
						<td>{{$num++}}</td>
						<td>{{$res->yname}}</td>
						<td>{{$res->yurl}}</td>
						<td>@if($res->ystatus==1)
							显示
							@else
							下线
							@endif	
						</td>
						<td>
							<a href="/friendlink/friendupdate/{{$res->id}}">修改</a>
						</td>
						<td>
							<a href="/friendlink/frienddelete/{{$res->id}}">删除</a>
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