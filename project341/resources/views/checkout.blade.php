<?php
$userId = auth()->user()->id;
// // for a specific user
// $subTotal = Cart::session($userId)->getSubTotal();



use App\Models\Product;

foreach (\Cart::getContent() as $item) {
    $itemId = $item->id;
    if (Product::find($itemId) == null) {
        \Cart::session($userId)->remove($itemId);
    } else {
        \Cart::session($userId)->update($itemId, array(
            'name' => Product::find($itemId)->name,
            'price' => Product::find($itemId)->price,
            'image' => Product::find($itemId)->image,

        ));
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BetterBuy - Cart</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .btn-primary {
            height: 40px;
            line-height: 38px;
            text-transform: uppercase;
            background: #384aeb;
            padding: 0px 38px;
            margin-right: 5px;
            margin-left: 10px;
            border-radius: 30px;
            text-transform: capitalize;
            font-weight: 500;
            color: #fff;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }


        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="index"><img src="BetterBuy_logo2.png" style="width:150px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
                            <li class="nav-item active submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="category">Shop Category</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                                    <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>

                        <ul class="nav-shop">
                            <li class="nav-item"><button><i class="ti-search"></i></button></li>
                            <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle"></span></button> </li>
                            <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!-- ================ start banner area ================= -->
    <section class="blog-banner-area" id="category">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Checkout</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end banner area ================= -->



    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <h3>Order Confirmation</h3>
            <p></p>
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <?php $cartItems = \Cart::session($userId)->getContent() ?>
                        @foreach ($cartItems as $item)
                        @if (Product::find($item->id) != null)

                        <tbody>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="/storage/{{Product::find($item->id)->image}}" style="width:100px; height:100px;">
                                        </div>
                                        <div class="media-body">
                                            <p>{{Product::find($item->id)->name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>${{Product::find($item->id)->price}}</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <form action="{{ route('cart.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id}}">
                                            <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-6 text-center bg-gray-300" />
                                        </form>

                                    </div>
                                </td>
                                <td>
                                    <h5>{{\Cart::session($userId)->get($item->id)->getPriceSum();}}$</h5>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            <tr class="bottom_button">


                                <td>

                                </td>
                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>{{\Cart::session($userId)->getSubTotal()}}$</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td class="d-none d-md-block">

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <p>Free Shipping</p>
                                </td>
                            </tr>
                            <tr>
                                <div class="col-75">
                                    <div class="container">
                                        <form action="/action_page.php">

                                            <div class="row">
                                                <div class="col-50">
                                                    <h5>Billing Address</h5>
                                                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                                    <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                                    <input type="text" id="email" name="email" placeholder="john@example.com">
                                                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                                    <label for="city"><i class="fa fa-institution"></i> City</label>
                                                    <input type="text" id="city" name="city" placeholder="New York">

                                                    <div class="row">
                                                        <div class="col-50">
                                                            <label for="state">State</label>
                                                            <input type="text" id="state" name="state" placeholder="NY">
                                                        </div>
                                                        <div class="col-50">
                                                            <label for="zip">Zip</label>
                                                            <input type="text" id="zip" name="zip" placeholder="10001">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-50">
                                                    <h5>Payment</h5>
                                                    <label for="fname">Accepted Cards</label>
                                                    <div class="icon-container">
                                                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                                                    </div>
                                                    <label for="cname">Name on Card</label>
                                                    <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                                    <label for="ccnum">Credit card number</label>
                                                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                                    <label for="expmonth">Exp Month</label>
                                                    <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                                    <div class="row">
                                                        <div class="col-50">
                                                            <label for="expyear">Exp Year</label>
                                                            <input type="text" id="expyear" name="expyear" placeholder="2018">
                                                        </div>
                                                        <div class="col-50">
                                                            <label for="cvv">CVV</label>
                                                            <input type="text" id="cvv" name="cvv" placeholder="352">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <label>
                                                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </tr>

                            <tr class="out_button_area">
                                <td class="d-none-l">

                                </td>
                                <td class="">

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="cart">Back to Cart</a>
                                        <a class="primary-btn ml-2" href="index">Confirm Order</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->



    <!--================ Start footer Area  =================-->
    <footer>
        <div class="footer-area footer-only">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets ">
                            <h4 class="footer_title large_title">Our Mission</h4>
                            <p>
                                So seed seed green that winged cattle in. Gathering thing made fly you're no
                                divided deep moved us lan Gathering thing us land years living.
                            </p>
                            <p>
                                So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Quick Links</h4>
                            <ul class="list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Product</a></li>
                                <li><a href="#">Brand</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h4 class="footer_title">Gallery</h4>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/gallery/r1.jpg" alt=""></li>
                                <li><img src="img/gallery/r2.jpg" alt=""></li>
                                <li><img src="img/gallery/r3.jpg" alt=""></li>
                                <li><img src="img/gallery/r5.jpg" alt=""></li>
                                <li><img src="img/gallery/r7.jpg" alt=""></li>
                                <li><img src="img/gallery/r8.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Head Office
                                </p>
                                <p>123, Main Street, Your City</p>

                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Phone Number
                                </p>
                                <p>
                                    +123 456 7890 <br>
                                    +123 456 7890
                                </p>

                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    free@infoexample.com <br>
                                    www.infoexample.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
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