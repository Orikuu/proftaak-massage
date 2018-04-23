function mainFadeIn()
{
    $('.welcome').fadeIn(2000);
    setTimeout(function(){ $('.redirectbtn').fadeIn(2000) }, 200);
    setTimeout(function(){ $('.redirectbtn').css('transition','2s') }, 2200);
}