<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User as LoginModel;
use think\View;

class Login extends Controller
{

    public function index()
    {
        $view = new View();
        return $view->fetch('index');

    }

    public function test()
    {
        echo 1231231;
    }

    public function test1()
    {
        echo 'reeeeeeeee';
    }

    public function login()
    {
        $username=input('username');
        $password=input('password');
        $user=LoginModel::get([
           'username'=>$username,
            'password'=>$password
        ]);
        if($user)
        {
            return $this->success('登录成功'.$username.'     '.$password);
        }else{
            return $this->error('登录失败');
        }
    }
}
