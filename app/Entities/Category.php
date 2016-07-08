<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';
    public $incrementing = false; 

    protected $fillable = [
        'categoryName'
    ];

    public static $snakeAttributes = false;
}
