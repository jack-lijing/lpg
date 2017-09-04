<?php
namespace app\api\controller;
use think\Controller;

class Category extends Controller
{
    private $obj;
    public function _initialize(){
        $this->obj = model("Category");
    }

    public function getCategoryByParentId(){
        $id = input('post.id', 0, 'intval');
        if(!$id){
            $this->error('ID不合法');
        }
        // 通过ID获取二级城市
        $categorys = $this->obj->getNormalCategoryByParentId($id);
        // 获取到数据以后以规定的格式返回给前端填充模版

        if(!$categorys){
            return show(0, 'error');
        }
        // 这里的show方法在api\common.php中
        return show(1, 'success', $categorys);
    }
}