<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Add New User</title>
<style type="text/css">
label{
color: red;
font-family: arial}

input {
	border: blue;
	border: groove;
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

	<form action = "{{URL('users')}}" method="Post" col-md-6 col-md-offset-6 >
		{{ csrf_field() }}
		<label class="form-control" col-md-6 col-md-offset-6>User Name</label>
		<input type="text" name="name" class="form-group" placeholder="Enter Your Name"><br>
		
		<label class="form-control" col-md-6 col-md-offset-6>User Email</label>
		<input type="text" name="email" class="form-group" placeholder="Enter Your email" ><br>
		
		<label class="form-control" col-md-6 col-md-offset-6>User Password</label>
		<input type="text" name="password" class="form-group" placeholder="Enter Your password"><br>
		
		<button type="submit" class="btn btn-success ">Add User</button><br>
	</form>
	</div>
</body>
</html>