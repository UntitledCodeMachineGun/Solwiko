<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'code'=>'required|min:2|max:255|unique:news,code',
            'name'=>'required|min:2|max:255|unique:news,name',
            'description' => 'required|min:2|max:150',
            'text' => 'required|min:2',
        ];

        if($this->route()->named('news.update')) {
            $rules['code'] .= ',' . $this->route()->parameter('news')->id;
            $rules['name'] .= ',' . $this->route()->parameter('news')->id;
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
           'text.min' => 'Поле Превью должно иметь хотя бы :min символа',
        ];
    }
}
