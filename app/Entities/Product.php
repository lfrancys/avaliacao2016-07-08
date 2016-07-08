<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'productName',
        'productPrice',
        'productPicture',
        'categoryId',
        'productDescription'
    ];

    public static $snakeAttributes = false;

    public function Category(){
        return $this->belongsTo(Category::class, 'categoryId');
    }
}
