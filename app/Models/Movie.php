<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'release_date', 'duration', 'rating', 'genre_id', 'poster', 'trailer_url'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($movie) {
            $movie->slug = Str::slug($movie->title);
        });
        static::updating(function ($movie) {
            $movie->slug = Str::slug($movie->title);
        });
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id');
    }

    public function casts()
    {
        return $this->hasMany(MovieCast::class);
    }

    public function images()
    {
        return $this->hasMany(MovieImage::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}

