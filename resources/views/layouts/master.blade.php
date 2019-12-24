<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Jambo Group | @yield('title')</title>

	<link rel="icon" href="{{ asset('assets/img/fav.png') }}" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins&display=swap" rel="stylesheet">

	{{-- css --}}
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
	  <link rel="stylesheet" href="{{ asset('assets/fonts/Feather/feather.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
</head>
<body>

	@include('incs.navbar')
	

	@yield('contents')


	@include('incs.footer')


	{{-- scripts --}}
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  ></script>


</body>
</html>