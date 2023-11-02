<!DOCTYPE html>
<html>
<head>
    @include('AdminViews.head')
    <title>{{ $tittle }}</title>
</head>
<body>
    <h1>Hồ sơ người dùng</h1>

    {{-- <p>Tên người dùng: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p> --}}
    <!-- Các thông tin khác về người dùng -->

    <!-- Các thành phần khác của trang hồ sơ người dùng -->

    <div>
        <!-- Thêm các thành phần khác của trang hồ sơ người dùng -->
    </div>
<form action="">
    {{-- <form action="{{ route('profile.update') }}" method="POST"> --}}
        @csrf
        @method('PUT')

        <!-- Thêm các trường input để cập nhật thông tin người dùng -->
        <div>
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <button type="submit">Cập nhật</button>
    </form>
</body>
</html>
