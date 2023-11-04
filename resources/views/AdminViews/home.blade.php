@extends('AdminViews.main')


@section('content')
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">


        <style>
            .panel-table .panel-body {
                padding: 0;
            }

            .panel-table .panel-body .table-bordered {
                border-style: none;
                margin: 0;
            }

            .panel-table .panel-body .table-bordered>thead>tr>th:first-of-type {
                text-align: center;
                width: 100px;
            }

            .panel-table .panel-body .table-bordered>thead>tr>th:last-of-type,
            .panel-table .panel-body .table-bordered>tbody>tr>td:last-of-type {
                border-right: 0px;
            }

            .panel-table .panel-body .table-bordered>thead>tr>th:first-of-type,
            .panel-table .panel-body .table-bordered>tbody>tr>td:first-of-type {
                border-left: 0px;
            }

            .panel-table .panel-body .table-bordered>tbody>tr:first-of-type>td {
                border-bottom: 0px;
            }

            .panel-table .panel-body .table-bordered>thead>tr:first-of-type>th {
                border-top: 0px;
            }

            .panel-table .panel-footer .pagination {
                margin: 0;
            }

            .panel-table .panel-footer .col {
                line-height: 34px;
                height: 34px;
            }

            .panel-table .panel-heading .col h3 {
                line-height: 30px;
                height: 30px;
            }

            .panel-table .panel-body .table-bordered>tbody>tr>td {
                line-height: 34px;
            }
        </style>
        </head>

        <body>

            <div class="container">
                <div class="row">
                    <h1 class="text-center"> Trang quản trị users </h1>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default panel-table">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col col-xs-6">
                                        <h3 class="panel-title">Danh sách người dùng</h3>
                                    </div>
                                    <div class="col col-xs-6 text-right">
                                        <button style="float: inline-end; font-size:20px" type="button"
                                            class="btn btn-sm btn-primary btn-create">Thêm
                                            mới</button>
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

                                            <th><em style="text-align: center" class="fa fa-cog"></em>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->email_verified_at }}</td>
                                                <td>{{ $user->password }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>{{ $user->updated_at }}</td>
                                               
                                                <td>
                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                        style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer py-4">
                                <div class="row">
                                    <div class=" col-xs-12 " style="display: flex;justify-content: center;">
                                        <ul class="pagination hidden-xs pull-right">
                                            <nav aria-label="Page navigation example">
                                                A <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a>
                                                    </li>
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
        </body>

        </html>
    @endsection
