<?php
include "../common.inc";
session_start();
$korisnik=$_POST["Username"];
$lozinka= $_POST["Password"];
$db_link=db_connect();
$query="select * from clanovi where IDENTIFIKACIJA = '$korisnik' and LOZINKA='$lozinka'";
$result= mysql_query($query,$db_link);
$row_clanovi= mysql_fetch_array($result);
if($row_clanovi==null)
    {
    $pogresniPodaci = "Podaci su pogresno uneti ili niste registrovani!";
    header("Location: login.php?pogresniPodaci=$pogresniPodaci");
    }
    else
        {
        
        $_SESSION['id_korisnika'] = $row_clanovi["ID"];
        $_SESSION['tabela']= $row_clanovi["TABELA"];
        
        if($row_clanovi["TABELA"]=="Prodavac")
        {
            $link="./sellers/kontrolna_tabla.php";
            $_SESSION['homeSkript']="/ProjkatSeminarski/Private/Sellers/kontrolna_tabla.php";
        }
        else
            {
      $query7="select max(broj) from porudzbine";
      $result7=  mysql_query($query7);
      $row7=  mysql_fetch_array($result7);
      $broj=max($row7)+1;
      $_SESSION['broj_porudzbenice']=$broj;
            $link="../index.php";
            }
            header("Location: $link");
        }

