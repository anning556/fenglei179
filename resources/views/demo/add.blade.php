<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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

	
<div class="container-fluid" style="width: 700px">
  <form method="post" action="/articles">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-9">
      <input type="title" class="form-control" id="title" name="title">
    </div>
  </div>
<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#editTab" aria-controls="editTab" role="tab" data-toggle="tab">编辑</a></li>
    <li role="presentation"><a href="#previewTab" aria-controls="previewTab" role="tab" data-toggle="tab" id="previewButton">阅览</a></li>
  </ul>
​
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="editTab">
        <textarea class="z-textarea" name="content" rows="20" style="width:100%;"></textarea>
    </div>
    <div role="tabpanel" class="tab-pane" id="previewTab">
        <div class="z-textarea-preview markdown">
            Preview
        </div>
    </div>
</div>  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">创建</button>
    </div>
  </div>
</form>
</div>
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
<script type="text/javascript">
// csrf token
$.ajaxSetup({
    headers: {'X-CSRF-TOKEN':'{{ csrf_token() }}'}
});
//Markdown AJAX ??
$('#previewButton').click(function (){
    //console.log($('.z-textarea').val())
    $('.z-textarea-preview').html('loading...');
    //AJAX ??
    $.ajax({
        url: "/markdown",
        type: "post",
        data: {
            content:$('.z-textarea').val()
        },
        success: function(res){
            //console.log(res);
            $('.z-textarea-preview').html(res);
        },
        error: function(err){
            console.log(err.responseText);
        }
    });
})
</script>
</body>
</html>