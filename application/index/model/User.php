<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
    protected $dateFormat='Y-m-d';
    protected $type=[
        'birthday'=>'timestamp'
    ];
    // 定义关联方法
    public function profile()
    {
        return $this->hasOne('Profile');
    }

    //	定义关联
    public function books()
    {
        return $this->hasMany('Book');
    }
}
