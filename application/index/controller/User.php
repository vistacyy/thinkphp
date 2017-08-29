<?php
namespace app\index\controller;

use app\index\model\User as UserModel;
use app\index\model\Profile;
use app\index\model\Book;

class User
{
    // //	新增用户数据,带验证器
    // public function add()
    // {
    //     $user    =    new    UserModel;
    //     if ($user->allowField(true)->validate(true)->save(input('post.'))) {
    //         return    '用户[	'    .    $user->nickname    .    ':'    .    $user->id    .    '	]新增成功';
    //     } else {
    //         return    $user->getError();
    //     }
    // }

    // 关联新增
    public function add()
    {
        $user=new UserModel;
        $user->name='thinkphp';
        $user->password='123456';
        $user->nickname='流年2';
  
        if ($user->save()) {
            $profile=new Profile;
            $profile->truename='刘晨2';
            $profile->birthday='1977-03-05';
            $profile->address='中国上海2';
            $profile->email='thinkphp2@163.com';
            $user->profile()->save($profile);
            return '用户新增成功.';
        } else {
            return $user->getError();
        }
    }

    public function addBook()
    {
        $user    =    UserModel::get(2);
        $book         =    new    Book;
        $book->title       =    'ThinkPHP5快速入门';
        $book->publish_time    =    '2016-05-06';
        $user->books()->save($book);
        return    '添加Book成功';
    }


    //	批量新增用户数据
    public function addList()
    {
        $user    =    new    UserModel;
        $list    =    [
                    ['nickname'    =>    '张三',    'email'    =>    'zhanghsan@qq.com',    'birthday'    =>    strtotime('1988-01-15')],
                    ['nickname'    =>    '李四',    'email'    =>    'lisi@qq.com',    'birthday'    =>    strtotime('1990-09-19')],
                ];
        if ($user->saveAll($list)) {
            return    '用户批量新增成功';
        } else {
            return    $user->getError();
        }
    }

    public function read($id)
    {
        $user    =    UserModel::get($id, 'profile');
        echo    $user->name    .    '<br/>';
        echo    $user->nickname    .    '<br/>';
        echo    $user->profile->truename    .    '<br/>';
        echo    $user->profile->email    .    '<br/>';
    }

    //	更新用户数据
    public function update($id)
    {
        $user                            =    UserModel::get($id);
        $user->name    =    'framework';
        if ($user->save()) {
            //	更新关联数据
            $user->profile->email    =    'liu21st@gmail.com';
            $user->profile->save();
            return    '用户[	'    .    $user->name    .    '	]更新成功';
        } else {
            return    $user->getError();
        }
    }

    //	删除用户
    public function delete($id)
    {
        $user    =    UserModel::get($id);
        if ($user->delete()) {
            //	删除关联数据
            $user->profile->delete();
            return    '用户[	'    .    $user->name    .    '	]删除成功';
        } else {
            return    $user->getError();
        }
    }
    
    public function create()
    {
        return view();
    }
}
