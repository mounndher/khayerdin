<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'parent_id','home','status'];

    // Define a relationship for subcategories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Define a relationship for the parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
