<?php 
require 'phpfunctions.php';

session_start();
if(!$_SESSION["login"]){
	header("Location: login.php");
	exit;
}

if (isset($_GET["keyword"])) {
	setcookie('keyword',$_GET['keyword']);
	$totalData = count(cari($_GET["keyword"]));
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
	$mahasiswa = pGcari($_GET["keyword"],$dataAwal,$jmlDataPerHlm);
}
else{
	setcookie('keyword','',time()-3600);
}

// $keyword = $_GET['keyword'];

// $query = "SELECT * FROM mahasiswa 
// 			WHERE nim LIKE '%$keyword%'
// 			OR nama LIKE '%$keyword%'
// 			OR email LIKE '%$keyword%'
// 			OR jurusan LIKE '%$keyword%' ";

// $mahasiswa = query($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h4>
	<?php 
	if (isset($_GET['keyword']) && $totalData != 0):

	echo $totalData.' data ditemukan';
	endif;
	?>
	</h4>
	<?php if($mahasiswa!=null): ?>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Aksi</th>
		</tr>
		<?php $i=($idHlm * $jmlDataPerHlm - $jmlDataPerHlm)+1;
		foreach ($mahasiswa as $mhs): ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<img class="gbprofil" src="img/<?= $mhs["foto"]; ?>" width="70px">
			</td>
			<td><?= $mhs["nim"]; ?></td>
			<td><?= $mhs["nama"]; ?></td>
			<td><?= $mhs["email"]; ?></td>
			<td><?= $mhs["jurusan"]; ?></td>
			<td>
				<button class="tmblUbah" onclick="ubahData(<?= $mhs["id"]; ?>)">Ubah</button><br>
				<a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?');" class="tmblHapus">Hapus</a>
			</td>
		</tr>
		<?php $i++;
		endforeach; ?>
	</table>
	<?php else: ?>
		<h1 style="color:red;">Data tidak ditemukan</h1>
	<?php endif; 
		if(isset($_GET['keyword'])||isset($_COOKIE['keyword'])):?>
		<br>
		<?php if ($jmlHlm>1):?>
		<br>
		<div>
			<?php if($idHlm > 1): ?>
				<a href="?idHlmCr=<?= $idHlm-1; ?>" class="arrow">&laquo;</a>
			<?php else: ?>
				<span class="apgactive">&laquo;</span>
			<?php endif;
			for($i=1; $i <= $jmlHlm; $i++):
				if($idHlm == $i): ?>
					<span class="pgactive"><?= $i; ?></span>
				<?php else: ?>
					<a href="?idHlmCr=<?= $i; ?>"><?= $i; ?></a>
				<?php endif;
			endfor;
			if($idHlm < $jmlHlm): ?>
				<a href="?idHlmCr=<?= $idHlm+1; ?>" class="arrow">&raquo;</a>
			<?php else: ?>
				<span class="apgactive">&raquo;</span>
			<?php endif; ?>
		</div>
		<br><br>
		<?php endif; ?>
	<?php else: ?>
		<br>
		<?php if ($jmlHlm>1):?>
		<br>
		<div>
			<?php if($idHlm > 1): ?>
				<a href="?idHlm=<?= $idHlm-1; ?>" class="arrow">&laquo;</a>
			<?php else: ?>
				<span class="apgactive">&laquo;</span>
			<?php endif;
			for($i=1; $i <= $jmlHlm; $i++):
				if($idHlm == $i): ?>
					<span class="pgactive"><?= $i; ?></span>
				<?php else: ?>
					<a href="?idHlm=<?= $i; ?>"><?= $i; ?></a>
				<?php endif;
			endfor;
			if($idHlm < $jmlHlm): ?>
				<a href="?idHlm=<?= $idHlm+1; ?>" class="arrow">&raquo;</a>
			<?php else: ?>
				<span class="apgactive">&raquo;</span>
			<?php endif; ?>
		</div>
		<br>
		<?php endif; ?>
		<br>
	<?php endif; ?>
</body>
</html>