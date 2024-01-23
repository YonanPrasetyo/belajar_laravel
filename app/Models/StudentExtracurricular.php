<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentExtracurricular extends Model
{
    use HasFactory;

    protected $table = 'student_extracurricular';
    public $timestamps = false;

    protected $fillable = [
        'student_id',   'extracurricular_id'
    ];
}