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
    public function rules()
    {
        return [
            'team' => 'required|string|min:2|max:100',
            'year' => 'required',
            'divison' => 'required|string|min:2|max:100',
            'rank' => 'nullable',
            'rate'=> 'nullable',
            'pastrate'=> 'nullable',
            'games'=> 'nullable',
            'founded'=> 'required'

        ];
    }

    public function messages()
    {
        return [
            "team.required" => "戰隊名稱 為必填",
            "team.min" => "戰隊名稱 至少需2個字元",
            "year.required" => "賽區 為必填",
            "deivison.required" => "賽區 為必填",
            "deivison.min" => " 至少需2個字元",
            "founded.required" => "成立日期 為必填",

        ];
    }
}