<?php
namespace app\controller;
use app\BaseController;
use think\facade\Db;

class HelloWorld extends BaseController {
    // 访问路径 http://localhost/helloworld/getusers
    public function hellow($vaslue = ''){
        // 访问路径 http://localhost/helloworld/hellow/vaslue/liyanhui -> 得到结果 hello,liyanhui
        return 'hello'.','.$vaslue;
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
//        $result = Db::execute('select * from tp_user');
//        echo Db::getLastSql().PHP_EOL;
//        $result = Db::name('user')->where('id', '>', 70)->select();
        // 使用数组组合查询
//        $result = Db::name('user')->where([
//            'gender' => '男',
//            'price' => 100
//        ])->select();
        // 使用索引数组
//        $result = Db::name('user')->where([
//            ['gender', '=', '男'],
//            ['price', '=', 110]
//        ])->select();
        // 组装复杂的数组
//        $map[] = ['gender', '=', '男'];
//        $map[] = ['price', 'in', [60,70,80]];
//        $result = Db::name('user')->where($map)->select();
        // whereRaw
//        $result = Db::name('user')->whereRaw('gender="男" and price in (60,70)')->select();
        // tp6 支持 预处理模式
//        $result = Db::name('user')->whereRaw('id=:id',['id'=>19])->select();
//        $result = Db::name('user')->field('id, username as name, email')->select();
        // 使用field(true), 可以显式查询获取所有字段，提高查询性能
//        $result = Db::name('user')->field(true)->select();
        // 使用fieldraw，可以直接给字段设置mysql函数
//        $result = Db::name('user')->fieldRaw('id,sum(price) as total_price')->select();
        // 使用 withoutField 可以屏蔽不需要显示的字段
//        echo Db::getLastSql().PHP_EOL;
        // 使用filed（）方法在新增数据时，验证字段合法性（限定字段的个数） field('username','email')->insert($data) --password不是合法字段
        // 使用limit方法，限制获取输出数据的个数
//        $result = $users->limit(5)->select();
        // 从某条数据开始获取
//        $result = $users->limit(3,1)->select();
        // 使用page方法，无需计算分页的条数
//        $result = $users->page(0,5)->select(); // 每次显示5条，第一页 page 0 也表示第一页
        // 使用order方法，可以指定排序方式
//        $result = $users->order('id')->select(); // 默认正序
        // 多个字段排序 第二个排序条件只有在满足已排序行value相同的时候才生效
//        $result = $users->order(['update_time'=>'desc','id'=>'desc'])->select();
        // 使用orderRaw方法，支持排序的同时指定mysql函数;
        // 按照字段值排序----直接把字段值排到最前面
//        $result = $users->orderRaw('field(username,"樱桃小丸子") desc')->select();
        // group 按照性别统计price [{"gender":"男","price_by_gender":"666.00"}...]
//        $result = $users->fieldRaw('gender,sum(price) as price_by_gender')->group('gender')->select();
        // 使用group进行分组后，再使用having进行筛选
//        $result = $users->fieldRaw('gender, sum(price) as price_total')->group('gender')
//            ->having('sum(price) > 600')->select();

        // 使用 | 和 & 实现where条件的高级查询，where支持多个连缀
//        $result = $users->where('username|email', 'like', '%xiao%')->where('price&uid', '>', 10)
//            ->select();
        // 组合复杂的条件,比如exp，可以使用raw()
//        $result = $users->where([
//            ['status','=',1],
//            ['price','exp',Db::raw('>=80')]
//        ])->select();
//        $map = [
//          ['status', '=', 1],
//          ['price','exp',Db::raw('>=20')],
//        ];
//        $result = $users->where([$map])->where('email', 'like', '%163.com%')->select();
        // SELECT * FROM `tp_user` WHERE  ( `status` = 1 AND ( `price` >=20 ) )  AND `email` LIKE '%163.com%'
        // 使用whereOr 合并两个条件 // SELECT * FROM `tp_user` WHERE  `status` = 1  AND ( `price` >=20 )  AND `email` LIKE '%163.com%'
//        $map1 = [
//            ['username', 'like', '%小%'],
//            ['email','like','%163%']
//        ];
//        $map2 = [
//            ['username', 'like', '%孙%'],
//            ['email','like','%.com%']
//        ];
//        $result = $users->whereOr([$map1,$map2])->select(); // SELECT * FROM `tp_user` WHERE  ( `username` LIKE '%小%' AND `email` LIKE '%163%' )  OR ( `username` LIKE '%孙%' AND `email` LIKE '%.com%' )
        // whereRaw 支持预处理
//        $result = $users->whereRaw('(username like :username and email like :email) or (price > :price)',[
//            'username' => '%小%', 'email'=>'%163%','price'=>80
//        ])->select();
        // 相等可以省略中间的操作符
//        $result = $users->whereColumn('update_time', '>=', 'create_time')->select();
//        echo Db::getLastSql().PHP_EOL;
        // 系统支持 where(FieldName)  exp:whereUsername whereEmail wherePassword
        // 支持 getBy(FieldName) exp: getByUsername getByEmail getByPassword
        // getFieldByFieldName exp: getFieldByUsername 获取指定字段的值 ('username','email') 通过用户名得到邮箱
        // 需要先执行完map的查询再执行下面的查询，把map用中括号包起来。
        // when() 实现条件判断 分支查询 true 执行前面 false 执行后面
//        $result = $users->when(true,function($query){
//            $query->where('id', '>', 23);
//        },function($query){
//            $query->where('username', 'like', '%小%');
//        })->select();
//        $result = $users->withAttr('email',function($value, $data){
//            return strtoupper($value);
//        })->select();
        // 数据集，指查询得到的结果集，它和数组一样
        $result = $users->select();
        dump($result->shuffle());
//        return json($result);
    }
}
