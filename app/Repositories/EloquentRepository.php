<?php
namespace App\Repositories;

use App\Repositories\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
	/**
	* @var RepositoryInterface|\Illuminate\Database\Eloquent\Model
	*/
	protected $_model;
	/*
	* EloquentRepository constructor.
	*/
	public function __construct()
	{
		$this->setModel();
	}
	/**
	* get model
	* @return string
	*/
	abstract public function getModel();
	/**
	* Set model
	*/
	public function setModel()
	{
		$this->_model = app()->make(
			$this->getModel()
		);
	}
	/**
	* make
	* @param array $with
	* @return mixed
	*/
	public function make( array $with = array() )
	{
		$result = $this->_model->with($with);
		return $result;
	}
	/*
	* Get All
	* @return \Illuminate\Database\Eloquent\Collection|static[]
	*/
	public function getAll( array $with = array() )
	{
		return $this->make($with)->get();
	}
	/**
	* Get one
	* @param $id
	* @return mixed
	*/
	public function find($id)
	{
		$result = $this->_model->find($id);
		return $result;
	}
	/**
	* Create
	* @param array $attributes
	* @return mixed
	*/
	public function create(array $attributes)
	{
		return $this->_model->create($attributes);
	}
	/**
	* Update
	* @param $id
	* @param array $attributes
	* @return bool|mixed
	*/
	public function update($id, array $attributes)
	{

		$result = $this->find($id);
		if($result) {
			$result->update($attributes);
			return $result;
		}
		return false;
	}
	/**
	* Delete
	*
	* @param $id
	* @return bool
	*/
	public function delete($id)
	{
		$result = $this->find($id);
		if($result) {
			$result->delete();
			return true;
		}
		return false;
	}
	/**
    * pagination
    * @param $limit
    * @return mixed
	*/
	public function paginate($limit = null)
	{
      	$result =  $this->_model->paginate($limit);
      	return $result;
	}

	/**
    * Eager Loading Pagination
    * @param $limit
    * @return mixed
	*/
	public function pagination($limit = null, array $with = array())
	{
      	$result =  $this->make($with)->paginate($limit);
      	return $result;
	}
}