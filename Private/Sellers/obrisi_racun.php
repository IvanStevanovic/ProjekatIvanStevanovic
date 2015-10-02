<?php
include "../../common.inc";
$db_link=  db_connect();
$brojracuna=$_GET['broj_racuna'];
$query="DELETE from porudzbine where broj='$brojracuna'";
$result=  mysql_query($query);
header("Location: pregled_narudzbenica.php?Obavestenje=Uspesno ste obrisali racun!");
