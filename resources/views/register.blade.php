<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
</head>
<body>
	
	
	<br>
	
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Register</legend>
			<table>

            <tr>
					<td>ID</td>
					<td><input type="text" name="id" value=""></td>
				</tr>
				
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>User type</td>
					<td><input type="text" name="type" value=""></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Sign Up"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		
</body>
</html>