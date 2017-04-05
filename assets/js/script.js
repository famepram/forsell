$(document).ready(function(){
	$('.navbar-toggler').click(function(){
		if($('body').hasClass('overlay-show')){
			$('.sidebar-overlay').fadeOut('fast');
			$('body').removeClass('overlay-show');
		} else {
			$('.sidebar-overlay').fadeIn('fast');
			$('body').addClass('overlay-show');

		}
	});

	$('body').on('click','.sidebar-overlay',function(){
		if($('body').hasClass('overlay-show')){
			$('.sidebar-overlay').fadeOut('fast');
			$('body').removeClass('overlay-show');
		} else {
			$('.sidebar-overlay').fadeIn('fast');
			$('body').addClass('overlay-show');
		}
	});

	// $('.dropdown-toggle').click(function(e){
	// 	e.preventDefault();
	// 	$(this).parent('.has-dropdown').toggleClass('show');
	// });
});