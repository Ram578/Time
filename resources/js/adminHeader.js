$('document').ready(function(){
	//For hover dropdown menu in admin dashboard
	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
	
	/*$('ul.nav li').click(function(e){
		// $('ul.nav li').removeClass('active' );
		$(this).addClass('active');
	});*/
	
});