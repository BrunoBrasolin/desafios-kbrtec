$(document).ready(function () {
	feather.replace();

	let searchParams = new URLSearchParams(window.location.search);

	$('.navbar .hamburguer').click(() => $('.navbar .menu').toggleClass('open'));

	$(document).scroll(() => $('.navbar .menu').removeClass('open'));

	// Home

	$('.banner-slider').slick({
		prevArrow: $('.banner-prev-arrow'),
		nextArrow: $('.banner-next-arrow'),
		draggable: false,
		fade: true,
	});

	$('.encontre .input').on('focusin focusout keyup keydown', function () {
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

	$.ajax({
		url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
		method: 'get',
		success: data => {
			data.map(estado => {
				let option = document.createElement('option');
				option.value = estado.id;
				option.innerHTML = estado.sigla;
				if (document.querySelector('.estado-input')) document.querySelector('.estado-input').append(option);
			});
		},
	});

	$('.encontre .form').submit(function (e) {
		let valido = false;
		$('.encontre .input').each(function () {
			if ($(this).val() != '') {
				valido = true;
			}
		});
		if (!valido) {
			e.preventDefault();
			$('.encontre .form .erro').css('display', 'flex');
		}
	});

	$('.itens-pequenos-slider').on('init', function (event, slick) {
		if (window.innerWidth >= 350) $('.itens-pequenos-slider .item-pequeno').height($('.itens-pequenos-slider .item-pequeno').width());
	});

	$('.itens-pequenos-slider').slick({
		draggable: false,
		swipe: false,
		slidesToShow: 6,
		infinite: true,
		prevArrow: $('.itens-prev-arrow'),
		nextArrow: $('.itens-next-arrow'),
		centerMode: true,
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
				},
			},
			{
				breakpoint: 350,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});

	$('.itens-grandes-slider').slick({
		draggable: false,
		swipe: false,
		fade: true,
		arrows: false,
		initialSlide: $('.itens-pequenos-slider .slick-active').data('slick-index'),
	});

	function activeItem() {
		let active = $('.itens-pequenos-slider .slick-active')[0];
		$('.itens-pequenos-slider .item-pequeno').removeClass('active-item');
		if (window.innerWidth >= 350) $(active).addClass('active-item');
	}

	activeItem();

	$('.itens-pequenos-slider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
		activeItem();
	});
	$('.itens-prev-arrow').click(() => {
		let active = $('.itens-pequenos-slider .slick-active')[0];
		$('.itens-grandes-slider').slick('slickGoTo', $(active).data('slick-index'));
	});
	$('.itens-next-arrow').click(() => {
		let active = $('.itens-pequenos-slider .slick-active')[0];
		$('.itens-grandes-slider').slick('slickGoTo', $(active).data('slick-index'));
	});

	$('.itens-pequenos-slider .item-pequeno').click(function () {
		let number = 0;
		if (window.innerWidth >= 820) number = $(this).data('slick-index') + 2;
		else if (window.innerWidth >= 450) number = $(this).data('slick-index') + 1;
		else if (window.innerWidth >= 350) number = $(this).data('slick-index');
		$('.itens-pequenos-slider').slick('slickGoTo', number);
	});

	$('.item-pequeno').map(function () {
		$(this).css('background-color', $(this).data('background-color'));
		$(this).css('color', $(this).data('color'));
	});

	$('.item-pequeno').click(function () {
		$('.itens-grandes-slider').slick('slickGoTo', $(this).data('slick-index'));
		$('.itens-pequenos-slider').slick('slickGoTo', $(this).data('slick-index'));
	});

	// Blog

	$('#procura').val(searchParams.get('s'));

	let bigger;

	$('.custom-select .dropdown li').each(function () {
		if ($(this).data('id') == searchParams.get('cat')) $('.custom-select .label .text').html($(this).html());
		bigger = bigger > $(this).width() ? bigger : $(this).width();
	});

	$('.custom-select .label .text').width(bigger + 25);

	$('.custom-select').click(function () {
		const icon = $('.custom-select .label .right-item svg');
		$(icon).hasClass('feather-chevron-down')
			? icon.replaceWith(feather.icons['chevron-up'].toSvg())
			: icon.replaceWith(feather.icons['chevron-down'].toSvg());

		$(this).toggleClass('open');
	});

	$('.custom-select .dropdown li').click(function () {
		$('.categoria-input').val($(this).data('id'));
		$('.custom-select .label .text').html($(this).html());
	});

	// Midia

	if (document.getElementById('de') && document.getElementById('ate')) {
		const pickerDe = new Litepicker({
			element: document.getElementById('de'),
		});
		const pickerAte = new Litepicker({
			element: document.getElementById('ate'),
		});
	}

	$('#de').val(searchParams.get('de'));
	$('#ate').val(searchParams.get('ate'));

	// Empresa

	$('.tabs .content-slider').slick({
		fade: true,
		slidesToShow: 1,
		draggable: false,
		swipe: false,
		arrows: false,
		dots: false,
	});

	$('.tabs .esquerda .subtitle').click(function () {
		$('.tabs .content-slider').slick('slickGoTo', $(this).index());
		$('.tabs .esquerda .subtitle').removeClass('active');

		$(this).addClass('active');
	});

	$('.treinamentos .content-slider').slick({
		fade: true,
		slidesToShow: 1,
		draggable: false,
		swipe: false,
		arrows: false,
		dots: false,
	});

	$('.treinamentos .esquerda .subtitle-container').click(function () {
		$('.treinamentos .content-slider').slick('slickGoTo', $(this).index());
		$('.treinamentos .esquerda .subtitle-container').removeClass('active');

		$(this).addClass('active');
	});

	// Or??amento

	var SPMaskBehavior = function (val) {
			return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		},
		spOptions = {
			onKeyPress: function (val, e, field, options) {
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			},
		};

	$('#celular').mask(SPMaskBehavior, spOptions);

	$('#telefone').mask('(00) 0000-0000');

	$(".label[for='lgpd']").click(() => $('#lgpd').find('input').prop('checked', !$('#lgpd').find('input:checkbox:checked').length));
});
