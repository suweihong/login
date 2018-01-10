<h3>verified 邮件验证成功 请输入密码</h3> 

<br>

<form action="/signup/verified" method="post">
	{{ csrf_field() }}
	<input type="text" name="password" placeholder="密码"><br><br>
	<button>提交</button>
</form>