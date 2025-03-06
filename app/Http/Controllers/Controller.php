<?php

namespace App\Http\Controllers;
use App\Models\Personel;

class Controller
{
    public function index(){
        $personel = Personel::all();
        return view('index' , compact('personel'));
    }
}
