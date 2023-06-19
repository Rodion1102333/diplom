<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin');
    }

    public function edit()
    {

        $title = 'Товары';
        $products = Product::query()->paginate(9);
        return view('admin-edit', compact('products', 'title'));
    }

    public function users()
    {
        $users = User::paginate(10);
        return view('users-table', compact('users'));
    }

    public function orders()
    {
        $orders = Order::paginate(10);
        return view('orders-table', compact('orders'));
    }

    public function update(Product $product, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'nullable',
            'slug' => 'nullable',
            'content' => 'nullable',
            'category_id' => 'nullable|exists:categories,id',
            'price' => 'nullable',
            'image' => 'nullable|image',
        ]);
        $validated = $validator->validated();
        if ($request->hasFile('image')) {
            Storage::delete($product->img);
            $image = $request->file('image')->store('images');
        }

        $product->updateOrFail(array_filter($validated));
        if (isset($image)) {
            $product->updateOrFail([
                'img' => $image
            ]);
        }
        return redirect()->back()->with('success', 'Измнения успешно сохранены');
    }

    public
    function deleteProduct($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->back();
    }

    public
    function editProduct(Product $product)
    {
        $categories = Category::all();
        return view('edit', compact('product', 'categories'));

    }

    public
    function showOrder(Order $order)
    {
        $order->with('products');
        $products = $order->products;
        return view('order-products', compact('order', 'products'));
    }

    public
    function deleteOrder(Order $order)
    {
        $order->products()->delete();
        $order->deleteOrFail();
        return redirect()->back();
    }

    public
    function changeHit(Product $product)
    {
        $product->updateOrFail([
            'hit' => !$product->hit
        ]);
        return redirect()->back();
    }

    public
    function changeSale(Product $product)
    {
        $product->updateOrFail([
            'sale' => !$product->sale
        ]);
        return redirect()->back();
    }

    public function changeRole(User $user)
    {
        // Если админ попытается сам себя лишить прав администратора, то его вернет обратно
        if ($user->id == auth()->user()->id) {
            return redirect()->back();
        }

        $user->updateOrFail([
            'is_admin' => ~$user->is_admin
        ]);
        return redirect()->back();
    }


    public
    function cancelPost($id)
    {
        $Product = Product::findOrFail($id);
        $Product->status = false;
        $Product->save();
        return redirect()->back();
    }

    public
    function acceptPost(Request $request)
    {
        $Product = Product::findOrFail($request->id);
        $Product->status = true;
        $Product->save();
        return redirect()->back();
    }

}
