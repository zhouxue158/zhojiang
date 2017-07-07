<?php
namespace  app\admin\controller;

use think\Controller;



class  Recommend  extends Controller
{
	
	private $object;//定义全局变量
	
    public function _initialize()
    {
        $this->object=model('Recommend');//调用model层的category方法
    }
	
	public function add(){
		
		if(request()->isPost()){
			
			$data = input("post.");
			
			if($data['name'] == ''){
				
				$this->error("标题不能为空!!!!");
			}
			
			if($data['image_path'] == ''){
				
				$this->error("图片不能为空!!!!");
			}
			
			$id =  $this->object->add($data);
			
			if($id){
				
				$this->success("添加成功!");

            }else{
				
                $this->error("添加失败!!");

            }
			
		}else{
			
			$type = config("recommend.featured_type"); // 0   1
            
			return $this->fetch("",["type"=>$type]);
			
		} 
		
		//加载 添加推荐位内容 页面
		return $this->fetch();
		
	}
	
	public function index()
    {
        $type = config("recommend.featured_type");
        $data = input("get.type",1,"intval");
        $datas =  $this->object->getFeaturedsByType($data);
        //print_r($data);die;

        return $this->fetch("",["type"=>$type,"datas"=>$datas]);

    }
	
	
	
}


?>