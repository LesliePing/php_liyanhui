<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

//Route::get('think', function () {
//    return 'hello,ThinkPHP6!';
//});
//
//Route::get('hello/:name', 'index/hello');

//Route::get('model/test', 'ModelController/test');
//
//Route::get('model/softdelete', 'ModelController/softDelete');
//Route::rule('ds/:id','Address/details','GET|POST');
//Route::rule('ds/:id','Address/details')->pattern(['id'=>'\d+']);
//Route::rule('sc/:id/:uid','Address/search')->pattern(['id'=>'\d+','uid'=>'\d+']);
//// 本页全局规则
//Route::pattern(['id'=>'\d+','uid'=>'\d+']);
//Route::rule('sc-:id-<uid>','Address/search');
//// 路由的动态组合拼装 使用@访问方法，需要写完整的路径
////Route::rule('details-:name-:id','Dynamic:name@details')->pattern(['id'=>'\d+']);
//// 路由跳转
//Route::redirect('details-:name-:id','http://localhost:8000/ds/3',302)->ext('html')->pattern(['id'=>'\d+']);
//// 额外参数的匹配 append 追加额外的参数（方法内静态参数-比较少用） 允许跨域请求（options设置为true即可）
//Route::rule('ds/:id','Address/details')->filter(['id'=>5,'type'=>1])->append(['url'=>3])->allowCrossDomain();
//// 使用option配置多个配置项
//Route::rule('ds/:id','Address/details')->option([
//    'ext'=>'html',
//    'https'=> true,
//    'append'=>['url'=>3,'name'=>4]
//]);
//
//Route::miss('public/miss');