<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'pengurus';
    protected $fillable = ['departemen_id', 'nama', 'jabatan', 'foto'];

    public function departemen()
    {
        return $this->belongsTo(Departemen::class);
    }
}
