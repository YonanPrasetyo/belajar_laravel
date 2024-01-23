<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;


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
}
