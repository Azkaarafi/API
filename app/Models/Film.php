<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'synopsis',
        'images',
        'status',
        'total_episodes',
        'release_date',
    ];

    protected $casts = [
        'images' => 'array', // agar JSON otomatis jadi array
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
