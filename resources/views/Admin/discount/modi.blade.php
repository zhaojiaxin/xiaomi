@extends('admin.index')
@section('content')
	<div class="page-content">
		<div class="page-header">
			<h1>
				优惠劵
				<small>
					<i class="icon-double-angle-right"></i>
					修改优惠劵
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->

				<form class="form-horizontal"  action="/discount/update" method="post" enctype="multipart/form-data">
				<input type="hidden" name="dis_id" value="{{$discountInfo->dis_id}}">
				{!!csrf_field()!!}
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">优惠卷标题 </label>
					<div class="col-sm-9">
						<input type="text" id="form-field-2" placeholder="标题" class="col-xs-10 col-sm-5" name="dis_title" value="{{$discountInfo->dis_title}}" />
					</div>
				</div>
				 <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">上传图片 </label>
					<div class="col-sm-9">
						<input type="file"  name="dis_picname"  />
					</div>
				 </div>    
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">优惠卷规则</label>
					<div class="col-sm-9">
						<input type="text" id="form-field-2" placeholder="优惠卷" class="col-xs-10 col-sm-2" name="dis_rule"  value="{{$discountInfo->dis_rule}}"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">有效几天</label>
					<div class="col-sm-9">
						<input type="text" id="form-field-2" placeholder="有效几天" class="col-xs-10 col-sm-5" name="dis_day"  />
					</div>
				</div>
				<div class="space-4"></div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-5">优惠卷状态</label>

					<div class="col-sm-9">
						<input type="radio" name="dis_state" value="1" checked>已生效
						<input type="radio" name="dis_state" value="0">已失效    
					</div>
				 
					<!--=================================================================================================-->
					<div class="col-xs-12 col-sm-4">
						   <div class="widget-body">
								<div class="widget-main">
									<div>
										<label for="form-field-8">详情</label>
										<textarea placeholder="优惠卷详情" id="form-field-8" class="form-control" name='dis_text'>{{$discountInfo->dis_text}}</textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--=================================================================================================-->
					<div class="space-4"></div>
					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<input type="submit" class="btn btn-info" value="提交">
							&nbsp; &nbsp; &nbsp;
							<input type="reset" class="btn" value="重置">
						</div>
					</div>
				</form>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
@endsection




