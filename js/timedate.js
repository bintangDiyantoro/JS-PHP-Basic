document.write("<br /><iframe width=\"100%\" height=\"265\" scrolling=\"no\" frameborder=\"no\" src=\"https://www.reverbnation.com/widget_code/html_widget/artist_4176196?widget_id=55&pwc[included_songs]=1&context_type=page_object&spoid=artist_4176196&pwc[size]=small&pwc[color]=dark\" style=\"width:0px;min-width:100%;max-width:100%;\"></iframe>");
// 	
let sekarang = new Date();
document.write("<b><br>Waktu lokal: </b>" + sekarang + "<br />");
let jam=sekarang.getHours();
let menit=sekarang.getMinutes();
let detik=sekarang.getSeconds();
let tanggal=sekarang.getDate();
let bulan=sekarang.getMonth();
bulan=bulan+1;
let tahun=sekarang.getFullYear();
document.write("<b>Tanggal: </b>" + tanggal + " - "+ bulan + " - "+ tahun +"<br />");
document.write("<b>Waktu: </b>" + jam + ":" + menit + ":" + detik);