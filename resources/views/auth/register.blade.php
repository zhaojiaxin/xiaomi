<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<title>小米帐号 - 注册</title>
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/layout.css') }}">
<script src="{{URL::asset('Scripts/jquery.js')}}"></script>


	<style>
		.msg{
			margin-left:210px;
			margin-top:20px;
		}
		.inputbg{
			margin-left:230px;
			margin-top:20px;
		}
		.inputbg input{
			width:300px;
		}
		.codelable{
			margin-left:0px;
			width:180px;	
		}
		.codelable input{
			width:150px;
		}
		.icode_image{
			float:right;
			margin-top:0px;
			margin-right:240px;
		}
	</style>

</head>
 <body class="zh_CN">
	<div class="wrapper">
		<div class="wrap">
			<div class="layout">
				<div class="n-frame device-frame reg_frame" id="main_container">
					<div class="external_logo_area"><a class="milogo"></a></div>
					<div class="title-item t_c">
						<h4 class="title_big30">注册小米帐号</h4>          
					</div> 
					<form action="/auth/register" method="post">
						{!! csrf_field() !!}
						
						<div class="inputbg">
							<label class="labelbox" for="">
								<input name="name" type="text" id="username" data-repeat=".set-password" data-error=".error-password" placeholder="请输入4-16位用户名" value="{{ old('name') }}">
							</label>
							<span id="dis" style="color:red;"></span>
						</div>
						<div class="inputbg">
							<label class="labelbox" for="">
								<input id="txtEmail" name="email" type="text" data-repeat=".set-password" data-error=".error-password" placeholder="请输入邮箱" value="{{ old('email') }}" >
							</label>
							<span id="spinfo" style="color:red;"></span>
						</div>
						
						<div class="inputbg">
							<label class="labelbox" for="">
								<input name="password" id="upwd" type="password" data-repeat=".set-password" data-error=".error-password" placeholder="请输入密码">
							</label>
							<span id="dispwd" style="color:red;"></span>
						</div>
						
						<div class="inputbg">
							<label class="labelbox" for="">
								<input name="password_confirmation" id="urepwd" type="password" data-repeat=".set-password" data-error=".error-password" placeholder="请输入确认密码">
							</label>
							<span id="disrepwd" style="color:red;"></span>
						</div>
						<div class="inputbg">
							<label class="labelbox codelable">
								<input  id="asd" type="text" name="code" autocomplete="off" placeholder="图片验证码">
							</label>
							<img id="imgcode"  onclick="f5()" src="/vcode" alt="图片验证码" class="icode_image code-image" style="cursor:pointer">
							
						</div> 
						<div class="inputbg">
							<span id="discode" style="color:red;"></span>
						</div>
						<div class="fixed_bot mar_phone_dis1">
							  <input class="btn332 btn_reg_1 submit-step" id="sub" data-to="phone-step2" type="submit" value="立即注册">
							  <img style="display:none;" src="picture/8fd73135e0424e759d69d22089a44126.gif" />
							  <p class="msg">点击“立即注册”，即表示您同意并愿意遵守小米
								<a href="/uxieyi"  target="_blank" title="用户协议">用户协议</a>
							  和
								<a href="/yisi" target="_blank" title="隐私政策">隐私政策</a>
							  </p>
						</div>
					</form>

					<script>
												function f5(){
													var vcode=document.getElementById('imgcode');
													vcode.src=vcode.src+'?'+Math.random();
												}
					</script>
					
					<script>						
						$(function(){														
							//用户名不为空 大于4位小于16位 不重复
							$('#username').focusout(function(){
								var name = $("#username").val();
								if (/^[a-zA-Z][a-zA-Z0-9]{3,15}$/.test(name) == false){
									$('#dis').text('格式不正确');
									$('#sub').attr('type','text');
									// $('#sub').attr()
								}
								else if(name == ''){
									$('#dis').text('用户名不可以为空');
									$('#sub').attr('type','text');
								}
								else{
									$('#dis').text('');
									$('#sub').attr('type','submit');
								}
								
							});
							//邮箱不为空且格式正确
							$('#txtEmail').focusout(function(){
								var name = $("#txtEmail").val();
								if (/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test($(this).val()) == false){
									$('#spinfo').text('邮箱格式不正确');
									$('#sub').attr('type','text');
								}
								else if(name == ''){
									$('#spinfo').text('邮箱不可以为空');
									$('#sub').attr('type','text');
								}
								else{
									$('#spinfo').text('');
									$('#sub').attr('type','submit');
								}
							});
							//密码不为空 大于5位 小于16位
							$('#upwd').focusout(function(){
								var name = $("#upwd").val();
								if (/^\w{5,16}$/.test($(this).val()) == false){
									$('#dispwd').text('请输出5-16位密码');
									$('#sub').attr('type','text');
								}
								else if(name == ''){
									$('#dispwd').text('密码不可以为空');
									$('#sub').attr('type','text');
								}
								else{
									$('#dispwd').text('');
									$('#sub').attr('type','submit');
								}
							});
							//确认密码与密码一致
							$('#urepwd').focusout(function(){
								var name = $("#urepwd").val();
								if(name != $("#upwd").val()){
									$('#disrepwd').text('密码不一致');
									$('#sub').attr('type','text');
								}
								else{
									$('#disrepwd').text('');
									$('#sub').attr('type','submit');
								}
							});
							//验证码不为空
							$('#asd').focusout(function(){								
								if($("#asd").val() == ''){
									$('#discode').text('验证码不可为空');
									$('#sub').attr('type','text');
									
								}
								else{
									$('#discode').text('');
									$('#sub').attr('type','submit');
								}
							});
						});
					</script>
				</div>
			</div>
		</div>
	</div>
				</div>
			</div>
		</div>
	</div>
	<div class="n-footer">
	  <div class="nf-link-area clearfix">
		  <ul class="lang-select-list">
			<li><a class="lang-select-li" href="javascript:void(0)" data-lang="zh_CN">简体</a>|</li>
			<li><a class="lang-select-li" href="javascript:void(0)" data-lang="zh_TW">繁体</a>|</li>
			<li><a class="lang-select-li" href="javascript:void(0)" data-lang="en">English</a></li>
			
			  |<li><a class="a_critical" href="" target="_blank"><em></em>常见问题</a></li>
			
		  </ul>
	  </div>
	  <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beianlink beian-record-link" target="_blank"><img src="{{ URL::asset('picture/ghs.png')}}">京公网安备11010802020134号</a>-京ICP证110507号</span></p>
	</div>
</body>
</html>

