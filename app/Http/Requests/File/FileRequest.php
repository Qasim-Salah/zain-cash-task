<?php

namespace App\Http\Requests\File;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
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
//            'file.*' => 'required|mimes:doc,docx,pdf,text|max:2048', this is advanced validation
            'file.*' => 'required',
            'employee_id' => 'required | exists:employees,id',
        ];
    }

    public function messages()
    {
        return [
            'file . required' => 'هذا الحقل مطلوب',
//            'file . file' => 'هذا الحقل يجب ان يكون ملف',
//            'file . mimes' => 'هذا الحقل يجب ان يكون من نوع doc,docx,pdf,text',
//            'file . max' => 'هذا الحقل يجب ان لا يتجاوز 2048 كيلوبايت',
            'employee_id . required' => 'هذا الحقل مطلوب',
            'employee_id . exists' => 'هذا الحقل غير موجود',
        ];
    }
}
