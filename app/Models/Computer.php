<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'number',
        'brand'
    ];

    public function apprentice()
    {
        return $this->hasOne(Apprentice::class);
    }
}