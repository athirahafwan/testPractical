<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['courseName','courseCode','creditHour'];

    public function students()
    {
        return $this->belongsToMany(Student::class)->withTimestamps();
    }
}

