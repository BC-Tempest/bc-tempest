<?php
include 'config.php';	
$connect = mysqli_connect($host, $user, $pass, $base);
if (!$connect)
	die(mysqli_connect_error());
if(isset($_POST["submit"])) {
	extract($_POST);
	$query = mysqli_query($connect, "select * from users where username='$username'");
	$num = mysqli_num_rows($query);
	if ($num == 0) {
		mysqli_query($connect, "insert into users values (null, '$username', '$password', '$email', '$dname')");
	}
}
?>

<form method="post" action="login.php">
	<input type="text" name="username" placeholder="username" required>
	<input type="text" name="password" placeholder="password" required>
	<input type="email" name="email" placeholder="email" required>
	<input type="text" name="dname" placeholder="Display Name">
	<button type="submit" name="submit"> Submit </button>
</form>