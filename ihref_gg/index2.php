<?php 
	$ys = array('#60c2e7' , '#222222' , '#fff' , '#ccc' , '#fff');
?>
<html>
<head>
<meta charset="utf-8">
<meta name="url" content="http://www.ihref.com/ihref_gg/">
<title>爱分享广告</title>
<!-- <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script> -->
<!-- <link href="css/ihref_gg.css" type="text/css" rel="stylesheet"> -->
<script type="text/javascript">
	window.load(function() {
		var t=document.getElementsByName('list').length;
		alert(t);
	});
	/*$(function(){
		$(".list").mouseover(function(event) {
			var i=$(this).attr('i');
			$("#img"+i).addClass('img1').siblings('.img').removeClass('img1');
		});
		function img_load(){
			for (var i = 2; i <= $(".img").length; i++) {
				$("#img"+i+" a img").attr('src', 'img/'+i+'.jpg');
			};
		}
		setTimeout(img_load,100);
	})*/
</script>
<style type="text/css">
*{
	margin: 0px;
	padding: 0px;
	font-family: "微软雅黑";
	font-size: 14px;
	overflow: hidden;
}
body{
	height: 100%;
	width: 100%;
}
ul{
	list-style-type: none;
}
a{
	outline: none;
}
a:link{
	/*color: #000;*/
	text-decoration: none;
}
a:visited{
	color: #551A8B;
}
a:hover{
	color: #C10001;
	text-decoration: underline;
}
img{
	margin: 0px;
	padding: 0px;
	vertical-align: middle;
	border: none 0px;
}
#main{
	text-align: center;
}
#top{
	width: 1330px;
	height: 410px;
	margin: 0px auto 0px auto;
	/*margin-bottom: 2px;*/
}
#down{
	width: 1330px;
	margin: 0px auto 0px auto;
}
.img{
	height: 410px;
	display: none;
	float: left;
}
.img1{
	display: block;
}
#img1{
	background-color: <?php echo $ys[0] ?>;
}
.list{
	background-color: #ffffff;
	height: 70px;
	width: 255px;
	display: inline-block;
	float: left;
	/*border-left: 1px solid #ccc;*/
	/*border-right: 1px solid #ccc;*/
	padding: 5px;
	/*border-radius: 3px;*/
	/*margin-right: 1px;*/
}
/*.list:hover{
	border: 1px solid #bc0000;
}*/
.list1{
	background-color: <?php echo $ys[0] ?>;
	/*border: 1px solid #bc0000;*/
	/*background-image: url(img/1.jpg);*/
	/*background-repeat: repeat;*/
	/*background-position: 0px 0px;*/
}
.list2{
	background-color: <?php echo $ys[1] ?>;
}
.list3{
	background-color: <?php echo $ys[2] ?>;
}
.list4{
	background-color: <?php echo $ys[3] ?>;
}
.list5{
	background-color: <?php echo $ys[4] ?>;
}
.list span{
	display: block;
}
.list .bt{
	font-size: 14px;
	margin: 5px 0px 5px 0px;
}
.list .bt a{
	color: #fff;
}
.list .jg{
	font-size: 28px;
	color: #c40000;
	margin: 5px 0px 5px 0px;
}
</style>
</head>

<body>
<div id="main">
	<div id="top">
		<ul>
			<li class="img img1" id="img1"><a target="_blank" href="http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DnaH%252FCrshUsEjmraEDZVrLofrhNijlTODokW4bPA0wMWLltG5xFicOdXrTUTgh9sMDPIwxrc30rigOQv3H5R7StZ0c10rey9RLHhnGHvY3HyODyAjanCszm3abJM7sDg2L3Kj9Edr7oKJjU1rGI%252FCdg%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_33209569_8104433_28024044"><img src="img/1.jpg" alt="移动电源"></a></li>
			<li class="img" id="img2"><a target="_blank" href="http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DfwrzGw19Pkq6k0Or%252B%252BH4tMBwlXCfbg2ZsmieqIX6sfqLltG5xFicOdXrTUTgh9sMDPIwxrc30rigOQv3H5R7StZ0c10rey9RLHhnGHvY3HwOvWWTr%252Bpe7m3abJM7sDg23aBtcmGUhOUT%252FZKykqpE2g%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_33209569_8104433_28016185"><img alt="小米手机4"></a></li>
			<li class="img" id="img3"><a target="_blank" href="#"><img alt=""></a></li>
			<li class="img" id="img4"><a target="_blank" href="#"><img alt=""></a></li>
			<li class="img" id="img5"><a target="_blank" href="#"><img alt=""></a></li>
		</ul>
	</div>
	<div id="down">
		<ul>
			<li name="list" class="list list1" i="1"><span class="bt"><a target="_blank" href="http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DnaH%252FCrshUsEjmraEDZVrLofrhNijlTODokW4bPA0wMWLltG5xFicOdXrTUTgh9sMDPIwxrc30rigOQv3H5R7StZ0c10rey9RLHhnGHvY3HyODyAjanCszm3abJM7sDg2L3Kj9Edr7oKJjU1rGI%252FCdg%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_33209569_8104433_28024044">移动电源</a></span><span class="jg">¥ 49.9</span></li>
			<li name="list" class="list list2" i="2"><span class="bt"><a target="_blank" href="http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DfwrzGw19Pkq6k0Or%252B%252BH4tMBwlXCfbg2ZsmieqIX6sfqLltG5xFicOdXrTUTgh9sMDPIwxrc30rigOQv3H5R7StZ0c10rey9RLHhnGHvY3HwOvWWTr%252Bpe7m3abJM7sDg23aBtcmGUhOUT%252FZKykqpE2g%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_33209569_8104433_28016185">小米手机4</a></span><span class="jg">¥ 2098</span></li>
			<li name="list" class="list list3" i="3"><span class="bt"><a target="_blank" href="#"></a></span><span class="jg">广告位</span></li>
			<li name="list" class="list list4" i="4"><span class="bt"><a target="_blank" href="#"></a></span><span class="jg">广告位</span></li>
			<li name="list" class="list list5" i="5"><span class="bt"><a target="_blank" href="#"></a></span><span class="jg">广告位</span></li>
		</ul>
	</div>
</div>
</body>
</html>
