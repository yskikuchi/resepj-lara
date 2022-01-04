<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Http\Requests\BookingRequest;

class BookingController extends Controller
{
    public function store(BookingRequest $request)
    {
        $item = $request->all();
        $data = [
            'user_id' => Auth::id(),
            'shop_id' => $item['shop_id'],
            'date' => $item['date'],
            'time' => $item['time'],
            'number_of_people' => mb_substr($item['number_of_people'],0,-1),
        ];
        Booking::create($data);
        return view('done');
    }
    public function destroy($id)
    {
        Booking::find($id)->delete();
        return redirect()->back();
    }
}
