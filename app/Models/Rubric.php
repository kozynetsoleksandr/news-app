<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subrubric(){
        return $this->hasMany(Rubric::class, 'parent_id');
    }
    public function rubrics()
    {
        return $this->belongsToMany(Novelty::class);
    }
}
