<?php

namespace App\Http\Controllers;

use App\Mail\OrderIn;
use App\Mail\OrderOut;
use App\Models\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function shopIndex()
    {
        //$randProducts = Product::query()->orderBy('name')->limit(4)->get();
        $randProducts = Product::query()->orderByDesc('sold')->limit(4)->get();
        $product = Product::query()->select()->inRandomOrder()->limit(1)->get();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('food-shop/index', [
            'randProducts' => $randProducts,
            'product' => $product,
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function shopList(Request $request)
    {
        if($request->id_category == 0) {
            $products = Product::query()->select()->orderBy('name')->paginate(9);
        }
        else
            $products = Product::query()->select()->where(['id_category'=>$request->id_category])->orderBy('name')->paginate(9);

        //$products = Product::query()->limit(3)->offset(1)->get();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('food-shop/shop-page', [
            'products' => $products,
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function productDetails(Request $request)
    {
        $product = Product::query()->where(['id'=>$request->id])->get();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('food-shop/product-details', [
            'product'=>$product,
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function addCart(Request $request)
    {
        $product = Product::query()->where(['id'=>$request->id])->first();

        DB::table('products')->where('id', '=', $request->id)
            ->update(['sold' => $request->sold = $request->sold+1]);

        $sessionId = Session::getId();

        \Cart::session($sessionId)->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty ?? 1,
            'attributes' => [
                'image'=>$product->image,
                'sold'=> $product->sold,
            ],
        ]);

        $cart = \Cart::getContent();

        return redirect()->back();
    }

    public function deleteCart()
    {
        $sessionId = Session::getId();
        \Cart::session($sessionId);

        \Cart::clear();

        return back();
    }

    public function about()
    {
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');
        return view('food-shop/about-us', [
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function checkout()
    {
        $user = Auth::user();
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        $messageSuccessOrder = \session('successOrder');

        $orders = Order::query()->where(['user_id'=>$user->getAuthIdentifier()])
            ->orderBy('id','desc')->get();

        $orders->transform(function ($order){
            $order->cart_data = unserialize($order->cart_data);

            return $order;
        });

        if(!empty($messageSuccessOrder)){
            return view('food-shop/checkout', [
                'cart' => $cart,
                'sum' => $sum,
                'user' => $user,
                'orders' => $orders,
            ])->with('messageSuccessOrder', $messageSuccessOrder);
        }

        return view('food-shop/checkout', [
            'cart' => $cart,
            'sum' => $sum,
            'user' => $user,
            'orders' => $orders,
        ])->with('messageSuccessOrder', $messageSuccessOrder);
    }

    public function profile()
    {
        $user = Auth::user();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        $orders = Order::query()->where(['user_id'=>$user->getAuthIdentifier()])
            ->orderBy('id','desc')->get();

        $orders->transform(function ($order){
            $order->cart_data = unserialize($order->cart_data);

            return $order;
        });

        return view('food-shop/my-account', [
            'cart' => $cart,
            'sum' => $sum,
            'user' => $user,
            'orders' => $orders,
        ]);
    }

    public function makeOrder(Request $request)
    {
        $user = Auth::user();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        $order = new Order();
        $order->user_id = $user->id;
        $order->cart_data = $order->setCartDataAttribute($cart);
        $order->total_sum = $sum;
        $order->phone = $request->phone;
        $order->address = $request->address . ' ' . $request->sity . ' ' . $request->post;

        if($order->save()){
            Mail::to('ihorbalitsky@gmail.com')->send(new OrderIn([
                'cart' => $cart,
                'sum' => $sum,
                'user' => $user
            ]));
            Mail::to($request->user())->send(new OrderOut([
                'cart' => $cart,
                'sum' => $sum,
            ]));

            \Cart::clear();

            Session::flash('successOrder', 'Order created successfully');
            return back();
        }
        Session::flash('errorOrder', 'Something went wrong');
        return back();
    }

    public function search(Request $request)
    {
        $products = Product::query()->select()->where(['name'=>$request->name])->get();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('food-shop/shop-page', [
            'products' => $products,
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function contact()
    {
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('food-shop/contact', [
            'cart' => $cart,
            'sum' => $sum
        ]);
    }
}
