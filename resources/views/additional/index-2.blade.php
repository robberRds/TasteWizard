<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Marten - Pet Food eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../../../public/img/favicon.png">

		<!-- all css here -->
        @include('layouts.styles')
    </head>
    <body>
    @include('layouts.header')
        <div class="slider-area">
            <div class="slider-active owl-dot-style owl-carousel">
                <div class="single-slider pt-215 pb-228 bg-img" style="background-image:url(../../../public/img/slider/slider-2.jpg);">
                    <div class="container">
                        <div class="slider-content slider-content-white slider-animated-2 text-center">
                            <h3 class="animated">We keep pets for pleasure.</h3>
                            <h1 class="animated">Standard Food & Vitamins <br>For all Pets</h1>
                            <div class="slider-btn">
                                <a class="animated" href="../food-shop/product-details.blade.php">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider pt-215 pb-228 bg-img" style="background-image:url(../../../public/img/slider/slider-3.jpg);">
                    <div class="container">
                        <div class="slider-content slider-content-white slider-animated-2 text-center">
                            <h3 class="animated">We keep pets for pleasure.</h3>
                            <h1 class="animated">Standard Food & Vitamins <br>For all Pets</h1>
                            <div class="slider-btn">
                                <a class="animated" href="../food-shop/product-details.blade.php">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="food-category pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-food-category-2 text-center mb-30">
                            <div class="single-food-hover">
                                <img src="../../../public/img/product/food-catigory-1.png" alt="">
                            </div>
                            <h3>Dogs Food</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-food-category-2 text-center mb-30">
                            <div class="single-food-hover">
                                <img src="../../../public/img/product/food-catigory-2.png" alt="">
                            </div>
                            <h3>Cats Food</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-food-category-2 text-center mb-30">
                            <div class="single-food-hover">
                                <img src="../../../public/img/product/food-catigory-3.png" alt="">
                            </div>
                            <h3>Fishs Food</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pt-95 pb-70 gray-bg">
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h4>Most Populer</h4>
                    <h2>Recent Products</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
                                <a href="../food-shop/product-details.blade.php">
                                    <img src="../../../public/img/product/product-4.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="product-action-wishlist">
                                    <a title="Wishlist" href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="../food-shop/product-details.blade.php">Dog Calcium Food</a></h4>
                                <div class="product-price">
                                    <span class="new">$20.00 </span>
                                    <span class="old">$50.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
                                <a href="../food-shop/product-details.blade.php">
                                    <img src="../../../public/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="product-action-wishlist">
                                    <a title="Wishlist" href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="../food-shop/product-details.blade.php">Cat Buffalo Food</a></h4>
                                <div class="product-price">
                                    <span class="new">$22.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
                                <a href="../food-shop/product-details.blade.php">
                                    <img src="../../../public/img/product/product-6.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="product-action-wishlist">
                                    <a title="Wishlist" href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="../food-shop/product-details.blade.php">Legacy Dog Food</a></h4>
                                <div class="product-price">
                                    <span class="new">$50.00 </span>
                                    <span class="old">$70.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
                                <a href="../food-shop/product-details.blade.php">
                                    <img src="../../../public/img/product/product-7.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="product-action-wishlist">
                                    <a title="Wishlist" href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="../food-shop/product-details.blade.php">Chicken Dry Cat Food</a></h4>
                                <div class="product-price">
                                    <span class="new">$60.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
                                <a href="../food-shop/product-details.blade.php">
                                    <img src="../../../public/img/product/product-8.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="product-action-wishlist">
                                    <a title="Wishlist" href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="../food-shop/product-details.blade.php">Stomach Dog Food</a></h4>
                                <div class="product-price">
                                    <span class="new">$70.00 </span>
                                    <span class="old">$90.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
                                <a href="../food-shop/product-details.blade.php">
                                    <img src="../../../public/img/product/product-9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="product-action-wishlist">
                                    <a title="Wishlist" href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="../food-shop/product-details.blade.php">Nourish Puppy Food</a></h4>
                                <div class="product-price">
                                    <span class="new">$80.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
                                <a href="../food-shop/product-details.blade.php">
                                    <img src="../../../public/img/product/product-10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="product-action-wishlist">
                                    <a title="Wishlist" href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="../food-shop/product-details.blade.php">Tarpaulin Dog Food</a></h4>
                                <div class="product-price">
                                    <span class="new">$10.00 </span>
                                    <span class="old">$30.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
                                <a href="../food-shop/product-details.blade.php">
                                    <img src="../../../public/img/product/product-11.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="product-action-wishlist">
                                    <a title="Wishlist" href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="../food-shop/product-details.blade.php">Dog Calcium Food</a></h4>
                                <div class="product-price">
                                    <span class="new">$22.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-area pt-90 pb-70">
		    <div class="container">
                <div class="row">
                    <div class="col-lg-10 ml-auto mr-auto">
                        <div class="testimonial-wrap testimonial-white-color">
                            <div class="testimonial-text-slider text-center">
                                <div class="sin-testiText">
                                    <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo</p>
                                </div>
                                <div class="sin-testiText">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or amro porano ja cai tomi tai go amro porano  amro porano ja cai tomi tai go  .... </p>
                                </div>
                                <div class="sin-testiText">
                                    <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo</p>
                                </div>
                                <div class="sin-testiText">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or amro porano ja cai tomi tai go amro porano  amro porano ja cai tomi tai go  .... </p>
                                </div>
                            </div>
                            <div class="testimonial-image-slider text-center">
                                <div class="sin-testiImage">
                                    <img src="../../../public/img/testi/3.jpg" alt="">
                                    <h3>Robiul Islam</h3>
                                    <h5>Customer</h5>
                                </div>
                                <div class="sin-testiImage">
                                    <img src="../../../public/img/testi/4.jpg" alt="">
                                    <h3>Robiul Islam</h3>
                                    <h5>Customer</h5>
                                </div>
                                <div class="sin-testiImage">
                                    <img src="../../../public/img/testi/3.jpg" alt="">
                                    <h3>F. H. Shuvo</h3>
                                    <h5>Developer</h5>
                                </div>
                                <div class="sin-testiImage">
                                    <img src="../../../public/img/testi/5.jpg" alt="">
                                    <h3>T. T. Rayed</h3>
                                    <h5>CEO</h5>
                                </div>
                            </div>
                            <div class="testimonial-shap">
                                <img src="../../../public/img/icon-img/testi-shap-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <div class="deal-area bg-img deal-style-white pt-95 pb-100 bg-img" style="background-image:url(../../../public/img/banner/banner-2.jpg);">
            <div class="container">
                <div class="section-title section-title-white text-center mb-50">
                    <h4>Best Product</h4>
                    <h2>Deal of the Week</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="deal-img wow fadeInLeft">
                            <a href="#"><img src="../../../public/img/banner/banner-4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="deal-content">
                            <h3><a href="#">Name Your Product</a></h3>
                            <div class="deal-pro-price">
                                <span class="deal-old-price">$16.00 </span>
                                <span> $10.00</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor labore incididunt et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi exercita ullamco laboris ut aliquip ex ea commodo ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehendrit.</p>
                            <div class="timer timer-style">
                                <div data-countdown="2019/10/01"></div>
                            </div>
                            <div class="discount-btn mt-35">
                                <a class="btn-style" href="#">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="service-area bg-img pt-100 pb-65">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-1">
		                    <img src="../../../public/img/icon-img/shipping.png" alt="">
		                    <h4>FREE SHIPPING</h4>
		                    <p>Free shipping on all order </p>
		                </div>
		            </div>
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-2">
		                    <img src="../../../public/img/icon-img/support.png" alt="">
		                    <h4>ONLINE SUPPORT</h4>
		                    <p>Online support 24 hours a day</p>
		                </div>
		            </div>
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-3">
		                    <img src="../../../public/img/icon-img/money.png" alt="">
		                    <h4>MONEY RETURN</h4>
		                    <p>Back guarantee under 5 days</p>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="blog-area pb-70">
		    <div class="container">
		        <div class="section-title text-center mb-60">
                    <h4>Latest News</h4>
                    <h2>From Our Blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-30 gray-bg">
                            <div class="blog-img hover-effect">
                                <a href="blog-details.blade.php"><img alt="" src="../../../public/img/blog/blog-1.jpg"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li>By: <span>Admin</span></li>
                                        <li>Sep 14, 2018</li>
                                    </ul>
                                </div>
                                <h4><a href="blog-details.blade.php">Lorem ipsum dolor amet cons adipisicing elit</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-30 gray-bg">
                            <div class="blog-img hover-effect">
                                <a href="blog-details.blade.php"><img alt="" src="../../../public/img/blog/blog-2.jpg"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li>By: <span>Admin</span></li>
                                        <li>Sep 14, 2018</li>
                                    </ul>
                                </div>
                                <h4><a href="blog-details.blade.php">Lorem ipsum dolor amet cons adipisicing elit</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-30 gray-bg">
                            <div class="blog-img hover-effect">
                                <a href="blog-details.blade.php"><img alt="" src="../../../public/img/blog/blog-3.jpg"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li>By: <span>Admin</span></li>
                                        <li>Sep 14, 2018</li>
                                    </ul>
                                </div>
                                <h4><a href="blog-details.blade.php">Lorem ipsum dolor amet cons adipisicing elit</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
    @include('layouts.footer')
		<!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="ti-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="../../../public/img/quick-view/l1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="../../../public/img/quick-view/l2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="../../../public/img/quick-view/l3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab">
                                    <img src="../../../public/img/quick-view/s1.jpg" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="../../../public/img/quick-view/s2.jpg" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="../../../public/img/quick-view/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Dog Calcium Food</h3>
                                <div class="product-price">
                                    <span>$19.00 </span>
                                </div>
                                <div class="product-rating">
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do amt tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">XS</option>
                                            <option value="">S</option>
                                            <option value="">M</option>
                                            <option value=""> L</option>
                                            <option value="">XL</option>
                                            <option value="">XXL</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="2" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-style" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



		<!-- all js here -->
    @include('layouts.scripts')
    </body>
</html>
