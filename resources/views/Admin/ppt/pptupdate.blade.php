@extends('admin.index')
@section('content')
	<div class="page-content">
			<div class="page-header">
				<h1>
					管理员
					<small>
						<i class="icon-double-angle-right"></i>
						图片修改
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->

					<form class="form-horizontal" role="form" action="/ppt/pptup" method="post" enctype="multipart/form-data">

					{!!csrf_field()!!}
						<input type="hidden" name="id" value="{{$huitian->id}}">
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 图片名称 </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="gname" class="col-xs-10 col-sm-5"  name="gname" value="{{$huitian->gname}}"/>
							</div>
						</div>

						<div  class="form-group">
							<input type="hidden" name="photo" value="{{$huitian->photo}}">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">更换图片</label>
							<div class="col-sm-9">
							<input text="text" name="photo" type="file"  value="" />
						 	 </div>
						 </div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 图片描述</label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="descript" class="col-xs-10 col-sm-5"  name="descript" value="{{$huitian->descript}}"/>
							</div>
						</div>
						<!-- <div>
						<label>显示<b>*</b></label>
											@if($huitian->state == 1)
						上架<input type="radio" value="1"	 checked	name="state" style="">
						下架<input type="radio" value="0"  name="state" >
						@elseif($huitian->state == 0)
						上架<input type="radio" value="1"	 name="state" style="">
						下架<input type"radio" value="0" checked	 name="state" >
											@endif
						</div> -->
						<div  class="form-group">
						<label>&nbsp;</label>
					<input name="" type="submit" class="btn" value="确认修改"/>
					</div>

					</form>


			</div><!-- /.col -->


				</div>


				</div>

			</div>


			<!-- /.row -->
	<!-- /.page-content -->
@endsection




