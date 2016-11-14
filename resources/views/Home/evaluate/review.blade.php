@extends('home.base')
@section('content')
	<div class="goods-comment goods-comment-add-block" id='J_writeBlock'>
		<div class="container">
			<div class="row">
				<div class="span7 goods-info-block">
					<div class="goods-info-detail">
						<h2 class="goods-img">
							<img src="/{{$goods->logo}}" style="width:150px;height:150px">
						</h2>
						<h3 class="goods-name">
							{{$goods->gname}}                  
						</h3>
						<div class="goods-price">
							{{$goods->gprice}}元                    
						</div>
						<p class="goods-comments-info">
							{{$goods->state ? '在售' : '已停售'}}
						</p>
					</div>
				</div>
				<div class="span13 goods-comment-add-detail-block">
					<form action="/evaluate/affixion" method="post" enctype="multipart/form-data">
						{!!csrf_field()!!}
						<textarea id="J_commentContent" name="content" class='goods-comment-content'style="width:600px;height:230px;" placeholder="外形如何，品质如何，好用吗，写点您真实的使用感受吧" maxlength="300" ></textarea>
						<input type="hidden" name="user_id" value="{{Session::get('id')}}"/>
						<input type="hidden" name="gid" value="{{$goods->gid}}"/>
						<p class="price">
								每人仅限评价一次!
						</p>
							
						<div class="submit-bloc" >
							
							<div class="right-btn-bloc" style="position:relative;">
								<input type="file" name="photodd" id="details2" onchange="PreviewImage(this,'pic2','divPreview');"/>
								<button id ='J_submit' class="btn btn-primary comment-answer-btn" type="submit" style="position:absolute;top:60px;left:450px;">发表评价</button>
							</div>
							<img id="pic2" style="width:150px;height:150px"/>
						</div>
					</form>
				</div>
			</div>
		</div>
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
	</div>
@endsection	