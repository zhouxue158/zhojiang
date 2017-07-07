<?php
namespace  app\admin\controller;

use think\Controller;



class  Group  extends Controller
{
	
	
	public function index(){
		
		//加载 商家团购提交 页面
		return $this->fetch();
		
	}
	
	
	public function purchase(){
		
		//加载 团购列表 页面
		return $this->fetch();
		
	}
	
	
	
}


?>