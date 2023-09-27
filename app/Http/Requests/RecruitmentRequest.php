<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecruitmentRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'recruitment.dog_name' => 'required|string|max:4000',
            'recruitment.kind_id' => 'required|integer|max:4000',
            'recruitment.dog_gender' => 'required|string|max:4000',
            'recruitment.dog_age' => 'required|integer|max:4000',
            'recruitment.prefecture_id' => 'required|integer|max:4000',
            'recruitment.dog_condition' => 'required|string|max:4000',
            'recruitment.terms' => 'required|string|max:4000',
            'recruitment.fee' => 'required|string|max:4000',
            'recruitment.message' => 'required|string|max:4000',
        ];
    }
}
