<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\ClassRoom;
use Illuminate\Http\Request;


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

    public function store(Request $request){
        $classroom = ClassRoom::create($request->all());
        return redirect('/class');
    }
}
