<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function product(){

        $products= product::all();
        if(Auth()->id()){
            if(Auth()->user()->userType=='1'){
                return view('admin.product', compact('products'));
            }else{
                return redirect('home');
            }
            
        }else{
            return redirect('login');
        }
        
    }

    public function addProduct(){

        if(Auth()->id()){
            if(Auth()->user()->userType=='1'){
        return view('admin.add-product');
    }else{
        return redirect('home');
    }
    
    }else{
    return redirect('login');
}

    }
    
    public function uploadProduct(Request $request){
        
        $product= new product();

        $image= $request->img;

        if($image){
            $imageName= time().'.'.$image->getClientOriginalExtension();
            $request->img->move('productimage', $imageName);
    
    
            $product->productImage= $imageName;
        }
      
        $product->title=$request->title;
        $product->price=$request->price;
        $product->description=$request->des;
        $product->qty=$request->qty;

        $product->save();
        return redirect('product')->with('message', 'Product Add succefully');

        
    }

    public function singleProduct($id){

        $products= product::find($id);

        return view('admin.single-product', compact('products'));
    }

    public function delete($id){
        if(Auth()->id()){
            if(Auth()->user()->userType=='1'){
                $products= product::find($id);        

                $products->delete();
              
                return redirect('product')->with('delete', 'Product Delete successfully. ');
    }else{
        return redirect('home');
    }
    
    }else{
    return redirect('login');
    }
    }

    public function editProduct($id){
        if(Auth()->id()){
            if(Auth()->user()->userType=='1'){
                $products= product::find($id);  
                return view('admin.edit-product', compact('products'));
    }else{
        return redirect('home');
    }
    
    }else{
    return redirect('login');
    }
    }
    

    public function updateProduct(Request $request, $id){
        $products= product::find($id);         

        $image= $request->img;

        if($image){
            $imageName= time().'.'.$image->getClientOriginalExtension();
            $request->img->move('productimage', $imageName);
    
    
            $products->productImage= $imageName;
        }
      
        $products->title=$request->title;
        $products->price=$request->price;
        $products->description=$request->des;
        $products->qty=$request->qty;

        $products->save();

        return redirect('product')->with('update', 'Product updated successful.');
    }

    public function showOrder(){
        if(Auth()->id()){
            if(Auth()->user()->userType=='1'){
                $order= order::all();

            return view('admin.order', compact('order'));
        }else{
        return redirect('home');
        }
    
        }else{
        return redirect('login');
        }
    }
        


    public function updateStatus($id){
        $order=order::find($id);
        $order->status='delevered';
        $order->save();
        return redirect()->back();

    }
}
