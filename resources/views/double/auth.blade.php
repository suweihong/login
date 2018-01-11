<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ThaiEx</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href={{asset('/css/lzlogin.css')}}>

  </head>
  <body>
    <div class="return">
      <a href="#"></a>
    </div>
      <nav class="header">双重验证</nav>
      <section class="content">
        <form class="" action="/double/auth" method="post">
          {{ csrf_field() }}
          <p>请输入由谷歌身份验证器生成的双重验证码</p>
          <input class="verify" type="text" maxlength="6" name="oneCode" placeholder="000000">
          <input type="submit" name="submit" value="验证">

        </form>
      </section>


      <script src="/js/jquery.js" charset="utf-8"></script>
      <script src="/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
