<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlayerRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:191',
            'tid' => 'required',
            'postition' => 'nullable',
            'nationality' => 'nullable',
            'age' => 'required|numeric|min:15|max:30',
            'year' => 'required|numeric|min:0|max:20',
            'gender' => 'nullable'            
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "球員名稱 為必填",
            "name.min" => "球員名稱 至少需2個字元",
            "tid.required" => "球隊編號 為必填",
            "position.required" => "球員位置 為必填",
            "nationality.required" => "球員國籍 為必填",
            "year.required" => "球員年資 為必填",
            "year.min" => "球員年資 範圍必須介於0~20之間",
            "year.max" => "球員年資 範圍必須介於0~20之間",
        ];
    }    
}