<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    protected $table = 'departemen';
    protected $fillable = ['nama', 'penjelasan', 'tugas'];

    public function pengurus()
    {
        return $this->hasMany(Pengurus::class);
    }
}
