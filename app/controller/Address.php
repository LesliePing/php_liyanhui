<?php
namespace app\controller;
use app\BaseController;
//use think\facade\Route;
use think\annotation\Route;

class Address extends BaseController{
    /**
     * @param $id
     * @return \think\response\Json
     * @route("ds/:id",method="GET",ext="html")
     */
    public function details($id){
        return json('details'.$id);
    }
    public function url(){
//        return url('Address/details',['id'=>5]);
    }
    public function search($id,$uid){
        return $id.',详情:'.$uid;
    }
}
