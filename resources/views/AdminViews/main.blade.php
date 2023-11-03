<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <title>{{ $tittle }}</title>


    <style>
        .b-example-divider {
          width: 100%;
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }





    </style>
</head>
<body>



{{-- <div class="container1 " style="display: flex">

  <h1 class="visually-hidden">Sidebars examples</h1>
  <div class="col-5 flex-shrink-0 p-3 text-bg-dark" style="width: 280px;" style="position: fixed; top : 0px;">
    <div class="col-lg-3 col-md-6" id="logo" style="padding:5px 5px">

     </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href= "./ListProductType.php" class="nav-link text-white" id="productType">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Danh mục Loại Sản phẩm
        </a>
      </li>
      <li>
        <a href="./ListProduct.php" class="nav-link text-white" id="product">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Danh mục Sản phẩm
        </a>
      </li>
      <li>
        <a href="ListUsers.php" class="nav-link text-white"  id="user">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle" /></svg>
          Danh mục Người dùng
        </a>
      </li>
      <li >
        <a href="ListOrder.php" class="nav-link text-white" id="order">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Danh mục Đơn hàng
        </a>
      </li>
      <li >
        <a href="ListOrder.php" class="nav-link text-white" id="order">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Đăng ký tài khoản Admin
        </a>
      </li>
      <li >
        <a href="ListOrder.php" class="nav-link text-white" id="order">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Xem Profile Amdin
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://avatars.githubusercontent.com/u/125018793?s=400&u=d66a7dc1d555eb23d223fe07b638e9701a5735be&v=4" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Admin</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href=".././Website/Website.php">View</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
  <div class="b-example-divider b-example-vr" ></div>

  <div class="col" >
    <button class="btn btn-primary  ">Trang quản trị admin</button>
    @include('AdminViews.alert')

    @yield('content')
</div>
<br> --}}


<!-- Trong file resources/views/admin/admin_layout.blade.php -->
<!-- Trong file resources/views/admin/admin_layout.blade.php -->
<body>
    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex flex-column align-item-start">
        <a class="navbar-brand" href="#">Trang Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sản phẩm</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Bootstrap -->
    <div class="container">
        <h1>Dashboard</h1>
        <p>Chào mừng đến trang quản trị viên!</p>
    </div>

    <!-- Import các tệp JavaScript của Bootstrap -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- Các tệp JavaScript tùy chỉnh khác -->
</body>



</body>
<script></script>
</html>
