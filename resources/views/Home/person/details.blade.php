@extends('home.base')
@section('content')
		 <div id="zhezhao" style="position:fixed; top: 0px; right:0px; bottom:0px;height:100%;width:100%;filter:alpha(opacity=60);background-color: #777;left: 0px;display:none;opacity:0.5; z-index:100000;"></div>
        <div class="popup_mask" style="display: none;" id="loadingMask">
            <div class="bkc">
            </div>
            <div class="mod_wrap loadingmask">
            </div>
        </div>
        <div class="wrapper blockimportant">
            <div class="wrap">
                <div class="layout bugfix_ie6 dis_none">
                    <div class="n-logo-area clearfix">
                        <a href="/oneself/safety" class="">
                            <img src="{{URL::asset('Images/n-logo.png')}}">
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
                                <p class="na-name" style="color:#999;font-weight:normal;">
								{{$user->name}}
                                </p>
                                <p class="na-num">
								  {{$user->email}}
                                </p>
                            </div>
                            <div class="na-img-area fl-l">
                                <!--na-img-bg-area不能插入任何子元素-->
                                <div class="a">
									<img src="/{{$user->photo}}" style="whidth:1100px;height:80px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layout">
                    <div class="n-main-nav clearfix">
                        <ul>
                            <li>
                                <a href="/oneself/safety" title="帐号安全">
                                    帐号安全
                                </a>
                                <em class="n-nav-corner">
                                </em>
                            </li>
                            <li class="current">
                                <a href="/person/details" title="个人信息">
                                    个人信息
                                </a>
                                <em class="n-nav-corner">
                                </em>
                            </li>
                        </ul>
                    </div>
                    <div class="n-frame">
                        <div class="uinfo c_b">
                            <div class="">
                                <div class="main_l">
                                    <div class="naInfoImgBox t_c">
                                        <div class="na-img-area marauto">
                                            <!--na-img-bg-area不能插入任何子元素-->
                                            <div class="page">
												<img src="/{{$user->photo}}" style="whidth:110px;height:80px;">
                                            </div>
                                        </div>
                                        <div class="page">
                                            <a class="color4a9" href="JavaScript:void(0)" title="修改头像" onclick="show()">
                                                修改头像
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_r">
                                    <div class="framedatabox">
                                        <div class="fdata">
                                            <a class="compile" style="position:relative;left:500px;top:40px" href="JavaScript:void(0)" title="编辑" onclick="redact()">
                                                <i class="iconpencil">
                                                </i>
                                                编辑
                                            </a>
                                            <h3>
                                                基础资料
                                            </h3>
                                        </div>
                                        <div class="fdata lblnickname">
                                            <p>
                                                <span>
                                                    姓名：
                                                </span>
                                                <span class="value" _empty="">
                                                    <span style="color:#999;">
													{{$user->name}}
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="fdata lblbirthday">
                                            <p>
                                                <span>
                                                    生日：
                                                </span>
                                                <span class="value" _empty="">
													{{$userdetail->YYYY}}年{{$userdetail->MM}}月{{$userdetail->DD}}日
                                                </span>
                                            </p>
                                        </div>
                                        <div class="fdata lblgender">
                                            <p>
                                                <span>
                                                    性别：
                                                </span>
                                                <span class="value" _empty="">
													{{$userdetail->sex ? '女' : '男'}}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="btn_editinfo">
                                            <a id="editInfoWap" class="btnadpt bg_normal" href="">
                                                编辑基础资料
                                            </a>
                                        </div>
                                    </div>
                                    <div class="framedatabox">
                                        <div class="fdata">
                                            <h3>
                                                高级设置
                                            </h3>
                                        </div>
                                        <div class="fdata click-row">
                                            <a class="color4a9 fr" href="JavaScript:void(0)" onclick="shows()"  id="switchRegion">
                                                修改
                                            </a>
                                            <p>
                                                <span>
                                                    帐号地区 : 
                                                </span>
                                                <span class="value" _empty="">
                                                    <span style="color:#999;">
													{{$user->at}}
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="logout_wap">
                                <a class="btnadpt bg_white" href="https://account.xiaomi.com/pass/logout?userId=1107036499&amp;callback=https://account.xiaomi.com">
                                    退出
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 编辑个人信息资料 s -->
		<div id="formd" style="width:450px;height:400px;position:absolute;left:40px;top:170px;background:RGBA(255,255,255,1);display:none;z-index:100000;">
			<div class="se" style="position:relative;font-size:20px;height:30px;line-height:30px;top:20px;left:10px;padding-right:20px;"><span>编辑基础资料</span></div>
			<div class="close" style="position:relative;font-size:30px;height:20px;line-height:10px;text-align:right;padding-right:20px;"><span onclick="hided()" style="cursor:pointer;">×</span></div>
			<form action="/person/datum" method="post" enctype="multipart/form-data" name="form1">
				{!!csrf_field()!!}
				
				<table align="center" width="310">
					<tr>
						<td style="position:relative;left:30px;top:30px;font-size:15px">姓名 : <input type="text" name="name" value="{{$user->name}}"/>
							 
						</td>
						
					</tr>
					<tr>
						<td style="position:relative;left:30px;top:60px;font-size:15px">生日 :	
							<select name="YYYY" onchange="YYYYDD(this.value)">
								<option value="" selected>请选择 年</option>
							</select>
							<select name="MM" onchange="MMDD(this.value)">
								<option value="" selected>选择 月</option>
							</select>
							<select name="DD">
								<option value="" selected>选择 日</option>
							</select>
							
						</td>
					</tr>
					<tr>		
						<td style="position:relative;left:30px;top:90px;font-size:15px">性别 : 
						
							<input type="radio" name="sex" value="0" id="sex0"><label for="sex0">男</label>
　							<input type="radio" name="sex" value="1" id="sex1"><label for="sex1">女</label>
							
						</td>
					</tr>
					<tr>		
						<td><button type="submit" name="photo" style="position:relative;top:150px;left:30px;font-size:15px;width:240px;height:40px;background:orange">确认修改</button></td>
					</tr>
				</table>
			</form>
		</div>	
		<!--头像层-->
		<div id="myform" style="width:450px;height:400px;position:absolute;left:40px;top:240px;background:RGBA(255,255,255,1);display:none;z-index:100000;">
			<div class="se" style="position:relative;font-size:20px;height:30px;line-height:30px;top:20px;left:10px;padding-right:20px;"><span>修改头像</span></div>
			<div class="close" style="position:relative;font-size:30px;height:20px;line-height:10px;text-align:right;padding-right:20px;"><span onclick="hide()" style="cursor:pointer;">×</span></div>
			<form action="/person/update" method="post" enctype="multipart/form-data">
				{!!csrf_field()!!}
				
				<table align="center" width="310">
					<tr>
						<td style="position:relative;left:30px;top:40px;font-size:15px">请上传头像:</td>
					</tr>
					<tr>
						<td style="position:relative;top:70px;left:80px;font-size:15px"><input type="file" name="photo" value="" />
							
						</td>
					</tr>
					<tr>		
						<td><button type="submit" name="photo" style="position:relative;top:140px;left:40px;font-size:15px;width:240px;height:40px;background:orange">上传头像</button></td>
					</tr>
					
				</table>
			</form>
		</div>
        <!-- 切换帐号地区 e -->
		<div id="forms" style="width:450px;height:450px;position:absolute;left:40px;top:165px;background:RGBA(255,255,255,1);display:none;z-index:100000;">
			<div class="se" style="class="se""><span>切换账号地区</span></div>
			<div class="close" style="position:relative;font-size:30px;height:20px;line-height:10px;text-align:right;padding-right:20px;"><span onclick="hides()" style="cursor:pointer;">×</span></div>
			<form action="/person/region" method="post" enctype="multipart/form-data">
				{!!csrf_field()!!}
				
				<table align="center" width="310">
					<tr>
						<td style="position:relative;left:30px;top:20px;font-size:15px">请注意:</td>
					</tr>
					<tr>
						<td style="position:relative;left:35px;top:30px;font-size:15px"> 
							<span>1,一些会员服务，只在部分地区提供，切换后可能无法继续使用。</span>
						</td>
					</tr>
					<tr>
						<td style="position:relative;left:35px;top:50px;font-size:15px"> 
							<span>2,一些版权内容，只在部分地区提供，切换后可能无法观看。</span>
						</td>
					</tr>
					<tr>
						<td style="position:relative;left:35px;top:70px;font-size:15px"> 
							<span>3,不同地区的米币不通用，切换后可能导致您的米币余额无法使用。</span>
						</td>
					</tr>
					<tr>
						<td style="position:relative;left:35px;top:90px;font-size:15px"> 登陆地区:
							<select name="at">
								<option value="中国" selected>中国</option>
								<option value="美国" selected>美国</option>
								<option value="日本" selected>日本</option>
								<option value="马来西亚" selected>马来西亚</option>
								<option value="新加坡" selected>新加坡</option>
								<option value="台湾" selected>台湾</option>
								<option value="俄罗斯" selected>俄罗斯</option>
								<option value="加拿大" selected>加拿大</option>
								<option value="菲律宾" selected>菲律宾</option>
							</select>
							
						</td>
					</tr>
					<tr>		
						<td><button type="submit" name="photo" style="position:relative;top:110px;left:40px;font-size:15px;width:240px;height:40px;background:orange">确认更改</button></td>
					</tr>
				</table>
			</form>
		</div>
        
        <script>
            var JSP_VAR = {
                deviceType: 'PC'
            };
        </script>
        <script src="{{URL::asset('Scripts/2014.js')}}">
        </script>
        <script>
            OO(['com.mi.passport.portal.2014'],
            function(portal2014, O) {
                var Profile = portal2014.Profile;
                var profile = new Profile({

				});
                profile.render();
            });
        </script>
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
			function redact(){
				//获取2个层的元素
				var zhezhao=document.getElementById('zhezhao');
				var formd=document.getElementById('formd');
				//计算表单的显示位置
				//获取body的宽度
				 var bodyW=getStyle(document.body,'width')
				//获取表单的宽度
				 var formdW=getStyle(formd,'width');
				 //计算坐标
				 var x=(parseInt(bodyW)-parseInt(formdW))/2;
				 
				 //将坐标设置的表单元素上
				 formd.style.left=x+'px';
				 
				//显示层
				zhezhao.style.display='block';
				formd.style.display='block';
			}
			
			//隐藏这招层和表单
			function hided(){
				//获取2个层的元素
				var zhezhao=document.getElementById('zhezhao');
				var formd=document.getElementById('formd');
				//隐藏元素
				zhezhao.style.display='none';
				formd.style.display='none';
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
            $('#loadingMask').hidePopup();
        </script>
        <style type="text/css">
            /*干掉该死的IE6的遮罩问题*/ #loadingMask .bkc{ _height:200%; }
        </style>
        <div id="img_cache" style="visibility:hidden;">
        </div>
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
  @endsection