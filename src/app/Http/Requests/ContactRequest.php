<?php

namespace App\Http\Requests;

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
            'category_id' => 'required|exists:categories,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:1,2,3',
            'email' => 'required|email|max:255',
            'tel1' => 'required|numeric|digits_between:1,5',
            'tel2' => 'required|numeric|digits_between:1,5',
            'tel3' => 'required|numeric|digits_between:1,5',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'detail' => 'required|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'お問い合わせの種類を選択して下さい',
            'first_name.required' => '名を入力して下さい',
            'last_name.required' => '姓を入力して下さい',
            'gender.required' => '性別を選択して下さい',
            'email.required' => 'メールアドレスを入力して下さい',
            'email.email' => 'メールアドレスはメール形式で入力して下さい',
            'tel1.required' => '電話番号を入力して下さい',
            'tel1.numeric' => '電話番号は半角数字で入力して下さい',
            'tel1.digits_between' => '電話番号は5桁までの数字で入力して下さい',
            'tel2.required' => '電話番号を入力して下さい',
            'tel2.numeric' => '電話番号は半角数字で入力して下さい',
            'tel2.digits_between' => '電話番号は5桁までの数字で入力して下さい',
            'tel3.required' => '電話番号を入力して下さい',
            'tel3.numeric' => '電話番号は半角数字で入力して下さい',
            'tel3.digits_between' => '電話番号は5桁までの数字で入力して下さい',
            'address.required' => '住所を入力して下さい',
            'detail.required' => 'お問い合わせ内容を入力して下さい',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力して下さい',
        ];
    }
}