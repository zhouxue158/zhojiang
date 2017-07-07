<?php
namespace app\common\model;

use\think\Loader;

use\think\Model;

use think\Validate;


class Admin extends Model
{
	
	
	protected  $pk='id';   //主键
	
	//设置当前模型对应的完整数据表名称
	protected  $table='admin';
	
	//登录
	public  function login($data)
	{
		//halt($data);
		
		//1.执行验证
		$validate =Loader::validate('Admin');
			
	    //  $user = loader::model("admin")->where($where)->find(); // 查询一行数据
		
		//如果验证码不通过
		if(!$validate->check($data))
		{
			return ['valid'=>0,'msg'=>$validate->getError()];
		}
		
		//2.比对用户名和密码是否正确
		$userInfo=$this->where('username',$data['username'])->where('password',$data['password'])->find();
		
		
		if(!$userInfo){
			//说明在数据库未匹配到相关数据
			return['valid'=>0,'msg'=>'用户名不正确'];
		}
		
		//3.将用户信息存入到session中
		session('admin.id',$userInfo['id']);
		session('admin.username',$userInfo['username']);
		return['valid'=>1,'msg'=>'登录成功'];
	}
	
	
	//修改密码
	public function  modify($data){
		
		//halt($data);
		
		//1.执行验证
		$validate = new Validate([
			'password'  => 'require',
			'new_password' => 'require',
			'confirm_password' => 'require|confirm:new_password'
		],[
			'password.require' => '请输入原始密码',
			'new_password.require' => '请输入新密码',
			'confirm_password.require' => '请再次输入新密码',
			'confirm_password.confirm' => '确认密码与新密码不一致',
		]); 
		
		if (!$validate->check($data)) {
			return ['valid'=>0,'msg'=>$validate->getError()];
			//dump($validate->getError());
		}
		 
		//2.原始密码是否正确
		$userInfo = $this->where('id',session('admin.id'))->where('password',$data['password'])->find();
		if(!$userInfo){
			
			return ['valid'=>0,'msg'=>'原始密码不正确!!!!'];
			
		}
		
		//3.修改密码
		// save方法第二个参数为更新条件
		$res = $this->save([
		
			'password'  => $data['new_password'],
	
		],[
		
			$this->pk =>session('admin.id')

		]);
		//halt($res);
		
		if($res){
			
			return ['valid'=>1,'msg'=>'密码修改成功!!'];
			
		}else{
			
			return ['valid'=>0,'msg'=>'密码修改失败了!!'];
			
		}
		
	}
	
	
	
	
}
	
