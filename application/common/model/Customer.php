<?php
namespace app\common\model;

use think\Model;

class Customer extends Model
{
	// 获取所有客户数据
	public function getAllCustomers(){
		$data = [
			'status' => 0,
		];

		$order = [
			'id' => 'desc',
		];

		return $this->where($data)
					->order($order)			        
			        ->paginate(10);
	}
	// 添加用户
	public function add($data = []){
		// 如果提交的数据不是数组
		if(!is_array($data)){
			exception('输入的数据不是数组');
		}

		return $this->data($data)->allowField(true)
			->save();
	}
	// g根据id获取用户信息
	public function getCustomers($id){
		$data = [
			'id' => $id,
		];
		return $this->where($data)->find();
	}
	
	// 根据瓶体id获取用户数据
	public function getUserInfo($bottleId){
		$data = [
			'bottleId' => $bottleId,
		];
		return $this->where($data)->find();
	}
}
