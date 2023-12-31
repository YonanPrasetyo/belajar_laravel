<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // protected $table = 'students'; --gak perlu karena sesuai dengan nama tabel
    // protected $primaryKey = 'student_id'; --gak perlu karena primary key sudah bernama id
    // public $incrementing = false; --gak perlu karena primary key auto increment
    // protected $keyType = 'string'; --gak perlu karena primary keynya tipe integer
    // public $timestamps = false; -- gak perlu karena sudah ada created_at dan updated_at pada tabel

    
}
