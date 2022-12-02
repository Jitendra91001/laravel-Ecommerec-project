<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Session\SessionManager;
use App\Models\product;
use Illuminate\Support\facades\DB;
use App\Models\cart;
use App\Models\order;
use Session;

class productController extends Controller
{
    public function products(Request $req)
    {
          $data= product::all();
          return view('products',['product' => $data]);
    }

    public function details($id,Request $req)
    {
          $data= product::find($id);
          return view('details',['product'=>$data]);
    }
    public function search(Request $req)
    {

      $mobile = product::
      where('name','like','%'.$req->input('query').'%')->get();
      return view('search',['product'=>$mobile]);   
    }
    public function Addtocart(Request $req)
    {
      if($req->session()->has('user'))
      {
            $Cart = new cart;
            $Cart->user_id = $req->session()->get('user')['id'];
            $Cart->product_id = $req->product_id;
            $Cart->save();
            return redirect('/products')->with("data add successful");
      }
      else{
            return redirect('/login');
      }
    }
    static function cardItem()
    {
          $userid =Session::get('user')['id'];
          return Cart::where('user_id',$userid)->count();
    }

    public function home(Request $req)
    {
          $data= product::paginate(8);
          return view('home',['product'=>$data]);
    }

    public function aboutus(Request $req)
    {
          return view('aboutus');
    }
    public function forgot(Request $req)
    {
          Session::forget('user');
          return redirect('login');
    }
    public function cart(Request $req)
    {
          $userId=Session::get('user')['id'];
          $data= DB::table('cart')
          ->join('products','cart.product_id','products.id')
          ->select('products.*','cart.id as cart_id')
          ->where('cart.user_id',$userId)
          ->get();
          return view('cart',['product'=>$data]);
          
    }
    public function remove($id,Request $req)
    {
      $data = cart::find($id)->delete();
      return redirect('cartlist');
    }
    public function ordernow(Request $req)
    {
      $userId=Session::get('user')['id'];
          $data= DB::table('cart')
          ->join('products','cart.product_id','products.id')
          ->where('cart.user_id',$userId)
          ->sum('products.price');
          return view('ordernow',['total'=>$data]);
    }
    public function orderplace(Request $req)
    {
      $userId=Session::get('user')['id'];
       $alldata= cart::where('user_id',$userId)->get();
        foreach($alldata as $cart)
        {
            $order = new order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->text;
            $order->save();
            cart::where('user_id',$userId)->delete();
        }
        $req->input();
        return redirect('/home');
    }  

    public function myorder()
    {
      $userId=Session::get('user')['id'];
          $data= DB::table('orders')
          ->join('products','orders.product_id','products.id')
          ->where('orders.user_id',$userId)
          ->get();
          return view('myorder',['orders'=>$data]);

    }
}