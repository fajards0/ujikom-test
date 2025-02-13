<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($genre) {
            $genre->slug = Str::slug($genre->name);
        });

        static::updating(function ($genre) {
            $genre->slug = Str::slug($genre->name);
        });
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}

