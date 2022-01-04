<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        $data=[
            'user_id' => Auth::id(),
            'shop_id' => $request->shop_id,
        ];
        Favorite::create($data);
        return redirect()->back();
    }
    public function destroy($id)
    {
        $item = Favorite::find($id)->delete();
        return redirect()->back();
    }
}
