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
                    <h2>Сторінка покупок</h2>
                    <ul>
                        <li><a href="{{route("food-shop/index")}}">Головна</a></li>
                        <li class="active">Меню</li>
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
                                    <label>Страви на замовлення:</label>
                                </div>
                            </div>
                            <div class="grid-list-options">
                                <ul class="view-mode">
                                    <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid4-alt"></i></a></li>
                                    <li><a href="#product-list" data-view="product-list"><i class="ti-align-justify"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid-list-product-wrapper">
                            <div class="product-view product-grid">
                                <div class="row">
                                    @foreach($products as $product)
                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="{{route('food-shop/product-details', ['id'=>$product->id])}}">
                                                    <img src="../../../public/storage/{{$product->image}}" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a title="Add To Cart" href="{{route('food-shop/add-cart', ['id'=>$product->id, 'sold'=>$product->sold])}}">
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
                                                <h4><a href="{{route('food-shop/product-details', ['id'=>$product->id])}}">{{$product->name}}</a></h4>
                                                <div class="product-price">
                                                    <span>Ціна: {{$product->price}}₴</span>
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">{{$product->name}}</a></h4>
                                                <div class="product-price">
                                                    <span class="new">{{$product->price}}₴ </span>
                                                </div>
                                                <p>{{$product->description}}</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="{{route('food-shop/add-cart', ['id'=>$product->id, 'sold'=>$product->sold])}}"><i class="ion-bag"></i> Добавити в корзину</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="pagination-style text-center mt-10">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar">
                            <div class="shop-widget">
                                <h4 class="shop-sidebar-title">Пошук продуктів</h4>
                                <div class="shop-search mt-25 mb-50">
                                    <form class="shop-search-form " method="post" action="{{route('food-shop/search')}}">
                                        @csrf
                                        <input name="name" type="text" placeholder="Знайти...">
                                        <button type="submit">
                                            <i class="icon-magnifier"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Категорії страв: </h4>
                                 <div class="shop-list-style mt-20">
                                    <ul>
                                        <li><a href="{{route('food-shop/shop-page')}}">Всі страви</a></li>
                                        <li><a href="{{route('food-shop/shop-page', ['id_category'=>1])}}">Перша страва</a></li>
                                        <li><a href="{{route('food-shop/shop-page', ['id_category'=>2])}}">Друга страва</a></li>
                                        <li><a href="{{route('food-shop/shop-page', ['id_category'=>3])}}">Напої</a></li>
                                        <li><a href="{{route('food-shop/shop-page', ['id_category'=>4])}}">Десерти</a></li>
                                        <li><a href="{{route('food-shop/shop-page', ['id_category'=>5])}}">Соуси</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		@include('layouts.footer')
		<!-- all js here -->
        @include('layouts.scripts')
    </body>
</html>
