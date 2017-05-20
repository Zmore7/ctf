<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        
        $this->view->engine->layout('layout/template');
        return $this->fetch();
        
    }
}
