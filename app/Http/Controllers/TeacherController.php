<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TeacherEditRequest;
use App\Http\Requests\TeacherCreateRequest;

class TeacherController extends Controller
{
    public function index(){
        $teacher = Teacher::all();
        return view('teacher', ['teacherList' => $teacher]);
    }

    public function show($id){
        $teacher = Teacher::
            with('class.students')
            ->findOrFail($id);
        return view('teacher-detail', ['teacher' => $teacher]);
    }

    public function create(){
        return view('teacher-add');
    }

    public function store(TeacherCreateRequest $request){
        $teacher = Teacher::create($request->all());

        if($teacher){
            Session::flash('status', 'succes');
            Session::flash('message', 'add new teacher succes!');
        }

        return redirect('/teacher');
    }

    public function edit(Request $request, $id){
        $teacher = Teacher::findOrFail($id);
        return view('teacher-edit', ['teacher' => $teacher]);
    }

    public function update(TeacherEditRequest $request, $id){
        $teacher = Teacher::findOrFail($id);

        if($teacher){
            Session::flash('status', 'succes');
            Session::flash('message', 'edit data teacher succes!');
        }

        $teacher -> update($request -> all());
        return redirect('/teacher');
    }

    public function delete($id){
        $teacher = Teacher::findOrFail($id);
        return view('teacher-delete', ['teacher' => $teacher]);
    }

    public function destroy($id){
        $deletedTeacher = Teacher::findOrFail($id);

        if ($deletedTeacher->class()->count() > 0) {
            Session::flash('status', 'succes');
            Session::flash('message', 'hapus data teacher GAGAL!');
            return redirect('/teacher');
        } else {
            $deletedTeacher -> delete();
            if($deletedTeacher){
                Session::flash('status', 'succes');
                Session::flash('message', 'hapus data teacher succes!');
            }
            return redirect('/teacher');
        }
    }

    public function deleted(){
        $deletedTeacher = Teacher::onlyTrashed()->get();

        return view('teacher-deleted-list', ['teacher' => $deletedTeacher]);
    }

    public function restore($id){
        $deletedTeacher = Teacher::withTrashed()->where('id', $id)->restore();

        if($deletedTeacher){
            Session::flash('status', 'succes');
            Session::flash('message', 'restore data teacher succes!');
        }
        return redirect('/teacher');
    }
}
