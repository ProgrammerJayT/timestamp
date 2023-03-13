<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    protected $primaryKey = 'account_id';
    protected $guarded = [];
    use HasFactory;

    public function student()
    {
        return $this->hasOne(Student::class, 'account_id');
    }

    public function lecturer()
    {
        return $this->hasOne(Lecturer::class, 'account_id');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'account_id');
    }
}