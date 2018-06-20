<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<style type="text/css">
div.box1{
	width:100px;
	height:100px;
	background:red;
	position:absolute;
	top:100px;
	left:100px;
}
div.box2{
	width:100px;
	height:100px;
	background:yellow;
	position:absolute;
	top:50px;
	left:250px;
}
div.box3{
	width:100px;
	height:100px;
	background:blue;
	position:absolute;
	top:100px;
	left:450px;
}
</style>
<script>
window.onload=function(){
	var aInput=document.getElementsByTagName('input');
	var aDiv=document.getElementsByTagName('div');
	var arr=[];
	for(var i=0;i<aDiv.length;i++)
	{
		arr.push([getStyle(aDiv[i],'left'),getStyle(aDiv[i],'top')]);
	}
	aInput[0].onclick=function(){
			arr.push(arr[0]);
			arr.shift();
			for(var i=0;i<aDiv.length;i++){
				
				aDiv[i].style.left=arr[i][0];
				aDiv[i].style.top=arr[i][1];
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
<div class="box1"></div>
<div class="box2"></div>
<div class="box3"></div>
</body>
</html>
