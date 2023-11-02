<!DOCTYPE html>
<html>
<head>
    @include('AdminViews.head')
    <title>{{ $tittle }}</title>
</head>
<body>
    <h1>Trang đăng ký người dùng</h1>

    <form method="POST" action="/user/register">
        @csrf

        <div>
            <label for="name">Tên người dùng:</label>
            <input type="text" id="name" name="name" required autofocus>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">Xác nhận mật khẩu:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div>
            <button type="submit">Đăng ký</button>
        </div>
    </form>
</body>
</html>
