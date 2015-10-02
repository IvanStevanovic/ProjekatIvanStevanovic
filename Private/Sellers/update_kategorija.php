<?php
include "../../common.inc";
$db_link=  db_connect();
$kategorija=$_POST['kategorija'];
$query="insert into kategorije (KATEGORIJA) VALUES ('$kategorija')";
$result=  mysql_query($query);
header("Location: dodaj_kategoriju.php?Obavestenje=Uspesno ste dodali kategoriju!");