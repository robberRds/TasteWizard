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
    @if($messageSuccessOrder)
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>{{$messageSuccessOrder}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
        <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(../../../public/img/myimg/board.png);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Створення замовлення</h2>
                    <ul>
                        <li><a href="{{route('food-shop/index')}}">Головна</a></li>
                        <li class="active">Замовлення</li>
                    </ul>
                </div>
            </div>
        </div>
         <!-- shopping-cart-area start -->
        <div class="checkout-area pt-95 pb-70">
            <div class="container">
                <h3 class="page-title">замовлення</h3>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="checkout-wrapper">
                            <div id="faq" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-1">заповнення інформації</a></h5>
                                    </div>
                                    <div id="payment-1" class="panel-collapse collapse">
                                        <form method="post" action="{{route('food-shop/make-order')}}">
                                            @csrf
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Ім'я</label>
                                                            <input name="name" type="text" value="{{$user->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Email адрес</label>
                                                            <input name="email" type="email" value="{{$user->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Адреса</label>
                                                            <input name="address" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Місто</label>
                                                            <input name="city" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Область</label>
                                                            <input name="state" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Поштовий індекс</label>
                                                            <input name="post" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Телефон</label>
                                                            <input name="phone" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-review">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th class="width-1">Назва страви</th>
                                                                <th class="width-2">Ціна</th>
                                                                <th class="width-3">К-ть</th>
                                                                <th class="width-4">Вартість</th>
                                                            </tr>
                                                            </thead>
                                                            @foreach($cart as $item)
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="o-pro-dec">
                                                                        <p>{{$item->name}}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="o-pro-price">
                                                                        <p>{{$item->price}}₴</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="o-pro-qty">
                                                                        <p>{{$item->quantity}}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="o-pro-subtotal">
                                                                        <p>{{$item->price * $item->quantity}}₴</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                            @endforeach
                                                            <tfoot>
                                                            <tr>
                                                                <td colspan="3">Загальна вартість</td>
                                                                <td colspan="1">{{$sum}}₴</td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <span>
                                                            Забули добавити страву?
                                                            <a href="{{route('food-shop/shop-page')}}"> Перейти в меню</a>

                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="billing-back-btn">
                                                    <div class="billing-btn">
                                                        <button type="submit">Підтвердити</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
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
                    </div>
                    <div class="col-lg-3">
                        <div class="checkout-progress">
                            <h4>Checkout Progress</h4>
                            <ul>
                                <li>Billing Address</li>
                                <li>Shipping Address</li>
                                <li>Shipping Method</li>
                                <li>Payment Method</li>
                            </ul>
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
