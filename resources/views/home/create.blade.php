<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>
	
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Create User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Cgpa</td>
					<td><input type="text" name="cgpa" value="{{old('cgpa')}}"></td>
				</tr>
				<tr>
					<td>dept</td>
					<td><input type="text" name="dept" value="{{old('dept')}}"></td>
				</tr>
				<tr>
					<td>type</td>
					<td><input type="text" name="type" value="{{old('type')}}"></td>
				</tr>
				<tr>
					<td>Photo</td>
					<td><input type="file" value="{{old('type')}}" name="myimg"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>