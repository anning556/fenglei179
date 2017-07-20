
@extends('layouts.master')

@section('购物车', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>商品</th>
                    <th></th>
                    <th class="text-center"></th>
                    <th class="text-center">小计</th>
                    <th> </th>
                </tr>
                </thead>
                <tbody>
            
           
             @foreach($username as $v)
             <?php
                $count = Cart::count();
                $subtotal = Cart::subtotal();
               
             ?>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/admin/1499059469868.jpeg" style="width: 100px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">{{$v->name}}</a></h4>
                                </div>
                            </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{$v->price}}</strong></td>
                     
                        <td><strong>{{$v->qty}}件</strong></td>
                        <td class="col-sm-1 col-md-1">
                            <a href="/removeItem/"> 
                            </a>
                        </td>
                    </tr>
                <tr>
                @endforeach
              
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td><h3>总价</h3></td>
                    <td class="text-right"><h3><strong>{{$subtotal}}元</strong></h3></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                        <a href="/buy"> 
                        </a></td>
                    <td>
                        <button type="button" class="btn btn-success">
                            结算 <span class="fa fa-play"></span>
                        </button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection