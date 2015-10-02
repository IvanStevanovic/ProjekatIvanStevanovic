<?php
include "../../common.inc";
$db_link=  db_connect();
$naziv=$_POST['naziv'];
$kategorija=$_POST['kategorija'];
$garancija=$_POST['garancija'];
$beleske=$_POST['beleske'];
$brkomada=$_POST['brkomada'];
$cena=$_POST['cena'];
$id_proizvoda=$_GET['id_proizvoda'];

/*if(file_exists("Artikli/".$_FILES['fls']['name']))
                {
        echo $_FILES['fls']['name']."allready exists.";
                }
                else
                    {
                    move_uploaded_file($_FILES['fls']['tmp_name'],"Artikli/".$_FILES['fls']['name']);
                    }*/
$linkm="./Private/Sellers/Artikli/".$_FILES["fls"]["name"];
if(move_uploaded_file($_FILES['fls']['tmp_name'],"Artikli/".$_FILES['fls']['name'])){
    
$query="update artikli set naziv='$naziv', cena='$cena',image_url='$linkm',kategorija='$kategorija',beleske='$beleske', za_prodaju='$brkomada',garancijab='$garancija' where artikal_id='$id_proizvoda'";
}
else
    {
    $query="update artikli set naziv='$naziv', cena='$cena',kategorija='$kategorija',beleske='$beleske', za_prodaju='$brkomada',garancijab='$garancija' where artikal_id='$id_proizvoda'";
    }
$result=  mysql_query($query);
header("Location: kontrolna_tabla.php?obavestenje=Uspesno ste obavili prmenu proizvoda!");