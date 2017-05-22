<?php

namespace app\index\controller;

use think\Controller;
use app\index\model\Dbcontrol;

class Challenges extends Controller
{
    public function _initialize()
    {

    }


    public function index()
    {
        $dbcontrol = new Dbcontrol;
        $challenges = $dbcontrol->challenges_Allselect();
//var_dump($challenges);
        $this->assign('ch', $challenges);
        $this->view->engine->layout('layout/template');
        return $this->fetch();
    }

    public function detail(){
        $dbcontrol= new Dbcontrol;
        if ($db=input('id')){

            $questions=$dbcontrol->challenges_select($db);
            $this->assign('q',$questions[0]);
            $this->view->engine->layout('layout/template');
            return $this->fetch();
        }
        return $this->error('非法操作');
    }


    //这个尝试ajax的
    public function index1()
    {
        if (request()->isPost()) {
            $flag = input();
            $check = [];
            if ($flag == '1') {
                $check['result'] = 'true';
                return json($check);

            } else {
                $check['result'] = 'flase';

                return json($flag);
            }
        }
        return $this->fetch();
    }
}

