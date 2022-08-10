<?php
namespace app\controller;

use app\BaseController;

class Error extends BaseController{
    public function miss(){
        return '404 页面不存在！';
    }
}