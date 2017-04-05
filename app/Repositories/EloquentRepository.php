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
	public function make(array $with = array() )
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

	/**
	*sub two date
    *@param date $start
    *@param date $end
    *@return string
	*/

	public function subDate($start,$end){

                 $datetime1 = strtotime($start);
                $datetime2 = strtotime($end);
                $secs = $datetime2 - $datetime1;
                $days = $secs / 86400;
                if($days>1)
                {
                    return  $days." Ngày".($days-1)." đêm";
                }
                else{
                    return $days." Ngày";
                }
	}
	
  /**
  * convert vi to en
  */
  public function convert_vi_to_en($str) {
  $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
  $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
  $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
  $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
  $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
  $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
  $str = preg_replace("/(đ)/", 'd', $str);
  $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
  $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
  $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
  $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
  $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
  $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
  $str = preg_replace("/(Đ)/", 'D', $str);
  $str = str_replace(" ", "-", str_replace("&*#39;","",$str));
  return $str;
  }
  
}