<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'email' => 'required|unique:users,email,'.$this->id,
            'verification_code' => 'required|unique:users,verification_code,'.$this->id,
            'quests' => 'required:users,quests,'.$this->id,
            'quest_point' => 'required:users,quest_point,'.$this->id,

        ];
    }
}
