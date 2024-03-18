<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logindus extends Model
{
    use HasFactory;
    public function sublogindus() {
        return $this->belongsTo(Sublogindus::class);
    }
}
