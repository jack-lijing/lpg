<?php
namespace app\common\model;

use think\Model;

class User extends Model
{	
	public function add($data = []){
		// 如果提交的数据不是数组
		if(!is_array($data)){
			exception('输入的数据不是数组');
		}

		return $this->data($data)->allowField(true)
			->save();
	}
	// // 根据用户名获取用户信息
	// public function getUserByusername($username){
	// 	if(!$username){
	// 		exception('用户名不合法');
	// 	}

	// 	$data = ['username' => $username];
	// 	return $this->where($data)->find();
	// }
}