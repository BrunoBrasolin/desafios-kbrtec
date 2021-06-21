const base_url = 'http://localhost/bruno-brasolin/desafio-4/wp-content/themes/desafio-4';

$(document).ready(() => {
	$('.banner-loja').slick({
		slidesToShow: 1,
		arrows: false,
		dots: false,
		autoplay: true,
		autplaySpeed: 5000,
		speed: 800,
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
		$.ajax({
			url: window.location.href,
			type: 'get',
			data: {
				'add-to-cart': $(this).parent().data('product-id'),
			},
			beforeSend: () => {
				$(this).addClass('waiting');
			},
			success: () => {
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

	$('.filter-button').click(function () {
		$(this).toggleClass('active');
	});
});
