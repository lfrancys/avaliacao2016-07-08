<?php

namespace App\Services\Padrao;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: tsousa
 * Date: 08/07/2016
 * Time: 10:46
 */
abstract class ServiceAbstract
{

    protected $db;
    protected $entity;
    abstract public makeEntity():Model;

    /**
     * ServiceAbstract constructor.
     * @param $db
     */
    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
        $this->entity = $this->makeEntity();
    }




}