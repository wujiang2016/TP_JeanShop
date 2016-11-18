<?php
namespace Home\Controller;
use Think\Controller;
class WomenController extends Controller {
    public function index(){
        $this->login="Home/Login/login";
        $this->display();
        // echo "d";
        // echo C('__ROOT__');
    }
}