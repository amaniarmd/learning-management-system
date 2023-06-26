<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'name',
        'price',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
