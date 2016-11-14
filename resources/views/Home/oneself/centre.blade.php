@extends('home.base2')
@section('content2')
	<div class="span16">
		<div class="protal-content-update hide">
			<div class="protal-username">
				Hi, 1107036499        </div>
			<p class="msg">我们做了一个小升级：你的用户名可以直接修改啦，去换个酷炫的名字吧。<a href="https://account.xiaomi.com/pass/auth/profile/home" target="_blank"> 立即前往></a></p>
		</div>
		<div class="uc-box uc-main-box">
			<div class="uc-content-box portal-content-box">
				<div class="box-bd">
					<div class="portal-main clearfix">
						<div class="user-card">
							<h2 class="username">{{$user->name}} </h2>
							<p class="tip">欢迎您～</p>
							<a class="link" href="/oneself/safety">修改个人信息 &gt;</a>
							<img class="avatar" src="/{{$user->photo}}" width="150" height="150"  />
						</div>
						<div class="user-actions">
							<ul class="action-list">
								<li>账户安全：<span class="level level-2">{{$user->safe ? '安全' : '普通'}}</span></li>
								<li>用户邮箱：<span class="tel">{{$user->email}}</span></li>
															
								<li>所在地区：<span class="tel">{{$user->at}}</span></li>
							</ul>
						</div>
					</div>
					<div class="portal-sub">
						<ul class="info-list clearfix">
							<li>
								<h3>已支付的订单：<span class="num">{{$order}}</span></h3>
								<a href="../home/order">查看已支付订单<i class="iconfont">&#xe623;</i></a>
								<img src="{{URL::asset('Images/portal-icon-1.png')}}" alt="" />
							</li>
							<li>
								<h3>未付款的订单：<span class="num">{{$orders}}</span></h3>
								<a href="../home/order">查看未付款订单<i class="iconfont">&#xe623;</i></a>
								<img src="{{URL::asset('Images/portal-icon-2.png')}}" alt="" />
							</li>
							<li>
								<h3>评价商品数：<span class="num">{{$comment}}</span></h3>
								<a href="/evaluate/appraise">查看评价商品<i class="iconfont">&#xe623;</i></a>
								<img src="{{URL::asset('Images/portal-icon-3.png')}}" alt="" />
							</li>
							</li>
							<li>
								<h3>喜欢的商品：<span class="num">{{$goods}}</span></h3>
								<a href="/like/goods">查看喜欢的商品<i class="iconfont">&#xe623;</i></a>
								<img src="{{URL::asset('Images/portal-icon-4.png')}}" alt="" />
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
	</div>      
@endsection	