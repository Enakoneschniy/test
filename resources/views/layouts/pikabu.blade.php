<!doctype html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/e05f3c3d9d.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Pikabu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Свежие <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Горячие</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Лучшее</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-9 border border-top-0 border-bottom-0">
            @yield('content')
        </div>
        <div class="col-md-3">
            @auth
                <div class="ml-auto mr-auto" style="width: 200px;">
                    <img src="http://via.placeholder.com/200x200" alt="">
                    <h4 class="text-center mt-2 mb-3">{{ Auth::user()->name }}</h4>
                    <button class="btn btn-block btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Новый пост</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="mt-3">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-block btn-dark"><i class="fa fa-sign-out" aria-hidden="true"></i> Выйти</button>
                    </form>
                </div>
            @else
                <a href="{{route('login')}}" class="btn btn-block btn-dark"><i class="fa fa-sign-in" aria-hidden="true"></i> Войти</a>
                <a href="{{route('register')}}" class="btn btn-block btn-secondary"><i class="fa fa-user-plus" aria-hidden="true"></i> Регистрация</a>
            @endauth
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>