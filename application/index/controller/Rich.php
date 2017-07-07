<?php
namespace app\index\controller;

use think\Controller;

class  Rich  extends  Controller 
{
	
	public function index(){
		
		//加载模板
		return $this->fetch();
		
	}
	
}

?>