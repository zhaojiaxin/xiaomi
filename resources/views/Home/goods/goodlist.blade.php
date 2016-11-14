@extends('home.basea')
@section('content')
<link rel="stylesheet" href="/Css/base.min2.css" />
<link rel="stylesheet" href="/Css/category.min.css"/>
<div class="breadcrumbs">
    <div class="container"><a href='//www.mi.com/index.html'>首页</a><span class="sep">&gt;</span><a href="/home/searchlist">所有分类</a></div>
</div>
<div class="container J_category category-index">

	@foreach($results as $type => $result)
    <div class="xm-plain-box category-list">

        <div class="box-hd J_box-hd">
            <h2 class="title"><i class="iconfont haha">&#xe61a;</i>{{$type}}</h2>
        </div>
        <div class="box-bd J_box-bd">
            <ul class="clearfix">
				@foreach($result as $key => $good)
                <li class="hehe">
                    <a href="//www.mi.com/mi5/" class="category-list-img"><img src="/{{$good->logo}}" width="70" height="70" alt="小米手机5" srcset="/{{$good->logo}}" /></a>
                    <a href="//www.mi.com/mi5/" >{{$good->gname}}</a>
                </li>
				@endforeach
            </ul>
        </div>

    </div>
	@endforeach

</div>
<script>
    $(function(){
         $(".J_box-hd").on("click",function(){
            $(this).toggleClass("current");
            var $bd = $(this).siblings(".J_box-bd");
            var $icon = $(this).find("i.iconfont");

            if($bd.is(":visible")){
                $bd.hide();
                $icon.html("&#xe611;");
            } else {
                $bd.fadeIn();
                $icon.html("&#xe61a;");}
          /*  $('.haha').click(function(){
                alert('111');

                });
*/
        });
    });



$(function(){


            //搜索js
            $('#nav-search-input').keyup(function(){

                //alert($(this).val());


                    $.ajax({
                        type: 'get',
                        url: '/goodsSousuo?search='+$(this).val(),
                        //data: $(this).val(),

                        dataType: 'json',
                        success: function(data){
                            //$(this).html(data);
                            //alert(data);
                            var str = '';
                            for(var i=0;i<data.length;i++){


                                 str += '<tr><td></td><td>'+data[i].tid+'</td><td>'+data[i].tname+'</td><td></td></tr>';

                                //console.log(data[i].name);
                                $('#search').html(str);
                            }
                        },
                        error: function(xhr, type){

                        }

                });


                //$(this).val(data);
            });

            //选中那个点击然后把字写入输入框
            // $('.sousuotd').click(function(){
            //  //var zi =$(this).val();
            //  alert('aaa');
            //  //console.log(zi);
            // });
        })

</script>
@endsection

