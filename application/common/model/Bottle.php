<?php
namespace app\common\model;

use think\Model;

class Bottle extends Model
{
	// protected  $autoWriteTimestamp = true;
	// 获取所有瓶体数据
	public function getAllBottles(){
		$data = [
			'status' => 0,
		];

		$order = [
			'id' => 'asc',
		];

		return $this->where($data)
					->order($order)			        
			        ->paginate(10);
	}
	// 获取所有已删除的瓶体
	public function getAllNoNormalBottles(){
		$data = [
			'status' => -1,
		];

		$order = [
			'id' => 'asc',
		];

		return $this->where($data)
					->order($order)			        
			        ->paginate(8);
	}
	// 添加瓶体
	public function add($data = []){
		// 如果提交的数据不是数组
		if(!is_array($data)){
			exception('输入的数据不是数组');
		}

		return $this->data($data)->allowField(true)
			->save();
	}

	// 获取id对应瓶体信息
	public function getBottles($id){
		$data = [
			'id' => $id,
		];
		return $this->where($data)->find();
	}

	public function getBottleInfo($bottleId){
		$data = [
			'bottleId' => $bottleId,
		];
		return $this->where($data)->find();
	}
}
