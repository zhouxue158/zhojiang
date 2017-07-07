<?php
namespace  app\admin\controller;

use think\Controller;


class  Order  extends Controller
{
	
	
	public function index(){
		
		//加载 订单列表 页面
		return $this->fetch();
		
	}
	
}


?>