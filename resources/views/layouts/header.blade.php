<header class="header-area">
    <div class="header-bottom transparent-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5 d-flex align-items-center">
                    <div class="logo pt-15">
                        <a href="{{route('food-shop/index')}}"><img alt="" src="../../../public/img/myimg/logo.png"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li><a href="{{route('food-shop/index')}}">ГОЛОВНА</a></li>
                                <li class="mega-menu-position"><a href="{{route('food-shop/shop-page')}}">Меню</a>
                                </li>
                                <li><a href="#">Сторінки</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{route('food-shop/index')}}">Головна</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/shop-page')}}">Меню</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/about')}}">Про нас</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/contact')}}">Контакти</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/my-account')}}">Кабінет</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/checkout')}}">Замовлення</a>
                                        </li>
                                        <li>
                                            <a href="{{route('voyager.dashboard')}}">Адмін панель</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('food-shop/about')}}">ПРО НАС</a></li>
                                <li><a href="{{route('food-shop/contact')}}">КОНТАКТИ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-7">
                    <div class="search-login-cart-wrapper">
                        <div class="header-login same-style">
                            <a href="{{route('food-shop/my-account')}}"><i class="icon-user icons"></i></a>
                        </div>
                        <div class="header-cart same-style">
                            <button class="icon-cart">
                                <i class="icon-handbag"></i>
                                <span
                                    class="count-style">{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity()}}</span>
                            </button>
                            <div class="shopping-cart-content">
                                @foreach($cart as $item)
                                    <ul>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="../../../public/storage/{{$item->attributes->image}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">{{$item->name}} </a></h4>
                                                <h6>К-ть: {{$item->quantity}}</h6>
                                                <span>{{$item->price}}₴</span>
                                            </div>
                                        </li>
                                    </ul>
                                @endforeach
                                <div class="shopping-cart-total">
                                    <h4>Доставка : <span>Безкоштовна</span></h4>
                                    <h4>__________   <span>(від 350₴)</span></h4>
                                    <h4>Сума : <span class="shop-total">₴{{$sum}}</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a href="{{route('food-shop/checkout')}}">Замовити</a>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a href="{{route('food-shop/delete-cart')}}">Очистити кошик</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{route('food-shop/index')}}">ГОЛОВНА</a></li>
                                <li><a href="#">Сторінки</a>
                                    <ul>
                                        <li>
                                            <a href="{{route('food-shop/index')}}">Головна</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/shop-page')}}">Меню</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/about')}}">Про нас</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/contact')}}">Контакти</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/my-account')}}">Особистий кабінет</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/checkout')}}">Замовлення</a>
                                        </li>
                                        <li>
                                            <a href="{{route('voyager.dashboard')}}">Адмін панель</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('food-shop/shop-page')}}">Меню</a>
                                </li>
                                <li><a href="{{route('food-shop/contact')}}"> Контакти </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('header')
