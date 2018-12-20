<?php
require_once './vendor/autoload.php';
use Qianglong\Qqldb\Db;

$admin_list=Db::table('bn_admin_user')->select('id,username,age');
var_dump($admin_list);

$admin_list=Db::table('bn_admin_user')
			->where(['id'=>['gt','20']])
			->select('id,username,age');
var_dump($admin_list);
// 