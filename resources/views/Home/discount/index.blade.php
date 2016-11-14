@extends('home.base')
@section('content')
<script src="{{URL::asset("/Scripts/jquery-1.8.3.min.js")}}"></script>

	<div class="span16ss">	
		<div class="uc-content-box coupon-box">
			<div class="box-bd">
				<div class="xm-goods-list-wrap" style="position:relative;left:100px">
					<ul class="xm-goods-list clearfix">							
					@foreach($discount as $key=>$one)
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
							{{$one->dis_rule}}元限领								
							</p>
							<p class="price">
							每人仅限领取一次,请登录领取!
							</p>
							<div class="actions">
								
									<a class="sta  btn btn-small btn-primary J_addCart" id="{{$one->dis_id}}" user_id="{{Session()->get('id')}}" href="javascript:void(0)">
									领取</a>
							
								<a class="btn btn-small btn-primary J_addCart" href="/home">
									返回
								</a>
							</div>
						</li>
					@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
		<script>
			$(function(){
				//选中元素
				$('.sta').click(function(){						
					//获取当前操作的用户id
					var dis_id=$(this).attr('id');
					var user_id=$(this).attr('user_id');
					
					//ajax操作
					$.ajax({
						url:'/discount/add/'+dis_id+'/'+user_id,
						type:'get',
						dataType:'text',
						success:function(data){
							//根据返回数据操作
							if(data==1){
							console.log(data);
								//删除数据
								alert('领取成功');
							}else{
								alert('已经领取');
							}	
						},
						error:function(){
						
						}		
					});
				});
			});
		</script>	
@endsection