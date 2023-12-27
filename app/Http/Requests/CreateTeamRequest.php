<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'team' => 'required|string|min:2|max:100',
            'year' => 'required|numeric',
            'divison' => 'required|string|min:2|max:100',
            'rank' => 'nullable',
            'rate' => 'nullable',
            'pastrate' => 'nullable',
            'games' => 'nullable',
            'founded' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            "team.required" => "隊伍名稱 為必填",
            "team.min" => "隊伍名稱 至少需2個字元",
            "year.required" => "年份 為必填",          
            "divison.required" => "賽區 為必填",
            "divison.min" => "賽區 至少需2個字元",
            "founded.required" => "成立日期 為必填",
        ];
    }
}

