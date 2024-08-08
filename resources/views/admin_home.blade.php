<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/style2.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('asset/frontend/css/bootstrap.min.css') }}"> --}}
</head>
<body>
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
    </body>
