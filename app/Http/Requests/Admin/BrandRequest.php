<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'name'=>['required',
//                'unique:brands,name'
                ],
            'image'=>['required',
                'mimes:png,jpg,jpeg,mpeg,svg',
                'max:1024' /*KB*/ ,
//                'min:200' /*KB*/ ,
                ]
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>"فیلد نام اجباریست",
            'image.required'=>"تصویر انتخاب نشده است",
            'image.max'=>"حداکثر حجم فایل باید :max کیلو بایت باشد",
            'image.min'=>"حداقل حجم فایل باید :min کیلو بایت باشد",
            'image.mimes'=>"نوع فایل باید شامل :values باشد",
        ];
    }
}
