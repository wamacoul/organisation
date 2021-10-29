<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnterpriseRequest;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    public function create(){
        return view('enterprise.create');
    }
    public function store(EnterpriseRequest $request){
        dd($request);
    }
}
