<?php

namespace App\Repositories\Tourer;

interface TourerRepositoryInterface
{
  /**
  *get list tourer for order
  *@param integer $order_id
  *@return mixed
  */
  public function getListTourer($order_id);
}