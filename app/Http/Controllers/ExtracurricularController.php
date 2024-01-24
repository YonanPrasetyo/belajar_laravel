<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Session;

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

    public function create(){
        return view('extracurricular-add');
    }

    public function store(Request $request){
        $extracurricular = Extracurricular::create($request-> all());

        if($extracurricular){
            Session::flash('status', 'succes');
            Session::flash('message', 'add new extracurricular succes!');
        }

        return redirect('/extracurricular');
    }

    public function edit(Request $request, $id){
        $extracurricular = Extracurricular::findOrFail($id);
        return view('extracurricular-edit', ['extracurricular' => $extracurricular]);
    }

    public function update(Request $request, $id){
        $extracurricular = Extracurricular::findOrFail($id);

        $extracurricular -> update($request -> all());

        if($extracurricular){
            Session::flash('status', 'succes');
            Session::flash('message', 'edit data extracurricular succes!');
        }

        return redirect('/extracurricular');
    }
}
