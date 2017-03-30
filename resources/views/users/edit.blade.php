<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Edit User Info</title>
<style type="text/css">
label{
color: red;
font-family: arial}

input {
	border: blue;
	border: groove;
}
h4{
color: maroon;
}
</style>

</head>

<body>
<div  class="col-md-4 col-md-offset-4 ">

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <h4>Edit User ->  {{$user->name}}</h4>
	<form action = "{{URL('users')}}/{{$user->id}}" method="Post" col-md-6 col-md-offset-6 >
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT" >
		<label class="form-control" col-md-6 col-md-offset-6>User Name</label>
		<input type="text" name="name" value="{{$user->name}}" class="form-group" ><br>
		
		<label class="form-control" col-md-6 col-md-offset-6>User Email</label>
		<input type="text" name="email"  value="{{$user->email}}" class="form-group" ><br>
		
		<label class="form-control" col-md-6 col-md-offset-6>User Password</label>
		<input type="text" name="password"  value="{{$user->password}}" class="form-group" ><br>
		
		<button type="submit" class="btn btn-info">Edit User</button><br>
	</form>
	</div>
</body>
</html>