<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Akraya</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
	<link
		href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
		rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
		integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.css"
		integrity="sha512-kSH0IqtUh1LRE0tlO8dWN7rbmdy5cqApopY6ABJ4U99HeKulW6iKG5KgrVfofEXQOYtdQGFjj2N/DUBnj3CNmQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	@livewireStyles
</head>

<body class="home-page home-01 ">

	<!-- mobile menu -->
	<div class="mercado-clone-wrap">
		<div class="mercado-panels-actions-wrap">
			<a class="mercado-close-btn mercado-close-panels" href="#">x</a>
		</div>
		<div class="mercado-panels"></div>
	</div>

	<!--header-->
	@livewire('header-component');

	{{$slot}}

	@livewire('footer-component');

	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	{{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
		integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
		integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.js"
		integrity="sha512-6vo59lZMHB6GgEySnojEnfhnugP7LR4qm6akxptNOw/KW+i9o9MK4Gaia8f/eJATjAzCkgN3CWlIHWbVi2twpg=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tiny.cloud/1/yn47wxyj606kheansf4hqab911ftn84fdyez17x9g09y68t0/tinymce/5/tinymce.min.js"
		referrerpolicy="origin"></script>
	@livewireScripts

	@stack('scripts');
</body>

</html>