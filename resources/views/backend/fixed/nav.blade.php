{{-- <nav class="navbar navbar-expand-xl navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
        <h1 class="tm-site-title mb-0">Dashboard</h1>
    </a>
    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Districts
                </a>
                <div class="dropdown-menu mt-1" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('district.list') }}">District</a>
                    <a class="dropdown-item" href="{{ route('subdistrict.list') }}">Sub District</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('category.list') }}">Category</a>
                    <a class="dropdown-item" href="{{ route('subcategory.list') }}">Sub Category</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('post.list') }}">Posts</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="accounts.html">Accounts</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Billing</a>
                    <a class="dropdown-item" href="#">Customize</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link d-flex" href="login.html">
                    <i class="far fa-user mr-2 tm-logout-icon"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav> --}}
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
            </li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>

        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{url('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Michelle Green</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="features-profile.html" class="dropdown-item has-icon"><i class="fas fa-user-alt"></i>
                    Profile</a>
                <a href="features-activities.html" class="dropdown-item has-icon"><i class="fa fa-bolt"></i>
                    Activities</a>
                <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i>
                    Settings</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i>
                    Logout</a>
            </div>
        </li>
    </ul>
</nav>
