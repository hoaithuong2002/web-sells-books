<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'amount' => 'required|numeric|min:0|not_in:0',
        ];
    }
    public function messages()
    {
        return [
            'amount.required'=>"Truong nay khong duoc de trong",
            'amount.min'=>"Tong so tac pham phai lon hon 0",
            'amount.numeric'=>"Truong nay bat buoc la so ",
            'amount.not_in'=>"Gia tri dam bao khong duoc bang 0",
        ];
    }
}
