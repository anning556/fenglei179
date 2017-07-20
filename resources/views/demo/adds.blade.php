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
 @foreach ($users as $k => $v)
    <form method="post" action="/articles/{{$v['id']}}">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-9">
      <input type="title" class="form-control" id="title" name="title" value="{{$v['tite']}}">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-9">
       <textarea class="form-control" rows="5" id="content" name="content">{{$v['neirong']}}</textarea>
    </div>
  </div>
   
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <!--修改-->
      <input type="hidden" name="_method" value="PUT">
      <button type="submit" class="btn btn-default">修改</button>
    </div>
  </div>
</form>
@endforeach

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