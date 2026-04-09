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
            'last_name' => 'required|string|max:8',
            'first_name' => 'required|string|max:8',  
            'gender' => 'required|in:男性,女性,その他',
            'email' => 'required|email|max:255',
            'tel1' => 'required|string|digits:5',
            'tel2' => 'required|string|digits:5',
            'tel3' => 'required|string|digits:5',
            'address' => 'required|string',
            'building' => 'nullable|string',
            'category' => 'required',
            'detail' => 'required|string|max:120',

        ];
    }
}
