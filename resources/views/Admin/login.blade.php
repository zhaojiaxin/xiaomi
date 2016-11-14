<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>登录页面 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
		<link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css')}}" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="{{ URL::asset('assets/css/ace.min.css')}}"/>
		<link rel="stylesheet" href="{{ URL::asset('assets/css/ace-rtl.min.css')}}" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green" ></i>
									<span class="red">小米后台登录管理系统</span>
									
								</h1>
								      <h5 class="blue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Millet background landing management system</h5>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												  欢迎登陆小米后台
											</h4>

											<div class="space-6"></div>

											<form action="/login" method="post" id="login-main-form">
												{!! csrf_field() !!}
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="name" class="form-control" placeholder="Username" name='email' />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name='password' placeholder="Password" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>
<div class="inputbg">
							<label class="labelbox codelable">
								<input  id="asd" type="text" name="code" autocomplete="off" placeholder="图片验证码">
							</label>
							<img id="imgcode" onclick="f5()" src="/vcode" alt="图片验证码" class="icode_image code-image" style="cursor:pointer;size:5px">
							<span id="discode" style="color:red;"></span>
						</div> 
						<hr/>
							<script>
												function f5(){
													var vcode=document.getElementById('imgcode');
													vcode.src=vcode.src+'?'+Math.random();
												}
					</script>
						<script>						
						// $(function(){														
							用户名不为空 大于4位小于16位 不重复
							// $('#username').keyup(function(){
								// var name = $("#username").val();
								// if (/^[a-zA-Z][a-zA-Z0-9]{3,15}$/.test(name) == false){
									// $('#dis').text('格式不正确');
									// $('#sub').attr('type','text');
									 // $('#sub').attr()
								// }
								// else if(name == ''){
									// $('#dis').text('用户名不可以为空');
									// $('#sub').attr('type','text');
								// }
								// else{
									// $('#dis').text('');
									// $('#sub').attr('type','submit');
								// }
								
							// });
							密码不为空 大于5位 小于16位
							// $('#upwd').keyup(function(){
								// var name = $("#upwd").val();
								// if (/^\w{5,16}$/.test($(this).val()) == false){
									// $('#dispwd').text('请输出5-16位密码');
									// $('#sub').attr('type','text');
								// }
								// else if(name == ''){
									// $('#dispwd').text('密码不可以为空');
									// $('#sub').attr('type','text');
								// }
								// else{
									// $('#dispwd').text('');
									// $('#sub').attr('type','submit');
								// }
							// });
							验证码不为空
							// $('#asd').keyup(function(){								
								// if($("#asd").val() == ''){
									// $('#discode').text('验证码不可为空');
									// $('#sub').attr('type','text');
									
								// }
								// else{
									// $('#discode').text('');
									// $('#sub').attr('type','submit');
								// }
							// });
						// });
					</script>
					
													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="icon-key"></i>
															Login
														</button>
													</div>
<script>
											// $(function(){
												// $('#login-button').click(function(){
													// if($('#username').val()=='' || $('#pwd').val()==''){
														// return false;
													// }else{
														// $('#login-button').attr('type','submit');
													// }
												// })
											// })
										</script>
													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												
	

		
	
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
