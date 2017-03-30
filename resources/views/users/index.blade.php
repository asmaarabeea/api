<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Users</title>
</head>

<body>
	<div  class="col-md-6 col-md-offset-4">
		
			@foreach($users as $user)
			<ul>
			 <li>{{$user->name}}</li>
			 <li>{{$user->email}}</li>
			
<!-- 			<a href="{{URL('users')}}/{{$user->id}}" class="btn btn-danger">Delete User</a> -->
		<form action="{{URL('users')}}/{{$user->id}}" method="POST" >
		<input type="hidden" name="_method" value="DELETE">
		{{csrf_field() }}
		<button type="submit" value="Delete" class="btn btn-danger" >Delete User</button>
		</form>
			<a href="{{URL('users')}}/{{$user->id}}/edit" class="btn btn-info" >Edit User Info</a>
			<a href="{{URL('users')}}/{{$user->id}}" class="btn btn-info">Show User Info</a>
			
			
			</ul>
			
			
			@endforeach
		
		
	<a href="users/create" class="btn btn-success">Add New User</a>
	</div>
</body>
</html>