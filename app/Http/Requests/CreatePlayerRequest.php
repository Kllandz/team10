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
            'postition' => 'required|string|min:2|max:191',
            'nationality' => 'nullable',
            'age' => 'nullable',
            'year' => 'nullable',
            'gender' => 'nullable'
        ];
    }
        public function messages()
        {
        return [
            "name.required" => "隊員名稱 為必填",
            "name.min" => "隊員名稱 至少需2個字元",
            "tid.required" => "隊伍編號 為必填",
            "postition.required" => "隊員位置 為必填",
            "postition.min" => "隊員位置 至少需2個字元",                    
        ];
    }    
}
