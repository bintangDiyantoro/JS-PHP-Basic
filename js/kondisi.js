//#1 if-else - else if
document.write("<t>#Kondisi if - else if - else<br />");
document.write("<button onclick=\"logical()\">Klik untuk mencoba</button><br /><br />");

//#2 Switch
document.write("<t>#Kondisi switch<br />");
document.write("<button onclick=\"fswitch()\">Klik untuk mencoba</button><br /><br />");

//#3while do-while
document.write("<t>#Loop while - do while<br />");
let i = 0;
while(i<10)
{
	document.write("<c>" + i);
	i++;
}
document.write("<br />");
let j = 0;
do
{
	document.write("<c>" + j);
	j=j+2;
}
while(j<10)
document.write("<br /><br />");

// #4 loop for
document.write("<t>#loop for<br />");
for (let i = 0; i < 10; i=i+2)
{
	document.write("<c>" + i);
}
document.write("<br /><br />");

// #5 loop for dengan kendali break & continue
document.write("<t>#Kontrol loop while dengan break dan continue<br />");
document.write("<button onclick=\"controlbreakandcontinue()\">Klik untuk mencoba</button><br /><br />");

// Game bat gunting kertas
document.write("<t>#Game Batu Gunting Kertas <br /><br />");
document.write("<c>Pilih salah satu<br /><br />");
document.write("<span><c><img id=\"batu\" width=\"100px\" src=\"img/batu.png\"></img>  <img id=\"gunting\" width=\"100px\" src=\"img/gunting.png\"></img>  <img id=\"kertas\" width=\"100px\" src=\"img/kertas.png\"></img><span>");
const game = document.getElementsByTagName("main")[0];
const kontenGame = document.createElement("div");
const hasilgame = document.createElement("div");
hasilgame.classList.add("hasil");

const gbrbatu = document.getElementById("batu");
const gbrgunting = document.getElementById("gunting");
const gbrkertas = document.getElementById("kertas");

// kontenGame.appendChild(gbrbatu);
// kontenGame.appendChild(gbrgunting);
// kontenGame.appendChild(gbrkertas);
// kontenGame.style.padding='30px';
// game.appendChild(kontenGame);

gbrbatu.onmousedown = batu;
gbrbatu.onmouseover = ubahwarnabatu;
gbrbatu.addEventListener('mouseleave',function(){
	gbrbatu.style.backgroundColor ='transparent';
})
gbrbatu.addEventListener("mouseup",function(){
	gbrbatu.style.backgroundColor = "lightblue";
})

gbrgunting.onmousedown = gunting;
gbrgunting.onmouseover = ubahwarnagunting;
gbrgunting.addEventListener('mouseleave',function(){
	gbrgunting.style.backgroundColor ='transparent';
})
gbrgunting.addEventListener("mouseup",function(){
	gbrgunting.style.backgroundColor = "lightblue";
})

gbrkertas.onmousedown = kertas;
gbrkertas.onmouseover = ubahwarnakertas;
gbrkertas.addEventListener('mouseleave',function(){
	gbrkertas.style.backgroundColor ='transparent';
})
gbrkertas.addEventListener("mouseup",function(){
	gbrkertas.style.backgroundColor = "lightblue";
})

document.write("<br />");

let win = document.getElementsByTagName("body")[0];
win.setAttribute("onscroll","os()");