var $ = jQuery;
var width = $(window).width();

//Mobile Nav button
$('#nav-expander').on('click',function(){
	openNav();
});
$('.nav-closer').on('click',function(){
	closeNav();
});
$('.sidenav').prepend('<li class="menu-item nav-item text-center logo"><img width="250" height="75" src="/wp-content/uploads/2017/04/des_moines_logo-e1492620725464.png" class="img-responsive" title="Home" alt="logo" itemprop="logo"></li>');


//enable hover on desktop view
$(document).ready(function(){
	hoverClose();	
});

$(window).on('resize', hoverClose());

//responsive slides (header/images)
$('.rslides').responsiveSlides({
	auto:true,
	speed:1000,
	timeout:8000,
	nav:true,
	pause: true,
	prevText: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
	nextText: '<i class="fa fa-chevron-right" aria-hidden="true"></i>'
});

//functions
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
}
function hoverClose() {
	disableHover();
	hideClose();
}

function disableHover() {
	if(width > 992) {
	    $('.navbar-desktop li.menu-item-has-children').mouseover(function(){
			$(this).addClass('show');
	    });
	    $('.navbar-desktop li.menu-item-has-children').mouseout(function(){
	    	$(this).removeClass('show');
	    });
	}
}
function hideClose() {
	if(width > 992) {
		$('.nav-closer').hide();
	} else if (width < 992) {
		$('.nav-closer').show();
	}
}