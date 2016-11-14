<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('css/select.css')}}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.idTabs.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/select-ui.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('editor/kindeditor.js')}}"></script>

<script type="text/javascript">
    KE.show({
        id : 'content7',
        cssPath : './index.css'
    });
  </script>
  
<script type="text/javascript">
$(document).ready(function(e) {
    $(".select1").uedSelect({
		width : 345			  
	});
	$(".select2").uedSelect({
		width : 167  
	});
	$(".select3").uedSelect({
		width : 100
	});
});
</script>
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">系统设置</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    
    <div id="usual1" class="usual"> 
    
    <div class="itab">
  	<ul> 
    <li><a href="#tab1" class="selected">网站</a></li> 
  	</ul>
    </div> 
    
		<div id="tab1" class="tabson">
		
			<div class="formtext">Hi，<b>admin</b>，欢！</div>
			<form action="/admin/addoperation" method="post" enctype="multipart/form-data">
				{!!csrf_field()!!}
				<ul class="forminfo">
				<li>
					<label>网站名<b>*</b></label>
					<input name="title" type="text" class="dfinput" value=""  style="width:518px;"/></li>
				<li>
					<label>网站LOGO<b>*</b></label>
					<input name="logo" type="file" class="dfinput" value=""  style="width:518px;"/></li> 
				<li>
					<label>关键字<b>*</b></label>
					<input name="keywords" type="text" class="dfinput" value=""  style="width:518px;"/></li> 
				<li>
					<label>网站描述<b>*</b></label>
					<textarea name="description" cols="" rows="" class="textinput"></textarea></li>
				<li>
					<label>&nbsp;</label>
					<input name="" type="submit" class="btn" value="确认增加"/></li>
				</ul>
			</form>
				
		</div> 
		 
	</div> 
 
	<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>
    
    
    
    
    
    </div>


</body>

</html>
