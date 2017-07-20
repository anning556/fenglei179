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
	
	<link rel="stylesheet" type="text/css" href="/admins/class/base.css">
	<link rel="stylesheet" type="text/css" href="/admins/class/font.min.css">
</head>
<body>
    <div class="i-con">
        <div class="box i-row">
		    <div class="i-col-12">
			    <ul class="con-nav">
					<li class="on"><a href="/admins/class/nav-1.html" ></a></li>
					<li><a href="#" >导航分类</a></li>
				</ul>
				<div class="box-con">
				    <div class="box-btn">
						<a class="btn btn-add" href="/class/addnav" >添加分类</a>
					</div>
					<div class="table-con">
					    <table class="table">
							<thead>
								<tr>
									<th>序号</th>
									<th>名称</th>
									<th style="width: 400px">操作</th>
								</tr>
							</thead>
							
							<tbody id="id">
 							@foreach ($users as $k => $v)
								
								<form action="/class/nawaddnav" method="post">
								<tr>
									<td class="text-ctr">{{$v['id']}}</td>
									<td>|{{str_repeat('-',strlen($v['uid']))}}|{{$v['name']}}</td>
									
									<td>
									<input type="hidden" name="id" value="{{$v['id']}}">
									<button class="btn btn-add" type="submit">添加子分类</button>
									</td>
								</tr>
								</form>
							@endforeach
							</tbody>
							
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="/admins/class/jquery.min.js"></script>
	<script type="text/javascript" src="/admins/class/ai.js" </script>
</body>
</html>