@extends('admin.index')
@section('content')
	<div class="page-content">
						<div class="page-header">
							<h1>
								管理员
								<small>
									<i class="icon-double-angle-right"></i>
									网站增加
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" action="/admin/addoperation" method="post" enctype='multipart/form-data'>
										{!!csrf_field()!!}
									<!--<input type="hidden" name="_token" value="{{ csrf_token() }}"/>-->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">网站名 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="title"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 网站LOGO </label>

										<div class="col-sm-9">
											<input type="file" id="form-field-1" class="col-xs-10 col-sm-5" name="logo"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">关键字 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="keywords"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 网站描述</label>

										<div class="col-sm-9">
											<textarea name="description" cols="" rows="" class="textinput" id="form-field-1"  class="col-xs-10 col-sm-5"></textarea>
										</div>
									</div>
								
		<div>
	
					<input name="" type="submit" class="btn" value="确认增加"/>
					
					</form>			

									
						</div>	
		

								
							</div><!-- /.col -->
						</div><!-- /.row -->
						
						<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>
    
    
    
					</div><!-- /.page-content -->
@endsection 