<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-widht, initial-scale=1>"
	<tittle><!-- Sistem Informasi Data Karyawan --></head></tittle>
	<link rel="stylesheet" type="text/css" href="{{
	asset('public/bootstrap_4_3_1/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{
	asset('public/css/style.css') }}">
	<!-- Css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script type="text/javascript" scr="{{ asset('public/js/html5shiv.min.js') }}"></script>
	<script type="text/javascript" scr="{{ asset('public/js/respond.min.js') }}"></script>
	</head>
	<body>
		<div class="container">
		{{-- Include file navbardata.blade.php --}}
		@include('navbardata')
		{{-- Memanggil halaman section main --}}
		@yield('main')
	</div>
	{{-- Memanggil halaman section footer --}}
	@yield('footer')

<script type="text/javascript" scr="{{ asset('public/bootstrap_4_3_1.min.js') }}"></script>
<script type="text/javascript" scr="{{ asset('public/js/jquery_3_3_1.min.js') }}"></script>
</body>
</html>