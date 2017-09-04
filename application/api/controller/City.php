<?php
namespace app\api\controller;
use think\Controller;

class City extends Controller
{
	private $obj;
	public function _initialize(){
		$this->obj = model("City");
	}
	// 通过父类id获取城市数据
	public function getCitysByParentId(){
		$id = input('post.id');
		if(!$id){
			$this->error('ID不合法');
		}
		// 通过ID获取二级城市
		$citys = $this->obj->getNormalCitysByParentId($id);
		// 获取到数据以后以规定的格式返回给前端填充模版

		if(!$citys){
			return show(0, 'error');
		}
		// 这里的show方法在api\common.php中
		return show(1, 'success', $citys);
	}
}