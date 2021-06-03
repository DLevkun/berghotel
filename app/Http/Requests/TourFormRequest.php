<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourFormRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|min:3|max:30',
            'surname' => 'required|min:2|max:30',
            'phone' => 'required|regex:/^(\+38)?0\d{9}$/',
            'mail' => 'required|email',
            'days' => 'required',
            'date' => 'required|date|after:tomorrow'
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
            'days.required' => "Будь ласка, виберіть кількість днів.",
            'date.required' => "Будь ласка, виберіть бажану дату.",
            'date.after:tomorrow' => "Ви вибрали неможливу дату."
        ];
    }
    public function store() {
        return redirect()->route('aftertourform')->withInput();
    }
}
