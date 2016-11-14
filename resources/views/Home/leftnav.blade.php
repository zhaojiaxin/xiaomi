
					 <div class="site-category">
                        <ul id="J_categoryList" class="site-category-list clearfix">
                             @foreach($results as $types => $goods)
                                @if($leftnav[$types] === 1)
                                    <li class="category-item">
                                        <a class="title" href="//www.mi.com/buyphone/">{{$types}}<i class="iconfont"></i></a>
                                        <div class="children clearfix children-col-2">
                                            <ul class="children-list children-list-col children-list-col-1">
                                                 @foreach($goods as $good)
                                                    <li class="star-goods">
                                                        <a class="link" href="/buygoods/{{$good->gid}}">
                                                            <img class="thumb" src="/{{$good->logo}}" width="40" height="40" alt="">
                                                            <span class="text">{{$good->gname}}</span>
                                                        </a>
                                                         <a class="btn btn-line-primary btn-small btn-buy" href="//item.mi.com/buyphone/mi5">选购</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endif
                            @endforeach

                            <!-- 左侧导航js开始 -->
                            <script>
                                $(function(){
	                                    $('.category-item').mouseover(function(){
	                                        // var items =  $(this).index();
	                                       $(this).addClass("category-item-active");

	                                       // $("items > div").eq(items).show();
	                                    }).mouseout(function(){
	                                        $(this).removeClass("category-item-active");
	                                         // $(".category-item > div").hide();
	                                    });
	                                    }
                                    );

                            </script>
                            <!-- 左侧导航js结束 -->
                        </ul>
                    </div>
                    <!-- 左侧导航结束 -->


