@extends('home.base')
@section('content')
	<!-- S 面包屑 -->
	<div class="breadcrumbs">
		<div class="container ">
			<a href='#'>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小米评论
			</a>
			<span class="sep">
				&gt;
			</span>
			<a href="#">
				留言板 
			</a>

		</div>
	</div>
	<!-- E 面包屑 -->
	
	<div class="goods-comment-detail">
		<div class="container">
			<div class="row">
				<div class="span6 goods-detail-info-block" style="float:right">
					<div class="goods-detail-info">
						<div class="goods-img-block">
							<a target="_blank" href="">
								<img src="/{{$gd->logo}}" class='J_cartBigImg'
								alt="">
							</a>
						</div>
						<div class="goods-name J_cartGoodsName">
						{{$gd->gname}}
						</div>
						<div class="goods-price">
							<b>
							
							</b>
							<i>
							{{$gd->gprice}}	&nbsp;元
							</i>
						</div>
						 <div class="goods-price">
							<b>
							{{$gd->state ? '在售' : '已售完'}}
							</b>
						</div>
					</div>
					<div class="goods-cart-btn-block " id='J_cartBtnBlock'>
						<a href="/buygoods/{{$gd->gid}}" id="goodsDetailAddCartBtn"
						class="btn btn-primary goods-add-cart-btn" data-disabled="false" data-gid="2153200001"
						data-package="false">
							立即购买
						</a>
					</div>
			  </div>
			@if($result == null)
			
				<div class="span14 goods-comment-detail-info-block" style="position:relative;top:200px;left:200px">
					<span style="font-size:18px">还没有评论呢!请购买后评论!!!</span>
				</div>
			@else
			@foreach($result as $one)
				<div class="span14 goods-comment-detail-info-block">
					<div class="goods-comment-detail-info" id='J_commentDetailBlock' data-id='131247233'>
					<div class="user-image"> 
                        <img src="/{{$one->photo}}" alt=""> 
                    </div>
						<div class="user-emoj">
							超爱
							<i class="iconfont">
								&#xe604;
							</i>
						</div>
						<div class="user-name-info">
							
							<span class="user-time">
								{{date('Y-m-d',$one->time)}}									
							</span>
							<span class="pro-info">
								评论
							</span>
						</div>
						<dl class="user-comment">
							<dt class="user-comment-content J_commentContent">
								<p class="content-detail">
								<img src="/{{$one->photodd}}" style="width:200px;height:200px"/>
									{{$one->content}}  
									
								</p>
								<div class="content-img format-5" style="height:50px">
														   
								</div>
							</dt>
							 @if(Session::get('id') == null)
								 <span></span>
							@else
							<dd class="user-comment-self-input">
								<form action="/revert/discuss" method="post" enctype="multipart/form-data">
									{!!csrf_field()!!}
									<div class="input-block">
										<input type="text" name="content" placeholder="回复楼主" class="J_commentAnswerInput">
										<input type="hidden" name="comment_id" value="{{$one->comment_id}}">
										<input type="hidden" name="gid" value="{{$one->gid}}">
										<input type="hidden" name="user_id" value="{{Session::get('id')}}">
										<input type="submit" value="回复" class="btn  answer-btn J_commentAnswerBtn"/>
									</div>
								</form>
							</dd>
							@endif	
							
							
						@foreach($res as $two)
						<dd id="J_userCommentAnserBlock">
							<div class="user-comment-answer">
								<img class='self-image' src="/{{$two->photo}}" />
 
								<p>{{$two->content}}<span class='answer-user-name' >--{{$two->name}}</span><span class="user-time">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{date('Y-m-d',$two->time)}}回复</span></p>
							</div>
						</dd>
						@endforeach
						</dl>
					</div>
					<div class="goods-comment-other-content">
					</div>
				</div>
				@endforeach
				@endif
			</div>
		</div>
	</div>
 @endsection	