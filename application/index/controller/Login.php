<?php
namespace app\index\controller;

use think\Controller;

use app\common\model\Admin;

use app\common\model\Zhuce;

class  Login  extends  Controller 
{
	
	/*   public function index()
    {
		echo "<h2>在   前台   的登录界面啊啊啊啊啊？？？？？</h2>";

    } */
	
	
	public function index(){
		
		//测试数据库是否连接吧
		//$data = db('admin')->find(1);
		//dump($data);
		//halt($_POST);
		
		if(request()->isPost()){
			
			//halt($_POST);
			
			$res = (new Admin())->login(input('post.'));
			
			if($res['valid']){
				
				//登录成功
				 $this->success($res['msg'],'Index/index');exit;
				
			}else{
				
				//登录失败
				$this->error($res['msg']);exit;
				
			}
			
		}
		
		//加载登录模板
		return $this->fetch();
		
	}
	
	public function loginout(){
		
		// 清除session（当前作用域）
		session(null);
		
		//并退回首页
		return    $this->fetch('Index/index');exit;
		
	}
	
	
	public function zhuce(){
		
		//测试数据库是否连接吧
		//$data = db('admin')->find(1);
		//dump($data);
		//halt($_POST);
		
		if(request()->isPost()){
			
			$data = input("post.");
			
			
			
			//用户与密码不能为空
			if($data['username'] == ''){
				$this->error("用户不能为空!!!!");
			}
			
			if($data['password'] == ''){
				$this->error("密码不能为空!!!!");
			}
			
			//确认密码与再次确认密码是否一致
			if($data['password'] != $data['password1']){
				
				$this->error("2次输入的密码不一致!!!!");
				
			}
			
			$data['password'] = $data['password'];
			
			//验证验证码
			if(!captcha_check($data['code'])){
				
				$this->error("你输入的验证码不正确");
				
			}
			
			$res = model('Zhuce')->add($data);
			
			if($res){
				
				$this->success("注册成功!!!!","login/index");
				
			}else{
				
				$this->error("注册失败了");
				
			}
			
		}
		
		//加载注册模板
		return $this->fetch();
		
	}
	
	
	
	
}

?>