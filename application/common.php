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
		$str = "<span class='label label-danger radius'>预警</span>";
	}else if($status == 0){
		$str = "<span class='label label-success radius'>正常</span>";
	}
	return $str;
}

// 瓶体类型
function bottleType($bottleType){
	if($bottleType == 1){
		$str = "<span class='label label-danger radius'>智能瓶体</span>";
	}else if($bottleType == 0){
		$str = "<span class='label label-success radius'>普通瓶体</span>";
	}
	return $str;
}

// 设置订单号
function setOrderSn(){
	list($t1, $t2) = explode(' ', microtime());
	// 拼接订单号
	$t3 = explode('.', $t1*10000);
	return $t2.$t3[0].(rand(10000, 99999));
}
