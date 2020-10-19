<?php 

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

abstract class EloquentRepository implements RepositoryInterface
{
	/**
     * @var Model
     */
    protected $model;

    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * Get model.
     * @return string
     */
    abstract public function getModel();

    /**
     * Set model.
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Get all.
     *
     * @return Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->model->find($id);
        if ($result) {
            $this->model = $result;
        }
        return $result;
    }

    /**
     * Get one
     * @param $id
     * @return mixed or false
     */
    public function findOrFail($id)
    {
        $result = $this->model->findOrFail($id);
        if ($result) {
            $this->model = $result;
        }
        return $result;
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * Update
     * @param $model
     * @param array $attributes
     * @return bool|mixed
     */
    public function update($model, array $attributes)
    {
        $result = $this->cast($model);
        if ($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    /**
     * Delete
     *
     * @param $model
     * @return bool
     * @throws \Exception
     */
    public function delete($model)
    {
        $result = $this->cast($model);
        if ($result) {
            $result->delete();
            return true;
        }
        return false;
    }


}

 ?>