<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="post">
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<fieldset>
			<legend>Login</legend>
		<table>
			<tr>
				<td>User ID</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
                <a href="{{route('home.create')}}">Register</a>
			</tr>
		</table>
		</fieldset>

		<h3 style="color: red">
			{{session('msg')}}
		</h3>
	</form>
</body>
</html>