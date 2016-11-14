@extends('admin.index')
@section('content')
<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
	<div class="page-content">
						<div class="page-header">
							<h1>
								商品管理
								<small>
									<i class="icon-double-angle-right"></i>
									添加商品
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="/goods/insert" method="post" enctype="multipart/form-data">
									{!!csrf_field()!!}


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 分类 </label>
										<div class="col-sm-9">
											<select class="select"  name="type_id" style="width:153px">
											   @foreach($types as $type)
											   @if($type->level ==1 || $type->level == 2)
												<option value="{{$type->tid}}">
													{{str_repeat('|---',$type->level)}}{{$type->tname}}
												</option>
												@endif
												@endforeach
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="gname" placeholder="请输入商品名称" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 价格 </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="gprice" placeholder="请输入价格" class="col-xs-10 col-sm-5" />
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
					<script>
						$(function(){
							$('.select').change(function(){
							//console.log($(this).val());
							var str = $(this).val();
							$('.type').val(str);

							});
						});
					</script>
@endsection




