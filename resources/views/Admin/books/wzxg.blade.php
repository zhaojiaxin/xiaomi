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

					<form class="form-horizontal" role="form" action="/books/wzup" method="post" enctype="multipart/form-data">
					
					{!!csrf_field()!!}
						<input type="hidden" id="form-field-1" class="col-xs-10 col-sm-5"  name="id" value="{{$huitian->id}}"/>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 网站名</label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5"  name="title" value="{{$huitian->title}}"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">网站LOGO</label>

							<div class="col-sm-9">
								<input type="file" id="form-field-1" class="col-xs-10 col-sm-5"  name="logo" value="{{$huitian->logo}}"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">关键字</label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" class="col-xs-10 col-sm-5"  name="keywords" value="{{$huitian->keywords}}"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">网站状态</label>

							<div class="col-sm-9">
							@if($huitian->status == 1)
								开<input type="radio" value="1"	 checked	name="status" style="">
								关<input type="radio" value="0"  name="status" >
								@elseif($huitian->status == 0)
								开<input type="radio" value="1"	 name="status" style="">
								关<input type="radio" value="0" checked	 name="status" >
								@endif
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">网站描述</label>
							<div class="col-sm-9">
								<input type="text" id="form-field-1" class="col-xs-10 col-sm-5"  name="description" value="{{$huitian->description}}"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">网站版权</label>
							<div class="col-sm-9">
								<input type="text" id="form-field-1" class="col-xs-10 col-sm-5"  name="copy" value="{{$huitian->copy}}"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
							<div class="col-sm-9">
								<input type="submit" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5"  value="确认修改"/>
							</div>
						</div>
					</form>
		<!-- /.row -->
		</div><!-- /.page-content -->
@endsection




