<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CouponFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'description' => [
                'required',
                'string',
                'max:255',
            ],
            'type' => [
                'required',
                'string',
                'max:255',
            ],
            'seller_id' => [
                'required',
                'digits:1',
            ],
            'quantity' => [
                'required',
                'integer',
            ],
            'discount_coup' => [
                'required',
                'integer',
            ],
            'discount_type' => [
                'required',
                'string',
            ],
            'is_active' => [
                'required',
                'digits:1',
            ],
            
        ];

        if($this->getMethod() == 'POST')[
            $rules += [
                'code' => [
                    'required',
                    'string',
                    'max:10',
                    'unique:coupons,code',
                ],
            ],
        ];
        if($this->getMethod() == 'PUT')[
            $rules += [
                'code' => [
                    'required',
                    'string',
                    'max:10',
                    'unique:coupons,code',
                ],
            ],
        ];
        return $rules;
    }
}
