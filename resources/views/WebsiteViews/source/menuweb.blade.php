<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
 <style>
 #vpp{
    text-align: center;

    /* animation: moveRightLeft 2s infinite; */
    /* animation: shake 0.5s infinite; */
    border-right:1px solid rgb(53 80 121 / 25%);


 }
 #vpp:nth-child(6n) {
    /* thay đổi 6 phần tử ko gạch cái cuối */
  border-right: none;
}
 #vpp img {
  transition: transform 0.3s;
}
#vpp a{
    color:#593e3e;
}
#vpp strong:hover {
  color: #b74646;
}
 #vpp:hover img{
    transform: rotate(45deg);

 }




</style>

</head>


<body>
    <!-- <hr style="color: #af5b63;"> -->
        <div class="container">
            <div class="row "  style="align-items: center;margin-top:20px">

                <div class="col-1"></div>

                <div class="col-2" id="vpp">
                   <a href=""> <img src="../img/cate_1.webp" alt=""></a>
                   <div class="py-3"><a href=""><strong>VPP HỌC SINH</strong></a></div>
                </div>




                <div class="col-2" id="vpp">
                    <a href=""><img src="../img/cate_2.webp" alt=""></a>
                    <div class="py-3"><a href=""><strong>VPP VĂN PHÒNG</strong></a></div>
                </div>


                <div class="col-2" id="vpp" style="margin-top:6px">
                    <a href=""><img src="../img/cate_3.webp" alt=""></a>
                    <div class="py-3"><a href=""><strong>PHỤ KIỆN</strong></a></div>
                </div>



                <div class="col-2" id="vpp">
                  <a href="">  <img src="../img/cate_4.webp" alt=""></a>
                    <div class="py-3"><a href=""><strong>BALO-TÚI SÁCH</strong></a></div>
                </div>

                <div class="col-2" id="vpp">
                  <a href="">  <img src="../img/cate_5.webp" alt=""></a>
                    <div class="py-3"><a href=""><strong>DỤNG CỤ VĂN PHÒNG</strong></a></div>
                </div>

                <div class="col-1"></div>
            </div>
        </div>




        <div class="" style="text-align:center">
            <img src="../Public/img/Icons/icon_after_title.webp" alt="">
        </div>

</body>
</html>

