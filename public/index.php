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

// // 定义应用目录
// define('APP_PATH', __DIR__ . '/../application/');
// // 加载框架引导文件
// require __DIR__ . '/../thinkphp/start.php';





// class MyException extends Exception
// {
//     // 重定义构造器使 message 变为必须被指定的属性
//     public function __construct($message, $code = 0, Exception $previous = null) {
//         // 自定义的代码

//         // 确保所有变量都被正确赋值
//         parent::__construct($message, $code, $previous);
//     }

//     // 自定义字符串输出的样式
//     public function __toString() {
//         return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
//     }

//     public function customFunction() {
//         echo "A custom function for this type of exception\n";
//     }
// }


// /**
//  * 创建一个用于测试异常处理机制的类
//  */
// class TestException
// {
//     public $var;

//     const THROW_NONE    = 0;
//     const THROW_CUSTOM  = 1;
//     const THROW_DEFAULT = 2;

//     function __construct($avalue = self::THROW_NONE) {

//         switch ($avalue) {
//             case self::THROW_CUSTOM:
//                 // 抛出自定义异常
//                 throw new MyException('1 is an invalid parameter', 5);
//                 break;

//             case self::THROW_DEFAULT:
//                 // 抛出默认的异常
//                 throw new Exception('2 is not allowed as a parameter', 6);
//                 break;

//             default: 
//                 // 没有异常的情况下，创建一个对象
//                 $this->var = $avalue;
//                 break;
//         }
//     }
// }

// // 例子 1
// try {
//     $o = new TestException(TestException::THROW_CUSTOM);
// } catch (MyException $e) {      // 捕获异常
//     echo "Caught my exception\n", $e;
//     $e->customFunction();
// } catch (Exception $e) {        // 被忽略
//     echo "Caught Default Exception\n", $e;
// }

// // Continue execution
// var_dump($o); // Null
// echo "\n\n";




class MyException extends Exception { }

class Test {
    public function testing() {
        try {
            try {
                throw new MyException('foo!');
            } catch (MyException $e) {
                // rethrow it
                throw $e;
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}

$foo = new Test;
$foo->testing();