<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function status($status){
	if($status == 1){
		$str = "<span class='label label-success radius'>正常</span>";
	}else if($status == 0){
		$str = "<span class='label label-danger radius'>待审</span>";
	}else{
		$str = "<span class='label label-danger radius'>删除</span>";
	}
	return $str;
}
// 管理员状态修改样式
// function statusa($status){
// 	if($status == 1){
// 		$str = "<span class='label label-success radius'>已启用</span>";
// 	}else if($status == 0){
// 		$str = "<span class='label label-danger radius'>已禁用</span>";
// 	}else{
// 		$str = "<span class='label label-danger radius'>删除</span>";
// 	}
// 	return $str;
// }
// /**
//   * int $type 0 get 1 post 
//   * 获取url的内容
//   */

// function doCurl($url, $type=0, $data=[]){
// 	// 初始化
// 	$ch = curl_init();
// 	// 设置项
// 	curl_setopt($ch, CURLOPT_URL, $url);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($ch, CURLOPT_HEADER, 0);//不输出header头
// 	if($type == 1){
// 		curl_setopt($ch, CURLOPT_POST, 1);
// 		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// 	}

// 	// 执行并获取内容
// 	$output = curl_exec($ch);
// 	// 释放句柄
// 	curl_close($ch);
// 	return $output;
// }

// // 商户入住申请文案
// function bisRegister($status){
// 	if($status == 1){
// 		$str = "入住申请成功";
// 	}else if($status == 0){
// 		$str = "待审核，审核后平台方会发送邮件通知您，请关注邮件";
// 	}else if($status == 2){
// 		$str = "非常抱歉，您提交的材料不符合条件，请重新填写";
// 	}else{
// 		$str = "该申请已被删除";
// 	}
// 	return $str;
// }

// #分页样式
// function pagination($obj){
// 	if(!$obj){
// 		return '';
// 	}
// 	// 获取url参数
// 	$params = request()->param();
// 	// 获取url后面参数的方法，用于和底部分页数据实时更新
// 	$params = request()->param();
// 	return '<div class="cl pd-5 bg-1 bk-gray mt-20">'.$obj->appends($params)->render().'</div>';
// }
// // 在商户入住申请列表查看功能页面时获取二级城市
// function getSeCityName($path){
// 	if(empty($path)){
// 		return '';
// 	}
// 	if(preg_match('/./', $path)){
// 		$cityPath = explode(',',$path);
// 		$cityId = $cityPath[0];
//  	}else{
//  		$cityId = $path;
//   	}

//   	$city = model('City')->get($cityId);
//   	return $city->name;
// }
// // 获取门店信息	
// function countLocation($ids){
// 	if(!$ids){
// 		return 1;
// 	}

// 	if(preg_match('/,/', $ids)){
// 		$arr = explode(',', $ids);
// 		// 返回总数
// 		return count($arr);
// 	}
// }

// // 设置订单号
// function setOrderSn(){
// 	list($t1, $t2) = explode(' ', microtime());
// 	// 拼接订单号
// 	$t3 = explode('.', $t1*10000);
// 	return $t2.$t3[0].(rand(10000, 99999));
// }