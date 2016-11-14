
		@extends('home.base2')
		@section('content2')
			<div class="span16">
				<div class="breadcrumbs">
					<div class="container">
						<a href='//www.mi.com/index.html'>
							首页
						</a>
						<span class="sep">
							&gt;
						</span>
						<span>
							收货地址
						</span>
					</div>
				</div>
        
                        <div class="uc-box uc-main-box">
                            <div class="uc-content-box">
                                <div class="box-hd">
                                    <h1 class="title">
                                        收货地址
                                    </h1>
                                    <div class="more clearfix">
                                        <ul class="filter-list J_addrType">
                                            <li class="first active">
                                                <a href="#">
                                                    普通收货地址
                                                </a>
                                            </li>
                                            <li class="">

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-bd">
                                    <div class="user-address-list J_addressList clearfix">
                                        <a class="address-item address-item-new" id="J_newAddress" href="JavaScript:void(0)" onclick="show()">
                                            <i class="iconfont">
                                                &#xe609;
                                            </i>
											添加新地址
                                        </a>
										@foreach($address as $one)
                                        <div class="address-item J_addressItem">
                                            <dl>
                                                <dt>
                                                    <em class="uname">
                                                        {{$one->name}}
                                                    </em>
                                                </dt>
                                                <dd class="utel">
                                                   {{$one->phone}}
                                                </dd>
                                                <dd class="uaddress">
                                                    {{$one->city}}市 
													{{$one->area}}
                                                    <br />
                                                    {{$one->address}}
													@if($one->code)
														({{$one->code}})
													@endif
                                                </dd>
                                            </dl>
                                            <div class="actions">
                                                <a class="modify J_addressModify" id="{{$one->id}}" href="javascript:void(0);" onclick="show1()">
                                                    
                                                </a>
                                                <a class="modify J_addressDel" id="{{$one->id}}" href="javascript:void(0);">
                                                    删除
                                                </a>
                                            </div>
                                        </div>
										@endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
					<script>
						$(function(){
							//选中元素
							$('.J_addressDel').click(function(){
											
							//获取当前操作的地址id
							var aid=$(this).attr('id');
							//确定操作
							if(!confirm('您确定删除该收货地址吗？')){
								return false;
							}
							
							//ajax操作
							$.ajax({
								//url
								url:'/address/delete/'+aid,
								type:'get',
								dataType:'text',
								success:function(data){
									//根据返回数据操作
									if(data==1){
										//删除数据
										$('#'+aid).parent().parent().remove();
									}else{
										alert('删除地址失败');
									}
																			
								},
								error:function(){
																	
								}
								
								});
												
							});
												
						});

					</script>
                    <div id="J_modalEditAddress" class="modal fade modal-hide modal-edit-address">
                        <div class="modal-body">
                            <iframe width="100%" height="100%" frameborder="0">
                            </iframe>
                        </div>
                    </div>
					<!--遮照层-->
					<div id="zhezhao" style="position:fixed; top: 0px; right:0px; bottom:0px;height:100%;width:100%;filter:alpha(opacity=60);background-color: #777;left: 0px;display:none;opacity:0.5; z-index:9999;"></div>
					<!--表单层-->
					
					<form class="address-edit-box" id="myform" action="/address/add" method="post" enctype="multipart/form-data" style="width:350px;height:500px;position:absolute;left:-20;top:100px;background:#fff;z-index:9999;padding:20px 0px 10px 20px;display:none;">
						{!!csrf_field()!!}
						<div class="box-main">
							<!--此处修改-->
							<input class="user_id" name="user_id" value="{{Session()->get('id')}}" type="hidden" />
							<div class="form-section">
								姓名：
								<input class="input-text J_addressInput" id="user_name" name="name" placeholder="收货人姓名" type="text">
							</div>
							<div class="form-section">
								手机：
								<input class="input-text J_addressInput" id="user_phone" name="phone" placeholder="11位手机号" type="text">
							</div>
							<div class="form-section">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input-text J_addressInput" id="user_phone" name="province" placeholder="11位手机号" type="text">
								省(自治区)
							</div>
							<div class="form-section">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input-text J_addressInput" id="user_phone" name="city" placeholder="11位手机号" type="text">
								市(地区)
							</div>
							<div class="form-section">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input-text J_addressInput" id="user_phone" name="area" placeholder="11位手机号" type="text">
								县(区)
							</div>
							<div class="form-section">
								地址：&nbsp;<textarea class="input-text J_addressInput" type="text" id="user_adress" name="address" style="resize:none;"></textarea>
							</div>
							<div class="form-section">
								邮编：
								<input class="input-text J_addressInput" id="user_zipcode" name="code" type="text">
							</div>
						</div>
						<div class="form-confirm clearfix">
					
							<input class="btn btn-primary" id="J_cancel" type="submit" value="保存" />
							<a href="javascript:void(0);" class="btn btn-gray" id="J_cancel" data-stat-id="51d8900b7a3585e5" onclick="hide()">取消</a>
						</div>
					</form>
				
		<script>

			//显示登录框和遮照层
			function show(){
				//获取2个层的元素
				var zhezhao=document.getElementById('zhezhao');
				var myform=document.getElementById('myform');
				//计算表单的显示位置
				//获取body的宽度
				 var bodyW=getStyle(document.body,'width')
				//获取表单的宽度
				 var myformW=getStyle(myform,'width');
				 //计算坐标
				 var x=(parseInt(bodyW)-parseInt(myformW))/2;
				 
				 //将坐标设置的表单元素上
				 myform.style.left=x+'px';
				 
				//显示层
				zhezhao.style.display='block';
				myform.style.display='block';
			}
			
			//隐藏这招层和表单
			function hide(){
				//获取2个层的元素
				var zhezhao=document.getElementById('zhezhao');
				var myform=document.getElementById('myform');
				//隐藏元素
				zhezhao.style.display='none';
				myform.style.display='none';
			}
			
			
			
			 function getStyle(elem,styleName){
				if(elem.style[styleName]){//内联样式
					return elem.style[styleName];
				}
				else if(elem.currentStyle){//IE
					return elem.currentStyle[styleName];
				}
				else if(document.defaultView && document.defaultView.getComputedStyle){//DOM
					styleName = styleName.replace(/([A-Z])/g,'-$1').toLowerCase();
					var s = document.defaultView.getComputedStyle(elem,'');
					return s&&s.getPropertyValue(styleName);
				}
				else{//other,for example, Safari
					return null;
				}
			}
		</script>
        @endsection