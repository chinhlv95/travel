<?php

namespace App\Repositories\Tour;

interface TourRepositoryInterface
{
	/**
	* get tour
	* @param $name
	* @param $limit
	* @param array $with
	* @return mixed
	*/
	public function FilterTourname($name= "", $limit = null, array $with = array());


	/**
	* InsertGetID
	* @return mixed
	*/
	public function getInsertID( array $attributes);

	/**
    *  Filter by Category
    * @param integer $id
    * @param $limit
    * @return mixed
    */
	public function showAllTourCate( $id, $limit );

	/**
    *  Filter by Province
    * @param integer $id
    * @param $limit
    * @return mixed
    */
	public function showAllTourProvince( $id, $limit );

	/**
    *  Filter by Destination
    * @param integer $id
    * @param $limit
    * @return mixed
    */
	public function showAllTourDestination( $id, $limit );

     /**
     * display tour for categories
     * @param integer $id
     * @param $limit
     * @return mixed
     */
	public function showTourCate($id,$limit);
	/**
    *find tour
    *@param  integer $id;
    *@return mixed
	*/
	public function  findTour($id);
	/**
	*Tour relationship
	*@param integer $destination_id
	*@param integer $id
	*/
	public function relationTour($destination_id,$id);

	/**
	*Tour sale
	*@return mixed
	*/
	public function saleTour();

	/**
	*image Tour
	*@param integer $id
	*@return mixed
	*/
	public function imageTour($id);


	



}


