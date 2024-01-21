<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    public function index(){
        $extracurricular = Extracurricular::with('students')->get();
        return view('extracurricular', ['extracurricularList' => $extracurricular]);
    }
}
