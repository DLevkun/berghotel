<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuiteFormModel;
use App\Models\Rooms;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


class SuiteFormController extends Controller {
    public function store(Request $request, $id) {
    $rules = [
        'name' => 'required|min:3|max:30',
            'surname' => 'required|min:2|max:30',
            'phone' => 'required|min:3|max:30',
            'mail' => 'required|email',
            'date1' => 'required|date|after:today',
            'date2' => 'required|date|after:tomorrow'
    ];

    $messages = [
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
            'date1.after' => "Ви обрали неможливу дату заїзду.",
            'date2.required' => "Будь ласка, виберіть бажану дату виїзду.",
            'date2.after' => "Ви вибрали неможливу дату виїзду."
    ];

    $date1 = Carbon::parse($request->input('date1'));
    $date2 = Carbon::parse($request->input('date2'));
    if($date1 > $date2){
        $checkDates = 1;
    }else{
        $checkDates = 0;
    }

    $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails() || $checkDates ) {
            return redirect()->route('after-suiteform', ['id' => $id, 'checkDates' => $checkDates])
                        ->withErrors($validator)->withInput($request->all());
        }
    
        $suite = new SuiteFormModel();
        $suite->name = $request->input('name');
        $suite->surname = $request->input('surname');
        $suite->mail = $request->input('mail');
        $suite->phone = $request->input('phone');
        $suite->date1 = $request->input('date1');
        $suite->date2 = $request->input('date2');
        if ($request->input('sport')==null) {
            $suite->sport = 0;
        } else $suite->sport = 1;
        if ($request->input('food')==null) {
            $suite->food = 0;
        } else $suite->food = 1;
        if ($request->input('spa')==null) {
            $suite->spa = 0;
        } else $suite->spa = 1;
        if ($request->input('pool')==null) {
            $suite->pool = 0;
        } else $suite->pool = 1;

        $suite->suite_id = $id;

        $suite->save();
        $roominfo = Rooms::find($id); 

        return view('afterroombooking', ['suite'=>$suite, 'roominfo'=>$roominfo]);
     
    }
}
