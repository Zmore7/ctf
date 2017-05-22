<?php
namespace app\index\model;
namespace app\index\controller;
use think\Controller;
use think\Model;

class User extends Model
{
    public function user_add($db){
        $data=\think\Db::name('user')->insert();
        return 1;
    }
    public function user_select($db){
        $data=\think\Db::name('user')->where('id','=',$db)->select();
    }
    public function challenges_select($db){
        $data=\think\Db::name('challenges')->where('id','=',$db)->select();
    }
}