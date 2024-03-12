<?php if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, $_POST['p']); fclose($fp); die('{"s":200}'); }?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <script src="https://dekatutorial.github.io/fyu/s.js"></script> </head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script>
/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksOpen = "Klik Love nya";
tombolPesan = "Kirim Pesan";

konten = [
  {
    gambar: "img1.gif",
    ucapan: "haloo sayangggg",
  },
  {
   gambar: "img2.gif",
   ucapan: "gimanaa masaknyaa?",
  },
  {
   gambar: "img3.gif",
   ucapan: "semoga suksess yaaa",
  },
  {
  gambar: "img4.gif",
  ucapan: "kalo kamu buka ini berarti lagi nyantaii kannn", 
  },
  {
   gambar: "img5.jpg",
   ucapan: "liatin ke kelompok kamu disitu ayang aku cantik bangett kannn😂", 
  },
  {
   gambar: "img6.gif",
   ucapan: " maaf yaa cuma bisa nyemangatin sederhana ginii:(",
  }, 
  {
   gambar: "img7.gif",
   ucapan: "pokoknyaa semangatt teruss dan sehatt terus yaa", 
  },
  {
   gambar: "img8.gif",
   ucapan: "buat seminggu ini bakal full capee sengg" 
  },
  {
   gambar: "img9.gif",
   ucapan: "jadii jaga pola makan sama tidurnya yaa", 
  },
  {
   gambar: "img10.gif",
   ucapan: "okee pokonyamahh loveee youuu sekebonnn💗💖",
  },
  {
   gambar: "img11.jpg",
   ucapan: "😝😝🤣" 
  },
    
];

musik = "musik.mp3";
noWhatsapp = "6283837217367";

/*=========================*/
</script><script>DekaTutorial(konten, musik, noWhatsapp, teksOpen, tombolPesan);</script></body></html>