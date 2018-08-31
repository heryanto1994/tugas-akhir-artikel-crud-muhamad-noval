<?php
$title="login";
$error=null;
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$passwd = $_POST['password'];
	$sql = "SELECT * FROM login WHERE username='{$user}' AND password='{$passwd}'";
	$result = mysqli_query($conn, $sql);
	if ($result && $result->num_rows > 0) {
		session_start();
		$_SESSION['islogin'] = 1;
		header('location: index.php');
	} else
		$error = "Ussername atau Password Salah";
	}

	include_once 'header.php';?>
	<div id="login">
		<h2>Login Form</h2>
		<form action = "" method = "post">
			<label>Username :</label>
			<input id="name" name="username" placeholder="username" type="text">
			<br>
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			<br>
			<input name="submit" type="submit" value="Login">
			<span><?php echo $error;?></span>
		</form>
	</div>
	<?php include_once 'footer.php';?>