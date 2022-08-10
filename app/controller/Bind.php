<?php
namespace app\controller;

use app\model\One;
use think\facade\Request;

class Bind{
    protected $one;
    public function __construct(One $one){
        // 自动实例化对象的方式，是采用单例模式实现的，只实例化一次
        $this->one = $one;
    }
    public function index(){
        return $this->one->username;
    }
    // 手动绑定 和实例化
    public function manual(){
//        bind('one','app\model\One');
        // 如果想重新实例化一个对象，后面加true $one = app('one',[], true) // 中间的[]是传参占位参数
//        return app('one')->userage;
    }
    public function isGet(){
        return json(Request::method());
    }
}