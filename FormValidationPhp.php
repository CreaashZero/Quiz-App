<?php 
if (isset($_POST['login'])) {
	//form submited
	if (isset($_POST['username']) && !empty($_POST['username'])) {
		echo 'Username is ' . $_POST['username'];
	} else {
		$errUsername = 'Enter Username';
	}
	// isset Checks Variable && !empty checks Value ( Nikesh )
}
if (isset($_POST['password']) && !empty($_POST['password'])) {
	echo 'Password is ' . $_POST['password'];
} 
else {
	$errpassword = 'Enter Password';
}
 ?>
}
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<!-- 
	1) "action" and "method" attribute inside form opening tag
		a) Action :  Define  location to submit form data (Where), default action is same page
		b) Method : Define your process to sending data to defined action (How) - HTTP Methods
			- post
			- get (default)
			- put/patch
			- delete
		2) Define "name" atrribute for each form element 

		3) Use $_POST or $_GET array to access form data
			- $_GET - for get method
			- $_POST - for post method
	 -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<label>Username</label>
	<input type="text" name="username" >
	<?php if (isset($errUsername)) {
		echo $errUsername;
	} ?>
	<br>
	<label>Password</label>
	<input type="password" name="password">
	<?php if(isset($errpassword)){
		echo $errpassword;
	}?>
	<br>
	<input type="submit" value="Login" name="login">
</form>
</body>
</html>