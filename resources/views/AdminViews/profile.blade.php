<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <title>Document</title>
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
            <h1 class="text-center"> thiết kế giao diện trang Admin List </h1>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">Danh sách khách hàng</h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <button type="button" class="btn btn-sm btn-primary btn-create">Thêm
                                    mới</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                                    <th><em class="fa fa-cog"></em>
                                    </th>
                                    <th class="hidden-xs">Mã số</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a
                                            class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    </td>
                                    <td class="hidden-xs">1</td>
                                    <td>Nguyễn văn A</td>
                                    <td>hocwebgiare@gmail.com</td>
                                </tr>
                                <tr>
                                    <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a
                                            class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    </td>
                                    <td class="hidden-xs">2</td>
                                    <td>Nguyễn văn B</td>
                                    <td>hocwebgiare@gmail.com</td>
                                </tr>
                                <tr>
                                    <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a
                                            class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    </td>
                                    <td class="hidden-xs">3</td>
                                    <td>Nguyễn văn C</td>
                                    <td>hocwebgiare@gmail.com</td>
                                </tr>
                                <tr>
                                    <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a
                                            class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    </td>
                                    <td class="hidden-xs">4</td>
                                    <td>Nguyễn văn D</td>
                                    <td>hocwebgiare@gmail.com</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class=" col-xs-12 " style="display: flex;justify-content: center;">
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
</body>

</html>
