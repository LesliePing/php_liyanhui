<?php
 namespace app\model;

 use think\Model;
 use think\model\concern\SoftDelete;

 class User extends Model{
//     use SoftDelete; // 开启软删除
//     protected $deleteTime = 'delete_time'; // 设置默认删除时间字段
     // 获取username
//     public function getUserName($id){
//         $obj = $this->find($id);
//         return $obj->getAttr('username');
//     }
//     // 模型的获取器
//     public function getStatusAttr($value){
//         $status = [
//             -1=>'删除',
//             0 =>'禁用',
//             1 =>'正常',
//             2 =>'待审核'
//         ];
//         return $status[$value];
//     }

    // 通过函数的方式关联 Profile 表
     public function profile(){
         // hasone表示一对一关联
         return $this->hasMany(Profile::class, 'user_id','id');
     }
     // 建立多对对关系
     public function roles(){
         return $this->belongsToMany(Role::class,Access::class,'role_id', 'user_id');
     }
 }