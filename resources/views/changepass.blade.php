<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
	
	
	<br>
	
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Change Password</legend>
			<table>

            
				<tr>
					<td>Current Password</td>
					<td><input type="password" name="password" value=></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="text" name="password" value=""></td>
				</tr>
				<tr>
					<td>Re-Type New Password</td>
					<td><input type="text" name="password" value=""></td>
				</tr>
				
				
					<td></td>
					<td><input type="submit" name="submit" value="Change"></td>
				</tr>
                <a href="{{route('home.index')}}">Home</a> 
			</table>
			</fieldset>
		</form>

		
</body>
</html>