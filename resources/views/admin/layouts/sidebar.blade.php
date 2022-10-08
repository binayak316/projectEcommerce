<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="adminLogo brand-link" href="{{ route('admin.dashboard') }}">@include('/svg/bluebird')</a>
    <!-- <a href="" class="brand-link">
      <img src="/image/logo/logo.gif" alt="Blue Bird Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Blue Bird</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/image/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.dashboard') }}" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{Request::routeIs('admin.dashboard') ? 'active' : ' '}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.our-user') }}" class="nav-link {{Request::routeIs('admin.our-user') ? 'active' : ' '}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Our Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.add-product') }}" class="nav-link {{Request::routeIs('admin.add-product') ? 'active' : ' '}}">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Add Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.new-order') }}" class="nav-link {{Request::routeIs('admin.new-order') ? 'active' : ' '}}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                New Orders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{Request::routeIs('admin.new-feature') ? 'active' : ' '}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                New Features
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{Request::routeIs('admin.monthly-charts') ? 'active' : ' '}}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Monthly Charts
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>