<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
	
	<title>AI+ 主题模板</title>
    <meta name="keywords" content="AI+ 主题模板"/>
    <meta name="description" content="AI+ 主题模板"/>
	
	<link rel="stylesheet" type="text/css" href="/admins/class/base.css" >
	<link rel="stylesheet" type="text/css" href="/admins/class/font.min.css">
</head>
<body>
    <div class="i-con">
        <div class="box i-row">
		    <div class="i-col-12">
			    <ul class="con-nav">
					<li class="on"><a href="javascript:void(0);">添加分类</a></li>
					
				</ul>
				<div class="box-con">
					<form class="form" method="post" action="/class/addnav">
					@if(isset($users)) 
					@foreach ($users as $k => $v)
						<div class="form-group">
							<div class="form-title">分类：</div>
							<div class="form-con i-col-3">
								<input class="form-control" name="fname" type="text" value="{{$v['name']}}" readonly>
								<input type="hidden" name="uid" value="{{$v['uid']}},{{$v['id']}}">
							</div>
						</div>
					@endforeach
					@else
						<input type="hidden" name="uid" value="0">
						<input type="hidden" name="fname" value="">
					@endif
						<div class="form-group">
							<div class="form-title">类名：</div>
							<div class="form-con i-col-3">
								<input class="form-control" id="cname" name="name" type="text" value="">
							</div>
						</div>
						
						<div class="form-submit">
						    <button class="btn btn-submit" type="submit">提交</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="/admins/class/jquery.min.js"></script>
	<script type="text/javascript" src="/admins/class/ai.js"></script>
</body>
</html>