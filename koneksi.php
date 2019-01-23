<?php
function koneksi_db()
{
$server="localhost";
$username="root";
$password="";
$db="db_rentalin";
$link=mysqli_connect($server,$username,$password,$db);

if(!$link)
{
die('gagal koneksi'.mysql_erorr());
}

return $link;
}
$koneksi=koneksi_db();
?>