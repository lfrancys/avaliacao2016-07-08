<?php

namespace App\Legacy\Entities;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'idCategoria';

    protected $fillable = [
        'nomeCategoria'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->connection = 'sqlite';
    }

    public static $snakeAttributes = false;

}
