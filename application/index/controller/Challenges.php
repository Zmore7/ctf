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
        $db = new Dbcontrol;
        $challenges = $db->challenges_Allselect();

        $this->assign('ch', $challenges);


        return $this->fetch();

    }
    //TODO: 根据find_id返回值改题目标题,写check对答案的判断
    public function check()
    {

        $text=input('text');
        $db= new Dbcontrol();
        $r=$db->challenges_Allselect();
        //echo json_encode($r);
        echo $text;
        //$this->view->engine->layout('layout/template');
        //return $this->fetch();

    }
    public function find_id(){
        $id=input('id');
        echo $id;
    }
    /*
        public function detail()
        {
            if ($r = input('')) {
                $dbcontrol = new Dbcontrol;
                $questions = $dbcontrol->challenges_select($db);
                $this->assign('q', $questions[0]);
                $this->view->engine->layout('layout/template');


            }
            return $this->fetch();

          //return $this->error('非法操作');
        }
        /*
        public function check(){
                $dbcontrol= new Dbcontrol;
                if (request()->isPost()){
                    $data=[
                        'id'=>input('id'),
                        'flag'=>input('flag')
                    ];
                    $r=$dbcontrol->flag_select($data['id']);
                    if ($r['flag']==$data['flag']){
                        return $this->success('答案正确','challenges/index');
                    }
                    return $this->error('答案错误');


              }
                return $this->error('未输入答案');
            }

        /*
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
        */
}

