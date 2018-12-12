<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="belajar web developing">
	<meta http-equiv="refresh" content="10000">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JavaScript</title>
	<link rel="stylesheet" type="text/css" href="belajarjs.css">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<script type="text/javascript" src="js/fungsi.js"></script>
</head>
<body>
	<header>
		Belajar JavaScript
		<img class="header" src="img/27066950_10210809377738479_5496545715207273510_n.jpg">
	</header>
	<nav>
		<ul class="nav">
			<a href="index.php">Operator</a>
			<a href="kondisi.php">Kondisi</a>
			<span class="navactive">Fungsi</span>
			<a href="login.php">PHP</a>
		</ul>
	</nav>
	<section>
		<article>
			<main>
				<h5>Konten Fungsi</h5>
				<script type="text/javascript" src="js/hfungsi.js"></script>
			</main>
			<br><br>
			<a href="whatsapp://send?text=Assalamu'alaikum...&phone=+6285252138976">Hubungi kami</a>
			<br><br>
			<br>
			<form class="komentar1" action="" method="post">
			<label for="name">Nama    :</label>
			<input type="text" name="nama" id="name" autocomplete="off">
			<br><br><!-- Kolom Komentar-->
			<textarea name="komentar" placeholder="Tulis komentar..." cols="30" rows="3"></textarea>
			<br><br>
			<button type="submit" name="submitKomentar">Submit</button>
			</form>

			<div class="komentar">
				<h3>Komentar</h3>

				<?php if(isset($_POST["submitKomentar"])): ?>
					<ul class="php">
					<li>
						<b><?= $_POST["nama"]?></b><br>
						<?= $_POST["komentar"]?>
					</li>
				</ul>
				<?php endif; ?>
			</div>
		</article>
		<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width slides/quotes -->
  <div class="mySlides">
    <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
    <p class="author">- John Keats</p>
  </div>

  <div class="mySlides">
    <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
    <p class="author">- Ernest Hemingway</p>
  </div>

  <div class="mySlides">
    <q>I have not failed. I've just found 10,000 ways that won't work.</q>
    <p class="author">- Thomas A. Edison</p>
  </div>

  <!-- Next/prev buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

	</section>
	<aside>
		<h5><c>Sidebar</c></h5>
			<div class="side">
			<img src="img/27066950_10210809377738479_5496545715207273510_n.jpg" alt="sufi">
			<br>Sufi<br>
		</div>
		<div class="side">
			<img src="img/12038108_1635194900072737_1070132190148511612_n.jpg" alt="takbir">
			<br>Takbir<br>
		</div>
		<br />
		<script type="text/javascript" src="js/timedate.js"></script>
	</aside>
	<br />
	<script type="text/javascript">
		document.write("<button onclick=\"topFunction()\" id=\"myBtn\" title=\"Go to top\">\/\\</button>");
		window.onscroll = function() {scrollFunction()};
	</script>
</body>
</html>
