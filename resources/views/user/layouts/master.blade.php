<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="MiBS - Job Application Form">
	<meta name="author" content="Aung Khant Kyaw">
    <title>@yield('title')</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('user/img/favicon.webp') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('user/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('user/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('user/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('user/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('user/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('user/css/vendors.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('user/css/custom.css') }}" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="{{ asset('user/js/modernizr.js') }}"></script>

</head>
<style>
	.logo-slider .logo-slide{
		background-color: #fff;
		box-shadow: 0 4px 5px #cacaca;
		border-radius: 8px;
		padding: 0px;
		border: 3px;
	}
	.logo-slider .slick-slide{
		margin: 40px;
	}
	.item:hover{
		display: block;
		transition: all ease 0.3s;
		transform: scale(1.1) translateY(-5px);
	}
	@media screen and (max-width: 1200px) {
		.logo-slider .slick-slide {
			margin: 15px;
		}
	}

	@media screen and (max-width: 992px) {
		.logo-slider .slick-slide {
			margin: 10px;
		}
	}

	@media screen and (max-width: 768px) {
		.logo-slider .slick-slide {
			margin: 50px;
		}
	}

	@media screen and (max-width: 576px) {
		.logo-slider .slick-slide {
			margin: 100px;
		}
	}
</style>
<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav>
		<ul class="cd-primary-nav">
			<li><a href="{{ route('user#home') }}" class="animated_link">Job Apply Here</a></li>
			<li><a href="{{ route('user#joiningPage') }}" class="animated_link">Joining Form</a></li>
            <li><a href="{{ route('auth#loginPage') }}" class="animated_link">Portal</a></li>
            <li><a href="https://mibs.com.mm/" class="animated_link" target="_blank">About Us</a></li>
			<li><a href="{{  route('user#contactPage') }}" class="animated_link">Contact Us</a></li>
		</ul>
	</nav>
	<!-- /menu -->

	@yield('content')

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('user/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('user/js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('user/js/velocity.min.js') }}"></script>
	<script src="{{ asset('user/js/common_functions.js') }}"></script>
	<script src="{{ asset('user/js/file-validator.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<!-- Wizard script-->
	<script src="{{ asset('user/js/func_1.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('.logo-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
				autoplay: true,
				autoplaySpeed: 2000,
				infinite: true,
				// Customize the number of dots shown
				customPaging: function (slider, i) {
					return '<button type="button" data-role="none">' + (i + 1) + '</button>';
				},
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 576,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			});
		});
	</script>
</body>
</html>
