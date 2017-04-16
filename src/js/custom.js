var $ = jQuery;
var width = $(window).width();

$(document).ready(function(){									

       //Navigation Menu Slider
        $('#nav-expander').on('click',function(e){
      		e.preventDefault();
      		$('body').toggleClass('nav-expanded');
      	});
      	$('#nav-close').on('click',function(e){
      		e.preventDefault();
      		$('body').removeClass('nav-expanded');
      	});

      	// Initialize navgoco with default options
        $(".main-menu").navgoco({
            caret: '<span class="caret"></span>',
            accordion: false,
            openClass: 'open',
            save: true,
            cookie: {
                name: 'navgoco',
                expires: false,
                path: '/'
            },
            slide: {
                duration: 300,
                easing: 'swing'
            }
        });
});
$(window).on('resize', function(){
	if(width > 992) {
    $('#main-menu li.menu-item-has-children').mouseover(function(){
		$(this).addClass('show');
    });
    $('#main-menu li.menu-item-has-children').mouseout(function(){
    	$(this).removeClass('show');
    });
}
});