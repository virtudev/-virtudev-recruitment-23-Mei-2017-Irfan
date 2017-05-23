<?php
	 include "konek.php"; //panggil file konek.php yang telah dibuat
 //mengambil variabel yang dikirim oleh formulir.php
 $nama=$_POST['nama'];
 $waktu=date('Y-m-d G:i:s');
 // $waktu=$_POST['watu'];

 $query="insert into request (`id`, `timestamp`, `string`) values('','$waktu','$nama')";
 $exe=mysql_query($query);
 echo"<a href='formulir.php'>Input Lagi</a></br>";
?>