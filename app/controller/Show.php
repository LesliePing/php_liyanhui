<?php
namespace app\controller;

use app\model\User;
use think\facade\View;

class Show{
    public $name = "MR.solll";
    public $age = 100;
    const PI = 3.13;
    public function index(){
//        $username = "Mr.LOLL";
//        require 'test/1.php';
//        View::assign('name', 'MR.Huang');
        $arr = [
            'name'=>'MR.labi',
            'age' => 1000,
            'lastname'=> '小心'
        ];
        $list = User::select();
        return View::filter(function($content){
            return strtoupper($content);
        })->fetch('../public/index',[
            'arr' => $arr,
            'list' => $list,
        ]);
    }
    public function fn(){
        return '方法';
    }
}