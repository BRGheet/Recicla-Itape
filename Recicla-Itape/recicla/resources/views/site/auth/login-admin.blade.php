<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Login Admin</h1>
	<form method="POST" action="{{url('/admin/login')}}">
		{!!csrf_field()!!}
		<input type="text" placeholder="email" type="email" name="email"><br>
		<input type="text" placeholder="senha" type="password" name="password">
		<input type="submit">
	</form>
</body>
</html>