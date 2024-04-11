<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front-end/css/style-login.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/style-register.css') }}">
</head>

<body>
    <div class="nav-bar">
        <ul>
            <li><a href="#">Home</a></li>
            @guest
                <li><a href="{{ route('login') }}">Đăng Nhập</a></li>
                <li><a href="{{ route('user.createUser') }}">Đăng Ký</a></li>
            @else
                <li>
                    <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                </li>
            </ul>
        @endguest
    </div>
    {{-- <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
            <div class="container">
                <a class="navbar-brand mr-auto" href="#">Laravel Training</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.createUser') }}">Register</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
    @yield('content')
    @yield('content_update')
    <footer>
        <h5 class="text">Lập trình web be2 by son</h5>
    </footer>
</body>

</html>
