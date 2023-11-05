@extends('AdminViews.main')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
@section('users')
<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <style>
        /* Đoạn mã CSS ở đây */
    </style>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Trang quản trị users</h1>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">Danh sách người dùng</h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <a href="AdminView.create">
                                    <button style="float: inline-end; font-size:20px" type="button"
                                        class="btn btn-sm btn-primary btn-create">Thêm mới</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                                    <th class="hidden-xs">ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>email_verified_at</th>
                                    <th>password</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th><em style="text-align: center" class="fa fa-cog"></em></th>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->email_verified_at }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.show', $user->id) }}">Show</a>
                    <a href="{{ route('admin.edit', $user->id) }}">Edit</a>
                    <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer py-4">
                        <div class="row">
                            <div class="col-xs-12" style="display: flex; justify-content: center;">
                                <ul class="pagination hidden-xs pull-right">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
