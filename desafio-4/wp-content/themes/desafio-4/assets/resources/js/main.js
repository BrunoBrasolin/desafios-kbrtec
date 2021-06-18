$(document).ready(() => {
	$('.banner-loja').slick({
		slidesToShow: 1,
		arrows: false,
		dots: false,
		autoplay: true,
		autplaySpeed: 5000,
		speed: 800,
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
				Swal.fire({
					position: 'top-end',
					icon: 'success',
					title: 'Item adicionado ao carrinho',
					showConfirmButton: false,
					timer: 1500,
				});
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
