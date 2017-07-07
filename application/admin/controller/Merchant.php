<?php
namespace app\admin\controller;

use think\Controller;

class Merchant extends Controller
{
	public function index(){
		
		//加载商户列表页面
		return $this->fetch();
		
	}
	
	public function add(){
		
		//加载商户入驻申请审批列表页面
		return $this->fetch();
		
	}
	
	
	public function apply(){
		
		//加载商户入驻申请审批列表页面
		return $this->fetch();
		
	}
	

}
