<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newkarir extends Model
{
    use HasFactory;
    protected $table = 'newkarirs';
    protected $fillable = [
        'position_id',
        'cv',
        'name',
        'email',
        'phone',
        'address',
        'currentcompany',
        'linkedin',
        'portfolio',
    ];
}
