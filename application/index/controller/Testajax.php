<?php
namespace app\index\controller;
use app\index\model\Dbcontrol;
use think\Controller;

class Testajax extends Controller
{
    public function index(){
        //$this->view->engine->layout('layout/template');
        return $this->fetch();
    }
    public function index2(){
        $db = new Dbcontrol;
        $challenges = $db->challenges_Allselect();

        $this->assign('ch', $challenges);


        $this->view->engine->layout('layout/template');
        return $this->fetch();
    }
    public function a()
    {
        $name=input('name');
        $text=input('text');
        $db= new Dbcontrol();
        $r=$db->challenges_Allselect();
        //echo json_encode($r);
        echo $text;
        //$this->view->engine->layout('layout/template');
        //return $this->fetch();

    }
}
