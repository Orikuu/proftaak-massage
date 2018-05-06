function mainFadeIn() {
    $('.welcome').fadeIn(2000);
    setTimeout(function(){ $('.redirectbtn').fadeIn(2000) }, 200);
    //Give CSS property transition: 2s; to the class .redirectbtn after 2,2s.
    setTimeout(function(){ $('.redirectbtn').css('transition','2s') }, 2200);
}

//Check input data ( Register )
function validateForm() {
    var firstname 	= document.forms["register"]["firstname"].value;
    var lastname 	= document.forms["register"]["lastname"].value;
    var username 	= document.forms["register"]["username"].value;
    var password 	= document.forms["register"]["password"].value;

    //If any of the inputs is empty.
    if (firstname == "" || lastname == "" || username == "" || password == "") {
        //Dont send data to the PHP part.
        return false;
    }
}

//Anchor smooth scrolling
$(document).ready(function(){
	//Detect if the clicked object has a href that starts with #.
	$('a[href^="#"]').on('click',function (e) {
		var target = this.hash;
		var $target = $(target);
		
		//Scroll and show anchor
		$('html, body').animate({
			// - 70 because the fixed header is 70px high. The title would be behind the header which isn't good.
			'scrollTop': $target.offset().top - 70
			}, 1500, 'swing', function() {
				window.location.hash = target;
			});
	});
});