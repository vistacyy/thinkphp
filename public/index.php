<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
// define('APP_PATH', __DIR__ . '/../application/');
// 加载框架引导文件
// require __DIR__ . '/../thinkphp/start.php';

// Test

// echo mt_rand(5,10);
$file="./readme.txt";
// echo filesize($file).' Byte';
// echo disk_total_space('D:').'Byte';
// echo date('Y-m-d h:i:s',fileatime($file));
// echo phpinfo();
// echo date_default_timezone_get();

// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to 
// double the size of each element in our 
// range
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);