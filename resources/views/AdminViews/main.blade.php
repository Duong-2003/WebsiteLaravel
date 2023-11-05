<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="/admin/template/js/main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="icon" type="image/x-icon" href="{{ asset('/public/img/favicon2.png') }}">
    <title>Trang Quản Trị Admin</title>



    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    @yield('head')
    <style>

#nav1{
    background-image: linear-gradient(to bottom, #dee2e6, rgba(13,110,253,.25));
    border-radius: 20px;
}
#admin{
    text-align: center;
    color:rgba(13,110,253,.25);
    font-family: 'Font Awesome 6 Free';
    font-size: 40px
}

    </style>
</head>
<body>


    <div class="bd-example bd-example-tabs">
        <div class="row">
          <div class="col-2" id="nav1">

            <div class="py-3" id="admin">
                <i class="fa-solid fa-lock"></i>
                Admin
             </div>
            <hr style="color: blue">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" name="main" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Users</a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Products</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Orders</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Profile</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>

            </div>
          </div>
          <div class="col-10">

            <div class="tab-content" id="v-pills-tabContent">

                    <button class="btn btn-primary text-center my-3" style="font-size:20px">Trang Quản trị Admin </button>

                    @yield('users')


            </div>
            <div>
                @yield('users')

            </div>
            <div>
                @yield('products')
            </div>

          </div>
        </div>
      </div>

</body>
<script>
 // Lắng nghe sự kiện khi các tab được nhấp
// Lắng nghe sự kiện khi các tab được nhấp
const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    event.preventDefault();

    // Xóa lớp active hiện tại
    navLinks.forEach(link => link.classList.remove('active'));
    document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active', 'show'));

    // Thêm lớp active cho tab được nhấp và nội dung tương ứng
    const target = event.target.getAttribute('href');
    event.target.classList.add('active');
    document.querySelector(target).classList.add('active', 'show');

    // Kiểm tra nếu tab được nhấp có tên là "home"
    if (event.target.getAttribute('name') === 'main') {
      // Chuyển hướng về trang main
      window.location.href = '{{ ('AdminViews/main.blade.php') }}';
    }
  });
});
</script>
