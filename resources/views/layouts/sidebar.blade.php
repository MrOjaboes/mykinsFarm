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
                    <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="{{ route('admin') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>


                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/orders') ? 'active' : '' }}" href="{{ route('admin.orders') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Orders</p>
                    </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/categories') ? 'active' : '' }}" href="{{ route('categories') }}">
                        <i class="far fa-square nav-icon"></i>
                        <p>Categories</p>
                    </a>


                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('admin/product') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-product') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products') }}" class="nav-link {{ request()->is('admin/products') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>products list</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
