<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
    protected $dateFormat='Y-m-d';
    protected $type=[
        'birthday'=>'timestamp'
    ];
}