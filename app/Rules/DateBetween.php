<?php

namespace App\Rules;

use Closure;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\ValidationRule;

class DateBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pickupDate = Carbon::parse($value);
        $lastDate = Carbon::now()->addMonth();

        if (!($value >= now() && $value <= $lastDate)) {
            $fail('Please choose the date between a month from  now.');
        }
    }
}
