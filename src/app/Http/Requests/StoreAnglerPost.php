<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnglerPost extends FormRequest
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
            'port_name' => 'required',
            'prefectures_id' => 'not_in: 0',
            'content' => 'required|max: 100'
        ];
    }

    public function messages()
{
    return [
        'required' => 'この項目は必ず入力してください！',
        'not_in' => 'この項目は必ず選択してください！',
        'content.max' => '１００文字以内で入力してください！'
    ];
}
}
