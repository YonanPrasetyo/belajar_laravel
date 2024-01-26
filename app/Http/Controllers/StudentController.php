<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\DB;
use App\Models\StudentExtracurricular;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentEditRequest;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    public function index(){

        $student = Student::paginate(25);
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

    public function store(StudentCreateRequest $request){
        $student = Student::create($request->all());

        if($student){
            Session::flash('status', 'succes');
            Session::flash('message', 'add new student succes!');
        }

        return redirect('/students');
    }

    public function edit(Request $request, $id){
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student -> class_id)->get(['id', 'name']);
        return view('student-edit', ['student' => $student, 'class' => $class]);
    }

    public function update(StudentEditRequest $request, $id){
        $student = Student::findOrFail($id);

        $student -> update($request -> all());

        if($student){
            Session::flash('status', 'succes');
            Session::flash('message', 'edit data student succes!');
        }

        return redirect('/students');
    }

    public function delete($id){
        $student = Student::findOrFail($id);
        return view('student-delete', ['student' => $student]);
    }

    public function destroy($id){
        $deletedStudent = Student::findOrFail($id);
        $deletedStudent -> delete();

        if($deletedStudent){
            Session::flash('status', 'succes');
            Session::flash('message', 'delete data student succes!');
        }

        return redirect('/students');
    }

    public function deleted(){
        $deletedStudent = Student::onlyTrashed()->get();

        return view('student-deleted-list', ['student' => $deletedStudent]);
    }

    public function restore($id){
        $deletedStudent = Student::withTrashed()->where('id', $id)->restore();

        if($deletedStudent){
            Session::flash('status', 'succes');
            Session::flash('message', 'restore data student succes!');
        }
        return redirect('/students');
    }
}
