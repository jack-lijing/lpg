<?php
namespace app\Admin\Controller;
use think\Controller;
use think\Request;

class Login extends Controller{

	public function index(){
		// 登陆成功以后如果再次访问此页面则直接跳转至后台主页面
		// 获取session
		// $user = session('o2o_admin', '', 'o2o');
		// if($user){
		// 	// 直接跳至主后台
		// 	$this->redirect(url('index/index'));
		// }
		// return $this->fetch();
	}

	// public function logincheck(){
	// 	if(!request()->isPost()){
	// 		$this->error('提交不正确');
	// 	}
	// 	$data = input('post.');
	// 	// 	validate($data, $rule, $msg)
	// 	$validate = validate('Login');
	// 	if(!$validate->scene('logincheck')->check($data)){
	// 		$this->error($validate->getError());
	// 	}
	// 	// print_r($data);
	// 	try{
	// 		$user = model('Admin')->getNormalAdminByusername($data['username']);
	// 	}catch(\Exception $e){
	// 		$this->error($e->getMessage());
	// 	}
	// 	if(!$user || $user->status != 1){
	// 		$this->error('该用户不存在');
	// 	}
	// 	if(md5($data['password']) != $user->password){
	// 		$this->error('密码不正确，请重新输入');
	// 	}
	// 	// 登陆成功，更新登陆时间
	// 	model('Admin')->updateById(['last_login_time' => time()], $user->id);
	// 	// 将用户信息记录入session
	// 	session('o2o_admin', $user, 'o2o');
	// 	$this->success('登陆成功', url('index/index'));
		
	// }

	// public function checklogin(Request $request){
	// 	// 初始返回参数
	// 	$status = 0;
	// 	$result = '';
	// 	$data = $request->param();

	// 	// 创建验证规则
	// 	$rule = [
	// 		'username|用户名' => 'require',//用户名必填
	// 		'password|密码' => 'require',//密码必填
	// 		'verify|验证码' => 'require|captcha',//验证码必填
	// 	];
	// 	// 自定义验证失败的提示信息
	// 	$msg = [
	// 		'username' => ['require' => '用户名不能为空'],
	// 		'password' => ['require' => '密码不能为空'],
	// 		'verify' => [
	// 			'require' => '验证码不能为空',
	// 			'captcha' => '验证码不正确'
	// 		],
	// 	];
	// 	// 验证
	// 	$result = $this->validate($data, $rule, $msg);
	// 	// 如果验证通过则执行
	// 	if($result === true){

	// 	}
	// 	return [
	// 		'status' => $status,
	// 		'message' => $result,
	// 		'data' => $data
	// 	];
	// }

	// // 退出登陆
	// public function logout(){
	// 	// 清空session
	// 	session(null,'o2o');
	// 	$this->redirect(url('login/index'));

	// }
}