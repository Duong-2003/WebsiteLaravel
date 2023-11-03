

<style>
    @media screen and (max-width: 990px) {

      #slide2 img {

        display: none;

      }

      #slide3 img {
        display: none;

      }

    }
  </style>
  </head>


  <body>


    <div class="container py-3">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 ">



          <div id="slideshow" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#slideshow" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner" id="slide1">
              <div class="carousel-item active">
                <img id="slide" onclick="changeimg()" src="" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item ">
                <img id="slide"  src="" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img id="slide"  src="" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">

                <img id="slide" src="" class="d-block w-100" alt="...">


              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


        </div>






        <div class=" slide2 col-sm-4">

          <div class="col " id="slide2">
            <img src="" alt="">
          </div>

          <div class="col " id="slide3" style="padding-top: 18px;">
            <img src="" alt="">
          </div>
        </div>
      </div>
    </div>

  </body>
  <script>
    var index = 1;
    changeimg = function() {
    
      document.getElementById('slide').src = imgs[index];
      index++;
      if (index == 3) {
        index = 0;
      }

    }
    setInterval(changeimg, 2000)
  </script>

