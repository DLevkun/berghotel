<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuiteFormRequest extends FormRequest
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
    public function rules(){
        return [
            'name' => 'required|min:3|max:30',
            'surname' => 'required|min:2|max:30',
            'phone' => 'required|min:3|max:30',
            'mail' => 'required|email',
            'date1' => 'required|date|after:today',
            'date2' => 'required|date|after:tomorrow'
        ];
    }

    public function messages() {
        return [
            'name.required' => "Будь ласка, введіть ім'я.",
            'name.min' => "Ім'я занадто коротке.",
            'name.max' => "Ім'я занадто довге.",
            'surname.required' => "Будь ласка, введіть прізвище.",
            'surname.min' => "Прізвище занадто коротке.",
            'surname.max' => "Прізвище занадто довге.",
            'phone.required' => "Будь ласка, введіть телефон.",
            'phone.regex' => "Телефон введено невірно.",
            'mail.required' => "Будь ласка, введіть eлектронну пошту.",
            'mail.email' => "Електронну пошту введено невірно.",
            'date1.required' => "Будь ласка, виберіть бажану дату заїзду.",
            'date1.after:today' => "Ви обрали неможливу дату заїзду.",
            'date2.required' => "Будь ласка, виберіть бажану дату виїзду.",
            'date2.after:tomorrow' => "Ви вибрали неможливу дату виїзду.",
        ];
    }
}
