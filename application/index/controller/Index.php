<?php
namespace app\index\controller;

use think\Url;

class Index
{
    public function index()
    {
        echo Url::build('hello','name=thinkphp');
        return 'It is works.';
    }
}
