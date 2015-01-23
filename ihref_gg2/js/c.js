$("head").append('<link href="http://www.ihref.com/ihref_gg/css/ihref_gg.css" rel="stylesheet" type="text/css">');

document.write('<div id="ihref_gg1"><div id="ihref_body"><iframe id="ihref_iframe" frameborder="0" scrolling="no" src="http://www.ihref.com/ihref_gg/" style="z-index: 99991; width: 700px; height: 430px; border: 0px;"></iframe><a id="ihref_close" href="javascript:void(0)">关闭</a></div></div>');

$("#ihref_iframe").load(function() {
	$("#ihref_gg1").stop().slideDown('fast');
});

$("#ihref_close").click(function(){
	$("#ihref_gg1").stop().slideUp("fast");
});
// $(function(){
// 	// $("ihref_gg1").stop().slideDown('fast');
// 	$("#ihref_close").click(function(){
// 		$("#ihref_gg1").stop().slideUp("fast");
// 	});
// })