<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required',
            'parent_id' => 'required|numeric',
            'is_published' => 'required',
            'option' => 'required',
            'url' => "nullable",
            'order' => "required",
            'type' => "required",
            'lang' => 'required',
        ];
    }
}
