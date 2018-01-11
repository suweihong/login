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
      <nav class="header">忘记密码</nav>
      <section class="content">
        <form class="" action="index.html" method="post">
          {{ csrf_field() }}
          <p>请输入邮件地址找回密码。</p>
          <div class="position">
            <label class="icon-envelope" for="email"></label>
            <input id="email" type="email" name="email" placeholder="请输入电子邮件地址">
          </div>
          <input type="submit" name="submit" value="提交">

        </form>
      </section>


      <script src="/js/jquery.js" charset="utf-8"></script>
      <script src="/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
