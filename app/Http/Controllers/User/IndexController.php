<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CommonModel;

class IndexController extends Controller
{
    /**
     * 注册
     */
    public function reg()
    {
        $reg_info = [
            'name'  => 'asd',          // 用户名
            'email' => 'asd@qq.com',
            'mobile'    => '15210772410',
            'pass1'     => '123123',
            'pass2'     => '123123',
        ];
        // print_r($reg_info);die;
        // echo __METHOD__;die;
        //请求passport 注册接口
        $url = 'http://passport.1905.com/api/user/reg';
        // $url = 'http://passport.zmrzzj.com//api/user/reg';
        // echo $url;die;
        $response = CommonModel::curlPost($url,$reg_info);
        // print_r($response);die;
        echo '<pre>';print_r($response);echo '</pre>';
    }
    public function login()
    {
        $login_info = [
            'name'  => 'asd',
            'pass'  => '123123',
        ];
        //请求passport 登录接口
        $url = 'http://passport.1905.com/api/user/login';
        // $url = 'http://passport.zmrzzj.com/api/user/login';
        $response = CommonModel::curlPost($url,$login_info);
        echo '<pre>';print_r($response);echo '</pre>';
    }
    public function getData()
    {
        $token = '75ddc702b14bb3518dd5';
        $uid = 2;
        //请求passport 获取数据接口
        $url = 'http://passport.1905.com/api/show/time';
        // $url = 'http://passport.zmrzzj.com/api/show/time';
        $header = [
            'token:'.$token,
            'uid:'.$uid
        ];
        $response = CommonModel::curlGet($url,$header);
        echo '<pre>';print_r($response);echo '</pre>';
    }
}
