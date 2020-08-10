<div class="col-md-2">
    <nav class="navbar nav-tabs" id="sidebar">
        <ul class="navbar-nav nav">
            <li class="nav-item nav-profile border-bottom ">
                <a href="#" class="nav-link flex-column">
                    <div class="row">
                        <div class="col-sm-4 col-md-4"></div>
                        <span class="menu-title">REWOW</span>
                        <div class="col-sm-4  col-md-4"></div>
                    </div>

                </a>
            </li>
            <li class="nav-item pt-3">
                <a class="nav-link {{ Request::is('home') ? 'btn-info' : '' }}" href="#">
                    <i class="mdi mdi-compass-outline menu-icon"></i>
                    <span class="menu-title">Historia</span>
                </a>
            </li>

            <li class="nav-item pt-3">
                <a class="nav-link {{ Request::is('home') ? 'btn-info' : '' }}" href="#">
                    <i class="mdi mdi-compass-outline menu-icon"></i>
                    <span class="menu-title">Citas</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('product/index') ? 'btn-info' : '' }}" href="{{ route('product') }}">
                    <i class="mdi mdi-compass-outline menu-icon"></i>
                    <span class="menu-title">Tienda</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
