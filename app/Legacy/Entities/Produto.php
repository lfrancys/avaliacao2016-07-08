<?php

namespace App\Legacy\Entities;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $primaryKey = 'idProduto';

    protected $fillable = [
        'idCategoria',
        'nomeProduto',
        'precoProduto',
        'descricaoProduto'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->connection = 'sqlite';
    }

    public static $snakeAttributes = false;
    
    public function Categoria(){
        return $this->belongsTo(Categoria::class, 'idCategoria');
    }
}
