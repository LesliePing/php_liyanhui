<?php
namespace app\controller;
use app\BaseController;
use think\facade\Db;

class HelloWorld extends BaseController {
    public function hellow($vaslue = ''){
        return 'hello'.$vaslue;
    }
    public function hello($name = 'ThinkPHP6')
    {
        // Env获取.env信息，其他 Env.has...
        echo(Env('log.channel'));
        return 'hello,' . $name;
    }
    // 通过集成 basecontroller获得更多的方法（getBasePath, request->...等）
    public function say(){
        $array = [
            '0' => 1,
            '1' => 2,
        ];
//        halt($array);
        return json($array);
    }
    public function test(){
//        return $this->app->getBasePath(); // 返回实际路径
        return $this->request->action(); // 返回当前方法名
    }
    public function getUsers(){
//        $users = Db::table('tp_user')->select();
//        $cars = Db::connect('face_room')->table('face_admin')->select();
//        $user = Db::table('tp_user')->column('username','id');

//        Db::table('tp_user')->chunk(3, function ($users){
//            foreach ($users as $user){
//                dump($user);
//            }
//            echo 1;
//        });
//        $cursor = Db::table('tp_user')->cursor();
//        foreach ($cursor as $user){
//            dump($user);
//        }
//        return json($user);
//        function createRange($number){
//            $data = [];
//            for($i = 0; $i < $number;$i ++){
//                yield time();
//            }
//            return $data;
//        }
//        $data = createRange(10);
//        foreach ($data as $value){
//            sleep(1);
//            echo $value.PHP_EOL;
//        }
//        function readText(){
//            $handle = fopen('./test.txt', 'rb');
//            while(feof($handle) == false){
//                yield fgets($handle);
//            }
//            fclose($handle);
//        }
//        foreach (readText() as $key => $value){
////            sleep(1);
//            echo $value;
//        }
        $users = Db::name('user'); // 查询对象 如果结果是查询对象，可以一直使用指向符号进行链式查询，直到使用select、find 返回最后的查询结果。
//        $user = Db::name('user')->where('id', 27)->order('id', 'desc')->find();
        // 新增数据
//        return $users->save([
////            'id' => 303,
//            'username'=> '猪突猛进',
//            'details' => '123123',
//            'password'=> '2323221'
//        ]);
//        dump($users);
        // 修改数据
//        $data = [
//            'username' => '光头强',
//            'id' => 318
//        ];
//        return $users->update($data);
//        return Db::name('user')->where('id', 318)
////                                     ->inc('price')
////                                     ->dec('status', 2)
////                                     ->exp('email', 'LOWER(email)')
////                                     ->update();
//                                     ->update([
//                                         'email' => Db::raw('UPPER(email)'),
//                                         'price' => Db::raw('price + 1'),
//                                         'status'=> Db::raw('status - 2')
//            ]);
//        return Db::name('user')->where('id', 318)->save(['username' => '李煌']);
    // 子查询
//        $users = Db::name('user')->buildSql(true);
//        $subQuery = Db::name('two')->field('uid')->where('gender', '男')->buildSql(true);
//        $result = Db::name('one')->where('id','exp','IN '.$subQuery)->select();
//        echo Db::getLastSql().PHP_EOL;
        // 原生查询 最好不要混用 query / execute 不报错但thinkphp显示异常。
        $result = Db::execute('select * from tp_user');
        echo Db::getLastSql().PHP_EOL;
        return json($result);
    }
}
