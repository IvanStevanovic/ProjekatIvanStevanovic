<?php
include "../../common.inc";
$redni_br=$_GET['redni_br'];
$kolicina= $_POST['kolicina'];
$db_link=  db_connect();
$query= "update porudzbine set kolicina='$kolicina' where por_id='$redni_br'";
$result =  mysql_query($query);
header("Location: index1.php?Obavestenje=Uspesno ste promenili broj proizvoda!");
