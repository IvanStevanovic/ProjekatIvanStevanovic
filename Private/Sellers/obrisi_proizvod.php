<?php
include "../../common.inc";
$id_proizvoda=$_GET['id_proizvoda'];
$db_link=db_connect();
$query="DELETE from artikli where artikal_id='$id_proizvoda'";
$result=  mysql_query($query);
$query2="DELETE from porudzbine where artikal_id='$id_proizvoda'";
$result2=  mysql_query($query2);
header("Location: kontrolna_tabla.php?obavestenje=Uspesno ste obrisali proizvod!");
?>

