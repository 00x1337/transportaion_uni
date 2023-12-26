<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class req extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_driver',
        'user_id'
    ];
}
