<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['course_number', 'day', 'area_id', 'training_center_id'];

    public function area(){
        return $this->belongsTo(Area::class);
    }

    // Un curso pertenece a un centro de formacion
    public function training_center(){
        return $this->belongsTo(Trainingcenter::class);
    }

    // Un curso tiene muchos aprendices
    public function aprendices(){
        return $this->hasMany(Apprentice::class);
    }

    // Un curso tiene muchos profesores n:m
    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }

}
