<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    public function category() {
        return $this->belongsToMany(Category::class, 'category_subcategory_item');
    }
    public function item() {
        return $this->belongsToMany(Item::class, 'category_subcategory_item');
    }
}
