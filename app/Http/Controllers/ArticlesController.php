<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Markdown;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $users = DB::table('wenzhang')->paginate(5);
        return view('demo.index',['users'=>$users,'data'=>$request->all()]);
    }

    /**
     * 添加文章
     * 
     */
    public function create()
    {
        return view('demo.add');
    }

    /**
    *执行添加
    */
    public function store(Request $request)
    {
        //dd($_POST);
        $neirong = $_POST['content'];
        $tite = $_POST['title'];
        DB::insert('insert into wenzhang (tite, neirong) values (?, ?)', [$tite, $neirong]);
        return redirect('/articles');
    }

    /**
     * 文章
     *
     */
    public function show($id)
    {
        $users = DB::table('wenzhang')->where('id', '=', $id)->get();
        return view('demo.addss', ['users'=>$users]);
    }

    /**
     * 修改数据
     */
    public function edit($id)
    {
        $users = DB::table('wenzhang')->where('id', '=', $id)->get();
        return view('demo.adds', ['users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('wenzhang')
            ->where('id', $id)
            ->update(['tite' => $_POST['title'],
                    'neirong' => $_POST['content']
                ]);
        return redirect('/articles');
            
    }

    /**
     * 删除文章
     */
    public function destroy($id)
    {
        // echo $id;die;
        //删除数据
        DB::table('wenzhang')->where('id', '=', $id)->delete();

        return redirect('/articles');
    }
    
  
    public function markdown(Request $request)
    {
        return Markdown::convertToHtml($request->content);
    }
}
