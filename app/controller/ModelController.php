<?php
namespace app\controller;

use app\BaseController;
use app\model\User as UserModel;
use think\facade\Db;

class ModelController extends BaseController{
    public function test(){
//        $users = User::select();
//        $user = new UserModel(); // 数据新增需要先实例化模型
//        $result = $user->save([
//            'username' => '李白',
//            'password' => '123213213',
//            'details'   => '诗仙，黄河之水天上来',
//        ]);
        // 获取username
//        return $user->getUserName(12);
//        $user = UserModel::find(20);
//        return $user->status;
        $data = [
            'username'      =>      '辉夜',
            'password'      =>      '123',
            'gender'        =>      '女',
            'email'         =>      'huiye@163.com',
            'price'         =>      90,
            'details'       =>      '123',
            'list'          =>      ['username'=>'小红', 'gender'=>'女', 'email'=>'xiaohong@163.com']
            //'abc'           =>      'def'
        ];
//        return Db::name('user')->json(['list'])->save($data);
//        return json($result); // true
        return json(Db::name('user')->json(['list'])->find(321));
    }
    // 测试软删除
    public function softDelete(){
//        UserModel::destroy(321);
//        return UserModel::onlyTrashed()->select();
//        return json(UserModel::find(19)->profile->hobby);
//        $user = UserModel::find(19);
//        $user->profile->save(['hobby'=>'喜欢吃烧烤']);
//        $user = UserModel::hasWhere('profile',['id'=>1])->find();
        $user = UserModel::with('profile')->select([20,21,22]);
        // saveall是hasmany关系的专属方法
//        $user->profile()->saveAll([
//            ['hobby'=>'吃习惯','status'=>23],
//            ['hobby'=>'吃布丁','status'=>223],
//        ]);
//        foreach ($user as $usr){
//            dump($usr->profile);
//        }
        $user = UserModel::find(19);
        $roles = $user->roles;
        // 多对多新增
        $user->roles()->save(['type'=>'美食管理员']);
        return json($roles);
//        $user->together(['profile'])->delete();
//        return json($user);
    }
}
