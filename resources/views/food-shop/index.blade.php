<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- all css here -->
    @include('layouts.styles')
</head>
    <body>
    @include('layouts.header')
        <div class="slider-area">
            <div class="slider-active owl-dot-style owl-carousel">
                <div class="single-slider pt-100 pb-100 yellow-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 col-sm-7">
                                <div class="slider-content slider-animated-1 pt-114">
                                    <h3 class="animated">Ласкаво просимо до нашого закладу ♥</h3>
                                    <h1 class="animated">Їжа & напої <br>Для всіх!!!</h1>
                                    <div class="slider-btn">
                                        <a class="animated" href="{{route('food-shop/shop-page')}}">КУПИТИ ЗАРАЗ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 col-sm-5">
                                <div class="slider-single-img slider-animated-1">
                                    <img class="animated" src="../../../public/img/myimg/restouran.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider pt-100 pb-100 yellow-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-7 col-12">
                                <div class="slider-content slider-animated-1 pt-114">
                                    <h3 class="animated">Ми раді, що ви завітали до нас</h3>
                                    <h1 class="animated">Ласкаво просимо!!!</h1>
                                    <div class="slider-btn">
                                        <a class="animated" href="{{route('food-shop/shop-page')}}">КУПИТИ ЗАРАЗ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 col-12">
                                <div class="slider-single-img slider-animated-1">
                                    <img class="animated" src="../../../public/img/myimg/food.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="food-category food-category-col pt-100 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-food-category cate-padding-1 text-center mb-30">
                            <div class="single-food-hover-2">
                                <img src="../../../public/img/myimg/borch.png" alt="">
                            </div>
                            <div class="single-food-content">
                                <h3>Перша та другі страви</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-food-category cate-padding-2 text-center mb-30">
                            <div class="single-food-hover-2">
                                <img src="../../../public/img/myimg/kava.png" alt="">
                            </div>
                            <div class="single-food-content">
                                <h3>Напої</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-food-category cate-padding-3 text-center mb-30">
                            <div class="single-food-hover-2">
                                <img src="../../../public/img/myimg/tort.png" alt="">
                            </div>
                            <div class="single-food-content">
                                <h3>Десерти</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pt-95 pb-70 gray-bg">
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h4>Найбільш популярні</h4>
                    <h2>Останні страви</h2>
                </div>
                <div class="row">
                    @foreach($randProducts as $randProduct)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
                                <a href="{{route('food-shop/product-details', ['id'=>$randProduct->id])}}">
                                    <img src="../../../public/storage/{{$randProduct->image}}" alt="">
                                </a>
                                <div class="product-action">
                                    <a title="Add To Cart" href="{{route('food-shop/add-cart', ['id'=>$randProduct->id, 'sold'=>$randProduct->sold])}}">
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
                                <h4><a href="{{route('food-shop/product-details', ['id'=>$randProduct->id])}}">
                                        {{$randProduct->name}}</a></h4>
                                <div class="product-price">
                                    <span>Ціна: {{$randProduct->price}} ₴</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="deal-area bg-img pt-95 pb-100">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h4>Найкраща страва</h4>
                    <h2>За останній тиждень</h2>
                </div>
                <div class="row">
                    @foreach($product as $item)
                    <div class="col-lg-6 col-md-6">
                        <div class="deal-img wow fadeInLeft">
                            <a href="{{route('food-shop/shop-page')}}"><img src="../../../public/storage/{{$item->image}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="deal-content">
                            <h3><a href="#">{{$item->name}}</a></h3>
                            <div class="deal-pro-price">
                                <span>Ціна: {{$item->price}}₴</span>
                            </div>
                            <p>{{$item->description}}</p>
                            <div class="timer timer-style">
                                <div data-countdown="2017/10/01"></div>
                            </div>
                            <div class="discount-btn mt-35">
                                <a class="btn-style" href="{{route('food-shop/shop-page')}}">КУПИТИ ЗАРАЗ</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
		<div class="service-area bg-img pt-100 pb-65">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-1">
		                    <img src="../../../public/img/icon-img/shipping.png" alt="">
		                    <h4>БЕЗКОШТОВНА ДОСТАВКА</h4>
		                    <p>Безкоштовна доставка від 350грн</p>
		                </div>
		            </div>
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-2">
		                    <img src="../../../public/img/icon-img/support.png" alt="">
		                    <h4>ОНЛАЙН ПІДТРИМКА</h4>
		                    <p>Онлайн підримка 24/7</p>
		                </div>
		            </div>
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-3">
		                    <img src="../../../public/img/icon-img/money.png" alt="">
		                    <h4>ПОВЕРНЕННЯ ГРОШЕЙ</h4>
		                    <p>Гарантоване повернення на протязі 3 днів</p>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        @include('layouts.footer')
		<!-- modal -->
		<!-- all js here -->
        @include('layouts.scripts')
    </body>
</html>
