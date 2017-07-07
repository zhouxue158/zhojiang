<?php
namespace  app\admin\controller;

use think\Controller;



class  Member  extends Controller
{
	
	
	public function index(){
		
		//加载 会员列表 页面
		return $this->fetch();
		
	}
	
	
}


?>