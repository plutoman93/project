<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('asset/frontend/css/style1.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <form method="POST" action="{{route('login')}}" class="login-form row">
        @csrf
    <div class="wrapper">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" id="username" class="form-control" name="username" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <div class="remember-forgot">
            <label>
                <input type="checkbox">จดจำรหัสผ่าน
            </label>
            <a href="{{route('password.request')}}">ลืมรหัสผ่าน</a>
        </div>

        <button type="submit" class="btn">เข้าสู่ระบบ</button>
    </div>
    </form>
</body>
</html>
