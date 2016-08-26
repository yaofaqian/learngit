<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Page;

class AreaController extends CommonController{
    public function index(){
        $data = M('city');

        import('ORG.Util.Page');
        $count = $data->count();
        $Page = new Page($count);
        $show = $Page->show();

        $list = $data->limit($Page->firstRow.','.$Page->listRows)->select();


        $this->assign("list",$list);
        $this->assign("show",$show);
        $this->display("index");
    }
}