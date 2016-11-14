@extends('admin.index')
@section('content')
	<div class="page-content">
			<div class="page-header">
				<h1>
					普通用户
					<small>
						<i class="icon-double-angle-right"></i>
						修改用户
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->

					<form class="form-horizontal" role="form" action="/admins/update" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="{{$userInfo->id}}">
					{!!csrf_field()!!}
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 昵称 </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="昵称" class="col-xs-10 col-sm-5"  name="name" value="{{$userInfo->name}}"/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 邮箱 </label>

							<div class="col-sm-9">
								<input type="email" id="form-field-1" placeholder="请输入邮箱" class="col-xs-10 col-sm-5"  name="email" value="{{$userInfo->email}}"/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 密码 </label>

							<div class="col-sm-9">
								<input type="password" id="form-field-1" placeholder="请输入密码" class="col-xs-10 col-sm-5"  name="password" value="{{$userInfo->password}}"/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 确认密码 </label>

							<div class="col-sm-9">
								<input type="password" id="form-field-1" placeholder="确认密码" class="col-xs-10 col-sm-5" name="pwd" value="{{$userInfo->password}}"/>
							</div>
						</div>
						<div  class="form-group">
							<input type="hidden" name="poto" value="{{$userInfo->photo}}">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">&nbsp;&nbsp;头像</label><input text="text" name="photo" type="file"  value="" />	
						  </div>
			<div  class="form-group">
						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-info" type="submit">
									<i class="icon-ok bigger-110"></i>
									Submit
								</button>

								&nbsp; &nbsp; &nbsp;
								<button class="btn" type="reset">
									<i class="icon-undo bigger-110"></i>
									Reset
								</button>
							</div>
						</div>

					</form>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
@endsection




