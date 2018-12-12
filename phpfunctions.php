<?php 
//koneksi database
$conn = mysqli_connect("localhost", "najmuddin", "stonehe4ded", "mahasiswadb");


//------------------------------------CREATE--------------------------------------
function tambah(){
	global $conn;
	$nim = filter_var(strtr($_POST["nim"],[' '=>'']), FILTER_SANITIZE_STRING);
	$nama = filter_var($_POST["nama"],FILTER_SANITIZE_STRING);
	$email = $_POST["email"];
	$jurusan = filter_var($_POST["jurusan"], FILTER_SANITIZE_STRING);
	$foto = uploadFoto();

	if(!$foto){
		echo "
		<script>
			alert(\"Data gagal ditambahkan!\");
		</script>
		";
		return false;
	}
	// var_dump($_POST);
	// echo "<br>";
	// var_dump($_FILES); die;


	$query = "INSERT INTO mahasiswa(nim,nama,email,jurusan,foto) 
			VALUES('$nim','$nama','$email','$jurusan','$foto')";


	if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
		mysqli_query($conn,$query);
		if (mysqli_affected_rows($conn) > 0) {
			echo "
			<script>
				alert(\"Data berhasil ditambahkan!\");
				document.location.href = \"php.php\";
			</script>
			";
		}
		else{
			// echo "<h4 style=\"color: red;\">Data tidak berhasil ditambahkan!</h4>";
			echo "
			<script>
				alert(\"Data tidak berhasil ditambahkan!\");
			</script>
			";
			echo "<div style=\"color: red;\">";
			echo mysqli_error($conn); 
			echo "</div>";
		}
	}
	else{
		echo "
		<script>
		alert('Email tidak valid!');
		</script>
		";
	}
}

if(isset($_POST["submit"])){
	tambah();
}

//------------------------------------UPLOAD--------------------------------------
function uploadFoto(){
	$namaFoto = $_FILES["foto"]["name"];
	$ukuranFoto = $_FILES["foto"]["size"];
	$error = $_FILES["foto"]["error"];
	$namaFotoSementara = $_FILES["foto"]["tmp_name"];
	$ekstensiFotoValid = ["jpg","jpeg","png","bmp"];

	//prosedur validasi foto sudah diupload
	if($error === 4){
		echo "
		<script>
			alert(\"Pilih foto terlebih dahulu!\");
		</script>
		";
		return false;
	}

	//prosedur validasi format foto
	$ekstensiFoto = strtolower(end(explode('.', $namaFoto)));
	if(!in_array($ekstensiFoto, $ekstensiFotoValid)){
		echo "
		<script>
			alert(\"Yang anda upload bukan gambar!\");
		</script>
		";
		return false;
	}

	//prosedur validasi ukuran foto (byte)
	if($error === 1 /* || $ukuranFoto > 2000000 */){
		echo "
		<script>
			alert(\"Ukuran foto maksimal 2 Mb\");
		</script>
		";
		return false;
	}

	//prosedur upload foto
	//generate nama foto baru
	$namaFotoBaru = uniqid().'.'.$ekstensiFoto;
	// var_dump($namaFotoBaru); die;
	move_uploaded_file($namaFotoSementara, 'img/'. $namaFotoBaru);

	return $namaFotoBaru;
}

//------------------------------------READ----------------------------------------
function query($perintahSql){
	global $conn;
	$result = mysqli_query($conn, $perintahSql);
	// $wadah = [];
	while ($isi = mysqli_fetch_assoc($result)) {
		//wadahnya diisi
		$wadah[] = $isi;
	}
	return $wadah;
}


//------------------------------------UPDATE--------------------------------------
function ubah(){
	global $conn;
	$id = $_POST["id"];
	$nim = filter_var(strtr($_POST["nim"],[' '=>'']), FILTER_SANITIZE_STRING);
	$nama = filter_var($_POST["nama"], FILTER_SANITIZE_STRING);
	$email = $_POST["email"];
	$jurusan = filter_var($_POST["jurusan"], FILTER_SANITIZE_STRING);
	$fotoLama = $_POST["fotoLama"];

	if ($_FILES["foto"]["error"] === 4) {
		$foto = $fotoLama;
	}
	else{
		hapusFoto($id);
		$foto = uploadFoto();
	}

	$query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', email = '$email', jurusan = '$jurusan', foto = '$foto' WHERE id = $id";

	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == true) {
		mysqli_query($conn,$query);
		if (mysqli_affected_rows($conn) > 0) {
			echo "
			<script>
				alert(\"Data berhasil diubah!\");
				document.location.href = \"php.php\";
			</script>
			";
		}
		else{
			echo "<h4 style=\"color: red;\">Data tidak berhasil diubah!</h4>";
			echo "<div style=\"color: red;\">";
			echo mysqli_error($conn); 
			echo "</div>";
		}
	}
	else{
		echo "
		<script>
		alert('Email tidak valid!');
		</script>
		";
	}
}

if(isset($_POST["submitUbah"])){
	ubah();
	// echo "data akan diubah";
}


//------------------------------------DELETE--------------------------------------
function hapusFoto($fileFoto){
	global $conn;
	$query = mysqli_query($conn, "SELECT foto FROM mahasiswa WHERE id = $fileFoto");
	$tampil = mysqli_fetch_assoc($query);
	$foto = $tampil["foto"];
	unlink('img/'.$foto);
}

function hapus($data){
	global $conn;
	mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $data");
	return mysqli_affected_rows($conn);
}

//-----------------------------------SEARCHING------------------------------------
function cari($keyword){
	// global $conn;
	$query = "SELECT * FROM mahasiswa 
			WHERE nim LIKE '%$keyword%'
			OR nama LIKE '%$keyword%'
			OR email LIKE '%$keyword%'
			OR jurusan LIKE '%$keyword%' ";
	// mysqli_query($conn,$query);
	return query($query);
}

function pgCari($keyword,$awalData,$jmlDataPerHlm){
	// global $conn;
	$query = "SELECT * FROM mahasiswa 
			WHERE nim LIKE '%$keyword%'
			OR nama LIKE '%$keyword%'
			OR email LIKE '%$keyword%'
			OR jurusan LIKE '%$keyword%' 
			LIMIT $awalData, $jmlDataPerHlm ";
	// mysqli_query($conn,$query);
	return query($query);
}

//------------------------------------REGISTRASI----------------------------------
function registrasi($data){
	global $conn;
	
	$username = filter_var(strtolower(stripslashes($data["username"])), FILTER_SANITIZE_STRING);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	
	//cek ketersediaan username
	$cekusername = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
	if(mysqli_fetch_assoc($cekusername)){
		echo 
		"<script>
				alert('Username sudah ada!');
		</script>";
		return false;
	}

	//validasi kesamaan password
	if ($password !== $password2) {
		echo 
		"<script>
				alert('Password tidak sama!');
		</script>";
		return false;
	}
	//enkripsi password
	$password =  password_hash($password, PASSWORD_DEFAULT);

	//masukkan data
	mysqli_query($conn, "INSERT INTO user(username,password) VALUES('$username','$password')");

	return mysqli_affected_rows($conn);
}

//------------------------------------PAGINATION----------------------------------
$jmlDataPerHlm = 5;
$totalData = count(query("SELECT * FROM mahasiswa"));
$jmlHlm = ceil($totalData / $jmlDataPerHlm);
// $idHlm = (!isset($_GET["idHlm"]) || $_GET["idHlm"] < 1) 1 : $_GET["idHlm"];
if(!isset($_GET["idHlm"]) || $_GET["idHlm"] < 2){
	$idHlm = 1;
}
else if ($_GET["idHlm"] > $jmlHlm) {
	$idHlm = $jmlHlm;
}
else{
	$idHlm = $_GET["idHlm"];
}

$dataAwal = $idHlm * $jmlDataPerHlm - $jmlDataPerHlm;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $dataAwal,$jmlDataPerHlm");


if (isset($_POST["keyword"])) {
	setcookie('keyword',$_POST['keyword']);
	$totalData = count(cari($_POST["keyword"]));
	$jmlHlm = ceil($totalData/$jmlDataPerHlm);
	if(!isset($_GET["idHlm"]) || $_GET["idHlm"] < 2){
		$idHlm = 1;
	}
	else if ($_GET["idHlm"] > $jmlHlm) {
		$idHlm = $jmlHlm;
	}
	else{
		$idHlm = $_GET["idHlm"];
	}
	$dataAwal = $idHlm * $jmlDataPerHlm - $jmlDataPerHlm;
	$mahasiswa = pGcari($_POST["keyword"],$dataAwal,$jmlDataPerHlm);
}
elseif (isset($_COOKIE['keyword'])) {
	$totalData = count(cari($_COOKIE["keyword"]));
	$jmlHlm = ceil($totalData/$jmlDataPerHlm);
	if(!isset($_GET["idHlmCr"]) || $_GET["idHlmCr"] < 2){
		$idHlm = 1;
	}
	else if ($_GET["idHlmCr"] > $jmlHlm) {
		$idHlm = $jmlHlm;
	}
	else{
		$idHlm = $_GET["idHlmCr"];
	}
	$dataAwal = $idHlm * $jmlDataPerHlm - $jmlDataPerHlm;
	$mahasiswa = pGcari($_COOKIE["keyword"],$dataAwal,$jmlDataPerHlm);
}