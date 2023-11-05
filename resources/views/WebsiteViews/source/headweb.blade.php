<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>{{ $tittle }} </title>
    <style>
       li {
        list-style: none;

    }

    #header {
        z-index: 10000;
        top: 0;
        position: sticky;
        transition: 0.5s;


    }
    #home ul {
        display: flex;
        justify-content: space-evenly;
        padding-top: 10px;





    }

    #home li:hover a {
        color: #d2d2e1 !important;
        ;

    }

    #home a {
        color: #3d3d64;
        text-decoration: none;
    }

    #home li {
        padding: 5px 5px;

    }


    #header {
        background-image: linear-gradient(to bottom, #bfa4a4, #9b9be1);

    }


    #menu-header {
        font-size: 20px;
    }

    /* #home :hover a  {
        border-radius: 5px;

        box-shadow: 0 0 20px 3px;
    } */


    .hidden-header {
        /* display: none; */
        opacity: 0;
    }


 /* Style The Dropdown Button */
 .dropbtn {
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        /* display: inline-block; */
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px;
        /* box-shadow: 0px 8px 16px px rgba(0, 0, 0, 0.2); */
        z-index: 100;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        background-color: #7070a7;
        padding: 10px 0;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    /* .dropdown-content a:hover {background-color: #f1f1f1} */

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown-content :hover a {
        color: red;
    }
    </style>
</head>
<body>

   <script>
     window.onscroll = function() {
        var header = document.getElementById("header");


        if (window.pageYOffset > 100) {
            header.classList.add("hidden-header");
        } else {
            header.classList.remove("hidden-header");
        }
    };

   </script>




    <div class="header " id="header" >

        <div class="container">
            <div class="row py-2 " style="text-align: center;">
                <!-- ------logo-------- -->
                <div class="col-lg-3 col-md-12" id="logo" style="padding:5px 5px">
                   <a href=""><img src="../img/logo (1).webp" alt=""></a>

                </div>

                <div class="col-lg-3 col-md-12 text-white " style="text-align:center;padding: 8px 0;">
                    <div class="input-group mb-3 " id="header-input" style="padding:5px 5px">
                        <input id="searchInput" type="text" class="form-control" placeholder="Nhấn để tìm kiếm">
                        <span class="input-group-text" style="background-color:#9fa3fe;">
                            <a style="cursor: pointer;" id="searchClick">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </span>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12 " id="home">

                    <ul id="menu-header">

                        <li>
                            <div class="">
                                <a href="website.php" class="nav-link " id="order">
                                    <i class="fa fa-home" aria-hidden="true" style="font-size:24px;color: #5c64b4;"></i>
                                    <strong style=" font-family: cursive;font-size:25px">HOME</strong>
                                </a>



                        </li>
                        <li>
                            <div class="">
                                <a href="" class="nav-link " id="order">
                                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:24px;color: #5c64b4;"></i>
                                    <strong style=" font-family: cursive;font-size:25px">CART</strong>
                                </a>



                        </li>
                        <li>
                            <div class="dropdown" id="ic-notuser">
                                <a href="#" class="nav-link " id="order">
                                    <i class="fa-solid fa-circle-user" style="font-size:25px;color: #5c64b4;"></i>
                                    <strong style=" font-family: cursive;font-size:25px">
                                        @if (session('users'))
                                            {{ session('users')->name }}
                                        @else
                                            USER
                                        @endif
                                    </strong>
                                </a>
                                <div class="dropdown-content">
                                    @if (session('users'))
                                        <a href="#" class="menu-dropdown">Tên người dùng: {{ session('user')->name }}</a>
                                        <a href="{{ route('logout') }}" class="menu-dropdown">Đăng xuất</a>
                                    @else
                                        <a href="{{ route('loginweb') }}" class="menu-dropdown">Đăng nhập</a>
                                        <a href="{{ route('registerweb') }}" class="menu-dropdown">Đăng ký</a>
                                    @endif
                                </div>
                            </div>


                        </li>


                    </ul>
                </div>


            </div>





        </div>
    </div>
    </div>



    <div class="menu-head">

    </div>



