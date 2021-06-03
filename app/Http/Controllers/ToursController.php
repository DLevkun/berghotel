<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;

class ToursController extends Controller {
    public function showAll(){
        $tours = new Tours;
        return view('tourscontainer', ['tours' => $tours->all()]);
    }

    public function getTourInfo($id){
        $tour = Tours::find($id);
        return view('tourinfo', ['tour' => $tour]);
    }

    public function getInfo($id){
        $tour = Tours::find($id);
        return view('aftertourform', ['tour' => $tour]);
    }
}

