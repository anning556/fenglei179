<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    /**
     * 商品详情
     */
    public function xiangqing()
    {
        return view('home.xiangqing');
    }
    /**
     * 登录
     */
    public function denglu()
    {
        return view('home.denglu');
    }
     /**
     * 注册
     */
    public function zhuce()
    {
        return view('home.zhuce');
    }

}
