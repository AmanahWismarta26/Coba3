<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post</title>
</head>
<body>
<form action="/post" method="POST">
		@csrf 
		
	<input type="text" name="title" placeholder="title">
	<input type="text" name="description" placeholder="description">

	<button type="submit">submit</button>
	</form>
</body>
</html>