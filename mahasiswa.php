<?php
// require 'phpfunctions.php';
include 'phpfunctions.php';
session_start();
if(!$_SESSION["login"]){
	header("Location: login.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<form action="" method="post">
		<input type="text" name="keyword" id="klmCari" autofocus="" autocomplete="off" size="30" placeholder="Masukkan keyword pencarian" value="">
		<button type="submit" name="cari">Cari</button>
	</form>
	<h4>
	<?php 
	if (isset($_POST['keyword']) || isset($_COOKIE['keyword'])):
	echo $totalData.' data ditemukan';
	endif;
	?>
	</h4>
	<?php if($mahasiswa!=null): ?>
	<div id="kontenData">
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
	<div style="right: 40%;">
		<br><br>
		
	</div>
	<?php else: ?>
		<h1 style="color:red;">Data tidak ditemukan</h1>
		<br><br>
		<a href="refresh.php">Tampilkan semua data</a>
		<br>
	<?php endif; 
		if(isset($_POST['keyword'])||isset($_COOKIE['keyword'])):?>
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
		<a href="refresh.php">Tampilkan semua data</a>
		<br>
		<br>
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
	</div>
	<button id="ajax-input">Tambah data mahasiswa</button>
</body>
</html>