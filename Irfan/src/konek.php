<?php
    $host="localhost";  //diisi nama host apache
    $user="root";       //diisi username apache, default root
    $db="test";   //nama database yang anda buat

    $conn=mysql_connect($host,$user,"");
    mysql_select_db($db,$conn);
?>