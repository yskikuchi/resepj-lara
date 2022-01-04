<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // $date= $this->date;
        // $time = $this->time;
        $startDate = date('Y-m-d');
        $endDate = date('Y-m-d', strtotime('1month'));
        return [
            'date'=> 'required|date|after_or_equal:'.$startDate.'|before_or_equal:'.$endDate,
            'number_of_people' => 'required',
        ];
    }
}
