@extends('home.base')
@section('content')
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
							信息重置成功
						</h4>
					</div>
					<div>
						<div class="regbox" style="position:relative">
							<h1 style="font-size:15px">账号  : {{Session::get('email')}}</h1><p>
							<span style="position:relative;top:8px">您的信息已经重置成功</span>

							<div class="fixed_bot mar_phone_dis1">
								<a class="btn332 btn_reg_1 submit-step" href="/oneself/safety" >返回个人账号</a>

							</div>
						</div>
					</div>
				</div>
			 </div>
		</div>
	</div>
@endsection