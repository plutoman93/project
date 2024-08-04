<nav>
    <div class="nav-container">
        <a href="index.html">
            <img src="asset/frontend/images/logos/logo_RMUTI.png" class="logonav">
        </a>

        <div class="nav-departname">
            <p class="nav-departname">ระบบจัดการข้อมูลตารางงาน สาขาเทคโนโลยีคอมพิวเตอร์</p>
        </div>

        <div class="nav-about">
            <a class="nav-about">เกี่ยวกับสาขา</a>
        </div>

        <div class="nav-logout">
            {{-- <button type="submit" href="{{route('login')}}" class="btn btn-danger">ออกจากระบบ</button> --}}
            <a href="{{route('login')}}" class="btn btn-danger">ออกจากระบบ</a>
        </div>
    </div>

    {{-- <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Home
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              ตารางงาน
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              บุคลากร
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              รายงาน
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
              ตั้งค่าบัญชี
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="20px" height="16"><use xlink:href="#people-circle"></use></svg>
              ตั้งค่าระบบ
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div> --}}

    <div class="container">
        <div class="sidebar">
            <a href="{{route('schedule')}}" class="sidebar-item">
                ตารางงาน
            </a>

            <a href="{{route('personnel')}}" class="sidebar-item">
                บุคลากร
            </a>

            <a href="{{route('report')}}" class="sidebar-item">
                รายงาน
            </a>

            <a href="{{route('account-setting')}}" class="sidebar-item">
                ตั้งค่าบัญชี
            </a>

            <a href="{{route('setting')}}" class="sidebar-item">
                ตั้งค่าระบบ
            </a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
</nav>