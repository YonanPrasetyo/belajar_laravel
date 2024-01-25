<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentExtracurricular extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'student_extracurricular';
    public $timestamps = false;

    protected $fillable = [
        'student_id',   'extracurricular_id'
    ];
}
