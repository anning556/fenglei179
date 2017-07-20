<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\type;
use Storage;
use Gregwar\Captcha\CaptchaBuilder;
use DB;
use Cart;
class WuxianController extends Controller
{
    /**
     * Display a listing of the resource.
     *  加载 分类页面
     * @return \Illuminate\Http\Response
     */
    public function postIndex(Request $request)
     {
        //echo 22;
            $prefix = "avatar".mt_rand(1,1000);
            $photo = $request->photo;
            $Origname = $photo->getClientOriginalName();
            $name = $prefix.$Origname;
            $src = "/images/avatar/".$name;
            $realPath = $request->photo->getRealPath();
            Storage::disk('uploads')->put($src,file_get_contents($realPath));
            echo $src;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('laravel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getStore(Request $request)
    {
        $user = DB::table('products')->get();
       // dd($user);

        return view('index',['user'=>$user]);
    }

    /**
     * Display the specified resource.
     *  //这个方法是练手
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow()
    {
        //加入购物车
        $yuan =232;
        //清除购物车
        Cart :: destroy();
        Cart::add('1', 'Product 1', 1, 10);
        Cart::add('2', 'Product 2', 2, 40);

       // $name = Cart :: add([ 
       //    [ 'id'  =>  ' 1 ','name'  =>  'Product 1','qty'  =>  1,'price'  =>  $yuan ],
       //    [ 'id'  =>  ' 2 ','name'  =>  'Product 2','qty'  => 1,'price'  =>  $yuan,'options'  => [ 'size'  =>  'large' ]] 
       //  ]);

        //$v->rowId 是修改 数量点的
        // $user = Cart::content();
        // foreach($user as $v){
                
        //      Cart::update($v->rowId,4); //修改数量
        //      Cart::update($v->rowId,['name'=>'lifie']);
            
        // }
           //  echo '<pre>';
           // var_dump($user = Cart::content());

        //计算购物车数量;
        $count = Cart::count();
        echo $count;
        //计算购物车价格
        echo '---------------';
        //这个自带运费计算
        $yuan = Cart::total();
        //这个是不带运费
        $boo = Cart::subtotal();

        //这要运费
        $fie = Cart::tax();
        echo $fie;
     
    }

    /**
     * Show the form for editing the specified resource.
     *  加入购物车执行
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit(Request $request)
    {
        //dd($request->all());

        //加入购物车
        $id = $request->id;
        //Cart::destroy();
        $name = $request->name;
         $user = Cart::add(['id'=>$id,'qty'=>1,'name'=>$name,'price'=>$request->price]);
        $username = Cart::content();
        return view('view',['username'=>$username]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUpdate()
    {
            $builder = new CaptchaBuilder;
            $builder->build();
             session_start();
            $_SESSION['phrase'] = $builder->getPhrase();
            
            header('Content-type: image/jpeg');
            $builder->output();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
