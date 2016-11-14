@extends('admin.index')
@section('content')
	<div class="page-content">
						<div class="page-header">
							<h1>
								友情链接
								<small>
									<i class="icon-double-angle-right"></i>
								增加链接
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" action="/friendlink/addfriendlinkzj" method="post" enctype='multipart/form-data'>
										{!!csrf_field()!!}
									<!--<input type="hidden" name="_token" value="{{ csrf_token() }}"/>-->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">链接名称</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="yname"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 网站地址 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="yurl"/>
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