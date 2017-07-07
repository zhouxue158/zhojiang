<?php
/**
 * basemodel 公共的model层
 */
namespace app\common\model;

use think\Model;

class BaseModel extends Model
{
    //公共的添加方法
    protected  $autoWriteTimestamp = true;//时间戳转换
    public function add($data) {
        $data['status'] = 0;
        $this->save($data); //save  更新方法
        return $this->id;
    }

    public function updateById($data, $id) {
        return $this->allowField(true)->save($data, ['id'=>$id]);
    }


}