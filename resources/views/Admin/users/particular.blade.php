@extends('admin.index')
@section('content')
	<div class="page-content">
			<div class="page-header">
				<h1>
					用户管理
					<small>
						<i class="icon-double-angle-right"></i>
						修改用户
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->

					<form class="form-horizontal" role="form" action="/users/amend" method="post" enctype="multipart/form-data" name="form1">
						{!!csrf_field()!!}
						<input type="hidden" name="user_id" value="{{$userdetail->user_id}}">
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 呢称 </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="Goodname" class="col-xs-10 col-sm-5" name="name" value="{{$users->name}}"/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 生日 </label>

							<div class="col-sm-9">
								
								<select name="YYYY" onchange="YYYYDD(this.value)">
									<option value="" selected>请选择 年</option>
								</select>
								<select name="MM" onchange="MMDD(this.value)">
									<option value="" selected>选择 月</option>
								</select>
								<select name="DD">
									<option value="" selected>选择 日</option>
								</select>

							</div>

						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 性别 </label>

							<div class="col-sm-9" >
								<input type="radio" name="sex" value="0" id="sex0"><label for="sex0">男</label>
　								<input type="radio" name="sex" value="1" id="sex1"><label for="sex1">女</label>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > 邮箱 </label>

							<div class="col-sm-9">
								<input type="email" id="id-input-file-2" style="width:350px" name="email" value="{{$users->email}}"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 头像 </label>
							<div class="col-sm-9" >
								<img src="/{{$users->photo}}" style="width:90px;height:90px;"  id="pic2"/>
							</div>
							<div class="col-sm-9" style="position:relative;left:290px;top:10px">
								<input type="file" id="id-input-file-2" name="photo"  id="details2" onchange="PreviewImage(this,'pic2','divPreview');"/>
							</div>
						</div>
						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-info" type="submit">
									<i class="icon-ok bigger-110"></i>
									提交
								</button>

								&nbsp; &nbsp; &nbsp;
								<button class="btn" type="reset">
									<i class="icon-undo bigger-110"></i>
									重置
								</button>
							</div>
						</div>
					</form>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
		<script language="JavaScript">  
			window.onload = function(){  
			strYYYY = document.form1.YYYY.outerHTML;  
			strMM = document.form1.MM.outerHTML;  
			strDD = document.form1.DD.outerHTML;  
			MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];  
			  
			//先给年下拉框赋内容  
			var y = new Date().getFullYear();  
			var str = strYYYY.substring(0, strYYYY.length - 9);  
			for (var i = (y-30); i < (y+30); i++) //以今年为准，前30年，后30年  
			{  
			str += "<option value='" + i + "'> " + i + "年" + "</option>\r\n";  
			}  
			document.form1.YYYY.outerHTML = str +"</select>";  
			  
			//赋月份的下拉框  
			var str = strMM.substring(0, strMM.length - 9);  
			for (var i = 1; i < 13; i++)  
			{  
			str += "<option value='" + i + "'> " + i + "月" + "</option>\r\n";  
			}  
			document.form1.MM.outerHTML = str +"</select>";  
			  
			document.form1.YYYY.value = y;  
			document.form1.MM.value = new Date().getMonth() + 1;  
			var n = MonHead[new Date().getMonth()];  
			if (new Date().getMonth() ==1 && IsPinYear(YYYYvalue)) n++;  
			writeDay(n); //赋日期下拉框  
			document.form1.DD.value = new Date().getDate();  
			}  
			function YYYYMM(str) //年发生变化时日期发生变化(主要是判断闰平年)  
			{  
			var MMvalue = document.form1.MM.options[document.form1.MM.selectedIndex].value;  
			if (MMvalue == ""){DD.outerHTML = strDD; return;}  
			var n = MonHead[MMvalue - 1];  
			if (MMvalue ==2 && IsPinYear(str)) n++;  
			writeDay(n)  
			}  
			function MMDD(str) //月发生变化时日期联动  
			{  
			var YYYYvalue = document.form1.YYYY.options[document.form1.YYYY.selectedIndex].value;  
			if (str == ""){DD.outerHTML = strDD; return;}  
			var n = MonHead[str - 1];  
			if (str ==2 && IsPinYear(YYYYvalue)) n++;  
			writeDay(n)  
			}  
			function writeDay(n) //据条件写日期的下拉框  
			{  
			var s = strDD.substring(0, strDD.length - 9);  
			for (var i=1; i<(n+1); i++)  
			s += "<option value='" + i + "'> " + i + "日" + "</option>\r\n";  
			document.form1.DD.outerHTML = s +"</select>";  
			}  
			function IsPinYear(year)//判断是否闰平年  
			{ return(0 == year%4 && (year%100 !=0 || year%400 == 0))}  

			var userInput=document.getElementsByName('name')[0];
			//获取焦点事件
			userInput.onfocus=function(){
				this.style.backgroundColor="yellow";
			}
			
			//失去焦点事件
			userInput.onblur=function(){
				//this.style.backgroundColor="";
				this.removeAttribute('style');
			}
			var userInput=document.getElementsByName('email')[0];
			//获取焦点事件
			userInput.onfocus=function(){
				this.style.backgroundColor="yellow";
			}
			
			//失去焦点事件
			userInput.onblur=function(){
				//this.style.backgroundColor="";
				this.removeAttribute('style');
			}
			
		  	//表单数据改变事
			var sexs=document.getElementsByName('sex');
			var spans=[];
			for(var i=0;i<sexs.length;i++){
				spans[i]=sexs[i].nextSibling;
				sexs[i].onchange=function(){
					//取消所有选中的颜色 变色
					for(var j=0;j<spans.length;j++){
						spans[j].style.color='';
					}
					//选中谁 谁变红
					this.nextSibling.style.color='red';
				}
			}
		 </script> 
		 <script>
			//JS本地图片预览，兼容ie[6-9]、火狐、Chrome17+、Opera11+、Maxthon3
			function PreviewImage(fileObj, imgPreviewId, divPreviewId) {
				var allowExtention = ".jpg,.bmp,.gif,.png"; //允许上传文件的后缀名document.getElementById("hfAllowPicSuffix").value;
				var extention = fileObj.value.substring(fileObj.value.lastIndexOf(".") + 1).toLowerCase();
				var browserVersion = window.navigator.userAgent.toUpperCase();
				if (allowExtention.indexOf(extention) > -1) {
					if (fileObj.files) {//HTML5实现预览，兼容chrome、火狐7+等
						if (window.FileReader) {
							var reader = new FileReader();
							reader.onload = function (e) {
								document.getElementById(imgPreviewId).setAttribute("src", e.target.result);
							}
							reader.readAsDataURL(fileObj.files[0]);
						} else if (browserVersion.indexOf("SAFARI") > -1) {
							alert("不支持Safari6.0以下浏览器的图片预览!");
						}
					} else if (browserVersion.indexOf("MSIE") > -1) {
						if (browserVersion.indexOf("MSIE 6") > -1) {//ie6
							document.getElementById(imgPreviewId).setAttribute("src", fileObj.value);
						} else {//ie[7-9]
							fileObj.select();
							if (browserVersion.indexOf("MSIE 9") > -1)
								fileObj.blur(); //不加上document.selection.createRange().text在ie9会拒绝访问
							var newPreview = document.getElementById(divPreviewId + "New");
							if (newPreview == null) {
								newPreview = document.createElement("div");
								newPreview.setAttribute("id", divPreviewId + "New");
								newPreview.style.width = document.getElementById(imgPreviewId).width + "px";
								newPreview.style.height = document.getElementById(imgPreviewId).height + "px";
								newPreview.style.border = "solid 1px #d2e2e2";
							}
							newPreview.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale',src='" + document.selection.createRange().text + "')";
							var tempDivPreview = document.getElementById(divPreviewId);
							tempDivPreview.parentNode.insertBefore(newPreview, tempDivPreview);
							tempDivPreview.style.display = "none";
						}
					} else if (browserVersion.indexOf("FIREFOX") > -1) {//firefox
						var firefoxVersion = parseFloat(browserVersion.toLowerCase().match(/firefox\/([\d.]+)/)[1]);
						if (firefoxVersion < 7) {//firefox7以下版本
							document.getElementById(imgPreviewId).setAttribute("src", fileObj.files[0].getAsDataURL());
						} else {//firefox7.0+                    
							document.getElementById(imgPreviewId).setAttribute("src", window.URL.createObjectURL(fileObj.files[0]));
						}
					} else {
						document.getElementById(imgPreviewId).setAttribute("src", fileObj.value);
					}
				} else {
					alert("仅支持" + allowExtention + "为后缀名的文件!");
					fileObj.value = ""; //清空选中文件
					if (browserVersion.indexOf("MSIE") > -1) {
						fileObj.select();
						document.selection.clear();
					}
					fileObj.outerHTML = fileObj.outerHTML;
				}
				return fileObj.value;    //返回路径
			}
		</script>

@endsection



