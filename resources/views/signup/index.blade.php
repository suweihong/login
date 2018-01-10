<h3>signup</h3> 

<br>

<form action="/signup" method="post">
	{{ csrf_field() }}
	<input type="text" name="email" placeholder="电子邮箱"><br><br>
	<button>提交注册</button>
</form>