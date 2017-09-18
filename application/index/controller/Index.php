<?php
namespace app\index\controller;

use think\Url;
use think\Session;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return 'It is works.';
    }
    // 验证码显示
    public function captcha()
    {
        return $this->fetch();
    }
    // 检测验证码
    public function check($code='')
    {
        $captcha = new \think\captcha\Captcha();
        if (!$captcha->check($code)) {
            $this->error('验证码错误');
        } else {
            $this->success('验证码正确');
        }
    }
}
