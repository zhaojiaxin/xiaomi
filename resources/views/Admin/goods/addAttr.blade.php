@extends('admin.index')
@section('content')
	<div class="page-content">
						<div class="page-header">
							<h1>
								商品管理
								<small>
									<i class="icon-double-angle-right"></i>
									添加商品属性
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="/goods/doAddattr" method="post" enctype="multipart/form-data">

									<!-- 将指定id传给更新方法 -->
									<input type="hidden" name="good_id" value="{{$goods->gid}}">
									<!-- <input type="hidden" name="type_id" value="{{$goods->type_id}}"> -->
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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 颜色 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="color" placeholder="请输入商品颜色" class="col-xs-10 col-sm-5" value="" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 版本 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="version" placeholder="请输入商品版本" class="col-xs-10 col-sm-5" value="" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 描述 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="des" placeholder="请输入商品描述" class="col-xs-10 col-sm-5" value="" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 库存 </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="stock" placeholder="请输入库存数" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 价格 </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="price" placeholder="请输入价格" class="col-xs-10 col-sm-5" value=""/>
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input  class="btn btn-info" type="submit" value="添加属性" />
											&nbsp; &nbsp; &nbsp;
											<input  class="btn btn-info" type="reset" value="重置" />
										</div>
									</div>
								</form>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
@endsection




