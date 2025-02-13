<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href="#">
            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
            <span class="ms-1 text-sm text-dark">Zaay Movie</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ url('admin/dashboard') }}">
                    <i class="material-symbols-rounded opacity-5">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/users*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('users.index') }}">
                    <i class="material-symbols-rounded opacity-5">groups</i>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/profile*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('profiles.index') }}">
                    <i class="material-symbols-rounded opacity-5">person</i>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/movies*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('movies.index') }}">
                    <i class="material-symbols-rounded opacity-5">movie</i>
                    <span class="nav-link-text ms-1">Movie</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/genres*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('genres.index') }}">
                    <i class="material-symbols-rounded opacity-5">category</i>
                    <span class="nav-link-text ms-1">Genre</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/casts*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('casts.index') }}">
                    <i class="material-symbols-rounded opacity-5">theater_comedy</i>
                    <span class="nav-link-text ms-1">Cast Movie</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/images*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('images.index') }}">
                    <i class="material-symbols-rounded opacity-5">image</i>
                    <span class="nav-link-text ms-1">Image Movie</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/reviews*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('reviews.index') }}">
                    <i class="material-symbols-rounded opacity-5">rate_review</i>
                    <span class="nav-link-text ms-1">Review</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/favorites*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('favorites.index') }}">
                    <i class="material-symbols-rounded opacity-5">favorite</i>
                    <span class="nav-link-text ms-1">Favorites</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
