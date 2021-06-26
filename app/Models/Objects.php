<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'mota',
        'sochapter',
        'images',
        'author',
        'show',
        'type_id',
        
    ];
    
}
