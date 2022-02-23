<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExerciseForm extends FormRequest
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
            'smallcategories' => ['required_without_all:smallcategories.*,randomExercise']
        ];
    }
    public function messages()
    {
        return [
            'smallcategories.*' => '1つ以上チェックしてください'
        ];
    }
}
