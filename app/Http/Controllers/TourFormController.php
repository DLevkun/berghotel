<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourFormModel;
use App\Models\Tours;
use Illuminate\Support\Facades\Validator;

class TourFormController extends Controller {
    public function store(Request $request, $id) {
        $rules = [
            'name' => 'required|min:3|max:30',
            'surname' => 'required|min:2|max:30',
            'phone' => 'required|regex:/^(\+38)?0\d{9}$/',
            'mail' => 'required|email',
            'days' => 'required',
            'date' => 'required|date|after:tomorrow'
        ];

        $messages= [
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
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails()) {
            return redirect()->route('after-tourform', ['id' => $id])
                        ->withErrors($validator)->withInput($request->all());
        }

        $tour = new TourFormModel();
        $tour->name = $request->input('name');
        $tour->surname = $request->input('surname');
        $tour->mail = $request->input('mail');
        $tour->phone = $request->input('phone');
        $tour->days = $request->get('days');
        $tour->date = $request->input('date');
        if ($request->input('child')==null) {
            $tour->child = 0;
        } else $tour->child = 1;

        $tour->tour_id = $id;

        $tour->save();
        $tourinfo = Tours::find($id);
        
        return view('aftertourbooking', ['tour'=>$tour, 'info'=>$tourinfo]);
    }

    
   
}
