<?php 
session_start();
if(!$_SESSION["login"]){
	header("Location: login.php");
	exit;
}

require 'phpfunctions.php';

$id = $_GET["id"];

hapusFoto($id);

if(hapus($id) > 0){

	echo "
		<script>
			alert(\"Data berhasil dihapus!\");
			document.location.href = \"php.php\";
		</script>
		";
}
else{
	echo "<h4 style=\"color: red;\">Data tidak berhasil dihapus!</h4>";
	echo "<div style=\"color: red;\">";
	echo mysqli_error($conn); 
	echo "</div>";
}