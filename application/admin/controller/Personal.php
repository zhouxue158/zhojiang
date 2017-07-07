<?php
namespace  app\admin\controller;

use think\Controller;

use app\common\model\Admin;



class  Personal  extends Controller
{
	
	
	public function index(){
		
		//加载个人信息页面
		return $this->fetch();
		
	}
	
	
	//修改密码
	public function  modify(){
		
		//测试数据库是否连接吧
		//$data = db('admin')->find(2);
		//dump($data);
		
		if(request()->isPost()){
			
			//halt($_POST);
			
			$res = (new Admin())->modify(input('post.'));
			
			if($res['valid']){
				
				//清除session中的登录信息
				session(null);
				
				//密码修改成功
				 $this->success($res['msg'],'admin/login/index');exit;
				
			}else{
				
				//密码修改失败
				$this->error($res['msg']);exit;
				
			} 
			
		}
		
		//加载修改密码页面
		return $this->fetch();
		
	}
	
	
	
}


?>