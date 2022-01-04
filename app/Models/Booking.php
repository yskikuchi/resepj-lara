<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'shop_id',
        'date',
        'time',
        'number_of_people',
        'canceled_at',
        'deleted_at',
    ];

    public function user(){
        return $this -> belongsTo(User::class);
    }
    public function shop(){
        return $this -> belongsTo(Shop::class);
    }
}
