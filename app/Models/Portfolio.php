<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'deploy_url',
        'overview',
        'background',
        'function',
        'experience',
        'slide',
        'usage',
        'movie_url',
        'github_url',
    ];
}
