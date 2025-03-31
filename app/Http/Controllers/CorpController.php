<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corp;

class CorpController extends Controller
{
    public function index() {
        return view('form-corp');
        }

        public function store(Request $request){
        $corp = new Corp();
        $corp->Cod_ce=$request->Cod_ce;
        $corp->Denom_ce=$request->Denom_ce;
    
        $corp->save();
        return $corp;
}
}

