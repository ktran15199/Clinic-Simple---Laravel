<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <!-- Branding Image -->
        <a href="{{ route('admin.dashboard.index') }}" class="navbar-brand">Clinic Admin</a>
        <!-- Collapsed Hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav navbar-sidenav">
                <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;
                        <span class="nav-link-text">Home</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link {{ request()->route()->named('admin.dashboard.*') ? 'active' : '' }}" href="{{ route('admin.dashboard.index') }}">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                @if (auth()->user()->role == 1 || auth()->user()->role == 2)
                <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Posts">
                    <a class="nav-link {{ request()->route()->named('admin.posts.*') ? 'active' : '' }}" href="{{ route('admin.posts.index') }}">
                        <i class="fa fa-file-text" aria-hidden="true"></i>&nbsp;
                        <span class="nav-link-text">Posts</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Media">
                    <a class="nav-link {{ request()->route()->named('admin.media.*') ? 'active' : '' }}" href="{{ route('admin.media.index') }}">
                        <i class="fa fa-file" aria-hidden="true"></i>&nbsp;
                        <span class="nav-link-text">Media</span>
                    </a>
                </li>
                @endif
                
                @if (auth()->user()->role == 1)
                <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Users">
                    <a class="nav-link {{ request()->route()->named('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                        <i class="fa fa-users" aria-hidden="true"></i>&nbsp;
                        <span class="nav-link-text">Users</span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Booking">
                    <a class="nav-link {{ request()->route()->named('admin.book.*') ? 'active' : '' }}" href="{{ route('admin.booking.index') }}">
                        <i class="fa fa-file" aria-hidden="true"></i>&nbsp;
                        <span class="nav-link-text">Booking</span>
                    </a>
                </li>
                @endif
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="{{ url('/logout') }}"
                            class="dropdown-item"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" class="d-none" action="{{ url('/logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

