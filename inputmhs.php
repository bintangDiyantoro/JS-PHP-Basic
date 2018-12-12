<?php 
session_start();
if(!$_SESSION["login"]){
	header("Location: login.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input data mahasiswa</title>
</head>
<body>
	<br>
	<form action="" method="post" class="forminput" enctype="multipart/form-data">
		<label for="nim" class="lmhs">NIM</label>
		<input type="text" name="nim" id="nim" class="fmhs" autocomplete="off" required><br><br>
		<label for="nama" class="lmhs">Nama</label>
		<input type="text" name="nama" id="nama" class="fmhs" autocomplete="off" required><br><br>
		<label for="email" class="lmhs">Email</label>
		<input type="email" name="email" id="email" class="fmhs" autocomplete="off" required><br><br>
		<label for="jurusan" class="lmhs">Jurusan</label>
		<input type="text" name="jurusan" id="jurusan" class="fmhs" autocomplete="off" required><br><br>
		<label for="foto" class="lmhs">Foto</label>
		<input type="file" name="foto" id="foto" class="fmhs2"><br><br>
		<button type="submit" name="submit" class="fmhs">Tambah</button><br>
	</form>
</body>
</html>