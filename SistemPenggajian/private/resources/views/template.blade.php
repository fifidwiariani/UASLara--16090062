<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-widht, initial-scale=1>"
	<tittle>Framework Programming</head></tittle>
	<link rel="stylesheet" type="text/css" href="{{
	asset('public/bootstrap_4_3_1/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{
	asset('public/css/style.css') }}">
	<script type="text/javascript" scr="{{ asset('public/js/html5shiv.min.js') }}"></script>
	<script type="text/javascript" scr="{{ asset('public/js/respond.min.js') }}"></script>
	</head>
	<body>
		<div class="container">
		{{-- Include file navbar.blade.php --}}
		@include('navbar')
		{{-- Memanggil halaman section main --}}
		@yield('main')
	</div>
	{{-- Memanggil halaman section footer --}}
	@yield('footer')

<script type="text/javascript" scr="{{ asset('public/bootstrap_4_3_1.min.js') }}"></script>
<script type="text/javascript" scr="{{ asset('public/js/jquery_3_3_1.min.js') }}"></script>
</body>
</html>