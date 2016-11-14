@extends('admin.index')
@section('content')
	<div class="page-content">
						<div class="page-header">
							<h1>
								订单操作
								<small>
									<i class="icon-double-angle-right"></i>
									修改订单信息
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="/orders/update" method="post" enctype="multipart/form-data">
									{!!csrf_field()!!}
									<input type="hidden" name="id" value="{{$order->id}}">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 订单状态 </label>

										<div class="col-sm-9">
											<select name="order_status" id="form-field-1" class="col-xs-10 col-sm-5">
											  <option value ="0">未付款</option>
											  <option value ="1">已付款未发货</option>
											  <option value="2">已付款已发货</option>
											  <option value="3">已取消</option>
											</select>

										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 订单总价 </label>

										<div class="col-sm-9">
											<input type="text" name="total_price" id="form-field-1" placeholder="{{$order->total_price}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<!--
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 类别图片 </label>

										<div class="col-sm-9">
											<input type="file" id="id-input-file-2">
										</div>
									</div>
									-->
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




