@extends('layouts.master')

@section('商品列表', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <div class="col-sm-6 col-md-4">
                        @foreach($user as $k => $v)

                        <div class="thumbnail" >
                            <img style="width:350px;height:350px;" src="{{$v['imageurl']}}" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>{{$v['name']}}</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3>
                                            <label>{{$v['price']}}</label></h3>
                                    </div>
                                </div>
                                <p>{{$v['description']}}</p>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="/fenlei/edit?id={{$v['id']}}&name={{$v['name']}}&price={{$v['price']}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> 添加到购物车</a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
            </div>
            <script type="text/javascript">
           
         
            </script>
        </div>
    </div>

@endsection