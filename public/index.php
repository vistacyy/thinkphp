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



class Connection 
{
    protected $link;
    private $server, $username, $password, $db;
    
    public function __construct($server, $username, $password, $db)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
        $this->connect();
    }
    
    private function connect()
    {
        $this->link = mysql_connect($this->server, $this->username, $this->password);
        mysql_select_db($this->db, $this->link);
    }
    
    public function __sleep()
    {
        return array('server', 'username', 'password', 'db');
    }
    
    public function __wakeup()
    {
        $this->connect();
    }
}


echo serialize(Connection);


