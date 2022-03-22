  <!--================ Header start =================-->
  @include('layouts.header')
  <!--================ Header end =================-->

  <!--================ Navbar start =================-->
  @include('layouts.navbar')
  <!--================ Navbar end =================-->

  <!-- ================ start banner area ================= -->
  <section class="blog-banner-area" id="category">
      <div class="container h-100">
          <div class="blog-banner">
              <div class="text-center">
                  <h1>Shop Phones</h1>
                  <nav aria-label="breadcrumb" class="banner-breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Shop Phones</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </section>
  <!-- ================ end banner area ================= -->


  <!-- ================ category section start ================= -->
  <section class="section-margin--small mb-5">
      <div class="container">
          <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-5">
                  <div class="sidebar-categories">
                      <div class="head">Browse Categories</div>
                      <ul class="main-categories">
                          <li class="common-filter">
                              <form action="#">
                                  <ul>
                                      <li class="filter-list"><input class="pixel-radio" type="radio" id="Gaming" name="brand"><label for="Gaming">Gaming<span> (50)</span></label></li>
                                      <li class="filter-list"><input class="pixel-radio" type="radio" id="School" name="brand"><label for="School">School<span> (20)</span></label></li>
                                      <li class="filter-list"><input class="pixel-radio" type="radio" id="Home" name="brand"><label for="Home">Home<span> (20)</span></label></li>
                                      <li class="filter-list"><input class="pixel-radio" type="radio" id="Work" name="brand"><label for="Work">Work<span> (20)</span></label></li>
                                  </ul>
                              </form>
                          </li>
                      </ul>
                  </div>
                  <div class="sidebar-filter">
                      <div class="top-filter-head">Product Filters</div>
                      <div class="common-filter">
                          <div class="head">Brands</div>
                          <form action="#">
                              <ul>
                                  <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                                  <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                                  <li class="filter-list"><input class="pixel-radio" type="radio" id="dell" name="brand"><label for="dell">Dell<span>(19)</span></label></li>
                                  <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                                  <li class="filter-list"><input class="pixel-radio" type="radio" id="surface" name="brand"><label for="surface">Surface<span>(19)</span></label></li>
                              </ul>
                          </form>
                      </div>
                      <div class="common-filter">
                          <div class="head">Price</div>
                          <div class="price-range-area">
                              <div id="price-range"></div>
                              <div class="value-wrapper d-flex">
                                  <div class="price">Price:</div>
                                  <span>$</span>
                                  <div id="lower-value"></div>
                                  <div class="to">to</div>
                                  <span>$</span>
                                  <div id="upper-value"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-9 col-lg-8 col-md-7">
                  <!-- Start Filter Bar -->
                  <div class="filter-bar d-flex flex-wrap align-items-center">
                      <div class="sorting">
                          <select>
                              <option value="1">Default sorting</option>
                              <option value="1">Default sorting</option>
                              <option value="1">Default sorting</option>
                          </select>
                      </div>
                      <div class="sorting mr-auto">
                          <select>
                              <option value="1">Show 12</option>
                              <option value="1">Show 12</option>
                              <option value="1">Show 12</option>
                          </select>
                      </div>
                      <div>
                          <div class="input-group filter-bar-search">
                              <input type="text" placeholder="Search">
                              <div class="input-group-append">
                                  <button type="button"><i class="ti-search"></i></button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Filter Bar -->
                  <!-- Start Best Seller -->
                  @if (empty(DB::table('products')->count()))
                  @livewire('phone')
                  @endif
                  <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                    <?php 
                     use Illuminate\Support\Facades\DB;
                    $products = DB::table('products')->where('category', 'Phones')->get();
                    $A=0;
                    foreach ($products as $product) {
                        $A++;
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card text-center card-product">
                             <div class="card-product__img">
                                <img class="card-img" src="img/product/<?php echo $product->image; ?>" alt="" width="100" height="100">
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
                    <img class="center" src="img/product/<?php echo $product->image; ?>" alt="" width="200" height="400">
                    <p><?php echo $product->brand; ?> Newest Smartphone from 2022</p>
                    <p class="card-product__price"><?php echo $product->price; ?>$</p>
                </div>
            </div>
        </div>
        <?php } ?>
                  <!-- End Best Seller -->
              </div>
          </div>
      </div>
  </section>
  <!-- ================ category section end ================= -->


  <!-- ================ Subscribe section start ================= -->
  <section class="subscribe-position">
      <div class="container">
          <div class="subscribe text-center">
              <h3 class="subscribe__title">Get Update From Anywhere</h3>
              <p>Bearing Void gathering light light his eavening unto dont afraid</p>
              <div id="mc_embed_signup">
                  <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
                      <div class="form-group ml-sm-auto">
                          <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                          <div class="info"></div>
                      </div>
                      <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
                      <div style="position: absolute; left: -5000px;">
                          <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                      </div>

                  </form>
              </div>

          </div>
      </div>
  </section>
  <!-- ================ Subscribe section end ================= -->


  <!--================ Navbar start =================-->
  @include('layouts.footer')
  <!--================ Navbar end =================-->


  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/nouislider/nouislider.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
  <script src="{{ asset('/js/addedjs.js') }}"></script>
  </body>

  </html>