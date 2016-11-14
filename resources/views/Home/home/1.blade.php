
<style>

 body{background-image:url(/Picture/home/beijing.jpg);
                       width:100%; 
                       height:10px; 
				text-align:center;
	  background-repeat:no-repeat;
	  background-size:cover;
	  
             } 
			 
				#btn{
						  width:50px;
						  height:50px;
						  border-radius:25px;
						 }/*圆形播放*/
				
				}
				section{
					height:100%;
					width:100%;
		
					text-align:center;
					font-weight:bold;
					color:white;
					border-radius:2px;
				}
				
			</style>
			
			<body>
       <center>
			<div class="home-panel home-rmd">
					<div class="home-panel-topbar">
						<h2 class="home-panel-title" style="color:white;float:left;">☞小米欣赏</h2>
						<!--<h6 class="home-panel-subtitle">
							<a href="#" target="_blank">智能健康</a>
							<a href="#" target="_blank">智能家居</a>
							<a href="#" target="_blank">智能出行</a>
							<a href="#" target="_blank">智能娱乐</a>
						</h6>-->
					</div>
					<div class="home-rmd-main">
						<div class="home-rmd-main">
					<div class="home-rmd-cotent" style="height:550px;	
					"id="fen" >	
					<section>
					<video controls poster="/Picture/home/shuzi.jpg" id="vid"  style="width:100%;height:100%;">
					<source src="/Picture/home/mv.mp4" type="video/mp4"/>
					<source src="/Picture/home/mv.mp4" type='video/ogg;codes="theroa,vorbis"'/>
					<source src="/Picture/home/mv.mp4" type="video/webm"/>
					 亲，您的浏览器已是骨灰级，请更换浏览器！
					</video>
					<br/>
					<button id="btn" onClick="bf()">播放</button>
					<button onClick="zt()">暂停</button>
					<button onClick="quiet(this)">静音</button>
					<button onClick="kj()">快进10秒</button>
					<button onClick="kt()">快退10秒</button>

				<script>
				 var vid=document.getElementById('vid');
				 function bf(){
				 vid.play();
				 }
				 function zt(){
				 vid.pause();
				 }
				 function quiet(obj){
				  if(obj.innerHTML=="静音"){
					  obj.innerHTML="声音";
					  vid.muted=true;
				  }else{
					  obj.innerHTML="静音";
					  vid.muted=false;
				  }
				  
				 }
				 function kj(){
					vid.currentTime+=10; 
				 }
				 function kt(){
				   vid.currentTime-=10;
				 }
				 //播放的速率基本值是1，如果写正数代表倍数，不能写负数， 如果减速是取基本值几分之一
				</script>
				</section>
					</div>
				</div>
				</div>
				
				</center>
				</body>