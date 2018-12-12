const tombolInput = document.getElementById("ajax-input");
const container = document.querySelector("#container");
const kolomCari = document.getElementById("klmCari");
const hasilPencarian = document.querySelector("#kontenData");
const formInput = document.createElement("div");
let id;
function ubahData(id){
	const xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200) {	
			// const isi = document.createTextNode(xhr.responseText);
			formInput.innerHTML = this.responseText;
			container.appendChild(formInput);
		}
	}
	xhr.open('GET','ubahdata.php?id='+id,true);
	xhr.send();
}

tombolInput.addEventListener('click',function(){
	const xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200) {	
			// const isi = document.createTextNode(xhr.responseText);
			formInput.innerHTML = xhr.responseText;
			container.appendChild(formInput);
		}
	}
	xhr.open('GET','inputmhs.php',true);
	xhr.send();
})


kolomCari.addEventListener('keyup',function(){
	const xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			hasilPencarian.innerHTML = this.responseText;
		}
	}
	xhr.open('GET','livesearch.php?keyword='+kolomCari.value,true);
	xhr.send();
})
