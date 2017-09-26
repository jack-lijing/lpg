<?php
namespace app\admin\controller;
use think\Controller;

class warning extends Controller{
	private $obj;
	// 初始化化方法实例化数据库，一次实例多次调用，方便哈
	public function _initialize(){
		$this->obj = model('Warning');
	}
	// 定位到首页
	public function index(){
		$warnBottles = $this->obj->getAllWarnBottles();
		// var_dump($warnBottles);
		return $this->fetch('',[
			'warnBottles' => $warnBottles,
		]);
	}
}
