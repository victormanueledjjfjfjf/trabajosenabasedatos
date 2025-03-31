<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index() {
        return view('form-company');
        }

        public function store(Request $request){
        $company = new Company();
        $company->Num_com=$request->Num_com;
        $company->ActiP_com=$request->ActiP_com;
    
        $company->save();
        return $company;
}   
}

