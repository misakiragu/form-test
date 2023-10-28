<?php

namespace App\Http\Requests;

use App\Rules\PostalCodeValidation;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            'name' => ['required', 'string', 'max:255'],
            'name1' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'post-code' => ['required'],
            'address' => ['required', 'string'],
            'content' => ['required', 'string', 'max:120']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前を文字列で入力してください',
            'name.max' => '名前を255文字以下で入力してください',
            'name1.required' => '名前を入力してください',
            'name1.string' => '名前を文字列で入力してください',
            'name1.max' => '名前を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'post_code.required' => '郵便番号を入力してください',
            'address.required' =>'住所を入力してください',
            'address.required' =>'住所を文字列で入力してください',
            'content.required' => 'ご意見を入力してください',
            'content.string' => 'ご意見を文字列で入力してください',
            'content.max' => 'ご意見を120文字以下で入力してください'
        ];
    }
}
