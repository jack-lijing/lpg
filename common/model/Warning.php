<?php
namespace app\common\model;

use think\Model;

class Warning extends Model{
	public function getAllWarnBottles(){
		$order = [
			'id' => 'asc',
		];

		return $this->order($order)
				    ->select();
	}
}