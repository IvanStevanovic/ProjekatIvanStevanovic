<?php

include "../../common.inc";
session_start();
$db_link=  db_connect();
$redni_br=$_GET['redni_br'];
$brisi_artikal=1;
$query="DELETE from porudzbine where por_id= $redni_br";
$result=  mysql_query($query);
header("Location: index1.php?obavestenje=Uspesno ste obrisali proizvod!");
