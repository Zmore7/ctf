<?php

namespace app\index\controller;

use think\Controller;

class Challenges extends Controller
{


    public function index()
    {
        $this->view->engine->layout('layout/template');
        return $this->fetch();
    }
    public function detail(){
        if (request()->isPost()){
            $db=input('id');


        }
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

