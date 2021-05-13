<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $rules = [
            'code'=>'required|min:2|max:255|unique:categories,code',
            'name'=>'required|min:2|max:255|unique:categories,name',
            'description' => 'required|min:2',
        ];

        if($this->route()->named('categories.update')) {
            $rules['code'] .= ',' . $this->route()->parameter('category')->id;
            $rules['name'] .= ',' . $this->route()->parameter('category')->id;
        }

        return $rules;
    }
    public function messages()
    {
        return [
           'required' => 'Поле обязательно для заполнения!',
           'min' => 'Поле :attribute должно иметь хотя бы :min символа',
           'code.min' => 'Поле Код должно иметь хотя бы :min символа',
           'name.min' => 'Поле Имя должно иметь хотя бы :min символа',
           'description.min' => 'Поле Описание должно иметь хотя бы :min символа',
           'unique' => 'Такое имя этого поля уже существует',
        ];
    }
}
