@extends('home.base2')
@section('content2')
	<div class="span16">
		<div class="uc-box uc-main-box">
			<div class="uc-content-box">
				<div class="box-hd">
					<h1 class="title">
						喜欢的商品
					</h1>
					<div class="more clearfix hide">
						<ul class="filter-list J_addrType">
						
							<li class="first active">
								<a href="http://order.mi.com/user/favorite?r=81445.1466433987" data-stat-id="bb5f4704448262e5"
								onclick="_msq.push(['trackEvent', 'feb1a1bd3287842e-bb5f4704448262e5', 'http://order.mi.com/user/favorite', 'pcpid']);">
									喜欢的商品
								</a>
							</li>
							<li>
								<a href="http://order.mi.com/user/favorite?is_sale=0&amp;r=81445.1466433987"
								data-stat-id="ca8474002200309a" onclick="_msq.push(['trackEvent', 'feb1a1bd3287842e-ca8474002200309a', 'http://order.mi.com/user/favorite', 'pcpid']);">
									已下架的商品
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="box-bd">
					<div class="xm-goods-list-wrap">
						<ul class="xm-goods-list clearfix">
							@foreach($goods as $key=>$one)
							<li class="xm-goods-item">
								<div class="figure figure-img">
									<a href="http://item.mi.com/1160800006.html" target="_blank" data-stat-id="a2a241c8d39246c9"
									onclick="_msq.push(['trackEvent', 'feb1a1bd3287842e-a2a241c8d39246c9', '//item.mi.com/1160800006.html', 'pcpid']);">
										<img src="/{{$one->logo}}" style="width:140px">
									</a>
								</div>
								<h3 class="title">
									<a href="http://item.mi.com/1160800006.html" target="_blank" data-stat-id="b54dc794307ba514"
									onclick="_msq.push(['trackEvent', 'feb1a1bd3287842e-b54dc794307ba514', '//item.mi.com/1160800006.html', 'pcpid']);">
									  {{$one->gname}}
									</a>
								</h3>
								<p class="price">
								  {{$one->gprice}}元
								</p>
								<div class="actions">
									
									<a class="btn btn-small btn-primary J_addCart" href="/buygoods/{{$one->gid}}">
										立即购买
									</a>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="xm-pagenavi">
					</div>
				</div>
			</div>
		</div>
	</div>
 @endsection	