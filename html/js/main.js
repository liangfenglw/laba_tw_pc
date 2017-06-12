$(function(){

	$(".head_in_m ol li a").hover(
		function(){
			var index = $(this).parent().index();
			$(this).parent().addClass("cur").siblings().removeClass("cur");
			$(this).closest(".head_in_m").find("ul li").eq(index).addClass("cur").siblings().removeClass("cur");
//			$(this).closest(".head_in_m").find("ul li").siblings().hide().eq(index).fadeIn(250);
		},
		function(){		}
	);

	$(".box3_m ul li div").hover(
		function(){
			$(this).addClass("hover");
		},
		function(){
			$(this).removeClass("hover");
		}
	);

});