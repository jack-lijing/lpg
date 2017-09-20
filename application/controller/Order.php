<?php
namespace app\admin\controller;
use think\Controller;

class Order extends Controller
{
	// 订单列表
	public function index(){		
		return $this->fetch();
	}

	public function createOrder(){
		// 获取传递过来的瓶体id
		$bottleId = input('get.bottleId');
		if(!$bottleId){
			$this->error('参数不合法');
		}
		// var_dump($bottleId);
		// 通过瓶体id获取用户信息
		$userInfo = model("Customer")->getUserInfo($bottleId);
		var_dump($userInfo->username);

		// 通过瓶体id获取瓶体信息
		$bottleInfo = model("Bottle")->getBottleInfo($bottleId);
		var_dump($bottleInfo->bottleId);

		$orderSn = setOrderSn();
		var_dump($orderSn);
		// 组装数据
		$data = [
			'bottleId' => $bottleId,
			'username' => $userInfo->username,			
		];
	}
	// 删除的订单
	public function delorder(){
		return $this->fetch();
	}
}