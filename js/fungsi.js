function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function os(){
	var uio = document.getElementsByTagName("main")[0];
	var st = uio.scrollTop;
	console.log(st);
}

// ---------------------------------------------------------------------------------
let slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length || n == 0) {slideIndex = 1} 
  	if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
// ------------------------------------------------------------------------------
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// ------------------------------------------------------------------------------
function logical()
{
	let jawaban = prompt("          Jujurlah, \nBerapa usia anda?", "");
	if (jawaban > 12 && jawaban < 20)
	{
		alert("Anda masih remaja");
	}
	else if (jawaban <= 12 && jawaban > 5)
	{
		alert("Anda masih anak-anak");
	}
	else if (jawaban <= 5) 
	{
		alert("Anda masih balita tapi kok bisa nyampek sini? \nHayo ketahuan bo'ong!!!");
	}
	else{
		alert("Anda sudah tidak muda lagi");
	}
}

function kondisi()
{
	let usia = prompt("Berapa usia anda? ", "");
	let harga = (usia>5) ? 7000:0;
	alert("Anda perlu membayar Rp. " + harga );
}

function konversi()
{
	let angka1 = prompt("Masukkan sebuah angka: ","");
	let angka2 = prompt("Masukkan angka lain: ","");
	let hasil = Number(angka1)+Number(angka2);
	//let hasil = angka1 + angka2;
	//mengkonversi string menjadi angka
	alert("Hasilnya adalah: " + hasil);

	var stringKu=string(angka1);
	hasil=stringKu + 200; //menjadikan angka1 sebagai string, string + Angka adalah string
	alert("Hasilnya adalah: " + hasil + "\ndan tipe datanyya adalah " + typeof(hasil)); //menyambung 200 dengan hasil; menampilkan 20200
	alert("Hasil boolean adalah: " + boolean(angka2)); //menjadikan angka2 sebagai boolean dan menampilkan true
}

function fparseint()
{
	let a = prompt("Masukkan nilai a: ","");
	let b = prompt("Masukkan nilai b: ","");
	hasil = parseInt(a,b);
	alert("Hasilnya adalah: " + hasil + "\ndan tipe datanya adalah " + typeof(hasil));
}

function fparsefloat()
{
	let a = prompt("Masukkan nilai a: ","");
	let b = prompt("Masukkan nilai b: ","");
	hasil = parseFloat(a,b);
	alert("Hasilnya adalah: " + hasil + "\ndan tipe datanya adalah " + typeof(hasil));
}

function feval()
{
	let str = "5 + 4";
	angka1 = eval(str); 
	angka2 = eval(prompt("Berikan satu angka: ","")); //prompt selalu menghasilkan nilai string, eval() mengkonversi menjadi angka jika nilai di dalam string berupa angka
	alert(angka1+angka2);
}

function suhu()
{
	let cel=prompt("Masukkan nilai celcius", "")
	let fah= 1.8 * parseInt(cel) + 32;
	alert(parseInt(cel) + " celcius = " + parseFloat(fah) + " fahrenheit");
}

//------------------------------- Batas bab operator -----------------------------------//

function fswitch()
{
	let jamkerja = prompt("Masukkan hari kerja: ", "");
	switch(jamkerja)
	{
		case "senin":
		case "selasa":
		case "rabu":
		case "kamis":
		alert("Jam kerja: 08.00 - 16.00");
		break;
		case "jumat":
		alert("Jam kerja: 08.00 - 10.30");
		break;
		case "sabtu":
		alert("Jam kerja: 08.00 - 13.00");
		break;
		default:
		alert("libur");
	}
}

function controlbreakandcontinue(){
while(true){
let nilai=eval(prompt("Berapa nilai anda: ", ""));
if(nilai<=0 || nilai >100)
{
	alert("Anda ngawur!!!");
	continue;
}
else{
	alert("Good joob!");
}
break;
}
}

//Fungsi Return
function f1(){

function akhir(r, s){
	alert("Hasil penjumlannya adalah "+ r + "\ndan penjumlahan kedua operasi adalah "+ s);
}
function perkalian(a,b){
	let c = a * b;
	return c;
}

let d=eval(prompt("Masukkan nilai pertama: ", ""));
let e= eval(prompt("Masukkan nilai kedua: ", ""));

let f = perkalian(d,e);
alert("Hasilnya perkaliannya adalah "+ f);

function penjumlahan(y,z){
	let x = y + z;
	return x;
}
let g= eval(prompt("Masukkan nilai pertama: ", ""));
let h= eval(prompt("Masukkan nilai kedua: ", ""));

let i= penjumlahan(g,h);
let hasil = f + i;

akhir(i, hasil);
}

function rekursi(){
	function tampilnilai(n){
		if (n==0 || n == undefined)
		{
			return;
		}
		alert(n);
		return tampilnilai(n-1);
	}
	let n = eval(prompt("Masukkan nilai awal: ", ""));
	tampilnilai(n);
}

function inArray(){
	let count = 1;
	let Array1 =[];
	let a1 = eval(prompt("Masukkan jumlah baris: "));
	let a2 = eval(prompt("Masukkan jumlah kolom: "));

	for (let i=0; i<a1; i++){
  		let Array2 = [];
  		for (let j=0; j<a2; j++){
    		Array2.push(prompt("Masukkan data indeks ke-" + (i+1) + "," + (j+1) + ": "));
  		}
		Array1.push(Array2);
	}

	if (a1 != null && a1 != 0 && a2 != null && a2 != 0) {
		const place = document.getElementsByTagName("main")[0];
		const table = document.createElement("table");
		const space = document.createElement("br");
		table.setAttribute("border","1");
		table.setAttribute("cellpadding",5);
		table.setAttribute("cellspacing",0);
		place.appendChild(table);
		place.appendChild(space);

		for(i=0; i<a1; i++){
			let row = document.createElement("tr");
			for(j=0; j<a2; j++){
				var col = document.createElement("td");
				let isi = document.createTextNode(Array1[i][j]);
				col.appendChild(isi);
				row.appendChild(col);
			}
			table.appendChild(row);
		}
	}
}

function ubahwarnabatu(){
	gbrbatu.style.backgroundColor = "lightblue";
}
function ubahwarnagunting(){
	gbrgunting.style.backgroundColor = "lightblue";
}
function ubahwarnakertas(){
	gbrkertas.style.backgroundColor = "lightblue";
}

function batu(){
	gbrbatu.style.backgroundColor='blue';
	let comp = Math.random();
	if (comp <= 0.33){
		hasilgame.innerHTML="<h1><t>SERI!!!</h1>Komputer juga memilih Batu";
		game.appendChild(hasilgame);
	}
	else if (comp > 0.33 && comp <= 0.66){
		hasilgame.innerHTML="<h1><t>ANDA MENANG!!!</h1>Komputer memilih Gunting";
		game.appendChild(hasilgame);
	}
	else{
		hasilgame.innerHTML="<h1><t>ANDA KALAH!!!</h1>Komputer memilih kertas";
		game.appendChild(hasilgame);
	}
}
function gunting(){
	gbrgunting.style.backgroundColor='blue';
	let comp = Math.random();
	if (comp <= 0.33){
		hasilgame.innerHTML="<h1><t>ANDA KALAH!!!</h1>Komputer memilih Batu";
		game.appendChild(hasilgame);
	}
	else if (comp > 0.33 && comp <= 0.66){
		hasilgame.innerHTML="<h1><t>SERI!!!</h1>Komputer juga memilih Gunting";
		game.appendChild(hasilgame);
	}
	else{
		hasilgame.innerHTML="<h1><t>ANDA MENANG!!!</h1>Komputer memilih kertas";
		game.appendChild(hasilgame);
	}
}
function kertas(){
	gbrkertas.style.backgroundColor='blue';
	let comp = Math.random();
	if (comp <= 0.33){
		hasilgame.innerHTML="<h1><t>ANDA MENANG!!!</h1>Komputer memilih Batu";
		game.appendChild(hasilgame);
	}
	else if (comp > 0.33 && comp <= 0.66){
		hasilgame.innerHTML="<h1><t>ANDA KALAH!!!</h1>Komputer memilih Gunting";
		game.appendChild(hasilgame);
	}
	else{
		hasilgame.innerHTML="<h1><t>SERI!!!</h1>Komputer juga memilih kertas";
		game.appendChild(hasilgame);
	}
}
