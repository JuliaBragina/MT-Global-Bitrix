$(document).ready(function() {
	$(window).on("load resize", function() {
		if ($(document).width() < 767) {
  		$('.header-logo__reference').on('click', function() {
				$(this).closest('.header-logo__reference-wrapp').find('.header-logo__reference-text').toggle();
			});
 		}
  });
});