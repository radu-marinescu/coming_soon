<?php

	if(isset($_GET['pass']) && $_GET['pass']=="1234"){
		if(setcookie('bypass', 'ba30c0fb7c5231638405ea403e2eb4f6b140c424', time()+86400, '/')){
			header('Location: ../');
			exit();
		}
	}


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta id='viewport' name="viewport" content="width=device-width, height=device-height">

		<title>Coming Soon</title>

		<link rel="stylesheet" type="text/css" href="resources/css/style.css">
	</head>

	<body>
		<a href="#">
			<img class="logo" src="resources/images/logo.png" alt="Your Logo">
		</a>
		<h1>Coming Soon</h1>
		<label id="count">Some text here</label>
		
	</body>

</html>
