<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Doctor K</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            padding-top: 56px;
        }
    </style>
</head>
<body>
  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Doctor K</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is("home") ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is("posts") ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('post.index') }}">Posts</a>
                    </li>
                    @guest
                    <li class="nav-item {{ Request::is("login") ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item {{ Request::is("register") ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    @if (auth()->user()->role == 0)
                    <li class="nav-item {{ Request::is("booking") ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('booking.index') }}">Booking</a>
                    </li>
                    @endif
                    @if (auth()->user()->role == 1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">Admin</a>
                    </li>
                    @endif
                    @if (auth()->user()->role == 2)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">Staff</a>
                    </li>
                    @endif
                    @if (auth()->user()->role == 3)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">Doctor</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout_get') }}">Logout</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

</body>
</html>
