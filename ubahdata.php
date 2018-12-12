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
	<?php 
	include 'phpfunctions.php';
	$id = $_GET["id"];
	$query="SELECT * FROM mahasiswa WHERE id=$id";
	$hasil = mysqli_query($conn,$query);
	$mahasiswa = mysqli_fetch_assoc($hasil);
	?>
	<form action="" method="post" class="forminput" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $_GET["id"] ?>">
		<input type="hidden" name="fotoLama" value="<?= $mahasiswa["foto"] ?>">

		<label for="nim" class="lmhs">NIM</label>
		<input type="text" name="nim" id="nim" class="fmhs" value="<?= $mahasiswa["nim"] ?>" autocomplete="off"><br><br>

		<label for="nama" class="lmhs">Nama</label>
		<input type="text" name="nama" id="nama" class="fmhs" value="<?= $mahasiswa["nama"] ?>" autocomplete="off"><br><br>

		<label for="email" class="lmhs">Email</label>
		<input type="email" name="email" id="email" class="fmhs" value="<?= $mahasiswa["email"] ?>" autocomplete="off"><br><br>

		<label for="jurusan" class="lmhs">Jurusan</label>
		<input type="text" name="jurusan" id="jurusan" class="fmhs" value="<?= $mahasiswa["jurusan"] ?>" autocomplete="off"><br><br>

		<label for="foto" class="lmhs">Foto</label>
		<img src="img/<?= $mahasiswa["foto"] ?>" class="fotomhs"><br><br>
		<input type="file" name="foto" id="foto" class="fmhs"><br><br>

		<button type="submit" name="submitUbah" class="fmhs" onclick="return confirm('data akan diubah');">Ubah</button><br>
	</form>
</body>
</html>