<?php 
include 'phpfunctions.php';

if(isset($_POST["register"])){
	// registrasi($_POST);
	if(registrasi($_POST) > 0){
		echo "
		<script>
			alert('Selamat! Anda telah terdaftar!');
		</script>
		";
	}
	else{
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>regform</title>
</head>
<body>
	<form action="" method="post" class="regform">
		<label for="username" class="lmhs">Username</label>
		<input type="text" name="username" id="username" autocomplete="off" class="fmhs"></input><br><br>
		<label for="password" class="lmhs">Password</label>
		<input type="password" name="password" id="password" autocomplete="off" class="fmhs"></input><br><br>
		<label for="password2" class="lmhs">Ulangi password</label>
		<input type="password" name="password2" id="password2" autocomplete="off" class="fmhs"></input><br><br>
		<button type="submit" name="register" class="fmhs">Daftar</button><br>
	</form>
</body>
</html>