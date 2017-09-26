<?php
namespace app\admin\controller;
use think\Controller;

class Bottle extends Controller{
	private $obj;
    public function _initialize(){
        $this->obj = model("Bottle");
    }

	public function index(){
		// 获取所有瓶体数据
		$bottles = $this->obj->getAllBottles();

		// var_dump($bottles);exit;
		return $this->fetch('',[
			'bottles' => $bottles,
		]);
	}

    public function del(){
        // 获取所有删除瓶体数据
        $bottles = $this->obj->getAllNoNormalBottles();

        // var_dump($bottles);exit;
        return $this->fetch('',[
            'bottles' => $bottles,
        ]);
    }
	public function add(){
		return $this->fetch();
	}

    // 编辑瓶体页面
    public function edit($id){
        if(intval($id) < 1){
            $this->error('参数不合法');
        }
        // 获取id对应瓶体信息
        $bottle = $this->obj->getBottles($id);
        // var_dump($bottle);
        $this->assign('bottleInfo', $bottle);
        return $this->fetch();
    }

	// 添加瓶体
    public function save(){
        if(!request()->isPost()){
            $this->error('请求失败');
        }
        $data = input('post.');
        // var_dump($data);exit;
        $validate = validate('Bottle');
        if(!$validate->scene('add')->check($data)){
            $this->error($validate->getError());
        }
        if(!empty($data['id'])){
            return $this->update($data);
        }
        // 数据入库
        $res = $this->obj->add($data);
        if(!$res){
            $this->error('添加失败');
        }else{
            $this->success('添加成功');
        }
    }
    
    // 数据更新
    public function update($data){
        // 更新数据入库
        $result = $this->obj->save($data, ['id' => intval($data['id'])]);
        // 强验证
        if($result){
            $this->success('编辑成功');
        }else{
            $this->error('编辑失败，请稍后编辑');
        }
    }

    // 修改状态（如删除）
    public function status(){
        // print_r(input('get.'));//测试用
        $data = input('get.');
        // print_r($data);
        // 调用validate方法进行数据验证
        $validate = validate('Bottle');
        if(!$validate->scene('status')->check($data)){
            $this->error($validate->getError());
        }

        $res = $this->obj->save(['status'=>$data['status']], ['id'=>$data['id']]);
        if($res){
            $this->success('修改状态成功');
        }else{
            $this->error('修改状态失败');
        }
    }
}
