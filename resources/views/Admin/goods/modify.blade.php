@extends('admin.index')
@section('content')
	<div class="page-content">
						<div class="page-header">
							<h1>
								商品管理
								<small>
									<i class="icon-double-angle-right"></i>
									修改商品
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="/goods/update" method="post" enctype="multipart/form-data">

									<!-- 将指定id传给更新方法 -->
									<input type="hidden" name="gid" value="{{$goods->gid}}">
									<input type="hidden" name="type_id" value="{{$goods->type_id}}">
									{!!csrf_field()!!}


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 分类 </label>
										<div class="col-sm-9">
												<input type="text" id="form-field-1" placeholder="请输入类别" name="tname" value="{{$goods->tname}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="gname" placeholder="请输入商品名称" class="col-xs-10 col-sm-5" value="{{$goods->gname}}" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 价格 </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="gprice" placeholder="请输入价格" class="col-xs-10 col-sm-5" value="{{$goods->gprice}}"/>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 图片 </label>
										<div class="col-sm-9">
											<input type="file" name="logo" id="id-input-file-2">
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input  class="btn btn-info" type="submit" value="添加商品" />
											&nbsp; &nbsp; &nbsp;
											<input  class="btn btn-info" type="reset" value="重置" />
										</div>
									</div>
								</form>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
@endsection




