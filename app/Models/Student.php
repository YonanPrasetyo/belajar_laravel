<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    // protected $table = 'students'; --gak perlu karena sesuai dengan nama tabel
    // protected $primaryKey = 'student_id'; --gak perlu karena primary key sudah bernama id
    // public $incrementing = false; --gak perlu karena primary key auto increment
    // protected $keyType = 'string'; --gak perlu karena primary keynya tipe integer
    // public $timestamps = false; -- gak perlu karena sudah ada created_at dan updated_at pada tabel

    protected $fillable = [
        'name', 'gender', 'nis', 'class_id', 'image'
    ];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function extracurriculars()
    {
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id', 'extracurricular_id');
    }
}
