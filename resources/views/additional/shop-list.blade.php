<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->

		<!-- all css here -->
        @include('layouts.styles')
    </head>
    <body>
    @include('layouts.header')
        <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(../../../public/img/myimg/board.png);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Shop Page</h2>
                    <ul>
                        <li><a href="../food-shop/index.blade.php">home</a></li>
                        <li class="active">Shop Page</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area pt-100 pb-100 gray-bg">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-topbar-wrapper">
                            <div class="product-sorting-wrapper">
                                <div class="product-show shorting-style">
                                    <label>Showing <span>1-20</span> of <span>100</span> Results</label>
                                    <select>
                                        <option value="">12</option>
                                        <option value="">24</option>
                                        <option value="">36</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid-list-options">
                                <ul class="view-mode">
                                    <li><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid4-alt"></i></a></li>
                                    <li class="active"><a href="#product-list" data-view="product-list"><i class="ti-align-justify"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid-list-product-wrapper">
                            <div class="product-view product-list">
                                <div class="row">
                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="product-details.blade.php">
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
                                                <h4><a href="product-details.blade.php">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$20.00 </span>
                                                    <span class="old">$50.00</span>
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$19.00 </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="product-details.blade.php">
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
                                                <h4><a href="product-details.blade.php">Cat Buffalo Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$22.00 </span>
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$20.00 </span>
                                                    <span class="old">$50.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="product-details.blade.php">
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
                                                <h4><a href="product-details.blade.php">Legacy Dog Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$50.00 </span>
                                                    <span class="old">$70.00</span>
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$30.00 </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="product-details.blade.php">
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
                                                <h4><a href="product-details.blade.php">Chicken Dry Cat Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$60.00 </span>
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$50.00 </span>
                                                    <span class="old">$60.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="product-details.blade.php">
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
                                                <h4><a href="product-details.blade.php">Stomach Dog Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$70.00 </span>
                                                    <span class="old">$90.00</span>
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$25.00 </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="product-details.blade.php">
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
                                                <h4><a href="product-details.blade.php">Nourish Puppy Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$80.00 </span>
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$40.00 </span>
                                                    <span class="old">$70.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="product-details.blade.php">
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
                                                <h4><a href="product-details.blade.php">Tarpaulin Dog Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$10.00 </span>
                                                    <span class="old">$30.00</span>
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$30.00 </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="product-details.blade.php">
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
                                                <h4><a href="product-details.blade.php">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$22.00 </span>
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$19.00 </span>
                                                    <span class="old">$20.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="product-details.blade.php">
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
                                                <h4><a href="product-details.blade.php">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$20.00 </span>
                                                    <span class="old">$50.00</span>
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">Dog Calcium Food</a></h4>
                                                <div class="product-price">
                                                    <span class="new">$19.00 </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-style text-center mt-10">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-arrow-left"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a class="active" href="#"><i class="icon-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar">
                            <div class="shop-widget">
                                <h4 class="shop-sidebar-title">Search Products</h4>
                                <div class="shop-search mt-25 mb-50">
                                    <form class="shop-search-form">
                                        <input type="text" placeholder="Find a product">
                                        <button type="submit">
                                            <i class="icon-magnifier"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="shop-widget">
                                <h4 class="shop-sidebar-title">Filter By Price</h4>
                                 <div class="price_filter mt-25">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <label>price : </label>
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Food Category </h4>
                                 <div class="shop-list-style mt-20">
                                    <ul>
                                        <li><a href="#">Canned Food</a></li>
                                        <li><a href="#">Dry Food</a></li>
                                        <li><a href="#">Food Pouches</a></li>
                                        <li><a href="#">Food Toppers</a></li>
                                        <li><a href="#">Fresh Food</a></li>
                                        <li><a href="#">Frozen Food</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Top Brands </h4>
                                 <div class="shop-list-style mt-20">
                                    <ul>
                                        <li><a href="#">Authority</a></li>
                                        <li><a href="#">AvoDerm Natural</a></li>
                                        <li><a href="#">Bil-Jac</a></li>
                                        <li><a href="#">Blue Buffalo</a></li>
                                        <li><a href="#">Castor & Pollux</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Health Consideration </h4>
                                 <div class="shop-list-style mt-20">
                                    <ul>
                                        <li><a href="#">Bone Development <span>18</span></a></li>
                                        <li><a href="#">Digestive Care <span>22</span></a></li>
                                        <li><a href="#">General Health <span>19</span></a></li>
                                        <li><a href="#">Hip & Joint  <span>41</span></a></li>
                                        <li><a href="#">Immune System  <span>22</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Nutritional Option </h4>
                                 <div class="shop-list-style mt-20">
                                    <ul>
                                        <li><a href="#">Grain Free  <span>18</span></a></li>
                                        <li><a href="#">Natural <span>22</span></a></li>
                                    </ul>
                                </div>
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
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
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
