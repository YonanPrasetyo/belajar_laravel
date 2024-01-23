<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    public function index(){
        $extracurricular = Extracurricular::get();
        return view('extracurricular', ['extracurricularList' => $extracurricular]);
    }

    public function show($id){
        $extracurricular = Extracurricular::
            with('students')
            ->findOrFail($id);
        return view('extracurricular-detail', ['extracurricular' => $extracurricular]);
    }
}
