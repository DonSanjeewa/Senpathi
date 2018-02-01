<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
    </div>
    <!-- Breadcrumb-->
    <div class="breadcrumb-dn mr-auto">
        <p>{{ config('app.name') }}</p>
    </div>
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <li class="nav-item">
            <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link"><i class="fa fa-th-large" aria-hidden="true"></i> <span class="clearfix d-none d-sm-inline-block">Control Panel</span></a>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="nav-account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-account-dropdown">
                <a class="dropdown-item">{{ \Illuminate\Support\Facades\Auth::user()->fname . " " . \Illuminate\Support\Facades\Auth::user()->lname  }}</a>
                <hr>
                <a class="dropdown-item" href="{{ route("logout") }}">Logout</a>
            </div>
        </li>
    </ul>
</nav>