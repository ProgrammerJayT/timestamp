<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    protected $guarded = [];
    use HasFactory;

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'student_id');
    }

    public function modules()
    {
        return $this->hasMany(Module::class, 'student_id');
    }
}