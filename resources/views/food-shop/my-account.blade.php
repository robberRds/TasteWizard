<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Profile</title>
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
                    <h2>Мій аккаунт</h2>
                    <ul>
                        <li><a href="{{route('food-shop/index')}}">Головна</a></li>
                        <li class="active">Аккаунт</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- my account start -->
        <div class="my-account-area pt-100 pb-70">
            <div class="container">
                <form class="text-center" method="POST" action="{{ route('logout') }}">
                    <div class="billing-btn">
                        @csrf
                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                            {{ __('Вийти') }}
                        </button>
                    </div>
                </form>
                <br/>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="checkout-wrapper">
                            <div id="faq" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-1">Інформація про твій аккаунт: </a></h5>
                                    </div>
                                        @csrf
                                    <div id="my-account-1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                                <div class="account-info-wrapper">
                                                    <h4>Інформація про мій аккаунт</h4>
                                                    <h5>Ваші персональні дані:</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Ім'я</label>
                                                            <input type="text" value="{{$user->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Email пошта</label>
                                                            <input type="text" value="{{$user->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Зашифрований пароль</label>
                                                            <input type="password" value="{{$user->password}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="billing-back-btn">
                                                    <div class="billing-back">
                                                        <a href="#"><i class="ti-arrow-up"></i> назад</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-2">Історія замовлень</a></h5>
                    </div>
                    <div id="payment-2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="order-review-wrapper">
                                <div class="order-review">
                                    <div class="table-responsive">
                                        @foreach($orders as $order)
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th class="width-1">Назва страви</th>
                                                    <th class="width-2">Ціна</th>
                                                    <th class="width-3">К-ть</th>
                                                    <th class="width-4">Вартість</th>
                                                </tr>
                                                </thead>
                                                @foreach($order->cart_data as $cart_data)
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="o-pro-dec">
                                                                <p>{{$cart_data['name']}}</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="o-pro-price">
                                                                <p>{{$cart_data['price']}}₴</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="o-pro-qty">
                                                                <p>{{$cart_data['quantity']}}</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="o-pro-subtotal">
                                                                <p>{{$cart_data['price']*$cart_data['quantity']}}₴</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                @endforeach
                                                <tfoot>
                                                <tr>
                                                    <td colspan="3">Загальна вартість</td>
                                                    <td colspan="1">{{$order->total_sum}}₴</td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        @endforeach
                                    </div>
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
