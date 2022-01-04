<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class Shop extends Model
{
    use HasFactory;
    public function images(){
        return $this -> hasMany(Image::class);
    }
    public function favorites(){
        return $this -> hasMany(Favorite::class) -> where('user_id', Auth::id());
    }
}
