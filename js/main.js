function mainFadeIn() {
    $('.welcome').fadeIn(2000);
    setTimeout(function(){ $('.redirectbtn').fadeIn(2000) }, 200);
    //Give CSS property transition: 2s; to the class .redirectbtn after 2,2s.
    setTimeout(function(){ $('.redirectbtn').css('transition','2s') }, 2200);
}

//Anchor smooth scrolling
$(document).ready(function(){
	//Detect if the clicked object has a href that starts with #.
	$('a[href^="#"]').on('click',function (e) {
		var target = this.hash;
		var $target = $(target);
		
		//Scroll and show anchor
		$('html, body').animate({
			'scrollTop': $target.offset().top - 70
			}, 1000, 'swing', function() {
				window.location.hash = target;
			});
	});
})