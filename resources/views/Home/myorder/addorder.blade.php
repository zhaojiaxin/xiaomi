<!DOCTYPE HTML>
<html lang="zh-CN" xml:lang="zh-CN">
    
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="UTF-8" />
        <title>
            填写订单信息
        </title>
        <meta name="viewport" content="width=1226" />
		<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon"
        />
        <link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon"
        />
        <link rel="stylesheet" href="{{URL::asset('/Css/base.min.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('/Css/main,mincss')}}" />
        <link rel="stylesheet" type="text/css" href="//s01.mifile.cn/css/checkout.min.css?v=2016032303" />
		<script src="{{URL::asset('/Scripts/jquery-1.8.3.min.js')}}"></script>
    </head>
    
    <body>
        <div class="site-header site-mini-header">
            <div class="container">
                <div class="header-logo">
                    <a class="logo " href="/home" title="小米官网">
                    </a>
                </div>
                <div class="header-title" id="J_miniHeaderTitle">
                </div>

            </div>
        </div>
        <!-- .site-mini-header END -->
        <script type="text/javascript">
            var checkoutConfig = {
                addressMatch: 'common',
                addressMatchVarName: new Function('return ' + 'data'),
                hasPresales: false,
                hasBigTv: false,
                hasAir: false,
                hasScales: false,
                hasWater: false,
                hasWater2: false,
                hasMobile: false,
                hasEboiler: false,
                hasEvent: false,
                hasGiftcard: false,
                totalPrice: 299.00,
                needPayAmount: 299,
                postage: 10,
                //
                postFree: true,
                bcPrice: 150,
                activityDiscountMoney: 0.00,
                //活动优惠
                showCouponBox: 0,
                showCaptcha: '0',
                invoice: [{
                    "type": "electron",
                    "value": 4,
                    "desc": "\u4e2a\u4eba\u7535\u5b50\u53d1\u7968",
                    "checked": true
                },
                {
                    "type": "personal",
                    "value": 1,
                    "desc": "\u4e2a\u4eba\u7eb8\u8d28\u53d1\u7968",
                    "checked": false
                },
                {
                    "type": "company",
                    "value": 2,
                    "desc": "\u5355\u4f4d\u7eb8\u8d28\u53d1\u7968",
                    "checked": false
                }],
                quickOrder: '0',
                hasBigPro: false,
                subsidyPrice: 0
            };
        </script>
        <div class="page-main">
            <div class="container">
                <div class="checkout-box">
                    <div class="section section-address">
                        <div class="section-header clearfix">
                            <h3 class="title">
                                收货地址
                            </h3>
                            <div class="more">
                            </div>
                        </div>
                        <div class="section-body clearfix " id="J_addressList">
							<a class="address-item address-item-new" id="J_newAddress" href="/home/address" onclick="show()">
								<i class="iconfont">
									&#xe609;
								</i>
								添加新地址
							</a>
                            <!-- addresslist begin -->
							@foreach($address as $one)
							<input class="caddr" name="addr_id" value="{{$one->id}}" type="hidden" />
                            <input class="user_id" name="user_id" value="{{$one->user_id}}" type="hidden" />
							<div class="address-item J_addressItem  caddr">
								<dl>
									<dt>
										<em class="uname">
											{{$one->name}}
										</em>
									</dt>
									<dd class="utel">
									   {{$one->phone}}
									</dd>
									<dd class="uaddress">
										{{$one->city}}市 
										{{$one->area}}
										<br />
										{{$one->address}}
										@if($one->code)
											({{$one->code}})
										@endif
									</dd>
								</dl>
                            </div>
                        @endforeach
						</div>
                    </div>
                    <div class="section section-options section-payment clearfix">
                        <div class="section-header">
                            <h3 class="title">
                                支付方式
                            </h3>
                        </div>
                        <div class="section-body clearfix">
                            <ul class="J_optionList options ">
                                <li data-type="pay" class="J_option selected" data-value="1">
                                    在线支付
                                    <span>
                                        （支持支付宝、银联、财付通、小米钱包等）
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section section-options section-shipment clearfix">
                        <div class="section-header">
                            <h3 class="title">
                                配送方式
                            </h3>
                        </div>
                        <div class="section-body clearfix">
                            <ul class="clearfix J_optionList options ">
                                <li data-type="shipment" class="J_option selected" data-amount="0" data-value="1">
                                    快递配送（免运费）
                                </li>
                            </ul>
                            <div class="service-self-tip" id="J_serviceSelfTip">
                            </div>
                        </div>
                    </div>
                    @foreach($result as $two)
                    <div class="section section-goods">

                        <div class="section-body">
                            <ul class="goods-list" id="J_goodsList">
                                <li class="clearfix">
                                    <div class="col col-img">
                                      
                                    </div>
                                    <div class="col col-name">
                                        <a href="//item.mi.com/1155100007.html" target="_blank">
                                            {{$two->gname}}
                                        </a>
                                    </div>
                                    <div class="col col-price">
                                        {{$two->gprice}}元 x {{$two->good_num}}
                                    </div>
                                    <div class="col col-status">
                                        有货
                                    </div>
                                    <div class="col col-total">
                                        {{($two->gprice)*($two->good_num)}}元
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
					@endforeach
                    <div class="section section-count clearfix">

                        <div class="money-box" id="J_moneyBox">
                            <ul>
                                <li class="clearfix">
                                    <label>
                                        商品件数：
                                    </label>
                                    <span class="val">
                                        {{$result1['gsum']}}件
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <label>
                                        金额合计：
                                    </label>
                                    <span class="val">
                                       {{$result1['psum']}}元
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <label>
                                        运费：
                                    </label>
                                    <span class="val">
                                        <i id="J_postageVal">
                                            0
                                        </i>
                                        元
                                    </span>
                                </li>
                                <li class="clearfix total-price">
                                    <label>
                                        应付总额：
                                    </label>
                                    <span class="val">
                                        <em id="J_totalPrice">
                                            {{$result1['psum']}}
                                        </em>
                                        元
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-bar clearfix">
                        <div class="fl">
                            <div class="seleced-address hide" id="J_confirmAddress">
                            </div>
                            <div class="big-pro-tip hide J_confirmBigProTip">
                            </div>
                        </div>
                        <div class="fr">
                            <a href="javascript:void(0);" class="btn btn-primary submit" >
                                去结算
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		

        <div class="site-footer">
            <div class="container">
                <div class="footer-service">
                    <ul class="list-service clearfix">
                        <li>
                            <a rel="nofollow" href="//www.mi.com/service/exchange#repaire" target="_blank">
                                <i class="iconfont">
                                    &#xe634;
                                </i>
                                1小时快修服务
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="//www.mi.com/service/exchange#back" target="_blank">
                                <i class="iconfont">
                                    &#xe635;
                                </i>
                                7天无理由退货
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="//www.mi.com/service/exchange#free" target="_blank">
                                <i class="iconfont">
                                    &#xe636;
                                </i>
                                15天免费换货
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="//www.mi.com/service/exchange#mail" target="_blank">
                                <i class="iconfont">
                                    &#xe638;
                                </i>
                                满150元包邮
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="//www.mi.com/static/maintainlocation/" target="_blank">
                                <i class="iconfont">
                                    &#xe637;
                                </i>
                                520余家售后网点
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-links clearfix">
                    <dl class="col-links col-links-first">
                        <dt>
                            帮助中心
                        </dt>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/service/account/register/" target="_blank">
                                账户管理
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/service/buy/buytime/" target="_blank">
                                购物指南
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/service/order/sendprogress/" target="_blank">
                                订单操作
                            </a>
                        </dd>
                    </dl>
                    <dl class="col-links ">
                        <dt>
                            服务支持
                        </dt>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/service/exchange" target="_blank">
                                售后政策
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="http://fuwu.mi.com/" target="_blank">
                                自助服务
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="http://xiazai.mi.com/" target="_blank">
                                相关下载
                            </a>
                        </dd>
                    </dl>
                    <dl class="col-links ">
                        <dt>
                            线下门店
                        </dt>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/c/xiaomizhijia/" target="_blank">
                                小米之家
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/static/maintainlocation/" target="_blank">
                                服务网点
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/static/familyLocation/" target="_blank">
                                零售网点
                            </a>
                        </dd>
                    </dl>
                    <dl class="col-links ">
                        <dt>
                            关于小米
                        </dt>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/about" target="_blank">
                                了解小米
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="http://hr.xiaomi.com/" target="_blank">
                                加入小米
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/about/contact" target="_blank">
                                联系我们
                            </a>
                        </dd>
                    </dl>
                    <dl class="col-links ">
                        <dt>
                            关注我们
                        </dt>
                        <dd>
                            <a rel="nofollow" href="http://e.weibo.com/xiaomishouji" target="_blank">
                                新浪微博
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat"
                            target="_blank">
                                小米部落
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="#J_modalWeixin" data-toggle="modal">
                                官方微信
                            </a>
                        </dd>
                    </dl>
                    <dl class="col-links ">
                        <dt>
                            特色服务
                        </dt>
                        <dd>
                            <a rel="nofollow" href="//order.mi.com/queue/f2code" target="_blank">
                                F 码通道
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/mimobile/" target="_blank">
                                小米移动
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="//order.mi.com/misc/checkitem" target="_blank">
                                防伪查询
                            </a>
                        </dd>
                    </dl>
                    <div class="col-contact">
                        <p class="phone">
                            400-100-5678
                        </p>
                        <p>
                            <span class="J_serviceTime-normal" style="
                            ">
                                周一至周日 8:00-18:00
                            </span>
                            <span class="J_serviceTime-holiday" style="display:none;">
                                2月7日至13日服务时间 9:00-18:00
                            </span>
                            <br>
                            （仅收市话费）
                        </p>
                        <a rel="nofollow" class="btn btn-line-primary btn-small" href="//www.mi.com/service/contact"
                        target="_blank">
                            <i class="iconfont">
                                &#xe600;
                            </i>
                            24小时在线客服
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-info">
            <div class="container">
                <span class="logo ir">
                    小米官网
                </span>
                <div class="info-text">
                    <p>
                        小米旗下网站：
                        <a href="//www.mi.com/index.html" target="_blank">
                            小米网
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="http://www.miui.com/" target="_blank">
                            MIUI
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="http://www.miliao.com/" target="_blank">
                            米聊
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="http://www.duokan.com/" target="_blank">
                            多看书城
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="http://www.miwifi.com/" target="_blank">
                            小米路由器
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="http://call.mi.com/" target="_blank">
                            视频电话
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="http://blog.xiaomi.com/" target="_blank">
                            小米后院
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="http://xiaomi.tmall.com/" target="_blank">
                            小米天猫店
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="http://shop115048570.taobao.com" target="_blank">
                            小米淘宝直营店
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="http://union.mi.com/" target="_blank">
                            小米网盟
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="//static.mi.com/feedback/" target="_blank">
                            问题反馈
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a href="#J_modal-globalSites" data-toggle="modal" target="_blank">
                            Select Region
                        </a>
                    </p>
                    <p>
                        &copy;
                        <a href="//www.mi.com/" target="_blank" title="mi.com">
                            mi.com
                        </a>
                        京ICP证110507号 京ICP备10046444号
                        <a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134"
                        target="_blank">
                            京公网安备11010802020134号
                        </a>
                        <a rel="nofollow" href="//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank"
                        rel="nofollow">
                            京网文[2014]0059-0009号
                        </a>
                        <br>
                        违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试
                    </p>
                </div>
                <div class="info-links">
                    <a href="//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&lang=zh-cn"
                    target="_blank">
                        <img src="//privacy-policy.truste.com/privacy-seal/seal?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8"
                        alt="TRUSTe Privacy Certification" />
                    </a>
                    <a href="//search.szfw.org/cert/l/CX20120926001783002010" target="_blank">
                        <img src="//s01.mifile.cn/i/v-logo-2.png" alt="诚信网站" />
                    </a>
                    <a href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&ct=df&pa=461082"
                    target="_blank">
                        <img src="//s01.mifile.cn/i/v-logo-1.png" alt="可信网站" />
                    </a>
                    <a href="http://www.315online.com.cn/member/315140007.html" target="_blank">
                        <img src="//s01.mifile.cn/i/v-logo-3.png" alt="网上交易保障中心" />
                    </a>
                </div>
            </div>
            <div class="slogan ir">
                探索黑科技，小米为发烧而生
            </div>
        </div>
        <div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480"
        data-height="520">
            <div class="modal-hd">
                <a class="close" data-dismiss="modal">
                    <i class="iconfont">
                        &#xe602;
                    </i>
                </a>
                <span class="title">
                    小米手机官方微信二维码
                </span>
            </div>
            <div class="modal-bd">
                <p style="margin: 0 0 10px;">
                    打开微信，点击右上角的“+”，选择“扫一扫”功能，
                    <br/>
                    对准下方二维码即可。
                </p>
                <img alt="" src="//c1.mifile.cn/f/i/2014/cn/qr.png" width="375" height="375"
                />
            </div>
        </div>
        <!-- .modal-weixin END -->
        
        <!-- .xm-dm-queue END -->
       
        
        
        <!-- .xm-dm-error END -->
        <div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites"
        data-width="640">
            <div class="modal-hd">
                <a class="close" data-dismiss="modal">
                    <i class="iconfont">
                        &#xe602;
                    </i>
                </a>
                <span class="title">
                    Select Region
                </span>
            </div>
            <div class="modal-bd">
                <h3>
                    Welcome to Mi.com
                </h3>
                <p class="modal-globalSites-tips">
                    Please select your country or region
                </p>
                <p class="modal-globalSites-links clearfix">
                    <a href="//www.mi.com/index.html">
                        Mainland China
                    </a>
                    <a href="http://www.mi.com/hk/">
                        Hong Kong
                    </a>
                    <a href="http://www.mi.com/tw/">
                        TaiWan
                    </a>
                    <a href="http://www.mi.com/sg/">
                        Singapore
                    </a>
                    <a href="http://www.mi.com/my/">
                        Malaysia
                    </a>
                    <a href="http://www.mi.com/ph/">
                        Philippines
                    </a>
                    <a href="http://www.mi.com/in/">
                        India
                    </a>
                    <a href="http://www.mi.com/id/">
                        Indonesia
                    </a>
                    <a href="http://br.mi.com/">
                        Brasil
                    </a>
                    <a href="http://www.mi.com/en/">
                        Global Home
                    </a>
                    <a href="http://www.mi.com/mena/">
                        MENA
                    </a>
                </p>
            </div>
        </div>
        <!-- .modal-globalSites END -->
        <script>
			$(function(){
				$('.caddr').click(function(){
					//alert('1');
					$(this).css('border','2px solid orange');
					
					var uid=$(this).prev().val();
					var aid=$(this).prev().prev().val();
					
					
					
					$('.submit').click(function(){
						//console.log(uid);

						//ajax操作
						$.ajax({
						
						//url
						url:'/sAddorder/'+uid+'/'+aid,
						type:'get',
						dataType:'json',
						success:function(data){
							console.log(data);
							//根据返回数据操作
							if(data){
								//console.log(data);
								window.location.href = '/home/order';
							}else{
								
							}										
						},
						error:function(){									
						}
						});

					});
				
				});
				
				
			});
		</script>
		  <script>
				$('.sta').click(function(){
					
					var dis_rule=$(this).attr('id');
					console.log(dis_rule);
					var uid=$(this).attr('uid');
					
					
						//ajax操作
						$.ajax({
						
						//url
						url:'/sta/'+dis_rule+'/'+uid,
						type:'get',
						dataType:'json',
						success:function(data){
						
							//根据返回数据操作
							if(data){
								 location.reload();
							}else{
								
							}										
						},
						error:function(){									
						}
						});

				});
		</script>
    </body>

</html>