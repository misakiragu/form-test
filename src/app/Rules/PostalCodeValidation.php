<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PostalCodeValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $value = mb_convert_kana($value, 'a', 'UTF-8');
        $pattern = '/^\d{3}-\d{4}$/';
        return preg_match($pattern, $value) === 1;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '郵便番号は半角の「123-4567」の形式で入力してください。';
    }
}
