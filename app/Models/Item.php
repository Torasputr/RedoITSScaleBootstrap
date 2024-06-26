<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public function brand() {
        return $this->belongsTo(Brand::class);
    }
    public function features() {
        return $this->belongsToMany(Feature::class);
    }
}
