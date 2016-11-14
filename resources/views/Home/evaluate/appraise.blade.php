@extends('home.base2')
@section('content2')
	<div class="span16">
		<div class="uc-box uc-main-box">
			<div class="uc-content-box">
				<div class="box-hd">
					<h1 class="title">
						商品评价
					</h1>
					<div class="more clearfix">
						<ul class="filter-list J_addrType">
							<li class="first active">
								<a href="#">
									评价商品
								</a>
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
									<a href="#">
										<img src="/{{$one->logo}}" style="width:90px;height:90px"/>
									</a>
								</div>
								<h3 class="title">
									<p class="price">
									
										{{$one->gname}}
									</p>
								</h3>
								<p class="price">
									{{$one->total_price}}元
								</p>
								<p class="rank">
									{{$one->state ? '在售' : '已售完'}}
								</p>
								<div class="actions">
									<a class="btn btn-primary btn-small"
									href="/evaluate/review/{{$one->gid}}">
										去评价
									</a>
								</div>
							</li>
						
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
  @endsection	