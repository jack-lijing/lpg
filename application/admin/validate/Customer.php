<?php
namespace app\admin\validate;
use think\Validate;
class Customer extends Validate{

	protected $rule = [
		['username','require|max:10','分类名不能为空|分类名不能超过10个字符'],
		['address','require'],  
		['idCard','number'],
		['id','number'],
		['status','number|in:-1,0,1','状态必须数数字|状态范围不合法'],
		['phone','number','电话必须数数字'],
		['bottleId','number'],

	];

	/**场景设置**/
	protected $scene = [
		'add' => ['username','address','idCard', 'phone', 'bottleId'],//添加功能
		'status' => ['id','status']		
	];
}