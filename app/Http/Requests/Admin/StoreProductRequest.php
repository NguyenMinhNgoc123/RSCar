<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            //
            'type_id'=>'required',
            'brand_id'=>'required',
            'caption'=>'required|min:30|max:155',
            'model'=>'required|numeric',
            'number_kilometers'=>'required',
            'type_shoes_id'=>'required',
            'name_car'=>'required',
            'capacity'=>'required',
            'Year_of_registration'=>'required',
            'status_car'=>'required',
            'description'=>'required',
            'address'=>'required',
            'price'=>'required',
            'discount'=>'required|integer',
        ];
    }
}
