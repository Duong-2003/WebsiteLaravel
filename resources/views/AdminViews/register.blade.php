<!-- resources/views/register.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký người dùng</title>
</head>
<body>
    <h1>Trang đăng ký người dùng</h1>
    <!-- Định nghĩa form đăng ký người dùng -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Các trường thông tin người dùng -->
        <label for="name">Họ và tên:</label>
        <input type="text" name="name" id="name">
        <!-- ... Các trường thông tin khác ... -->
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>
