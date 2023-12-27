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
            'year' => 'required|numeric|min:4|max:4',
            'divison' => 'required|string|min:2|max:100',
            'rank' => 'nullable',
            'rate' => 'nullable',
            'pastrate' => 'nullable',
            'games' => 'nullable',
            'founded' => 'required|numeric|min:2|max:100'
        ];
    }
    public function messages()
    {
        return [
            "team.required" => "隊伍名稱 為必填",
            "team.min" => "隊伍名稱 至少需2個字元",
            "year.required" => "年份 為必填",
            "year.min" => "年份 至少需4個字元",
            "divison.required" => "賽區 為必填",
            "divison.min" => "賽區 至少需2個字元",
            "founded.required" => "成立日期 為必填",
            "founded.min" => "成立日期 至少需2個字元",
        ];
    }
}

