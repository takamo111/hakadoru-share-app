<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'text' => 'required|max:200',
            'comment_rating' => 'required|max:200',
            
        ];
    }

    public function attributes()
    {
        return [
            'text' => 'コメント',
            'comment_rating' => '星評価',
        ];
    }
}
