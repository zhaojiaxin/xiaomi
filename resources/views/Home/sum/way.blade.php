<!DOCTYPE HTML>
<html lang="zh-CN" xml:lang="zh-CN">
    
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="UTF-8" />
        <title>
            选择在线支付方式
        </title>
        <meta name="viewport" content="width=1226" />
        <link rel="stylesheet" href="./css/base.min.css?v2016d16" />
        <link rel="stylesheet" type="text/css" href="./css/pay-confirm.min.css?v=2016050501"
        />
    </head>
    
    <body>
        <div class="site-header site-mini-header">
            <div class="container">
                <div class="header-logo">
                    <a class="logo " href="//www.mi.com/index.html" title="小米官网">
                    </a>
                </div>
                <div class="header-title" id="J_miniHeaderTitle">
                </div>
                <div class="topbar-info" id="J_userInfo">
                    <a class="link" href="//order.mi.com/site/login" data-needlogin="true">
                        登录
                    </a>
                    <span class="sep">
                        |
                    </span>
                    <a class="link" href="https://account.xiaomi.com/pass/register">
                        注册
                    </a>
                </div>
            </div>
        </div>
        <div class="page-main">
            <div class="container confirm-box">
                <form target="_blank" action="#" id="J_payForm" method="post">
                    <div class="section section-order">
                        <div class="order-info clearfix">
                            <div class="fl">
                                <h2 class="title">
                                    订单提交成功！去付款咯～
                                </h2>
                                <p class="order-time" id="J_deliverDesc">
                                    21:30前支付，预计明天送达
                                    <span class="beta">
                                        Beta
                                    </span>
                                </p>
                                <p class="order-time">
                                    请在
                                    <span class="pay-time-tip">
                                        1小时59分
                                    </span>
                                    内完成支付, 超时后将取消订单
                                </p>
                                <p class="post-info" id="J_postInfo">
                                    收货信息：蔡英杰 157****8572 &nbsp;&nbsp; 北京&nbsp;&nbsp;北京市&nbsp;&nbsp;昌平区&nbsp;&nbsp;回龙观北店嘉园
                                </p>
                            </div>
                            <div class="fr">
                                <p class="total">
                                    应付总额：
                                    <span class="money">
                                        <em>
                                            2138.00
                                        </em>
                                        元
                                    </span>
                                </p>
                                <a href="javascript:void(0);" class="show-detail" id="J_showDetail">
                                    订单详情
                                    <i class="iconfont">
                                        &#xe61c;
                                    </i>
                                </a>
                            </div>
                        </div>
                        <i class="iconfont icon-right">
                            &#x221a;
                        </i>
                        <div class="order-detail">
                            <ul>
                                <li class="clearfix">
                                    <div class="label">
                                        订单号：
                                    </div>
                                    <div class="content">
                                        <span class="order-num">
                                            1160619386700878
                                        </span>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="label">
                                        收货信息：
                                    </div>
                                    <div class="content">
                                        蔡英杰 157****8572&nbsp;&nbsp; 北京&nbsp;&nbsp;北京市&nbsp;&nbsp;昌平区&nbsp;&nbsp;回龙观北店嘉园
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="label">
                                        商品名称：
                                    </div>
                                    <div class="content">
                                        小米手机5 全网通标准版 白色 32GB
                                        <br/>
                                        必备套装
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="label">
                                        配送时间：
                                    </div>
                                    <div class="content">
                                        不限送货时间
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="label">
                                        发票信息：
                                    </div>
                                    <div class="content">
                                        个人电子发票
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section section-payment">
                        <div class="cash-title" id="J_cashTitle">
                            选择以下支付方式付款
                        </div>
                        <!-- <div class="payment-box">
                        <div class="payment-header clearfix">
                        <h3 class="title">最近使用过: </h3>
                        </div>
                        <div class="payment-body">
                        <ul class="clearfix payment-list J_paymentList J_linksign-customize">
                        <li></li>
                        <li></li>
                        </ul>
                        </div>
                        </div> -->
                        <div class="payment-box ">
                            <div class="payment-header clearfix">
                                <h3 class="title">
                                    支付平台
                                </h3>
                                <span class="desc">
                                    （大额支付推荐使用支付宝）
                                </span>
                            </div>
                            <div class="payment-body">
                                <ul class="clearfix payment-list J_paymentList J_linksign-customize">
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="alipay" value="alipay" />
                                        <img src="./imgs/payOnline_zfb.png" alt="" style="margin-left: 0;" />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="unionpay" value="unionpay"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/unionpay.png?ver2015" alt="" style="margin-left: 0;"
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="cft" value="cft" />
                                        <img src="//s01.mifile.cn/i/banklogo/cft.png" alt="" style="margin-left: 0;"
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="micash" value="micash" />
                                        <img src="//s01.mifile.cn/i/banklogo/micash.png?ver2015" alt="" style="margin-left: 0;"
                                        />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-box ">
                            <div class="payment-header clearfix">
                                <h3 class="title">
                                    银行借记卡及信用卡
                                </h3>
                            </div>
                            <div class="payment-body">
                                <ul class="clearfix payment-list payment-list-much J_paymentList J_linksign-customize">
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CMB" value="CMB" />
                                        <img src="./imgs/payOnline_zsyh.png" alt="" />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="ICBCB2C" value="ICBCB2C"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_gsyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CCB" value="CCB" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_jsyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="ABC" value="ABC" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_nyyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="BOCB2C" value="BOCB2C" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_zgyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="COMM" value="COMM" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_jtyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="PSBC-DEBIT" value="PSBC-DEBIT"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_youzheng.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="GDB" value="GDB" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_gfyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="SPDB" value="SPDB" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_pufa.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CEBBANK" value="CEBBANK"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_gdyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="SPABANK" value="SPABANK"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_payh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CIB" value="CIB" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_xyyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CMBC" value="CMBC" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_msyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="BOB" value="BOB" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_bjyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CITIC" value="CITIC" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_zxyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="SDB" value="SDB" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_sfyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="SHBANK" value="SHBANK" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_shyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="BJRCB" value="BJRCB" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_bjnsyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="NBBANK" value="NBBANK" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_nbyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="HZCBB2C" value="HZCBB2C"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_hzyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="SHRCB" value="SHRCB" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_shnsyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="FDB" value="FDB" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_fcyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_showMore">
                                        <span class="text hide">
                                            查看更多
                                        </span>
                                        <span class="text ">
                                            收起更多
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-box payment-box-last ">
                            <div class="payment-header clearfix">
                                <h3 class="title">
                                    快捷支付
                                </h3>
                                <span class="desc">
                                    （支持以下各银行信用卡以及部分银行借记卡）
                                </span>
                            </div>
                            <div class="payment-body">
                                <ul class="clearfix payment-list  J_paymentList J_linksign-customize">
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CMB-KQ" value="CMB-KQ" />
                                        <img src="./imgs/payOnline_zsyh.png" alt="" />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="SPABANK-KQ" value="SPABANK-KQ"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_payh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CCB-KQ" value="CCB-KQ" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_jsyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="ICBCB2C-KQ" value="ICBCB2C-KQ"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_gsyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CITIC-KQ" value="CITIC-KQ"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_zxyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CEBBANK-KQ" value="CEBBANK-KQ"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_gdyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="BOCB2C-KQ" value="BOCB2C-KQ"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_zgyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="SRCB-KQ" value="SRCB-KQ"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_shncsyyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="JSB-KQ" value="JSB-KQ" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_jiangsshuyh.png?ver2015"
                                        alt="" />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CMBC-KQ" value="CMBC-KQ"
                                        />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_msyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="CIB-KQ" value="CIB-KQ" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_xyyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="ABC-KQ" value="ABC-KQ" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_nyyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="SDB-KQ" value="SDB-KQ" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_sfyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="HXB-KQ" value="HXB-KQ" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_hyyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="GDB-KQ" value="GDB-KQ" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_gfyh.png?ver2015" alt=""
                                        />
                                    </li>
                                    <li class="J_bank">
                                        <input type="radio" name="payOnlineBank" id="BOB-KQ" value="BOB-KQ" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_bjyh.png?ver2015" alt=""
                                        />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section section-installment" id="J_paymentFenqi">
                        <div class="payment-box">
                            <div class="payment-header clearfix">
                                <h3 class="title">
                                    分期付款
                                </h3>
                                <span class="desc">
                                    （支持金额在 600~30000元 的订单）
                                </span>
                            </div>
                            <div class="payment-body">
                                <ul class="clearfix payment-list J_paymentList J_linksign-customize J_tabSwitch">
                                    <li class="J_bank fenqi" data-isinstalment="true">
                                        <input autocomplete="off" type="radio" name="payOnlineBank" id="cmbinstal"
                                        value="cmbinstal" />
                                        <img src="./imgs/payOnline_zsyh.png" alt="" />
                                    </li>
                                    <li class="J_bank fenqi" data-isinstalment="true">
                                        <input autocomplete="off" type="radio" name="payOnlineBank" id="CCB-INSTAL"
                                        value="CCB-INSTAL" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_jsyh.png" alt="" />
                                    </li>
                                    <li class="J_bank fenqi" data-isinstalment="true">
                                        <input autocomplete="off" type="radio" name="payOnlineBank" id="ICBCB2C-INSTAL"
                                        value="ICBCB2C-INSTAL" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_gsyh.png" alt="" />
                                    </li>
                                    <li class="J_bank fenqi" data-isinstalment="true">
                                        <input autocomplete="off" type="radio" name="payOnlineBank" id="ABC-INSTAL"
                                        value="ABC-INSTAL" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_nyyh.png" alt="" />
                                    </li>
                                    <li class="J_bank fenqi" data-isinstalment="true">
                                        <input autocomplete="off" type="radio" name="payOnlineBank" id="antinstal"
                                        value="antinstal" />
                                        <img src="//s01.mifile.cn/i/banklogo/payOnline_ant_huabei.png" alt=""
                                        />
                                    </li>
                                </ul>
                                <div class="tab-container clearfix isinstalment-box">
                                    <div class="tab-content  clearfix">
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    3期 ，每期约 738.32元
                                                </h3>
                                                <p>
                                                    手续费 76.97元， 共 2214.97元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            3.6%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            76.97元 ≈ 2138.00元 × 3.6%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2214.97元 = 2138.00元（订单应付金额）+ 76.97元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            738.32元 = 2214.97元 ÷ 3期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_3"
                                                value="3">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    6期 ，每期约 373.44元
                                                </h3>
                                                <p>
                                                    手续费 102.62元， 共 2240.62元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            4.8%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            102.62元 ≈ 2138.00元 × 4.8%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2240.62元 = 2138.00元（订单应付金额）+ 102.62元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            373.44元 = 2240.62元 ÷ 6期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_6"
                                                value="6">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    12期 ，每期约 191元
                                                </h3>
                                                <p>
                                                    手续费 153.94元， 共 2291.94元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            7.2%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            153.94元 ≈ 2138.00元 × 7.2%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2291.94元 = 2138.00元（订单应付金额）+ 153.94元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            191元 = 2291.94元 ÷ 12期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_12"
                                                value="12">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-desc">
                                            分期付款说明：
                                            <br/>
                                            每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                        </div>
                                    </div>
                                    <div class="tab-content  clearfix">
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    3期 ，每期约 723.36元
                                                </h3>
                                                <p>
                                                    手续费 32.07元， 共 2170.07元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            1.5%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            32.07元 ≈ 2138.00元 × 1.5%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2170.07元 = 2138.00元（订单应付金额）+ 32.07元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            723.36元 = 2170.07元 ÷ 3期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_3"
                                                value="3">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    6期 ，每期约 363.46元
                                                </h3>
                                                <p>
                                                    手续费 42.76元， 共 2180.76元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            2%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            42.76元 ≈ 2138.00元 × 2%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2180.76元 = 2138.00元（订单应付金额）+ 42.76元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            363.46元 = 2180.76元 ÷ 6期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_6"
                                                value="6">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    12期 ，每期约 185.29元
                                                </h3>
                                                <p>
                                                    手续费 85.52元， 共 2223.52元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            4%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            85.52元 ≈ 2138.00元 × 4%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2223.52元 = 2138.00元（订单应付金额）+ 85.52元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            185.29元 = 2223.52元 ÷ 12期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_12"
                                                value="12">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-desc">
                                            分期付款说明：
                                            <br/>
                                            每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                        </div>
                                    </div>
                                    <div class="tab-content  clearfix">
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    3期 ，每期约 721.22元
                                                </h3>
                                                <p>
                                                    手续费 25.66元， 共 2163.66元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            1.2%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            25.66元 ≈ 2138.00元 × 1.2%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2163.66元 = 2138.00元（订单应付金额）+ 25.66元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            721.22元 = 2163.66元 ÷ 3期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_3"
                                                value="3">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    6期 ，每期约 362.75元
                                                </h3>
                                                <p>
                                                    手续费 38.48元， 共 2176.48元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            1.8%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            38.48元 ≈ 2138.00元 × 1.8%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2176.48元 = 2138.00元（订单应付金额）+ 38.48元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            362.75元 = 2176.48元 ÷ 6期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_6"
                                                value="6">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    12期 ，每期约 184.58元
                                                </h3>
                                                <p>
                                                    手续费 76.97元， 共 2214.97元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            3.6%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            76.97元 ≈ 2138.00元 × 3.6%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2214.97元 = 2138.00元（订单应付金额）+ 76.97元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            184.58元 = 2214.97元 ÷ 12期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_12"
                                                value="12">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-desc">
                                            分期付款说明：
                                            <br/>
                                            每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                        </div>
                                    </div>
                                    <div class="tab-content  clearfix">
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    3期 ，每期约 721.22元
                                                </h3>
                                                <p>
                                                    手续费 25.66元， 共 2163.66元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            1.2%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            25.66元 ≈ 2138.00元 × 1.2%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2163.66元 = 2138.00元（订单应付金额）+ 25.66元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            721.22元 = 2163.66元 ÷ 3期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_3"
                                                value="3">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                                <div style="margin-top:4px;font-size: 12px">
                                                    <span>
                                                        农行分期暂只支持K宝/K令支付
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    6期 ，每期约 363.82元
                                                </h3>
                                                <p>
                                                    手续费 44.9元， 共 2182.9元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            2.1%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            44.9元 ≈ 2138.00元 × 2.1%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2182.9元 = 2138.00元（订单应付金额）+ 44.9元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            363.82元 = 2182.9元 ÷ 6期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_6"
                                                value="6">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                                <div style="margin-top:4px;font-size: 12px">
                                                    <span>
                                                        农行分期暂只支持K宝/K令支付
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    12期 ，每期约 185.12元
                                                </h3>
                                                <p>
                                                    手续费 83.38元， 共 2221.38元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            3.9%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            83.38元 ≈ 2138.00元 × 3.9%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2221.38元 = 2138.00元（订单应付金额）+ 83.38元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            185.12元 = 2221.38元 ÷ 12期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_12"
                                                value="12">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                                <div style="margin-top:4px;font-size: 12px">
                                                    <span>
                                                        农行分期暂只支持K宝/K令支付
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="isinstalment-desc">
                                            分期付款说明：
                                            <br/>
                                            每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                        </div>
                                    </div>
                                    <div class="tab-content  clearfix">
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    3期 ，每期约 729.06元
                                                </h3>
                                                <p>
                                                    手续费 49.17元， 共 2187.17元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            2.3%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            49.17元 ≈ 2138.00元 × 2.3%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2187.17元 = 2138.00元（订单应付金额）+ 49.17元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            729.06元 = 2187.17元 ÷ 3期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_3"
                                                value="3">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    6期 ，每期约 372.37元
                                                </h3>
                                                <p>
                                                    手续费 96.21元， 共 2234.21元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            4.5%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            96.21元 ≈ 2138.00元 × 4.5%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2234.21元 = 2138.00元（订单应付金额）+ 96.21元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            372.37元 = 2234.21元 ÷ 6期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_6"
                                                value="6">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-item  clearfix">
                                            <div class="item-header">
                                                <h3>
                                                    12期 ，每期约 192.42元
                                                </h3>
                                                <p>
                                                    手续费 171.04元， 共 2309.04元
                                                </p>
                                            </div>
                                            <div class="item-body">
                                                <ul>
                                                    <li class="clearfix">
                                                        <span>
                                                            手续费率：
                                                        </span>
                                                        <p>
                                                            8.0%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            需手续费：
                                                        </span>
                                                        <p>
                                                            171.04元 ≈ 2138.00元 × 8.0%
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            实付金额：
                                                        </span>
                                                        <p>
                                                            2309.04元 = 2138.00元（订单应付金额）+ 171.04元（手续费）
                                                        </p>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span>
                                                            每期需付：
                                                        </span>
                                                        <p>
                                                            192.42元 = 2309.04元 ÷ 12期
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-footer">
                                                <input type="radio" name="installments" id="installments_cmbinstal_12"
                                                value="12">
                                                <a href="javascript:void(0);" class="btn J_installmentConfirmBtn">
                                                    选择该分期方式
                                                </a>
                                            </div>
                                        </div>
                                        <div class="isinstalment-desc">
                                            分期付款说明：
                                            <br/>
                                            1、选择蚂蚁花呗分期后，如更改分期数或切换其他支付方式遇到问题，推荐您使用小米钱包进行支付。
                                            <br/>
                                            2、每期还款金额是根据你的订单估算得出的金额，实际支付数额请以支付宝账单为准，支付宝有权决定是否接受您的分期付款申请。
                                        </div>
                                    </div>
                                </div>
                                <div class="isinstalment-desc" id="J_isinstalmentPublicDesc">
                                    分期付款说明：
                                    <br>
                                    每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--现金账户 提示框-->
        <div class="modal  modal-hide modal-balance-pay" id="J_balancePay">
            <div class="modal-header">
                <h3>
                    现金账户安全验证
                </h3>
                <span class="close" data-dismiss="modal">
                    <i class="iconfont">
                        &#xe602;
                    </i>
                </span>
            </div>
            <div class="modal-body">
                <p>
                    为了确保您的购物安全
                    <br>
                    已向您当前的联系电话
                    <span class="num" id="J_cashPayPhone">
                    </span>
                    发送验证码
                </p>
                <div class="form-section">
                    <label class="input-label" for="verifycode">
                        请输入验证码
                    </label>
                    <input class="input-text" type="text" id="verifycode" name="verifycode">
                    <span class="btn btn-block hide" id="J_sendAgain">
                    </span>
                </div>
                <div class="tip" id="J_checkCodeTip">
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-gray" data-dismiss="modal" href="javascript:void(0);">
                    取消
                </a>
                <a class="btn btn-primary" id="J_checkCodeBtn" href="javascript:void(0);">
                    确认
                </a>
            </div>
        </div>
        <!-- 支付提示框 -->
        <div class="modal fade modal-hide modal-pay-tip" id="J_payTip" aria-hidden="false">
            <div class="modal-header">
                <h3>
                    正在支付...
                </h3>
                <a class="close" data-dismiss="modal" href="javascript: void(0);">
                    <i class="iconfont">
                        &#xe602;
                    </i>
                </a>
            </div>
            <div class="modal-body clearfix">
                <div class="success">
                    <h4>
                        支付成功了
                    </h4>
                    <p>
                        <a href="http://order.mi.com/user/orderView/1160619386700878">
                            立即查看订单详情 &gt;
                        </a>
                    </p>
                </div>
                <div class="fail">
                    <h4>
                        如果支付失败
                    </h4>
                    <p>
                        <a href="http://bbs.xiaomi.cn/thread/index/tid/11544653" target="_blank">
                            查看支付常见问题 &gt;
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="modal modal-hide fade modal-alert" id="J_modalAlert">
            <div class="modal-bd">
                <div class="text">
                    <h3 id="J_alertMsg">
                    </h3>
                </div>
                <div class="actions">
                    <button class="btn btn-primary" data-dismiss="modal">
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
        <div class="modal modal-hide fade modal-alipay" id="J_modalAlipay">
            <div class="modal-bd">
                <div class="loading">
                    <div class="loader">
                    </div>
                </div>
                <iframe name="alipayQrcodeIframe" scrolling="no" frameborder="0" width="100%"
                height="100%">
                </iframe>
            </div>
            <a class="close" data-dismiss="modal" href="javascript: void(0);">
                <i class="iconfont">
                    &#xe602;
                </i>
            </a>
        </div>
        <div class="deliver-beta hide" id="J_deliverBeta">
            <p>
                预计送达时间功能处于测试阶段，若您在下单时已选择“周末送货”或“工作日送货”，则会顺延至您要求的时间，如果发现预计送达时间不准确，期待您的反馈，我们会及时改进。
            </p>
            <a href="http://static.mi.com/feedback/" target="_blank">
                问题反馈 &gt;
            </a>
            <i class="arrow arrow-a">
            </i>
            <i class="arrow arrow-b">
            </i>
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
                            <a rel="nofollow" href="//www.mi.com/service/help_center/guide/" target="_blank">
                                购物指南
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/service/help_center/pay/" target="_blank">
                                支付方式
                            </a>
                        </dd>
                        <dd>
                            <a rel="nofollow" href="//www.mi.com/service/help_center/delivery/" target="_blank">
                                配送方式
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
                <p class="queue-tip">
                    抱歉，目前排队人数较多，导致服务器压力山大，请您耐心排队等待，
                    <br>
                    我们将在稍后告诉您排队结果。
                </p>
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
        <script src="//s01.mifile.cn/js/base.min.js?v2016d16">
        </script>
        <script>
            (function() {
                MI.namespace('GLOBAL_CONFIG');
                MI.GLOBAL_CONFIG = {
                    orderSite: 'http://order.mi.com',
                    wwwSite: '//www.mi.com',
                    cartSite: '//cart.mi.com',
                    itemSite: '//item.mi.com',
                    assetsSite: '//s01.mifile.cn',
                    listSite: '//list.mi.com',
                    searchSite: '//search.mi.com',
                    mySite: '//my.mi.com',
                    damiaoSite: 'https://tp.hd.mi.com/',
                    damiaoGoodsId: [],
                    logoutUrl: 'http://order.mi.com/site/logout',
                    staticSite: '//static.mi.com',
                    quickLoginUrl: 'https://account.xiaomi.com/pass/static/login.html'
                };
                MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
                MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
                MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
                MI.miniCart.init();
                //MI.updateMiniCart();
            })();

            < /body>
</html > 