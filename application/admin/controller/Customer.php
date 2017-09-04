<?php
namespace app\admin\controller;
use think\Controller;

class Customer extends Controller
{
    private $obj;
    public function _initialize(){
        $this->obj = model("Customer");
    }
    //定位到首页
    public function index()
    {	
        // 获取所有客户
        $customers = $this->obj->getAllCustomers();
        // var_dump($customers);
    	// 对应customer模块下面的index.html文件
        return $this->fetch('',[
                'customers'=>$customers,
            ]);
    }

    // 渲染页面
    public function add(){
        return $this->fetch();
    }

    // 添加客户
    public function save(){
        if(!request()->isPost()){
            $this->error('请求失败');
        }
        $data = input('post.');
        // var_dump($data);exit;
        $validate = validate('Customer');
        if(!$validate->scene('add')->check($data)){
            $this->error($validate->getError());
        }
        // 数据入库
        $res = $this->obj->add($data);
        if(!$res){
            $this->error('添加失败');
        }else{
            $this->success('添加成功');
        }
    }

 
    //编辑页面
    public function edit($id=0){
        if(intval($id) < 1){
            $this->error('参数不合法');
        }
        // 获取id对应客户信息
        $customer = $this->obj::get($id);
        // var_dump($customer);
        $this->assign('customerInfo', $customer);
        // category下的edit.html模版文件
        // 第一个参数是默认的模版，第二参数是把数据传入到我们的模板中
        return $this->fetch();
    }

    // public function update($data){
    //     $res = $this->obj->save($data, ['id' => intval($data['id'])]);
    //     if($res){
    //         $this->success('更新成功');
    //     }else{
    //         $this->error('更新失败');
    //     }
    // }

    // // 排序逻辑
    // public function listorder($id, $listorder){
    //     // 测试用          
    //     // echo '$id<br/>';
    //     // echo '$listorder';   
    //     // 修改id对应的listorder进行排序
    //     $res = $this->obj->save(['listorder'=>$listorder],['id'=>$id]);
    //     if($res){
    //         $this->result($_SERVER['HTTP_REFERER'], 1, 'success');
    //     }else{
    //         $this->result($_SERVER['HTTP_REFERER'], 0, '更新失败');
    //     }
    // }
    
    // /*
    // * 修改状态
    // */
    // public function status(){
    //     // print_r(input('get.'));测试用
    //     $data = input('get.');
    //     // 调用validate方法进行数据验证
    //     $validate = validate('Category');
    //     if(!$validate->scene('status')->check($data)){
    //         $this->error($validate->getError());
    //     }

    //     $res = $this->obj->save(['status'=>$data['status']], ['id'=>$data['id']]);
    //     if($res){
    //         $this->success('修改状态成功');
    //     }else{
    //         $this->error('修改状态失败');
    //     }
    // }
}
