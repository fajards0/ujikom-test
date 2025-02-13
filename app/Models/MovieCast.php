<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCast extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'name', 'role'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}

