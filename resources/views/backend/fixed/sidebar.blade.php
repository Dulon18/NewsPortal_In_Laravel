<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index-2.html">News Portal</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire mx-3"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-columns mx-3"></i>
                    <span>Categories</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link mx-3" href="{{ route('category.list') }}">Category</a></li>

                    <li><a class="nav-link mx-3" href="{{ route('subcategory.list') }}">Sub Category</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th mx-3"></i>
                    <span>Districts</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link mx-3" href="{{ route('district.list') }}">District</a></li>
                    <li><a class="nav-link mx-3" href="{{ route('subdistrict.list') }}">Sub District</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large mx-3"></i>
                    <span>Post</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link mx-3" href="components-article.html">Add Post</a></li>
                    <li><a class="nav-link mx-3 beep beep-sidebar" href="{{ route('post.list') }}">Post List</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
