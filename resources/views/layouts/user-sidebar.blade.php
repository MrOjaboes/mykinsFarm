<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #891e19">
    <!-- Brand Logo -->
    <a href="{{route('admin')}}" class="brand-link">
        <img src="/guest/assets/images/kins_international_market_logo.png" alt="App Logo" class=""
            style="height:60px;width:100px;">

    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #891e19">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Home</p>
                    </a>


                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Orders</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.profile') }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>Profile</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                        <span style="font-size:15px;">Log out</span>
                                                    </a>
                                                    <hr>


                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>

                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
