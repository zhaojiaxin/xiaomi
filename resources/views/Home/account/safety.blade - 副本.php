<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
		<title>小米帐号 - 帐号安全</title>
		<script>
		  var userPhoneList=[];
		  userPhoneList.push({address:"135******57",key:"D3CC94BC3590C955"});
		</script>
		<link type="text/css" rel="stylesheet" href="./css/reset.css">
		<link type="text/css" rel="stylesheet" href="./css/layout.css">

		<link type="text/css" rel="stylesheet" href="./css/modacctip.css">		
		<style type="text/css">
			.score_1{color:rgb(255,0,0)}
			.score_2{color:rgb(255,102,0)}
			.score_3{color:rgb(255,204,0)}
			.score_4{color:rgb(51,204,0)}
			.score_bg_1{background-color:rgb(255,0,0)}
			.score_bg_2{background-color:rgb(255,102,0)}
			.score_bg_3{background-color:rgb(255,204,0)}
			.score_bg_4{background-color:rgb(51,204,0)}
			.score_outer_1 em{color:rgb(255,0,0)}
			.score_outer_2 em{color:rgb(255,102,0)}
			.score_outer_3 em{color:rgb(255,204,0)}
			.score_outer_4 em{color:rgb(51,204,0)}
			/*禁用修改头像功能*/
			.na-img-area:hover .na-edit{
				display:none;
			}
			.na-img-area{cursor:default}
			/*叹号垂直居中*/
			.error-tip{
				line-height: 1.0;
			}
			/*米号可复制*/
			.na-num{
				position: relative;
				z-index: 10;
			}
			/*解决英文被垂直遮挡*/
			.font-img-item{
				height: 42px;
			}
			/*统一颜色*/
			.color-active{
				color:rgb(255,102,0)!important;
			}
			/*tip additionals*/
			/*
			.tip, .mod_acc_tip{
				position:fixed;
				top:50%;
				left:50%;
				margin-left:-212px;
				margin-top: -266px;
				z-index:20;
			}
			*/
			.tip_h295{
				margin-top: -152px;
			}
			.tip_h424{
				margin-top: -218px;
			}
			.tip_h436{
				margin-top: -224px;
			}
			/*动态select的布局*/
			#popSetMibao .i_currentselected{
				width: auto !important;
			}
			#popSetMibao .i_selectoption{
				width: 100% !important;
			}
			#popSetMibao .set_qst li{
				width: 190px;
			}
			#popSetMibao .set_qst label{
				/*height: 22px;*/
				width: 185px;
			}
			#popAnswerMibao .set_qst label{
				height: 22px;
				width:175px;
				display: block;
			}
			#popAnswerMibao .set_qst li{
				height: 60px;
			}
			/*显示和隐藏备用手机*/
			#popManageTokenStatus dd .no_fb_mobile{	
				display: block;
			}
			#popManageTokenStatus dd .fb_mobile{
				display: none;
			}
			#popManageTokenStatus .has_fb_mobile .no_fb_mobile{
				display: none;
			}
			#popManageTokenStatus .has_fb_mobile .fb_mobile{
				display: block;
			}
			/*popup的遮层*/
			.popup_mask .mod_wrap{
				height: 100%;
				overflow-y: auto;
				position: absolute;
				width: 100%;
				z-index: 1;
			}
			.popup_mask .mod_acc_tip{
				display:none;
				position:absolute;
				left:50%;
				margin-left:-206px;
				top:50%;
				margin-top:-187px;
				_top: 500px;
			}
			/*某些要在前面的对话框*/
			.callable{
				z-index: 200;
			}
			/*vertically center*/
			#popSetMibao, #popAnswerMibao, #popManageTokenStatus, #popManageTokenKeys{
				top:0;
				margin-top: 0;
			}
			/*下拉框限高*/
			.i_selectoption {
				height: 150px;
			}
			/*已完成安装*/
			#popManageTokenDownload .tip_btns .installed{
				display:inline-block;
			}
			#popManageTokenDownload .tip_btns .goback{
				display:none;
			}
			#popManageTokenDownload .token_enabled .installed{
				display:none;
			}
			#popManageTokenDownload .token_enabled .goback{
				display:inline-block;
			}
			/*IE6*/
			#popUpdatePassword .capt_box{
				display: none;
			}
			/*sms not sent*/
			#sms-unsent{
				width:100%;
				height:100%;
				position:fixed;
				_position:absolute;
				left:0;
				top:0;
				z-index:10000;
				display:none;
			}
			#sms-unsent .bg{
				width:100%;
				height:100%;
				position:absolute;
				left:0;
				top:0;
				z-index:-1;
				filter:alpha(opacity=70);
				-moz-opacity:.7;
				opacity:.7;
				background-color:#aaa;
			}
			#sms-unsent .msg-box{
				width:560px;
				height:200px;
				position:absolute;
				left:50%;
				top:50%;
				margin-left:-280px;
				margin-top:-100px;
				background-color:#fff;
			}
			#sms-unsent .msg-box .text{
				position:absolute;
				text-align:center;
				top:56px;
				font-size:18px;
				color:#585858;
				width:500px;
			}
			#sms-unsent .msg-box .button{
				position:absolute;
				text-align:center;
				top:100px;
				width:120px;
				height:40px;
				color:#333;
				border:1px solid #dadada;
				left:50%;
				margin-left:-61px;
				cursor:pointer;
				line-height:40px;
				font-size:16px;
				-webkit-border-radius:1px;
				-moz-border-radius:1px;
				border-radius:1px;
			}
			/*干掉该死的IE6的遮罩问题*/
			#loadingMask .bkc{
				_height:2000px;
			}
			/*wap*/
			.bugfix_ie6,
			.n-account-area-box{ display:block;}	
			/*hide default options*/
			.def-opt{
				display: none;
			}
			#popEnterNewPhone{
				margin-top:-250px;
			}
			.del-account-deny h4{
			  font-size:14px;
			  font-weight:normal;
			}
			.del-account-deny-content{
			  list-style:disc;
			  font-fize:14px;
			}
			.del-account-deny-content  li{
			  list-style:disc;
			  font-fize:14px;
			}
		</style>
		<style type="text/css" media="print">
			.n-logo-area .logout,
			.n-account-area,
			.n-frame,
			.n-main-nav,
			.n-footer{display : none; }
		</style>
	</head>
	<body class="zh_CN">
		<div class="popup_mask" style="display:none;" id="loadingMask">
			<div class="bkc"></div>
			<div class="mod_wrap loadingmask">
			</div>
		</div>
		<div class="wrapper blockimportant">
			<div class="wrap">
				<div class="layout bugfix_ie6 dis_none">
					<div class="n-logo-area clearfix">
						<a href="/" class="fl-l">
						  <img src="./Images/n-logo.png" srcset="./Images/n-logo.png"/>
						</a>			
						<a id="logoutLink" class="fl-r logout" 
						  href="/pass/logout?userId=1107036499&callback=https://account.xiaomi.com">
						  退出
						</a>
						<script>
							setTimeout(function(){
								if(location.hostname === 'account.xiaomi.com'){return;}
								var link = document.getElementById('logoutLink');
								if(link){
									var href = link.getAttribute('href');
									var a = document.createElement('a');
									a.setAttribute('href','/');
									var homeURL = a.href;
									href = href.replace(/\&callback\=.*$/, '&callback=' + homeURL);
									link.setAttribute('href', href);
									a = null;
								}
							},100);
						</script>
					</div>
				  
					<!--头像 名字-->
					<div class="n-account-area-box">
						<div class="n-account-area clearfix">
							<div class="na-info">
								<p class="na-name" style="color:#999;font-weight:normal;">礼券</p>
								<p class="na-num">1107036499</p>
							</div>
							<div class="na-img-area fl-l">
									<!--na-img-bg-area不能插入任何子元素-->
								<div class="na-img-bg-area">
									<img src="./Images/qq.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="sms-unsent">
					<div class="bg"></div>
					<div class="msg-box">
						<div class="text">短信发送失败，请稍后再试！ </div>
						<div class="button">确定</div>
					</div>
				</div>
				<div class="layout">
					<div class="n-main-nav clearfix">
						<ul>
							<li class="current">
								<a href="../xiaomizhanghao/personinofa.html" title="帐号安全">帐号安全</a>
								<em class="n-nav-corner"></em>
							</li>
							<li>
								<a href="../gerenxinxi/gerenxinxi.html" title="个人信息">个人信息</a>
								<em class="n-nav-corner"></em>
							</li>
							<!--<li>
								<a href="">登录设备</a>
								<em class="n-nav-corner"></em>
							</li>-->
							<li>
								<a href="/pass/auth/sns/home" title="绑定授权">绑定授权</a>
								<em class="n-nav-corner"></em>
							</li>
							<li>
								<a href="/pass/auth/services/home" title="小米服务">小米服务</a>
								<em class="n-nav-corner"></em>
							</li>
						</ul>
					</div>
					<div class="n-frame">
						<div class="title-item title_security_wap">
							<h4 class="title-big dis-inb">安全等级</h4>
							<em class="space6"></em>
							<p class="font-normal dis-inb wap_colb2"><em class="light-num" style="padding:0">
								<span class="score_1">50</span>		
								</em>分
							</p>
							<div class="slider-area dis-inb vert-m" style="width:360px;">
								<div class="slider-bar-bg"></div>
								<div class="slider-bar-line score_bg_1" style="width:50%;"></div>
								<em class="drag-ico" style="left:50%"></em>
							</div>
							<p class="font-normal dis-inb security_level_txt">		  
								<span class="score_outer_1">存在<em class="light-num">2</em>项风险</span>
							</p>
						</div>
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
								<div class="ada-btn-area" id="btnUpdatePassword">
								  <a __href="/pass/changePassword?userId=1107036499" class="n-btn">修改</a>
								</div>
							</li>
							<li id="changeEmail" class="click-row">
								<div class="font-img-item clearfix">
									<em class="fi-ico fi-ico-email"></em>
									<p class="title-normal dis-inb">安全邮箱</p>
									<span class="warning-tip">&nbsp;</span>
									<span class="title-normal wap-desc">
										<span class="color-active">未绑定</span>	
									</span>
									<p class="font-default color-active">安全邮箱将可用于登录小米帐号和重置密码，建议立即设置</p>
									<i class="arrow_r"></i>				
								</div>
								<div class="ada-btn-area" id="btnUpdateEmail">
																	<!--无地址-->
									<a __href="/pass/bindAddress?userId=1107036499&type=EM&replace=false&address=" class="n-btn">绑定</a>
										
								</div>
							</li>
							<li id="changeMobile" class="click-row">
								<div class="font-img-item clearfix">
									<em class="fi-ico fi-ico-phone"></em>
									<p class="title-normal dis-inb">安全手机</p>			
									<span class="title-normal wap-desc">
								
										135******57<span class="ph_list_sum phone-list-sum" data-title="等<span class='ff6'>{phsum}</span>个"></span>

									</span>
									<div class="wap-info">
										135******57
									</div>
									<p class="font-default">安全手机可以用于登录小米帐号，重置密码或其他安全验证</p>
									<i class="arrow_r"></i>
								</div>
								<div class="ada-btn-area" id="btnUpdatePhone">
									<a class="n-btn btnBindMobile" __href="/pass/bindAddress?userId=1107036499&type=PH&replace=false" class="n-btn" data-mode="add">
									绑定
									</a>
								
									<a class="n-btn btnChangeMobile" __href="/pass/bindUserAddress?userId=1107036499&type=PH" class="n-btn" data-mode="update">
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
									<span class="title-normal wap-desc color-active">未设置</span>	
									<i class="arrow_r"></i>				
								</div>
								<div class="ada-btn-area" id="btnSetMibao">
									<a id="mibao_link" __href="https://sq.id.mi.com/setQuestion?userId=1107036499&_locale=zh_CN" class="n-btn">设置</a>
										 
								</div>
							</li>
						</ul>
						<!--
						<div class="title-item">
						  <h4 class="title-big dis-inb">
								
									 
						  </h4>
						</div>
						-->
					</div>
					<div class="n-frame device_recommend" >
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
									<a __href="/pass/2StepLogin/explain?userId=1107036499" class="n-btn">开启</a>   
								</div>
							</li>
						</ul>
					</div>
					<div class="n-frame dis_none_pc">
						<div class="title-item title_security_wap">
							<h4 class="title-big dis-inb">其他</h4>
						</div>
						<ul class="device-detail-area">
							<li>
								<div class="font-img-item clearfix">
									<em class="fi-ico fi-ico-info"></em>
									<p class="title-normal dis-inb">修改个人资料</p>
									<span class="title-normal wap-desc"></span>
									<i class="arrow_r"></i>
									<a class="pos_opc" href="/pass/auth/profile/home">修改个人资料</a>
								</div>
							</li>
							<li>
								<div class="font-img-item clearfix">
									<em class="fi-ico fi-ico-auth"></em>
									<p class="title-normal dis-inb">绑定授权</p>
									<span class="title-normal wap-desc"></span>
									<i class="arrow_r"></i>
									<a class="pos_opc" href="/pass/auth/sns/home">绑定授权</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="logout_wap">
						<a class="btnadpt bg_white" href="/pass/logout?userId=1107036499&callback=https://account.xiaomi.com">退出</a>
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
					|<li><a class="a_critical" href="http://static.account.xiaomi.com/html/faq/faqList.html" target="_blank"><em></em>常见问题</a></li>
				</ul>
			</div>
			<p class="nf-intro">
				<span>小米公司版权所有-京ICP备10046444-<a class="beianlink beian-record-link" target="_blank"><span></span>京公网安备11010802020134号</a>-京ICP证110507号</span>
			</p>
		</div>
		<script src="https://account.xiaomi.com/static/res/6941994/passport/scripts/jquery-1.8.3.min.js"></script>
		<script src="https://account.xiaomi.com/static/res/64371/scripts/common/more/placeholder.js"></script>
		<script>
			$(function(){
				  //语言部分
				var locale="zh_CN";
				if(locale!=='zh_CN' && locale!=='zh_TW' && locale!=='en'){
					locale=locale.indexOf("zh")!==-1?"zh_TW":"en";
				}
				var list=$(".lang-select-li");
				list.each(function(index,item){
					if($(this).data("lang")===locale){
					  $(this).addClass("current");
					}
				});
				list.bind("click",function(){
					var selectLocale=$(this).data("lang");
					var params=location.search.substring(1).split("&");
					if(locale!==selectLocale){
						for(var i=0;i<params.length;i++){
							if(params[i].indexOf("_locale=")===0){
								params.splice(i,1);i--;
							}
						}
						  params.push("_locale="+selectLocale);
						  location.href=("//"+location.host+location.pathname+"?"+params.join("&")+location.hash);
					}
				});
				  /*不知道是什么功能部分
				  if($(window).innerWidth() <= 640 && (!/AppName\/[0-9\.]+$/.test(navigator.userAgent) || navigator.standalone)){
					$('.n-footer').show();
				  }*/
				  /*备案链接上的图片*/
				var recordLink=$('.beian-record-link');
				var beianRecordLink="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134";
				var beianRecordImg="https://account.xiaomi.com/static/res/9204d06/account-static/respassport/acc-2014/img/ghs.png";
				var default1px_gif="data:image/gif;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICVAEAOw==";
				if(recordLink && beianRecordLink){
					recordLink[0].href=beianRecordLink;
				}
				var _img=new Image();
				var _span=$('.beian-record-link span');
				if(_span){
					_img.onload=_img.oncomplete=function(){
						 _img._loaded=true;
						 _span.append(_img);
					}
					setTimeout(function(){
					  if(!_img._loaded && default1px_gif){
						_img.src=default1px_gif;
					  }
					},1000);
					_img.src=beianRecordImg;
				}

				  /*url 转义*/
				function  encodeURLparam(links,param){
					$(links).each(function(index,item){
						if((item.search+"").indexOf(param)!==-1){
							//分解参数，encode value
							var params=item.search.substring(1).split("&");
							for(var i=0;i<params.length;i++){

							  if( (params[i]+"").indexOf(param+"=")===0 ){
								params.splice(i,1, param+"="+encodeURIComponent( (params[i]+"").substring(param.length+1) ) );

								item.search=params.join("&")
							  }

							}
						}
					})
				 }
				 encodeURLparam(document.links,'externalId')
			});
		</script>

		<!--TIPS s-->
		<!-- 修改密码 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div id="popUpdatePassword" class="mod_acc_tip" style="display:none;">
					<div class="mod_tip_hd">
						<h4>修改密码</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="modify_pwd">
							<dl>
								<dt>原密码</dt>
								<dd class="grpOldPass">
									<label class="labelbox"><input class="oldPass" type="password" placeholder="输入原密码" autocomplete="off" disableautocomplete></label>
									<!-- 错误信息提示 -->
									<div class="wng_pwd err_tip err_tip_independ" style="display:none;">原密码不正确</div>
									<div class="empty_pwd err_tip err_tip_independ" style="display:none;">原密码不能为空</div>
								</dd>
								<dt>新密码</dt>
								<dd class="grpNewPass">
									<label class="labelbox"><input class="newPass" type="password" placeholder="输入新密码" autocomplete="off" disableautocomplete></label>
									<label class="labelbox"><input class="newPass2" type="password" placeholder="重复新密码" autocomplete="off" disableautocomplete></label>
									<!-- 错误信息显示时隐藏 -->
									<div class="pwd_mismatch err_tip_independ err_tip" style="display:none;">两次输入的新密码不一致</div>
									<!-- 错误信息显示时隐藏 -->
									<div class="empty_pwd err_tip_independ err_tip" style="display:none;">新密码不能为空</div>
									<!-- 错误信息显示时隐藏 -->
									<div class="empty_pwd2 err_tip_independ err_tip" style="display:none;">请重复新密码</div>
									<!-- 错误信息显示时隐藏 -->
									<div class="pwd_fmt err_tip_independ err_tip" style="display:none;">密码长度8~16位，其中数字，字母和符号至少包含两种</div>
									<!-- 错误信息显示时隐藏 -->
									<div class="same_pwd err_tip_independ err_tip" style="display:none;">不能与原密码相同</div>
									<!-- 错误信息显示时隐藏 -->
									<div class="too_much err_tip_independ err_tip" style="display:none;">您的操作频率过快，请稍后再试。</div>
									<!-- 错误信息显示时隐藏 -->
									<div class="eq_email err_tip_independ err_tip" style="display:none;">密码不能与邮箱相同</div>
									<div class="pwd_in_black err_tip_independ err_tip" style="display:none;">您的密码可能存在安全风险，请您重新设置一个全新的密码</div>
									<!-- 错误信息提示去掉class=txt_tip -->
									<div class="txt_tip">密码长度8~16位，其中数字，字母和符号至少包含两种</div>		

									<div style="display:none;" class="sys_err err_tip err_tip_independ">系统错误。错误码：<span class="err_code"></span></div>						
								</dd>
								<!--3次后弹出-->
								<dl class="capt_box" style="display:none;">
									<span></span>
									<dt>验证码</dt>
									<dd class="inputcode">
										<label class="labelbox chkcode"><input type="text" placeholder="输入验证码" autocomplete="off" disableautocomplete></label>
										<img class="chkcode_img" alt="">
										<a href="" title="换一张" class="next_capt hidden">换一张</a>
									</dd>
									<div style="display:none;" class="wng_capt err_tip err_tip_independ">验证码不正确，请重新输入</div>
									<div style="display:none;" class="empty_capt err_tip err_tip_independ">验证码不能为空</div>
								</dl>
							</dl>				
						</div>
						<div class="tip_btns">
							<a class="btn_tip btn_commom btnOK" href="" title="确定">确定</a>
							<a class="btn_tip btn_back btnCancel" href="" title="取消">取消</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 修改密码 e -->
		<!-- 修改密码成功 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popUpdatePasswordSuccess" style="display:none">
					<div class="mod_tip_hd">
						<h4>修改密码</h4>
						<a class="btn_mod_close" href="" onclick="javascript:void location.reload(true);" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="wapbox">
							<div class="t_c mar30">
								<div class="txt_ff6"><em class="acctip_icon acctip_icon_2"></em>成功修改密码</div>							
							</div>
							<div class="t_c mar30">			
								<p><span class="logoutCountdown"></span> 秒后自动登出，请重新登录</p>							
							</div>
						</div>
						<div class="tip_btns wap_btn_abs">
							<a class="btn_tip btn_commom btnReturn" href="/" title="立即重新登录">立即重新登录</a>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 修改密码成功 e -->

		<!-- 绑定手机发送验证码 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popVerifyMobile" style="display:none;">
					<div class="mod_tip_hd">
						<h4>安全验证</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="disten30x103">
							<h6>我们向您的手机 <em>135******57</em> 发送了一条验证短信</h6>
							<div class="mod inputsend">
								<label class="input_bg"><input class="remain_input" type="text" placeholder="请输入验证码"></label>
								<span class="remain">
									<a title="重新发送" class="resend">重新发送</a>
									<!--<tt style="display:none;">30秒</tt>-->
								</span>					
							</div>
						</div>				
						<div class="tip_btns">
							<a class="btn_tip btn_commom" href="" title="确定">确定</a>
							<a class="btn_tip btn_back" href="" title="取消">取消</a>
						</div>
						<div class="txt_qst"><em class="icon_qst"></em>
							<a href="http://static.account.xiaomi.com/html/faq/faqSMSerror.html" target="_blank" title="我为何收不到验证码？">我为何收不到验证码？</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 绑定手机发送验证码 e -->
		<!-- phonePanel s-->
		<div class="popup_mask callable">
			<div class="bkc"></div>
			<div class="mod_acc_tip" id="phonePanel" style="display:none">
				<div class="mod_tip_hd">
					<h4>
						修改安全手机
					</h4>
					<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
				</div>
				<div class="mod_tip_bd">
					<div class="phone-panel-main">
						<div class="ph_panel_tit phone-panel-main-title">
							请选择您要修改的手机号码
						</div>
						<div class="ph_list_panel phone-panel-list">
							<ul class="phone_panel_list_con md_way">
							</ul>
						</div>
						<div class="tip_btns phone-panel-main-button">
							<a class="btn_tip btn_commom" data-action="update">修改号码</a>
							<a class="btn_tip btn_back" data-action="delete">删除号码</a>
						</div>
					</div>
					<div class="ph_del_panel phone-panel-del" style="display:none">
						<div data-title-tpl="确认要删除绑定手机<span class='ff6'>{phone}</span>吗" class="ph_del_tit phone-panel-del-title">
						</div>
						
						<p><i class="icon_tanhao"></i>删除后将无法使用此手机登录小米帐号</p>
						<div class="ph_del_box">
							<p>请输入完整的手机号：</p>
							<div class="inputbg fill_center_box">
								<span class="phone-blank-prefix"></span>
								<label class="labelbox del_ph_lbx"><input type="text" name="delphone"></label>
								<span class="phone-blank-suffix"></span>
							</div>
						</div>
						<div class="err_tip">
							<em class="icon_error"></em><span class="del-error"></span>
						</div>
						<div class="tip_btns phone-panel-del-button">
							<a class="btn_tip btn_commom" data-action="delete">确定</a>
							<a class="btn_tip btn_back" data-action="cancel">取消</a>
						</div>
					</div>
					<div class="ph_del_success phone-panel-del-success" style="display:none">
						<div class="ph_del_tit t_c">成功删除绑定手机<span class="ff6 del-ph-num"></span></div>
						<div class="tip_btns wap_btn_abs">
							<a class="btn_tip btn_commom" data-action="success">完成</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- phonePanel e-->
		<!-- 绑定安全手机 s -->
		<div class="popup_mask callable">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popEnterNewPhone" style="display:none">
					<div class="mod_tip_hd">
						<h4>
							修改安全手机	
						</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="tabbar_panel">
							<div class="tabbar">
								<div class="tab_opt c_b">
								<!--
									<span>安全确认</span>
								-->
									<!-- 选中添加class为now -->
									<span class="phonetab1 now">输入新手机</span>
									<span class="phonetab2">验证新手机</span>
									<span class="phonetab3 end">完成</span>
								</div>
								<div class="tabline c_b">
									<i class="now"></i>
									<i></i>					
									<i class="end"></i>
								</div>
							</div>
						</div>
						<div class="wapbox">
							<dl class="binding phonestep1">
								<dt>请输入安全手机号码</dt>
								<dd class="zindex_4">
									<div class="tits set_qst_tit">
										<p class="c_b"><span>中国</span><em>+86</em></p>
										<i class="icon_cirarr"></i>
									</div>
									<div class="country-container set_qst_list">
										<div class="select_panel">
											<h6>热门</h6>
											<p _code="+86" class="chk">中国</p>
											<p _code="+853">中国澳门</p>
											<p _code="+886">台湾</p>
											<p _code="+852">中国香港</p>
											<p _code="+65">Singapore</p>
											<p _code="+91">India</p>
											<p _code="+62">Indonesia</p>
											<h6>A</h6>
											<p _code="+93">Afghanistan</p>
											<p _code="+355">Albania</p>
											<p _code="+213">Algeria</p>
											<p _code="+1684">American Samoa</p>
											<p _code="+376">Andorra</p>
											<p _code="+244">Angola</p>
											<p _code="+1264">Anguilla</p>
											<p _code="+1268">Antigua and Barbuda</p>
											<p _code="+599">Netherlands Antilles</p>
											<p _code="+54">Argentina</p>
											<p _code="+374">Armenia</p>
											<p _code="+297">Aruba</p>
											<p _code="+247">Ascension Island</p>
											<p _code="+61">Australia</p>
											<p _code="+43">Austria</p>
											<p _code="+994">Azerbaijan</p>
											<h6>B</h6>
											<p _code="+1242">Bahamas</p>
											<p _code="+973">Bahrain</p>
											<p _code="+880">Bangladesh</p>
											<p _code="+375">Belarus</p>
											<p _code="+32">Belgium</p>
											<p _code="+501">Belize</p>
											<p _code="+229">Benin</p>
											<p _code="+1441">Bermuda</p>
											<p _code="+975">Bhutan</p>
											<p _code="+591">Bolivia</p>
											<p _code="+387">Bosnia and Herzegovina</p>
											<p _code="+267">Botswana</p>
											<p _code="+55">Brazil</p>
											<p _code="+1284">British Virgin Islands</p>
											<p _code="+673">Brunei</p>
											<p _code="+359">Bulgaria</p>
											<p _code="+226">Burkina Faso</p>
											<p _code="+257">Burundi</p>
											<h6>C</h6>
											<p _code="+855">Cambodia</p>
											<p _code="+237">Cameroon</p>
											<p _code="+1">Canada</p>
											<p _code="+238">Cape Verde</p>
											<p _code="+599">Caribbean Netherlands</p>
											<p _code="+1345">Cayman Islands</p>
											<p _code="+236">Central African Republic</p>
											<p _code="+235">Chad</p>
											<p _code="+56">Chile</p>
											<p _code="+61">Christmas Island</p>
											<p _code="+86">China</p>
											<p _code="+61">Cocos Islands</p>
											<p _code="+506">Costa Rica</p>
											<p _code="+57">Colombia</p>
											<p _code="+269">Comoros</p>
											<p _code="+682">Cook Islands</p>
											<p _code="+242">Republic of the Congo</p>
											<p _code="+243">Democratic Republic of Congo</p>
											<p _code="+506">Costa Rica</p>
											<p _code="+385">Croatia</p>
											<p _code="+53">Cuba</p>
											<p _code="+357">Cyprus</p>
											<p _code="+420">Czech Republic</p>
											<h6>D</h6>
											<p _code="+45">Denmark</p>
											<p _code="+253">Djibouti</p>
											<p _code="+1767">Dominica</p>
											<p _code="+1">Dominican Republic</p>
											<h6>E</h6>
											<p _code="+670">East Timor</p>
											<p _code="+593">Ecuador</p>
											<p _code="+20">Egypt</p>
											<p _code="+503">El Salvador</p>
											<p _code="+240">Equatorial Guinea</p>
											<p _code="+291">Eritrea</p>
											<p _code="+372">Estonia</p>
											<p _code="+251">Ethiopia</p>
											<h6>F</h6>
											<p _code="+298">Faro Islands</p>
											<p _code="+500">Falkland Island</p>
											<p _code="+679">Fiji</p>
											<p _code="+358">Finland</p>
											<p _code="+33">France</p>
											<h6>G</h6>
											<p _code="+241">Gabon</p>
											<p _code="+220">Gambia</p>
											<p _code="+995">Georgia</p>
											<p _code="+49">Germany</p>
											<p _code="+233">Ghana</p>
											<p _code="+350">Gibraltar</p>
											<p _code="+30">Greece</p>
											<p _code="+299">Greenland</p>
											<p _code="+1473">Grenada</p>
											<p _code="+590">Guadeloupe</p>
											<p _code="+1671">Guam</p>
											<p _code="+502">Guatemala</p>
											<p _code="+224">Guinea</p>
											<p _code="+245">Guinea-Bissau</p>
											<p _code="+592">Guyana</p>
											<h6>H</h6>
											<p _code="+509">Haiti</p>
											<p _code="+504">Honduras</p>
											<p _code="+852">Hong Kong</p>
											<p _code="+36">Hungary</p>
											<h6>I</h6>
											<p _code="+354">Iceland</p>
											<p _code="+98">Iran</p>
											<p _code="+964">Iraq</p>
											<p _code="+353">Ireland</p>
											<p _code="+972">Israel</p>
											<p _code="+39">Italy</p>
											<p _code="+225">Ivory Coast</p>
											<h6>J</h6>
											<p _code="+1876">Jamaica</p>
											<p _code="+81">Japan</p>
											<p _code="+44">Jersey</p>
											<p _code="+962">Jordan</p>
											<h6>K</h6>
											<p _code="+7">Kazakhstan</p>
											<p _code="+254">Kenya</p>
											<p _code="+381">Kosovo</p>
											<p _code="+965">Kuwait</p>
											<p _code="+996">Kyrgyzstan</p>
											<h6>L</h6>
											<p _code="+856">Laos</p>
											<p _code="+371">Latvia</p>
											<p _code="+961">Lebanon</p>
											<p _code="+266">Lesotho</p>
											<p _code="+231">Liberia</p>
											<p _code="+218">Libya</p>
											<p _code="+423">Liechtenstein</p>
											<p _code="+370">Lithuania</p>
											<p _code="+352">Luxembourg</p>
											<h6>M</h6>
											<p _code="+853">Macau</p>
											<p _code="+389">Macedonia</p>
											<p _code="+261">Madagascar</p>
											<p _code="+265">Malawi</p>
											<p _code="+60">Malaysia</p>
											<p _code="+960">Maldives</p>
											<p _code="+223">Mali</p>
											<p _code="+356">Malta</p>
											<p _code="+692">Marshall Islands</p>
											<p _code="+596">Martinique</p>
											<p _code="+222">Mauritania</p>
											<p _code="+230">Mauritius</p>
											<p _code="+269">Mayotte</p>
											<p _code="+52">Mexico</p>
											<p _code="+373">Moldova</p>
											<p _code="+377">Monaco</p>
											<p _code="+382">Montenegro</p>
											<p _code="+976">Mongolia</p>
											<p _code="+1664">Montserrat</p>
											<p _code="+212">Morocco</p>
											<p _code="+258">Mozambique</p>
											<p _code="+95">Myanmar</p>
											<h6>N</h6>
											<p _code="+264">Namibia</p>
											<p _code="+674">Nauru</p>
											<p _code="+977">Nepal</p>
											<p _code="+31">Netherlands</p>
											<p _code="+687">New Caledonia</p>
											<p _code="+64">New Zealand</p>
											<p _code="+505">Nicaragua</p>
											<p _code="+227">Niger</p>
											<p _code="+234">Nigeria</p>
											<p _code="+850">North Korea</p>
											<p _code="+47">Norway</p>
											<h6>O</h6>
											<p _code="+968">Oman</p>
											<h6>P</h6>
											<p _code="+92">Pakistan</p>
											<p _code="+680">Palau</p>
											<p _code="+970">Palestine</p>
											<p _code="+507">Panama</p>
											<p _code="+675">Papua New Guinea</p>
											<p _code="+595">Paraguay</p>
											<p _code="+51">Peru</p>
											<p _code="+63">Philippines</p>
											<p _code="+48">Poland</p>
											<p _code="+351">Portugal</p>
											<p _code="+1">Puerto Rico</p>
											<h6>Q</h6>
											<p _code="+974">Qatar</p>
											<h6>R</h6>
											<p _code="+262">Reunion</p>
											<p _code="+40">Romania</p>
											<p _code="+7">Russia</p>
											<p _code="+250">Rwanda</p>
											<h6>S</h6>
											<p _code="+590">Saint Barthelemy</p>
											<p _code="+685">Samoa</p>
											<p _code="+1869">Saint Kitts and Nevis</p>
											<p _code="+1758">Saint Lucia</p>
											<p _code="+590">Saint Martin</p>
											<p _code="+378">San Marino</p>
											<p _code="+239">Sao Tome and Principe</p>
											<p _code="+966">Saudi Arabia</p>
											<p _code="+221">Senegal</p>
											<p _code="+381">Serbia</p>
											<p _code="+248">Seychelles</p>
											<p _code="+232">Sierra Leone</p>
											<p _code="+421">Slovakia</p>
											<p _code="+599">Sint Maarten</p>
											<p _code="+421">Slovakia</p>
											<p _code="+386">Slovenia</p>
											<p _code="+677">Solomon Islands</p>
											<p _code="+252">Somalia</p>
											<p _code="+27">South Africa</p>
											<p _code="+82">South Korea</p>
											<p _code="+34">Spain</p>
											<p _code="+94">Sri Lanka</p>
											<p _code="+249">Sudan</p>
											<p _code="+597">Suriname</p>
											<p _code="+47">Svalbard and Jan Mayen</p>
											<p _code="+268">Swaziland</p>
											<p _code="+46">Sweden</p>
											<p _code="+41">Switzerland</p>
											<p _code="+963">Syria</p>
											<h6>T</h6>
											<p _code="+886">Taiwan</p>
											<p _code="+992">Tajikistan</p>
											<p _code="+255">Tanzania</p>
											<p _code="+66">Thailand</p>
											<p _code="+670">Timor-Leste</p>
											<p _code="+228">Togo</p>
											<p _code="+690">Tokelau</p>
											<p _code="+1868">Trinidad and Tobago</p>
											<p _code="+216">Tunisia</p>
											<p _code="+90">Turkey</p>
											<p _code="+993">Turkmenistan</p>
											<p _code="+688">Tuvalu</p>
											<h6>U</h6>
											<p _code="+256">Uganda</p>
											<p _code="+256">Uganda</p>
											<p _code="+380">Ukraine</p>
											<p _code="+971">United Arab Emirates</p>
											<p _code="+44">United Kingdom</p>
											<p _code="+1">United States</p>
											<p _code="+1340">United States Virgin Islands</p>
											<p _code="+598">Uruguay</p>
											<p _code="+998">Uzbekistan</p>
											<h6>V</h6>
											<p _code="+678">Vanuatu</p>
											<p _code="+379">Vatican City</p>
											<p _code="+58">Venezuela</p>
											<p _code="+84">Vietnam</p>
											<h6>W</h6>
											<p _code="+681">Wallis and Futuna</p>
											<p _code="+212">Western Sahara</p>
											<h6>Y</h6>
											<p _code="+967">Yemen</p>
											<h6>Z</h6>
											<p _code="+260">Zambia</p>
											<p _code="+263">Zimbabwe</p>
										</div>
										<div class="cancel_panel">
											<div class="cancel_box">
											  <a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a>
											</div>
										</div>
									</div>
								</dd>
								<dd>
									<label class="input_bg"><input type="tel" class="new_phone" placeholder="请输入手机号码" autocomplete="off" disableautocomplete/></label>
									<input type="hidden" class="full_new_phone" value=""  autocomplete="off" disableautocomplete/>
									<div class="err_tip wng_fmt err_tip_independ" style="display:none">手机号码格式错误</div>
									<div class="err_tip empty_phone err_tip_independ" style="display:none">请输入手机号码</div>
									<div class="err_tip phone_bound err_tip_independ" style="display:none">该号码已绑定</div>
									<div class="err_tip phone_bound_elsewhere err_tip_independ" style="display:none">该号码已绑定到其它帐号上</div>
									<div class="err_tip dupl_phone err_tip_independ">安全手机不能与备用手机相同</div>
								</dd>
								<dd class="inputcode">
									<label class="input_bg chkcode"><input type="text" placeholder="请输入验证码" class="capt_box" autocomplete="off" disableautocomplete></label>
									<img class="chkcode_img" src="/pass/getCode?icodeType=antispam" _src="/pass/getCode?icodeType=antispam" alt="">
									<a class="color333 hidden" href="" title="换一张" class="new_capt hidden">换一张</a>
								</dd>
								<div class="err_tip empty_capt err_tip_independ" style="display:none">请输入验证码</div>
								<div style="display:none;" class="err_tip wng_capt err_tip_independ">验证码不正确，请重新输入</div>
								<div class="err_tip sys_err err_tip_independ" style="display:none">系统错误，请稍候再试</div>
								<div class="err_tip bad_param err_tip_independ" style="display:none">参数错误</div>
								<div class="tip_btns">
									<a class="btn_tip btn_commom" href="" title="下一步">下一步</a>					
								</div>
							</dl>	
							<dl class="verify" style="display:none">
								<div class="disten30x103 phonestep2">
									<h6 class="pb10">我们向您的手机 <em> </em>发送了一条验证短信 <br>请输入短信中的验证码</h6>
									<div class="mod inputsend">
										<label class="input_bg"><input class="phone_capt remain_input" type="text" placeholder="请输入验证码" autocomplete="off" disableautocomplete></label>
										<span class="remain">
											<a class="resend" href="javascript:void(0);" title="重新发送">重新发送</a>
										</span>					
									</div>
									<div class="err_tip empty_capt err_tip_independ" style="display:none">请输入验证码</div>
									<div class="err_tip wng_capt err_tip_independ" style="display:none;">验证码错误或已过期</div>
									<div class="err_tip phone_used err_tip_independ" style="display:none;">此手机在一段时间内绑定了过多的小米帐号，请换个手机号码试试</div>
									<div class="err_tip sms_custom err_tip_independ" style="display:none;">
										<div class="text"></div>
									</div>
									<div class="err_tip quota_tip" id="quotaTextLabel">您今天还能发送
										<b style="display:inline;font-weight:normal;" id="quotaLabel"></b>条短信
									</div>
								</div>				
								<div class="tip_btns">
									<a class="btn_tip btn_commom" href="" title="确定">确定</a>
									<a class="btn_tip btn_back" href="" title="取消">取消</a>
								</div>
								<div class="txt_qst"><em class="icon_qst"></em>
									<a target="_blank" href="http://static.account.xiaomi.com/html/faq/faqSMSerror.html" title="我为何收不到验证码？">我为何收不到验证码？</a>
								</div>
							</dl>
							<dl style="display:none" class="success">
								<div class="t_c">
									<h4>
											您已成功修改安全手机！
									</h4>
								</div>
								<div class="tip_btns wap_btn_abs">
									<a class="btn_tip btn_commom" href="" title="返回我的帐号">返回我的帐号</a>					
								</div>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 绑定安全手机 e -->
		<!-- 绑定安全邮箱 s -->
		<div class="popup_mask callable">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popEnterNewEmail" style="display:none;">
					<div class="mod_tip_hd">
						<h4>
							绑定安全邮箱
						</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="tabbar_panel">
							<div class="tabbar">
								<div class="tab_opt c_b">
									<!-- 选中添加class为now -->
									<span class="mailtab1 now">输入新邮箱</span>
									<span class="mailtab2">验证新邮箱</span>
									<span class="mailtab3 end">完成</span>
								</div>
								<div class="tabline c_b">
									<i class="now"></i>
									<i></i>
									<i class="end"></i>
								</div>
							</div>
						</div>
						<div class="wapbox">
							<dl class="binding mailstep1">
								<dt>请输入新的安全邮箱地址</dt>					
								<dd>
									<label class="input_bg"><input type="text" placeholder="请输入邮箱" class="new_email" autocomplete="off" disableautocomplete></label>
								</dd>
								<div class="err_tip wng_fmt err_tip_independ" style="display:none">邮箱格式错误</div>
								<div class="err_tip empty_email err_tip_independ" style="display:none">请输入邮箱地址</div>
								<div class="err_tip email_bound err_tip_independ" style="display:none">该邮箱地址已绑定</div>
								<div class="err_tip email_bound_elsewhere err_tip_independ" style="display:none">该邮箱地址已被其他帐号绑定</div>
								<div class="err_tip bad_param err_tip_independ" style="display:none">参数错误</div>
								<dd class="inputcode">
									<label class="input_bg chkcode"><input type="text" placeholder="请输入验证码" class="capt_box" autocomplete="off" disableautocomplete></label>
									<img class="chkcode_img" src="/pass/getCode?icodeType=antispam" _src="/pass/getCode?icodeType=antispam" alt="">
									<a class="color333 hidden" href="" title="换一张">换一张</a>
								</dd>
								<div style="display:none;" class="err_tip empty_capt err_tip_independ">请输入验证码</div>
								<div style="display:none;" class="err_tip wng_capt err_tip_independ">验证码不正确，请重新输入</div>
								<div class="err_tip sys_err err_tip_independ" style="display:none">系统错误，请稍候再试</div>
								<div class="tip_btns">
									<a class="btn_tip btn_commom" href="" title="下一步">下一步</a>					
								</div>
							</dl>
							<dl class="verify" style="display:none;">	
								<div class="disten30x103 mailstep2">
									<h6 class="doub_ln">我们向 <em></em> 发送了验证邮件<br/>请输入邮件中的验证码</h6>				
									<div class="mod inputsend">
										<label class="input_bg"><input type="text" placeholder="请输入验证码" class="capt_box remain_input" autocomplete="off" disableautocomplete></label>
										<span class="remain">
											<a title="重新发送" class="resend">重新发送</a>
										</span>
									</div>
									<!-- 错误信息提示 -->
									<div style="display:none;" class="err_tip empty_capt err_tip_independ">请输入验证码</div>
									<div style="display:none;" class="err_tip wng_capt err_tip_independ">验证码错误或已过期</div>		
									<div style="display:none;" class="err_tip sys_err err_tip_independ">系统错误，请稍候再试</div>	
								</div>				
								<div class="tip_btns">
									<a class="btn_tip btn_commom" href="" title="确定">确定</a>
									<a class="btn_tip btn_back" href="" title="取消">取消</a>
								</div>
								<div class="txt_qst"><em class="icon_qst"></em><a target="_blank" href="http://static.account.xiaomi.com/html/faq/faqRegisterReceiveCheckNum.html" title="一直收不到验证邮件">一直收不到验证邮件</a></div>
							</dl>
							<dl style="display:none;" class="success">	
								<div class="t_c">
									<h4>
										您已成功绑定安全邮箱！
									</h4>
								</div>
								<div class="tip_btns wap_btn_abs">
									<a class="btn_tip btn_commom" href="" title="返回我的帐号">返回我的帐号</a>					
								</div>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 绑定安全邮箱 e -->
		<!-- 设置密保问题 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popSetMibao" style="display:none">
					<form id="frmSetQuestions" target="fraSetMibao" action="/pass/auth/security/setSafeQuestions" method="POST">
						<div class="mod_tip_hd">
							<h4>设置密保问题</h4>
							<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
						</div>
						<div class="mod_tip_bd">
							<div class="wapbox rember_mibaoqst">
								<h4>请牢记您的密保问题</h4>
								<div class="select-area">
									<ul class="set_mibao c_b">
										<li>
											<dl class="login-dl clearfix">
												<dd class="dd_r clearfix">
													<select class="iselect" autocomplete="off" disableautocomplete>
														<optgroup label="家属信息" _type="0">
															<option value="" _role="default" class="def-opt" selected>请选择密保问题</option>
															<option value="1" _answerTip="">您外婆的姓名</option>
															<option value="2" _answerTip="">您外公的姓名</option>
															<option value="3" _answerTip="">您爷爷的姓名</option>
															<option value="4" _answerTip="">您奶奶的姓名</option>
															<option value="5" _answerTip="">您父亲的生日</option>
															<option value="6" _answerTip="">您母亲的生日</option>
															<option value="7" _answerTip="">您父母的生日相差几年几个月</option>
														</optgroup>
														<optgroup label="学校信息" _type="1">
															<option value="8" _answerTip="">您高中三年级班主任的名字</option>
															<option value="9" _answerTip="">您小学六年级班主任的名字</option>
															<option value="10" _answerTip="">您大学时的学号</option>
															<option value="11" _answerTip="">您大学本科时的上/下铺叫什么名字</option>
															<option value="12" _answerTip="">您大学的导师叫什么名字</option>
														</optgroup>
														<optgroup label="个人信息" _type="2">
															<option value="13" _answerTip="">您父母称呼您的昵称</option>
															<option value="14" _answerTip="">您身份证号后六位</option>
															<option value="15" _answerTip="">您出生的医院名称</option>
															<option value="16" _answerTip="">您最好的朋友叫什么名字</option>
														</optgroup>
														<optgroup label="各种第一次" _type="3">
															<option value="17" _answerTip="">您第一个宠物的名字</option>
															<option value="18" _answerTip="">您的第一任男朋友/女朋友姓名</option>
															<option value="19" _answerTip="">您第一家任职的公司名字</option>
														</optgroup>
														<optgroup label="婚姻相关" _type="4">
															<option value="20" _answerTip="">您领结婚证的日子</option>
															<option value="21" _answerTip="">您配偶的名字</option>
															<option value="22" _answerTip="">您配偶的生日</option>
														</optgroup>
													</select>
												</dd>
												<dd class="dd_l clearfix">
													<label class="input_bg"><input class="input_kuang errortip" type="text" placeholder="" autocomplete="off" disableautocomplete isrequired="true" /></label>
													<span class="error-mes err_tip err_tip_independ" style="display:block;"></span>
												</dd>
											</dl>
										</li>
										<li>
											<dl class="login-dl clearfix">
												<dd class="dd_r clearfix">
													<select class="iselect" autocomplete="off" disableautocomplete>
														<optgroup label="家属信息" _type="0">
															<option value="" _role="default" class="def-opt" selected>请选择密保问题</option>
															<option value="1" _answerTip="">您外婆的姓名</option>
															<option value="2" _answerTip="">您外公的姓名</option>
															<option value="3" _answerTip="">您爷爷的姓名</option>
															<option value="4" _answerTip="">您奶奶的姓名</option>
															<option value="5" _answerTip="">您父亲的生日</option>
															<option value="6" _answerTip="">您母亲的生日</option>
															<option value="7" _answerTip="">您父母的生日相差几年几个月</option>
														</optgroup>
														<optgroup label="学校信息" _type="1">
															<option value="8" _answerTip="">您高中三年级班主任的名字</option>
															<option value="9" _answerTip="">您小学六年级班主任的名字</option>
															<option value="10" _answerTip="">您大学时的学号</option>
															<option value="11" _answerTip="">您大学本科时的上/下铺叫什么名字</option>
															<option value="12" _answerTip="">您大学的导师叫什么名字</option>
														</optgroup>
														<optgroup label="个人信息" _type="2">
															<option value="13" _answerTip="">您父母称呼您的昵称</option>
															<option value="14" _answerTip="">您身份证号后六位</option>
															<option value="15" _answerTip="">您出生的医院名称</option>
															<option value="16" _answerTip="">您最好的朋友叫什么名字</option>
														</optgroup>
														<optgroup label="各种第一次" _type="3">
															<option value="17" _answerTip="">您第一个宠物的名字</option>
															<option value="18" _answerTip="">您的第一任男朋友/女朋友姓名</option>
															<option value="19" _answerTip="">您第一家任职的公司名字</option>
														</optgroup>
														<optgroup label="婚姻相关" _type="4">
															<option value="20" _answerTip="">您领结婚证的日子</option>
															<option value="21" _answerTip="">您配偶的名字</option>
															<option value="22" _answerTip="">您配偶的生日</option>
														</optgroup>
													</select>
												</dd>
												<dd class="dd_l clearfix">
													<label class="input_bg"><input class="input_kuang errortip" type="text" placeholder="" autocomplete="off" disableautocomplete isrequired="true" /></label>
													<span class="error-mes err_tip err_tip_independ" style="display:block;"></span>
												</dd>
											</dl>
										</li>
										<li>
											<dl class="login-dl clearfix">
												<dd class="dd_r clearfix">
													<select class="iselect" autocomplete="off" disableautocomplete>
														<optgroup label="家属信息" _type="0">
															<option value="" _role="default" class="def-opt" selected>请选择密保问题</option>
															<option value="1" _answerTip="">您外婆的姓名</option>
															<option value="2" _answerTip="">您外公的姓名</option>
															<option value="3" _answerTip="">您爷爷的姓名</option>
															<option value="4" _answerTip="">您奶奶的姓名</option>
															<option value="5" _answerTip="">您父亲的生日</option>
															<option value="6" _answerTip="">您母亲的生日</option>
															<option value="7" _answerTip="">您父母的生日相差几年几个月</option>
														</optgroup>
														<optgroup label="学校信息" _type="1">
															<option value="8" _answerTip="">您高中三年级班主任的名字</option>
															<option value="9" _answerTip="">您小学六年级班主任的名字</option>
															<option value="10" _answerTip="">您大学时的学号</option>
															<option value="11" _answerTip="">您大学本科时的上/下铺叫什么名字</option>
															<option value="12" _answerTip="">您大学的导师叫什么名字</option>
														</optgroup>
														<optgroup label="个人信息" _type="2">
															<option value="13" _answerTip="">您父母称呼您的昵称</option>
															<option value="14" _answerTip="">您身份证号后六位</option>
															<option value="15" _answerTip="">您出生的医院名称</option>
															<option value="16" _answerTip="">您最好的朋友叫什么名字</option>
														</optgroup>
														<optgroup label="各种第一次" _type="3">
															<option value="17" _answerTip="">您第一个宠物的名字</option>
															<option value="18" _answerTip="">您的第一任男朋友/女朋友姓名</option>
															<option value="19" _answerTip="">您第一家任职的公司名字</option>
														</optgroup>
														<optgroup label="婚姻相关" _type="4">
															<option value="20" _answerTip="">您领结婚证的日子</option>
															<option value="21" _answerTip="">您配偶的名字</option>
															<option value="22" _answerTip="">您配偶的生日</option>
														</optgroup>
													</select>
												</dd>
												<dd class="dd_l clearfix">
													<label class="input_bg"><input class="input_kuang errortip" type="text" placeholder="" autocomplete="off" disableautocomplete isrequired="true" /></label>
													<span class="error-mes err_tip err_tip_independ" style="display:block;"></span>
												</dd>
											</dl>
										</li>
										<li>
											<dl class="login-dl clearfix">
												<dd class="dd_r clearfix">
													<select class="iselect" autocomplete="off" disableautocomplete>
														<optgroup label="家属信息" _type="0">
															<option value="" _role="default" class="def-opt" selected>请选择密保问题</option>
															<option value="1" _answerTip="">您外婆的姓名</option>
															<option value="2" _answerTip="">您外公的姓名</option>
															<option value="3" _answerTip="">您爷爷的姓名</option>
															<option value="4" _answerTip="">您奶奶的姓名</option>
															<option value="5" _answerTip="">您父亲的生日</option>
															<option value="6" _answerTip="">您母亲的生日</option>
															<option value="7" _answerTip="">您父母的生日相差几年几个月</option>
														</optgroup>
														<optgroup label="学校信息" _type="1">
															<option value="8" _answerTip="">您高中三年级班主任的名字</option>
															<option value="9" _answerTip="">您小学六年级班主任的名字</option>
															<option value="10" _answerTip="">您大学时的学号</option>
															<option value="11" _answerTip="">您大学本科时的上/下铺叫什么名字</option>
															<option value="12" _answerTip="">您大学的导师叫什么名字</option>
														</optgroup>
														<optgroup label="个人信息" _type="2">
															<option value="13" _answerTip="">您父母称呼您的昵称</option>
															<option value="14" _answerTip="">您身份证号后六位</option>
															<option value="15" _answerTip="">您出生的医院名称</option>
															<option value="16" _answerTip="">您最好的朋友叫什么名字</option>
														</optgroup>
														<optgroup label="各种第一次" _type="3">
															<option value="17" _answerTip="">您第一个宠物的名字</option>
															<option value="18" _answerTip="">您的第一任男朋友/女朋友姓名</option>
															<option value="19" _answerTip="">您第一家任职的公司名字</option>
														</optgroup>
														<optgroup label="婚姻相关" _type="4">
															<option value="20" _answerTip="">您领结婚证的日子</option>
															<option value="21" _answerTip="">您配偶的名字</option>
															<option value="22" _answerTip="">您配偶的生日</option>
														</optgroup>
													</select>
												</dd>
												<dd class="dd_l clearfix">
													<label class="input_bg"><input class="input_kuang errortip" type="text" placeholder="" autocomplete="off" disableautocomplete isrequired="true" /></label>
													<span class="error-mes err_tip err_tip_independ" style="display:block;"></span>
												</dd>
											</dl>
										</li>
									</ul>
								</div>
								<input type="hidden" name="questions" class="form-data"/>
								<input type="hidden" name="userId" value="1107036499"/>
								<input type="hidden" name="mibao_ph" value=""/>
								<input type="hidden" name="serviceToken" value=""/>
								<div class="tl_c">
									<span class="error-mes form-error-mes err_tip err_tip_independ" style="display:none;">
									</span>
								</div>
								<div class="tip_btns wap_pb20">
									<input class="btn_tip btn_commom" title="确定" value="确定" type="submit">			
								</div>
							</div>
						</div>
					</form>
				</div>
			</div><!---->
		</div>
		<!-- 设置密保问题 e -->
		<!-- 回答设置密保问题 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popAnswerMibao" style="display:none">
					<div class="mod_tip_hd">
						<h4>设置密保问题</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="wapbox rember_mibaoqst">
							<h4>请回答您刚才设置的密保问题</h4>
							<div class="set_mibao">
								<ul class="c_b">					
									<li>
										<p></p>
										<label class="input_bg"><input type="text" autocomplete="off" disableautocomplete>
										</label>
										<span class="error-mes err_tip err_tip_independ" style="display:block;"></span>
									</li>
									<li>
										<p></p>
										<label class="input_bg"><input type="text" autocomplete="off" disableautocomplete>
										</label>
										<span class="error-mes err_tip err_tip_independ" style="display:block;"></span>
									</li>
									<li>
										<p></p>
										<label class="input_bg"><input type="text" autocomplete="off" disableautocomplete>
										</label>
										<span class="error-mes err_tip err_tip_independ" style="display:block;"></span>
									</li>
									<li>
										<p></p>
										<label class="input_bg"><input type="text" autocomplete="off" disableautocomplete>
										</label>
										<span class="error-mes err_tip err_tip_independ" style="display:block;"></span>
									</li>					
								</ul>
								<div class="tl_c">
									<span class="error-mes form-error-mes err_tip err_tip_independ" style="display:block;">
									</span>
								</div>	
							</div>				
						</div>
						<div class="tip_btns">
							<a class="btn_tip btn_commom" href="" title="确定">确定</a>
							<a class="btn_tip btn_back" href="" title="重设">重设</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 回答设置密保问题 e -->
		<!-- 设置密保成功 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popFinishMibao" style="display:none">
					<div class="mod_tip_hd">
						<h4>设置密保问题</h4>
						<a class="btn_mod_close" href="" onclick="(function(){location.hash='#';location.reload(true);})();" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">			
						<div class="t_c wapbox mar30">
							<div class="txt_ff6"><em class="acctip_icon acctip_icon_2"></em>您已成功设置密保问题！</div>						
						</div>
						
						<div class="tip_btns wap_btn_abs">
							<a class="btn_tip btn_commom" href="" title="返回我的帐号">返回我的帐号</a>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 设置密保成功 e -->
		<!-- 开启登录保护 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenHome" style="display:none">
					<div class="mod_tip_hd">
						<h4>开启登录保护</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="t_c security">				
							<div class="icon_mibao icon_mibao1"></div>				
							<div class="wapbox intro">
								<p class="style_h4">开启登录保护，仅允许信任设备直接登录</p>
								<p class="style_h4">非信任设备，登录时需要二次验证</p>
							</div>				
							<div class="tip_btns">
								<a class="btn_tip btn_commom" href="" title="确认开启" _href="#popManageTokenDownAct">确认开启</a>					
							</div>
							<p class="notice">注意：开启后，当前处于登录状态的设备需重新登录</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 开启登录保护 e -->
		<!-- 获取动态口令 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenDownAct" style="display:none">
					<div class="mod_tip_hd">
						<h4>开启登录保护</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="t_c wapbox security">				
							<div class="icon_mibao icon_mibao2"></div>
							<div class="intro">
								<p class="style_h4">动态生成安全口令</p>
								<p class="style_h4">告别等待，更方便、更安全</p>
							</div>								
						</div>
						<div class="tip_btns">
							<a class="btn_tip btn_back" href="" title="获取安装" _href="#popManageTokenDownload">获取安装</a>					
							<a class="btn_tip btn_commom wap_mt10" href="" title="激活令牌" _href="#popManageTokenActivate">激活令牌</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 获取动态口令 e -->
		<!-- 获取安全令牌 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenDownload" style="display:none">
					<div class="mod_tip_hd">
						<h4>开启登录保护</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">			
						<div class="wapbox disten30x25">
							<h4>获取安装小米安全令牌</h4>
							<div class="newtab">
								<!-- 选中添加class为now -->
								<a class="now" href="" title="Android版"><em class="acctip_icon acctip_icon_4"></em>Android版<i></i></a>
								<a href="" title="iPhone版"><em class="acctip_icon acctip_icon_5"></em>iPhone版<i></i></a>
							</div>
							<div style="display:block;" class="tabcon">
								<p>1. 在手机上访问小米应用商店 （app.mi.com）</p>
								<p>2. 搜索<span>小米安全令牌</span></p>
								<p>3. 下载并安装该应用<a href="http://app.mi.com/download/62091" target="_self" title="">直接下载安装包</a></p>
							</div>
							<div class="tabcon">
								<p>1. 打开iPhone上的App Store图标</p>
								<p>2. 搜索<span>小米安全令牌</span></p>
								<p>3. 下载并安装该应用<a href="https://itunes.apple.com/cn/app/xiao-mi-an-quan-ling-pai/id734383238?mt=8" title="" target="_blank">App Store下载地址</a></p>
							</div>
							<div class="wap_tokenstore">
								<a class="btn_tip btn_back" href="http://app.mi.com/download/62091" title="" _href=""><i class="icon_store icon_android"></i>Android应用下载</a>
								<a class="btn_tip btn_back" href="https://itunes.apple.com/cn/app/xiao-mi-an-quan-ling-pai/id734383238?mt=8" title="" _href=""><i class="icon_store icon_iphone"></i>iPhone应用下载</a>
							</div>
						</div>
						<div class="tip_btns">
							<a class="btn_tip btn_commom installed" href="" title="已完成安装" _href="#popManageTokenActivate">已完成安装</a>			
							<a class="btn_tip btn_back goback" href="" title="返回" _href="#popManageTokenStatus">返回</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 获取安全令牌 e -->
		<!-- 激活安全令牌 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenActivate" style="display:none">
					<div class="mod_tip_hd">
						<h4>开启登录保护</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">			
						<div class="t_c mar30"><h4 class="wap_pt0">激活小米安全令牌</h4></div>
						<div class="wapbox getactived disten30x76">
							<p>1. 打开安装好的小米安全令牌</p>
							<div>
								<p>2. 扫描下方二维码</p>
								<img width="124" height="124" alt="">
							</div>
							<p>3. 输入生成的6位动态口令<label class="input_bg"><input type="text" placeholder="6位动态口令"></label></p>
							<div class="err_tip wng_capt err_tip_independ">动态口令不正确</div>				
							<div class="err_tip empty_capt err_tip_independ">请输入动态口令</div>					
							<div class="err_tip sys_err err_tip_independ">系统错误，请稍候再试</div>		
						</div>
						<div class="tip_btns">
							<!-- 默认态未填写动态口令btn为禁用，动态口令填写后btn才亮起来，去掉class为disabled -->
							<a class="btn_tip btn_commom" href="javascript:void(0);" title="激活">激活</a>				
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!-- 激活安全令牌 e -->
		<!-- 添加信任设备 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenTrustDevice" style="display:none">
					<div class="mod_tip_hd">
						<h4>开启登录保护</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="t_c mar30"><h3>添加信任设备</h3></div>
						<div class="wapbox mardoub30">
							<p class="npb_circle_normal"><span class="npb-circle npb-circle-current"></span><span>在信任设备上登录，不会每次都要求输入安全令牌证</span></p>
							<p class="npb_circle_normal"><span class="npb-circle npb-circle-current"></span><span>即使您丢失了手机，无法获得验证码，也可以通过信任设备访问自己的小米帐号。</span></p>
							<div class="mod_trust">
								<div class="token_chk_area">
									<i class="icon_token_chk icon_true"></i><span class="style_h4">信任此计算机</span>
								</div>
								<div>您可以随时登录小米帐号在我的设备中管理信任设备</div>
							</div>
							<div class="err_tip wng_capt err_tip_independ">动态口令不正确</div>							
							<div class="err_tip sys_err err_tip_independ">系统错误，请稍候再试</div>
						</div>
							
						<div class="tip_btns">
							<input class="btn_tip btn_commom" type="submit" value="下一步">		
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 添加信任设备 e -->
		<!-- 成功开启登录保护 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenFinish" style="display:none">
					<div class="mod_tip_hd">
						<h4>开启登录保护</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="t_c wapbox mar30">
							<div class="txt_ff6"><em class="acctip_icon acctip_icon_2"></em>您已成功开启登录保护</div>			
							<p><span class="logoutCountdown"></span> 秒后自动登出，请重新登录</p>							
						</div>
						<div class="tip_btns wap_btn_abs">
							<a class="btn_tip btn_commom" href="/" title="立即重新登录">立即重新登录</a>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 成功开启登录保护 e -->
		<!-- 设置安全令牌 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip wth482" id="popManageTokenStatus" style="display:none">
					<div class="mod_tip_hd">
						<h4>登录保护设置</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="wapbox set_security_token disten30x14">
							<h3>已经开启小米安全令牌</h3>
							<p>无需等待短信验证码，动态生成口令，更方便、更快捷</p>
							<div class="tip_btns">
								<a class="btn_tip btn_back" href="" title="获取安装" _href="#popManageTokenDownload">获取安装</a>
								<a class="btn_tip btn_back" href="" title="更换令牌" _href="#popManageTokenActivate">更换令牌</a>
							</div>
							<h3>补充设置</h3>
							<p>为了防止手机丢失，导致无法登录使用查找手机，强烈建议您填写</p>
							<p>备用手机或记录备用口令</p>
							<ul class="plan c_b">
								<li>
									<dl>
										<dt><em class="acctip_icon acctip_icon_6"></em><span class="txt_tit">备用手机</span></dt>
										<dd class="">
											<p class="mar17">如果您因为任何原因无法使用手机（丢失、没电、损坏），您可以选择将动态口令发送至备用手机</p>								
											<div class="alink no_fb_mobile">									
												<p>										
													<a href="" title="添加备用手机" _href="#popManageTokenSetMobile">添加备用手机</a>
												</p>
											</div>
											<!-- 添加了备用手机后显示 -->
											<div class="alink fb_mobile">
												<p>已设置：<span></span></p>
												<p>
													<a href="" title="修改号码" _href="#popManageTokenSetMobile">修改号码</a>
													<a href="" title="删除号码" class="delBackupPhone">删除号码</a>
												</p>
											</div>
										</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt><em class="acctip_icon acctip_icon_7"></em><span class="txt_tit">备用密匙</span></dt>
										<dd>
											<p class="mar17">您也可以将备用密匙打印或发送到邮箱，在没有手机令牌的情况下，可以输入一次性备用密匙进行登录</p>								
											<div class="alink">									
												<p class="bak_keystxt">										
													<a href="" title="查看备用密匙" _href="#popManageTokenKeys">查看备用密匙</a>
												</p>
											</div>
										</dd>
									</dl>
								</li>
							</ul>				
							<div class="err_tip sys_err err_tip_independ">系统错误，请稍候再试</div>
							<div class="err_tip backup_phone_not_exists err_tip_independ">备用手机不存在</div>
						</div>
						<div class="tip_btns">
							<a class="btn_tip btn_commom btn_close_popup" href="" title="返回我的帐号">返回我的帐号</a>
							<a class="btn_tip btn_back btn_disable_token" href="" title="关闭登录保护">关闭登录保护</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 设置安全令牌 e -->
		<!-- 开启登录保护未绑定邮箱 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenBindEmail" style="display:none">
					<div class="mod_tip_hd">
						<h4>开启登录保护</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="t_c security">
							<div class="icon_mibao icon_mibao3"></div>
							<div class="wapbox intro">
								<p class="style_h4">开启登录保护，请先绑定安全邮箱</p>					
							</div>				
							<div class="tip_btns">
								<a class="btn_tip btn_commom btn_adapt" href="" title="返回我的帐号" _href="#noSuchElement" __href="#popEnterNewEmail">返回我的帐号</a>
								<!-- <input class="btn_tip btn_commom" type="submit" value="绑定安全邮箱"> -->
							</div>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 开启登录保护未绑定邮箱 e -->
		<!-- 开启登录保护未绑定手机 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenBindPhone" style="display:none">
					<div class="mod_tip_hd">
						<h4>开启登录保护</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="t_c security">
							<div class="icon_mibao icon_mibao4"></div>
							<div class="wapbox intro">
								<p class="style_h4">开启登录保护，请先绑定安全手机</p>					
							</div>				
							<div class="tip_btns">
								<a class="btn_tip btn_commom" href="" title="返回我的帐号" _href="#noSuchElement" __href="#popEnterNewPhone">返回我的帐号</a>
								<!-- <input class="btn_tip btn_commom" type="submit" value="绑定安全手机"> -->
							</div>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 开启登录保护未绑定手机 e -->
		<!-- 设置备用手机号 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenSetMobile" style="display:none">
					<div class="mod_tip_hd">
						<h4>登录保护设置</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="wapbox">
							<div class="binding setbackphone">
								<h3 class="t_c">请设置备用手机</h3>				
								<div class="fixpos">
									<div class="tits set_qst_tit">
										<p class="c_b"><span>中国</span><em>+86</em></p>
										<i class="icon_cirarr"></i>
									</div>
									<div class="country-container set_qst_list">
										<div class="select_panel">
											<h6>热门</h6>
											<p _code="+86" class="chk">中国</p>
											<p _code="+853">中国澳门</p>
											<p _code="+886">台湾</p>
											<p _code="+852">中国香港</p>
											<p _code="+65">Singapore</p>
											<p _code="+91">India</p>
											<p _code="+62">Indonesia</p>
											<h6>A</h6>
											<p _code="+93">Afghanistan</p>
											<p _code="+355">Albania</p>
											<p _code="+213">Algeria</p>
											<p _code="+1684">American Samoa</p>
											<p _code="+376">Andorra</p>
											<p _code="+244">Angola</p>
											<p _code="+1264">Anguilla</p>
											<p _code="+1268">Antigua and Barbuda</p>
											<p _code="+599">Netherlands Antilles</p>
											<p _code="+54">Argentina</p>
											<p _code="+374">Armenia</p>
											<p _code="+297">Aruba</p>
											<p _code="+247">Ascension Island</p>
											<p _code="+61">Australia</p>
											<p _code="+43">Austria</p>
											<p _code="+994">Azerbaijan</p>
											<h6>B</h6>
											<p _code="+1242">Bahamas</p>
											<p _code="+973">Bahrain</p>
											<p _code="+880">Bangladesh</p>
											<p _code="+375">Belarus</p>
											<p _code="+32">Belgium</p>
											<p _code="+501">Belize</p>
											<p _code="+229">Benin</p>
											<p _code="+1441">Bermuda</p>
											<p _code="+975">Bhutan</p>
											<p _code="+591">Bolivia</p>
											<p _code="+387">Bosnia and Herzegovina</p>
											<p _code="+267">Botswana</p>
											<p _code="+55">Brazil</p>
											<p _code="+1284">British Virgin Islands</p>
											<p _code="+673">Brunei</p>
											<p _code="+359">Bulgaria</p>
											<p _code="+226">Burkina Faso</p>
											<p _code="+257">Burundi</p>
											<h6>C</h6>
											<p _code="+855">Cambodia</p>
											<p _code="+237">Cameroon</p>
											<p _code="+1">Canada</p>
											<p _code="+238">Cape Verde</p>
											<p _code="+599">Caribbean Netherlands</p>
											<p _code="+1345">Cayman Islands</p>
											<p _code="+236">Central African Republic</p>
											<p _code="+235">Chad</p>
											<p _code="+56">Chile</p>
											<p _code="+61">Christmas Island</p>
											<p _code="+86">China</p>
											<p _code="+61">Cocos Islands</p>
											<p _code="+506">Costa Rica</p>
											<p _code="+57">Colombia</p>
											<p _code="+269">Comoros</p>
											<p _code="+682">Cook Islands</p>
											<p _code="+242">Republic of the Congo</p>
											<p _code="+243">Democratic Republic of Congo</p>
											<p _code="+506">Costa Rica</p>
											<p _code="+385">Croatia</p>
											<p _code="+53">Cuba</p>
											<p _code="+357">Cyprus</p>
											<p _code="+420">Czech Republic</p>
											<h6>D</h6>
											<p _code="+45">Denmark</p>
											<p _code="+253">Djibouti</p>
											<p _code="+1767">Dominica</p>
											<p _code="+1">Dominican Republic</p>
											<h6>E</h6>
											<p _code="+670">East Timor</p>
											<p _code="+593">Ecuador</p>
											<p _code="+20">Egypt</p>
											<p _code="+503">El Salvador</p>
											<p _code="+240">Equatorial Guinea</p>
											<p _code="+291">Eritrea</p>
											<p _code="+372">Estonia</p>
											<p _code="+251">Ethiopia</p>
											<h6>F</h6>
											<p _code="+298">Faro Islands</p>
											<p _code="+500">Falkland Island</p>
											<p _code="+679">Fiji</p>
											<p _code="+358">Finland</p>
											<p _code="+33">France</p>
											<h6>G</h6>
											<p _code="+241">Gabon</p>
											<p _code="+220">Gambia</p>
											<p _code="+995">Georgia</p>
											<p _code="+49">Germany</p>
											<p _code="+233">Ghana</p>
											<p _code="+350">Gibraltar</p>
											<p _code="+30">Greece</p>
											<p _code="+299">Greenland</p>
											<p _code="+1473">Grenada</p>
											<p _code="+590">Guadeloupe</p>
											<p _code="+1671">Guam</p>
											<p _code="+502">Guatemala</p>
											<p _code="+224">Guinea</p>
											<p _code="+245">Guinea-Bissau</p>
											<p _code="+592">Guyana</p>
											<h6>H</h6>
											<p _code="+509">Haiti</p>
											<p _code="+504">Honduras</p>
											<p _code="+852">Hong Kong</p>
											<p _code="+36">Hungary</p>
											<h6>I</h6>
											<p _code="+354">Iceland</p>
											<p _code="+98">Iran</p>
											<p _code="+964">Iraq</p>
											<p _code="+353">Ireland</p>
											<p _code="+972">Israel</p>
											<p _code="+39">Italy</p>
											<p _code="+225">Ivory Coast</p>
											<h6>J</h6>
											<p _code="+1876">Jamaica</p>
											<p _code="+81">Japan</p>
											<p _code="+44">Jersey</p>
											<p _code="+962">Jordan</p>
											<h6>K</h6>
											<p _code="+7">Kazakhstan</p>
											<p _code="+254">Kenya</p>
											<p _code="+381">Kosovo</p>
											<p _code="+965">Kuwait</p>
											<p _code="+996">Kyrgyzstan</p>
											<h6>L</h6>
											<p _code="+856">Laos</p>
											<p _code="+371">Latvia</p>
											<p _code="+961">Lebanon</p>
											<p _code="+266">Lesotho</p>
											<p _code="+231">Liberia</p>
											<p _code="+218">Libya</p>
											<p _code="+423">Liechtenstein</p>
											<p _code="+370">Lithuania</p>
											<p _code="+352">Luxembourg</p>
											<h6>M</h6>
											<p _code="+853">Macau</p>
											<p _code="+389">Macedonia</p>
											<p _code="+261">Madagascar</p>
											<p _code="+265">Malawi</p>
											<p _code="+60">Malaysia</p>
											<p _code="+960">Maldives</p>
											<p _code="+223">Mali</p>
											<p _code="+356">Malta</p>
											<p _code="+692">Marshall Islands</p>
											<p _code="+596">Martinique</p>
											<p _code="+222">Mauritania</p>
											<p _code="+230">Mauritius</p>
											<p _code="+269">Mayotte</p>
											<p _code="+52">Mexico</p>
											<p _code="+373">Moldova</p>
											<p _code="+377">Monaco</p>
											<p _code="+382">Montenegro</p>
											<p _code="+976">Mongolia</p>
											<p _code="+1664">Montserrat</p>
											<p _code="+212">Morocco</p>
											<p _code="+258">Mozambique</p>
											<p _code="+95">Myanmar</p>
											<h6>N</h6>
											<p _code="+264">Namibia</p>
											<p _code="+674">Nauru</p>
											<p _code="+977">Nepal</p>
											<p _code="+31">Netherlands</p>
											<p _code="+687">New Caledonia</p>
											<p _code="+64">New Zealand</p>
											<p _code="+505">Nicaragua</p>
											<p _code="+227">Niger</p>
											<p _code="+234">Nigeria</p>
											<p _code="+850">North Korea</p>
											<p _code="+47">Norway</p>
											<h6>O</h6>
											<p _code="+968">Oman</p>
											<h6>P</h6>
											<p _code="+92">Pakistan</p>
											<p _code="+680">Palau</p>
											<p _code="+970">Palestine</p>
											<p _code="+507">Panama</p>
											<p _code="+675">Papua New Guinea</p>
											<p _code="+595">Paraguay</p>
											<p _code="+51">Peru</p>
											<p _code="+63">Philippines</p>
											<p _code="+48">Poland</p>
											<p _code="+351">Portugal</p>
											<p _code="+1">Puerto Rico</p>
											<h6>Q</h6>
											<p _code="+974">Qatar</p>
											<h6>R</h6>
											<p _code="+262">Reunion</p>
											<p _code="+40">Romania</p>
											<p _code="+7">Russia</p>
											<p _code="+250">Rwanda</p>
											<h6>S</h6>
											<p _code="+590">Saint Barthelemy</p>
											<p _code="+685">Samoa</p>
											<p _code="+1869">Saint Kitts and Nevis</p>
											<p _code="+1758">Saint Lucia</p>
											<p _code="+590">Saint Martin</p>
											<p _code="+378">San Marino</p>
											<p _code="+239">Sao Tome and Principe</p>
											<p _code="+966">Saudi Arabia</p>
											<p _code="+221">Senegal</p>
											<p _code="+381">Serbia</p>
											<p _code="+248">Seychelles</p>
											<p _code="+232">Sierra Leone</p>
											<p _code="+421">Slovakia</p>
											<p _code="+599">Sint Maarten</p>
											<p _code="+421">Slovakia</p>
											<p _code="+386">Slovenia</p>
											<p _code="+677">Solomon Islands</p>
											<p _code="+252">Somalia</p>
											<p _code="+27">South Africa</p>
											<p _code="+82">South Korea</p>
											<p _code="+34">Spain</p>
											<p _code="+94">Sri Lanka</p>
											<p _code="+249">Sudan</p>
											<p _code="+597">Suriname</p>
											<p _code="+47">Svalbard and Jan Mayen</p>
											<p _code="+268">Swaziland</p>
											<p _code="+46">Sweden</p>
											<p _code="+41">Switzerland</p>
											<p _code="+963">Syria</p>
											<h6>T</h6>
											<p _code="+886">Taiwan</p>
											<p _code="+992">Tajikistan</p>
											<p _code="+255">Tanzania</p>
											<p _code="+66">Thailand</p>
											<p _code="+670">Timor-Leste</p>
											<p _code="+228">Togo</p>
											<p _code="+690">Tokelau</p>
											<p _code="+1868">Trinidad and Tobago</p>
											<p _code="+216">Tunisia</p>
											<p _code="+90">Turkey</p>
											<p _code="+993">Turkmenistan</p>
											<p _code="+688">Tuvalu</p>
											<h6>U</h6>
											<p _code="+256">Uganda</p>
											<p _code="+256">Uganda</p>
											<p _code="+380">Ukraine</p>
											<p _code="+971">United Arab Emirates</p>
											<p _code="+44">United Kingdom</p>
											<p _code="+1">United States</p>
											<p _code="+1340">United States Virgin Islands</p>
											<p _code="+598">Uruguay</p>
											<p _code="+998">Uzbekistan</p>
											<h6>V</h6>
											<p _code="+678">Vanuatu</p>
											<p _code="+379">Vatican City</p>
											<p _code="+58">Venezuela</p>
											<p _code="+84">Vietnam</p>
											<h6>W</h6>
											<p _code="+681">Wallis and Futuna</p>
											<p _code="+212">Western Sahara</p>
											<h6>Y</h6>
											<p _code="+967">Yemen</p>
											<h6>Z</h6>
											<p _code="+260">Zambia</p>
											<p _code="+263">Zimbabwe</p>
										</div>
										<div class="cancel_panel">
											<div class="cancel_box">
											<a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a>
											</div>
										</div>
									</div>
								</div>
								<div class="fixpos">
									<label class="input_bg">
										<input type="tel" class="backupPhoneInput" placeholder="请输入备用手机号码" autocomplete="off" disableautocomplete/>
									</label>
								</div>							
							</div>
							<div class="setbakphone_error">
								<div class="err_tip empty_phone err_tip_independ">请输入备用手机</div>
								<div class="err_tip wng_fmt err_tip_independ">手机号码格式错误</div>
								<div class="err_tip sys_err err_tip_independ">系统错误，请稍后再试</div>
								<div class="err_tip dupl_phone err_tip_independ">备用手机不能与安全手机相同</div>
								<div class="err_tip set_fail err_tip_independ">设置备用手机失败</div>
								<div class="err_tip bad_param err_tip_independ" style="display:none">参数错误</div>
							</div>
						</div>
						<div class="tip_btns">
							<a class="btn_tip btn_commom" href="" title="确定">确定</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 设置备用手机号 e -->
		<!-- 关闭登录保护 s -->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenDisableFinish" style="display:none">
					<div class="mod_tip_hd">
						<h4>登录保护设置</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">			
						<div class="t_c wapbox mar30">
							<div class="txt_ff6"><em class="acctip_icon acctip_icon_2"></em>您已经关闭登录保护</div>						
						</div>
						<div class="tip_btns wap_btn_abs">
							<a class="btn_tip btn_commom" href="/" title="返回我的帐号">返回我的帐号</a>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 关闭登录保护 e -->
		<!-- 查看备用密钥 s -->
		<!--不做成模态-->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popManageTokenKeys" style="display:none">
					<div class="mod_tip_hd">
						<h4>登录保护设置</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="disten30x25 wapbox security_keys">
							<h4>此密匙可以替代动态口令<span class="ff6 marl15">每个密匙只能使用一次</span></h4>
							<div class="mi_code c_b">
								<!-- 已经使用添加class为out -->
							</div>
							<div class="lh20">
								<p>请将备用密匙随身携带，打印后请放置于保密位置（如钱包中）</p>
								<p>如密匙已经使用完，可以点击<a class="ff6" href="javascript:void(0)" id="refresh_code">刷新</a> （刷新后，原有密匙将全部失效）</p>
							</div>				
						</div>
						<div class="tip_btns">
							<a class="btn_tip btn_back btn_print" id="printKeys" title="打印">打印</a>					
							<a class="btn_tip btn_back sendEmail" href="" title="发送到邮箱">发送到邮箱</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 查看备用密钥 e -->
		<!--无法通过验证，申请人工审核 s-->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popVeriNotExists" style="display:none">
					<div class="mod_tip_hd">
						<h4>小米帐号安全验证</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="wapbox mod_tip_bd">
						<div class="t_c success">
							<h4 class="ff6">无法通过验证</h4>				
						</div>
						<div class="fail_identify ft14 pb30">请提交重置密保申请，或换常用设备进行操作。</div>
						<div class="tip_btns">
							<a class="btn_tip btn_back btn_adapt" href="" title="申请重置密保">申请重置密保</a>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--无法通过验证，申请人工审核 e-->
		<!--无法通过验证遇到问题 s-->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popVeriFailed" style="display:none">
					<div class="mod_tip_hd">
						<h4>小米帐号安全验证</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="wapbox mod_tip_bd">
						<div class="t_c success">
							<h4 class="ff6">非常抱歉</h4>				
						</div>
						<div class="fail_identify ft14">
							<p>遇到一些问题，无法完成您的操作。</p>
							<p>请换个时间或联系客服解决。</p>
						</div>
						<div class="t_c pdtop20 ft14">错误代码： <span class="err_code"></span></div>
						<div class="tip_btns">
							<a class="btn_tip btn_back" href="" title="返回">返回</a>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--无法通过验证遇到问题 e-->
		<!--删除帐号警告 s-->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popSuicideWarning" style="display:none">
					<div class="mod_tip_hd">
						<h4>注销帐号</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="wapbox mod_tip_bd">
						<div class="del-account-allow">
							<div class="logout_area">
								<h4>您申请注销小米帐号 <span>1107036499</span> ，注销帐号需要验证您的身份，确认后会清空该帐号的所有数据。</h4>
								<div class="logout_txt">
									<p class="ft14">包括且不限于如下数据：</p>
									<ul class="num_list">
										<li>1.此帐号中未消费的米币将无法找回</li>
										<li>2.此帐号云端同步的联系人、照片等数据将无法找回</li>
										<li>3.此帐号中已购买的主题将无法找回</li>
										<li>4.此帐号在应用内消费的内容将无法找回</li>
										<li>5.此帐号中各种消费记录将无法找回</li>
									</ul>
								</div>
								<div class="ft14 ff6 warn-text" style="display:none;">
								  
									检测到手机号 <span>135******57</span> 近期绑定过太多帐号，注销后半年内将无法使用此号码注册小米帐号。
									
								</div>
								<div style="display:none;" class="sys_err err_tip err_tip_independ">系统错误。错误码：<span class="err_code"></span>
								</div>
								<!-- 选中添加now -->
								<div class="t_c twostep_trustinfo now">
									<label><i class="icon_select"></i>我了解并接受注销可能带来的损失</label>
								</div>	
							</div>
							<div class="tip_btns">
								<!-- 禁用时添加disabled -->
								<a class="btn_tip btn_commom disabled" href="" title="开始注销">开始注销</a>
								<a class="btn_tip btn_back" href="" title="取消">取消</a>		
							</div>
						</div>
						<div class="del-account-deny" style="display:none">
							<div class="logout_area">
								<h4>检测到您的帐号在如下服务中遗留有重要数据，所以暂时无法注销您的帐号。</h4>
								<div class="logout_txt">
									<ul class="num_list del-account-deny-content">
										<li class="del-account-deny-passport hide">小米帐号</li>
										<li class="del-account-deny-micloudweb hide del-account-deny-imicom">小米云</li>
										<li class="del-account-deny-mifiapi del-account-deny-jrmicom hide">小米金融</li>
										<li class="del-account-deny-boss-online hide">小米通网厅（小米移动卡销卡后才可以注销小米帐号）</li>
										<li class="del-account-deny-billcenter hide">米币余额</li>
										<li class="del-account-deny-micloudfind hide">小米云查找设备（存在未关闭查找手机服务的设备）</li>
									</ul>
								</div>
							</div>
							<div class="tip_btns">
								<a class="btn_tip btn_back" href="javascript:void(0)" title="确定">确定</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--删除帐号警告 e-->
		<!--删除帐号提示 s-->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popSuicidePrompt" style="display:none">
					<div class="mod_tip_hd">
						<h4>注销帐号</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="icon_warning"></div>
						<div class="wapbox logout_area">			
							<div class="confirm_txt">
								<p class="ft14">请确保所有使用小米帐号的设备（手机，电视，路由器等）均已经退出登录，否则注销帐号后，可能会影响这些设备继续使用。</p>
							</div>	
							<div style="display:none;" class="sys_err err_tip err_tip_independ">系统错误。错误码：<span class="err_code"></span></div>
						</div>
						<div class="tip_btns">
							<!-- 禁用时添加disabled -->
							<a class="btn_tip btn_commom" href="" title="继续注销">继续注销</a>
							<a class="btn_tip btn_back" href="" title="取消">取消</a>
						</div>		
					</div>
				</div>
			</div>
		</div>
		<!--删除帐号提示 e-->
		<!--删除帐号成功 s-->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popSuicideSuccess" style="display:none">
					<div class="mod_tip_hd">
						<h4>注销帐号</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">
						<div class="wapbox t_c mar30">
							<div class="txt_ff6"><em class="acctip_icon acctip_icon_2"></em>您已成功注销帐号</div>
							<p><span>10</span> 秒后将自动退出，感谢您的支持</p>						
						</div>
						<div class="tip_btns">
							<a class="btn_tip btn_commom" href="/" title="立即退出">立即退出</a>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--删除帐号成功 e-->
		<!--删除帐号失败 s-->
		<div class="popup_mask">
			<div class="bkc"></div>
			<div class="mod_wrap">
				<div class="mod_acc_tip" id="popSuicideFailure" style="display:none">
					<div class="mod_tip_hd">
						<h4>注销帐号</h4>
						<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
					</div>
					<div class="mod_tip_bd">		
						<div class="wapbox logout_area">			
							<div class="ft14 logout_unable">
								<p>您的小米帐号 <span>1107036499</span> 绑定了MIUI帐号，无法注销。</p>
								<p class="pt10">注销帐号请致电小米客服400-100-5678。感谢您对小米的支持，谢谢。</p>
							</div>			
						</div>				
						<div class="tip_btns">			
							<a class="btn_tip btn_commom" href="/" title="返回首页">返回首页</a>			
						</div>		
					</div>
				</div>
			</div>
		</div>
		<!--删除帐号失败 e-->
		<!--TIPS e-->
		<!--发短信之国际化-->
		<div id="l11n-node" style="display:none;"
			_l11n-jsp_wap_ba_errortips3="手机号码格式错误" 
			_l11n-jsp_cu_mnl_tip34="您输入的联络手机是您帐号的密保手机， 您可以直接通过<a href='/pass/forgetPassword' style='color:#ff7e00' target='_blank'>“忘记密码”</a> 功能重置密码。" 
			_l11n-jsp_cu_mnl_tip35="您输入的联络手机已经绑定在其他小米帐号下，您需要输入其他手机号码作为联络手机。" 
			_l11n-jsp_wap_ba_errortips1="邮箱地址格式错误" 
			_l11n-jsp_regst_img_code_incorrect="输入错误，请重新输入" 
			_l11n-jsp_sms_unsent="短信发送失败，请稍后再试！ " 
			_l11n-jsp_sys_error="系统错误，请稍候再试" 
			_l11n-jsp_2014_bad_param="参数错误" 
			
			_l11n-answer_empty="答案不能为空"
			_l11n-answer_too_short="答案长度不能少于2个字符"
			_l11n-answer_too_long="答案长度不能超过128个字符"
			_l11n-question_empty="问题不能为空"
			_l11n-answer_same="答案不能重复"
			_l11n-wrong_answer="回答有误，请重试"
			_l11n-retry_after="您回答错误次数过多，请<span class='color_yellow'>1小时</span>后重试"
			_l11n-lang_mismatch="检测到之前的密保问题是用其他语言设置的。如果您继续更新密保问题，之前的会被覆盖，请切换语言环境。"
			_l11n-existing_question="您上次设置的问题"
			
			_l11n-jsp_2014_tip23="系统错误。错误码："
			
			_l11n-jsp_2014_token_used="（已使用）"
			_l11n-jsp_2014_my_backup_keys="我的备用密匙"
			_l11n-jsp_add="添加"
			_l11n-jsp_ph_delete_error="号码错误"
			_l11n-jsp_error="发生错误，请稍候再试">
		</div>
		<!--密保数据-->
		<div id="questionData" style="display:none"></div>
		<script>
			(function(){
				var mibaoLink = document.getElementById('mibao_link');
				if(mibaoLink){
					var href = mibaoLink.getAttribute('__href');
					if(location.hostname.indexOf('oneboxhost') !== -1){
						href = href.replace("/sq.id.mi.com/","/oneboxhost.sq.id.mi.com/").replace("https://","http://");
					}
					mibaoLink.setAttribute("__href",href);
				}
			})();
		</script>
		<script src="https://account.xiaomi.com/static/res/6941994/passport/scripts/jquery-1.8.3.min.js"></script>
		<script src="https://account.xiaomi.com/static/res/5S4cNRG/scripts/passport/jquery.bgiframe.js"></script>
		<script src="https://account.xiaomi.com/static/res/01e7b91/passport/scripts/jquery.form.js"></script>
		<script src="https://account.xiaomi.com/static/res/Ac2MxhH/scripts/passport/select.js"></script>
		<script src="https://account.xiaomi.com/static/res/bde1db5/passport/scripts/oo/oo-min.js"></script>
		<script src="https://account.xiaomi.com/static/res/d833ee3/passport/scripts/oo/com/mi/utils/cookie.js"></script>
		<script src="https://account.xiaomi.com/static/res/1080ab8/passport/scripts/oo/com/mi/utils/time.js"></script>
		<script src="/static/res/0db79be/account-static/html/login/identity/dist/script/identity-cn.js"></script>

		<!--发短信 s-->
		<script src="https://account.xiaomi.com/static/res/836f8ab/scripts/respassport/scripts/oo/com/mi/utils/l11n.js"></script>
		<script src="/static/res/1389a40/account-static/respassport/scripts/oo/com/mi/widgets/sms.js"></script>
		<!--发短信 e-->
		<!--密保 s-->
		<script src="https://account.xiaomi.com/static/res/180a9c8/passport/scripts/oo/com/mi/passport/mibao-min.js"></script>
		<!--密保 e-->
		<!--URL解析 s-->
		<script src="https://account.xiaomi.com/static/res/cea14d9/passport/scripts/oo/com/mi/utils/url.js"></script>
		<!--URL解析 e-->
		<script>
			var JSP_VAR={
				deviceType:'PC'
			};
		</script>
		<script src="/static/res/9ee8f1f/account-static/respassport/scripts/oo/com/mi/passport/portal/main/2014.js">
		</script>
		<script src="https://account.xiaomi.com/static/res/64371/scripts/common/more/placeholder.js"></script>
		<script>
			var mibaoData = $.parseJSON($('#questionData').text().replace(/\'/g,'"'));
			OO(['com.mi.passport.portal.2014'],function(portal2014,O){
				var Security = portal2014.Security;
				var sec = new Security();
				sec.render();
			});
		</script>
		<script>
			$('#loadingMask').hidePopup();
		</script>
		<style type="text/css">
			/*干掉该死的IE6的遮罩问题*/
			#loadingMask .bkc{
				_height:200%;
			}
		</style>
	</body>
</html>
