<?php

namespace App\Services\Padrao;

use Illuminate\Database\DatabaseManager;


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
    abstract protected function makeEntity();

    /**
     * ServiceAbstract constructor.
     * @param $db
     */
    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
        $this->entity = $this->makeEntity();
    }

    public function create(array $data){

        try{
            $this->db->beginTransaction();

                $this->entity->create($data);

            $this->db->commit();
        }catch (\Exception $e){
            $this->db->rollback();
            throw $e;
        }

    }

    public function update(array $data, $id){
        try{
            $this->db->beginTransaction();
                $returnData = $this->entity->find($id)->update($data);
            $this->db->commit();
            return $returnData;
        }catch (\Exception $e){
            $this->db->rollback();
            throw $e;
        }
    }

    public function destroy($id){
        try{
            $this->db->beginTransaction();

                $this->entity->delete($id);

            $this->db->commit();
        }catch (\Exception $e){
            $this->db->rollback();
            throw $e;
        }
    }

    public function __call($method, $arguments)
    {
        if(method_exists($this, $method)) return call_user_func_array([$this, $method], $arguments);
        return call_user_func_array([$this->entity, $method], $arguments);
    }

}