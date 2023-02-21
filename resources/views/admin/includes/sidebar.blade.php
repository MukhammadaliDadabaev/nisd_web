<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin') }}"> <img class="animation__shake"
                        src="{{ asset('assets/dist/img/AdminLogo.png') }}" alt="AdminLogo" width="35" height="35">
                    <p>&nbsp;Admin</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Dashbord</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.page.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Page</p>
              </a>
          </li>
            <li class="nav-item">
                <a href="{{ route('admin.blog.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Blog</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                    <i class="nav-icon far fa-clipboard"></i>
                    <p>Category</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.language.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>Language</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>Users</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.menu.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>Menu</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('reset') }}" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>Services</p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
