<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Http\Request;
class PostController extends Controller
    {
        public function index(Request $request)
        {

        }

        public function create(Request $request)
        {
            $categories = Category::all();
            return view('create', compact('categories'));
        }

        public function status(Request $request)
        {
            $statuses = Status::all();
            return view('status', compact('statuses'));
        }

        public function store(Request $request)
        {
            $this->validate($request,[
               'title'=>'required',
               'slug'=>'required',
                'content'=>'required',
                'category'=>'required|exists:categories,id',
                'price'=>'required',
                'image'=>'nullable|image',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('images');
            }

            Product::create([
                'title'=>$request->title,
                'slug'=>$request->slug,
                'content'=>$request->content,
                'category_id'=>$request->category,
                'price'=>$request->price,
                'user_id' => $request->user,
                'img'  => $image ?? null,
            ]);
            $request->session()->flash('success', 'Продукт доавблен успешно!');
            return redirect('admin');

        }

        public function delete(Request $request, $id) {
            $products = Product::find($id);
            $products->delete();

        }

        public function profile() {
            $users = User::all();
            $asd = auth()->user()->id;
            $products = Product::where('user_id', $asd)->get();

            return view('profile', compact('users', 'products', 'asd'));
        }

        public function home() {
            $products = Post::orderBy('id')->where('status', 1)->paginate(10);
            return view('welcome', compact('products'));
        }

        public function admin() {
            $title = 'Товары';
            $products = Product::all();
            return view('admin', compact('products', 'title'));
        }
    }
