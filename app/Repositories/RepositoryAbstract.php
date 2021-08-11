<?php

namespace App\Repositories;
use Exception;

use App\Repositories\Contracts\RepositoryInterface;

abstract class RepositoryAbstract implements RepositoryInterface
{
  
    protected $entity;

    public function __construct()
    {
        $this->entity = $this->resolveEntity();
   
    }

    abstract protected function entity();

   
    protected function resolveEntity()
    {
        return app()->make($this->entity());
    }


   public function all()
    {
        return $this->entity->get();
    }
   

}