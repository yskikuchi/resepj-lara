<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Favorite;
use App\Models\Booking;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $bookings = Booking::with('shop:id,name')
        ->where('user_id', $user->id)
        ->get();
        $favorites = Favorite::with('shop','shop.images')
        ->where('user_id', $user->id)
        ->get();
        return view('mypage',compact('user','bookings','favorites'));
    }
}
