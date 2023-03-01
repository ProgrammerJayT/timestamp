<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    protected $guarded = [];
    use HasFactory;

    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'student_id');
    }
}
