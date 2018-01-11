<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ThaiEx</title>
    <link rel="stylesheet" href="/css/simple-line-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/lzlogin.css">

  </head>
  <body>
    <div class="return">
      <a href="#"></a>
    </div>
      <nav class="header">设置密码</nav>
      <section class="content">
        <form class="" action="/signup/verified" method="post">
          {{ csrf_field() }}
          <p>您已经通过验证，请设置登录密码。</p>
          <div class="position">
            <label class="icon-lock" for="password"></label>
            <input id="password" type="password" name="password" placeholder="请输入密码">
          </div>
          <input type="hidden" value="toke">
          <input type="submit" name="submit" value="登入">
        </form>
      </section>


      <script src="/js/jquery.js" charset="utf-8"></script>
      <script src="/js/bootstrap.min.js" charset="utf-8"></script>
      <script>
        console.log(window.localhost);
      </script>
  </body>
</html>
