<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function redirect(){

        $userType= Auth::user()->userType;

      
        if($userType=='1'){
            return view('admin.home');
        }else{
            
        $products = product::paginate(3);

        // __Cart show when user loged in__ //
        $user = auth()->user();
        $count= cart::where('phone', $user->phone)->count();

        return view('user.home', compact('products', 'count'));
            
        }
    }

public function index(){

    if(Auth::id()){

        return redirect('home');

    }else{

        $products = product::paginate(3);
       

        return view('user.home', compact('products'));

    }
}


public function about(){
    return view('user.about');
}

public function contact(){
    return view('user.contact');
}

public function shop(){
    $products = product::paginate(30);
    return view('user.shop', compact('products'));
}

public function product($id){

    $products = product::find($id);

    return view('user.product', compact('products'));
}

public function search(Request $request){
    $search = $request->search;

    $products=product::where('title', 'Like','%'.$search.'%')->get();

    return view('user.shop', compact('products'));
}

public function addCart(Request $request, $id){

    if(Auth::id()){

        $user =auth()->user();
        $products=product::find($id);

        $cart = new cart();

        $cart->name= $user->name;
        $cart->phone= $user->phone;
        $cart->address= $user->address;

        $cart->product_title=   $products->title;
        $cart->price=   $products->price;
        $cart->quantity=   $request->quantity;
        $cart->save();

        
        return redirect()->back()->with('AddCart', 'Product add a cart sucessfull.');


    }else{
        return redirect('login');
    }
}

    public function cart(){

        $user = auth()->user();

        $cart= cart::where('phone', $user->phone)->get();
        $count= cart::where('phone', $user->phone)->count();
        return view('user.cart', compact('count', 'cart'));
    }

    public function deleteCart($id){

        $data = cart::find($id);
        $data->delete();
        return redirect()->back()->with('delete', 'Cart Removed successfully.');
    }

    public function confirmOrder(Request $request){
        $user= auth()->user();
        $name= $user->name;
        $phone= $user->phone;
        $address= $user->address;
        
        foreach($request->productname as $key=>$productname){

            $order= new order();
            $order->product_title= $request->productname[$key];
            $order->price= $request->price[$key];
            $order->quantity= $request->quantity[$key];
            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;

            $order->status='Not delivered';
            $order->save();
           

        }
        DB::table('carts')->where('phone', $phone)->delete();
        return redirect()->back()->with('OrderComplete', 'Order place successfully');
    }
}
