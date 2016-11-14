@extends('home.base2')
@section('content2')
	<div class="span16">
		<div class="uc-box uc-main-box">
			<div class="uc-content-box coupon-box">
				<div class="box-hd">
					<h1 class="title">
						优惠券
					</h1>
					<div class="more clearfix">
						<ul id="J_couponType" class="filter-list tab-switch">
							<li class="first tab-active">
							<a href="/discount/coupon"> 未使用 </a>
								
							</li>
							<li class="first tab-active">
							 <a href="/discount/lose">  已失效 </a>
							</li>
						</ul>
					</div>
				</div>
				<div class="box-bd">
					<div class="xm-goods-list-wrap">
						<ul class="xm-goods-list clearfix">							
						@foreach($result as $one)
							<li class="xm-goods-item">
								<div class="figure figure-img">
									<a href="http://item.mi.com/1160800006.html" target="_blank" data-stat-id="a2a241c8d39246c9"
									onclick="_msq.push(['trackEvent', 'feb1a1bd3287842e-a2a241c8d39246c9', '//item.mi.com/1160800006.html', 'pcpid']);">
										<img src="/{{$one->dis_picname}}" style="width:200px;height:100px">
									</a>
								</div>
								<h3 class="title">
									<a href="http://item.mi.com/1160800006.html" target="_blank" data-stat-id="b54dc794307ba514"
									onclick="_msq.push(['trackEvent', 'feb1a1bd3287842e-b54dc794307ba514', '//item.mi.com/1160800006.html', 'pcpid']);">
									
									</a>
								</h3>								
								<p class="price">
								{{date('Y-m-d',$one->dis_addtime)}}到{{date('Y-m-d',$one->dis_remove_time)}}结束
								</p>
								<p class="price">
								{{$one->dis_rule}}元优惠券
								</p>
								
								<p class="price">
								请您在规定时间内使用!
								</p>
							</li>
						@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection