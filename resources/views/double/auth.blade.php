<h3>double auth</h3> 

<br>

<form action="/double/auth" method="post">
	{{ csrf_field() }}
	<input type="text" name="code" placeholder="000000"><br><br>
	<button>提交</button>
</form>