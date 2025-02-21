<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'bio',
        'skills',
        'photo',
        'email',
        'github',
        'linkedin',
        'phone'
    ];

    protected $casts = [
        'skills' => 'array'
    ];
}
