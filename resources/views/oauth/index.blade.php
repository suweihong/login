<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ThaiEx</title>
    <link rel="stylesheet" href="/css/simple-line-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href={{asset('/css/lzlogin.css')}}>

  </head>
  <body>
    <div class="return">
      <a href="#"></a>
    </div>
      <nav class="header">登入</nav>
      <section class="content">
        <form class="" action="/oauth" method="post">
          {{ csrf_field() }}
          <div class="position">
            <label class="icon-envelope" for="email"></label>
            <input id="email" type="email" name="email" placeholder="请输入电子邮件地址">
          </div>
          <div class="position">
            <label class="icon-lock" for="password"></label>
            <input id="password" type="password" name="password" placeholder="请输入密码">
          </div>
          <input type="submit" name="submit" value="登入">
          <div class="others">
            <a class="" href="/forget">忘记密码？</a>
            <a class="right" href="/signup">立即注册</a>
          </div>
        </form>
      </section>


      <script src="/js/jquery.js" charset="utf-8"></script>
      <script src="/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
