	@extends('home.base')
	@section('content')
		<div class="page-main user-main">
            <div class="container">
                <div class="row">
					<div class="span4">
                        <div class="uc-box uc-sub-box">
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">
                                        订单中心
                                    </h3>
                                </div>
                                <div class="box-bd">
                                    <ul class="uc-nav-list J_navList">
                                        <li class="active">
                                            <a class="J_noRandom" href="/home/order">
                                                我的订单
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/evaluate/appraise" data-count-style="bracket">
                                                评价晒单
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">
                                        个人中心
                                    </h3>
                                </div>
                                <div class="box-bd">
                                    <ul id="J_orderNavList" class="uc-nav-list">
                                        <li>
                                            <a href="/oneself/centre">
                                                我的个人中心
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/like/goods/">
                                                喜欢的商品
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/discount/coupon/">
                                                优惠券
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/address">
                                                收货地址
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">
                                        账户管理
                                    </h3>
                                </div>
                                <div class="box-bd">
                                    <ul class="uc-nav-list">
                                        <li>
                                            <a href="/person/details" target="_blank">
                                                个人信息
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/oneself/safety"
                                            target="_blank">
                                                修改密码
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					@yield('content2')
				</div>
			</div>
        </div>
	
	@endsection