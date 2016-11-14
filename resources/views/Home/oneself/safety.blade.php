@extends('home.base')
@section('content')

<link type="text/css" rel="stylesheet" href="{{URL::asset('css/reset.css')}}">
<link type="text/css" rel="stylesheet" href="{{URL::asset('css/layout.css')}}">
<link type="text/css" rel="stylesheet" href="{{URL::asset('css/modacctip.css')}}">

       <div id="zhezhao" style="position:fixed;top:0px;right:0px;bottom:0px;height:100%;width:100%;filter:alpha(opacity=60);background-color: #777;left: 0px;display:none;opacity:0.5;z-index:100000"></div>
	<div class="popup_mask" style="display:none;" id="loadingMask">
		<div class="bkc"></div>
		<div class="mod_wrap loadingmask">
		</div>
	</div>
	<div class="wrapper blockimportant">
		<div class="wrap">
			<div class="layout bugfix_ie6 dis_none">
				<div class="n-logo-area clearfix">
					<a href="/oneself/safety" class="fl-l">
					  <img src="{{URL::asset('Images/n-logo.png')}}" srcset="{{URL::asset('Images/n-logo.png')}}"/>
					</a>			
					<a id="logoutLink" class="fl-r logout" 
					  href="/oneself/centre">
					  返回个人中心
					</a>
				</div>
			  
				<!--头像 名字-->
				<div class="n-account-area-box">
					<div class="n-account-area clearfix">
						<div class="na-info">
							<p class="na-name" style="color:#999;font-weight:normal;">{{$user->name}}</p>
							<p class="na-num">{{$user->email}}</p>
						</div>
						<div class="na-img-area fl-l">
								<!--na-img-bg-area不能插入任何子元素-->
							<div class="na-img-bg-area">
								<img src="/{{$user->photo}}">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="layout">
				<div class="n-main-nav clearfix">
					<ul>
						<li class="current">
							<a href="/oneself/safety" title="帐号安全">帐号安全</a>
							<em class="n-nav-corner"></em>
						</li>
						<li>
							<a href="/person/details" title="个人信息">个人信息</a>
							<em class="n-nav-corner"></em>
						</li>
					</ul>
				</div>
				<div class="n-frame" style="height:100px">
				@if(($user->safe) == 0)
					<div class="title-item title_security_wap">
					  <h4 class="title-big dis-inb">安全等级</h4>
					  <em class="space6"></em>
					  <p class="font-normal dis-inb wap_colb2"><em class="light-num" style="padding:0">
							
									<span class="score_1">50</span>
								
					  </em>分</p>
					  <div class="slider-area dis-inb vert-m" style="width:360px;">
						<div class="slider-bar-bg"></div>
						<div class="slider-bar-line score_bg_1" style="width:50%;"></div>
						<em class="drag-ico" style="left:50%"></em>
					  </div>
					  <p class="font-normal dis-inb security_level_txt">
					  
							<span class="score_outer_1">存在<em class="light-num">1</em>项风险</span>
						
					  </p>
					</div>
					@else
					<div class="title-item title_security_wap">
					  <h4 class="title-big dis-inb">安全等级</h4>
					  <em class="space6"></em>
					  <p class="font-normal dis-inb wap_colb2"><em class="light-num" style="padding:0">
							
									<span class="score_1">100</span>
								
					  </em>分</p>
					  <div class="slider-area dis-inb vert-m" style="width:360px;">
						<div class="slider-bar-bg"></div>
						<div class="slider-bar-line score_bg_1" style="width:100%;"></div>
						
					  </div>
					  <p class="font-normal dis-inb security_level_txt">
					  
							<span class="score_outer_1">账号很安全</span>
						
					  </p>
					</div>
					@endif
					<ul class="device-detail-area">
						<li id="changePassword" class="click-row">
							<div class="font-img-item clearfix">
								<em class="fi-ico fi-ico-lock"></em>
								<p class="title-normal dis-inb">帐号密码</p>
								<p class="font-default">
									用于保护帐号信息和登录安全
								</p>
								<span class="title-normal wap-desc">
									修改
								</span>
								<i class="arrow_r"></i>
							</div>			
							<div class="ada-btn-area" >
							  <a href="JavaScript:void(0)" class="n-btn" onclick="show()">修改</a>
							</div>
						</li>
						<li id="changeMobile" class="click-row">
							<div class="font-img-item clearfix">
								<em class="fi-ico fi-ico-phone"></em>
								<p class="title-normal dis-inb">安全手机</p>			
								<span class="title-normal wap-desc">
							
									{{$userdetail->phone}}

								</span>
								<div class="wap-info">
								{{$userdetail->phone}}
								</div>
								<p class="font-default">添加手机号,可以让身份更完善</p>
								<i class="arrow_r"></i>
							</div>
							<div class="ada-btn-area">
								<a href="JavaScript:void(0)"onclick="shows()" class="n-btn">
								修改
								</a>
							</div>
						</li>
						<li id="setMibao" class="click-row">
							<div class="font-img-item clearfix">
								<em class="fi-ico fi-ico-secret"></em>
								<p class="title-normal dis-inb">密保问题</p>
								<span class="warning-tip">&nbsp;</span>
								<p class="font-default color-active">密保问题用于安全验证，建议立即设置</p>
								<i class="arrow_r"></i>				
							</div>
							<div class="ada-btn-area" id="btnSetMibao">
								<a id="mibao_link" href="JavaScript:void(0)" onclick="showd()" class="n-btn">设置</a>
									 
							</div>
						</li>
					</ul>
				</div>
				<div class="n-frame device_recommend" style="position:relative;top:60px" >
					<div class="title-item title_security_wap">
						<h4 class="title-big dis-inb">推荐使用</h4>
					</div>
					<ul class="device-detail-area">
						<li class="click-row">
							<div class="font-img-item clearfix">
								<em class="fi-ico fi-ico-token"></em>
								<p class="title-normal dis-inb">小米安全令牌</p>
								<p class="font-default">在非信任设备上登录需要二次验证，防止他人恶意登录</p>
								<span class="title-normal wap-desc color-active">开启</span>
								<i class="arrow_r"></i>
							</div>
							<div class="ada-btn-area" id="btnManageToken">
								<a __href="" class="n-btn">开启</a>   
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--TIPS s-->
	<!-- 修改密码 s -->
	<div id="myform" style="width:450px;height:400px;position:absolute;left:40px;top:365px;background:RGBA(255,255,255,1);display:none;z-index:100000;">
		<div class="se" style="position:relative;font-size:20px;height:30px;line-height:30px;top:20px;left:10px;padding-right:20px;"><span>修改密码</span></div>
		<div class="close" style="position:relative;font-size:30px;height:20px;line-height:10px;text-align:right;padding-right:20px;"><span onclick="hide()" style="cursor:pointer;">×</span></div>
		<form action="/oneself/update" method="post" enctype="multipart/form-data">
			{!!csrf_field()!!}
			
			<table align="center" width="310">
				<tr>
					<td style="position:relative;left:30px;top:20px;font-size:15px">&nbsp; &nbsp; 原密码:
					<label class="labelbox"><input class="oldPass" type="password" placeholder="输入原密码" name="password" /></label></td>
					
					
				</tr>
				<tr>
					<td style="position:relative;left:30px;top:40px;font-size:15px">&nbsp; &nbsp; 新密码:
					<label class="labelbox"><input class="oldPass" type="password" placeholder="输入新密码" name="passwd" autocomplete="off" disableautocomplete></label></td>
				</tr>
				<tr>
					<td style="position:relative;left:30px;top:60px;font-size:15px">确认密码:
					<label class="labelbox"><input class="oldPass" type="password" placeholder="重复新密码" name="pwd" autocomplete="off" disableautocomplete></label></td>
				</tr>
				<tr>		
					<td><button type="submit" name="photo" style="position:relative;top:100px;left:40px;font-size:15px;width:240px;height:40px;background:orange">确认修改</button></td>
				</tr>
				
			</table>
		</form>
	</div>
	<!--TIPS s-->
	<!-- 添加手机号 s -->
	<div id="forms" style="width:450px;height:400px;position:absolute;left:40px;top:455px;background:RGBA(255,255,255,1);display:none;z-index:100000;">
		<div class="se" style="position:relative;font-size:20px;height:30px;line-height:30px;top:20px;left:10px;padding-right:20px;"><span>添加手机号</span></div>
		<div class="close" style="position:relative;font-size:30px;height:20px;line-height:10px;text-align:right;padding-right:20px;"><span onclick="hides()" style="cursor:pointer;">×</span></div>
		<form action="/oneself/mobile" method="post" enctype="multipart/form-data">
			{!!csrf_field()!!}
			
			<table align="center" width="310">
				<tr>
					<td style="position:relative;left:30px;top:40px;font-size:15px">&nbsp; &nbsp; 手机号 : 
					<label class="labelbox"><input class="oldPass" type="text" placeholder="请输入手机号" name="phone" ></label></td>
			
				</tr>
				<tr>		
					<td><button type="submit" name="photo" style="position:relative;top:120px;left:40px;font-size:15px;width:240px;height:40px;background:orange">确认添加</button></td>
				</tr>
				
			</table>
		</form>
	</div>
	<!--密保数据-->
	<div id="formd" style="width:450px;height:520px;position:absolute;left:40px;top:505px;background:RGBA(255,255,255,1);display:none;z-index:100000;">
		<div class="se" style="position:relative;font-size:20px;height:30px;line-height:30px;top:20px;left:10px;padding-right:20px;"><span>填写密保问题</span></div>
		<div class="close" style="position:relative;font-size:30px;height:20px;line-height:10px;text-align:right;padding-right:20px;"><span onclick="hided()" style="cursor:pointer;">×</span></div>
		<form action="/oneself/ask" method="post" enctype="multipart/form-data">
			{!!csrf_field()!!}
			
			<table align="center" width="310">
				<tr>
					<td style="position:relative;left:30px;top:30px;font-size:15px">&nbsp; &nbsp;问题一 : 
					<select name="name">						
							<option value="您母亲的名字是 ?" selected>您母亲的名字是 ?</option>
							<option value="您配偶的生日是 ?" selected>您配偶的生日是 ?</option>
							<option value="您小学班主任的名字是 ?" selected>您小学班主任的名字是 ?</option>
							<option value="您配偶的姓名是 ?" selected>您配偶的姓名是 ?</option>
							<option value="您高中班主任的名字是 ?" selected>您高中班主任的名字是 ?</option>
							<option value="对您影响最大的人的名字是 ?" selected>对您影响最大的人的名字是 ?</option>
							<option value="您初中班主任的名字是 ?" selected>您初中班主任的名字是 ?</option>
							<option value="" selected>请选择问题</option>
						</select>
					</td>
					<input type="hidden" name="user_id" value="{{Session::get('id')}}">
				</tr>
				<tr>
					<td style="position:relative;left:30px;top:50px;font-size:15px">&nbsp; &nbsp; &nbsp; 答案 : 
					<label class="labelbox"><input type="text" name="names"  placeholder="请输入答案" value=""></label></td>
				</tr>
				<tr>
					<td style="position:relative;left:30px;top:70px;font-size:15px">&nbsp; &nbsp;问题二 : 
					<select name="birthday">
							<option value="您母亲的名字是 ?" selected>您母亲的名字是 ?</option>
							<option value="您配偶的生日是 ?" selected>您配偶的生日是 ?</option>
							<option value="您小学班主任的名字是 ?" selected>您小学班主任的名字是 ?</option>
							<option value="您配偶的姓名是 ?" selected>您配偶的姓名是 ?</option>
							<option value="您高中班主任的名字是 ?" selected>您高中班主任的名字是 ?</option>
							<option value="对您影响最大的人的名字是 ?" selected>对您影响最大的人的名字是 ?</option>
							<option value="您初中班主任的名字是 ?" selected>您初中班主任的名字是 ?</option>
							<option value="" selected>请选择问题</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="position:relative;left:30px;top:90px;font-size:15px">&nbsp; &nbsp; &nbsp; 答案 : 
					<label class="labelbox"><input class="oldPass" type="text" name="birthdays" value="" placeholder="请输入答案"></label></td>
				</tr>
				<tr>
					<td style="position:relative;left:30px;top:110px;font-size:15px">&nbsp; &nbsp;问题三 : 
					<select name="grade">								
							<option value="您母亲的名字是 ?" selected>您母亲的名字是 ?</option>
							<option value="您配偶的生日是 ?" selected>您配偶的生日是 ?</option>
							<option value="您小学班主任的名字是 ?" selected>您小学班主任的名字是 ?</option>
							<option value="您配偶的姓名是 ?" selected>您配偶的姓名是 ?</option>
							<option value="您高中班主任的名字是 ?" selected>您高中班主任的名字是 ?</option>
							<option value="对您影响最大的人的名字是 ?" selected>对您影响最大的人的名字是 ?</option>
							<option value="您初中班主任的名字是 ?" selected>您初中班主任的名字是 ?</option>
							<option value="" selected>请选择问题</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="position:relative;left:30px;top:130px;font-size:15px">&nbsp; &nbsp; &nbsp; 答案 : 
					<label class="labelbox"><input class="oldPass" type="text" name="grades" value="" placeholder="请输入答案"></label></td>
				</tr>
				<tr>		
					<td><button type="submit"  style="position:relative;top:150px;left:40px;font-size:15px;width:240px;height:40px;background:orange">确认添加</button></td>
				</tr>
				
			</table>
		</form>
	</div>
	
	<div id="questionData" style="where:100%;height:50px"></div>
	<script>

		//显示登录框和遮照层
		function show(){
			//获取2个层的元素
			var zhezhao=document.getElementById('zhezhao');
			var myform=document.getElementById('myform');
			//计算表单的显示位置
			//获取body的宽度
			 var bodyW=getStyle(document.body,'width')
			//获取表单的宽度
			 var myformW=getStyle(myform,'width');
			 //计算坐标
			 var x=(parseInt(bodyW)-parseInt(myformW))/2;
			 
			 //将坐标设置的表单元素上
			 myform.style.left=x+'px';
			 
			//显示层
			zhezhao.style.display='block';
			myform.style.display='block';
		}
		
		//隐藏这招层和表单
		function hide(){
			//获取2个层的元素
			var zhezhao=document.getElementById('zhezhao');
			var myform=document.getElementById('myform');
			//隐藏元素
			zhezhao.style.display='none';
			myform.style.display='none';
		}
		
		 function getStyle(elem,styleName){
			if(elem.style[styleName]){//内联样式
				return elem.style[styleName];
			}
			else if(elem.currentStyle){//IE
				return elem.currentStyle[styleName];
			}
			else if(document.defaultView && document.defaultView.getComputedStyle){//DOM
				styleName = styleName.replace(/([A-Z])/g,'-$1').toLowerCase();
				var s = document.defaultView.getComputedStyle(elem,'');
				return s&&s.getPropertyValue(styleName);
			}
			else{//other,for example, Safari
				return null;
			}
		}
	</script>
	<script>
		//显示登录框和遮照层
		function shows(){
			//获取2个层的元素
			var zhezhao=document.getElementById('zhezhao');
			var forms=document.getElementById('forms');
			//计算表单的显示位置
			//获取body的宽度
			 var bodyW=getStyle(document.body,'width')
			//获取表单的宽度
			 var formsW=getStyle(forms,'width');
			 //计算坐标
			 var x=(parseInt(bodyW)-parseInt(formsW))/2;
			 
			 //将坐标设置的表单元素上
			 forms.style.left=x+'px';
			 
			//显示层
			zhezhao.style.display='block';
			forms.style.display='block';
		}
		
		//隐藏这招层和表单
		function hides(){
			//获取2个层的元素
			var zhezhao=document.getElementById('zhezhao');
			var forms=document.getElementById('forms');
			//隐藏元素
			zhezhao.style.display='none';
			forms.style.display='none';
		}

		 function getStyle(elem,styleName){
			if(elem.style[styleName]){//内联样式
				return elem.style[styleName];
			}
			else if(elem.currentStyle){//IE
				return elem.currentStyle[styleName];
			}
			else if(document.defaultView && document.defaultView.getComputedStyle){//DOM
				styleName = styleName.replace(/([A-Z])/g,'-$1').toLowerCase();
				var s = document.defaultView.getComputedStyle(elem,'');
				return s&&s.getPropertyValue(styleName);
			}
			else{//other,for example, Safari
				return null;
			}
		}
	</script>
		<script>
		//显示登录框和遮照层
		function showd(){
			//获取2个层的元素
			var zhezhao=document.getElementById('zhezhao');
			var forms=document.getElementById('formd');
			//计算表单的显示位置
			//获取body的宽度
			 var bodyW=getStyle(document.body,'width')
			//获取表单的宽度
			 var formsW=getStyle(forms,'width');
			 //计算坐标
			 var x=(parseInt(bodyW)-parseInt(formsW))/2;
			 
			 //将坐标设置的表单元素上
			 forms.style.left=x+'px';
			 
			//显示层
			zhezhao.style.display='block';
			forms.style.display='block';
		}
		
		//隐藏这招层和表单
		function hided(){
			//获取2个层的元素
			var zhezhao=document.getElementById('zhezhao');
			var forms=document.getElementById('formd');
			//隐藏元素
			zhezhao.style.display='none';
			forms.style.display='none';
		}

		 function getStyle(elem,styleName){
			if(elem.style[styleName]){//内联样式
				return elem.style[styleName];
			}
			else if(elem.currentStyle){//IE
				return elem.currentStyle[styleName];
			}
			else if(document.defaultView && document.defaultView.getComputedStyle){//DOM
				styleName = styleName.replace(/([A-Z])/g,'-$1').toLowerCase();
				var s = document.defaultView.getComputedStyle(elem,'');
				return s&&s.getPropertyValue(styleName);
			}
			else{//other,for example, Safari
				return null;
			}
		}
	</script>
@endsection	