@extends('admin.index')
@section('content')
	<div class="page-content">
			<div class="page-header">
				<h1>
					用户详情
					<small>
						<i class="icon-double-angle-right"></i>
						用户详细信息
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<form class="form-horizontal" role="form" action="/users/amend" method="post" enctype="multipart/form-data">
						{!!csrf_field()!!}
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-size:18px;"> 呢称 : </label>

							<div class="col-sm-9">
								<span style="position:relative;top:5px;font-size:18px;color:red;">{{$users->name}}</span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-size:18px;"> 权限 : </label>

							<div class="col-sm-9">
								<span style="position:relative;top:5px;font-size:18px;color:red;">{{$users->auth ? '会员用户' : '普通用户'}}</span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-size:18px;"> 生日 : </label>

							<div class="col-sm-9">
								<span style="position:relative;top:5px;font-size:18px;color:red;">{{$userdetail->YYYY}}年{{$userdetail->MM}}月{{$userdetail->DD}}日</span>
							</div>
							
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-size:18px;"> 性别 : </label>

							<div class="col-sm-9" >
								<span style="position:relative;top:5px;font-size:18px;color:red;">{{$userdetail->sex ? '女' : '男'}}</span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-size:18px;"> 邮箱 : </label>

							<div class="col-sm-9">
								<span style="position:relative;top:5px;font-size:18px;color:red;">{{$users->email}}</span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-size:18px;"> 积分 : </label>

							<div class="col-sm-9">
								<span style="position:relative;top:5px;font-size:18px;color:red;">{{$users->score}}</span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-size:18px;"> 头像 : </label>
							<div class="col-sm-9" >
								<img src="/{{$users->photo}}" style="width:120px;height:120px;"/>
							</div>
						</div>
						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<a href="/users/particular/{{$users->id}}">
									<button class="btn btn-info" type="button">
										<i class="icon-ok bigger-110"></i>
										修改信息
									</button>
								</a>
								&nbsp; &nbsp; &nbsp;
								<a href="/users/list">
									<button class="btn" type="button">
									<i class="icon-undo bigger-110"></i>
									返回
									</button>
								</a>
							</div>
						</div>
					</form>	
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
@endsection



