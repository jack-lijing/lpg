<?php
namespace app\common\model;

use think\Model;

class Customer extends Model
{
	// 获取所有客户数据
	public function getAllCustomers(){
		$order = [
			'id' => 'asc',
		];

		return $this->order($order)			        
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

	public function getCustomers($id){
		$data = [
			'id' => $id,
		];
		return $this->where($data)->find();
	}
}
