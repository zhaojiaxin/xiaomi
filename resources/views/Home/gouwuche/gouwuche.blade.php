<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
    
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta charset="UTF-8" />
        <title>
            我的购物车——小米手机官网
        </title>
        <meta name="viewport" content="width=1226" />
        <link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/Css/base.min.css" />
		<script src="{{URL::asset('assets/js/jquery-1.7.2.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="/Css/cart.min.css" />
    </head>
    <body>
        <div class="site-header site-mini-header">
            <div class="container">
                <div class="header-logo">
                    <a class="logo ir" href="//www.mi.com/index.html" title="小米官网">
                        小米官网
                    </a>
                </div>
                <div class="header-title" id="J_miniHeaderTitle">
                </div>
                
            </div>
        </div>
        <div class="page-main">
            <div class="container">
                <div id="J_cartBox" class="">
                    <div class="cart-goods-list">
						@if($result)
                        <div class="list-head clearfix">
                            <div class="col col-check">
                                
                            </div>
                            <div class="col col-img">
                                &nbsp;
                            </div>
                            <div class="col col-name">
                                商品名称
                            </div>
                            <div class="col col-price">
                                单价
                            </div>
                            <div class="col col-num">
                                数量
                            </div>
                            <div class="col col-total">
                                小计
                            </div>
                            <div class="col col-action">
                                操作
                            </div>
                        </div>
						
					
					
						@foreach($result as $one)
						
                        <div class="list-body" id="J_cartListBody">
							<input  type="hidden"  value="{{$one->gid}}" />
                            <div class="item-box">
                                <div class="item-table J_cartGoods" data-info="{ commodity_id:'1154500025', gettype:'buy', itemid:'2154500012_0_buy', num:'1'} ">
                                    <div class="item-row clearfix">
                                        <div class="col col-check">
                                         
                                        </div>
                                        <div class="col col-img">
                                            <a href="//item.mi.com/1154500025.html" target="_blank">
                                                <img alt="" src="//i1.mifile.cn/a1/T1KcL_BXZv1RXrhCrK!80x80.jpg" height="80"
                                                width="80">
                                            </a>
                                        </div>
                                        <div class="col col-name">
                                            <div class="tags">
                                            </div>
                                            <h3 class="name">
                                                <a href="#">
                                                    {{$one->gname}}&nbsp;{{$one->version}}{{$one->color}}
                                                </a>
                                            </h3>
                                            <p class="desc">
                                                <span>
                                                   
                                                </span>
                                                
                                            </p>
                                            <p class="desc">
                                                
                                            </p>
                                        </div>
                                        <div class="col col-price" id="col-price1">
                                            {{$one->gprice}}元
                                        </div>
										
                                        <div class="col col-num">
                                            <div class="change-goods-num clearfix J_changeGoodsNum">
                                                <a href='javascript:void(0)' class="J_minus" id="{{$one->gid}}">
                                                    <i class="iconfont">
                                                        
                                                    </i>
                                                </a>
												
                                                <input disabled="disabled" type="text"  value="{{$one->good_num}}" class="goods-num J_goodsNum" name="good_num" id = "a{{$one->gid}}"/>
												<input   class="cid" type="hidden" name="id" value="{{$one->id}}" />
                                                <a href="javascript:void(0)" class="J_plus" id="{{$one->gid}}">
                                                    <i class="iconfont">
                                                        
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
									
                                        <div class="col col-total col-total1">
                                           {{($one->good_num)*($one->gprice)}}元
                                        </div>
                                        <div class="col col-action">
                                            <a id="{{$one->id}}" data-msg="确定删除吗？" href="javascript:void(0);"
                                            title="删除" class="del J_delGoods">
                                                <i class="iconfont">
                                                    
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        </div>
						
						@endforeach
						
                    </div>
                </div>
            </div>
                    <div class="cart-bar clearfix" id="J_cartBar">
                        <div class="section-left">
                            <a href="//list.mi.com/0" class="back-shopping J_goShoping" data-stat-id="3d1e5bdd191768c8"
                            onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-3d1e5bdd191768c8', '#', 'pcpid']);">
                                
                            </a>
                            <span class="cart-total">
                                共
                                <i id="J_cartTotalNum">
                                {{$result1['gsum']}}    
                                </i>
                                件商品
                                <i id="J_selTotalNum">
                                    
                                </i>
                                
                            </span>
                            <span class="cart-coudan hide" id="J_coudanTip">
                                ，还需
                                <i id="J_postFreeBalance">
                                </i>
                                元即可免邮费
                                <a href="javascript:void(0);" id="J_showCoudan" data-stat-id="69b06f1a9d2d512c"
                                onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-69b06f1a9d2d512c', 'javascript:void(0);', 'pcpid']);">
                                    立即凑单
                                </a>
                            </span>
                        </div>
                        <span class="activity-money hide">
                            活动优惠：减
                            <i id="J_cartActivityMoney">
                                0
                            </i>
                            元
                        </span>
                        <span class="total-price">
                            合计：
                            <em id="J_cartTotalPrice">
                            {{$result1['psum']}}
                            </em>
                            元
                        </span>
                        <a href="/addorder/{{Session::get('id')}}" class="btn btn-a btn btn-primary" id="J_goCheckout"
                        >
                            去结算
                        </a>
                        <div class="no-select-tip hide" id="J_noSelectTip">
                            请勾选需要结算的商品
                            <i class="arrow arrow-a">
                            </i>
                            <i class="arrow arrow-b">
                            </i>
                        </div>
                    </div>
        
				@else
				
                <div class="cart-empty" id="J_cartEmpty" style="background-color:#f5f5f5">
                    <h2>
                        您的购物车还是空的！
                    </h2>
                    <a href="/home" class="btn btn-primary btn-shoping J_goShoping">
                        马上去购物
                   </a>
                </div>
                
                <div class="cart-recommend" id="J_miRecommendBox">
				</div>        
				@endif
		 </div>
            </div>
        </div>
		<script>
							
							$(function(){
								var gprice=document.getElementById('col-price1').innerHTML;
								$('.J_plus').click(function(){
									var id1 = $(this).attr('id');
									//alert(id1);
									var id = $(this).prev('.cid').val();
									var num = $(this).prev().prev('.J_goodsNum').val();
									//console.log(id);
									//ajax操作
										$.ajax({
										//url
										url:'/addCart/raiseNum/'+id+'/'+num,
										type:'get',
										dataType:'text',
										success:function(data){
											
											//根据返回数据操作
											if(data){
												if(data==6){
													alert('一次最多购买5件商品');
												}else{
													//console.log(data);
													//修改页面数据
													
													//$('#a'+id1).attr('value',data);
													//console.log($(this).prev().prev('.J_goodsNum').val());
													//刷新页面
													location.reload();	
												}
												
											}else{
												alert('修改失败');
											}
																					
										},
										error:function(){
																			
										}
										
										});
								});	
								
								$('.J_minus').click(function(){
									var id = $(this).next().next('.cid').val();
									var num = $(this).next().val();
									//console.log(num);
									//ajax操作
										$.ajax({
										//url
										url:'/addCart/reduceNum/'+id+'/'+num,
										type:'get',
										dataType:'text',
										success:function(data){
											
											//根据返回数据操作
											if(data){
												//刷新页面
												location.reload();
											}else{
												alert('修改失败');
											}
																					
										},
										error:function(){
																			
										}
										
										});
									
								});
								// var price = $('.col-total1').html();
								// price=parseInt(price);
								// console.log(price);
							});
							
							$('.J_delGoods').click(function(){
								//获取当前操作的商品id
								var id=$(this).attr('id');
								//确定操作
								if(!confirm('您确定删除该商品吗？')){
								return false;
								}
								//ajax操作
								$.ajax({
								//url
								url:'/addCart/delete/'+id,
								type:'get',
								dataType:'text',
								success:function(data){
									//根据返回数据操作
									if(data==1){
										//console.log(data);
										//删除数据
										$('#'+id).parent().parent().parent().parent().parent().remove();
										//刷新页面
										//location.reload();
									}else{
										alert('删除商品失败');
									}
																			
								},
								error:function(){
																	
								}
								
								});

							});
							
						</script>
						
        <!-- 商品列表 模板 -->
        <!-- 删除开放购买商品提示 -->
        <div class="modal fade modal-hide  modal-alert" id="J_modalAlert">
            <div class="modal-bd">
                <div class="text">
                    <h3 id="J_alertMsg">
                    </h3>
                </div>
                <div class="actions">
                    <button class="btn btn-gray" data-dismiss="modal" id="J_alertCancel">
                        取消
                    </button>
                    <button class="btn btn-primary" data-dismiss="modal" id="J_alertOk">
                        确定
                    </button>
                </div>
                <a class="close" data-dismiss="modal" href="javascript: void(0);">
                    <i class="iconfont">
                        &#xe602;
                    </i>
                </a>
            </div>
        </div>
        <!--结算提示 -->
        
        <!-- 保险弹窗 -->
        <!-- 保险弹窗 -->
        <div class="modal fade in modal-hide modal-baoxian" id="J_baoxian">
            <div class="modal-header">
                <h3>
                    小米意外保障服务
                </h3>
                <span class="close" data-dismiss="modal">
                    <i class="iconfont">
                        &#xe602;
                    </i>
                </span>
            </div>
            <div class="modal-body">
                <div class="con-1">
                    <h4>
                        购买保障服务的设备在意外受损时可获得免费维修
                    </h4>
                    <ul class="icon-list clearfix">
                        <li>
                            <span class="icon icon-1">
                            </span>
                            屏幕碎裂免费换新屏
                        </li>
                        <li>
                            <span class="icon icon-2">
                            </span>
                            进水、摔落免费修
                        </li>
                        <li>
                            <span class="icon icon-3">
                            </span>
                            修好为止
                        </li>
                    </ul>
                    <dl class="xuzhi">
                        <dt>
                            为保障您的权益，购买前请仔细阅读：
                        </dt>
                        <dd>
                            · 本保障服务目前仅适用于小米手机/平板用户。
                        </dd>
                        <dd>
                            · 本保障服务自您收到设备起生效，有效期为一年，若您在收到设备7日内需要取消保障服务，请连同设备一起申请退货。
                        </dd>
                        <dd>
                            · 故意行为导致的设备损坏以及盗窃、抢劫、遗失设备等不在服务保障范围内（具体以小米意外保障服务条款为准）。
                            <br>
                            <a href="//cart.mi.com/static/insuranceAgreement.php?type=" target="_blank"
                            class="J_baoxianMore">
                                了解《小米意外保障服务》详细条款&gt;
                            </a>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="modal-footer clearfix">
                <p>
                    <span class="J_baoxianAgree">
                        <i class="iconfont icon-checkbox">
                            &#x221a;
                        </i>
                        我已经阅读并同意
                    </span>
                    《
                    <a href="//cart.mi.com/static/insuranceAgreement.php?type=" target="_blank"
                    class="J_baoxianMore">
                        小米意外保障服务条款
                    </a>
                    》
                </p>
                <a class="btn btn-primary J_buyBaoxian">
                    确认并购买服务
                </a>
            </div>
        </div>
        <!-- 电视挂架弹窗 -->
        <div class="modal fade in modal-hide modal-guajia" id="J_modalGuajia">
            <div class="modal-header">
                <h3>
                    预约电视挂架安装服务
                </h3>
                <span class="close" data-dismiss="modal">
                    <i class="iconfont">
                        &#xe602;
                    </i>
                </span>
            </div>
            <div class="modal-body">
                <h4>
                    购买须知：
                </h4>
                <ol class="icon-list clearfix">
                    <li>
                        本服务采用线上预约，安装时工作人员上门收费的服务模式。
                    </li>
                    <li>
                        确认预约之后，工作人员将在商品（小米电视）到货后的3个工作日内，与您取得联系并上门安装。
                    </li>
                    <li>
                        具体安装台数请与小米工作人员沟通。
                    </li>
                    <li>
                        往返距离大于30公里的上门服务属于远程服务，对超出30公里的路程部分收取远程费，收费标准为1元/公里。
                    </li>
                    <li style="color: #ff6700">
                        为了确保您的权益，请核实为您提供服务的工程师工牌信息，如有疑问现场拨打400-100-5678电话进行确认。
                    </li>
                </ol>
                <table>
                    <caption>
                        材料费用：
                    </caption>
                    <thead>
                        <tr>
                            <th class="th-1">
                                附件名称
                            </th>
                            <th class="th-2">
                                使用说明
                            </th>
                            <th class="th-3">
                                价格
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                小米电视壁挂架
                            </td>
                            <td>
                                用于墙面挂装，由小米授权服务商进行安装
                            </td>
                            <td>
                                99元
                            </td>
                        </tr>
                        <tr>
                            <td>
                                小米电视主机/条形音响挂架
                            </td>
                            <td>
                                用于墙面挂装，由小米授权服务商进行安装
                            </td>
                            <td>
                                80元
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- <table>
                <caption>
                安装费用：
                </caption>
                <thead>
                <tr>
                <th class="th-1">
                安装类型
                </th>
                <th class="th-2">
                服务内容
                </th>
                <th class="th-3">
                人工费
                </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                主机/音响
                </td>
                <td>
                条形音响+低音炮+座/挂装+连接组合+功能调试
                </td>
                <td>
                50元/台
                </td>
                </tr>
                <tr>
                <td>
                电视
                </td>
                <td>
                电视+音响+座/挂装+连接组合+功能调试
                </td>
                <td>
                100元/台
                </td>
                </tr>
                </tbody>
                </table> -->
                <table>
                    <caption>
                        小米电视安装服务费标准
                    </caption>
                    <thead>
                        <tr>
                            <th rowspan="2" colspan="2" width="50%">
                                机型
                            </th>
                            <th colspan="3">
                                安装类型
                            </th>
                        </tr>
                        <tr>
                            <th>
                                挂装
                            </th>
                            <th>
                                座装
                            </th>
                            <th>
                                移机
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">
                                一体电视 / 分体屏幕
                            </td>
                            <td>
                                ≤60 吋
                            </td>
                            <td>
                                100元/台
                            </td>
                            <td>
                                100元/台
                            </td>
                            <td>
                                100元/台
                            </td>
                        </tr>
                        <tr>
                            <td>
                                61-70 吋
                            </td>
                            <td>
                                200元/台
                            </td>
                            <td>
                                200元/台
                            </td>
                            <td>
                                200元/台
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="3">
                                附件 / 商品
                            </td>
                            <td>
                                小米电视主机
                            </td>
                            <td>
                                50元/台
                            </td>
                            <td>
                                50元/台
                            </td>
                            <td>
                                50元/台
                            </td>
                        </tr>
                        <tr>
                            <td>
                                小米 soundbar
                            </td>
                            <td>
                                50元/台
                            </td>
                            <td>
                                50元/台
                            </td>
                            <td>
                                50元/台
                            </td>
                        </tr>
                        <tr>
                            <td>
                                小米低音炮
                            </td>
                            <td>
                                －－
                            </td>
                            <td>
                                50元/台
                            </td>
                            <td>
                                50元/台
                            </td>
                        </tr>
                    </tbody>
                </table>
                <dl>
                    <dt>
                        如何计算费用：
                    </dt>
                    <dd>
                        如网点到您家里单程22公里，需要安装电视挂装
                    </dd>
                    <dd>
                        总计费用：手工费（100元）+挂架材料费（99元）+路程补贴 （22*2-30=14元）=213元
                    </dd>
                    <dd>
                        *网点到家往返超出30公里，需另外收取1元/公里的远程服务费
                    </dd>
                </dl>
                <p>
                    <a href="http://bbs.xiaomi.cn/thread/index/tid/11435552" target="_blank">
                        了解更多细则&gt;
                    </a>
                </p>
            </div>
            <div class="modal-footer clearfix">
                <a class="btn btn-primary J_buyGuaJia">
                    确认预约
                </a>
            </div>
        </div>
        <!-- 净水器或水龙头安装服务 -->
        <div class="modal fade in modal-hide modal-water-install" id="J_modalWaterInstall">
            <div class="modal-header">
                <h3>
                    预约小米净水器或水龙头安装服务
                </h3>
                <span class="close" data-dismiss="modal">
                    <i class="iconfont">
                        &#xe602;
                    </i>
                </span>
            </div>
            <div class="modal-body">
                <h4>
                    购买须知：
                </h4>
                <ol class="icon-list clearfix">
                    <li>
                        本服务采用线上预约，安装时工作人员采取上门收费的服务形式。
                    </li>
                    <li>
                        确认预约之后，工作人员将在商品（小米净水器）出库后（订单可查询）的3个工作日内，与您取得联系并上门安装。
                    </li>
                    <li>
                        同一次上门安装小米净水器和不锈钢无铅水龙头，只收取一次安装人工费用（50元/台）。
                    </li>
                    <li>
                        往返距离大于30公里的上门服务属于远程服务,对超出30公里的路程部分收取远程费,收费标准为1元/公里。
                    </li>
                    <li style="color: #ff6700">
                        为了确保您的权益，请核实为您提供服务的工程师工牌信息，如有疑问现场拨打400-100-5678电话进行确认。
                    </li>
                </ol>
                <p>
                    <a href="http://bbs.xiaomi.cn/t-11515570" target="_blank">
                        了解更多细则 &gt;
                    </a>
                </p>
                <table>
                    <caption>
                        收费标准：
                    </caption>
                    <thead>
                        <tr>
                            <th>
                                项目名称
                            </th>
                            <th>
                                安装人工费用
                            </th>
                            <th>
                                材料费用
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                安装小米净水器
                            </td>
                            <td>
                                50元/台
                            </td>
                            <td>
                                －－
                            </td>
                        </tr>
                        <tr>
                            <td>
                                安装不锈钢无铅水龙头
                            </td>
                            <td>
                                50元/台
                            </td>
                            <td>
                                240元
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    温馨提示：如果您无需更换水龙头，自己动手就可以完成净水器安装哦。
                    <a href="//www.mi.com/water/gallery/?showInstall" target="_blank">
                        参考安装演示 &raquo;
                    </a>
                </p>
            </div>
            <div class="modal-footer clearfix">
                <a class="btn btn-primary J_buyWaterInstall">
                    确认预约
                </a>
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
                            <a rel="nofollow" href="//www.mi.com/c/service/poststation/" target="_blank">
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
                <div class="logo ir">
                    小米官网
                </div>
                <div class="info-text">
                    <p class="sites">
                        <a rel="nofollow" href="//www.mi.com/index.html" target="_blank">
                            小米网
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="http://www.miui.com/" target="_blank">
                            MIUI
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="http://www.miliao.com/" target="_blank">
                            米聊
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="http://www.duokan.com/" target="_blank">
                            多看书城
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="http://www.miwifi.com/" target="_blank">
                            小米路由器
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="http://call.mi.com/" target="_blank">
                            视频电话
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="http://blog.xiaomi.com/" target="_blank">
                            小米后院
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="http://xiaomi.tmall.com/" target="_blank">
                            小米天猫店
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="http://shop115048570.taobao.com" target="_blank">
                            小米淘宝直营店
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="http://union.mi.com/" target="_blank">
                            小米网盟
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="//static.mi.com/feedback/" target="_blank">
                            问题反馈
                        </a>
                        <span class="sep">
                            |
                        </span>
                        <a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">
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
                    <a rel="nofollow" href="//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&lang=zh-cn"
                    target="_blank">
                        <img rel="nofollow" src="//privacy-policy.truste.com/privacy-seal/seal?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8"
                        alt="TRUSTe Privacy Certification" />
                    </a>
                    <a rel="nofollow" href="//search.szfw.org/cert/l/CX20120926001783002010"
                    target="_blank">
                        <img rel="nofollow" src="//s01.mifile.cn/i/v-logo-2.png" alt="诚信网站" />
                    </a>
                    <a rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&ct=df&pa=461082"
                    target="_blank">
                        <img rel="nofollow" src="//s01.mifile.cn/i/v-logo-1.png" alt="可信网站" />
                    </a>
                    <a rel="nofollow" href="http://www.315online.com.cn/member/315140007.html"
                    target="_blank">
                        <img rel="nofollow" src="//s01.mifile.cn/i/v-logo-3.png" alt="网上交易保障中心"
                        />
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
        <div class="modal modal-hide modal-bigtap-queue" id="J_bigtapQueue">
            <div class="modal-body">
                <span class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="iconfont">
                        &#xe602;
                    </i>
                </span>
                <h3>
                    正在排队，请稍候喔！
                </h3>
                <div class="queue-tip-box">
                    <p class="queue-tip">
                        当前人数较多，请您耐心等待，排队期间请不要关闭页面。
                    </p>
                    <p class="queue-tip">
                        时常来官网看看，最新产品和活动信息都会在这里发布。
                    </p>
                    <p class="queue-tip">
                        下载小米商城 App 玩玩吧！产品开售信息抢先知道。
                    </p>
                    <p class="queue-tip">
                        发现了让你眼前一亮的小米产品，别忘了分享给朋友！
                    </p>
                    <p class="queue-tip">
                        产品开售前会有预售信息，关注官网首页就不会错过。
                    </p>
                </div>
                <div class="queue-animate">
                    <div id="J_mituWalking" class="mitu-walk">
                    </div>
                    <div class="animate-mask animate-mask-left">
                    </div>
                    <div class="animate-mask animate-mask-right">
                    </div>
                </div>
            </div>
        </div>
        <!-- .xm-dm-queue END -->
        <div id="J_bigtapError" class="modal modal-hide modal-bigtap-error">
            <span class="close" data-dismiss="modal" aria-hidden="true">
                <i class="iconfont">
                    &#xe602;
                </i>
            </span>
            <div class="modal-body">
                <h3>
                    抱歉，网络拥堵无法连接服务器
                </h3>
                <p class="error-tip">
                    由于访问人数太多导致服务器压力山大，请您稍后再重试。
                </p>
                <p>
                    <a class="btn btn-primary" id="J_bigtapRetry">
                        重试
                    </a>
                </p>
            </div>
        </div>
        <div id="J_bigtapModeBox" class="modal fade modal-hide modal-bigtap-mode">
            <span class="close" data-dismiss="modal">
                <i class="iconfont">
                    &#xe602;
                </i>
            </span>
            <div class="modal-body">
                <h3 class="title">
                    为防黄牛，请您输入下面的验证码
                </h3>
                <p class="desc">
                    在防黄牛的路上，我们一直在努力，也知道做的还不够。
                    <br>
                    所以，这次劳烦您多输一次验证码，我们一起防黄牛。
                </p>
                <div class="mode-loading" id="J_bigtapModeLoading">
                    <img src="//c1.mifile.cn/f/i/2014/cn/loading.gif" alt="" width="32" height="32">
                    <a id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);">
                        网络错误，点击重新获取验证码！
                    </a>
                </div>
                <div class="mode-action hide" id="J_bigtapModeAction">
                    <div class="mode-con" id="J_bigtapModeContent">
                    </div>
                    <input type="text" name="bigtapmode" class="input-text" id="J_bigtapModeInput"
                    placeholder="请输入正确的验证码">
                    <p class="tip" id="J_bigtapModeTip">
                    </p>
                    <a class="btn  btn-gray" id="J_bigtapModeSubmit">
                        确认
                    </a>
                </div>
            </div>
        </div>
        <div id="J_bigtapSoldout" class="modal fade modal-hide modal-bigtap-soldout modal-bigtap-soldout-norec">
            <span class="close" data-dismiss="modal">
                <i class="iconfont">
                    &#xe602;
                </i>
            </span>
            <div class="modal-body ">
                <div class="content clearfix">
                    <span class="mitu">
                    </span>
                    <p class="title">
                        很抱歉，人真是太多了
                        <br>
                        您晚了一步...
                    </p>
                </div>
                <div class="bigtap-recomment-goods">
                    <div class="hd">
                        <span>
                            这些产品也不错，而且有现货哦！
                        </span>
                    </div>
                    <ul class="clearfix" id="J_bigtapRecommentList">
                    </ul>
                </div>
            </div>
        </div>
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
    </body>

</html>