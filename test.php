<?php
require_once __DIR__.'/vendor/autoload.php';
use Qianglong\Qqldb\Db;


//
//$admin_list=Db::table('bn_admin_user')
//			->where(['id'=>['gt','20']])
//			->select('id,username,age');
//var_dump($admin_list);


//$object = Db::table()->connect();
//echo '<pre>';
//print_r($object->setTable('bn_admin_operation')->select());
//
//echo '----------------------------------------------';
$admin_list=Db::table('bn_admin_user')->select('id,username,age');
var_dump($admin_list);

//切换数据库连接后,之后的程序必须切换为默认配置或其他数据库连接必须再次调用connect
$admin_list=Db::table('bn_admin_user')->connect('db1')->select('id,username,age');
var_dump($admin_list);
//
