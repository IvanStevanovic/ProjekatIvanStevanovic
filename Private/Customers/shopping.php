<?php
include "../../prijavljen.inc";
include "../../common.inc";
session_start();
if($_SESSION['id_korisnika'])//nije mi jasno zasto if naredba, po meni je nepotrebna jer je
    //predhodno u specifikacija.php odradjeno da pristupa shoppping.php stranici pod uslovom samo
    //ako je predhodno kupac loginova
    {
    session_start();
    $db_link=db_connect();
    $id_a=$_GET['id_a'];
    
    
    $id_korisnika=$_SESSION['id_korisnika'];//takodje sesija sa login1.php
    $kolicina=$_POST['kolicina'];
    $datum=date('Y-m-d');
    $query="select * from artikli where artikal_id='$id_a'";
    $result=  mysql_query($query,$db_link);
    $row=  mysql_fetch_array($result);
    $id_kategorije=$row['kategorija'];
   $bbroj=$_SESSION['broj_porudzbenice'];
    if($kolicina==null)
        $kolicina=1;
    $query2="insert into porudzbine(korisnik_id, artikal_id, kolicina, datum_n, broj, kategorija_id)
            VALUES('$id_korisnika','$id_a','$kolicina','$datum','$bbroj','$id_kategorije')";
    $result2= mysql_query($query2,$db_link);
    header("Location: index1.php?id_a=$id_a&kolicina=$kolicina");
    }
    else
        {
        header("Location: ../Login.php?id_a=$id_kategorija&kolicina=$kolicina");
        }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

