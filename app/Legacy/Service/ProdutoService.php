<?php

namespace App\Services;

use App\Legacy\Entities\Produto;
use App\Services\Padrao\ServiceAbstract;

/**
 * Created by PhpStorm.
 * User: tsousa
 * Date: 08/07/2016
 * Time: 10:46
 */
class ProductService extends ServiceAbstract
{
    function makeEntity():Model
    {
        $this->entity = app(Produto::class);
    }


}