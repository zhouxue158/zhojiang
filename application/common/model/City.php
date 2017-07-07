<?php
namespace app\common\model;


use think\Model;

class City extends Model
{
    public function city($id=0)
    {
        //查询一级城市
        $result=db('city')->where('pid',$id)->select();
        //echo($this->getLastSql($result));
        return $result;
    }

}