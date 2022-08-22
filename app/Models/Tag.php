<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function getSort(){
        return $this->orderBy('name', 'ASC')->get();
    }

    public function portfolios(){
        return $this->belongsToMany('App\Models\Portfolio');
    }

}
