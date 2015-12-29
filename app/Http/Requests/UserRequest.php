<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        switch ($this->method()) {
            case 'POST':
                return [
                    //
                    'firstname' => 'required',
                    'lastname'  => 'required',
                    'username'  => 'required|unique:users|min:3',
                    'email'     => 'required|unique:users',
                    'password'  => 'required|confirmed',
                    'phone'     => 'required|regex:/[0-9]{9,13}/'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    //
                    'firstname' => 'required',
                    'lastname'  => 'required',
                    'username'  => 'required',
                    'email'     => 'required',
                    'phone'     => 'required|regex:/[0-9]{9,13}/'
                ];
        }
    }
}
