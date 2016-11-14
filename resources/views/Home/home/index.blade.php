@extends('home.basea')
@section('content')
<style>

        *{margin:0;padding:0;list-style:none}
       .slide{
               display:none;
           }
       .slide.on{
               display:block;
               float: none;
               list-style: none;
               position: absolute;
               width: 1226px;
               z-index: 50;
               opacity:1;
        }
        #order{
            position:absolute;
            right:30px;
            bottom:10px;
            z-index: 99;
            opacity:0.5;

      }

      #order li{
              float:left;
              padding:8px 12px;
              background:#FFF;
              margin:5px;
              color:#000;
              font-weight:800;
              font-family:"黑体";
              opacity:0.7;
              cursor:pointer;
      }

      #order li.on{
              background:pink;
      }

</style>
<div class="home-hero-container container">
    <div class="home-hero">
        <div class="home-hero-slider">

           <!--  <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播">

                   <div class="slide loaded">
                       <a href="//www.mi.com/hongmi3s/" data-stat-aid="AA13054" data-stat-pid="2_15_1_67" target="_blank"><img src="{{URL::asset('Picture/1.jpg')}}"  /></a>
                   </div>
           </div> -->

                <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播">
                  @foreach($ppts as $num => $ppt)
                    @if($num === 0)
                    <div class="slide loaded on ">
                       <a href="//www.mi.com/hongmi3s/" class="haha haha{{$ppt->id}}" data-stat-aid="AA13054" data-stat-pid="2_15_1_67" target="_blank"><img src="/{{$ppt->photo}}"  /></a>
                    </div>
                    @else
                    <div class="slide loaded ">
                       <a href="//www.mi.com/hongmi3s/" class="haha haha{{$ppt->id}}" data-stat-aid="AA13054" data-stat-pid="2_15_1_67" target="_blank"><img src="/{{$ppt->photo}}"  /></a>
                    </div>
                    @endif
                  @endforeach
                    <!-- <div class="slide loaded">
                       <a href="//www.mi.com/hongmi3s/" class="haha2" data-stat-aid="AA13054" data-stat-pid="2_15_1_67" target="_blank"><img src="{{URL::asset('Picture/2.jpg')}}"  /></a>
                    </div>
                     <div class="slide loaded">

                       <a href="//www.mi.com/hongmi3s/" class="haha3" data-stat-aid="AA13054" data-stat-pid="2_15_1_67" target="_blank"><img src="{{URL::asset('Picture/1.jpg')}}"  /></a>

                    </div>

                    <div class="slide loaded">
                       <a href="//www.mi.com/hongmi3s/" class="haha4" data-stat-aid="AA13054" data-stat-pid="2_15_1_67" target="_blank"><img src="{{URL::asset('Picture/2.jpg')}}"  /></a>
                    </div>
                     <div class="slide loaded">

                       <a href="//www.mi.com/hongmi3s/" class="haha5" data-stat-aid="AA13054" data-stat-pid="2_15_1_67" target="_blank"><img src="{{URL::asset('Picture/1.jpg')}}"  /></a>

                    </div> -->

                    <ol id="order">
                      @foreach($ppts as $num => $ppt)
                        <li class="hehe ol" id="{{$ppt->id}}">{{$num+1}}</li>
                      <!--   <li  class="hehe on">2</li>
                      <li class="hehe">3</li>
                      <li class="hehe">4</li>
                      <li class="hehe">5</li> -->
                      @endforeach
                    </ol>


                </div>


        </div>

        <script>
            $(function(){

                //获取数字id

                //console.log(olid);
                //数字鼠标移入事件
                $('.hehe').mouseover(function(){
                   var olid = $(this).attr('id');
                   $('.slide').removeClass('on');
                    //当前数字添加类on
                    $('.ol').removeClass('on');
                    $(this).addClass('on');

                    //对应图片添加类on
                      $('.haha'+olid).parent().addClass('on');

                });

               /* $("#J_homeSlider").mouseleave(function(){
                    $('').addClass('on');
                });
*/

            });

            /*(function(){
                //幻灯片播放

                //获取5个序号
                var olis=order.getElementsByTagName('li');
                //获取5张图片
                var ulis=lun.getElementsByTagName('li');

                //为5个序号添加事件
                for(var i=0;i<olis.length;i++){
                    //为元素新增属性
                    olis[i].num=i;
                    olis[i].onmouseover=function(){
                        //隐藏所有序号和图片
                        //图片
                        for(var j=0;j<ulis.length;j++){
                            ulis[j].removeAttribute('class');
                        }

                        for(var j=0;j<ulis.length;j++){
                            olis[j].removeAttribute('class');
                        }
                        //显示当前即可(序号)
                        this.setAttribute('class','on');
                        //显示当前图片
                        ulis[this.num].setAttribute('class','on');
                    }
                }



            })()*/


        </script>

<script>
$(function(){
    var i=0;
    var big_banner_pic = $("#big_banner_pic");
    var allimg=$("#big_banner_pic li").length;
    function img_change(){
        var img_i=i*-1226+"px";
        big_banner_pic.animate({opacity:".2"},100,function(){
            big_banner_pic.css("left",img_i );
            big_banner_pic.animate({
                opacity: "1"
            }, 100);
        })
    }
    function automatic(){
        i+=1;
        if(i>=allimg){
            i=0;
        }
        img_change();
    }
    change_self_time = setInterval(automatic, 3000);
    //轮播上一张下一张图标控制
    $("#big_banner_change_wrap").hover(function(){
        clearInterval(change_self_time);
        $("#big_banner_change_wrap").children().show();
    },function(){
        change_self_time = setInterval(automatic, 3000);
        $("#big_banner_change_wrap").children().hide();
    })
    $("#big_banner_change_prev").click(function(){
        i += 1;
        if (i >= allimg) {
            i = 0;
        }
        img_change();
    })
    $("#big_banner_change_next").click(function(){
        i -= 1;
        if (i <= 0) {
            i = allimg - 1;
        }
        img_change();
    })
})

</script>
        <div class="home-hero-sub row">
            <div class="span4">
                <ul class="home-channel-list clearfix">
                                        <li class="top left"><a href="//www.mi.com/buyphone/telcom/" data-stat-aid="AA11221" data-stat-pid="2_44_1_250" target="_blank"><i class="iconfont">&#xe640;</i>电信专场</a></li>
                                        <li class="top"><a href="http://qiye.mi.com/" data-stat-aid="AA10868" data-stat-pid="2_44_2_251" target="_blank"><i class="iconfont">&#xe63e;</i>企业团购</a></li>
                                        <li class="top"><a href="//item.mi.com/re" data-stat-aid="AA10869" data-stat-pid="2_44_3_252" target="_blank"><i class="iconfont">&#xe63b;</i>官翻产品</a></li>
                                        <li class="left"><a href="//www.mi.com/mimobile/" data-stat-aid="AA11244" data-stat-pid="2_44_4_253" target="_blank"><i class="iconfont"></i>小米移动</a></li>
                                        <li class=""><a href="http://huanxin.mi.com/" data-stat-aid="AA12084" data-stat-pid="2_44_5_254" target="_blank"><i class="iconfont">&#xe900;</i>以旧换新</a></li>
                                        <li class=""><a href="http://recharge.10046.mi.com/" data-stat-aid="AA10871" data-stat-pid="2_44_6_255" target="_blank"><i class="iconfont"></i>话费充值</a></li>

                </ul>
            </div>
            <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图">
                <ul class="home-promo-list clearfix">
                    <li class="first">
                        <a class="item" href="//item.mi.com/buyphone/hongmi3/" data-stat-aid="AA12980" data-stat-pid="2_16_1_77" target="_blank"><img alt="红米3 现货-0602" src="Picture/78960bf797f84bb680de1bffd778e9ea.gif" srcset="http://i3.mifile.cn/a4/768903ea-bf1f-41e5-ae7e-398a7d9395d9 2x" /></a>
                    </li>
                    <li>
                        <a class="item" href="//www.mi.com/mjsmartlamp/" data-stat-aid="AA13061" data-stat-pid="2_16_2_78" target="_blank"><img alt="米家 LED 智能台灯" src="Picture/35a45992311042e98c7a0c49d52eed85.gif" srcset="http://i3.mifile.cn/a4/615973b9-0abd-4185-a05d-5e41782993a2 2x" /></a>
                    </li>
                    <li>
                        <a class="item" href="//www.mi.com/shouhuan2/" data-stat-aid="AA13063" data-stat-pid="2_16_3_79" target="_blank"><img alt="小米手环2-0614" src="Picture/9dd244cbfbd04419be0af2c678f52f60.gif" srcset="http://i3.mifile.cn/a4/1bfd1ad2-0921-434b-a5fb-c7f6d92facb0 2x" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="home-star-goods" id="J_homeStar">
		@foreach($results as $types => $goods)

        <div class="xm-plain-box">

            <div class="box-hd">
                <h2 class="title">{{$types}}</h2>
                <div class="more"></div>
            </div>

            <div class="box-bd">

                <ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
				@foreach($goods as $good)
                    <li class="rainbow-item-1">
                        <a class="thumb" href="/buygoods/{{$good->gid}}" data-stat-aid="AA12868" data-stat-pid="2_17_1_80" target="_blank">
							<img src="/{{$good->logo}}" alt="{{$good->gname}}" />
						</a>
                        <h3 class="title">
							<a href="//item.mi.com/static/buymitv" data-stat-aid="AA12868" data-stat-pid="2_17_1_80" target="_blank">{{$good->gname}}</a>
						</h3>
                        <p class="desc"></p>
                        <p class="price">{{$good->gprice}}元</p>
                    </li>
  				@endforeach
                </ul>
            </div>
        </div>
         @endforeach
    </div>

</div>

@endsection




