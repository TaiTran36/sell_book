<?php
namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

class CommonRepository{
    protected $model;
    function __construct(Model $model)
    {
        $this->model = $model;
    }

}
