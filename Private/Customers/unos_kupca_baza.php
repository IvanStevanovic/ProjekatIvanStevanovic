<?php
include "../../prijavljen.inc";//moze i bez ovoga
include "../../common.inc";
$db_link=  db_connect();
$ime=$_POST['firstname'];
$prezime=$_POST['lastname'];
$jmbg=$_POST['jmbg'];
$user=$_POST['username'];
$adresa=$_POST['adresa'];
$pass=$_POST['pass'];
$query2="select * from clanovi where JMBG='$jmbg'";
$result2= mysql_query($query2,$db_link);
$row2=  mysql_fetch_array($result2);
if($row2)
    {
    $korisnikVecPostoji= "Podaci o korisniku su vec uneti";
    header("Location: unos_kupca.php?obavestenje=$korisnikVecPostoji");
    }
    else
        {
        $link="/ProjekatSeminarski/Private/Customers/index1.php";
        $query2="insert into CLANOVI(IDENTIFIKACIJA, LOZINKA, IME, PREZIME, JMBG, ADRESA, TABELA)
                VALUES('$user','$pass', '$ime', '$prezime', '$jmbg', '$adresa', 'kupac' )";
        $result2=  mysql_query($query2,$db_link);
        $link="../Login.php?obavestenje=Usepsno ste se registrovali!";
        header("Location:$link");
        }
