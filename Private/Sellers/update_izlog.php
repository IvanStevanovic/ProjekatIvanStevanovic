<?php
include "../../common.inc";
$db_link=  db_connect();
$query1="update artikli set IZLOG=0";
$result1=  mysql_query($query1);
foreach($_POST['checkbox']as $item)
    {
    $query="update artikli set IZLOG=1 where artikal_id='$item'";
    $result=  mysql_query($query);
    }
    header("Location: dodaj_izlog.php?obavestenje=Uspesno ste postavili proizvode u izlog!");