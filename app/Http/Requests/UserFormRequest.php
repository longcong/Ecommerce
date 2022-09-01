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
                ],
                
            ];
            if($this->getMethod() == 'PUT')[
                $rules += [
                    'phone' => [
                        'required',
                        'digits:10',
                    ],
                ],
            ];
            if($this->getMethod() == 'PUT')[
                $rules += [
                    'zipcode' => [
                        'required',
                        'digits:6',
                    ],
                ],
            ];
        }
            
        return $rules;
    }
}
