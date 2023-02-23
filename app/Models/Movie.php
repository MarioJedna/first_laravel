<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function movieType()
    {
        return $this->belongsTo(MovieType::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function people()
    {
        return $this->belongsToMany(Person::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
