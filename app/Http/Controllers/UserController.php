<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
//        $users = User::orderBy('id', 'desc')->where('status', 1)->paginate (4);
        return redirect()->route('home');
    }
}
