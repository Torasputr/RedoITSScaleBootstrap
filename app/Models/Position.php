<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    public function responsibilites() {
        return $this->belongsToMany(Responsibility::class);
    }
    public function requirements() {
        return $this->belongsToMany(Requirement::class);
    }
    public function specialrequirements() {
        return $this->belongsToMany(Specialrequirement::class);
    }
}
