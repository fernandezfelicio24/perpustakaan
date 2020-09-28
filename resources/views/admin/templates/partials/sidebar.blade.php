<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Perpus</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
         
         
          <li class="nav-header">MAIN NAVIGATION</li>
         
          <ul data-widget="treeview">
            <li>
                <a href="{{route('admin.author.index')}}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Penulis</p>
              </a>
           </li>
            <li >
            
              <a href="{{route('admin.book.index')}}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Buku</p>
              </a>
            </li>
            <li>
              <a href="{{route('admin.borrow.index')}}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Daftar Peminjaman Buku</p>
              </a>
            </li>
            
          
            <li class="treeview">
              <a href="#">Laporan</a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{route('admin.report.top-book')}}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Daftar Buku Favorit</p>
                  </a>
                </li>
                <li>
                  <a href="{{route('admin.report.top-user')}}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Daftar Pengguna Teraktif </p>
                  </a>
                </li>
              </ul>

            <li>
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>User</p>
              </a>
            </li>
          </ul>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>