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
                    <h2>Cart Page</h2>
                    <ul>
                        <li><a href="../food-shop/index.blade.php">home</a></li>
                        <li class="active">Cart Page</li>
                    </ul>
                </div>
            </div>
        </div>
         <!-- shopping-cart-area start -->
        <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <h3 class="page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="../../../public/img/cart/cart-3.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Dry Dog Food</a></td>
                                            <td class="product-price-cart"><span class="amount">$110.00</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$110.00</td>
                                            <td class="product-remove"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="../../../public/img/cart/cart-4.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Cat Buffalo Food</a></td>
                                            <td class="product-price-cart"><span class="amount">$150.00</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$150.00</td>
                                            <td class="product-remove"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="../../../public/img/cart/cart-5.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Legacy Dog Food</a></td>
                                            <td class="product-price-cart"><span class="amount">$170.00</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$170.00</td>
                                            <td class="product-remove"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="#">Continue Shopping</a>
                                            <button>Update Shopping Cart</button>
                                        </div>
                                        <div class="cart-clear">
                                            <a href="#">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="cart-tax">
                                    <h4 class="cart-bottom-title">Estimate Shipping And Tax</h4>
                                    <div class="tax-wrapper">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label>
                                                    Country
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    State/Province
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    Zip/Postal Code
                                                </label>
                                                <input type="text" placeholder="1234567">
                                            </div>
                                            <button class="cart-btn-2" type="submit">Get A Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="discount-code-wrapper">
                                    <h4 class="cart-bottom-title">DISCOUNT CODES</h4>
                                    <div class="discount-code">
                                        <p>Enter your coupon code if you have one.</p>
                                        <form>
                                            <input type="text" required="" name="name">
                                            <button class="cart-btn-2" type="submit">Get A Quote</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="grand-totall">
                                    <span>Subtotal:   $155.00</span>
                                    <h5>Grand Total:   $353.00</h5>
                                    <a href="#">Proceed To Checkout</a>
                                    <p>Checkout with Multiple Addresses</p>
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
