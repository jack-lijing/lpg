<?php
namespace app\api\controller;
use think\Controller;
use think\Request;
use think\File;

class Image extends Controller
{	
	// 图片上传
	public function upload(){
		$file = Request::instance()->file('file');

		// 给定一个目录
		$info = $file->move('upload');
		// print_r($info);
		if($info && $info->getPathname()){
			// 返回给前端显示给用户的路径
			return show(1, 'success', '/o2o/public/'.$info->getPathname());
		}
		return show(0, 'upload error');
	
	}
}