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
    public function authorize(): bool
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
            'name' => "required|unique:authors,name",
            'year' => "required",
            'amount' => "required|min:0",
            'nationality' => "required",
        ];
    }

    public function messages()
    {
        return [
          'name.required'=>"Truong nay Khong duoc de trong",
          'name.unique'=>"Truong nay da ton tai",
            'year.required'=>"Truong nay khong duoc de trong",
            'amount.required'=>"Truong nay khong duoc de trong",
            'nationality.required'=>"Truong nay khong duoc de trong",
            'amount.min'=>"Tong so tac pham phai lon hon 0",
        ];
    }
}
