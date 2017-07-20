<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class tianjiaController extends Controller
{
    /**
     * 商品图片添加
     */
    public function shangpin()
    {
        return view('admin/shangpin');
    }
    /**
     * 商品图片添加
     */
    public function xianshi(Request $request)
    {
        // dd($_FILES);
        $cid = $_POST['cid'];
        if($request->hasFile('links')){
            foreach($request->file('links') as $k => $v){

                // echo "$v";
                // echo "<br />";
                //获取图片的后缀

                $fix =  $v->getclientOriginalExtension();
                $name = time().rand(30,1000).'.'.$fix;
                $path = './admins/images/shangchuan';
               // dd($fix);
                $res =  $v->move($path,$name);
                // dd($res);
                //写入到数据库
               
                DB::insert('insert into commodityImage (cid, links) values (?, ?)', [$cid, $name]);
            }
                return redirect('/shangpinxiangqing');
            
        }
    }
    public function shangpinxiangqing()
    {
        $users = DB::table('commodityimage')->select('id', 'cid', 'links')->paginate(5);
        return view('admin/xianshi',[
            'users'=>$users
            ]);
    }
}
