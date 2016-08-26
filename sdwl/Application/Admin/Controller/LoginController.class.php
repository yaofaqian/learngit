<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller{

    public function login(){
       $this->display("login");
    }

    public function dologin(){

        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $userinfo = M('admin')->where("name='$username'")->find();
        if($userinfo){
            if($password!=$userinfo['password']){
                $this->assign("errorinfo","密码错误！");
                $this->display("login");
                exit();
            }else{
                session('adminuser',$userinfo);
                $this->redirect("Index/index");
            }
        }else{
            $this->assign("errorinfo","用户不存在！");
            $this->display("login");
            exit();
        }
    }
    public function logoout(){
        unset($_SESSION["adminUser"]);
        $this->display("Login");
    }
}