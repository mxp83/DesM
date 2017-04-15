
var $ = jQuery;

//Show Menu
$('.menu_button').click(function(){
	$('.pop_menu').addClass('pop_menu_open').removeClass('hidden pop_menu_close');
});

//Hide Menu
$('.close_button').click(function(){
	$('.pop_menu').addClass('pop_menu_close').removeClass('pop_menu_open').delay(500).queue(function(next){
		$(this).addClass('hidden');
		next();
	});
});