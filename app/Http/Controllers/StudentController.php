<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){

        $student = Student::get();
        return view('student', ['studentList' => $student]);
    }

    public function show($id){
        $student = Student::
            with(['class.homeroomTeacher', 'extracurriculars'])
            ->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }

    public function create(){
        $class = ClassRoom::select('id', 'name')->get();
        $extracurricular = Extracurricular::select('id', 'name')->get();
        return view('student-add', ['class' => $class, 'extracurricular' => $extracurricular]);
    }

    public function store(Request $request){
        // $student = new Student;
        // $student -> name = $request -> name;
        // $student -> gender = $request -> gender;
        // $student -> nis = $request -> nis;
        // $student -> class_id = $request -> class_id;
        // $student->save();

        $student = Student::create($request->all());
        return redirect('/students');
    }
}
