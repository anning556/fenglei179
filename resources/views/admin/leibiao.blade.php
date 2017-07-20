<!-- $Id: goods_list.htm 17126 2010-04-23 10:30:26Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>商之翼 管理中心 - 文章列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/admins/css/general.css" rel="stylesheet" type="text/css">
<link href="/admins/css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/admins/js/jquery-1.js"></script><script type="text/javascript" src="/admins/js/jquery_002.js"></script><script type="text/javascript" src="/admins/js/transport.js"></script><script type="text/javascript" src="/admins/js/common.js"></script><script language="JavaScript">
</script>
<style>
	
	.pagination {
	    float: right;
	    padding: 0;
	    margin: 0;
	    list-style: none;
	    height: 30px;
	}

	.pagination li {
	    float: left;
	    width: 30px;
	    height: 30px;
	    background: #fff;
	    text-align: center;
	    margin-right: 5px;
	    border-radius: 5px
	}

	.pagination li a {
	    display: inline-block;
	    width: 30px;
	    height: 30px;
	    text-align: center;
	    line-height: 28px;
	    color: #666;
	    font-size: 12px;
	    border-radius: 5px
	}
</style>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://192.168.179.160/admin/index.php?act=main">商之翼 管理中心</a> </span><span id="search_id" class="action-span1"> - 文章列表 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="/admins/js/utils.js"></script><script type="text/javascript" src="/admins/js/listtable.js"></script>
<!-- 商品搜索 -->
<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<link href="/admins/css/zTreeStyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/admins/js/jquery.js"></script><script type="text/javascript" src="/admins/js/category_selecter.js"></script><div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
    <img src="/admins/images/icon_search.gif" alt="SEARCH" width="26" height="22" border="0">

 
    关键字 <input name="keyword" size="15" type="text">
    <input value=" 搜索 " class="button" type="submit">
  </form>
</div>


<script language="JavaScript">
    function searchGoods()
    {

                listTable.filter['cat_id'] = document.forms['searchForm'].elements['cat_id'].value;
        listTable.filter['brand_id'] = document.forms['searchForm'].elements['brand_id'].value;
		                    listTable.filter['suppliers_id'] = document.forms['searchForm'].elements['suppliers_id'].value;
		  /* 代码增加_start  By  www.68ecshop.com */
		listTable.filter['supplier_status'] = document.forms['searchForm'].elements['supplier_status'].value;
		/* 代码增加_end  By  www.68ecshop.com */
                  listTable.filter['is_on_sale'] = document.forms['searchForm'].elements['is_on_sale'].value;
        
        listTable.filter['keyword'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
		
        listTable.filter['page'] = 1;

        listTable.loadList();
    }
</script>

      <script type="text/javascript">
	$().ready(function(){
		// $("#cat_name")为获取分类名称的jQuery对象，可根据实际情况修改
		// $("#cat_id")为获取分类ID的jQuery对象，可根据实际情况修改
		// ""为被选中的商品分类编号，无则设置为null或者不写此参数或者为空字符串
		$.ajaxCategorySelecter($("#cat_name"), $("#cat_id"), "");
	});
</script><!-- 商品列表 -->
  <!-- start goods list -->
<div class="list-div" id="listDiv">
<table cellspacing="1" cellpadding="3">
 	<tbody>
		@foreach ($users as $k => $v)
	 	<tr>
			<th><h1>{{$v['tite']}}</h1></th>
		</tr>
		<tr>
		    <th><div style="height: 100px">{{$v['neirong']}}</div></th>
	    </tr>
		<tr>
	    	<th>
	    		<form action="{{ route('blog.destroy', $article‐>id) }}" method="post" style="display: inlineblock;">
	    			{{ csrf_field() }}             
	    			{{ method_field('DELETE') }}             
	    			<button type="submit" class="btn btn‐danger">删除</button>         
	    		</form>
	    	 | <a href="">修改</a></th>
		</tr>
		@endforeach
		<tr>
		    <th><a href="/wenzhang/create">添加新文章</a></th>
	    </tr>
  </tbody>
</table>
</div>

</body></html>