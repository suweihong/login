<h3>forget</h3> 

<br>

<form action="/forget" method="post">
	{{ csrf_field() }}
	<input type="text" name="email" placeholder="电子邮箱"><br><br>
	<button>提交找回</button>
</form>