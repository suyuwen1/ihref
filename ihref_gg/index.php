<html>
<head>
<meta charset="utf-8">
<title>爱分享广告</title>
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="css/ihref_gg.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
	$(function(){
		$(".list").hover(function() {
			$(this).addClass('list1').siblings('.list').removeClass('list1');
			var i=$(this).attr('i');
			$("#img"+i).addClass('img1').siblings('.img').removeClass('img1');
		}, function() {

		});
	})
</script>
<style>
</style>
</head>

<body>
<div id="main">
	<div id="top">
		<ul>
			<li class="img img1" id="img1"><a href="#"><img src="img/1.jpg" alt=""></a></li>
			<li class="img" id="img2"><a href="#"><img src="img/2.jpg" alt=""></a></li>
			<li class="img" id="img3"><a href="#"><img src="img/3.jpg" alt=""></a></li>
			<li class="img" id="img4"><a href="#"><img src="img/1.jpg" alt=""></a></li>
			<li class="img" id="img5"><a href="#"><img src="img/1.jpg" alt=""></a></li>
		</ul>
	</div>
	<div id="down">
		<ul>
			<li class="list list1" i="1"><span class="bt"><a href="#">移动电源</a></span><span class="jg">¥ 130.9</span></li>
			<li class="list" i="2"><span class="bt"><a href="#">Iphone 6 plus</a></span><span class="jg">¥ 130</span></li>
			<li class="list" i="3"><span class="bt"><a href="#">移动电源</a></span><span class="jg">¥ 9.9</span></li>
			<li class="list" i="4"><span class="bt"><a href="#">Iphone 6 plus</a></span><span class="jg">¥ 11</span></li>
			<li class="list" i="5"><span class="bt"><a href="#">移动电源</a></span><span class="jg">¥ 90.1</span></li>
		</ul>
	</div>
</div>
</body>
</html>
