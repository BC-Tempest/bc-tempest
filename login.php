<?php
include 'config.php';
$connect = mysqli_connect($host, $user, $pass, $base);
if (!$connect)
	die(mysqli_connect_error());
if(isset($_POST["submit"])) {
	extract($_POST);
	$query = mysqli_query($connect, "select * from users where username='$username' AND password='$password'");
	$num = mysqli_num_rows($query);
	if ($num == 0) {
		echo "Incorrect Username or Password";
	}	else { 	
			echo "you have logged in";
	}
}
?>
<form method="post" action="home.php">
<input type="text" name="username" placeholder="username" required>
<input type="text" name="password" placeholder="password" required>
<button type="submit" name="submit"> Submit </button>
</form>
