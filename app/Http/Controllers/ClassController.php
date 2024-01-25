<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use App\Http\Requests\ClassEditRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ClassCreateRequest;


class ClassController extends Controller
{
    public function index(){
        // cara request ke database
        // Lazy Load
        // $class = ClassRoom::all();
        // --------------------
        // Eager Load (recomended)
        $class = ClassRoom::get();

        // pakai liblary clockwork
        return view('classroom', ['classList' => $class]);
    }

    public function show($id){
        $class = ClassRoom::
            with(['students', 'homeroomTeacher'])
            ->findOrFail($id);
        return view('classroom-detail', ['class' => $class]);
    }

    public function create(){
        $teacher = Teacher::select('id', 'name')->whereNotIn('id', ClassRoom::select('teacher_id'))->get();
        return view('classroom-add', ['teacher' => $teacher]);
    }

    public function store(ClassCreateRequest $request){
        $classroom = ClassRoom::create($request->all());

        if($classroom){
            Session::flash('status', 'succes');
            Session::flash('message', 'add new class succes!');
        }

        return redirect('/class');
    }

    public function edit(Request $request, $id){
        $class = ClassRoom::with('homeroomTeacher')->findOrFail($id);
        $teacher = Teacher::whereNotIn('id', ClassRoom::select('teacher_id'))->get(['id', 'name']);
        return view('classroom-edit', ['class' => $class, 'teacher' => $teacher]);
    }

    public function update(ClassEditRequest $request, $id){
        $class = ClassRoom::findOrFail($id);

        $class -> update($request -> all());

        if($class){
            Session::flash('status', 'succes');
            Session::flash('message', 'edit data class succes!');
        }

        return redirect('/class');
    }

    public function delete($id){
        $class = ClassRoom::findOrFail($id);
        return view('classroom-delete', ['class' => $class]);
    }

    public function destroy($id){
        $deletedClass = ClassRoom::findOrFail($id);

        if ($deletedClass->students()->count() > 0) {
            Session::flash('status', 'succes');
            Session::flash('message', 'hapus data class GAGAL!');
            return redirect('/class');
        }
        else {
            $deletedClass -> delete();

        if($deletedClass){
            Session::flash('status', 'fail');
            Session::flash('message', 'hapus data class succes!');
        }
        return redirect('/class');
        }
    }

    public function deleted(){
        $deletedClass = ClassRoom::onlyTrashed()->get();

        return view('classroom-deleted-list', ['class' => $deletedClass]);
    }

    public function restore($id){
        $deletedClass = ClassRoom::withTrashed()->where('id', $id)->restore();

        if($deletedClass){
            Session::flash('status', 'succes');
            Session::flash('message', 'restore data class succes!');
        }
        return redirect('/class');
    }
}
