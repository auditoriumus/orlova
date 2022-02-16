<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'courses';

    protected $hidden = [
        'id'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function usersCourses()
    {
        return $this->hasMany(UsersCourse::class);
    }

}
