<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barrack;

class BarrackController extends Controller
{
    public function index() {
        return view('form-barrack');
        }

        public function store(Request $request){
        $barrack = new Barrack();
        $barrack->Nom_c=$request->Nom_c;
        $barrack->Ubic_c=$request->Ubic_c;
    
        $barrack->save();
        return $barrack;
}

}

