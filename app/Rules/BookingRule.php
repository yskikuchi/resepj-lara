<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingRule implements Rule
{
    private $user_id,
            $date,
            $time;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($user_id, $date, $time)
    {
        $this->user_id = $user_id;
        $this->date = $date;
        $this->time = $time;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Booking::where('user_id', $this->user_id)
        ->whereHasBooking($this->date, $this->time)
        ->doesntExist();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '同じ時間帯に別の予約が入っております。';
    }
}
