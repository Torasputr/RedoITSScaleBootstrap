<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function subcategory() {
        return $this->belongsToMany(Subcategory::class, 'category_subcategory_item');
    }
}
