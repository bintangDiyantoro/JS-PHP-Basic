//nomor satu
let hasil1=5+4*12/4;
document.write("<t>#Operasi 5 + 4 * 12 / 4", "<br />");
document.write("<c>hasil= "+ hasil1, "<br /> <br />");

//nomor dua
document.writeln("<t>#Keutamaan dan asosiatifitas <br />");
let x=5+4*12/4;

document.writeln("<c>Hasil 5 + 4 * 12 / 4 adalah " + x + "<br />");
x = (5+4)*(12/4);
document.writeln("<c>Hasil (5 + 4) * (12 / 4) adalah "+ x +"<br /> <br />");

//nomor tiga
document.writeln("<t>#Operator aritmatik <br />");
let angka1 = 5;
let angka2 = 7;
let hasil = angka1+angka2;
document.writeln("<c>angka1 + angka2 = " + hasil +"<br />");
hasil=hasil+(10/2+5);
document.writeln("<c>12 + (10 / 2 + 5)= "+ hasil + "<br /> <br />");

//nomor empat
document.writeln("<t>#Penugasan pintas<br />");
let angka=10;
document.write("<c>Angka ditugasi " + 10 +"<br />");
angka +=2;
document.write("<c>Angka + = 2; angka menjadi " + angka + "<br />");
angka -=1;
document.write("<c>Angka - = 1; angka menjadi " + angka + "<br />");
angka *=3;
document.write("<c>Angka * = 3; angka menjadi " + angka + "<br />");
angka %=5;
document.write("<c>Angka % = 5; angka menjadi " + angka + "<br /><br />");

//nomor lima
document.writeln("<t>#Inkremen & Dekremen <br />");
x=5;
let y=0;
y=++x; //menambahkan 1 pada x terlebih dahulu; kemudian menugaskan pada y
document.write("<c>x = 5 & y = 0<br />Pra-inkremen y = ++ x, <br /> y menjadi: " + y + "<br />");
document.write("<c>x menjadi: " + x + "<br />");

x=5;
y=0;
y=x++; //menugaskan nilai x kepada y; kemudian 1 pada x
document.write("<c>Post-inkremen y = x ++, <br /> y menjadi: " + y + "<br />");
document.write("<c>x menjadi: " + x + "<br /><br />");

//nomor enam
document.write("<t>#Operator penyambungan<br />");
document.write("<c>\"maka\" + \"lah \" + \"27\" + 8 menjadi:<br />");
document.write("<c>maka" + "lah " + "27" + 8 + "<br /><br />" );

//nomor tujuh
document.write("<t>#Operator perbandingan<br />");
x=5;
y=4;
hasil = x > y;
document.write("<c>5 > 4 = " + hasil + "<br />");
hasil = x < y;
document.write("<c>5 < 4 = " + hasil + "<br />");
let buah1 = "pear";
let buah2 = "peaR";
hasil = buah1 > buah2;
document.write("<c>\"pear\" > \"peaR\" = " + hasil + "<br />");
hasil = buah1 < buah2;
document.write("<c>\"pear\" < \"peaR\" = " + hasil + "<br />");
hasil = buah1 === buah2;
document.write("<c>\"pear\" === \"peaR\" = " + hasil + "<br /><br />");

//nomor delapan
document.write("<t>#Operator logikal<br />");
document.write("<button onclick=\"logical()\">Klik untuk mencoba</button><br /><br />");

//nomor sembilan
document.write("<t>#Operator kondisional<br />");
document.write("<button onclick=\"kondisi()\">Klik untuk mencoba</button><br /><br />");

//nomor sepuluh
document.write("<t>#Operator bitwise<br />");

let coba= [["Desimal","Biner"],
[9,1001],
[8,1000],
[7,"0111"],
[6,"0110"],
[5,"0101"],
[4,"0100"],
[3,"0011"],
[2,"0010"],
[1,"0001"],
[0,"0000"]];

document.write("<c><table border=\"1\" cellpadding=\"5\" cellspacing=\"0\">");
for (let i=0; i < coba.length; i++)
{
	document.write("<c><tr>");
	for (let j=0; j < coba[i].length; j++) 
	{
		document.write("<c><td> " + coba[i][j] + "</td>");
	}
	document.write("<c></tr>");
}
document.write("<c></table>");

hasil=6&5;
document.write("<c><br>6 & 5 menghasilkan: " + hasil + "<br />");
hasil=7|6;
document.write("<c>7 | 6 menghasilkan: " + hasil + "<br />");
hasil=6^5;
document.write("<c>6 ^ 5 menghasilkan: " + hasil + "<br />");
hasil=9<<2;
document.write("<c>9 << 2 menghasilkan: " + hasil + "<br />");
hasil=9>>2;
document.write("<c>9 >> 2 menghasilkan: " + hasil + "<br />");
hasil=-9>>2;
document.write("<c>-9 >> 2 menghasilkan: " + hasil + "<br />");
hasil=10>>>2;
document.write("<c>10 >>> 2 menghasilkan: " + hasil + "<br /><br />");

//nomor sebelas
document.write("<t>#Konversi tipe data<br />");
document.write("<button onclick=\"konversi()\">Klik untuk mencoba</button><br /><br />");

//nomor dua belas
document.write("<t>#Fungsi parseInt()<br />");
document.write("<button onclick=\"fparseint()\">Klik untuk mencoba</button><br /><br />");

//nomor tiga belas
document.write("<t>#Fungsi parseFloat()<br />");
document.write("<button onclick=\"fparsefloat()\">Klik untuk mencoba</button><br /><br />");

//nomor empat belas
document.write("<t>#Fungsi eval()<br />");
document.write("<button onclick=\"feval()\">Klik untuk mencoba</button><br /><br />");

//ujian bab operator
document.write("<t>#Konverter celcius - fahrenheit<br />");
document.write("<button onclick=\"suhu()\">Klik untuk mencoba</button><br />");