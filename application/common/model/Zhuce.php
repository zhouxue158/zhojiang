<?php
namespace app\common\model;

use\think\Loader;

use\think\Model;

use think\Validate;


class Zhuce extends Model
{
	
	
	protected  $pk='id';   //主键
	
	//设置当前模型对应的完整数据表名称
	protected  $table='admin';
	
	public function add($data = [])
	{
		
		if (!is_array($data)){
				
			exception("输入数据不是一个数组");
				
		}
		
		$data['status'] = 1;
		
		return $user = $this->data($data)->allowField(true)->save();

	}


	
}
	
