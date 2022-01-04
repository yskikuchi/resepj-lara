<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with('images','favorites:id,shop_id,user_id')->get();
        $user = Auth::user();
        return view('index', compact('shops','user'));
    }
    public function show($shop_id)
    {
        $shop = Shop::with('images')
        ->where('id',$shop_id)
        ->first();
        return view('detail', compact('shop'));
    }
}
