<?php

namespace index;

// use test;
// include 'namespace.php';

include_once PHP_BASE_PATH.'/header.php';

// error_reporting(E_ERROR ~ E_NOTICE );

// echo 'AAAA'.(string)[].'BBBB';

// $foo[bar] = 'enemy';
// echo $foo[bar];

// $handle = opendir('.');
// while (false !== ($file = readdir($handle))) {
//     $files[] = $file;
// }
// closedir($handle); 
// print_r($files);

// class foo {
//     function __construct(){
//         echo __NAMESPACE__;
//     }
// }

// $a=new \test\foo;

spl_autoload_register(function($name){
    var_dump($name);
});

class Foo implements ITest {

}

include_once PHP_BASE_PATH.'/footer.php';
