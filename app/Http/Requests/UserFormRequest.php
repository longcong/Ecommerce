<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'phone' => [
                'required',
                'digits:10',
            ],
            'zipcode' => [
                'required',
                'digits:6',
            ],
            'fname' => [
                'required',
                'string',
                'max:255',
            ],
            'lname' => [
                'required',
                'string',
                'max:255',
            ],
            'company' => [
                'required',
                'string',
                'max:255',
            ],
            'city' => [
                'required',
                'string',
                'max:255',
            ],
            'state' => [
                'required',
                'string',
                'max:255',
            ],
            'address1' => [
                'required',
                'string',
                'max:255',
            ],
            'address2' => [
                'required',
                'string',
                'max:255',
            ],
            
            'note' => [
                'required',
                'string',
                'max:191',
            ],
        ];

        if($this->getMethod() == 'PUT')
        {
            $rules += [
                'email' => [
                    'required',
                    'email',
                    'max:191',
                    'unique:users,email',
                ],
                'phone' => [
                    'required',
                    'phone',
                    'digits:10',
                    'unique:users,phone',
                ],
                'zipcode' => [
                    'required',
                    'zipcode',
                    'digits:6',
                    'unique:users,zipcode',
                ],
            ];
        }
            
        return $rules;
    }
    // public function messages()
    // {
    //     return [
    //         'email.required' => 'Please enter your email id',
    //         'email.email'=> 'Please enter your correct email id',
    //         'fname.required' => 'Please enter your fname',
    //         'lname.required' => 'Please enter your lname',
    //         'company.required' => 'Please enter your company',
    //         'city.required' => 'Please enter your city',
    //         'state.required' => 'Please enter your state',
    //         'address1.required' => 'Please enter your first address ',
    //         'address2.required' => 'Please enter your second address',
    //         'phone.required' => 'Please enter your phone ',
    //         'phone.phone' => 'Please enter your correct phone',
    //         'zipcode.required' => 'Please enter your zipcode',
    //         'note.required' => 'Please enter your note',
    //     ];
    // }
}
