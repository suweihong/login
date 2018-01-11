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
      <nav class="header">邮件验证成功 请设置新密码</nav>
      <section class="content">
        <form class="" action="index.html" method="post">
          {{ csrf_field() }}
          <!-- <p>邮件验证成功 请设置新密码</p> -->
          <div class="position">
            <!-- <i class="icon-lock"></i> -->
            <label class="icon-lock" for="password"></label>
            <input id="password" type="password" name="password" placeholder="请输入新密码">
          </div>
          <input type="submit" name="submit" value="登入">

        </form>
      </section>


      <script src="/js/jquery.js" charset="utf-8"></script>
      <script src="/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
