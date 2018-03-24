<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
</head>
<body>

	<ul>
	@foreach($employees as $employee)
		<li>{{ $employee->name }}</li>
	@endforeach
	</ul>

	<br><hr><br>

	<ul>
	@foreach($clients as $client)
		<li>{{ $client->name }}</li>
	@endforeach
	</ul>

</body>
</html>