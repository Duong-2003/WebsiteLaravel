<!-- resources/views/users/create.blade.php (hoặc resources/views/products/create.blade.php) -->

@extends('AdminViews.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Create User (or Product)</h1>

                <form method="POST" action="{{ route('admin.create') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <!-- Các trường khác cho thông tin người dùng (hoặc sản phẩm) -->

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
