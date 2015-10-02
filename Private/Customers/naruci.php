<?php
include "../../common.inc";
session_start();
$db_link=  db_connect();
$broj_porudzbenice=$_SESSION['broj_porudzbenice'];
$id_korisnika=$_SESSION['id_korisnika'];
$datum=date('Y-m-d');
$query="update porudzbine set uspesno=1 where korisnik_id='$id_korisnika' and datum_n='$datum' and broj='$broj_porudzbenice'";
$result=  mysql_query($query);
//query za brisanje porudzbina gde je uspesno=0?!?!
header("Location: narudzbenica_izlazna.php?obavestenje=Uspesno ste narucili proizvode!");
