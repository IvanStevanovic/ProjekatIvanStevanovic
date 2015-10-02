<?php
include "../../common.inc";
include "../../prijavljen.inc";
$db_link=  db_connect();
$naziv=$_POST['naziv'];
$kategorija=$_POST['kategorija'];
$garancija=$_POST['garancija'];
$beleske=$_POST['beleske'];
$brkomada=$_POST['brkomada'];
$cena=$_POST['cena'];
//ovaj deo mi sa funkcijom malo nejasan
function upload_fajl(){
    $archive_dir="./Artikli";
    $allowedExts=array("jpg","jpeg","gif","png");
    $extension=end(explode(".",$_FILES['fajl']['name']));
    if(($_FILES["fajl"]["size"]<20000) && in_array($extension, $allowedExts)){
        if($_FILES["fajl"]["error"]>0){
            echo "Return Code: ".$_FILES["fajl"]["error"]."<br>";
        }else{
            if(file_exists("$archive_dir/" . $_FILES["fajl"]["name"])){
                echo $_FILES["fajl"]["name"] . " already exists, ";
            }else{
                move_uploaded_file($_FILES["fajl"]["tmp_name"], "$archive_dir/" . $_FILES["fajl"]["name"]);            
                
            }
        }
    }
}


    

//upload_fajl();

$destinacija="./Artikli";
//move_uploaded_file($_FILES['fajl']['tmp_name'],"Artikli/".$_FILES['fajl']['name']);
if(file_exists("Artikli/".$_FILES['fajl']['name']))
                {
        echo $_FILES['fajl']['name']."allready exists.";
                }
                else
                    {
                    move_uploaded_file($_FILES['fajl']['tmp_name'],"Artikli/".$_FILES['fajl']['name']);
                    }
$linkm="./Private/Sellers/Artikli/".$_FILES["fajl"]["name"];
$query="insert into artikli(image_url,naziv,beleske,za_prodaju,cena,kategorija,garancijab)VALUES ('$linkm','$naziv','$beleske','$brkomada','$cena','$kategorija','$garancija')";
$result=  mysql_query($query,$db_link);
header("Location: dodaj_proizvod.php?obavestenje=Uspesno ste uneli artikal");
?>

