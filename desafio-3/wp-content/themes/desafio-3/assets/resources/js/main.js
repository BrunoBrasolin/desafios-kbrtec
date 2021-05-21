$(document).ready(function () {
	feather.replace();

	$('.banner-slider').slick({
		prevArrow: $('.banner-prev-arrow'),
		nextArrow: $('.banner-next-arrow'),
		draggable: false,
		fade: true,
	});

	$('.input').on('focusin focusout keyup keydown', function () {
		if ($(this).is(':focus')) {
			$(this).parent().addClass('active');
			return;
		}
		if ($(this).val() != '') {
			$(this).parent().addClass('active');
			return;
		}
		$(this).parent().removeClass('active');
	});
});
