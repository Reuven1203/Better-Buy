<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BetterBuy</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="{{ asset('/vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/vendors/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('/vendors/nice-select/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('/vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/vendors/owl-carousel/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href=""><img src="/img/BetterBuy_logo2.png" alt="" style = width:150px;></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                </ul>
							</li>
<!--
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                </ul>
							</li>
            -->

							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
              <li class="nav-item"><button><a class="button button-header>
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('user/profile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
            </button></li>
            
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

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
    <section class="section-margin calc-60px">
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
    </section>
    <!-- ================ Best Selling item  carousel end ================= --> 

    <!-- ================ Blog section start ================= -->  

    <!-- ================ Blog section end ================= -->  

    <!-- ================ Subscribe section start ================= --> 

    <!-- ================ Subscribe section end ================= --> 

    

  </main>


  <!--================ Start footer Area  =================-->	

	<!--================ End footer Area  =================-->



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