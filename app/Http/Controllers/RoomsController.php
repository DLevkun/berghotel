<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rooms;
use Illuminate\Support\Facades\Validator;

class RoomsController extends Controller
{
    public function showAll(){
        $rooms = new Rooms;
        return view('suitescontainer', ['rooms' => $rooms->all()]);
    }

    public function getRoomInfo($id){
        $room = Rooms::find($id);
        return view('suiteinfo', ['room' => $room]);
    }
	
	public function getInfo($id, $checkDates){
        $room = Rooms::find($id);
        return view('aftersuiteform', ['room' => $room, 'checkDates' => $checkDates]);
    }

    public function searchRoom(Request $req){

        $rules = [
            // 'arrival-date' => 'required|after:today',
            // 'departure-date' => 'required|after:tomorrow',
            'guest_quantity' => 'required|min:1|max:5|integer'
        ];

        $messages = [
                // 'arrival-date.required' => "Оберіть дату заїзду.",
                // 'departure-date.required' => "Оберіть дату виїзду.",
                // 'arrival-date.after' => "Ви обрали неможливу дату заїзду.",
                // 'departure-date.after' => "Ви обрали неможливу дату виїзду.",
                'guest_quantity.required' => "Кількість гостей обов'язкова.",
                'guest_quantity.min' => "Ви ввели неможливу кількість гостей.",
                'guest_quantity.max' => "Ви ввели неможливу кількість гостей.",
                'guest_quantity.integer' => "Неправильний формат вводу. Введіть ціле число."
        ];

        $validator = Validator::make($req->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->route('rooms-container')->withErrors($validator);
        }


        $rooms = DB::table('rooms')->where('guests', $req->input('guest_quantity'))->get();

        return view('suitescontainer', ['rooms' => $rooms]);
    }
}
