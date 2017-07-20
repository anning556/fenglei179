<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $users = DB::table('class')
                ->select(DB::raw("*,concat(uid,',',id) as pash"))
                ->orderBy('pash')
                ->orderBy('id')
                ->paginate(10);
                // dd($users);
        return view('admin.nav',['users'=>$users]);
    }

    /**
     * 添加分类
     */
    public function getAddnav()
    {
        return view('admin.addnav');
    }
    /**
     * 接受分类信息
     */
    public function postAddnav()
    {
        // dd($_POST);
        $name = $_POST['name'];
        $uid = $_POST['uid'];
        $fname = $_POST['fname'];
        // echo $uid;
        DB::insert('insert into class (name,uid,fname) values (?,?,?)', [$name,$uid,$fname]);
        return redirect('/class');
    }
    /**
     * 添加分类
     */
    public function postNawaddnav(Request $request)
    {
        $id = $_POST['id'];
        $users = DB::table('class')->where('id','=',$id)->get();
        return view('admin.addnav',['users'=>$users,'data'=>$request->all()]);
    }
}
