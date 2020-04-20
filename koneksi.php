<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "WebBuku";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if($koneksi->connect_error) {
   echo "Gagal koneksi ke Server";
}
else {
?><script type="text/javascript">alert("Berhasil Koneksi Ke Server");</script>><?php
}
?>
