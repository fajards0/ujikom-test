<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieImage extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'image_url'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}

