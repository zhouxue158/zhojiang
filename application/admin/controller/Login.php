<?php
namespace app\admin\controller;

use think\Controller;

use app\common\model\Admin;

class Login  extends  Controller 
{
  /*   public function index()
    {
		echo "<h2>在   后台    的登录界面啊啊啊啊啊啊啊啊啊啊啊啊？？？？？</h2>";

    } */
	
	public function  index(){
		
		//测试数据库是否连接吧
		//$data = db('admin')->find(1);
		//dump($data);
		
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
		
		// 清除session（当前作用域）
		session(null);
		
		//加载登录模板
		return $this->fetch();
		
	}
	
	
	
}






