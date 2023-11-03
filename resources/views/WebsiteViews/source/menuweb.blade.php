<style>
    nav {

        background-image: linear-gradient(to bottom, #858585, #7f7f8d);
    }

    li {
        list-style: none;
    }

    nav #menu li a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 10px 15px;

    }

    ul#menu {
        padding: 0;
    }

    #menu {
        display: flex;
        justify-content: space-evenly;
    }

    #menu a i {
        color: #ba4646;
    }

    nav #menu li:hover a {
        background-image: linear-gradient(to bottom, #4f4d4d, #313133);
        transition: all 0.3s;
    }

    nav #menu li:hover a.menu-dropdown {
        background-image: none;
        transition: none;
    }

    .dropdown-content a:hover {
        background-color: #4f4d4d;
    }

    @media screen and (max-width: 456px) {
        #menu {
            flex-wrap: wrap;
            justify-content: space-evenly;

        }
    }

    @media screen and (max-width: 1190px) {
        #menu {
            flex-wrap: wrap;
            justify-content: space-evenly;

        }
    }
</style>

</head>


<body>


    <div class="dropdown" id="ic-user" style="display: none;">
        <a href="#">
            <img src="https://avatars.githubusercontent.com/u/125018793?s=400&u=d66a7dc1d555eb23d223fe07b638e9701a5735be&v=4"
                alt="" width="32" height="32" class="rounded-circle me-2">
            <strong></strong>
        </a>
        <div class="dropdown-content">
            <a href="#" class ="menu-dropdown">Thông tin</a>
            <a href="" class= "menu-dropdown">Đăng xuất</a>
        </div>
    </div>
    <nav id="nav-menu">

        <div class="container">
            <ul id="menu">
                <li><a href="website.php">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Trang chủ
                    </a></li>


                <!-- <li><a href="login.php">
                            <i class="fa fa-user-circle" aria-hidden="true"  ></i>
                            Đăng nhập
                            </a></li>


                            <li><a href="register.php" >
                            <i class="fa fa-user-plus" aria-hidden="true"  ></i>
                            Đăng kí
                            </a></li> -->





                <li><a href="./cart.php">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        Giỏ hàng
                    </a></li>





            </ul>
        </div>
    </nav>



</body>

</html>
