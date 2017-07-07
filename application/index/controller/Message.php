<?php
namespace app\index\controller;

use think\Controller;

class  Message  extends  Controller 
{
	
	public function index(){
		
		//加载模板
		return $this->fetch();
		
	}
	
}

?>