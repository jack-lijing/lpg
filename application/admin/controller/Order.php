<?php
namespace app\admin\controller;
use think\Controller;

class Order extends Controller
{
	// 订单列表
	public function index(){
		return $this->fetch();
	}

	// 删除的订单
	public function delorder(){
		return $this->fetch();
	}
}