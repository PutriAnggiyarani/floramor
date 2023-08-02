<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background-color: #fcb4b4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/logo.png') }}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #fecece">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboardAdmin') }}" class="nav-link" style="color: #ffff">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link" style="color: #ffff">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link" style="color: #ffff">
                        <i class="nav-icon fas fa-spa"></i>
                        <p>
                            Product
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('orders.index') }}" class="nav-link" style="color: #ffff">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Order
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
