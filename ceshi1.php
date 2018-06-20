<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	ul li{
		list-style-type: none;
	}
		ul li.tu1{
			height:245px;
			position: absolute;
			top:60px;
			left:20px;
			z-index: 12;
			transition-duration: 1s;
		}
		ul li.tu2{
			height:300px;
			position: absolute;
			top:30px;
			left:245px;
			z-index: 999;
				transition-duration: 1s;
		}
		ul li.tu3{
			width:750px;
			height:245px;
			position: absolute;
			z-index: 15;
			top:60px;
			left:570px;
				transition-duration: 1s;
		}
	ul li.tu4{
			width:750px;
			height:245px;
			position: absolute;
			z-index: 15;
			top:60px;
			left:570px;
				transition-duration: 1s;
		}
	ul li.tu5{
			width:750px;
			height:245px;
			position: absolute;
			z-index: 15;
			top:60px;
			left:570px;
				transition-duration: 1s;
		}
		ul li.tu6{
			width:750px;
			position: absolute;
			z-index: 15;
			top:60px;
			left:970px;
				transition-duration: 1s;
		}
	 #ye1{
	margin-top:150px;
	transition-duration:1s;
	display:block;
}
 #ye1 p a{
	display: block;
	text-decoration: none;
	color:#fff;
}
 #ye1 p{
	width:75px;
	height:100px;
	background:gray;
	opacity: 0.3;
	line-height: 100px;
	text-align:center;
	transition-duration: 1s;
}
 #ye1 p#zuo{
	float:left;
	font-size:25px;
	font-weight: bold;
}
 #ye1 p.you{
	float:right;
	font-size:25px;
	font-weight: bold;
}
 #ye1 p:hover{
	background:#0df;
	transition-duration:1s;
	width:80px;
	opacity: 1;
}
</style>
<script>
	window.onload=function(){
	var aInput=document.getElementById('zuo');
	var aLi=document.getElementsByTagName('li');
	var arr=[];
	for(var i=0;i<aLi.length;i++)
	{
		var oImg=aLi[i].getElementsByTagName('img')[0];
		arr.push([getStyle(aLi[i],'left'),getStyle(aLi[i],'top'),getStyle(aLi[i],'z-index'),oImg.height]);
	}
	aInput.onclick=function(){
			arr.push(arr[0]);
			arr.shift();
			for(var i=0;i<aLi.length;i++){
				
				aLi[i].style.left=arr[i][0];
				aLi[i].style.top=arr[i][1];
				aLi[i].style.zIndex=arr[i][2];
				var oImg=aLi[i].getElementsByTagName('img')[0];
				oImg.height=arr[i][3];

			}
		}
	function getStyle(obj,attr){
		if(obj.currentStyle){
			return obj.currentStyle[attar];
		}
		else{
			return getComputedStyle(obj,false)[attr];
		}
	}
}
</script>
</head>
<body>
<input type="button" value="<-">
<input type="button" value="->">
<ul>
<li class="tu1">
<img src="images/tuijian2.jpg" height="245"></li>
<li class="tu2"><img src="images/tuijian4.jpg" height="300"></li>
<li class="tu3"><img src="images/tuijian5.jpg" height="245"></li>
<li class="tu4"><img src="images/tuijian6.jpg" height="0"></li>
<li class="tu5"><img src="images/tuijian7.jpg" height="0"></li>
<li class="tu6"><img src="images/tuijian8.jpg" height="0"></li>

</ul>
<div id="ye1" >
	<p id="zuo"><a href="###"><</a></p>
	<p class="you"><a href="###">></a></p>
</div>
</div>
</body>
</html>