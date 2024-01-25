<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;
use App\Models\StudentExtracurricular;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ExtracurricularEditRequest;
use App\Http\Requests\ExtracurricularCreateRequest;

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

    public function store(ExtracurricularCreateRequest $request){
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

    public function update(ExtracurricularEditRequest $request, $id){
        $extracurricular = Extracurricular::findOrFail($id);

        $extracurricular -> update($request -> all());

        if($extracurricular){
            Session::flash('status', 'succes');
            Session::flash('message', 'edit data extracurricular succes!');
        }

        return redirect('/extracurricular');
    }

    public function delete($id){
        $extracurricular = Extracurricular::findOrFail($id);
        return view('extracurricular-delete', ['extracurricular' => $extracurricular]);
    }

    public function destroy($id){
        $deletedExtracurricular = Extracurricular::findOrFail($id);
        $deletedExtracurricular->delete();

        if($deletedExtracurricular){
            Session::flash('status', 'succes');
            Session::flash('message', 'hapus data extracurricular succes!');
        }
        return redirect('/extracurricular');
    }

    public function deleted(){
        $deletedExtracurricular = Extracurricular::onlyTrashed()->get();

        return view('extracurricular-deleted-list', ['extracurricular' => $deletedExtracurricular]);
    }

    public function restore($id){
        $deletedExtracurricular = Extracurricular::withTrashed()->where('id', $id)->restore();

        if($deletedExtracurricular){
            Session::flash('status', 'succes');
            Session::flash('message', 'restore data extracurricular succes!');
        }
        return redirect('/extracurricular');
    }
}
