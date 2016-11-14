@extends('admin.index')
@section('content')
	<div class="page-content">
			<div class="page-header">
				<h1>
					友情链接
					<small>
						<i class="icon-double-angle-right"></i>
						链接修改
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->

					<form class="form-horizontal" role="form" action="/friendlink/friendup" method="post" enctype="multipart/form-data">
					
					{!!csrf_field()!!}
						<input type="hidden" id="form-field-1" class="col-xs-10 col-sm-5"  name="id" value="{{$huitian->id}}"/>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 链接名称</label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5"  name="yname" value="{{$huitian->yname}}"/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">网站地址</label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" class="col-xs-10 col-sm-5"  name="yurl" value="{{$huitian->yurl}}"/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">链接状态</label>

							<div class="col-sm-9">
							@if($huitian->ystatus == 1)
								开<input type="radio" value="1"	 checked	name="ystatus" style="">
								关<input type="radio" value="0"  name="ystatus" >
								@elseif($huitian->ystatus == 0)
								开<input type="radio" value="1"	 name="ystatus" style="">
								关<input type="radio" value="0" checked	 name="ystatus" >
								@endif
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




