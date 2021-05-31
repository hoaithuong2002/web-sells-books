<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|unique:users,username',
            'password' => 'required|between:6,15',
            'password_confirmation' => 'required|same:password',
            'email' => 'required|email|unique:users,email|ends_with:@gmail.com',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Tên người dùng không được bỏ trống!',
            'username.unique' => 'Tên người dùng này đã tồn tại!',

            'password.required' => 'Mật khẩu không được bỏ trống!',
            'password.between' => 'Mật khẩu phải có độ dài từ 6 đến 15 ký tự!',

            'password_confirmation.required' => 'Mật khẩu phải được xác nhận lại!',
            'password_confirmation.same' => 'Mật khẩu xác nhận không khớp!',

            'email.required' => 'Email không được bỏ trống!',
            'email.email' => 'Email không đúng định dạng!',
            'email.unique' => 'Email đã tồn tại!',
            'email.ends_with' => 'Email không đúng định dạng!',

        ];
    }
}
