<?php 
namespace app\api\controller\v1;

use app\index\model\User as UserModel;

class User {
    public function read($id=0){
        $user=UserModel::get($id);
        if($user){
            return json($user);
        }else{
            abort(404,'用户不存在');
        }
    }
}