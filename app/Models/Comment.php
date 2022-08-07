<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'role',
        'portfolio_id'
    ];

    public function portfolio() {
        return $this->belongsTo('App\Models\Portfolio');
    }
}
