<!--================ Header start =================-->
@include('layouts.header')
<!--================ Header end =================-->

<!--================ Navbar start =================-->
@include('layouts.navbar')
<!--================ Navbar end =================-->

<main class="site-main">
  <!--================ Hero banner start =================-->
  <section class="hero-banner">
    <div class="container">
      <div class="row no-gutters align-items-center pt-60px">
        <div class="col-5 d-none d-sm-block">
          <div class="hero-banner__img">
            <img class="img-fluid" src="img/home/hero-banner.png" alt="">
          </div>
        </div>
        <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
          <div class="hero-banner__content">
            <h4>Welcome to BetterBuy</h4>
            <h1>We are simply better</h1>
            <p>The better tech e-commerce platform! We make BestBuy look like a joke.</p>
            <a class="button button-hero" href="#">Browse Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero banner start =================-->

  <!--================ Hero Carousel start =================-->
  <section class="section-margin mt-0">
    <div class="owl-carousel owl-theme hero-carousel">
      <div class="hero-carousel__slide">
        <img src="img/home/hero-slide1.png" alt="" class="img-fluid">
        <a href="#" class="hero-carousel__slideOverlay">
          <h3>Wireless Headphone</h3>
          <p>Accessories Item</p>
        </a>
      </div>
      <div class="hero-carousel__slide">
        <img src="img/home/hero-slide2.png" alt="" class="img-fluid">
        <a href="#" class="hero-carousel__slideOverlay">
          <h3>Wireless Headphone</h3>
          <p>Accessories Item</p>
        </a>
      </div>
      <div class="hero-carousel__slide">
        <img src="img/home/hero-slide3.png" alt="" class="img-fluid">
        <a href="#" class="hero-carousel__slideOverlay">
          <h3>Wireless Headphone</h3>
          <p>Accessories Item</p>
        </a>
      </div>
    </div>
  </section>
  <!--================ Hero Carousel end =================-->

  <!-- ================ Sponsor Product End carousel ================= -->
  <section class="section-margin calc-60px">
    <div class="container">
      <div class="section-intro pb-60px">
        <h2>Sponsored <span class="section-intro__style">Products</span></h2>
      </div>

      <div class="row">
        <?php

        use Illuminate\Support\Facades\DB;

        $products = DB::table('products')->where('category', 'SponsoredProduct')->get();
        $A = 0;
        foreach ($products as $product) {
          $A++;
        ?>
          <div class="col-md-6 col-lg-4">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="/storage/{{$product->image}}" alt="" width="100" height="100">
                <ul class="card-product__imgOverlay">
                  <li><button class="modal-button" href="#myModal<?php echo $A; ?>"><i class="ti-search"></i></button></li>
                  <li><button><i class="ti-shopping-cart"></i></button></li>
                  <li><button><i class="ti-heart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>Electronics</p>
                <h4 class="card-product__title"><a href="#"><?php echo $product->name; ?></a></h4>
                <p class="card-product__price"><?php echo $product->price; ?>$</p>
              </div>
            </div>
            <!-- The Modal -->
            <div id="myModal<?php echo $A; ?>" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <img class="center" src="/storage/{{$product->image}}" alt="" width="200" height="400">
                <p><?php echo $product->brand; ?> Computer ideal for home and school use.</p>
                <p class="card-product__price"><?php echo $product->price; ?>$</p>
              </div>
            </div>
          </div>
          <!-- </div> -->
        <?php } ?>
      </div>
    </div>

    <!-- <div class="owl-carousel owl-theme" id="bestSellerCarousel">
        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product1.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Accessories</p>
            <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product2.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Beauty</p>
            <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product3.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product4.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product1.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Accessories</p>
            <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product2.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Beauty</p>
            <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product3.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product4.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ Sponsor Product End  carousel end ================= -->


  <!-- ================ trending product section start ================= -->
  <section class="section-margin calc-60px">
    <div class="container">
      <div class="section-intro pb-60px">
        <p>Popular Item in the market</p>
        <h2>Trending <span class="section-intro__style">Product</span></h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product1.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Accessories</p>
              <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product2.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Beauty</p>
              <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product3.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Decor</p>
              <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product4.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Decor</p>
              <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product5.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Accessories</p>
              <h4 class="card-product__title"><a href="single-product.html">Man Office Bag</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product6.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Kids Toy</p>
              <h4 class="card-product__title"><a href="single-product.html">Charging Car</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product7.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Accessories</p>
              <h4 class="card-product__title"><a href="single-product.html">Blutooth Speaker</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product8.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Kids Toy</p>
              <h4 class="card-product__title"><a href="#">Charging Car</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ trending product section end ================= -->


  <!-- ================ offer section start ================= -->
  <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
    <div class="container">
      <div class="row">
        <div class="col-xl-5">
          <div class="offer__content text-center">
            <h3>Up To 50% Off</h3>
            <h4>Winter Sale</h4>
            <p>Him she'd let them sixth saw light</p>
            <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ offer section end ================= -->

  <!-- ================ Best Selling item  carousel ================= -->
  <!-- <section class="section-margin calc-60px">
    <div class="container">
      <div class="section-intro pb-60px">
        <p>Popular Item in the market</p>
        <h2>Best <span class="section-intro__style">Sellers</span></h2>
      </div>
      <div class="owl-carousel owl-theme" id="bestSellerCarousel">
        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product1.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Accessories</p>
            <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product2.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Beauty</p>
            <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product3.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product4.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product1.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Accessories</p>
            <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product2.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Beauty</p>
            <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product3.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product4.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ================ Best Selling item  carousel end ================= -->

  <!-- ================ Blog section start ================= -->

  <!-- ================ Blog section end ================= -->

  <!-- ================ Subscribe section start ================= -->

  <!-- ================ Subscribe section end ================= -->



</main>


<!--================ Navbar start =================-->
@include('layouts.footer')
<!--================ Navbar end =================-->



<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="vendors/skrollr.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="vendors/jquery.ajaxchimp.min.js"></script>
<script src="vendors/mail-script.js"></script>
<script src="js/main.js"></script>
</body>

</html>