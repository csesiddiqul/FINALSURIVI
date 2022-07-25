<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Surovi</title>

        <link rel="icon" type="image/png" href="{{asset('frontend/img/f-logo.png')}}">

		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href=" https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/all.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">

	</head>

	<body>
        @include('inc.header')

        @yield('content')

        @include('inc.footer')

	</body>
</html>
