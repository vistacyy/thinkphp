<?php
namespace app\index\controller;

use app\index\model\User as UserModel;

class User
{
    // public function add()
    // {
    //     $user=new UserModel;
    //     $user->nickname='流年';
    //     $user->email='thinkphp@qq.com';
    //     $user->birthday=strtotime('1977-03-05');
    //     if ($user->save()) {
    //         return '用户'.$user->nickname.'新增成功！';
    //     } else {
    //         return $user->getError();
    //     }
    // }

    //	新增用户数据
    public function add()
    {
        $user    =    new    UserModel;
        if ($user->allowField(true)->validate(true)->save(input('post.'))) {
            return    '用户[	'    .    $user->nickname    .    ':'    .    $user->id    .    '	]新增成功';
        } else {
            return    $user->getError();
        }
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

    //	更新用户数据
    public function update($id)
    {
        $user      =    UserModel::get($id);
        $user->nickname    =    '刘晨';
        $user->email                =    'liu21st@gmail.com';
        if (false    !==    $user->save()) {
            return    '更新用户成功';
        } else {
            return    $user->getError();
        }
    }

        //	删除用户
        public function delete($id)
        {
            $user      =    UserModel::get($id);
            if (false    !==    $user->delete()) {
                return    '删除用户成功';
            } else {
                return    $user->getError();
            }
        }
    
    public function create()
    {
        return view();
    }
}
