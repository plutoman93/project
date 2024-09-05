<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="asset/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="{{ asset('storage')}}/{{auth()->user()->photo}}" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{Auth::user()->email ?? ''}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        ตารางงาน
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('projects')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>ตารางงาน</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('addtask')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>เพิ่มงาน</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>


      <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
        @csrf
        @method('DELETE')
        <button class="btn btn-logout" type="submit">Logout</button>
    </form>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
