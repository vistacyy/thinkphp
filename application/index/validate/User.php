<?php
namespace app\index\validate;

use think\Validate;

class User extends Validate
{
    // protected $rule=[
    //     'nickname|昵称'=>'require|min:5|token',
    //     'email'=>'require|email',
    //     'birthday'=>'dateFormat:Y-m-d',
    // ];
    //	验证规则
    protected $rule    =    [
        ['nickname',    'require|min:5',    '昵称必须|昵称不能短于5个字符'],
        ['email',    'checkMail:thinkphp.cn',    '邮箱格式错误'],
        ['birthday',    'dateFormat:Y-m-d',    '生日格式错误'],
    ];

    //	验证邮箱格式	是否符合指定的域名
    protected function checkMail($value, $rule)
    {
        return    1    ===    preg_match('/^\w+([-+.]\w+)*@'.$rule.'$/', $value);
    }
}
