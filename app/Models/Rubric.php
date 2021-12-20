<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function tree()
    {
        $allCategories = Rubric::get();

        $rootCategories = $allCategories->where('parent_id', 0);

        self::formatTree($rootCategories, $allCategories);

        return $rootCategories;
    }

    private static function formatTree($categories, $allCategories)
    {
        foreach ($categories as $category) {
            $category->children = $allCategories->where('parent_id', $category->id)->values();

            if ($category->children->isNotEmpty()) {
                self::formatTree($category->children, $allCategories);
            }
        }
    }

    public function subrubric(){
        return $this->hasMany(Rubric::class, 'parent_id');
    }
    public function rubrics()
    {
        return $this->belongsToMany(Novelty::class);
    }
}
