<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'featured_image',
        'skill_tags',
        'repo_url',
        'site_url'
    ];

    protected $casts = [
        'skill_tags' => 'array'
    ];


}
