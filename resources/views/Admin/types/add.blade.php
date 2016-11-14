@extends('admin.index')
@section('content')
<script src="{{URL::asset('assets/js/jquery-2.0.3.min.js')}}"></script>
	<div class="page-content">
						<div class="page-header">
							<h1>
								商品分类
								<small>
									<i class="icon-double-angle-right"></i>
									添加分类
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" action="/types/insert" method="post" >

									{!!csrf_field()!!}
									<input type="hidden" name="type" class="type" />
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 类别级别 </label>

										<div class="col-sm-9">


													<select class="select" style="width:153px">
															   <option selected="true">请选择...</option>
															    <option>一级分类</option>
															   @foreach($types as $type)
															   <!-- dd($types); -->
															   @if($type->level ==1 || $type->level == 2)
																<option>
																	{{str_repeat('|---',$type->level)}}{{$type->tname}}
																</option>
																@endif
																@endforeach
													</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 类别名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="tname" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 显示情况 </label>

										<div class="col-sm-9">
											<input type="checkbox" id="form-field-1" name="is_topnav"  value="1"/> 头部导航
											<input type="checkbox" id="form-field-2" name="is_leftnav" value="1" /> 左侧导航
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input  class="btn btn-info" type="submit" value="添加分类" />
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




