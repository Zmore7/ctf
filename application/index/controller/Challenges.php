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
}
