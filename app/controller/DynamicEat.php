<?php
namespace app\controller;

use app\BaseController;

class DynamicEat extends BaseController{
    static function index($id){
        return $id.'>>>>>';
    }
    public function details($id){
        return $id."@@@@2";
    }
}
