<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'developer',
        'mentor',
        'deploy_url',
        'overview',
        'background',
        'function',
        'experience',
        'slide',
        'usage',
        'movie_url',
        'github_url',
        'creation_time'
    ];
}
