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
		mysqli_query($connect, "insert into users values (null, '$username', '$name', null, '$password', '$email', 1, null)");
	}
}
?>

<form method="post" action="login.php">
	<input type="text" name="username" placeholder="username" required>
		<input type="text" name="name" placeholder="Display Name">
	<input type="text" name="password" placeholder="password" required>
	<input type="email" name="email" placeholder="email" required>
	<button type="submit" name="submit"> Submit </button>
</form>