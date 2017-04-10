<?php

namespace App\Repositories;

interface RepositoryInterface
{
	/**
	* Get all
	* @param array $with
	* @return mixed
	*/
	public function getAll(array $with = array());
	/**
	* make
	* @param array $with
	* @return mixed
	*/
	public function make(array $with = array());
	/**
	* Get one
	* @param $id
	* @return mixed
	*/
	public function find($id);
	/**
	* Create
	* @param array $attributes
	* @return mixed
	*/
	public function create(array $attributes);
	/**
	* Update
	* @param $id
	* @param array $attributes
	* @return mixed
	*/
	public function update($id, array $attributes);
	/**
	* Delete
	* @param $id
	* @return mixed
	*/
	public function delete($id);
	/**
	*pagination
	*/ 
	public function paginate($limit = null);

	/**
	* Eager Loading Pagination 
	*/
	public function pagination($limit = null, array $with = array());
	/**sub two date*/
	public function subDate($start,$end);
	/**convert vi to en*/
	public function convert_vi_to_en($str) ;
	public function test();

}