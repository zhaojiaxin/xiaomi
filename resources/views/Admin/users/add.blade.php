@extends('admin.index')
@section('content')
	<div class="page-content">
		<div class="page-header">
			<h1>
				普通用户
				<small>
					<i class="icon-double-angle-right"></i>
					添加用户
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->

				<form class="form-horizontal" role="form" action="/users/insert" method="post" enctype="multipart/form-data">
				{!!csrf_field()!!}
					
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 邮箱 </label>

						<div class="col-sm-9">
							<input type="email" id="form-field-1" placeholder="请输入邮箱" class="col-xs-10 col-sm-5"  name="email"/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 密码 </label>

						<div class="col-sm-9">
							<input type="password" id="form-field-1" placeholder="请输入密码" class="col-xs-10 col-sm-5"  name="password"/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 确认密码 </label>

						<div class="col-sm-9">
							<input type="password" id="form-field-1" placeholder="确认密码" class="col-xs-10 col-sm-5" name="pwd"/>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 昵称 </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="昵称" class="col-xs-10 col-sm-5"  name="name"/>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 权限 </label>

						<div class="col-sm-9">
							<select name="auth">   
								<option value="0">普通用户</option>   
								<option value="1">会员用户</option>   
							</select>
						</div>
					</div>
					
					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="submit">
								<i class="icon-ok bigger-110"></i>
								添加
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
		<script>
			//获取页面的用户名标签
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
			var userInput=document.getElementsByName('password')[0];
			//获取焦点事件
			userInput.onfocus=function(){
				this.style.backgroundColor="yellow";
			}
			
			//失去焦点事件
			userInput.onblur=function(){
				//this.style.backgroundColor="";
				this.removeAttribute('style');
			}
			var userInput=document.getElementsByName('pwd')[0];
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
		</script>
	</div><!-- /.page-content -->
@endsection




