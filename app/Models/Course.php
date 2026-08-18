<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'course_number',
        'day',
        'area_id',
        'training_center_id'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function training_center()
    {
        return $this->belongsTo(TrainingCenter::class);
    }

    public function aprendices()
    {
        return $this->hasMany(Apprentice::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
}