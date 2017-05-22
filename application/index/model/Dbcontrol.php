<?php
namespace app\index\model;

use think\Model;

class Dbcontrol extends Model
{
    public function user_add($db){
        $data=\think\Db::name('user')->insert();
        return 1;
    }
    public function user_select($db){
        $data=\think\Db::name('user')->where('id','=',$db)->select();
        return $data;
    }
    public function challenges_select($db){
        $data=\think\Db::name('challenges')->where('id','=',$db)->select();
        return $data;
    }
    public function challenges_Allselect(){
        $data=\think\Db::name('challenges')->field('id,title')->select();
        return $data;
    }
}