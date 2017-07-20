<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- 重置文件 -->
  <link rel="stylesheet" href="zhuces/css/normalize.css">
  <link rel="stylesheet" href="zhuces/css/style.css">
  <title>注册表</title>
</head>
<body><script src="zhuces/demos/googlegg.js"></script>
  <div class="reg_div">
    <p>注册</p>
    <form method="POST" action="/zhuce">
    {!! csrf_field() !!}
    <ul class="reg_ul">
      <li>
          <span>用户名：</span>
          <input type="text" name="name" value="{{ old('name') }}" placeholder="4-8位用户名" class="reg_user">
          <span class="tip user_hint"></span>
      </li>
      <li>
          <span>密码：</span>
          <input type="password" name="password" value="{{ old('password') }}" placeholder="6-16位密码" class="reg_password">
          <span class="tip password_hint"></span>
      </li>
      <li>
          <span>确认密码：</span>
          <input type="password" name="passwds" value="" placeholder="确认密码" class="reg_confirm">
          <span class="tip confirm_hint"></span>
      </li>
      <li>
          <span>邮箱：</span>
          <input type="text" name="email" value="{{ old('email') }}" placeholder="邮箱" class="reg_email">
          <span class="tip email_hint"></span>
      </li>
      <li>
        <button type="input" name="submint" class="red_button">注册</button>
      </li>
    </ul>
</form>
  </div>
  
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
 
 <div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">

</div>
</body>
</html>

