<?php
namespace app\controller;

use app\BaseController;

class DynamicGet extends BaseController{
    public function index($id){
        return $id.'>>>>';
    }
}
