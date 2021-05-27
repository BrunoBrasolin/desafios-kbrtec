$(document).ready(function () {
	feather.replace();

	$('.navbar .menu').click(() => $('.navbar .list').toggleClass('open'));

	$(document).scroll(() => $('.navbar .list').removeClass('open'));

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

	$('.itens-grandes-slider').slick({
		draggable: false,
		fade: true,
		arrows: false,
	});

	$('.itens-pequenos-slider').slick({
		draggable: false,
		slidesToShow: 6,
		infinite: true,
		prevArrow: $('.itens-prev-arrow'),
		nextArrow: $('.itens-next-arrow'),
		asNavFor: $('.itens-grandes-slider'),
		responsive: [
			{
				breakpoint: 820,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 450,
				settings: {
					slidesToShow: 2,
				}
			}
		],
	});

	function activeItem() {
		let active = $('.itens-pequenos-slider .slick-active')[0];
		$('.itens-pequenos-slider .item-pequeno').removeClass('active-item');
		$(active).addClass('active-item');
	}

	activeItem();

	$('.itens-pequenos-slider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
		activeItem();
	});

	$('.item-pequeno').map(function () {
		$(this).css('background-color', $(this).data('background-color'));
		$(this).css('color', $(this).data('color'));
	});

	$('.item-pequeno').click(function () {
		$('.itens-grandes-slider').slick('slickGoTo', $(this).data('slick-index'));
		$('.itens-pequenos-slider').slick('slickGoTo', $(this).data('slick-index'));
	});
});
