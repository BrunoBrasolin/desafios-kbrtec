const base_url = 'http://ambiente-desenvolvimento.provisorio.ws/bruno-brasolin/desafio-4/wp-content/themes/desafio-4';
// const base_url = 'http://localhost/bruno-brasolin/desafio-4/wp-content/themes/desafio-4';

// ARCHIVE PAGE

$(document).ready(() => {
	$('.banner-loja').slick({
		slidesToShow: 1,
		arrows: false,
		dots: false,
		autoplay: true,
		autplaySpeed: 5000,
		speed: 800,
	});

	$('.hover-slider').slick({
		slidesToShow: 3,
		arrows: false,
		variableWidth: true,
		infinite: false,
	});

	$('.hover-slider .product-image-hover').hover(function () {
		$(this).parent().find('.product-image-hover').removeClass('active');
		$(this).addClass('active');
		$(this).parent().parent().parent().parent().parent().find('.product-image img').attr('src', $(this).find('img').attr('src'));
	});

	function closeAddToCartModal() {
		if ($('.add-to-cart-modal').hasClass('active')) {
			$('.add-to-cart-modal').removeClass('active');
			$('.add-to-cart-modal .add-to-cart-animation-wapper').empty();
		}
	}

	$('.add-to-cart-modal .close-icon').click(function (e) {
		closeAddToCartModal();
	});

	$(document).click(function (e) {
		var container = $('.add-to-cart-modal .modal-content');
		if (!container.is(e.target) && container.has(e.target).length === 0) {
			closeAddToCartModal();
		}
	});

	$('.add-to-cart').click(function (e) {
		e.preventDefault();

		if ($(this).hasClass('waiting')) return false;

		const quantity = $('#product_quantity').val();
		$.ajax({
			url: `${base_url}/loja`,
			type: 'post',
			data: {
				'add-to-cart': $(this).data('product-id'),
				quantity: quantity,
			},
			beforeSend: () => {
				$(this).addClass('waiting');
			},
			success: () => {
				$('.header .cart .total-itens').html(parseInt($('.header .cart .total-itens').text()) + parseInt(quantity));
				$('.add-to-cart-modal .add-to-cart-animation-wapper').append(`
					<object class="add-to-cart-animation" type="image/svg+xml" data="${base_url}/assets/dist/images/icons/cart-animation.svg">
						<img src="${base_url}/assets/dist/images/icons/cart-animation.svg" />
					</object>
				`);
				$('.add-to-cart-modal').addClass('active');
				setTimeout(() => closeAddToCartModal(), 2300);
			},
			complete: () => {
				$(this).removeClass('waiting');
			},
		});
	});

	$('.filter-button, .close-filter').click(function () {
		$('.filter-button').toggleClass('active');
		$('.loja-page .filters').toggleClass('active');
	});

	// SINGLE PAGE

	$('.main-image-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 1,
		asNavFor: '.gallery-slider',
		prevArrow: $('.main-image-arrows #prevArrow'),
		nextArrow: $('.main-image-arrows #nextArrow'),
		infinite: false,
	});

	$('.gallery-slider').slick({
		arrows: false,
		dots: false,
		slidesToShow: 4,
		asNavFor: '.main-image-slider',
		infinite: false,
	});

	$('.gallery-slider .gallery-image').click(function () {
		$('.gallery-slider').slick('slickGoTo', $(this).data('slick-index'));
	});

	$('.attributes-list .item').click(function () {
		$(`.attributes-list .item[data-attribute-position="${$(this).data('attribute-position')}"]`).removeClass('active');
		$(this).addClass('active');
	});

	$('.input-zip').mask('00000-000');
});
