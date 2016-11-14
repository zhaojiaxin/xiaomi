<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{asset('admins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{asset('admins/bootstrap/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('admins/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset('admins/plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="{{asset('admins/bootstrap/js/html5shiv.min.js')}}"></script>
        <script src="{{asset('admins/bootstrap/js/respond.min.js')}}"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>后台登录</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">请输入账号和密码</p>
        <form action="{{URL('admin/login')}}" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group has-feedback">
            <input type="text" name="name" class="form-control" placeholder="账号"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="密码"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		 <div class="row" style="margin-bottom: 20px;">
            <div class="col-xs-6">    
                <input type="text" name="code" class="form-control" placeholder="验证码"/>              
            </div>
			<div class="col-xs-4">    
                       
				<img src="{{URL('admin/captcha/'.time())}}" onclick="this.src='{{URL('admin/captcha')}}/'+Math.random()" />
			</div>
			<div class="col-xs-8">
			@if(session("msg"))
               <span style="color:red">{{session("msg")}}</span>
            @endif
			</div>
		  </div>
          <div class="row">
            
            <div class="col-xs-4" style="margin-left: 30%;" >
              <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
            </div><!-- /.col -->
          </div>
        </form>

       

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('admins/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset('admins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{asset('admins/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
