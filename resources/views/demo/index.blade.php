<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    
      <a class="navbar-brand" href="#">Blog</a>
    </div>

  </div><!-- /.container-fluid -->
</nav>


<div class="container-fluid">

  <a class="btn btn-primary" href="/articles/create">添加文章</a>
 @foreach ($users as $k => $v)

 <div class="panel panel-default">
  <div class="panel-body">
    {{$v['tite']}}
    <a href="/articles/{{$v['id']}}" class="btn btn-info">阅读</a>
    <a href="/articles/{{$v['id']}}/edit" class="btn btn-info">修改</a>

      <form action="/articles/{{$v['id']}}" method="post" style="display: inline-block;">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">删除</button>
        </form>
    </div>
    </div>
@endforeach

  <ul class="pagination">
  <li class="disabled"><span>«</span></li> 
  <li class="active"><span>1</span></li>
  <li><a href="#">2</a></li>
  <li><a href="#" rel="next">»</a></li>
  </ul>
 
</div>



<div class="panel-footer">
 <p class="text-muted">footer</p>
</div>
<style type="text/css">
.panel-footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #333;
}

</style>
</body>
</html>