<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Show specific User Information</title>
<style type="text/css">
label{
color: red;
font-family: arial}
li{
color: maroon;
font-family: arial}
h4{
color:buttonface;}
</style>

</head>
<body>
	<div  class="col-md-6 col-md-offset-4">
	<h4>Show specific User Information</h4>
		<ul>
		<label>#</label>
		<li>{{$user->id}}</li>
		<label>Name</label>
		<li>{{$user->name}}</li>
		<label>Email</label>
		<li>{{$user->email}}</li>
		<label>Password</label>
		<li>{{$user->password}}</li>
		<label>Created_at</label>
		<li>{{$user->created_at}}</li>
		<label>Updated_at</label>
		<li>{{$user->updated_at}}</li>
		
		</ul>
	</div>
</body>
</html>