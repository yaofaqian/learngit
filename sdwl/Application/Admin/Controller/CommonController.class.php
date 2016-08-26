<?php
namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller{

    public function _initialize(){
        if(empty($_SESSION['adminuser'])){
            $this->redirect("Login/login");
            exit();
        }
    }
}