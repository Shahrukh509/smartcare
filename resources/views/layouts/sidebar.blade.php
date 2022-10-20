 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('public/smartcare/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SmartCare</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/smartcare/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link {{ \Request::segment(1) == 'dashboard'? 'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard


              
              </p>
            </a>
            
          </li>

          <li class="nav-item ">
            <a href="{{ route('users') }}" class="nav-link {{ request()->is('user*') ? 'active':'' }}">
              <i class="nav-icon fa fa-users"></i>
              <p>
               Users
              </p>
            </a>
          </li>
         
           <li class="nav-item ">
            <a href="" class="nav-link {{ request()->is('survey*') ? 'active':'' }} ">
              <i class="fas fa-poll"></i> &nbsp;&nbsp;
              <p>
               Survey
                <i class="right fas fa-angle-left"></i>
              </p>

            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('survey') }}" class="nav-link {{ request()->is('survey*') ? 'active':'' }}">
                  <i class="fas fa-poll"></i>&nbsp;&nbsp;

                  <p>View Survey</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{ route('category.add')  }}" class="nav-link">
                  <i class="fa fa-th-list"></i>&nbsp;&nbsp;

                  <p>Add Category</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('sub_category.add') }} " class="nav-link">
                  <i class="fa fa-th-list"></i>&nbsp;&nbsp;
                  <p>Add Sub Category</p>
                </a>
              </li>


          </li>


        
          <li class="nav-item user-logout">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="fa fa-sign-out"></i>
              <p>
               Logout
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>