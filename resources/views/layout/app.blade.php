<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xtra Blog</title>
	<link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-xtra-blog.css') }}" rel="stylesheet">
<!--

TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>
<body>
    @include('include/header')
    <div class="container-fluid">
        <main class="tm-main">

          @yield('content')

            @include('include/footer')
        </main>
    </div>

    <script src=" {{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/templatemo-script.js') }}"></script>
</body>
</html>
