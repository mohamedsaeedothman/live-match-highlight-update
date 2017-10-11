<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kora</title>

    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" >live match highlight update </a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{\Illuminate\Support\Facades\URL::to('/')}}">Home <span class="sr-only">(current)</span></a>

        </ul>

    </div>
</nav>
@yield('content')


<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/scripts.js')}}"></script>

</body>

</html>