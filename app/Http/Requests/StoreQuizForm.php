<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuizForm extends FormRequest
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

        $defaultRules = [
            'exam-subjects' => ['required'],
            'subjectField' => ['required'],
            'problem-statement' => ['required', 'max:100'],
            'choices' => ['required_without_all:choice1,choice2,choice3,choice4'],
            'answers' => ['required_without_all:answers.0,answers.1,answers.2,answers.3'],
        ];

        return $defaultRules;
    }
    public function messages()
    {
        return [
            'choices.required_without_all' => '選択肢は1つ以上入力してください',
            'answers.required_without_all' => '選択肢は1つ以上選択してください'
        ];
    }
    public function attributes()
    {
        return [
            'exam-subjects' => '試験科目',
            'subjectField' => '分野',
            'problem-statement' => '問題文'
        ];
    }
}
