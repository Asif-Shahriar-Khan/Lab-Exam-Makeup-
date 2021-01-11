<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>

	<h3>Profile</h3>
	<a href="{{route('home.index')}}">Go Home</a> |
    <a href="{{route('logout.index')}}">Logout</a>
	

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
            <td>User ID</td>
            <td>Password</td>
            <td>Confirm Password</td>
			<td>NAME</td>
			<td>USERTYPE</td>
			
		</tr>

        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            
                            <td>{{ $user->userid }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->confpass }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->type }}</td>
                            
                            <td>

                            </td>
                        </tr>
                    @endforeach
                                </tbody>
                            </table>

                            </body>
</html>