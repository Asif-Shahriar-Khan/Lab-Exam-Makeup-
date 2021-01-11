<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
@csrf

	<h3>Welcome Home</h3>
    <a href="{{route('home.create')}}">Register</a> |
	<a href="{{route('user.show')}}">Profile</a> |
    <a href="{{route('home.changepass')}}">Change Password</a> |
    <a href="{{route('logout.index')}}">Logout</a> |
    
	


                            </body>
</html>