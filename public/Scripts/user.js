!function(e){function t(n){if(a[n])return a[n].exports;var o=a[n]={exports:{},id:n,loaded:!1};return e[n].call(o.exports,o,o.exports,t),o.loaded=!0,o.exports}var a={};return t.m=e,t.c=a,t.p="",t(0)}([function(e,t,a){e.exports=a(1)},function(e,t){function a(e){function t(e,t){var a;if(parseInt(t)>99)t="99+";else if(parseInt(t)<=0)return!1;switch(e.attr("data-count-style")){case"bracket":a="（"+t+"）";break;case"bubble":a='<span class="bubble">'+t+"</span>";break;default:a=t}e.append(a)}for(var a in e)if(e.hasOwnProperty(a)){var n=$('[data-count="'+a+'"]');n.length&&t(n,e[a])}}function n(){("undefined"==typeof openUserStatus||0!==openUserStatus)&&$.ajax({url:MI.GLOBAL_CONFIG.orderSite+"/api/getUserStatus.php",data:{bts:$.cookie("xm_order_btauth")||""},dataType:"jsonp",jsonp:"jsonpcallback",error:function(){return!1},success:function(e){1===e.code&&a(e.data)}})}jQuery(function(){n(),$(".J_deliverDesc").off(".beta").on("mouseenter.beta",".beta",function(){var e=$(this).offset(),t=$(this).width(),a=$("#J_deliverBeta"),n=a.outerWidth();console.log(e,a.length),a.removeClass("hide").css({top:e.top+25,left:e.left-n/2+t/2}),window.betaTimer&&clearTimeout(window.betaTimer)}).on("mouseleave.beta",".beta",function(){window.betaTimer=setTimeout(function(){$("#J_deliverBeta").addClass("hide")},1e3)}),$("#J_deliverBeta").off(".beta").on("mouseenter.beta",function(){window.betaTimer&&clearTimeout(window.betaTimer)}).on("mouseleave.beta",function(){window.betaTimer=setTimeout(function(){$("#J_deliverBeta").addClass("hide")},500)})})}]);