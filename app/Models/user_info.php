<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'document_1' ,
        'document_2' ,
        'document_3' ,
        'document_4'
        ];
}
