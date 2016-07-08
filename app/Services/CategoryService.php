<?php

namespace App\Services;

use App\Entities\Category;
use App\Services\Padrao\ServiceAbstract;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: tsousa
 * Date: 08/07/2016
 * Time: 10:46
 */
class CategoryService extends ServiceAbstract
{
    function makeEntity():Model
    {
        $this->entity = app(Category::class);
    }

}