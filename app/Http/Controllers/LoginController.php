<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function dologin(Request $request)
    {
        //获取用户名
        $name = $request->name;

        //读取数据库
        $user = User::where('name',$name)->first();

        //判断
        if(empty($user)) {
            return back()->with('info','用户名或密码不正确');
        }

        //检测密码
        if(Hash::check($request->password, $user->password)) {
            //写入session
            session(['id' => $user->id]);

            return redirect('http://www.baidu.com')->with('info','登陆成功');
        }else{
            return back()->with('info','用户名或密码不正确');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/xiangqing');
    }

}
