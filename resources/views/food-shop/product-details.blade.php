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
                    <h2>Детально про страву</h2>
                    <ul>
                        <li><a href="{{route('food-shop/index')}}">Головна</a></li>
                        <li class="active">Опис</li>
                    </ul>
                </div>
            </div>
        </div>
        @foreach($product as $item)
        <div class="shop-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-img">
                            <img src="../../../public/storage/{{$item->image}}"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content">
                            <h1>{{$item->name}}</h1>
                            <div class="product-price">
                                <h4>Ціна: {{$item->price}}₴</h4>
                            </div>
                            <br/><br/><br/>
                            <div class="product-list-action">
                                <div class="product-list-action-left">
                                    <a class="addtocart-btn" href="{{route('food-shop/add-cart', ['id'=>$item->id, 'sold'=>$item->sold])}}" title="Add to cart">
                                        <i class="ion-bag"></i>
                                        Добавити в корзину
                                    </a>
                                </div>
                                <div class="product-list-action-right">
                                    <a href="#" title="Wishlist">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="social-icon mt-30">
                                <ul>
                                    <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="icon-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-social-skype"></i></a></li>
                                    <li><a href="#"><i class="icon-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-area pb-100">
            <div class="container">
                <div class="description-review-wrapper gray-bg pt-40">
                    <div class="description-review-topbar nav text-center">
                        <a class="active" data-toggle="tab" href="#des-details1">ОПИС</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                                <h5>{{$item->description}}</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
		@include('layouts.footer')

		<!-- all js here -->
        @include('layouts.scripts')
    </body>
</html>
