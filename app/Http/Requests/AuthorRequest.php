<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'name' => "required|unique",
            'year' => "required",
            'amount' => "required",
            'nationality' => "required",
        ];
    }

    public function messages()
    {
        return [

            'name.required' => "Truong nay Khong duoc de trong",
            'name.unique' => "Truong nay da ton tai",
            'year.required' => "Truong nay khong duoc de trong",
            'amount.required' => "Truong nay khong duoc de trong",
            'nationality.required' => "Truong nay khong duoc de trong",
        ];
    }
}
