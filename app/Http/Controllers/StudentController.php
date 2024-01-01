<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){

        // $student = Student::all();
        // return view('student', ['studentList' => $student]);

        $nilai = [9,6,3,7,3,7,5,2,7,4,8,2,6,6,3,8,10];

        //php biasa
        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $nilaiRataRata = $totalNilai / $countNilai;

        // collection
        // $nilaiRataRata = collect($nilai)->avg();

        // dd($nilaiRataRata);
        // --------------------------------------------------------------

        // --- contains --- cek apakah sebuah array memiliki sesuatu
        // $contains = collect($nilai)->contains(function($value){
        //     return $value < 2;
        // });

        // dd($contains);

        // --- diff ---
        $restaurantA = ["burger", "siomay", "pizza", "spaghetti", "makaroni", "martabak", "bakso"];
        $restaurantB = ["pizza", "fried chicken", "martabak", "sayur asem", "pecel lele", "bakso"];

        // $menuRestoA = collect($restaurantA)->diff($restaurantB); // yang ada di A tapi tidak ada di B
        // $menuRestoB = collect($restaurantB)->diff($restaurantA); // yang ada di B tapi tidak ada di A

        // dd($menuRestoA, $menuRestoB);

        // --- filter --- menyaring data
        // $filter = collect($nilai)->filter(function($value){
        //     return $value > 7;
        // })->all();

        // dd($filter);

        // --- pluck --- mengambil data tertentu
        $biodata = [
            ['nama' => 'yonan', 'umur' => 19],
            ['nama' => 'alfito', 'umur' => 21],
            ['nama' => 'ego', 'umur' => 18],
            ['nama' => 'eval', 'umur' => 18],
        ];

        // $pluck = collect($biodata)->pluck('nama');

        // dd($pluck);

        // --- map ---
        $map = collect($nilai)->map(function ($value){
            return $value * 2;
            // looping
        })->all();

        dd($nilai, $map);
    }
}
