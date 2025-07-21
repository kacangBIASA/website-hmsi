<?php

// app/Models/Berita.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'image',
        'published_at',
    ];
    protected $casts = ['published_at' => 'datetime'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
