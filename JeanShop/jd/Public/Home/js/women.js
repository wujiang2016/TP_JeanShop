var slide=0;
var slideTimer;
function bannerSlide() {
	$("#myCarousel>ul>li").css('background','transparent').filter(":eq("+slide+")").css('background','white');
	$("#myCarousel>div>.item").fadeOut(0).filter(":eq("+slide+")").fadeIn(100);
}
function transferSlide(){
	bannerSlide();
	slide=++slide%5;
}
$(function(){
	slideTimer=setInterval(transferSlide,2000);

	$("#myCarousel").hover(function(){
		clearInterval(slideTimer);
	},function(){
		slideTimer=setInterval(transferSlide,2000);
	});
// 轮播底下的指示按钮
	$("#myCarousel>ul>li").hover(function(){
		$(this).css({
			'cursor':'pointer'
		});
		slide=parseInt($(this).attr('data-slide-to'));
		bannerSlide();
	});
// 轮播左右两个箭头
	$("#myCarousel>.carousel-control").hover(function(){
		$(this).css({
			'background':'#E04B5B',
			'cursor':'pointer'
		});
	},function(){
		$(this).css('background','rgba(233,233,233,.2)');
	}).bind('click',function(){
		if($(this).attr('data-slide')=='prev'){
			slide+=4;
		}else{
			slide+=1;
		};
		slide%=5;
		bannerSlide();
	});

	//Tab切换
	$('.selected>.container>div>ul>li').hover(function(){
		$('.selected>.container>div>ul>li').removeClass('active').filter('#'+$(this).attr('id')).addClass('active');
		$('.selected>.container>div>div>ul').hide().filter('.'+$(this).attr('id')).show();
	});
})