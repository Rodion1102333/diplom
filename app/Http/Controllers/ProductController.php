<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
       $products=Product::with(['category','status'])->orderBy('id','asc')->paginate(12);
       return view('products.index',compact('products'));   
    }
    
    public function show($slug){
      $product=Product::query()->with(['category','status'])->where('slug',$slug)->firstOrFail();
      if (!$product->status) {
        return redirect()->back();
      }
      return view('products.show',compact('product')); 
    }
    
    public function search(Request $request) {
      $request->validate([
        's' => 'nullable'
      ]);
      $products = Product::query()->where('title', 'LIKE', "%$request->s%")->paginate(10);
      return view('categories.show', ['products' => $products, 's' => $request->s]);
    }
    
    public function information(){
      return view('information.information');
  }

  public function trade(){
      return view('information.trade');
  }

  public function delivery(){
      return view('information.delivery');
  }
  
  public function remont(){
    return view('information.remont');
}

  public function contacts(){
      return view('information.contacts');
  }

  public function garantii(){
      return view('information.garantii');
  }
  public function privacy(){
    return view('information.privacy');
}
public function foundcheaper(){
  return view('information.foundcheaper');
}
}
