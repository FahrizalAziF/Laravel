$(function() {
//Loader	
$(function preloaderLoad() {
    if($('.preloader').length){
        $('.preloader').delay(400).fadeOut(500);
    }
    $(".preloader_disabler").on('click', function() {
        $("#preloader").hide();
    });
});
// Scroll navbar
	$(window).on('scroll', function() {    
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$(".navbar").addClass("navbar-fixed");
		} else {
			$(".navbar").removeClass("navbar-fixed");
		}
	});
});