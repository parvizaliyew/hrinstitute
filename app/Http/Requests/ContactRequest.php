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
            'name'=> 'required|max:100',
            'surname'=> 'required|max:100',
            'email'   => 'required|max:100',
            'phone'   => 'required|max:20',
        ];

    }

    public function messages(){
        $messages = [
            'name.required' =>    __('lang.name_required'),
            'name.max'      =>     __('lang.name_max'),
            'surname.required' => __('lang.sur_name_required'),
            'surname.max'      => __('lang.sur_name_max'),
            'email.required'    => __('lang.email_required'),
            'email.max'         => __('lang.email_max'),
            'phone.required'    => __('lang.phone_required'),
            'phone.max'         => __('lang.phone_max'),
        ];

        return $messages;
    }
}

