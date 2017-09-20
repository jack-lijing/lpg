<?php
namespace app\admin\validate;
use think\Validate;
class Bottle extends Validate{

	protected $rule = [
		['bottleId','require|number','瓶体ID必须填写|必须是数字'],
		['proDate','require','生产日期必须填写'],
		['yearDate','require','年检日期必须填写'],
		['nextDate','require','下次年检日期必须填写'],
		['status','number|in:-1,0,1','状态必须数数字|状态范围不合法'],
	];

	/**场景设置**/
	protected $scene = [
		'add' => ['bottleId','proDate','yearDate','nextDate'],//添加
		'status' => ['id','status'],//删除
	];
}